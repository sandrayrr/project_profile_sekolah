@extends('admin.layout')

@section('title','Tambah Galeri')

@section('content')
<div class="container-fluid">

    {{-- HEADER --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <h1 class="h4 fw-bold mb-1">
                🖼️ Tambah Galeri
            </h1>
            <small class="text-muted">
                Tambahkan foto kegiatan ke galeri sekolah
            </small>
        </div>
    </div>

    {{-- CARD FORM --}}
    <div class="card shadow-sm border-0">
        <div class="card-body">

            <form action="{{ route('admin.galeri.store') }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf

                {{-- JUDUL --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Judul Foto
                    </label>
                    <input type="text"
                           name="judul"
                           class="form-control @error('judul') is-invalid @enderror"
                           placeholder="Contoh: Kegiatan Upacara Bendera"
                           value="{{ old('judul') }}">

                    @error('judul')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- FOTO --}}
                <div class="mb-4">
                    <label class="form-label fw-semibold">
                        Upload Foto
                    </label>
                    <input type="file"
                           name="foto"
                           class="form-control @error('foto') is-invalid @enderror">

                    <small class="text-muted d-block mt-1">
                        Format JPG / PNG, maksimal 2MB
                    </small>

                    @error('foto')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- ACTION --}}
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.galeri.index') }}"
                       class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>

                    <button type="submit"
                            class="btn btn-primary">
                        <i class="bi bi-save"></i> Simpan Galeri
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>
@endsection
