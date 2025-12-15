@extends('admin.layout')

@section('title','Tambah Galeri')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Tambah Galeri</h5>
        </div>

        <div class="card-body">
            <form action="{{ route('admin.galeri.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Judul Galeri</label>
                    <input 
                        type="text" 
                        name="judul" 
                        class="form-control @error('judul') is-invalid @enderror"
                        placeholder="Masukkan judul galeri"
                        value="{{ old('judul') }}"
                    >
                    @error('judul')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Foto</label>
                    <input 
                        type="file" 
                        name="foto" 
                        class="form-control @error('foto') is-invalid @enderror"
                    >
                    @error('foto')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.galeri.index') }}" class="btn btn-secondary">
                        Kembali
                    </a>
                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
