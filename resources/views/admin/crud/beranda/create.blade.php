@extends('admin.layout')

@section('title','Tambah Beranda')

@section('content')

<form action="{{ route('admin.beranda.store') }}" method="POST">
@csrf

<div class="card shadow-sm border-0">

    {{-- HEADER --}}
    <div class="card-header bg-white fw-bold">
        <i class="bi bi-house-door me-1"></i> Tambah Konten Beranda
    </div>

    <div class="card-body">

        {{-- ================= SAMBUTAN ================= --}}
        <h6 class="fw-bold mb-3 text-primary">
            <i class="bi bi-megaphone me-1"></i> Sambutan
        </h6>

        <div class="mb-3">
            <label class="form-label fw-semibold">Judul Sambutan</label>
            <input type="text"
                   name="judul"
                   class="form-control @error('judul') is-invalid @enderror"
                   placeholder="Contoh: Sambutan Kepala Sekolah"
                   value="{{ old('judul') }}">

            @error('judul')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label class="form-label fw-semibold">Deskripsi Sambutan</label>
            <textarea name="deskripsi"
                      rows="4"
                      class="form-control"
                      placeholder="Isi sambutan kepala sekolah...">{{ old('deskripsi') }}</textarea>
        </div>

        <hr>

        {{-- ================= STATISTIK ================= --}}
        <h6 class="fw-bold mb-3 text-success">
            <i class="bi bi-bar-chart-fill me-1"></i> Statistik Sekolah
        </h6>

        <div class="row g-3 mb-4">
            <div class="col-md-4">
                <label class="form-label fw-semibold">Jumlah Siswa</label>
                <input type="number"
                       name="jumlah_siswa"
                       class="form-control"
                       value="{{ old('jumlah_siswa', 0) }}">
            </div>

            <div class="col-md-4">
                <label class="form-label fw-semibold">Jumlah Guru</label>
                <input type="number"
                       name="jumlah_guru"
                       class="form-control"
                       value="{{ old('jumlah_guru', 0) }}">
            </div>

            <div class="col-md-4">
                <label class="form-label fw-semibold">Jumlah Jurusan</label>
                <input type="number"
                       name="jumlah_jurusan"
                       class="form-control"
                       value="{{ old('jumlah_jurusan', 0) }}">
            </div>
        </div>

        {{-- ================= BUTTON ================= --}}
        <div class="d-flex justify-content-end gap-2">
            <a href="{{ route('admin.beranda.index') }}"
               class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Kembali
            </a>

            <button class="btn btn-success">
                <i class="bi bi-save"></i> Simpan Beranda
            </button>
        </div>

    </div>
</div>

</form>
@endsection
