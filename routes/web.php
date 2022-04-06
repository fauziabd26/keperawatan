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

//Route Dosen
use App\Http\Controllers\DosenController;
Route::get('dosen', [DosenController::class, 'index']);

//Route Barang
use App\Http\Controllers\BarangController;
Route::get('barang', [BarangController::class, 'index']);

//Route Kategori
use App\Http\Controllers\KategoriController;
Route::get('kategori', [KategoriController::class, 'index']);

//Route Satuan
use App\Http\Controllers\SatuanController;
Route::get('satuan', [SatuanController::class, 'index']);

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