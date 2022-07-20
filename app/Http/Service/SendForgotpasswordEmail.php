<?php

namespace App\Http\Service;

use Session;
use Hash;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;
use App\Mail\Forgotpassword;

class SendForgotpasswordEmail
{
    /**
     * @param string $email
     * @return void
     */
    public function send(string $email, string $token) : void
    {
        Mail::to($email)->send(new Forgotpassword($email, $token, 'L2Euforia - Recuperar contraseña'));
    }
}
