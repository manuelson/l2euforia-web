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

class AuthController extends Controller
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
    public function registration()
    {
        return view('pages.register');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function download()
    {
        return view('pages.download');
    }

    public function forgotpassword()
    {
        return view('pages.forgotpassword');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function login()
    {
        return view('pages.login');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout(Request $request)
    {
        $request->session()->remove('authenticated');
        $request->session()->remove('access_token');
        $request->session()->remove('email');

        return redirect("")->withSuccess('Te has deslogueado correctamente.');
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $response = $this->connection->execute(
            'api/login',
            [
                'email' => $request->email,
                'password' => $request->password
            ]
        );
        if ((bool)$response['error'] === true ) {
            return redirect()->back()->withErrors($response['message']);
        }

        if ((bool)$response['error'] === false ) {
            // Authenticate successful
            $request->session()->put('authenticated', time());
            $request->session()->put('access_token', $response['access_token']);
            $request->session()->put('email', $request->email);
        }

        return redirect("")->withSuccess('Logueado correctamente.');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|void
     */
    public function postForgotpassword(Request $request)
    {
        try {
            $this->validate(
                $request,
                ['email' => 'required|email']
            );

            $data = $request->all();

            $response = $this->connection->execute(
                'api/exist-user',
                [
                    'email' => $data['email'],
                ]
            );

            if ((bool)$response['error'] === true ) {
                return redirect()->back()->withErrors($response['message']);
            }

            $this->sendForgotpasswordEmail->send($data['email'], $response['message']['fp_token']);

            return redirect()->back()->with('success', 'Se ha enviado un correo electronico.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

    public function recoveryPassword(Request $request)
    {

        try {
            $this->validate(
                $request,
                [
                    'tokenId' => 'required'
                ]
            );

            $response = $this->connection->execute(
                'api/fg-check-token',
                ['token' => $request->tokenId]
            );

            if ((bool)$response['error'] === true ) {
                throw new \Exception();
            }

            return view('pages.recoverypassword');

        } catch (\Exception $e) {
            return redirect('forgotpassword')->withErrors('El link ha expirado');
        }

    }

    public function postRecoveryPassword(Request $request)
    {
        $this->validate(
            $request,
            [
                'password' => 'required|min:6|required_with:l2password2|same:repeatpassword',
                'repeatpassword' => '',
                'tokenId' => 'required'
            ]
        );

        $response = $this->connection->execute(
            'api/fg-change-password',
            [
                'token' => $request->tokenId,
                'password' => $request->password,
            ]
        );

        if ((bool)$response['error'] === true ) {
            return redirect('forgotpassword')->withErrors($response['message']);
        }

        return redirect('login')->with('success', $response['message']);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request)
    {
        try {
            $this->validate(
                $request,
                [
                    'l2account' => 'required',
                    'l2email' => 'required|email',
                    'l2password1' => 'required|min:6|required_with:l2password2|same:l2password2',
                    'l2password2' => ''
                ],
                [
                    'l2account.required' => 'El campo username es obligatorio',
                    'l2email.required' => 'El campo email es obligatorio',
                    'l2email.email' => 'Debes poner un email valido',
                ]
            );

            $data = $request->all();

            $response = $this->connection->execute(
                'api/register',
                [
                    'login' => $data['l2account'],
                    'email' => $data['l2email'],
                    'password' => $data['l2password1'],
                    'password_confirmation' => $data['l2password2']
                ],
                false
            );

            if ((bool)$response['error'] === true ) {
                return redirect()->back()->withErrors($response['message']);
            }

            return redirect()->back()->with('success', $response['message']);

        } catch (\Exception $e) {
            if ($e->validator->fails()) {
                return redirect()->back()->withErrors($e->validator);
            }
            return redirect()->back()->withErrors($e->getMessage());

        }
    }

}
