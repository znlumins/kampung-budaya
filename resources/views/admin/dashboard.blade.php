@extends('layouts.admin')

@section('content')
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Dashboard</h1>
        <p class="text-gray-600">Selamat datang kembali, {{ auth()->user()->name }}!</p>
    </div>

    <!-- Statistik Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <!-- Card User -->
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-4">
            <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center text-2xl">
                <ion-icon name="people"></ion-icon>
            </div>
            <div>
                <p class="text-sm text-gray-500">Total Pengguna</p>
                <h3 class="text-2xl font-bold">{{ \App\Models\User::count() }}</h3>
            </div>
        </div>

        <!-- Card Games -->
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-4">
            <div class="w-12 h-12 bg-green-100 text-green-600 rounded-full flex items-center justify-center text-2xl">
                <ion-icon name="game-controller"></ion-icon>
            </div>
            <div>
                <p class="text-sm text-gray-500">Total Soal Game</p>
                <h3 class="text-2xl font-bold">{{ \App\Models\Game::count() }}</h3>
            </div>
        </div>

        <!-- Card Ulasan -->
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-4">
            <div class="w-12 h-12 bg-purple-100 text-purple-600 rounded-full flex items-center justify-center text-2xl">
                <ion-icon name="chatbubbles"></ion-icon>
            </div>
            <div>
                <p class="text-sm text-gray-500">Total Ulasan</p>
                <h3 class="text-2xl font-bold">{{ \App\Models\Ulasan::count() }}</h3>
            </div>
        </div>
    </div>
@endsection