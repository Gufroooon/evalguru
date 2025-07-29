<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

// FORM LOGIN (GET)
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// PROSES LOGIN (POST)
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// HALAMAN SETELAH LOGIN
Route::get('/welcome', function () {
    return view('welcome');
})->middleware('auth')->name('welcome');
