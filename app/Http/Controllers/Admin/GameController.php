<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::latest()->paginate(5);
        return view('admin.games.index', compact('games'));
    }

    public function create()
    {
        return view('admin.games.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi Gambar
            'option_a' => 'required|string',
            'option_b' => 'required|string',
            'option_c' => 'required|string',
            'option_d' => 'required|string',
            'correct_answer' => 'required|in:a,b,c,d',
        ]);

        $data = $request->all();

        // PROSES UPLOAD GAMBAR
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('game-images', 'public');
            $data['image'] = $path;
        }

        Game::create($data);

        return redirect()->route('admin.games.index')->with('success', 'Soal berhasil ditambahkan!');
    }

    public function edit(Game $game)
    {
        return view('admin.games.edit', compact('game'));
    }

    public function update(Request $request, Game $game)
    {
        $request->validate([
            'question' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'option_a' => 'required|string',
            'option_b' => 'required|string',
            'option_c' => 'required|string',
            'option_d' => 'required|string',
            'correct_answer' => 'required|in:a,b,c,d',
        ]);

        $data = $request->all();

        // PROSES UPDATE GAMBAR
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($game->image) {
                Storage::disk('public')->delete($game->image);
            }
            // Upload yang baru
            $path = $request->file('image')->store('game-images', 'public');
            $data['image'] = $path;
        }

        $game->update($data);

        return redirect()->route('admin.games.index')->with('success', 'Soal berhasil diperbarui!');
    }

    public function destroy(Game $game)
    {
        // Hapus gambar saat soal dihapus
        if ($game->image) {
            Storage::disk('public')->delete($game->image);
        }
        
        $game->delete();
        return redirect()->route('admin.games.index')->with('success', 'Soal berhasil dihapus!');
    }
}