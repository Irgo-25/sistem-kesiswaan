<?php

use App\Models\Siswa;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

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
    return view('login', [
        'title' => "Sistem Kesiswaan"
    ]);
});
Route::get('/register', function () {
    return view('register', [
        'title' => "Registrasi"
    ]);
});
Route::get('/Keuangan', function () {
    return view('Keuangan.index');
});

// Route::get('/Siswa', [SiswaController::class,'index'])->name('Siswa');
// Route::get('/Siswa/create', [SiswaController::class,'create']);
// Route::post('/Siswa/store', [SiswaController::class,'store']);
// Route::post('/Siswa/destroy/{NIS}', [SiswaController::class,'destroy']);

route::resource('Siswa', SiswaController::class);