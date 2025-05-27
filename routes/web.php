<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot-password');
Route::post('/forgot-password', [AuthController::class, 'sendResetLink'])->name('password.email');


Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/order-book', function () {
    return view('order-book');
})->name('order-book');

Route::get('/price', function () {
    return view('price');
})->name('price');


Route::get('/overview', function () {
    return view('overview');
})->name('overview');


Route::get('/insights', function () {
    return view('insights');
})->name('insights');

Route::get('/balance-sheet', function () {
    return view('balance-sheet');
})->name('balance-sheet');


Route::get('/profit-and-loss', function () {
    return view('profit-loss');
})->name('profit-and-loss');
