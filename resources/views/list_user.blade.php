@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fw-bold">Daftar Pengguna</h1>
        <a href="{{ route('user.create') }}" class="btn btn-primary">+ Tambah User</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <x-user-table :users="$users" />
        </div>
    </div>
</div>
@endsection