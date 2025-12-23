@extends('admin.layout')

@section('title', 'Edit Beranda')

@section('content')
<div class="container-fluid">

    {{-- HEADER + BREADCRUMB --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <h1 class="h4 fw-bold mb-1">
                🏠 Edit Beranda
            </h1>
            <small class="text-muted">
                Perbarui sambutan kepala sekolah & statistik beranda
            </small>
        </div>

        <nav aria-label="breadcrumb">
            {{-- <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.beranda.index') }}">Beranda</a>
                </li>
                <li class="breadcrumb-item active">Edit</li>
            </ol> --}}
        </nav>
    </div>

    {{-- CARD FORM --}}
    <div class="card shadow-sm border-0">
        <div class="card-header bg-white fw-semibold">
            <i class="bi bi-pencil-square me-1"></i> Form Edit Beranda
        </div>

        <div class="card-body">
            <form action="{{ route('admin.beranda.update', $beranda->id) }}"
                  method="POST">
                @csrf
                @method('PUT')

                {{-- JUDUL --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Judul Sambutan
                    </label>
                    <input type="text"
                           name="judul"
                           class="form-control @error('judul') is-invalid @enderror"
                           value="{{ old('judul', $beranda->judul) }}"
                           required>

                    @error('judul')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- DESKRIPSI --}}
                <div class="mb-4">
                    <label class="form-label fw-semibold">
                        Deskripsi Sambutan
                    </label>
                    <textarea name="deskripsi"
                              rows="5"
                              class="form-control @error('deskripsi') is-invalid @enderror"
                              placeholder="Isi sambutan kepala sekolah...">{{ old('deskripsi', $beranda->deskripsi) }}</textarea>

                    @error('deskripsi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- STATISTIK --}}
                <div class="row mb-4">
                    <div class="col-md-4">
                        <label class="form-label fw-semibold">
                            Jumlah Siswa
                        </label>
                        <input type="number"
                               name="jumlah_siswa"
                               class="form-control"
                               value="{{ old('jumlah_siswa', $beranda->jumlah_siswa) }}">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label fw-semibold">
                            Jumlah Guru
                        </label>
                        <input type="number"
                               name="jumlah_guru"
                               class="form-control"
                               value="{{ old('jumlah_guru', $beranda->jumlah_guru) }}">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label fw-semibold">
                            Jumlah Jurusan
                        </label>
                        <input type="number"
                               name="jumlah_jurusan"
                               class="form-control"
                               value="{{ old('jumlah_jurusan', $beranda->jumlah_jurusan) }}">
                    </div>
                </div>

                {{-- BUTTON --}}
                <div class="d-flex gap-2">
                    <button class="btn btn-primary">
                        <i class="bi bi-save me-1"></i> Update
                    </button>

                    <a href="{{ route('admin.beranda.index') }}"
                       class="btn btn-secondary">
                        Kembali
                    </a>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
