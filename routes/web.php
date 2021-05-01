<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\Auth\LoginController;
use App\Http\Controllers\HomeController;

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
Route::prefix('admin')->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('Showlogin')->middleware('guest');
    Route::Post('/login', [LoginController::class, 'login'])->name('login')->middleware('auth');
    Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');;
});
Route::get('/', function () {
    return view('w');
});
