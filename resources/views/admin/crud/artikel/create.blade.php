{{-- resources/views/admin/artikel/create.blade.php --}}
@extends('admin.layout')

@section('title', 'Tambah Artikel')

@section('content')
<div class="container-fluid">

    <!-- Judul Halaman dan Breadcrumb -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-newspaper me-2"></i>Tambah Artikel Baru</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.artikel.index') }}">Artikel</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah</li>
            </ol>
        </nav>
    </div>

    <!-- Card untuk Form -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Artikel</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.artikel.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Field Judul -->
                <div class="row mb-3">
                    <label for="judul" class="col-md-2 col-form-label fw-bold">Judul</label>
                    <div class="col-md-10">
                        <input type="text" name="judul" id="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul') }}" placeholder="Masukkan judul artikel" required>
                        @error('judul')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <!-- Field Tanggal -->
                <div class="row mb-3">
                    <label for="tanggal" class="col-md-2 col-form-label fw-bold">Tanggal</label>
                    <div class="col-md-10">
                        <input type="date" name="tanggal" id="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal') ?? date('Y-m-d') }}" required>
                        @error('tanggal')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <!-- Field Deskripsi (dengan Rich Text Editor) -->
                <div class="row mb-3">
                    <label for="deskripsi" class="col-md-2 col-form-label fw-bold">Deskripsi</label>
                    <div class="col-md-10">
                        <textarea name="deskripsi" id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="10">{{ old('deskripsi') }}</textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <!-- Field Foto -->
                <div class="row mb-3">
                    <label for="foto" class="col-md-2 col-form-label fw-bold">Foto</label>
                    <div class="col-md-10">
                        <input type="file" name="foto" id="foto" class="form-control @error('foto') is-invalid @enderror" accept="image/*">
                        <div class="form-text">Pilih foto untuk artikel (Format: JPG, PNG, GIF. Maks: 2MB).</div>
                        @error('foto')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <!-- Tombol Aksi -->
                <div class="row">
                    <div class="col-md-10 offset-md-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-1"></i> Simpan Artikel
                        </button>
                        <a href="{{ route('admin.artikel.index') }}" class="btn btn-secondary">
                            <i class="fas fa-times-circle me-1"></i> Batal
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Script untuk Rich Text Editor (TinyMCE) -->
@push('scripts')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea#deskripsi',
        height: 400,
        plugins: [
            'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
            'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
            'insertdatetime', 'media', 'table', 'help', 'wordcount'
        ],
        toolbar: 'undo redo | blocks | ' +
            'bold italic backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat | help',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
    });
</script>
@endpush

@endsection