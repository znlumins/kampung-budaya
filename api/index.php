<?php

// 1. Load Composer
require __DIR__ . '/../vendor/autoload.php';

// 2. Bootstrap Laravel Apps
$app = require __DIR__ . '/../bootstrap/app.php';

// --- BAGIAN PENTING (FIX VERCEL) ---
// Kita ubah lokasi storage ke folder /tmp yang boleh ditulis
$storagePath = '/tmp/storage';

// Buat folder jika belum ada
if (!is_dir($storagePath)) {
    mkdir($storagePath, 0777, true);
    // Buat subfolder wajib untuk Laravel
    mkdir($storagePath . '/framework/views', 0777, true);
    mkdir($storagePath . '/framework/cache', 0777, true);
    mkdir($storagePath . '/framework/sessions', 0777, true);
}

// Beritahu Laravel untuk pakai folder ini
$app->useStoragePath($storagePath);
// ------------------------------------

// 3. Jalankan Aplikasi
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);