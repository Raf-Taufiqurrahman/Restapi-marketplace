<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth' ], function(){
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::resource('/category', CategoryController::class)->only('index', 'store', 'update', 'destroy');
    Route::resource('/product', ProductController::class);
    Route::resource('/coupon', CouponController::class)->only('index', 'store', 'destroy');
});
