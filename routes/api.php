<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SliderController;
use App\Http\Controllers\Api\ProductController;

Route::controller(AuthController::class)->group(function(){
    Route::post('/register', 'register');
    Route::post('/login', 'login');
    Route::get('/user', 'getUser');
});

Route::controller(ProductController::class)->group(function(){
    Route::get('/product', 'index');
    Route::get('/landing/product', 'landing');
    Route::get('/product/{slug}', 'show');
});

Route::controller(CategoryController::class)->group(function(){
    Route::get('/landing/category', 'landing');
});

Route::get('/slider', [SliderController::class, 'landing']);
