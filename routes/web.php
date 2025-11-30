<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; // Jangan lupa import ini di paling atas
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk menampilkan halaman Login
Route::get('/login', function () {
    return view('auth.login'); // Sesuaikan dengan nama folder/file kamu
})->name('login');

// Route untuk menampilkan halaman Register
Route::get('/register', function () {
    return view('auth.register'); // Sesuaikan dengan nama folder/file kamu
})->name('register');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/pentas-seni', function () {
    return view('pentas');
})->name('pentas');

Route::get('/galeri-detail', function () {
    return view('galeri-detail');
})->name('galeri.detail');

Route::get('/galeri-seni', function () {
    return view('galeri');
})->name('galeri');

Route::get('/kuliner', function () {
    return view('kuliner');
})->name('kuliner');

// 1. ROUTE GAME (Diproteksi middleware 'auth')
// Artinya: Hanya user yang sudah login yang bisa masuk sini.
Route::get('/games', function () {
    return view('game');
})->middleware('auth')->name('games');


// 2. ROUTE UNTUK "PURA-PURA LOGIN" (Hanya untuk testing develop)
// Buka link '/test-login' di browser, maka kamu akan otomatis dianggap sudah login.
Route::get('/test-login', function () {
    // Kita buat user palsu sementara di session
    $user = new \App\Models\User();
    $user->id = 1;
    $user->name = 'Pengunjung Budaya';
    $user->email = 'tamu@budaya.com';
    
    Auth::login($user);
    
    return redirect('/games'); // Langsung lempar ke halaman game
});

// 3. ROUTE UNTUK LOGOUT (Agar bisa tes tampilan kalau belum login)
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});

Route::get('/test-login', function () {
    // Cari user yang barusan kita buat
    $user = User::where('email', 'test@test.com')->first();
    
    // Login-kan dia
    Auth::login($user);
    
    return redirect('/games');
});

// Group Route yang butuh Login
Route::middleware(['auth'])->group(function () {

    // 1. Halaman Daftar Ulasan
    Route::get('/ulasan', function () {
        return view('ulasan.index');
    })->name('ulasan.index');

    // 2. Halaman Form Tambah Ulasan
    Route::get('/ulasan/tambah', function () {
        return view('ulasan.create');
    })->name('ulasan.create');

});