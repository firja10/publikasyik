<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JurnalController;
use App\Http\Controllers\SeminarController;
use App\Http\Controllers\PaperController;
use App\Http\Controllers\EksekutifController;
use App\Http\Controllers\FestivalController;
use App\Http\Controllers\PptController;
use App\Http\Controllers\LandingController;
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

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/dashboard', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::get('/daftar-kelas',[LandingController::class,'daftarkelas'])->name('daftarkelas')->middleware('auth');

Route::resource('admin/daftar-paper', PaperController::class)->middleware('is_admin');
Route::resource('admin/daftar-seminar', SeminarController::class)->middleware('is_admin');
Route::resource('admin/daftar-jurnal', JurnalController::class)->middleware('is_admin');
Route::resource('admin/daftar-eksekutif', EksekutifController::class)->middleware('is_admin');


// Route daftar festival, PPT, dan Kelas Eksekutif
Route::resource('admin/daftar-festival', FestivalController::class)->middleware('is_admin');
Route::resource('admin/daftar-ppt', PptController::class)->middleware('is_admin');


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

