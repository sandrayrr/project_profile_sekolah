@extends('admin.layout')
@section('title','Tambah Fasilitas')
@section('content')
<div class="container">
    <h4 class="fw-bold mb-3">Tambah Fasilitas</h4>

    <form action="{{ route('admin.fasilitas.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Foto</label>
            <input type="file" name="foto" class="form-control" required>
        </div>

        <button class="btn btn-primary">Simpan</button>
        <a href="{{ route('admin.fasilitas.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
