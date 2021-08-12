<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JurnalController;
use App\Http\Controllers\SeminarController;
use App\Http\Controllers\PaperController;
use App\Http\Controllers\EksekutifController;
use App\Http\Controllers\FestivalController;
use App\Http\Controllers\PptController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\SubmateriController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {

    return view('beranda');
});

Route::get('/home', function () {
    return view('beranda');
});

// Route::get('/loginpage', function () {
//     return view('pages.auth.login');
// });

Route::get('/beranda', function () {
    return view('admin.home');
});


Route::get('/pojok', function () {
    return view('pojok');
});



Route::get('/daftar-pojok', [App\Http\Controllers\LandingController::class, 'semuaindex'])->name('semuaindex');
// Route::get('/daftar-pojok', [App\Http\Controllers\HomeController::class, 'semuaindex']) ;
Route::get('/daftar-call-for-papers',[App\Http\Controllers\LandingController::class, 'daftarpaper'])->name('daftarpaper');
Route::get('/daftar-seminar',[App\Http\Controllers\LandingController::class, 'daftarseminar'])->name('daftarseminar');
Route::get('/daftar-jurnal',[App\Http\Controllers\LandingController::class, 'daftarjurnal'])->name('daftarjurnal');



Auth::routes();


// HALAMAN ADMIN


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/dashboard', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::resource('admin/daftar-paper', PaperController::class)->middleware('is_admin');
Route::resource('admin/daftar-seminar', SeminarController::class)->middleware('is_admin');
Route::resource('admin/daftar-jurnal', JurnalController::class)->middleware('is_admin');
Route::resource('admin/daftar-eksekutif', EksekutifController::class)->middleware('is_admin');
Route::resource('admin/daftar-materi', MateriController::class)->middleware('is_admin');
Route::resource('admin/daftar-submateri', SubmateriController::class)->middleware('is_admin');

Route::get('/admin/daftar-langganan',[LandingController::class,'langganan'])->name('langganan')->middleware('is_admin');
Route::post('/admin/daftar-langganan/{id}',[LandingController::class,'konfirmasibayar'])->name('konfirmasibayar')->middleware('is_admin');
Route::delete('/admin/daftar-user/{id}',[LandingController::class,'hapususer'])->name('hapususer')->middleware('is_admin');
Route::get('/admin/daftar-user', [LandingController::class,'daftaruser'])->name('daftaruser')->middleware('is_admin');
Route::patch('admin/daftar-user/{id}',[LandingController::class,'konfirmasiadmin'])->name('konfirmasiadmin')->middleware('is_admin');



// Route daftar festival, PPT, dan Kelas Eksekutif
Route::resource('admin/daftar-festival', FestivalController::class)->middleware('is_admin');
Route::resource('admin/daftar-ppt', PptController::class)->middleware('is_admin');




//HALAMAN USER

Route::get('/daftar-kelas',[LandingController::class,'daftarkelas'])->name('daftarkelas')->middleware('auth');
Route::get('/user/dashboard',[LandingController::class,'indexuser'])->name('indexuser')->middleware('auth');
Route::get('/user/riwayat-kelas',[LandingController::class,'riwayatkelas'])->name('riwayatkelas')->middleware('auth');
Route::get('/user/daftar-kelas-baru',[LandingController::class,'daftarkelasbaru'])->name('daftarkelasbaru')->middleware('auth');
Route::get('/user/daftar-kelas-baru/{id}',[LandingController::class,'daftarkelasbaruspesifik'])->name('daftarkelasbaruspesifik')->middleware('auth');
Route::post('/user/daftar-kelas-baru/',[LandingController::class,'pemesananstore'])->name('pemesananstore')->middleware('auth');
Route::get('/user/tagihan-anda',[LandingController::class,'tagihananda'])->name('tagihananda')->middleware('auth');
Route::get('/user/akseskelas/{id}',[LandingController::class,'akseskelas'])->name('akseskelas')->middleware('auth');
Route::delete('/user/riwayat-kelas/{id}',[LandingController::class,'batalkanpemesanan'])->name('batalkanpemesanan')->middleware('auth');



// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

