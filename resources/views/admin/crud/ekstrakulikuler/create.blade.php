@extends('admin.layout')

@section('title', 'Tambah Ekstrakulikuler')

@section('content')

<style>
/* ================= KONFIGURASI WARNA & TIPOGRAFI ================= */
:root {
    /* --- TEMA BIRU BIASA (SOLID) --- */
    --primary-blue: #3b82f6;      /* Biru Utama */
    --primary-dark: #2563eb;      /* Biru Lebih Gelap untuk Hover/Gradien */
    --primary-light: #dbeafe;     /* Biru Sangat Muda untuk Background */
    --primary-shadow: rgba(37, 99, 235, 0.4); /* Bayangan Biru */

    /* --- WARNA NETRAL LAINNYA --- */
    --text-muted: #64748b;
    --border-color: #e2e8f0;
    --bg-subtle: #f8fafc;
    --accent-red: #ef4444;
    --dark-color: #1f2937;
}

body {
    font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
}

/* ================= OVERLAY (Latar Belakang) ================= */
.popup-overlay {
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, 0.5); /* Overlay gelap biasa untuk fokus */
    backdrop-filter: blur(6px);
    z-index: 1200;
    animation: fadeOverlay 0.4s ease-out;
}

/* ================= CONTAINER (Penampung Utama) ================= */
.popup-container {
    position: fixed;
    inset: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1300;
    padding: 20px;
}

/* ================= CARD (Kartu Pop-up) ================= */
.popup-card {
    width: 800px;
    max-width: 96%;
    background: #ffffff;
    border-radius: 24px;
    box-shadow: 0 25px 60px -10px var(--primary-shadow), 0 10px 20px -5px rgba(0, 0, 0, 0.1);
    animation: popupShow 0.5s cubic-bezier(0.16, 1, 0.3, 1);
    display: flex; /* Menggunakan flexbox untuk layout */
    flex-direction: column; /* Menyusun elemen secara vertikal */
    max-height: 90vh; /* Batasi tinggi maksimal pop-up */
    overflow: hidden; /* Sembunyikan overflow di card utama */
}

/* ================= HEADER (Bagian Atas) ================= */
.popup-header {
    padding: 22px 26px;
    background: var(--primary-blue); /* Warna biru solid */
    color: #fff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-shrink: 0; /* Mencegah header menyusut */
}

.popup-header h5 {
    margin: 0;
    font-weight: 700;
    font-size: 1.25rem;
    display: flex;
    align-items: center;
    gap: 12px;
}

.popup-close {
    font-size: 28px;
    line-height: 1;
    text-decoration: none;
    color: rgba(255, 255, 255, 0.9);
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 36px;
    height: 36px;
    border-radius: 50%;
}
.popup-close:hover {
    color: #fff;
    background-color: rgba(255, 255, 255, 0.15);
    transform: rotate(90deg) scale(1.1);
}

/* ================= BODY (Isian Form) ================= */
.popup-body {
    padding: 28px 26px;
    overflow-y: auto; /* Hanya body yang bisa di-scroll */
    flex-grow: 1; /* Biarkan body mengisi sisa ruang yang tersedia */
}

/* ================= FORM (Elemen Form) ================= */
.form-label {
    font-size: .9rem;
    font-weight: 600;
    color: var(--dark-color);
    margin-bottom: 8px;
}

.form-control,
.form-select {
    border-radius: 12px;
    padding: 12px 16px;
    border: 1.5px solid var(--border-color);
    background-color: var(--bg-subtle);
    transition: all 0.25s ease;
    font-size: 0.95rem;
}

.form-control:focus,
.form-select:focus {
    border-color: var(--primary-blue);
    box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.15);
    transform: translateY(-2px);
    background-color: #fff;
}

