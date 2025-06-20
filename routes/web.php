<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/show', function () {
    return view('products.index');
});

Route::post('/store', [MenuController::class, 'store']);


