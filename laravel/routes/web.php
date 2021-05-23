<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
    return view('login');
});
Route::get('/Login', function () {
    return view('login');
});

Route::get('/Quiz', function () {
    $persen=null;
    return view('quiz' , compact("persen"));
});
Route::post('/QuizAction', [UserController::class, 'quiz']);

Route::get('/Dashboard', function () {
    return view('dashboard');
});
Route::get('/Profile', [UserController::class, 'profile']);
Route::get('/UpdateProfile', [UserController::class, 'updateprofile']);
Route::post('/UpdateUserAction/{userId}',[UserController::class, 'updateUserAction']);

Route::get('/Register', function () {
    return view('register');
});
Route::post('/RegisterAction', [UserController::class, 'register']);

Route::post('/LoginAction', [UserController::class, 'login']);
Route::get('/Logout', [UserController::class, 'logout']);