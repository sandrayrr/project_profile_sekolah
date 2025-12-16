@extends('admin.layout')

@section('title', 'Edit Artikel')

@section('content')
<div class="container-fluid">

    {{-- HEADER + BREADCRUMB --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            <i class="bi bi-newspaper me-2"></i> Edit Artikel
        </h1>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.artikel.index') }}">Artikel</a>
                </li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>
    </div>

    {{-- CARD FORM --}}
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 fw-bold text-primary">Form Edit Artikel</h6>
        </div>

        <div class="card-body">
            <form action="{{ route('admin.artikel.update', $artikel->id) }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- JUDUL --}}
                <div class="row mb-3">
                    <label class="col-md-2 col-form-label fw-bold">
                        Judul
                    </label>
                    <div class="col-md-10">
                        <input type="text"
                               name="judul"
                               class="form-control @error('judul') is-invalid @enderror"
                               value="{{ old('judul', $artikel->judul) }}"
                               required>
                        @error('judul')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- TANGGAL --}}
                <div class="row mb-3">
                    <label class="col-md-2 col-form-label fw-bold">
                        Tanggal
                    </label>
                    <div class="col-md-10">
                        <input type="date"
                               name="tanggal"
                               class="form-control @error('tanggal') is-invalid @enderror"
                               value="{{ old('tanggal', $artikel->tanggal) }}"
                               required>
                        @error('tanggal')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- DESKRIPSI --}}
                <div class="row mb-3">
                    <label class="col-md-2 col-form-label fw-bold">
                        Deskripsi
                    </label>
                    <div class="col-md-10">
                        <textarea name="deskripsi"
                                  id="deskripsi"
                                  rows="10"
                                  class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi', $artikel->deskripsi) }}</textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- FOTO --}}
                <div class="row mb-4">
                    <label class="col-md-2 col-form-label fw-bold">
                        Foto
                    </label>
                    <div class="col-md-10">

                        {{-- PREVIEW FOTO LAMA --}}
                        @if($artikel->foto)
                            <div class="mb-3">
                                <p class="mb-1 text-muted">Foto saat ini:</p>
                                <img src="{{ asset('storage/'.$artikel->foto) }}"
                                     class="rounded border"
                                     style="width:220px;height:140px;object-fit:cover;">
                            </div>
                        @endif

                        <input type="file"
                               name="foto"
                               class="form-control @error('foto') is-invalid @enderror"
                               accept="image/*">

                        <small class="text-muted">
                            Kosongkan jika tidak ingin mengganti foto
                        </small>

                        @error('foto')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- BUTTON --}}
                <div class="row">
                    <div class="col-md-10 offset-md-2">
                        <button class="btn btn-primary">
                            <i class="bi bi-save"></i> Update Artikel
                        </button>

                        <a href="{{ route('admin.artikel.index') }}"
                           class="btn btn-secondary">
                            Kembali
                        </a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

{{-- TINYMCE --}}
@push('scripts')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#deskripsi',
        height: 400,
        plugins: 'lists link image preview code fullscreen',
        toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | bullist numlist | preview code'
    });
</script>
@endpush

@endsection
