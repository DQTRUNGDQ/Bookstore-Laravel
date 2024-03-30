<?php


use Illuminate\Support\Facades\Route;
use App\http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\CartController;

/** FRONTEND */

use App\Http\Controllers\Frontend\HomepageController;
use App\hTTP\Controllers\Frontend\ShowProductController;


Route::get('/', function(){
    return view('welcome');
});



// BACKEND ROUTES
Route::get('homepage', [AuthController::class, 'homepage'])->name('auth.homepage')
->middleware('login');

Route::get('product/{id}', [AuthController::class, 'product'])->name('product.show')
->middleware('login');

Route::get('dashboard/index', [DashboardController::class, 'index'])->name
('dashboard.index')->middleware('admin');

Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::post('login', [AuthController::class, 'login'])->name('auth.login');

/* USER */
Route::get('user/index', [UserController::class, 'index'])->name
('user.index')->middleware('admin');

/** FRONTEND ROUTES */

// Trang chủ
Route::get('homepage', [HomepageController::class, 'data'])->name('auth.homepage');

// Chi tiết sản phẩm
Route::get('product/{id}', [ShowProductController::class, 'product'])-> name('product.show');


// Giỏ hàng
Route::get('cart', [CartController::class, 'cart'])-> name('cart.show');

Route::post('/add-to-cart/{id}', [CartController::class, 'addToCart'])-> name('cart.add');

Route::delete('/cart/remove/{rowID}', [CartController::class, 'removeItem'])-> name('cart.remove');

Route::delete('/cart/clear', [CartController::class, 'removeAll'])-> name('cart.remove.all');