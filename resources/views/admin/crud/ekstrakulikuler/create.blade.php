@extends('admin.layout')

@section('title', 'Tambah Ekstrakulikuler')

@section('content')

{{-- ERROR VALIDATION --}}
@if ($errors->any())
    <div class="alert alert-danger shadow-sm">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold mb-0">Tambah Ekstrakulikuler</h4>
        <a href="{{ route('admin.ekstrakulikuler.index') }}" class="btn btn-light">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>
    </div>

    {{-- FORM --}}
    <div class="card border-0 shadow-sm">
        <div class="card-body">

            <form action="{{ route('admin.ekstrakulikuler.store') }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf

                {{-- JUDUL --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">Judul Ekstrakulikuler</label>
                    <input type="text"
                           name="judul"
                           value="{{ old('judul') }}"
                           class="form-control"
                           placeholder="Contoh: Futsal, Pramuka, Tari Tradisional"
                           required>
                </div>

                {{-- KATEGORI --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">Kategori</label>
                    <select name="kategori"
                            class="form-select"
                            required>
                        <option value="">-- Pilih Kategori --</option>
                        <option value="Olahraga" {{ old('kategori')=='Olahraga'?'selected':'' }}>Olahraga</option>
                        <option value="Seni" {{ old('kategori')=='Seni'?'selected':'' }}>Seni</option>
                        <option value="Kepramukaan" {{ old('kategori')=='Kepramukaan'?'selected':'' }}>Kepramukaan</option>
                        <option value="Keagamaan" {{ old('kategori')=='Keagamaan'?'selected':'' }}>Keagamaan</option>
                        <option value="Akademik" {{ old('kategori')=='Akademik'?'selected':'' }}>Akademik</option>
                        <option value="Lainnya" {{ old('kategori')=='Lainnya'?'selected':'' }}>Lainnya</option>
                    </select>
                </div>

                {{-- FOTO --}}
                <div class="mb-4">
                    <label class="form-label fw-semibold">Foto</label>
                    <input type="file"
                           name="foto"
                           class="form-control"
                           accept="image/*"
                           required>
                    <small class="text-muted">
                        JPG / PNG • Maks 2MB
                    </small>
                </div>

                {{-- BUTTON --}}
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.ekstrakulikuler.index') }}"
                       class="btn btn-secondary">
                        Batal
                    </a>
                    <button class="btn btn-success px-4">
                        <i class="bi bi-save me-1"></i> Simpan
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>

@endsection
