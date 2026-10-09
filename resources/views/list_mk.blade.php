@extends('layouts.app')

@section('content')
<div class="container my-4">
    <h1>Daftar Mata Kuliah</h1>
    <a href="{{ route('matakuliah.create') }}" class="btn btn-primary mb-3">Tambah Mata Kuliah Baru</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
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
                        <a href="{{ route('matakuliah.edit', $mk->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection