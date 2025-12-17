@extends('layouts.admin')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Manajemen Akun</h1>
        <a href="{{ route('admin.users.create') }}" class="bg-kb-orange text-black px-4 py-2 rounded-lg hover:bg-orange-600 transition shadow-md">
            + Tambah User
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if(session('error'))
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
            {{ session('error') }}
        </div>
    @endif

    <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
        <table class="w-full text-left">
            <thead class="bg-gray-50 border-b border-gray-200">
                <tr>
                    <th class="px-6 py-4 font-semibold text-gray-600">Nama</th>
                    <th class="px-6 py-4 font-semibold text-gray-600">Email</th>
                    <th class="px-6 py-4 font-semibold text-gray-600">Role</th>
                    <th class="px-6 py-4 font-semibold text-gray-600">Bergabung</th>
                    <th class="px-6 py-4 font-semibold text-gray-600">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach($users as $user)
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-6 py-4 font-medium text-gray-800">{{ $user->name }}</td>
                    <td class="px-6 py-4 text-gray-600">{{ $user->email }}</td>
                    <td class="px-6 py-4">
                        <span class="px-3 py-1 rounded-full text-xs font-bold {{ $user->role->value === 'ADMIN' ? 'bg-purple-100 text-purple-700' : 'bg-green-100 text-green-700' }}">
                            {{ $user->role->value }}
                        </span>
                    </td>
                    <td class="px-6 py-4 text-gray-500 text-sm">{{ $user->created_at->format('d M Y') }}</td>
                    <td class="px-6 py-4 flex gap-3">
                        <a href="{{ route('admin.users.edit', $user) }}" class="text-blue-500 hover:text-blue-700 text-xl">
                            <ion-icon name="create-outline"></ion-icon>
                        </a>
                        <form action="{{ route('admin.users.destroy', $user) }}" method="POST" onsubmit="return confirm('Yakin hapus user ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700 text-xl pt-1">
                                <ion-icon name="trash-outline"></ion-icon>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $users->links() }}
    </div>
@endsection