@extends('layouts.admin')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Edit Soal</h1>
    </div>

    <div class="bg-white rounded-xl shadow-sm p-8 border border-gray-100">
        <!-- PENTING: enctype="multipart/form-data" AGAR BISA UPLOAD -->
        <form action="{{ route('admin.games.update', $game) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Soal -->
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Pertanyaan</label>
                <textarea name="question" rows="3" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-kb-orange outline-none" required>{{ $game->question }}</textarea>
            </div>

            <!-- Input Gambar -->
            <div class="mb-6">
                <label class="block text-gray-700 font-bold mb-2">Gambar Soal</label>
                
                @if($game->image)
                    <div class="mb-3">
                        <img src="{{ asset('storage/' . $game->image) }}" class="h-40 rounded-lg shadow-md object-cover border">
                        <p class="text-xs text-gray-500 mt-1">Gambar saat ini</p>
                    </div>
                @endif

                <input type="file" name="image" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-orange-50 file:text-orange-700 hover:file:bg-orange-100">
                <p class="text-xs text-gray-500 mt-1">Biarkan kosong jika tidak ingin mengubah gambar.</p>
            </div>

            <!-- Pilihan Jawaban -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Pilihan A</label>
                    <input type="text" name="option_a" value="{{ $game->option_a }}" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-kb-orange outline-none" required>
                </div>
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Pilihan B</label>
                    <input type="text" name="option_b" value="{{ $game->option_b }}" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-kb-orange outline-none" required>
                </div>
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Pilihan C</label>
                    <input type="text" name="option_c" value="{{ $game->option_c }}" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-kb-orange outline-none" required>
                </div>
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Pilihan D</label>
                    <input type="text" name="option_d" value="{{ $game->option_d }}" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-kb-orange outline-none" required>
                </div>
            </div>

            <!-- Kunci Jawaban -->
            <div class="mb-8">
                <label class="block text-gray-700 font-bold mb-2">Kunci Jawaban Benar</label>
                <div class="flex gap-6">
                    @foreach(['a', 'b', 'c', 'd'] as $opt)
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="radio" name="correct_answer" value="{{ $opt }}" 
                               class="w-5 h-5 text-kb-orange focus:ring-kb-orange" 
                               {{ $game->correct_answer == $opt ? 'checked' : '' }}>
                        <span class="font-bold text-gray-700">{{ strtoupper($opt) }}</span>
                    </label>
                    @endforeach
                </div>
            </div>

            <div class="flex gap-4 border-t pt-6">
                <button type="submit" class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition font-bold shadow-lg">Update Soal</button>
                <a href="{{ route('admin.games.index') }}" class="bg-gray-100 text-gray-600 px-8 py-3 rounded-lg hover:bg-gray-200 transition font-bold">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection