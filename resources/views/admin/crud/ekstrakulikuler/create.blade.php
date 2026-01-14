@extends('admin.layout')

@section('title', 'Tambah Ekstrakulikuler')

@section('content')

<style>
/* ================= OVERLAY ================= */
.popup-overlay{
    position: fixed;
    inset: 0;
    background: linear-gradient(
        135deg,
        rgba(219,234,254,.9),
        rgba(191,219,254,.95)
    );
    backdrop-filter: blur(8px);
    z-index: 1200;
    animation: fadeOverlay .3s ease;
}

/* ================= CONTAINER ================= */
.popup-container{
    position: fixed;
    inset: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1300;
}

/* ================= CARD ================= */
.popup-card{
    width: 750px;
    max-width: 96%;
    max-height: 90vh;
    overflow-y: auto;
    background: #fff;
    border-radius: 22px;
    box-shadow:
        0 30px 70px rgba(37,99,235,.25),
        0 10px 30px rgba(0,0,0,.15);
    animation: popupShow .35s cubic-bezier(.16,1,.3,1);
}

/* ================= HEADER ================= */
.popup-header{
    padding: 18px 24px;
    background: linear-gradient(135deg,#3b82f6,#2563eb);
    color: #fff;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.popup-header h5{
    margin: 0;
    font-weight: 700;
    display: flex;
    align-items: center;
    gap: 10px;
}

.popup-close{
    font-size: 30px;
    text-decoration: none;
    color: rgba(255,255,255,.9);
    transition: .25s;
}
.popup-close:hover{
    color: #fff;
    transform: rotate(90deg) scale(1.1);
}

/* ================= BODY ================= */
.popup-body{
    padding: 26px;
}

/* ================= FORM ================= */
.form-label{
    font-size: .85rem;
    color: #334155;
}

.form-control,
.form-select{
    border-radius: 12px;
    padding: 10px 14px;
    border: 1px solid #e5e7eb;
    transition: .25s;
}

.form-control:focus,
.form-select:focus{
    border-color: #2563eb;
    box-shadow: 0 0 0 .15rem rgba(37,99,235,.25);
}

/* ================= BUTTON ================= */
.btn{
    border-radius: 12px;
    padding: 10px 20px;
    font-weight: 600;
}

.btn-primary{
    background: linear-gradient(135deg,#3b82f6,#2563eb);
    border: none;
}
.btn-primary:hover{
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(37,99,235,.35);
}

.btn-light{
    background: #f1f5f9;
}
.btn-light:hover{
    background: #e2e8f0;
}

/* ================= ANIMATION ================= */
@keyframes popupShow{
    from{opacity:0;transform:translateY(20px) scale(.95);}
    to{opacity:1;transform:translateY(0) scale(1);}
}
@keyframes fadeOverlay{
    from{opacity:0;}
    to{opacity:1;}
}
</style>

<div class="popup-overlay"></div>

<div class="popup-container">
    <div class="popup-card">

        {{-- HEADER --}}
        <div class="popup-header">
            <h5>
                <i class="bi bi-trophy-fill"></i>
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
                    <label class="form-label fw-semibold">
                        Judul Ekstrakulikuler
                    </label>
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
                    <label class="form-label fw-semibold">
                        Kategori
                    </label>
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
                    <label class="form-label fw-semibold">
                        Foto
                    </label>
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

                {{-- ACTION --}}
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.ekstrakulikuler.index') }}"
                       class="btn btn-light">
                        Batal
                    </a>
                    <button class="btn btn-primary px-4">
                        <i class="bi bi-save me-1"></i>
                        Simpan
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>

@endsection
