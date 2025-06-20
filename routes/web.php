<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/menu', [MenuController::class, 'show'])->name('menu');

Route::get('/reservation', [Reservation::class, 'show'])->name('reservation');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');