/* ================= ALERT (Pesan Error) ================= */
.alert-custom-danger {
    background: linear-gradient(135deg, #fef2f2, #fee2e2);
    border: 1px solid #fecaca;
    color: #991b1b;
    border-radius: 12px;
    padding: 14px 18px;
    margin-bottom: 24px;
}
.alert-custom-danger ul {
    margin-bottom: 0;
}

/* Pesan error inline di bawah input */
.invalid-feedback {
    color: var(--accent-red);
    font-size: 0.875rem;
    margin-top: 0.5rem;
}

/* ================= BUTTON (Tombol Aksi) ================= */
.btn {
    border-radius: 12px;
    padding: 12px 24px;
    font-weight: 600;
    font-size: 0.95rem;
    transition: all 0.25s ease;
    border: none;
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.btn-primary {
    background: var(--primary-blue); /* Warna biru solid */
    color: white;
    box-shadow: 0 4px 15px var(--primary-shadow);
}
.btn-primary:hover:not(:disabled) {
    background: var(--primary-dark); /* Warna lebih gelap saat hover */
    transform: translateY(-3px);
    box-shadow: 0 8px 25px var(--primary-shadow);
}
.btn-primary:disabled {
    opacity: 0.7;
    cursor: not-allowed;
}

.btn-light {
    background: #e2e8f0;
    color: #475569;
}
.btn-light:hover {
    background: #cbd5e1;
    transform: translateY(-2px);
}

/* ================= ANIMASI ================= */
@keyframes popupShow {
    from {
        opacity: 0;
        transform: translateY(30px) scale(0.95);
    }
    to {
        opacity: 1;
        transform: translateY(0) scale(1);
    }
}

@keyframes fadeOverlay {
    from { opacity: 0; }
    to { opacity: 1; }
}

/* ================= LOADING STATE (Bonus!) ================= */
.spinner-border-sm {
    width: 1rem;
    height: 1rem;
    border-width: 2px;
}
.btn .spinner-border-sm {
    display: none; /* Sembunyikan spinner secara default */
}
.btn-loading .spinner-border-sm {
    display: inline-block; /* Tampilkan saat loading */
}
.btn-loading .btn-text {
    display: none; /* Sembunyikan teks saat loading */
}
</style>

{{-- OVERLAY --}}
<div class="popup-overlay"></div>

{{-- CONTAINER --}}
<div class="popup-container">
    <div class="popup-card">

        {{-- HEADER --}}
        <div class="popup-header">
            <h5>
                <i class="bi bi-plus-circle"></i>
                Tambah Ekstrakulikuler Baru
            </h5>
            <a href="{{ route('admin.ekstrakulikuler.index') }}" class="popup-close" title="Tutup">&times;</a>
        </div>

        {{-- BODY --}}
        <div class="popup-body">

            {{-- PESAN ERROR --}}
            @if ($errors->any())
                <div class="alert-custom-danger">
                    <strong>Terjadi kesalahan:</strong>
                    <ul class="mb-0 mt-2">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.ekstrakulikuler.store') }}"
                  method="POST"
                  enctype="multipart/form-data"
                  id="ekstrakulikulerForm">
                @csrf

                {{-- JUDUL --}}
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul Ekstrakulikuler</label>
                    <input type="text"
                           id="judul"
                           name="judul"
                           class="form-control @error('judul') is-invalid @enderror"
                           value="{{ old('judul') }}"
                           placeholder="Contoh: Futsal, Pramuka, Tari Tradisional"
                           required>
                    @error('judul')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- KATEGORI --}}
                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select id="kategori"
                            name="kategori"
                            class="form-select @error('kategori') is-invalid @enderror"
                            required>
                        <option value="">-- Pilih Kategori --</option>
                        <option value="Olahraga" {{ old('kategori') == 'Olahraga' ? 'selected' : '' }}>Olahraga</option>
                        <option value="Seni" {{ old('kategori') == 'Seni' ? 'selected' : '' }}>Seni</option>
                        <option value="Kepramukaan" {{ old('kategori') == 'Kepramukaan' ? 'selected' : '' }}>Kepramukaan</option>
                        <option value="Keagamaan" {{ old('kategori') == 'Keagamaan' ? 'selected' : '' }}>Keagamaan</option>
                        <option value="Akademik" {{ old('kategori') == 'Akademik' ? 'selected' : '' }}>Akademik</option>
                        <option value="Lainnya" {{ old('kategori') == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                    </select>
                    @error('kategori')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- FOTO --}}
                <div class="mb-4">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file"
                           id="foto"
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

                {{-- TOMBOL AKSI --}}
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.ekstrakulikuler.index') }}" class="btn btn-light">
                        Batal
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        <span class="btn-text"><i class="bi bi-save me-1"></i> Simpan Data</span>
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>

{{-- JAVASCRIPT UNTUK LOADING STATE --}}
<script>
    document.getElementById('ekstrakulikulerForm').addEventListener('submit', function() {
        const submitBtn = this.querySelector('button[type="submit"]');
        // Tambahkan class 'btn-loading' untuk menampilkan spinner
        submitBtn.classList.add('btn-loading');
        // Non-aktifkan tombol untuk mencegah submit ganda
        submitBtn.disabled = true;
    });
</script>

@endsection