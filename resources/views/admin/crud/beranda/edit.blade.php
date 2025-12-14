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

    <div class="row">
    <div class="col-md-4">
        <label class="form-label">Jumlah Siswa</label>
        <input type="number" name="jumlah_siswa"
               class="form-control"
               value="{{ old('jumlah_siswa', $beranda->jumlah_siswa ?? 0) }}">
    </div>

    <div class="col-md-4">
        <label class="form-label">Jumlah Guru</label>
        <input type="number" name="jumlah_guru"
               class="form-control"
               value="{{ old('jumlah_guru', $beranda->jumlah_guru ?? 0) }}">
    </div>

    <div class="col-md-4">
        <label class="form-label">Jumlah Jurusan</label>
        <input type="number" name="jumlah_jurusan"
               class="form-control"
               value="{{ old('jumlah_jurusan', $beranda->jumlah_jurusan ?? 0) }}">
    </div>
</div>


    <button class="btn btn-primary">Update</button>
</form>
@endsection
