@extends('admin.layout')

@section('title', 'Tambah Ekstrakulikuler')

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
    width: 750px;
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
                <i class="bi bi-trophy-fill me-2"></i>
                Tambah Ekstrakulikuler
            </h5>
            <a href="{{ route('admin.ekstrakulikuler.index') }}"
               class="popup-close">&times;</a>
        </div>

        {{-- BODY --}}
        <div class="popup-body">

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

            <form action="{{ route('admin.ekstrakulikuler.store') }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf

                {{-- JUDUL --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">Judul Ekstrakulikuler</label>
                    <input type="text"
                           name="judul"
                           value="{{ old('judul') }}"
                           class="form-control @error('judul') is-invalid @enderror"
                           placeholder="Contoh: Futsal, Pramuka, Tari Tradisional"
                           required>
                    @error('judul')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- KATEGORI --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">Kategori</label>
                    <select name="kategori"
                            class="form-select @error('kategori') is-invalid @enderror"
                            required>
                        <option value="">-- Pilih Kategori --</option>
                        <option value="Olahraga" {{ old('kategori')=='Olahraga'?'selected':'' }}>Olahraga</option>
                        <option value="Seni" {{ old('kategori')=='Seni'?'selected':'' }}>Seni</option>
                        <option value="Kepramukaan" {{ old('kategori')=='Kepramukaan'?'selected':'' }}>Kepramukaan</option>
                        <option value="Keagamaan" {{ old('kategori')=='Keagamaan'?'selected':'' }}>Keagamaan</option>
                        <option value="Akademik" {{ old('kategori')=='Akademik'?'selected':'' }}>Akademik</option>
                        <option value="Lainnya" {{ old('kategori')=='Lainnya'?'selected':'' }}>Lainnya</option>
                    </select>
                    @error('kategori')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- FOTO --}}
                <div class="mb-4">
                    <label class="form-label fw-bold">Foto</label>
                    <input type="file"
                           name="foto"
                           class="form-control @error('foto') is-invalid @enderror"
                           accept="image/*"
                           required>
                    <small class="text-muted">
                        JPG / PNG • Maks 2MB
                    </small>
                    @error('foto')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- BUTTON --}}
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.ekstrakulikuler.index') }}"
                       class="btn btn-light">
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
