<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReservationController;
use App\Models\Menu;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// INI FUNCTION PUNYA USER
Route::get('/login',[AuthController::class,'showLogin'] )->name('login');
Route::post('login',[AuthController::class,'login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/home', function() {
    return view('home');
})->name('home');
Route::get('/menus', [MenuController::class, 'show'])->name('menu');
Route::get('/reservation', [ReservationController::class, 'show'])->name('reservation');
Route::post('/reservation', [ReservationController::class, 'create']);


// INI PUNYA ADMIN 
// Ini /admin itu liat list makanan
Route::get('/admin',[MenuController::class,'index'])->name('admin');
//post makanan
route::get('/create_menu',[MenuController::class,'create'])->name('admin.menus.create');
Route::post('/post_menu', [MenuController::class,'store'])->name('post_menu');


// ->middleware(['role' => 'admin'])