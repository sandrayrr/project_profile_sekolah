@extends('admin.layout')
@section('title','Edit Fasilitas')

@section('content')
<div class="container">
    <h4 class="fw-bold mb-3">Edit Fasilitas</h4>
    
<form action="{{ route('admin.fasilitas.update', $fasilitas) }}" 
      method="POST" 
      enctype="multipart/form-data">
    @csrf
    @method('PUT')

        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" value="{{ $fasilitas->judul }}" required>
        </div>

        <div class="mb-3">
            <label>Foto</label><br>
            <img src="{{ asset('storage/'.$fasilitas->foto) }}" width="150" class="mb-2 rounded"><br>
            <input type="file" name="foto" class="form-control">
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('admin.fasilitas.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
