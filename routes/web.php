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
    return view('users.cadastrar');
});

Route::get('home', [UserController::class, 'home'])->name('home');
Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');
Route::post('/create', [UserController::class, 'store'])->name('user.store');
