@extends('admin.layout')

@section('title','Edit Prestasi')

@section('content')
<div class="container">
    <h4>Edit Prestasi</h4>

    <form action="{{ route('admin.prestasi.update',$prestasi->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')

        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" value="{{ $prestasi->judul }}">
        </div>

        <div class="mb-3">
            <label>Kelas</label>
            <input type="text" name="kelas" class="form-control" value="{{ $prestasi->kelas }}">
        </div>

        <div class="mb-3">
            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control" value="{{ $prestasi->tanggal }}">
        </div>

        <div class="mb-3">
            <label>Foto</label><br>
            <img src="{{ asset('storage/'.$prestasi->foto) }}" width="150" class="mb-2"><br>
            <input type="file" name="foto" class="form-control">
        </div>

        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
