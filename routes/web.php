<?php

use App\Http\Controllers\AbsensiController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::resource('induksi', InduksiController::class);
Route::resource('absensi', AbsensiController::class);

Route::post('absensi-input/{id}', [AbsensiController::class, 'update'])->name('absensi-input.update');
Route::post('absensi-input/{lokasi}', [AbsensiController::class, 'create'])->name('absensi-input.create');

Route::get('absensi-edit/{lokasi}', [AbsensiController::class, 'edit_absensi'])->name('absensi-edit.edit');
Route::put('absensi-edit/{lokasi}/edit', [AbsensiController::class, 'update_absensi'])->name('absensi-edit.update');

Route::get('/{lokasi}', [AbsensiController::class, 'create_data'])->name('absensi-location.index');
Route::get('/', [AbsensiController::class, 'create_data'])->name('absensi-location.index');

Route::post('password-absensi', [passwordController::class, 'index'])->name('passwordAbsensi.index');