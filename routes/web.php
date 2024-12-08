<?php

use App\Http\Controllers\ColorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PakaianController;
use App\Http\Controllers\SizeController;
use Faker\Core\Color;

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

Route::get('/', [DashboardController::class, 'index']);

Route::get('/kategori', [KategoriController::class, 'index']);
Route::post('/kategori/tambah', [KategoriController::class, 'store'])->name('kategori.store');
Route::post('/kategori/edit/{id}', [KategoriController::class, 'update'])->name('kategori.update');
Route::get('/kategori/hapus/{id}', [KategoriController::class, 'destroy']);

Route::get('/color', [ColorController::class, 'index']);
Route::post('/color/tambah', [ColorController::class, 'store'])->name('color.store');

Route::get('/size', [SizeController::class, 'index']);
Route::post('/size/tambah', [SizeController::class, 'store'])->name('size.store');

Route::get('/pakaian', [PakaianController::class, 'index']);
Route::get('/pakaian_tambah', [PakaianController::class, 'create']);


