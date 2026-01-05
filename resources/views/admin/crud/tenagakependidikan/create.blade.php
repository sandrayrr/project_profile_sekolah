@extends('admin.layout')

@section('title', 'Tambah Tenaga Kependidikan')

@section('content')
<div class="container-fluid py-4">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
        <div>
            <h4 class="fw-bold mb-1">Tambah Tenaga Kependidikan</h4>
            <p class="text-muted mb-0">Tambahkan data tenaga kependidikan baru</p>
        </div>
        <a href="{{ route('admin.tenaga.index') }}" class="btn btn-outline-secondary btn-lg px-4">
            <i class="bi bi-arrow-left me-2"></i> Kembali
        </a>
    </div>

    {{-- FORM CARD --}}
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-5">

                    {{-- NOTIFIKASI ERROR --}}
                    @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show shadow-sm mb-4" role="alert">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i>
                        <strong>Terjadi kesalahan:</strong>
                        <ul class="mb-0 mt-2">
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    {{-- FORM --}}
                    <form action="{{ route('admin.tenaga.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        {{-- NAMA --}}
                        <div class="mb-4">
                            <label for="nama" class="form-label fw-semibold">
                                Nama Lengkap <span class="text-danger">*</span>
                            </label>
                            <input type="text"
                                   class="form-control form-control-lg @error('nama') is-invalid @enderror"
                                   id="nama"
                                   name="nama"
                                   value="{{ old('nama') }}"
                                   placeholder="Masukkan nama lengkap"
                                   required>
                            @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- JABATAN --}}
                        <div class="mb-4">
                            <label for="jabatan" class="form-label fw-semibold">
                                Jabatan <span class="text-danger">*</span>
                            </label>
                            <input type="text"
                                   class="form-control form-control-lg @error('jabatan') is-invalid @enderror"
                                   id="jabatan"
                                   name="jabatan"
                                   value="{{ old('jabatan') }}"
                                   placeholder="Masukkan jabatan"
                                   required>
                            @error('jabatan')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- FOTO --}}
                        <div class="mb-4">
                            <label for="foto" class="form-label fw-semibold">
                                Foto Profil
                            </label>
                            <input type="file"
                                   class="form-control form-control-lg @error('foto') is-invalid @enderror"
                                   id="foto"
                                   name="foto"
                                   accept="image/*">
                            <div class="form-text">
                                Format yang didukung: JPG, PNG, GIF. Maksimal 2MB.
                            </div>
                            @error('foto')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            {{-- PREVIEW FOTO --}}
                            <div class="mt-3">
                                <img id="fotoPreview" src="#" alt="Preview" class="img-thumbnail d-none" style="max-width: 200px; max-height: 200px;">
                            </div>
                        </div>

                        {{-- SUBMIT BUTTONS --}}
                        <div class="d-flex gap-3 pt-4">
                            <button type="submit" class="btn btn-primary btn-lg px-5">
                                <i class="bi bi-check-circle me-2"></i> Simpan
                            </button>
                            <a href="{{ route('admin.tenaga.index') }}" class="btn btn-outline-secondary btn-lg px-5">
                                <i class="bi bi-x-circle me-2"></i> Batal
                            </a>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

</div>

<style>
.form-control:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
}
.btn-primary {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border: none;
}
.btn-primary:hover {
    background: linear-gradient(135deg, #5a67d8 0%, #6b46c1 100%);
    transform: translateY(-1px);
    box-shadow: 0 4px 8px rgba(102, 126, 234, 0.3);
}
</style>

<script>
// Preview foto sebelum upload
document.getElementById('foto').addEventListener('change', function(e) {
    const file = e.target.files[0];
    const preview = document.getElementById('fotoPreview');

    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.classList.remove('d-none');
        };
        reader.readAsDataURL(file);
    } else {
        preview.classList.add('d-none');
    }
});
</script>

@endsection
