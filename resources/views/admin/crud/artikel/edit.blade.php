@extends('admin.layout')

@section('title','Edit Artikel')

@section('content')

{{-- resources/views/admin/artikel/edit.blade.php --}}
<form action="{{ route('admin.artikel.update', $artikel->id) }}"
      method="POST"
      enctype="multipart/form-data">
@csrf
@method('PUT')

<input type="text" name="judul"
       value="{{ $artikel->judul }}"
       class="form-control mb-2">

<input type="date" name="tanggal"
       value="{{ $artikel->tanggal }}"
       class="form-control mb-2">

<textarea name="deskripsi"
          class="form-control mb-2"
          rows="5">{{ $artikel->deskripsi }}</textarea>

@if($artikel->foto)
<img src="{{ asset('storage/'.$artikel->foto) }}"
     width="200" class="mb-2">
@endif

<input type="file" name="foto" class="form-control mb-3">

<button class="btn btn-primary">Update</button>
<a href="{{ route('admin.artikel.index') }}" class="btn btn-secondary">Kembali</a>
</form>
