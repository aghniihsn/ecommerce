<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\BannerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'middleware' => 'api',
], function(){
    Route::post('login-admin', [AuthController::class, 'login'])-> name('login');
    Route::post('register', [AuthController::class, 'register'])-> name('register');
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('logout-admin', [AuthController::class, 'logout']);
});

Route::group([
    'middleware' => 'api',
], function(){
    Route::resources([
       'categories' => CategoryController::class,
       'sliders' => SliderController::class,
       'products' => ProductController::class,
       'reviews' => ReviewController::class,
       'orders' => OrderController::class,
       'banner' => BannerController::class,

    ]);

    Route::get('order/dikonfirmasi', [OrderController::class, 'dikonfirmasi']);
    Route::get('order/dikemas', [OrderController::class, 'dikemas']);
    Route::get('order/dikirim', [OrderController::class, 'dikirim']);
    Route::get('order/diterima', [OrderController::class, 'diterima']);
    Route::get('order/selesai', [OrderController::class, 'selesai']);
    Route::post('order/ubah_status/{order}', [OrderController::class, 'ubah_status']);

    Route::get('reports', [ReportController::class, 'index']);

    Route::post('login', [AuthController::class, 'login']);
});


