<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\CommisioningController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InduksiController;
use App\Http\Controllers\passwordController;
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

Route::get('home', [HomeController::class, 'index'])->name('home.index');

// Induksi
Route::resource('induksi', InduksiController::class);
Route::get('createTwo', [InduksiController::class, 'createTwo'])->name('induksi.createTwo');
Route::get('createThree', [InduksiController::class, 'createThree'])->name('induksi.createThree');
Route::get('createFour', [InduksiController::class, 'createFour'])->name('induksi.createFour');
Route::get('createFifth', [InduksiController::class, 'createFifth'])->name('induksi.createFifth');

Route::post('createTwo', [InduksiController::class, 'postCreateTwo'])->name('induksi.postCreateTwo');
Route::post('createThree', [InduksiController::class, 'postCreateThree'])->name('induksi.postCreateThree');
Route::post('createFour', [InduksiController::class, 'postCreateFour'])->name('induksi.postCreateFour');
Route::post('createFifth', [InduksiController::class, 'postCreateFifth'])->name('induksi.postCreateFifth');

// Absensi
Route::resource('absensi', AbsensiController::class);
Route::post('absensi-input/{id}', [AbsensiController::class, 'update'])->name('absensi-input.update');
Route::post('absensi-input/{lokasi}', [AbsensiController::class, 'create'])->name('absensi-input.create');
Route::get('absensi-edit/{lokasi}', [AbsensiController::class, 'edit_absensi'])->name('absensi-edit.edit');
Route::put('absensi-edit/{lokasi}/edit', [AbsensiController::class, 'update_absensi'])->name('absensi-edit.update');
Route::get('check_resource/{lokasi}', [AbsensiController::class, 'check_resource'])->name('absensi.detail_dokumen');

// Commisioning
Route::resource('commisioning', CommisioningController::class);

// Galeri
Route::resource('galeri', GaleriController::class);

Route::get('/{lokasi}', [AbsensiController::class, 'create_data'])->name('absensi-location.index');
Route::get('/', [AbsensiController::class, 'create_data'])->name('absensi-location.index');
Route::post('password-absensi', [passwordController::class, 'index'])->name('passwordAbsensi.index');
