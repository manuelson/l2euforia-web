<?php

namespace App\Http\Controllers;

use App\Http\Service\Api\Connection;
use Session;
use Hash;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        $response = $this->connection->execute(
            'api/news',
            [
                'page' => 1,
            ]
        );

        return view('pages.home', $response);
    }
}
