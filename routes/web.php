<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

// Route::get('/mahasiswa', [MahasiswaController::class,'index']);
// Route::get('/mahasiswa-create', [MahasiswaController::class,'create']);
// Route::post('/mahasiswa-store', [MahasiswaController::class,'store']);

Route::resource('mahasiswa', MahasiswaController::class);
