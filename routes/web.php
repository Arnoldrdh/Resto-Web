<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login',[AuthController::class,'showLogin'] )->name('login');
Route::post('login',[AuthController::class,'login']);

Route::get('/reservation', [ReservationController::class, 'show'])->name('reservation');