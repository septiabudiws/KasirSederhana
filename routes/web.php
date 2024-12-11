<?php

use App\Http\Controllers\AuthController;
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

Route::get('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);

Route::get('/', [DashboardController::class, 'index']);

Route::get('/kategori', [KategoriController::class, 'index']);
Route::post('/kategori/tambah', [KategoriController::class, 'store'])->name('kategori.store');
Route::post('/kategori/edit/{id}', [KategoriController::class, 'update'])->name('kategori.update');
Route::get('/kategori/hapus/{id}', [KategoriController::class, 'destroy']);

Route::get('/color', [ColorController::class, 'index']);
Route::post('/color/tambah', [ColorController::class, 'store'])->name('color.store');
Route::post('/color/edit/{id}', [ColorController::class, 'update'])->name('color.update');
Route::get('/color/hapus/{id}', [ColorController::class, 'destroy']);

Route::get('/size', [SizeController::class, 'index']);
Route::post('/size/tambah', [SizeController::class, 'store'])->name('size.store');
Route::post('/size/edit/{id}', [SizeController::class, 'update'])->name('size.update');
Route::get('/size/hapus/{id}', [SizeController::class, 'destroy']);

Route::get('/pakaian', [PakaianController::class, 'index']);
Route::get('/pakaian/tambah', [PakaianController::class, 'create']);
Route::post('/pakaian/tambah', [PakaianController::class, 'store'])->name('pakaian.store');
Route::get('/pakaian/edit/{id}', [PakaianController::class, 'edit']);
Route::post('/pakaian/edit/{id}', [PakaianController::class, 'update'])->name('pakaian.update');
Route::get('/pakaian/hapus/{id}', [PakaianController::class, 'destroy']);


