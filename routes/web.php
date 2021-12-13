<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VaksinController;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\CariController;
use App\Http\Controllers\CetakKartuController;
use App\Http\Controllers\CompleteController;

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

Route::get('/', [function () {
    return view('welcome');
}])->name('landing');

Auth::routes([
    'register' => false,
    'reset' => false,
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('daftar', DaftarController::class);
Route::get('/Pendaftaran/{daftar:kode_unik}', [CariController::class, 'show'])->name('pendaftaran');
Route::get('/pendaftaran', [PendaftarController::class, 'index'])->name('pendaftar');
Route::get('/pendaftaran/{jadwal}/create', [PendaftarController::class, 'create'])->name('pendaftar.create');
Route::get('/cari', [CariController::class, 'search'])->name('cari');
Route::get('/cari/kartu', [CariController::class, 'searchKartu'])->name('cari.kartu');
Route::get('/cari/data', [CariController::class, 'find'])->name('cari_pendaftar');
Route::get('/cari/data/kartu', [CariController::class, 'findKartu'])->name('kartu.vaksin');
Route::get('/cetak-kartu/{daftar}', [CetakKartuController::class, 'cetak'])->name('cetak');
Route::get('/kartu-vaksin/{selesai}', [CetakKartuController::class, 'cetakKartuVaksin'])->name('cetak.kartu.vaksin');
Route::get('/selesai/{daftar}', [CompleteController::class, 'getData'])->name('selesai');
Route::get('/selesai', [CompleteController::class, 'index'])->name('selesai.index');
Route::delete('/selesai/{selesai}', [CompleteController::class, 'destroy'])->name('selesai.destroy');
Route::resource('jadwal', JadwalController::class);
Route::resource('vaksin', VaksinController::class);