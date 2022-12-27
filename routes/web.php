<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\AuthController;

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

//autentikasi
Route::get('/register', [AuthController::class, 'register']);
Route::post('/store_register', [AuthController::class, 'store_register']);
Route::get('/login', [AuthController::class, 'login']);
Route::post('/store_login', [AuthController::class, 'store_login']);
Route::get('/logout', [AuthController::class, 'logout']);