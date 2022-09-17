<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Service\Api\Connection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;
use GuzzleHttp\Client;
use App\Http\Service\SendForgotpasswordEmail;
use Illuminate\Support\Facades\Password;

class CharacterController extends Controller
{

    /**
     * @var Connection
     */
    private $connection;

    /**
     * @param Connection $connection
     */
    public function __construct(
        Connection $connection
    ) {
        $this->connection = $connection;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function profile(Request $request)
    {
        try {
            $response = $this->connection->execute(
                'api/characters-user',
                [
                    'username' => $request->session()->get('username'),
                ],
                $request->session()->get('access_token')
            );


            if ((bool)$response['error'] === true) {
                throw new \Exception();
            }

            if (isset($response['message'])) {
                foreach ($response['message'] as $idx => $chars) {


                    $tokens = $this->connection->execute(
                        'api/getTokens',
                        [
                            'charId' => $chars['charId'],
                        ],
                        $request->session()->get('access_token')
                    );

                    $response['message'][$idx]['tokens'] = $tokens['message'];
                    $response['message'][$idx]['classid'] = $this->getItemDataById($chars['classid']);
                    $response['message'][$idx]['sex'] = $chars['sex'] ? trans('messages.female') : trans('messages.male');
                    $response['message'][$idx]['nobless'] = $chars['nobless'] ? trans('messages.yes') : trans('messages.no');
                    $response['message'][$idx]['lastAccess'] = date('d-m-Y H:i:s', (int)$chars['lastAccess']/1000);
                }
            }

            return view('pages.user.profile')->with('chars', $response);
        } catch (\Exception $e) {
            return redirect('pages.user.profile')->withErrors('Error on page');
        }
    }

    public function donate()
    {
        return view('pages.user.donate');

    }

    /**
     * @param string $userName
     * @param string $token
     * @return bool
     */
    private function isAllowed(string $userName, string $token, int $search) : bool
    {
        try {
            $response = $this->connection->execute(
                'api/characters-user',
                ['username' => $userName],
                $token
            );

            if ((bool)$response['error'] === true) {
                return false;
            }

            if (isset($response['message'])) {
                foreach ($response['message'] as $chars) {
                    $charIds[] = $chars['charId'];
                 }
            }

            if (in_array($search, $charIds)) {
                return true;
            }

            return false;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function premium(Request $request)
    {

        try {
            // prevent hacking
            $allowed = $this->isAllowed(
                $request->session()->get('username'),
                $request->session()->get('access_token'),
                (int)$request->userId
            );

            if (!$allowed) {
                return redirect('/profile')->withSuccess('Not allowed');

            }

            // Check if have tokens and count
            $response = $this->connection->execute(
                'api/searchItems',
                [
                    'userId' => $request->userId,
                    'itemId' => '60009' // euforia token
                ],
                $request->session()->get('access_token')
            );

            if ((bool)$response['error'] === true) {
                throw new \Exception();
            }

            if (!$request->type) {
                return redirect()->back()->withErrors('select the premium exchange rate you need');

            }
            if (isset($response['message']) && isset($response['message']['tokens']) ) {
                switch ($request->type) {
                    case 'sex':
                        if ($response['message']['tokens'] < 5) {
                            return redirect()->back()->withErrors('You have no available tokens in inventory. Need 5 tokens');
                        }
                        $this->changeSex(
                            $request->userId,
                            $request->session()->get('username'),
                            $request->session()->get('access_token')
                        );
                        return redirect()->back()->with('success', 'Sex changed successfull. Please reconnect into server.');
                        break;
                    case 'nobles':
                        if ($response['message']['tokens'] < 10) {
                            return redirect()->back()->withErrors('You have no available tokens in inventory. Need 10 tokens');
                        }
                        $this->addNobless($request->userId, $request->session()->get('access_token'));
                        return redirect()->back()->with('success', 'Nobless adding successfull');
                        break;
                    case 'name':
                        if ($response['message']['tokens'] < 10) {
                            return redirect()->back()->withErrors('You have no available tokens in inventory. Need 10 tokens');
                        }
                        return view('pages.premium.name');
                        break;
                    /*case 'class':
                        if ($response['message']['tokens'] < 20) {
                            return redirect()->back()->withErrors('You have no available tokens in inventory. Need 20 tokens');
                        }

                        return view('pages.premium.class')->with('class', $classes);
                        break;
                    */
                    default:
                        return redirect()->back()->withErrors('An error ocurred');
                        break;
                }
            }

            return redirect()->back()->withErrors('You have no available tokens in inventory');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Error on page');
        }
    }

    /**
     * @param int $userId
     * @param string $token
     * @return bool
     */
    private function changeSex(int $userId,string $username, string $token) :bool
    {
        try {
            $response = $this->connection->execute(
                'api/changeSex',
                [
                    'userId' => $userId,
                    'username' => $username
                ],
                $token
            );

            if ((bool)$response['error'] === true) {
                throw new \Exception();
            }

            if (isset($response['message'])) {
               return true;
            }

            return false;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function changeNickname(Request $request)
    {
        $request->validate([
            'nickname' => 'required'
        ]);

        $response = $this->connection->execute(
            'api/changeNickname',
            [
                'nickname' => $request->nickname,
                'original_username' =>  $request->original_username,
                'account' => $request->session()->get('username'),
            ],
            $request->session()->get('access_token')

        );
        if ((bool)$response['error'] === true ) {
            return redirect()->back()->withErrors($response['message']);
        }

        return redirect('/profile')->withSuccess('Nickname change success. Please reconnect into server.');

    }

    private function getItemDataById(int $searchId)
    {
        $xml = resource_path().'/class/classList.xml';
        $xml = simplexml_load_file($xml);

        $item = $xml->xpath('class[@classId="'.$searchId.'"]');

        if (count($item) > 0) {
            return (string)$item[0]->attributes()->name[0];
        }
    }
}
