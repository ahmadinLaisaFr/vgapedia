<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
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

Route::get('/', [HomeController::class, 'index']);
// shop section
Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('/produk/{produk:slug}', [ProdukController::class, 'show'])->name('produk.detail');

// kategori section
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
Route::get('/kategori/{kategori:slug}', [KategoriController::class, 'show'])->name('kategori.detail');
