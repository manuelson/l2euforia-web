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

class CharacterController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function profile()
    {
        return view('pages.user.profile');
    }

    public function donate()
    {
        return view('pages.user.donate');

    }
}
