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

Route::get('/', [DashboardController::class, "index"])->middleware(['auth'])->name('dashboard');

// Route pelanggan
Route::resource('pelanggan', PelangganController::class)->middleware((['auth']));
Route::get('/delete-pelanggan/{id}', [PelangganController::class, "destroy"])->middleware((['auth']));

// Route menu
Route::resource('menu', MenuController::class)->middleware((['auth']));
Route::get('/delete-menu/{id}', [MenuController::class, "destroy"])->middleware((['auth']));

// Route pesanan
Route::resource('pesanan', PesananController::class)->middleware((['auth']));
Route::get('/delete-pesanan/{id}', [PesananController::class, "destroy"])->middleware((['auth']));

// Route Dashboard
Route::resource('dashboard', DashboardController::class)->middleware((['auth']));

// Route Transaksi
Route::resource('transaksi', TransaksiController::class)->middleware((['auth']));
Route::get('/delete-transaksi/{id}', [TransaksiController::class, "destroy"])->middleware((['auth']));

require __DIR__.'/auth.php';
