@extends('admin.layout')

@section('title','Tambah Agenda')

@section('content')
<div class="container-fluid">

    {{-- HEADER + BREADCRUMB --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <h1 class="h4 fw-bold mb-1">
                ➕ Tambah Agenda
            </h1>
            <small class="text-muted">
                Tambahkan agenda atau kegiatan sekolah baru
            </small>
        </div>

        <nav aria-label="breadcrumb">
            {{-- <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.agenda.index') }}">Agenda</a>
                </li>
                <li class="breadcrumb-item active">Tambah</li>
            </ol> --}}
        </nav>
    </div>

    {{-- CARD FORM --}}
    <div class="card shadow-sm border-0">
        <div class="card-header bg-white fw-bold text-primary">
            Form Tambah Agenda
        </div>

        <div class="card-body">
            <form action="{{ route('admin.agenda.store') }}" method="POST">
                @csrf

                {{-- JUDUL --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Judul Agenda
                    </label>
                    <input type="text"
                           name="judul"
                           class="form-control @error('judul') is-invalid @enderror"
                           value="{{ old('judul') }}"
                           placeholder="Contoh: Rapat Orang Tua Siswa"
                           required>
                    @error('judul')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- DESKRIPSI --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Deskripsi
                    </label>
                    <textarea name="deskripsi"
                              rows="4"
                              class="form-control"
                              placeholder="Deskripsi singkat agenda...">{{ old('deskripsi') }}</textarea>
                </div>

                {{-- TANGGAL & WAKTU --}}
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">
                            Tanggal
                        </label>
                        <input type="date"
                               name="tanggal"
                               class="form-control"
                               value="{{ old('tanggal') }}"
                               required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">
                            Waktu
                        </label>
                        <input type="time"
                               name="waktu"
                               class="form-control"
                               value="{{ old('waktu') }}"
                               required>
                    </div>
                </div>

                {{-- BUTTON --}}
                <div class="d-flex justify-content-end gap-2 mt-4">
                    <a href="{{ route('admin.agenda.index') }}"
                       class="btn btn-secondary">
                        Kembali
                    </a>

                    <button class="btn btn-primary shadow-sm">
                        <i class="bi bi-save me-1"></i> Simpan Agenda
                    </button>
                </div>

            </form>
        </div>
    </div>

</div>
@endsection
