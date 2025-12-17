<?php

use Illuminate\Support\Facades\Route;

// --- CONTROLLER HALAMAN PUBLIK ---
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\GameController; // <--- INI PENTING (Controller Public)

// --- CONTROLLER ADMIN ---
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
// Kita beri alias agar tidak bentrok dengan GameController Public
use App\Http\Controllers\Admin\GameController as AdminGameController;
use App\Http\Controllers\Admin\UlasanController as AdminUlasanController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// --- RUTE HALAMAN PUBLIK ---
Route::get('/', function () { return view('welcome'); })->name('home');
Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/pentas-seni', function () { return view('pentas'); })->name('pentas');
Route::get('/galeri-detail', function () { return view('galeri-detail'); })->name('galeri.detail');
Route::get('/galeri-seni', function () { return view('galeri'); })->name('galeri');
Route::get('/kuliner', function () { return view('kuliner'); })->name('kuliner');


// --- RUTE TAMU (BELUM LOGIN) ---
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);
});


// --- RUTE USER LOGIN ---
Route::middleware('auth')->group(function () {
    Route::get('/welcome', function () { return view('welcome'); })->name('welcome');
    Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');
    
    // ============================================================
    // PERBAIKAN DI SINI:
    // Gunakan [GameController::class, 'index'] BUKAN function() {...}
    // ============================================================
    Route::get('/games', [GameController::class, 'index'])->name('games');

    // Rute Ulasan
    Route::get('/ulasan', [UlasanController::class, 'index'])->name('ulasan.index');
    Route::get('/ulasan/tambah', [UlasanController::class, 'create'])->name('ulasan.create');
    Route::post('/ulasan', [UlasanController::class, 'store'])->name('ulasan.store');
});


// --- RUTE ADMIN PANEL ---
Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->name('admin.')
    ->group(function () {
        
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // CRUD Admin
    Route::resource('users', UserController::class);
    Route::resource('games', AdminGameController::class); // Pakai Alias Admin
    Route::resource('ulasan', AdminUlasanController::class); // Pakai Alias Admin
});