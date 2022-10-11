<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InduksiController;
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
Route::resource('meeting', MeetingController::class);

Route::post('absensi-input/{id}', [AbsensiController::class, 'update'])->name('absensi-input.update');