@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg border-0 rounded-4" style="background: linear-gradient(135deg, #e3f2fd, #bbdefb);">
        <div class="card-header text-white text-center rounded-top-4" style="background: linear-gradient(90deg, #5bc0de, #31b0d5);">
            <h3 class="mb-0 fw-bold">📘 Tambah Mata Kuliah Baru</h3>
        </div>

        <div class="card-body p-4">
            <form action="{{ route('matakuliah.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nama_mk" class="form-label fw-semibold text-dark">
                        🏷️ Nama Mata Kuliah
                    </label>
                    <input 
                        type="text" 
                        id="nama_mk" 
                        name="nama_mk" 
                        class="form-control border-2" 
                        placeholder="Contoh: Pemrograman Web Lanjut" 
                        required
                        style="border-color: #5bc0de;"
                    >
                </div>

                <div class="mb-3">
                    <label for="sks" class="form-label fw-semibold text-dark">
                        🎓 Jumlah SKS
                    </label>
                    <input 
                        type="number" 
                        id="sks" 
                        name="sks" 
                        class="form-control border-2" 
                        placeholder="Masukkan jumlah SKS" 
                        required
                        style="border-color: #31b0d5;"
                    >
                </div>

                <div class="text-center mt-4">
                    <button 
                        type="submit" 
                        class="btn fw-semibold text-white px-3 py-1" 
                        style="background: linear-gradient(90deg, #5bc0de, #31b0d5); border: none; transition: 0.3s; border-radius: 30px; font-size: 0.9rem;"
                        onmouseover="this.style.opacity='0.85'"
                        onmouseout="this.style.opacity='1'"
                    >
                        Simpan
                    </button>

                    <a 
                        href="{{ url('/matakuliah') }}" 
                        class="btn fw-semibold text-white ms-2 px-3 py-1" 
                        style="background: linear-gradient(90deg, #81d4fa, #4fc3f7); border: none; transition: 0.3s; border-radius: 30px; font-size: 0.9rem;"
                        onmouseover="this.style.opacity='0.85'"
                        onmouseout="this.style.opacity='1'"
                    >
                        Kembali
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
