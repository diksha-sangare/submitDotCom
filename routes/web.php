<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\Controller;

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

Route::get('/',[Controller::class,'index']);

Route::get('login',[SessionController::class,'login'])->middleware('guest');
Route::post('login',[SessionController::class,'loginuser'])->middleware('guest');
Route::post('logout', [SessionController::class, 'logout']);

Route::get('register', [SessionController::class, 'register']);
Route::post('register', [SessionController::class, 'createuser']);

Route::get('dashboard',[SessionController::class,'dashboard']);

Route::get('publication',[PublicationController::class,'publication']);
Route::post('publication',[PublicationController::class,'addPublication']);
Route::get('publicationDetails',[PublicationController::class,'publicationDetails']);
Route::delete('publication',[PublicationController::class,'deletePublication']);
