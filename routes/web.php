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

//CRUD Kamar
Route::get('/addkamar',[AdminController::class,'addkamar']);
Route::post('/upload_kamar',[AdminController::class,'upload_kamar']);
Route::get('/showkamar',[AdminController::class,'showkamar']);
Route::get('/del_kamar/{id}',[AdminController::class,'del_kamar']);
Route::get('/updatekamar/{id}',[AdminController::class,'updatekamar']);
Route::post('/editkamar/{id}',[AdminController::class,'editkamar']);
Route::get('/kamarexcel',[AdminController::class,'kamarexcel']);

//CRUD rawat inap
Route::get('/addrawatin',[AdminController::class,'addrawatin']);
Route::post('/upload_rawat',[AdminController::class,'upload_rawat']);
Route::get('/showrawatin',[AdminController::class,'showrawatin']);
Route::get('/del_pasien/{id}',[AdminController::class,'del_pasien']);
Route::get('/updatepasien/{id}',[AdminController::class,'updatepasien']);
Route::post('/editpasien/{id}',[AdminController::class,'editpasien']);
Route::get('/rawatinexcel',[AdminController::class,'rawatinexcel']);

//CRUD Visit
Route::get('/inputvisit',[AdminController::class,'inputvisit']);
Route::post('/upload_visit',[AdminController::class,'upload_visit']);
Route::get('/showvisit',[AdminController::class,'showvisit']);
Route::get('/del_visit/{id}',[AdminController::class,'del_visit']);
Route::get('/updatevisit/{id}',[AdminController::class,'updatevisit']);
Route::post('/editvisit/{id}',[AdminController::class,'editvisit']);
Route::get('/visitexcel',[AdminController::class,'visitexcel']);

//Rekam medis
Route::get('/showrekamedis',[AdminController::class,'showrekamedis']);
Route::get('/detail_rekam/{id}',[AdminController::class,'detail_rekam']);
Route::post('/editrekam/{id}',[AdminController::class,'editrekam']);
Route::get('/showprint',[AdminController::class,'showprint']);
Route::get('/pdf',[AdminController::class,'pdf']);
Route::get('/rekamexcel',[AdminController::class,'rekamexcel']);
=======

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


//CRUD Kamar
Route::get('/addkamar',[AdminController::class,'addkamar']);
Route::post('/upload_kamar',[AdminController::class,'upload_kamar']);
Route::get('/showkamar',[AdminController::class,'showkamar']);
Route::get('/del_kamar/{id}',[AdminController::class,'del_kamar']);
Route::get('/updatekamar/{id}',[AdminController::class,'updatekamar']);
Route::post('/editkamar/{id}',[AdminController::class,'editkamar']);
Route::get('/kamarexcel',[AdminController::class,'kamarexcel']);

//CRUD rawat inap
Route::get('/addrawatin',[AdminController::class,'addrawatin']);
Route::post('/upload_rawat',[AdminController::class,'upload_rawat']);
Route::get('/showrawatin',[AdminController::class,'showrawatin']);
Route::get('/del_pasien/{id}',[AdminController::class,'del_pasien']);
Route::get('/updatepasien/{id}',[AdminController::class,'updatepasien']);
Route::post('/editpasien/{id}',[AdminController::class,'editpasien']);
Route::get('/rawatinexcel',[AdminController::class,'rawatinexcel']);
