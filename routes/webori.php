<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransaksiController;
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
    return view('welcome');
});

// Route pelanggan
Route::resource('pelanggan', PelangganController::class);
Route::get('/delete-pelanggan/{id}', [PelangganController::class, "destroy"]);

// Route menu
Route::resource('menu', MenuController::class);
Route::get('/delete-menu/{id}', [MenuController::class, "destroy"]);

// Route pesanan
Route::resource('pesanan', PesananController::class);
Route::get('/delete-pesanan/{id}', [PesananController::class, "destroy"]);

// Route Dashboard
Route::resource('dashboard', DashboardController::class);

// Route Transaksi
Route::resource('transaksi', TransaksiController::class);
Route::get('/delete-transaksi/{id}', [TransaksiController::class, "destroy"]);





