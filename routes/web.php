<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\TeamsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\NewsController;


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
    return view('welcome');
});


Route::get('/teams', [TeamsController::class, 'index']);
Route::get('/teams/{id}', [TeamsController::class, 'show'])->name('single-team');

Route::get('players/{id}', [PlayersController::class, 'show'])->name('single-player');

// ruta za dobavljanje forme za registracij
Route::get('/register', [RegisterController::class, 'create']);
// ruta za submitovanje registracije
Route::post('/register', [RegisterController::class, 'store']);
// ruta za logout
Route::get('/logout', [LogoutController::class, 'destroy']);

// ruta za dobavljanje forme za login
Route::get('/login', [LoginController::class, 'create'])->name('login');
// ruta za submitovanje login-a
Route::post('/login', [LoginController::class, 'store']);

// ruta za komentare
Route::post('/teams/{id}/comments', [CommentsController::class, 'store'])->middleware('words');


// ruta za validaciju

Route::get('/users/{id}', [RegisterController::class, 'update']);

Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/{id}', [NewsController::class, 'show']);