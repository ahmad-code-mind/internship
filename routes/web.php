<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureTokenIsValid;


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


Route::get("/", function(){
    return view("dashboard");
})->middleware('auth')->name('dashboard');

/*******************************Login***************************/
Route::get('/login', [LoginController::class, 'index'])->name("login");
Route::post('/login',[LoginController::class, 'login'])->name("login.users");
/*******************************End Login***************************/

/*******************************Register***************************/
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register',[RegisterController::class, 'store'])->name('register.users');
/*******************************End Register***************************/

/*******************************Register***************************/
Route::get('logout', [LoginController::class, 'logOut'])->name('logout');
/*******************************End Register***************************/