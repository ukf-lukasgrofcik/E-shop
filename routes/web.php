<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotController;
use App\Http\Controllers\Auth\ResetController;

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

Route::get('/', fn () => dd('guest ui'))->name('web.home');
// contact, gdpr
// catalogue

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [ DashboardController::class, 'index' ])->name('dashboard.index');
    // users
    // items, tags
    // orders
});

// Auth Routes
Route::get('/register', [ RegisterController::class, 'form' ])->name('register');
Route::post('/register', [ RegisterController::class, 'register' ]);

Route::get('/login', [ LoginController::class, 'form' ])->name('login');
Route::post('/login', [ LoginController::class, 'login' ]);
Route::post('/logout', [ LoginController::class, 'logout' ])->name('logout');

Route::get('/forgot-password', [ ForgotController::class, 'form' ])->name('password.forgot');
Route::post('/forgot-password', [ ForgotController::class, 'send' ]);
Route::get('/forgot-password/sent', [ ForgotController::class, 'sent' ])->name('password.sent');

Route::get('/reset-password', [ ResetController::class, 'form' ])->name('password.reset');
Route::post('/reset-password', [ ResetController::class, 'reset' ]);
Route::get('/reset-password/after', [ ResetController::class, 'after' ])->name('password.reset.after');
