<?php

namespace App\Http\Controllers;

use App\Http\Service\Api\Connection;
use Session;
use Hash;
use Illuminate\Http\Request;

class NewsController extends Controller
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
     * @param $lang
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getlist(Request $request)
    {
        $request->validate([
            'page' => 'required|int',
        ]);

        $response = $this->connection->execute(
            'api/news/getlist',
            [
                'page' => $request->page,
            ]
        );

        if ((bool)$response['error'] === true ) {
            return redirect()->back()->withErrors($response['message']);
        }
    }
}
