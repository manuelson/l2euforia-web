<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;
use GuzzleHttp\Client;
use App\Http\Service\SendForgotpasswordEmail;
use Illuminate\Support\Facades\Password;
use App\Http\Service\Api\Connection;

class AdminController extends Controller
{
    /**
     * @var SendForgotpasswordEmail
     */
    private $sendForgotpasswordEmail;

    /**
     * @var Connection
     */
    private $connection;

    /**
     * @param SendForgotpasswordEmail $sendForgotpasswordEmail
     * @param Connection $connection
     */
    public function __construct(
        SendForgotpasswordEmail $sendForgotpasswordEmail,
        Connection $connection
    ) {
        $this->sendForgotpasswordEmail = $sendForgotpasswordEmail;
        $this->connection = $connection;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function items(Request $request)
    {
        $response = $this->connection->execute(
            'api/items',
            [
                'page' => $request->page,
                'owner_id' => $request->owner_id,
                'type' =>  $request->type
            ]
        );
        $items = [];
        if (isset($response['message'])) {
            $data =  $response['message'];
            foreach ($data as $item) {
                if ($result = $this->getItemDataById($item['item_id'])) {
                    $items[] = $result;
                }
            }
        }

        return view('pages.admin.items')->with('items', $items);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function charList(Request $request)
    {
        $response = $this->connection->execute(
            'api/characters-list',
            []
        );

        return view('pages.admin.chars')->with('chars', $response);
    }

    private function getItemDataById(int $searchId)
    {
        $xmls = glob(resource_path().'/items/*.{xml}', GLOB_BRACE);
        $result = [];
        $gradeSearch = "crystal_type";

        foreach ($xmls as $xml) {
            $xml = simplexml_load_file($xml);
            $item = $xml->xpath('item[@id="'.$searchId.'"]');

            if (count($item) > 0) {
                $type = $item[0]->xpath('set[@name="'.$gradeSearch.'"]');
                $icon = $item[0]->xpath('set[@name="icon"]');
                $icon =  str_replace('icon.', '', $icon[0]['val'][0]);
                $icon =  str_replace('BranchSys2.', '', $icon);

                $grade =  'No-grade';
                if (isset($type[0]['val'][0])) {
                   $grade = $type[0]['val'][0];
                }

                return [
                    'item' => [
                        'id' => (string)$item[0]->attributes()->id[0],
                        'name' => (string)$item[0]->attributes()->name[0]
                    ],
                    'grade' => $grade,
                    'icon' => $icon
                ];
                break;
            }
        }
    }
}