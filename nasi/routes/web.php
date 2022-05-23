<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NasiController;

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

Route::get('/lihatpesanan', [NasiController::class, 'readdata']);
Route::get('/pesannasi', [NasiController::class, 'input']);
Route::get('/pesannasi/store', [NasiController::class, 'store']);

Route::get('/nasigoreng/edit/{id}', [NasiController::class, 'edit']);
Route::get('/nasigoreng/update', [NasiController::class, 'update']);
Route::get('/nasigoreng/hapus/{id}', [NasiController::class, 'hapus']);