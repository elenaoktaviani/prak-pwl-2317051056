@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <style>
        /* --- Card Form --- */
        .card-edit {
            background: white;
            padding: 30px 40px;
            border-radius: 20px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
            border-top: 6px solid #5bc0de; /* biru muda */
        }

        h1 {
            color: #0275d8; /* biru utama */
            font-weight: 700;
            margin-bottom: 25px;
            text-align: center;
        }

        label {
            font-weight: 600;
            color: #0275d8;
            display: block;
            margin-top: 10px;
            text-align: left;
        }

        input {
            width: 100%;
            padding: 10px 15px;
            border: 2px solid #bce0ee; /* border biru lembut */
            border-radius: 10px;
            outline: none;
            transition: 0.3s;
            font-size: 16px;
            margin-bottom: 15px;
            background-color: #e3f7fc; /* latar lembut */
        }

        input:focus {
            border-color: #5bc0de;
            box-shadow: 0 0 5px rgba(91, 192, 222, 0.6);
        }

        .btn-submit {
            background-color: #5bc0de; /* biru muda */
            color: white;
            padding: 10px 25px;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            transition: 0.3s;
            display: block;
            width: 100%;
            margin-top: 10px;
        }

        .btn-submit:hover {
            background-color: #31b0d5; /* biru muda lebih gelap */
            transform: translateY(-2px);
        }

        a.btn-back {
            display: inline-block;
            margin-top: 15px;
            color: #0275d8;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
        }

        a.btn-back:hover {
            color: #5bc0de;
            text-decoration: underline;
        }

        /* --- Toast Notification --- */
        .toast-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1055;
        }

        .toast {
            background: #22c55e; /* hijau sukses */
            color: white;
            padding: 12px 18px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            font-weight: 500;
            animation: fadeIn 0.3s ease, fadeOut 0.5s ease 3s forwards;
        }

        .toast.error {
            background: #d9534f; /* merah error */
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeOut {
            to { opacity: 0; transform: translateY(-10px); }
        }
    </style>

    {{-- ✅ Notifikasi popup di kanan atas --}}
    @if (session('success') || session('error'))
    <div class="toast-container">
        @if (session('success'))
            <div class="toast" id="toast-msg">{{ session('success') }}</div>
        @endif
        @if (session('error'))
            <div class="toast error" id="toast-msg">{{ session('error') }}</div>
        @endif
    </div>
    @endif

    <div class="card-edit">
        <h1>✏ Edit Mata Kuliah</h1>

        <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="nama_mk">Nama Mata Kuliah:</label>
            <input type="text" id="nama_mk" name="nama_mk" value="{{ $mk->nama_mk }}" required>

            <label for="sks">SKS:</label>
            <input type="number" id="sks" name="sks" value="{{ $mk->sks }}" min="1" max="3" required>

            <button type="submit" class="btn-submit">💾 Simpan Perubahan</button>
        </form>

        <a href="{{ route('matakuliah.index') }}" class="btn-back">← Kembali ke Daftar</a>
    </div>
</div>

{{-- Script untuk auto-hilang setelah 3 detik --}}
<script>
    setTimeout(() => {
        const toast = document.querySelector('.toast');
        if (toast) toast.remove();
    }, 3500);
</script>
@endsection
