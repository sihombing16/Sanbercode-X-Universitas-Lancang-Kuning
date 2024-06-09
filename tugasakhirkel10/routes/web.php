<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GitarController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\Profil_karyawanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

route ::get('/gitar', function () {
    return view('gitar.index');
});

route ::get('/master', function () {
    return view('layouts.master');
});

route ::get('/pelanggan', function () {
    return view('pelanggan.index');
});

route ::get('/profil_karyawan', function () {
    return view('gitar.index');
});

Route::resource('gitar', GitarController::class);

Route::resource('pelanggan', PelangganController::class);

Route::resource('profil_karyawan', Profil_karyawanController::class);