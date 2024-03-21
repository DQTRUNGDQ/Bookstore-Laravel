<?php


use Illuminate\Support\Facades\Route;
use App\http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserController;

/** FRONTEND */

use App\Http\Controllers\Frontend\HomepageController;

Route::get('/', function(){
    return view('welcome');
});

/** FRONTEND ROUTES */


// BACKEND ROUTES
Route::get('homepage', [AuthController::class, 'homepage'])->name('auth.homepage')
->middleware('login');

Route::get('dashboard/index', [DashboardController::class, 'index'])->name
('dashboard.index')->middleware('admin');

Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::post('login', [AuthController::class, 'login'])->name('auth.login');

Route::get('homepage', [HomepageController::class, 'data'])->name('auth.homepage');


/* USER */
Route::get('user/index', [UserController::class, 'index'])->name
('user.index')->middleware('admin');