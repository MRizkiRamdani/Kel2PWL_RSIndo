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
//data
Route::get('/', [AdminController::class, 'index'])->middleware('admin');
Route::get('/data_dokter', [AdminController::class, 'data_dokter'])->middleware('admin');

//CRUD dokter
Route::get('/tambah_dokter', [DokterController::class, 'tambah_dokter'])->middleware('admin');
Route::post('/store_dokter', [DokterController::class, 'store_dokter'])->middleware('admin');
Route::post('/hapus_dokter', [DokterController::class, 'hapus_dokter'])->middleware('admin');
Route::get('/edit_dokter/{id}', [DokterController::class, 'edit_dokter'])->middleware('admin');
Route::post('/update_dokter', [DokterController::class, 'update_dokter'])->middleware('admin');
Route::post('/cari_dokter', [DokterController::class, 'cari_dokter']);

//crud pegawai
Route::get('/tambah_pegawai', [PegawaiController::class, 'tambah_pegawai'])->middleware('admin');
Route::post('/store_pegawai', [PegawaiController::class, 'store_pegawai'])->middleware('admin');
Route::post('/hapus_pegawai', [PegawaiController::class, 'hapus_pegawai'])->middleware('admin');
Route::post('/cari_pegawai', [PegawaiController::class, 'cari_pegawai']);
Route::get('/edit_pegawai/{id}', [PegawaiController::class, 'edit_pegawai']);
Route::post('/update_pegawai', [PegawaiController::class, 'update_pegawai']);

//autentikasi
Route::get('/register', [AuthController::class, 'register']);
Route::post('/store_register', [AuthController::class, 'store_register']);
Route::get('/login', [AuthController::class, 'login']);
Route::post('/store_login', [AuthController::class, 'store_login']);
Route::get('/logout', [AuthController::class, 'logout']);
