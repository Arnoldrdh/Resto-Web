<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login',[AuthController::class,'showLogin'] )->name('login');
Route::post('login',[AuthController::class,'login']);

Route::get('/home', function() {
    return view('home');
})->name('home');

Route::get('/menu', [MenuController::class, 'show'])->name('menu');

Route::get('/reservation', [ReservationController::class, 'show'])->name('reservation');
Route::post('/reservation', [ReservationController::class, 'create']);