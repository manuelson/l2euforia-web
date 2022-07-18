<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;
use GuzzleHttp\Client;

class AuthController extends Controller
{
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

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('You have Successfully loggedin');
        }

        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
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

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
