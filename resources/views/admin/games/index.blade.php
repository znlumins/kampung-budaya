@extends('layouts.admin')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Manajemen Games (Kuis)</h1>
        <a href="{{ route('admin.games.create') }}" class="bg-kb-orange text-black px-4 py-2 rounded-lg hover:bg-orange-600 transition shadow-md">
            + Tambah Soal
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="space-y-4">
        @foreach($games as $game)
        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition">
            <div class="flex justify-between items-start">
                <div class="flex-1">
                    <h3 class="font-bold text-lg text-gray-800 mb-2">Soal: {{ $game->question }}</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 text-sm text-gray-600">
                        <p><span class="font-bold text-kb-orange">A.</span> {{ $game->option_a }}</p>
                        <p><span class="font-bold text-kb-orange">B.</span> {{ $game->option_b }}</p>
                        <p><span class="font-bold text-kb-orange">C.</span> {{ $game->option_c }}</p>
                        <p><span class="font-bold text-kb-orange">D.</span> {{ $game->option_d }}</p>
                    </div>
                    <div class="mt-3">
                        <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded font-bold">
                            Jawaban Benar: {{ strtoupper($game->correct_answer) }}
                        </span>
                    </div>
                </div>
                
                <div class="flex gap-2 ml-4">
                    <a href="{{ route('admin.games.edit', $game) }}" class="bg-blue-100 text-blue-600 p-2 rounded-lg hover:bg-blue-200 transition">
                        <ion-icon name="create"></ion-icon>
                    </a>
                    <form action="{{ route('admin.games.destroy', $game) }}" method="POST" onsubmit="return confirm('Yakin hapus soal ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-100 text-red-600 p-2 rounded-lg hover:bg-red-200 transition">
                            <ion-icon name="trash"></ion-icon>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="mt-6">
        {{ $games->links() }}
    </div>
@endsection