<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JurnalController;
use App\Http\Controllers\SeminarController;
use App\Http\Controllers\PaperController;
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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
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



Route::get('/daftar-pojok', [App\Http\Controllers\HomeController::class, 'semuaindex'])->name('semuaindex');


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::resource('admin/daftar-paper', PaperController::class)->middleware('is_admin');
Route::resource('admin/daftar-seminar', SeminarController::class)->middleware('is_admin');
Route::resource('admin/daftar-jurnal', JurnalController::class)->middleware('is_admin');


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

