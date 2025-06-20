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

Route::get('/register',[AuthController::class,'showRegister'])->name('register');
Route::post('register',[AuthController::class,'register']);

Route::get('/home', function() {
    return view('home');
})->name('home');
Route::get('/menus', [MenuController::class, 'show'])->name('menu');
Route::get('/reservation', [ReservationController::class, 'show'])->name('reservation');
Route::post('/reservation', [ReservationController::class, 'create']);

// INI PUNYA ADMIN 
Route::middleware(['role'])->group(function() {
    Route::get('/admin/menus', [MenuController::class, 'adminShow'])->name('admin.menus');
    Route::get('/admin/menus/create', [MenuController::class, 'createShow'])->name('admin.menus.create');
    Route::post('/admin/menus', [MenuController::class, 'store']);
    Route::get('/admin/menus/edit/{id}',[MenuController::class,'edit'])->name('admin.menus.edit');
    route::post('/admin/menus/update/{id}',[MenuController::class,'update'])->name('admin.menus.update');
    route::delete('/admin/menus/{id}', [MenuController::class, 'delete'])->name('admin.menus.delete');
    Route::get('/admin/reservation',[ReservationController::class,'show_admin'])->name('admin.reservation'); 
});


// ->middleware(['role' => 'admin'])