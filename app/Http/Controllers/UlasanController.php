<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ulasan;
use Illuminate\Support\Facades\Auth;

class UlasanController extends Controller
{
    // 1. Tampilkan semua ulasan orang-orang
    public function index()
    {
        $ulasans = Ulasan::with('user')->latest()->paginate(9);
        return view('ulasan.index', compact('ulasans'));
    }

    // 2. Tampilkan Form Tambah Ulasan
    public function create()
    {
        return view('ulasan.create');
    }

    // 3. Simpan Ulasan ke Database
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string|min:5|max:500',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        Ulasan::create([
            'user_id' => Auth::id(), // Otomatis ambil ID user yang sedang login
            'content' => $request->content,
            'rating' => $request->rating,
        ]);

        return redirect()->route('ulasan.index')->with('success', 'Terima kasih! Ulasan Anda berhasil dikirim.');
    }
}