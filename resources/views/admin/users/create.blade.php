@extends('layouts.admin')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Tambah User Baru</h1>
    </div>

    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
        <form action="{{ route('admin.users.store') }}" method="POST">
            @csrf

            <!-- Nama -->
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Nama Lengkap</label>
                <input type="text" name="name" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-kb-orange focus:border-transparent outline-none" required>
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Email</label>
                <input type="email" name="email" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-kb-orange outline-none" required>
            </div>

            <!-- Role -->
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Role</label>
                <select name="role" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-kb-orange outline-none">
                    @foreach($roles as $role)
                        <option value="{{ $role->value }}">{{ $role->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Password -->
            <div class="mb-6">
                <label class="block text-gray-700 font-medium mb-2">Password</label>
                <input type="password" name="password" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-kb-orange outline-none" required>
            </div>

            <div class="flex gap-4">
                <button type="submit" class="bg-kb-orange text-white px-6 py-2 rounded-lg hover:bg-orange-600 transition font-medium">Simpan</button>
                <a href="{{ route('admin.users.index') }}" class="bg-gray-200 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-300 transition font-medium">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection