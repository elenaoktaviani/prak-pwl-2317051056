@extends('layouts.app')

@section('content')
<div class="row justify-content-center w-100">
    <div class="col-md-8">
        <div class="card-custom">
            <h1 class="text-center mb-3 title-gradient">Tambahkan data Mahasiswa </h1>
            

            <form action="{{ route('user.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control rounded-pill" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
                </div>

                <div class="mb-3">
                    <label for="npm" class="form-label">NPM</label>
                    <input type="text" class="form-control rounded-pill" id="npm" name="npm" placeholder="Masukkan NPM" required>
                </div>

                <div class="mb-4">
                    <label for="kelas_id" class="form-label">Kelas</label>
                    <select id="kelas_id" name="kelas_id" class="form-select rounded-pill" required>
                        <option value="">-- Pilih Kelas --</option>
                        @foreach ($kelas as $kelasItem)
                            <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Tetap pakai btn-gradient -->
                <button type="submit" class="btn btn-gradient w-100 py-2">🚀 Simpan Pengguna</button>
            </form>
        </div>
    </div>
</div>

<!-- CSS khusus -->
<style>
.btn-gradient {
    background: #5bc0de; /* biru muda */
    border: none;
    color: white;
    font-weight: 500;
    transition: 0.3s;
    border-radius: 50px;
}

.btn-gradient:hover {
    background: #31b0d5; /* biru muda lebih gelap saat hover */
}
</style>
@endsection