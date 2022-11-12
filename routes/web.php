<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/', fn () => dd('admin ui'))->name('web.home');

Route::middleware('auth')->namespace('Admin')->prefix('admin')->group(function () {
    Route::get('/', fn () => dd('admin ui'))->name('admin.dashboard');
});

// Auth Routes
Route::get('/login', [ LoginController::class, 'form' ])->name('auth.login.form');
Route::post('/login', [ LoginController::class, 'login' ])->name('auth.login');
Route::post('/logout', [ LoginController::class, 'logout' ])->name('auth.logout');
