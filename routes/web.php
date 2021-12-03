<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;

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
    return view('index');
});


Route::get('login', [SessionController::class, 'login']);
Route::post('login', [SessionController::class, 'loginuser']);
Route::post('logout', [SessionController::class, 'logout']);

Route::get('register', [SessionController::class, 'register']);
Route::post('register', [SessionController::class, 'createuser']);

Route::get('dashboard', [SessionController::class, 'dashboard']);
