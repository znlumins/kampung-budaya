@extends('layouts.admin')

@section('content')
    <div class="mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Manajemen Ulasan Pengunjung</h1>
        <p class="text-gray-600">Pantau apa kata pengunjung tentang Kampung Budaya.</p>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
        <table class="w-full text-left">
            <thead class="bg-gray-50 border-b border-gray-200">
                <tr>
                    <th class="px-6 py-4 font-semibold text-gray-600">Pengguna</th>
                    <th class="px-6 py-4 font-semibold text-gray-600 w-1/2">Isi Ulasan</th>
                    <th class="px-6 py-4 font-semibold text-gray-600">Rating</th>
                    <th class="px-6 py-4 font-semibold text-gray-600">Tanggal</th>
                    <th class="px-6 py-4 font-semibold text-gray-600">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($ulasans as $ulasan)
                <tr class="hover:bg-gray-50 transition">
                    <!-- Nama User -->
                    <td class="px-6 py-4">
                        <div class="font-medium text-gray-800">{{ $ulasan->user->name }}</div>
                        <div class="text-xs text-gray-500">{{ $ulasan->user->email }}</div>
                    </td>

                    <!-- Isi Ulasan -->
                    <td class="px-6 py-4 text-gray-600 italic">
                        "{{ Str::limit($ulasan->content, 100) }}"
                    </td>

                    <!-- Rating Bintang -->
                    <td class="px-6 py-4 text-yellow-500 text-lg">
                        @for($i = 0; $i < $ulasan->rating; $i++)
                            ★
                        @endfor
                        <span class="text-xs text-gray-400 ml-1">({{ $ulasan->rating }}/5)</span>
                    </td>

                    <!-- Tanggal -->
                    <td class="px-6 py-4 text-gray-500 text-sm">
                        {{ $ulasan->created_at->format('d M Y') }}
                    </td>

                    <!-- Aksi Hapus -->
                    <td class="px-6 py-4">
                        <form action="{{ route('admin.ulasan.destroy', $ulasan) }}" method="POST" onsubmit="return confirm('Hapus ulasan ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-100 text-red-600 hover:bg-red-200 px-3 py-1 rounded-lg text-sm font-medium transition flex items-center gap-1">
                                <ion-icon name="trash"></ion-icon> Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-6 py-8 text-center text-gray-500">
                        Belum ada ulasan yang masuk.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $ulasans->links() }}
    </div>
@endsection