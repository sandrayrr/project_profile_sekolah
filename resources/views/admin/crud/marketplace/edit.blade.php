@extends('admin.layout')

@section('title','Edit Produk Marketplace')

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
    width: 520px;
    max-width: 95%;
    background: #ffffff;
    border-radius: 24px;
    box-shadow: 0 25px 60px -10px var(--primary-shadow), 0 10px 20px -5px rgba(0, 0, 0, 0.1);
    animation: popupShow 0.5s cubic-bezier(0.16, 1, 0.3, 1);
    overflow: hidden; /* Memastikan sudut header melengkung sempurna */
}

/* ================= HEADER (Bagian Atas) ================= */
.popup-header {
    padding: 22px 26px;
    background: var(--primary-blue); /* Warna biru solid */
    color: #fff;
    display: flex;
    justify-content: space-between;
    align-items: center;
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
    color: rgba(255, 255, 255, 0.9);
    text-decoration: none;
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

/* Gaya khusus untuk input-group harga */
.input-group {
    position: relative;
    display: flex;
    align-items: stretch;
    width: 100%;
}

.input-group .form-control {
    padding-left: 2.5rem;
}

.input-group-text {
    position: absolute;
    left: 12px;
    top: 50%;
    transform: translateY(-50%);
    background: transparent;
    border: none;
    color: var(--text-muted);
    z-index: 10;
    font-weight: 600;
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
    from{opacity:0;transform:translateY(20px) scale(.95);}
    to{opacity:1;transform:translateY(0) scale(1);}
}
@keyframes fadeOverlay {
    from{opacity:0;}
    to{opacity:1;}
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
                <i class="bi bi-bag-check"></i>
                Edit Produk Marketplace
            </h5>
            <a href="{{ route('admin.marketplace.index') }}" class="popup-close" title="Tutup">&times;</a>
        </div>

        {{-- BODY --}}
        <div class="popup-body">

            {{-- PESAN ERROR --}}
            @if($errors->any())
                <div class="alert-custom-danger">
                    <strong>Terjadi kesalahan:</strong>
                    <ul class="mb-0 mt-2">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.marketplace.update', $marketplace->id) }}"
                  method="POST"
                  enctype="multipart/form-data"
                  id="marketplaceForm">
                @csrf
                @method('PUT')

                {{-- NAMA PRODUK --}}
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Produk</label>
                    <input type="text"
                           id="nama"
                           name="nama"
                           class="form-control @error('nama') is-invalid @enderror"
                           placeholder="Contoh: Baju Batik Premium"
                           value="{{ old('nama', $marketplace->nama) }}">

                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- HARGA --}}
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <div class="input-group">
                        <span class="input-group-text">Rp</span>
                        <input type="number"
                               id="harga"
                               name="harga"
                               class="form-control @error('harga') is-invalid @enderror"
                               placeholder="0"
                               value="{{ old('harga', $marketplace->harga) }}">
                    </div>

                    @error('harga')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- FOTO PRODUK --}}
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto Produk</label>
                    @if($marketplace->foto)
                        <div class="mb-3 p-2 border rounded bg-light">
                            <p class="small text-muted mb-2">Foto Saat Ini:</p>
                            <img src="{{ asset('storage/' . $marketplace->foto) }}"
                                 alt="Foto Produk"
                                 class="rounded shadow-sm"
                                 style="max-width: 120px; height: auto;">
                        </div>
                    @endif

                    <input type="file"
                           id="foto"
                           name="foto"
                           class="form-control @error('foto') is-invalid @enderror"
                           accept="image/*">

                    <small class="text-muted d-block mt-1">
                        JPG / PNG • Maks 2MB • Kosongkan jika tidak ingin mengubah foto
                    </small>

                    @error('foto')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- ACTION --}}
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.marketplace.index') }}" class="btn btn-light">
                        Batal
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        <span class="btn-text"><i class="bi bi-arrow-clockwise me-1"></i> Perbarui Produk</span>
                    </button>
                </div>

            </form>
        </div>

    </div>
</div>

{{-- JAVASCRIPT UNTUK LOADING STATE --}}
<script>
    document.getElementById('marketplaceForm').addEventListener('submit', function() {
        const submitBtn = this.querySelector('button[type="submit"]');
        // Tambahkan class 'btn-loading' untuk menampilkan spinner
        submitBtn.classList.add('btn-loading');
        // Non-aktifkan tombol untuk mencegah submit ganda
        submitBtn.disabled = true;
    });
</script>

@endsection