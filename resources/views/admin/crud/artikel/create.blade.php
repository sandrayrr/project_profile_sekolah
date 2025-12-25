@extends('admin.layout')

@section('title', 'Tambah Artikel')

@section('content')

<style>
/* === OVERLAY === */
.popup-overlay{
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,.35);
    backdrop-filter: blur(6px);
    z-index: 999;
}

/* === CONTAINER === */
.popup-container{
    position: fixed;
    inset: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1000;
}

/* === CARD === */
.popup-card{
    width: 900px;
    max-width: 95%;
    max-height: 90vh;
    overflow-y: auto;
    background: #fff;
    border-radius: 18px;
    animation: popupScale .25s ease;
    box-shadow: 0 30px 80px rgba(0,0,0,.25);
}

/* === HEADER === */
.popup-header{
    padding: 18px 24px;
    border-bottom: 1px solid #eee;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.popup-header h5{
    margin: 0;
    font-weight: 600;
}

.popup-close{
    font-size: 28px;
    text-decoration: none;
    color: #666;
    line-height: 1;
}

/* === BODY === */
.popup-body{
    padding: 24px;
}

/* === ANIMATION === */
@keyframes popupScale{
    from{
        opacity: 0;
        transform: scale(.96);
    }
    to{
        opacity: 1;
        transform: scale(1);
    }
}
</style>

<div class="popup-overlay"></div>

<div class="popup-container">
    <div class="popup-card">

        {{-- HEADER --}}
        <div class="popup-header">
            <h5>
                <i class="fas fa-newspaper me-2"></i>
                Tambah Artikel Baru
            </h5>
            <a href="{{ route('admin.artikel.index') }}"
               class="popup-close">&times;</a>
        </div>

        {{-- BODY --}}
        <div class="popup-body">
            <form action="{{ route('admin.artikel.store') }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf

                {{-- JUDUL --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">Judul</label>
                    <input type="text"
                           name="judul"
                           class="form-control @error('judul') is-invalid @enderror"
                           value="{{ old('judul') }}"
                           placeholder="Masukkan judul artikel"
                           required>
                    @error('judul')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- TANGGAL --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">Tanggal</label>
                    <input type="date"
                           name="tanggal"
                           class="form-control @error('tanggal') is-invalid @enderror"
                           value="{{ old('tanggal') ?? date('Y-m-d') }}"
                           required>
                    @error('tanggal')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- DESKRIPSI --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">Deskripsi</label>
                    <textarea name="deskripsi"
                              id="deskripsi"
                              rows="10"
                              class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- FOTO --}}
                <div class="mb-4">
                    <label class="form-label fw-bold">Foto</label>
                    <input type="file"
                           name="foto"
                           class="form-control @error('foto') is-invalid @enderror"
                           accept="image/*">
                    <small class="text-muted">
                        JPG, PNG, GIF • Maks 2MB
                    </small>
                    @error('foto')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- BUTTON --}}
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.artikel.index') }}"
                       class="btn btn-light">
                        Batal
                    </a>
                    <button class="btn btn-primary">
                        <i class="fas fa-save me-1"></i> Simpan Artikel
                    </button>
                </div>
            </form>
        </div>

    </div>
</div>

@endsection

@push('scripts')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#deskripsi',
        height: 350,
        plugins: 'lists link image preview code fullscreen',
        toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | bullist numlist | preview code'
    });
</script>
@endpush




