@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-[#E0F2FE] py-8">
    <div class="w-full max-w-4xl mx-auto">
        <h1 class="text-center text-3xl font-bold mb-6 bg-gradient-to-r from-sky-400 to-white text-transparent bg-clip-text">
            Daftar Mahasiswa Ilmu Komputer
        </h1>

        <!-- Tombol Tambah Pengguna -->
        <div style="text-align:right; margin-bottom:1rem;">
            <a href="{{ route('user.create') }}" 
               class="btn btn-success"
               style="background:linear-gradient(90deg,#60a5fa,#ffffff); 
                      color:#1e3a8a; 
                      padding:0.5rem 1.2rem; 
                      border-radius:6px; 
                      text-decoration:none; 
                      font-weight:600;">
                + Tambahkan User
            </a>
        </div>

        <!-- Tabel dengan warna biru muda -->
        <div class="bg-gradient-to-r from-sky-200 to-white rounded-lg shadow overflow-hidden">
            @include('component/user_table', ['users' => $users])
        </div>
    </div>
</div>
@endsection

<!-- INI KODE LIST USER BLADE -->