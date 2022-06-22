<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;

Route::controller(ProductController::class)->group(function(){
    Route::get('/product', 'index');
    Route::get('/landing/product', 'landing');
    Route::get('/product/{slug}', 'show');
});
