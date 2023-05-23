<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Mhs\MahasiswaController;
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

Route::get('/home',[HomeController::class,'index']);
Route::get('/mahasiswa',[MahasiswaController::class,'index']);
Route::post('/mahasiswa',[MahasiswaController::class,'store']);
Route::delete('/mahasiswa/hapus/{id}',[MahasiswaController::class,'destroy']);
Route::get('/mahasiswa/edit/{id}',[MahasiswaController::class,'edit']);
Route::post('/mahasiswa/update/{id}',[MahasiswaController::class,'update']);
