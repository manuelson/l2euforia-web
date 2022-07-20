<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/', function () {
    return view('pages.home');
});

Route::get('registro', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('test', [\App\Http\Controllers\TestController::class, 'test'])->name('test.test');

Route::get('forgotpassword', [AuthController::class, 'forgotpassword'])->name('forgotpassword');
Route::post('post-forgotpassword', [AuthController::class, 'postForgotpassword'])->name('forgotpassword.post');

Route::get('recoveryPassword', [AuthController::class, 'recoveryPassword'])->name('recovery.post');
Route::post('post-recoverypassword', [AuthController::class, 'postRecoveryPassword'])->name('postRecoveryPassword.post');

Route::get('login', [AuthController::class, 'login'])->name('login');


