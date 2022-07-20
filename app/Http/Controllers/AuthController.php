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

class AuthController extends Controller
{
    /**
     * @var SendForgotpasswordEmail
     */
    private $sendForgotpasswordEmail;

    /**
     * @param SendForgotpasswordEmail $sendForgotpasswordEmail
     */
    public function __construct(
        SendForgotpasswordEmail $sendForgotpasswordEmail
    ) {
        $this->sendForgotpasswordEmail = $sendForgotpasswordEmail;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('auth.login');
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

        $client = new Client([
            'base_uri' => env('API_URL'),
            'headers' => ['Content-Type' => 'application/json'],
            'http_errors' => false
        ]);

        $response = $client->post('/api/login', ['body' => json_encode([
            'email' => $request->email,
            'password' => $request->password
        ])]);

        $statusCode = $response->getStatusCode();
        $respuestaJson = json_decode($response->getBody());

        if ($statusCode == 200) {
            if ((bool)$respuestaJson->error == true) {
                return redirect()->back()->withErrors($respuestaJson->message);
            }
            // Authenticate there
            $request->session()->put('authenticated', time());
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

            $client = new Client([
                'base_uri' => env('API_URL'),
                'headers' => ['Content-Type' => 'application/json'],
                'http_errors' => false
            ]);

            $response = $client->post('/api/exist-user', ['body' => json_encode([
                'email' => $data['email'],
            ])]);

            $statusCode = $response->getStatusCode();
            $respuestaJson = json_decode($response->getBody());

            switch ($statusCode) {
                case 200:
                    if ((bool)$respuestaJson->message == false) {
                        return redirect()->back()->withErrors('El email no existe');
                    }

                    $this->sendForgotpasswordEmail->send($data['email'], $respuestaJson->message->fp_token);
                    break;
                case 500:
                    $success = 'Ha habido un problema con el registro, intentelo de nuevo mas tarde o contacte con un administrador.';
                    break;
            }

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

            $client = new Client([
                'base_uri' => env('API_URL'),
                'headers' => ['Content-Type' => 'application/json'],
                'http_errors' => false
            ]);

            $response = $client->post('/api/fg-check-token', ['body' => json_encode([
                'token' => $request->tokenId
            ])]);

            $statusCode = $response->getStatusCode();
            $respuestaJson = json_decode($response->getBody());

            switch ($statusCode) {
                case 200:
                    echo "OK";
                    if ((bool)$respuestaJson->error == true) {
                        throw new \Exception();
                    }
                    return view('pages.recoverypassword');
                    break;
                case 500:
                    throw new \Exception();
                    break;
            }

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

        $client = new Client([
            'base_uri' => env('API_URL'),
            'headers' => ['Content-Type' => 'application/json'],
            'http_errors' => false
        ]);

        $response = $client->post('/api/fg-change-password', ['body' => json_encode([
            'token' => $request->tokenId,
            'password' => $request->password,
        ])]);

        $statusCode = $response->getStatusCode();
        $respuestaJson = json_decode($response->getBody());

        switch ($statusCode) {
            case 200:
                echo "OK";
                if ((bool)$respuestaJson->error == true) {
                    return redirect('forgotpassword')->withErrors($respuestaJson->message);
                }
                $success = 'Se ha cambiado la contraseña correctamente.';
                break;
            case 500:
                echo "OK2";
                $success = 'Ha habido un problema con el registro, intentelo de nuevo mas tarde o contacte con un administrador.';
                break;
        }

        return redirect('login')->with('success', $success);
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
                ]
            );

            $data = $request->all();
            // $check = $this->create($data);

            $client = new Client([
                'base_uri' => env('API_URL'),
                'headers' => ['Content-Type' => 'application/json'],
                'http_errors' => false
            ]);
            $response = $client->post('/api/register', ['body' => json_encode([
                'login' => $data['l2account'],
                'email' => $data['l2email'],
                'password' => $data['l2password1'],
                'password_confirmation' => $data['l2password2']
            ])]);
            $statusCode = $response->getStatusCode();
            $respuestaJson = json_decode($response->getBody());
            $success = null;
            switch ($statusCode) {
                case 422:
                    $loginRespuesta = null;
                    $emailRespuesta = null;
                    $passwordsRespuesta = null;
                    if (isset($respuestaJson->login)) {
                        $loginRespuesta = $respuestaJson->login[0];
                    }
                    if (isset($respuestaJson->email)) {
                        $emailRespuesta = $respuestaJson->email[0];
                    }
                    if (isset($respuestaJson->password)) {
                        foreach ($respuestaJson->password as $passwordRespuesta) {
                            $passwordsRespuesta .= $passwordRespuesta;
                        }
                    }
                    $success = $loginRespuesta . " " . $emailRespuesta . " " . $passwordsRespuesta;
                    break;

                case 200:
                    $success = $respuestaJson->message;
                    break;
                case 500:
                    $success = 'Ha habido un problema con el registro, intentelo de nuevo mas tarde o contacte con un administrador.';
                    break;
            }

            return redirect()->back()->with('success', $success);
        } catch (\Exception $e) {
            if ($e->validator->fails()) {
                return redirect()->back()->withErrors($e->validator);
            }
            $e->getMessage();
        }
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }
}
