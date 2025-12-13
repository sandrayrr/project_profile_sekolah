@extends('admin.layout')

@section('title','Edit Beranda')

@section('content')
<form action="{{ route('admin.beranda.update',$beranda->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Judul</label>
        <input type="text" name="judul"
               value="{{ $beranda->judul }}"
               class="form-control">
    </div>

    <div class="mb-3">
        <label>Deskripsi</label>
        <textarea name="deskripsi"
                  class="form-control">{{ $beranda->deskripsi }}</textarea>
    </div>

    <button class="btn btn-primary">Update</button>
</form>
@endsection
