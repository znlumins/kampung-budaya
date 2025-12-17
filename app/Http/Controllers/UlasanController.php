<?php

namespace App\Http\Controllers;

use App\Models\Ulasan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UlasanController extends Controller
{
    /**
     * Menampilkan daftar semua ulasan.
     */
    public function index()
    {
        // Ambil semua data ulasan dari database, urutkan dari yang paling baru
        $ulasans = Ulasan::latest()->get();

        // Kirim data ulasan ke view 'ulasan.index'
        return view('ulasan.index', [
            'ulasans' => $ulasans
        ]);
    }

    /**
     * Menampilkan form untuk membuat ulasan baru.
     */
    public function create()
    {
        return view('ulasan.create');
    }

    /**
     * Menyimpan ulasan baru ke database.
     */
    public function store(Request $request)
    {
        // 1. Validasi input dari form
        $validatedData = $request->validate([
            'status' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'deskripsi' => 'required|string',
        ]);

        // 2. Tambahkan nama pengguna yang sedang login ke data
        $validatedData['nama'] = Auth::user()->name;

        // 3. Simpan data yang sudah divalidasi ke database
        Ulasan::create($validatedData);

        // 4. Arahkan kembali ke halaman daftar ulasan dengan pesan sukses
        return redirect()->route('ulasan.index')->with('success', 'Ulasan berhasil ditambahkan!');
    }
}