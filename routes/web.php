<?php


use Illuminate\Support\Facades\Route;
use App\http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\CartController;

/** FRONTEND */

use App\Http\Controllers\Frontend\HomepageController;
use App\hTTP\Controllers\Frontend\ShowProductController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\CategoryController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\OrderController;

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


// Authentication

Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::post('login', [AuthController::class, 'login'])->name('auth.login');
Route::post('register', [AuthController::class, 'register'])->name('auth.register');

/* ADMIN */


// Quản lý users

Route::get('user/index', [UserController::class, 'index'])->name
('user.index')->middleware('admin');

Route::get('user/index', [UserController::class, 'index'])->name
('user.index')->middleware('admin');

Route::get('/admin/users/addUser', [UserController::class,'AddUser'])->name('user.add');

Route::post('/admin/users/addUserToDB', [UserController::class,'AddUserToDB'])->name('user.AddToDB');

Route::get('/admin/users/editUser/{id}', [UserController::class,'EditUser'])->name('user.edit');

Route::post('/admin/users/updateUserToDB/{id}', [UserController::class,'updateUserToDB'])->name('user.UpdateToDB');

Route::get('/admin/users/deleteUser/{id}', [UserController::class,'DeleteUser'])->name('user.delete');


// Quản lý sản phẩm
Route::get('products/index', [ProductController::class, 'index'])->name
('product.index')->middleware('admin');


Route::get('/admin/products/addProduct', [ProductController::class,'AddProduct'])->name('product.add');
Route::post('/admin/users/addProductToDB', [ProductController::class,'AddProductToDB'])->name('product.AddToDB');
Route::get('/admin/products/editProduct/{id}', [ProductController::class,'EditProduct'])->name('product.edit');
Route::post('/admin/products/updateProductToDB/{id}', [ProductController::class,'updateProductToDB'])->name('product.UpdateToDB');
Route::get('/admin/products/deleteProduct/{id}', [ProductController::class,'DeleteProduct'])->name('product.delete');

/** FRONTEND ROUTES */

// Trang chủ
Route::get('homepage', [HomepageController::class, 'data'])->name('auth.homepage');
Route::post('search', [HomepageController::class, 'search'])->name('homepage.search');

// Chi tiết sản phẩm
Route::get('product/{id}', [ShowProductController::class, 'product'])-> name('product.show');


// Chi tiết danh mục
Route::get('category/{id}', [CategoryController::class, 'products'])-> name('category.products');



// Trang Blog
Route::get('blog', [BlogController::class, 'data'])->name('blog.show');

// Tìm kiếm sản phẩm


//Thanh Toán
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');



// Đặt Hàng thành công

Route::get('/order/success/{orderId}', [OrderController::class, 'success'])->name('order.success');
Route::post('/place-order', [OrderController::class, 'placeOrder'])->name('place.order');



// Giỏ hàng

Route::get('cart', [CartController::class, 'cart'])-> name('cart.show');

Route::post('/add-to-cart/{id}', [CartController::class, 'addToCart'])-> name('cart.add');

Route::delete('/cart/remove/{id}', [CartController::class, 'removeItem'])-> name('cart.remove');

Route::delete('/cart/clear', [CartController::class, 'removeAll'])-> name('cart.remove.all');

Route::put('/carts/{id}/check', [CartController::class, 'check'])->name('cart.check');

Route::get('/carts/total-price', [CartController::class,  'getTotalPrice'])->name('cart.total.price');

Route::post('/carts/update', [CartController::class, 'updateCart'])->name('cart.update');

Route::post('/buy', [CartController::class, 'buy'])->name('buy');


/*

Route::get('cart', [CartController::class, 'cart'])-> name('cart.show');

Route::post('/add-to-cart/{id}', [CartController::class, 'addToCart'])-> name('cart.add');

Route::delete('/cart/remove/{rowID}', [CartController::class, 'removeItem'])-> name('cart.remove');

Route::delete('/cart/clear', [CartController::class, 'removeAll'])-> name('cart.remove.all');

*/