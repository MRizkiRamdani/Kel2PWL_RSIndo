<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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


Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect'])->middleware('auth','verified');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//CRUD Doctor
Route::get('/add_doctor_view',[AdminController::class,'addview']);
Route::post('/upload_doctor',[AdminController::class,'upload']);
Route::get('/showdoctor',[AdminController::class,'showdoctor']);
Route::get('/del_doctor/{id}',[AdminController::class,'del_doctor']);
Route::get('/updatedoctor/{id}',[AdminController::class,'updatedoctor']);
Route::post('/editdoctor/{id}',[AdminController::class,'editdoctor']);
Route::get('/doctorexcel',[AdminController::class,'doctorexcel']);

//CRUD Appointment
Route::post('/appointment',[HomeController::class,'appointment']);
Route::get('/myappointment',[HomeController::class,'myappointment']);
Route::get('/delete_appoint/{id}',[HomeController::class,'delete_appoint']);
Route::get('/showappointment',[AdminController::class,'showappointment']);
Route::get('/approve/{id}',[AdminController::class,'approve']);
Route::get('/canceled/{id}',[AdminController::class,'canceled']);
Route::get('/delete_appoint/{id}',[AdminController::class,'delete_appoint']);
Route::get('/appointexcel',[AdminController::class,'appointexcel']);