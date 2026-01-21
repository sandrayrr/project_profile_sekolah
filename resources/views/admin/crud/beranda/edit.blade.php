@extends('admin.layout')

@section('title','Edit Beranda')

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
    width: 700px;
    max-width: 96%;
    background: #fff;
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
    overflow-y: auto; /* Hanya body yang bisa di-scroll */
    flex-grow: 1; /* Biarkan body mengisi sisa ruang yang tersedia */
}

/* Scrollbar */
.popup-body::-webkit-scrollbar{ width:6px; }
.popup-body::-webkit-scrollbar-thumb{
    background: var(--primary-blue); /* Warna scrollbar disesuaikan */
    border-radius:10px;
}

/* ================= FORM ================= */
.form-label {
    font-size: .9rem;
    font-weight: 600;
    color: var(--dark-color);
    margin-bottom: 8px;
}

.form-control {
    border-radius: 12px;
    padding: 12px 16px;
    border: 1.5px solid var(--border-color);
    background-color: var(--bg-subtle);
    transition: all 0.25s ease;
    font-size: 0.95rem;
}

.form-control:focus {
    border-color: var(--primary-blue);
    box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.15);
    transform: translateY(-2px);
    background-color: #fff;
}

.form-section {
    margin-bottom: 24px;
    padding: 20px;
    background-color: var(--bg-subtle);
    border-radius: 12px;
    border-left: 4px solid var(--primary-blue);
}

.section-title {
    font-weight: 600;
    color: var(--primary-dark);
    margin-bottom: 16px;
    display: flex;
    align-items: center;
    gap: 8px;
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

/* ================= BUTTON ================= */
.btn {
    border-radius: 12px;
    padding: 12px 24px;
    font-weight: 600;
    font-size: 0.95rem;
    transition: all 0.3s ease;
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
    border: 1px solid var(--border-color);
}
.btn-light:hover {
    background: #cbd5e1;
    transform: translateY(-2px);
}

/* ================= INFO BADGE ================= */
.info-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 8px 16px;
    background: rgba(59, 130, 246, 0.1);
    color: var(--primary-dark);
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 500;
    margin-bottom: 20px;
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

/* ================= RESPONSIVE ================= */
@media (max-width: 768px) {
    .popup-card {
        width: 95%;
        max-width: none;
    }
    
    .popup-body {
        padding: 20px;
    }
    
    .form-section {
        padding: 16px;
    }
}
</style>

<div class="popup-overlay"></div>

<div class="popup-container">
    <div class="popup-card">

        {{-- HEADER --}}
        <div class="popup-header">
            <h5>
                <i class="bi bi-house-gear-fill"></i>
                Edit Konten Beranda
            </h5>
            <a href="{{ route('admin.beranda.index') }}" class="popup-close" title="Tutup">&times;</a>
        </div>

        {{-- BODY --}}
        <div class="popup-body">

            <form action="{{ route('admin.beranda.update', $beranda->id) }}" method="POST" id="berandaForm">
            @csrf
            @method('PUT')

            {{-- ================= PESAN ERROR ================= --}}
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

            {{-- ================= INFO ================= --}}
            <div class="info-badge">
                <i class="bi bi-info-circle-fill"></i>
                <span>Anda sedang mengedit konten beranda yang saat ini aktif</span>
            </div>

            {{-- ================= SAMBUTAN ================= --}}
            <div class="form-section">
                <h6 class="section-title">
                    <i class="bi bi-megaphone-fill"></i> Sambutan Kepala Sekolah
                </h6>

                <div class="mb-3">
                    <label for="judul" class="form-label">Judul Sambutan</label>
                    <input type="text"
                           id="judul"
                           name="judul"
                           class="form-control @error('judul') is-invalid @enderror"
                           placeholder="Contoh: Sambutan Kepala Sekolah"
                           value="{{ old('judul', $beranda->judul) }}"
                           required>

                    @error('judul')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi Sambutan</label>
                    <textarea name="deskripsi"
                              id="deskripsi"
                              rows="4"
                              class="form-control @error('deskripsi') is-invalid @enderror"
                              placeholder="Isi sambutan kepala sekolah...">{{ old('deskripsi', $beranda->deskripsi) }}</textarea>
                    
                    @error('deskripsi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            {{-- ================= STATISTIK ================= --}}
            <div class="form-section">
                <h6 class="section-title">
                    <i class="bi bi-bar-chart-fill"></i> Statistik Sekolah
                </h6>

                <div class="row g-3">
                    <div class="col-md-4">
                        <label for="jumlah_siswa" class="form-label">Jumlah Siswa</label>
                        <input type="number" 
                               id="jumlah_siswa"
                               name="jumlah_siswa" 
                               class="form-control @error('jumlah_siswa') is-invalid @enderror"
                               placeholder="0"
                               value="{{ old('jumlah_siswa', $beranda->jumlah_siswa ?? 0) }}">
                        
                        @error('jumlah_siswa')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="jumlah_guru" class="form-label">Jumlah Guru</label>
                        <input type="number" 
                               id="jumlah_guru"
                               name="jumlah_guru" 
                               class="form-control @error('jumlah_guru') is-invalid @enderror"
                               placeholder="0"
                               value="{{ old('jumlah_guru', $beranda->jumlah_guru ?? 0) }}">
                        
                        @error('jumlah_guru')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="jumlah_jurusan" class="form-label">Jumlah Jurusan</label>
                        <input type="number" 
                               id="jumlah_jurusan"
                               name="jumlah_jurusan" 
                               class="form-control @error('jumlah_jurusan') is-invalid @enderror"
                               placeholder="0"
                               value="{{ old('jumlah_jurusan', $beranda->jumlah_jurusan ?? 0) }}">
                        
                        @error('jumlah_jurusan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            {{-- ACTION --}}
            <div class="d-flex justify-content-end gap-2 mt-4">
                <a href="{{ route('admin.beranda.index') }}" class="btn btn-light">
                    <i class="bi bi-x-circle me-1"></i> Batal
                </a>
                <button type="submit" class="btn btn-primary">
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    <span class="btn-text"><i class="bi bi-arrow-clockwise me-1"></i> Perbarui Beranda</span>
                </button>
            </div>

            </form>

        </div>
    </div>
</div>

{{-- JAVASCRIPT UNTUK LOADING STATE --}}
<script>
    document.getElementById('berandaForm').addEventListener('submit', function() {
        const submitBtn = this.querySelector('button[type="submit"]');
        // Tambahkan class 'btn-loading' untuk menampilkan spinner
        submitBtn.classList.add('btn-loading');
        // Non-aktifkan tombol untuk mencegah submit ganda
        submitBtn.disabled = true;
    });
</script>

@endsection