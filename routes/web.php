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
use App\Http\Controllers\PesanController;
use App\Http\Controllers\SubmateriController;
use App\Http\Controllers\DaftarfestivalController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\ForgotPasswordController;
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

// Route::get('/', function () {

//     return view('beranda');
// });

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/', [LandingController::class,'homeindex'])->name('homeindex');


Route::get('/home', [LandingController::class,'homeindexdua'])->name('homeindexdua');




// Route::get('/loginpage', function () {
//     return view('pages.auth.login');
// });

Route::get('/beranda', function () {
    return view('admin.home');
});


Route::get('/pojok', function () {
    return view('pojok');
});

Route::get('/ppt', function () {
    return view('ppt-home');
});

// Route::get('/festival-publikasyik', function () {
//     return view('festival-home');
// });


Route::get('festival-publikasyik', [LandingController::class,'festivalhome'])->name('festivalhome')->middleware('auth');





Route::get('/halaman-kelas', function () {
        return view('user.halaman-materi');
});








Route::get('/daftar-pojok', [App\Http\Controllers\LandingController::class, 'semuaindex'])->name('semuaindex');
// Route::get('/daftar-pojok', [App\Http\Controllers\HomeController::class, 'semuaindex']) ;
Route::get('/daftar-call-for-papers',[App\Http\Controllers\LandingController::class, 'daftarpaper'])->name('daftarpaper');
Route::get('/daftar-seminar',[App\Http\Controllers\LandingController::class, 'daftarseminar'])->name('daftarseminar');
Route::get('/daftar-jurnal',[App\Http\Controllers\LandingController::class, 'daftarjurnal'])->name('daftarjurnal');
Route::post('/',[LandingController::class,'storepesan'])->name('storepesan');
Route::post('/daftar-festival/gratis',[LandingController::class,'daftarfestival'])->name('daftarfestival')->middleware('auth');
Route::post('/daftar-festival',[LandingController::class,'daftarfestivalbayar'])->name('daftarfestivalbayar')->middleware('auth');
// Route::post('/user/daftar-festival-baru',[LandingController::class,'daftarfestivaluser'])->name('daftarfestivaluser')->middleware('auth');




//LUPA PASSWORD

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');











Auth::routes();


// HALAMAN ADMIN


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/admin/dashboard', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

// Route::get('/admin/dashboard', [LandingController::class, 'indexadmin'])->name('indexadmin')->middleware('is_admin');

Route::resource('admin/daftar-paper', PaperController::class)->middleware('is_admin');
Route::resource('admin/daftar-seminar', SeminarController::class)->middleware('is_admin');
Route::resource('admin/daftar-jurnal', JurnalController::class)->middleware('is_admin');
Route::resource('admin/daftar-eksekutif', EksekutifController::class)->middleware('is_admin');
Route::resource('admin/daftar-materi', MateriController::class)->middleware('is_admin');
Route::resource('admin/daftar-submateri', SubmateriController::class)->middleware('is_admin');
Route::resource('admin/daftar-pesan',PesanController::class)->middleware('is_admin');
Route::resource('admin/daftar-peserta-festival', DaftarfestivalController::class)->middleware('is_admin');

Route::get('/admin/daftar-langganan',[LandingController::class,'langganan'])->name('langganan')->middleware('is_admin');
Route::post('/admin/daftar-langganan/{id}',[LandingController::class,'konfirmasibayar'])->name('konfirmasibayar')->middleware('is_admin');

// Route::get('/admin/daftar-pe-festival',[LandingController::class,'langganan'])->name('langganan')->middleware('is_admin');
Route::patch('/admin/daftar-peserta-festival/{id}/konfirmasi',[LandingController::class,'konfirmasibayarfestival'])->name('konfirmasibayarfestival')->middleware('is_admin');

Route::delete('/admin/daftar-user/{id}',[LandingController::class,'hapususer'])->name('hapususer')->middleware('is_admin');
Route::get('/admin/daftar-user', [LandingController::class,'daftaruser'])->name('daftaruser')->middleware('is_admin');
Route::patch('/admin/daftar-user/{id}',[LandingController::class,'konfirmasiadmin'])->name('konfirmasiadmin')->middleware('is_admin');
Route::delete('/admin/daftar-langganan/{id}', [LandingController::class,'deletepemesanan'] )->name('deletepemesanan')->middleware('is_admin');
// Route::delete('/admin/daftar-festival/{id}', [LandingController::class,'deletepemesananfestival'] )->name('deletepemesananfestival')->middleware('is_admin');


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
Route::get('/daftar-festival',[LandingController::class,'festivalindex'])->name('festivalindex')->middleware('auth');
Route::get('/user/riwayat-festival',[LandingController::class,'festivaluser'])->name('festivaluser')->middleware('auth');
Route::get('user/daftar-festival-baru',[LandingController::class,'festivaluserbaru'])->name('festivaluserbaru')->middleware('auth');
Route::get('users/daftar-festival-baru/{id}', [LandingController::class,'daftarfestivalbaruspesifik'])->name('daftarfestivalbaruspesifik')->middleware('auth');
Route::post('/user/daftar-festival-baru/',[LandingController::class,'daftarfestivaluserbayar'])->name('daftarfestivaluserbayar')->middleware('auth');
Route::post('user/daftar-festival-baru/gratis',[LandingController::class,'daftarfestivaluser'])->name('daftarfestivaluser')->middleware('auth');
Route::delete('/user/riwayat-festival/{id}',[LandingController::class,'batalkanfestival'])->name('batalkanfestival')->middleware('auth');
Route::get('user/halaman-materi/{id}',[LandingController::class,'halamanmateri'] )->name('halamanmateri')->middleware('auth');


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

