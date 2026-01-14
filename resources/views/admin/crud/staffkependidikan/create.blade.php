@extends('admin.layout')

@section('title', 'Tambah Staff Kependidikan')

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
    width: 700px;
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

.form-control{
    border-radius: 12px;
    padding: 10px 14px;
    border: 1px solid #e5e7eb;
    transition: .25s;
}

.form-control:focus{
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
                <i class="bi bi-people-fill"></i>
                Tambah Staff Kependidikan
            </h5>
            <a href="{{ route('admin.staffkependidikan.index') }}"
               class="popup-close">&times;</a>
        </div>

        {{-- BODY --}}
        <div class="popup-body">

            <form action="{{ route('admin.staffkependidikan.store') }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf

                {{-- NAMA --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Nama
                    </label>
                    <input type="text"
                           name="nama"
                           class="form-control @error('nama') is-invalid @enderror"
                           value="{{ old('nama') }}"
                           placeholder="Masukkan nama staff"
                           required>
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- JABATAN --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Jabatan
                    </label>
                    <input type="text"
                           name="jabatan"
                           class="form-control @error('jabatan') is-invalid @enderror"
                           value="{{ old('jabatan') }}"
                           placeholder="Contoh: Tata Usaha"
                           required>
                    @error('jabatan')
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
                           accept="image/*">
                    <small class="text-muted">
                        JPG / PNG • Maks 2MB
                    </small>
                    @error('foto')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- ACTION --}}
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.staffkependidikan.index') }}"
                       class="btn btn-light">
                        Batal
                    </a>
                    <button class="btn btn-primary px-4">
                        <i class="bi bi-save me-1"></i>
                        Simpan Staff
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>

@endsection
