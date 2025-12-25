@extends('admin.layout')

@section('content')
<div class="container">
    <h4 class="fw-bold mb-3">Tambah Ekstrakulikuler</h4>

    <form action="{{ route('admin.ekstrakulikuler.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Foto</label>
            <input type="file" name="foto" class="form-control" required>
        </div>

        <button class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
