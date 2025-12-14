@extends('admin.layout')

@section('title','Tambah Beranda')

@section('content')

<div class="card shadow-sm">
    <div class="card-header bg-white fw-bold">
        Tambah Data Beranda
    </div>

    <div class="card-body">
        <form action="{{ route('admin.beranda.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label fw-semibold">Judul</label>
                <input type="text" name="judul"
                       class="form-control @error('judul') is-invalid @enderror"
                       value="{{ old('judul') }}">

                @error('judul')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Deskripsi</label>
                <textarea name="deskripsi"
                          rows="4"
                          class="form-control">{{ old('deskripsi') }}</textarea>
            </div>

            <div class="d-flex gap-2">
                <button class="btn btn-success">
                    <i class="bi bi-save"></i> Simpan
                </button>

                <a href="{{ route('admin.beranda.index') }}"
                   class="btn btn-secondary">
                    Kembali
                </a>
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
 
        </form>
    </div>
</div>

@endsection
