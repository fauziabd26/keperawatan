<?php

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

// Route::get('/', function () {
//     return view('dashboard.view');
// });

//Route Dashboard
use App\Http\Controllers\DashboardController;
Route::get('/', [DashboardController::class, 'index']);

//Route Mahasiswa
use App\Http\Controllers\MahasiswaController;
Route::get('mahasiswa', [MahasiswaController::class, 'index']);
Route::get('mahasiswa/add', [MahasiswaController::class, 'create']);

//Route Dosen
use App\Http\Controllers\DosenController;
Route::get('dosen', [DosenController::class, 'index']);

//Route Barang
use App\Http\Controllers\BarangController;
Route::get('barang', [BarangController::class, 'index'])->name('index_barang');
Route::get('/barang/add', [BarangController::class, 'create'])->name('tambah_barang');
Route::post('/barang/post', [BarangController::class, 'store'])->name('post_barang');
Route::get('/barang/edit/{id}', [BarangController::class, 'edit'])->name('edit_barang');
Route::put('/barang/update/{id}', [BarangController::class, 'update'])->name('update_barang');
Route::get('/barang/delete{id}', [BarangController::class, 'destroy'])->name('destroy_barang');


//Route Kategori
use App\Http\Controllers\KategoriController;
Route::get('/kategori', [KategoriController::class, 'index'])->name('index_kategori');
Route::get('/kategori/add', [KategoriController::class, 'create'])->name('tambah_kategori');
Route::post('/kategori/post', [KategoriController::class, 'store'])->name('post_kategori');
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('edit_kategori');
Route::put('/kategori/update/{id}', [KategoriController::class, 'update'])->name('update_kategori');
Route::get('/kategori/delete{id}', [KategoriController::class, 'destroy'])->name('destroy_kategori');


//Route Satuan
use App\Http\Controllers\SatuanController;
Route::get('/satuan', [SatuanController::class, 'index'])->name('index_satuan');
Route::get('/satuan/add', [SatuanController::class, 'create'])->name('tambah_satuan');
Route::post('/satuan/post', [SatuanController::class, 'store'])->name('post_satuan');
Route::get('/satuan/edit/{id}', [SatuanController::class, 'edit'])->name('edit_satuan');
Route::put('/satuan/update/{id}', [SatuanController::class, 'update'])->name('update_satuan');
Route::get('/satuan/delete{id}', [SatuanController::class, 'destroy'])->name('destroy_satuan');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
