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