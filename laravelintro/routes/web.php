<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\CastController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/', [Homecontroller::class ,'index']);

Route::get('/register', [AuthController::class ,'form']);

Route::post('/welcome', [AuthController::class ,'store']);

Route::get('/data-table', function() {
    return view('pages.data-table');
});

Route::get('/table', function() {
    return view('pages.table');
});

Route::resource('cast', CastController::class);