<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardProductContoller;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [LandingController::class, 'index'])->name('landing');

Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/{product:slug}', [ProductController::class, 'show']);

Route::post('/checkout', [OrderController::class, 'store'])->middleware('auth');


// categories
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{category:slug}', [CategoryController::class, 'show']);

// cart handler
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard/cart', [CartController::class, 'index'])->name('cart');
    Route::post('/cart/{product:id}', [CartController::class, 'store']);
    Route::delete('/dashboard/cart/{cart:id}', [CartController::class, 'destroy']);
});


// dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

// route handling product
Route::get('/dashboard/products/checkSlug', [DashboardProductContoller::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/products', DashboardProductContoller::class)->middleware('auth')->middleware('auth');

// route handling category
Route::get('/dashboard/categories/checkSlug', [DashboardCategoryController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/categories', DashboardCategoryController::class)->middleware('auth');
