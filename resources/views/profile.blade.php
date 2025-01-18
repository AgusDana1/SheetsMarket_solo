@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="min-h-screen bg-gray-100 flex items-center justify-center">
    <div class="bg-white shadow rounded-lg w-full max-w-4xl">
        <a href="{{ route('dashboard') }}">
            <i class="bi bi-arrow-left p-2 px-3 w-23"></i>
        </a>
        <form action="{{ route('profile.upload') }}" method="POST" enctype="multipart/form-data" class="p-6">
            @csrf

            <div class="flex flex-col md:flex-row md:items-center md:space-x-4 space-y-6 md:space-y-0">
                <!-- Bagian Foto Profil -->
                <div class="flex flex-col items-center w-full md:w-1/3">
                    <img 
                        class="w-52 h-52 rounded-md border-2 border-gray-300 object-cover" 
                        src="{{ $user->profile_picture ? asset('storage/' . $user->profile_picture) : asset('default.png') }}" 
                        alt="Profile Picture"
                    >
                    <input 
                        type="file" 
                        name="profile_picture" 
                        id="profile_picture" 
                        class="mt-2 p-2 border border-gray-300 rounded-md w-full"
                    >
                </div>

                <!-- Bagian Biodata -->
                <div class="flex-1 w-full">
                    <h2 class="text-xl font-semibold">Biodata Diri</h2>
                    <div class="mt-4 space-y-4">
                        <!-- Nama -->
                        <div>
                            <label class="text-sm font-medium text-gray-700">Nama:</label>
                            <input type="text" name="name" class="w-full mt-1 border rounded px-4 py-2" value="{{ $user->name }}" readonly>
                        </div>

                        <!-- Tanggal Lahir -->
                        <div>
                            <label class="text-sm font-medium text-gray-700">Tanggal Lahir:</label>
                            <input type="date" name="birth_date" class="w-full mt-1 border rounded px-4 py-2" value="{{ $user->birth_date ? $user->birth_date->format('Y-m-d') : '' }}" required>
                        </div>

                        <!-- Jenis Kelamin -->
                        <div>
                            <label class="text-sm font-medium text-gray-700">Jenis Kelamin:</label>
                            <select name="gender" class="w-full mt-1 border rounded px-4 py-2" required>
                                <option value="male" {{ $user->gender == 'male' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="female" {{ $user->gender == 'female' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <!-- Bagian Ubah Kontak -->
                    <h2 class="text-xl font-semibold mt-6">Ubah Kontak</h2>
                    <div class="mt-4 space-y-4">
                        <!-- Email -->
                        <div>
                            <label class="text-sm font-medium text-gray-700">Email:</label>
                            <input type="email" name="email" class="w-full mt-1 border rounded px-4 py-2" value="{{ $user->email }}" readonly>
                        </div>

                        <!-- No HP -->
                        <div>
                            <label class="text-sm font-medium text-gray-700">No HP:</label>
                            <input type="text" name="phone" class="w-full mt-1 border rounded px-4 py-2" value="{{ $user->phone }}" required>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tombol Simpan -->
            <div class="mt-6 flex justify-end">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
