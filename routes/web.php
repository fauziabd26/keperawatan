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

//Route Barang Masuk
use App\Http\Controllers\BarangMasukController;
Route::get('/barang_masuk', [BarangMasukController::class, 'index'])->name('index_barang_masuk');
Route::get('/barang_masuk/add', [BarangMasukController::class, 'create'])->name('tambah_barang_masuk');
Route::post('/barang_masuk/post', [BarangMasukController::class, 'store'])->name('post_barang_masuk');
Route::get('/barang_masuk/edit/{id}', [BarangMasukController::class, 'edit'])->name('edit_barang_masuk');
Route::put('/barang_masuk/update/{id}', [BarangMasukController::class, 'update'])->name('update_barang_masuk');
Route::get('/barang_masuk/delete{id}', [BarangMasukController::class, 'destroy'])->name('destroy_barang_masuk');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route Peminjaman
use App\Http\Controllers\PeminjamanController;
Route::get('Peminjaman', [PeminjamanController::class, 'index']);

//Route Pengembalian
use App\Http\Controllers\PengembalianController;
Route::get('Pengembalian', [PengembalianController::class, 'index']);

//Route Pengguna Mahasiswa
use App\Http\Controllers\PenggunaController;
Route::get('PenggunaMahasiswa', [PenggunaController::class, 'index']);
Route::post('PenggunaMahasiswa/add', [PenggunaController::class, 'store']);

Route::get('PenggunaMahasiswaPengembalian', [PenggunaController::class, 'indexPengembalian']);

//Route Pengguna Dosen
Route::get('PenggunaDosen', [PenggunaController::class, 'indexdosen']);
Route::post('PenggunaDosen/add', [PenggunaController::class, 'storedosen']);

//Route Aproval
Route::get('Aproval', [PenggunaController::class, 'indexaproval']);
Route::post('Aproval/add', [PenggunaController::class, 'storeaproval']);