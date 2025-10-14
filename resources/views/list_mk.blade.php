@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <style>
        .card-mk {
            background: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            border-top: 6px solid #5bc0de; /* biru muda */
        }

        h1 {
            color: #0275d8; /* biru utama */
            font-weight: 700;
            margin-bottom: 20px;
        }

        .btn-tambah {
            display: inline-block;
            background-color: #5bc0de; /* biru muda */
            color: white;
            padding: 10px 20px;
            border-radius: 10px;
            text-decoration: none;
            transition: 0.3s;
            font-weight: 600;
        }

        .btn-tambah:hover {
            background-color: #31b0d5; /* biru muda lebih gelap */
            transform: translateY(-2px);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 16px;
        }

        th {
            background-color: #5bc0de; /* biru muda */
            color: white;
            padding: 12px;
            text-transform: uppercase;
            border: none;
        }

        td {
            background-color: #e3f7fc; /* biru muda lembut */
            padding: 10px;
            border-bottom: 2px solid #bce0ee; /* border halus biru */
        }

        tr:hover td {
            background-color: #d0edf5; /* efek hover lembut */
        }

        .btn-aksi {
            display: inline-block;
            margin: 0 3px;
            padding: 5px 10px;
            border-radius: 6px;
            font-size: 14px;
            text-decoration: none;
            font-weight: 600;
        }

        .btn-edit {
            background-color: #5bc0de;
            color: white;
        }

        .btn-edit:hover {
            background-color: #31b0d5;
        }

        .btn-hapus {
            background-color: #d9534f;
            color: white;
            border: none;
            cursor: pointer;
        }

        .btn-hapus:hover {
            background-color: #c9302c;
        }
    </style>

    <div class="card-mk">
        <h1>📚 Daftar Mata Kuliah</h1>
        <a href="{{ route('matakuliah.create') }}" class="btn-tambah">➕ Tambah Mata Kuliah Baru</a>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mks as $mk)
                <tr>
                    <td>{{ $mk->id }}</td>
                    <td>{{ $mk->nama_mk }}</td>
                    <td>{{ $mk->sks }}</td>
                    <td>
                        <a href="{{ route('matakuliah.edit', $mk->id) }}" class="btn-aksi btn-edit">Edit</a>
                        <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-aksi btn-hapus" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
