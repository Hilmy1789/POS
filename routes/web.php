<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/home', [HomeController::class, 'home']);

Route::get('/category/fnb', [ProductController::class, 'fnb']);

Route::get('/category/bah', [ProductController::class, 'bah']);

Route::get('/category/hc', [ProductController::class, 'hc']);

Route::get('/category/bk', [ProductController::class, 'bk']);

Route::get('/user', [UserController::class, 'user']);

Route::get('/penjualan', [PenjualanController::class, 'pos']);