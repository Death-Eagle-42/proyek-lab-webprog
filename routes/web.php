<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/login', [AuthController::class, 'index']);

Route::post('/loginAction', [AuthController::class, 'loginAction']);

Route::get('/regis', [AuthController::class, 'regis']);

Route::post('/regisAction', [AuthController::class, 'regisAction']);

Route::get('/logout', [AuthController::class, 'logout']);
