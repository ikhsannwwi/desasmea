<?php

use App\Http\Controllers\landingController;
use Illuminate\Support\Facades\Route;

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
//     return view('welcome');
// });

Route::get('/',[landingController::class, 'index'])->name('index');
Route::get('/tampilan',[landingController::class, 'index'])->name('index');
Route::get('/tampilan/profile',[landingController::class, 'profile'])->name('profile');
Route::get('/tampilan/infografis',[landingController::class, 'infografis'])->name('infografis');
Route::get('/tampilan/layanan',[landingController::class, 'layanan'])->name('layanan');
Route::get('/tampilan/struktur',[landingController::class, 'struktur'])->name('struktur');
Route::get('/tampilan/penghargaan',[landingController::class, 'penghargaan'])->name('penghargaan');
Route::get('/tampilan/berita',[landingController::class, 'berita'])->name('berita');
Route::get('/tampilan/geografis',[landingController::class, 'geografis'])->name('geografis');
Route::get('/tampilan/pegawai',[landingController::class, 'pegawai'])->name('pegawai');
Route::get('/tampilan/cek-pengajuan-surat',[landingController::class, 'cek_pengajuan_surat'])->name('cek_pengajuan_surat');
Route::get('/tampilan/panduan',[landingController::class, 'panduan'])->name('panduan');
