<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('index');

Route::middleware('guest')->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::get('/register', 'register')->name('register');

        Route::post('/login', 'authenticate')->name('authenticate');
        Route::post('/register', 'newUser')->name('newUser');
    });
});

Route::middleware('auth')->group(function () {
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::middleware('role:admin')->group(function () {
        Route::resource('/subjects', SubjectController::class)->except(['show', 'index']);
    });
    Route::resource('/subjects', SubjectController::class)->only('show');
    Route::get('/level/{level}', [SubjectController::class, 'level'])->name('level');
    Route::get('/subject/{subject}', [SubjectController::class, 'subject'])->name('subject');
});
