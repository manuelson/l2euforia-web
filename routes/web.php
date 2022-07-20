<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CharacterController;
use App\Http\Middleware\CustomAuth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => ['web', CustomAuth::class]], function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('profile', [CharacterController::class, 'profile'])->name('profile');

});

Route::get('/', function () {
    return view('pages.home');
});
Route::get('login', [AuthController::class, 'login'])->name('login');

Route::get('registro', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');

Route::get('forgotpassword', [AuthController::class, 'forgotpassword'])->name('forgotpassword');
Route::post('post-forgotpassword', [AuthController::class, 'postForgotpassword'])->name('forgotpassword.post');

Route::get('recoveryPassword', [AuthController::class, 'recoveryPassword'])->name('recovery.post');
Route::post('post-recoverypassword', [AuthController::class, 'postRecoveryPassword'])->name('postRecoveryPassword.post');

Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');

Route::get('donate', [CharacterController::class, 'donate'])->name('donate');


