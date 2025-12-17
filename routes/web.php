<?php

use Illuminate\Support\Facades\Route;
// Panggil semua controller yang kita butuhkan di atas
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UlasanController; // <-- PENTING: Tambahkan ini

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// --- RUTE HALAMAN PUBLIK (Bisa diakses siapa saja) ---
Route::get('/', function () { return view('welcome'); })->name('home'); // <-- Diberi nama 'home'
Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/pentas-seni', function () { return view('pentas'); })->name('pentas');
Route::get('/galeri-detail', function () { return view('galeri-detail'); })->name('galeri.detail');
Route::get('/galeri-seni', function () { return view('galeri'); })->name('galeri');
Route::get('/kuliner', function () { return view('kuliner'); })->name('kuliner');


// --- GRUP ROUTE UNTUK TAMU (YANG BELUM LOGIN) ---
Route::middleware('guest')->group(function () {
    // Menampilkan halaman register
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    // Memproses data dari form register
    Route::post('/register', [RegisterController::class, 'store']);

    // Menampilkan halaman login
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    // Memproses data dari form login
    Route::post('/login', [LoginController::class, 'store']);
});


// --- GRUP ROUTE UNTUK PENGGUNA YANG SUDAH LOGIN ---
Route::middleware('auth')->group(function () {
    // Halaman dashboard setelah login/register
    Route::get('/welcome', function () {
        return view('welcome');
    })->name('welcome');

    // Route untuk Logout (AMAN KARENA PAKAI POST)
    Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');
    
    // Rute game kamu
    Route::get('/games', function () { return view('game'); })->name('games');


    // =======================================================
    // ==== PERBAIKAN UTAMA: SEMUA ROUTE ULASAN DI SINI ====
    // =======================================================

    // 1. Menampilkan daftar ulasan (mengarah ke UlasanController@index)
    Route::get('/ulasan', [UlasanController::class, 'index'])->name('ulasan.index');

    // 2. Menampilkan form tambah ulasan (mengarah ke UlasanController@create)
    Route::get('/ulasan/tambah', [UlasanController::class, 'create'])->name('ulasan.create');

    // 3. Menyimpan ulasan baru dari form (mengarah ke UlasanController@store)
    Route::post('/ulasan', [UlasanController::class, 'store'])->name('ulasan.store');
});