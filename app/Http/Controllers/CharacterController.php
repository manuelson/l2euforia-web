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
                    $response['message'][$idx]['classid'] = $this->getItemDataById($chars['classid']);
                    $response['message'][$idx]['nobless'] = $chars['nobless'] ? 'Yes' : 'false';
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
