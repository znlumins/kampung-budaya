@extends('layouts.admin')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Edit User</h1>
    </div>

    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
        <form action="{{ route('admin.users.update', $user) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Nama -->
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Nama Lengkap</label>
                <input type="text" name="name" value="{{ $user->name }}" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-kb-orange outline-none" required>
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Email</label>
                <input type="email" name="email" value="{{ $user->email }}" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-kb-orange outline-none" required>
            </div>

            <!-- Role -->
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Role</label>
                <select name="role" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-kb-orange outline-none">
                    @foreach($roles as $role)
                        <option value="{{ $role->value }}" {{ $user->role === $role ? 'selected' : '' }}>
                            {{ $role->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Password -->
            <div class="mb-6">
                <label class="block text-gray-700 font-medium mb-2">Password Baru <span class="text-sm font-normal text-gray-500">(Kosongkan jika tidak ingin mengubah)</span></label>
                <input type="password" name="password" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-kb-orange outline-none">
            </div>

            <div class="flex gap-4">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition font-medium">Update</button>
                <a href="{{ route('admin.users.index') }}" class="bg-gray-200 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-300 transition font-medium">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection