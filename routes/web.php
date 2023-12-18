<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\Authenticate;


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

Route::get('/Keuangan', function () {
    return view('Keuangan.index');
});

// Route::get('/Siswa', [SiswaController::class,'index'])->name('Siswa');
// Route::get('/Siswa/create', [SiswaController::class,'create']);
// Route::post('/Siswa/store', [SiswaController::class,'store']);
// Route::post('/Siswa/destroy/{NIS}', [SiswaController::class,'destroy']);

// Siswa
Route::middleware(['auth:sanctum', 'Kesiswaan'])->resource('Siswa', SiswaController::class)->names('Siswa');

// Registrasi
Route::middleware('guest')->get('Registrasi', [RegisterController::class, 'index'])->name('Registrasi');
Route::post('Registrasi', [RegisterController::class, 'store'])->name('Registrasi');

// Login
Route::middleware('guest')->get('/', [LoginController::class, 'index'])->name('/');
Route::post('login', [LoginController::class, 'authenticate'])->name('login.authenticate');

// Dashboard
Route::middleware(['auth:sanctum', 'Siswa'])->get('Dashboard', [DashboardController::class, 'index'])->name('Dashboard');
