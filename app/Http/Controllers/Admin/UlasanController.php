<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ulasan;
use Illuminate\Http\Request;

class UlasanController extends Controller
{
    // 1. Tampilkan Daftar Ulasan
    public function index()
    {
        // Ambil ulasan beserta data User-nya (Eager Loading) biar hemat query
        $ulasans = Ulasan::with('user')->latest()->paginate(10);
        
        return view('admin.ulasan.index', compact('ulasans'));
    }

    // (Kita tidak butuh create/store/edit/update untuk Admin)

    // 2. Hapus Ulasan (Moderasi)
    public function destroy(Ulasan $ulasan)
    {
        $ulasan->delete();
        return redirect()->route('admin.ulasan.index')->with('success', 'Ulasan berhasil dihapus.');
    }
}