<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerLoginController;
use App\Http\Controllers\CustomerPostController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/register', [AdminController::class, 'showRegistrationForm'])->name('admin.register');
Route::post('/admin/store', [AdminController::class, 'register'])->name('admin.store');
Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login']);
    
Route::get('/customer/register', [CustomerController::class, 'showRegistrationForm'])->name('customer.register');
Route::post('/customer/register', [CustomerController::class, 'register']);
Route::get('/customer/login', [CustomerLoginController::class, 'showLoginForm'])->name('customer.login');
Route::post('/customer/login', [CustomerLoginController::class, 'login']);

Route::middleware(['auth:customer'])->group(function () {
    Route::get('/dashboard', [CustomerController::class, 'dashboard']);
    Route::resource('customerposts', CustomerPostController::class);
});
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/dashboards', [AdminController::class, 'dashboard']);
    Route::resource('posts', PostController::class);
});


