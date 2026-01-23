@extends('admin.layout')

@section('title','Tambah Beranda')

@section('content')

<style>
/* ================= OVERLAY ================= */
.popup-overlay{
    position: fixed;
    inset: 0;
    background: linear-gradient(
        135deg,
        rgba(219,234,254,.85),
        rgba(191,219,254,.9)
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
    width: 680px;
    max-width: 96%;
    background: #fff;
    border-radius: 22px;
    box-shadow:
        0 25px 60px rgba(37,99,235,.25),
        0 10px 30px rgba(0,0,0,.15);
    overflow: hidden;
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
    gap: 8px;
}

.popup-close{
    font-size: 28px;
    color: rgba(255,255,255,.9);
    text-decoration: none;
    transition: .25s;
}
.popup-close:hover{
    color: #fff;
    transform: rotate(90deg) scale(1.1);
}

/* ================= BODY ================= */
.popup-body{
    padding: 26px;
    max-height: 75vh;
    overflow-y: auto;
}

/* Scrollbar */
.popup-body::-webkit-scrollbar{ width:6px; }
.popup-body::-webkit-scrollbar-thumb{
    background:#93c5fd;
    border-radius:10px;
}

/* ================= FORM ================= */
.form-label{
    font-size:.85rem;
    color:#334155;
}

.form-control{
    border-radius:12px;
    padding:10px 14px;
    border:1px solid #e5e7eb;
    transition:.25s;
}

.form-control:focus{
    border-color:#2563eb;
    box-shadow:0 0 0 .15rem rgba(37,99,235,.25);
}

.form-section {
    margin-bottom: 24px;
    padding: 16px;
    background-color: #f8fafc;
    border-radius: 12px;
    border-left: 4px solid #3b82f6;
}

.section-title {
    font-weight: 600;
    color: #1e40af;
    margin-bottom: 16px;
    display: flex;
    align-items: center;
    gap: 8px;
}

/* ================= BUTTON ================= */
.btn{
    border-radius:12px;
    padding:10px 18px;
    font-weight:600;
}

.btn-primary{
    background:linear-gradient(135deg,#3b82f6,#2563eb);
    border:none;
}
.btn-primary:hover{
    transform:translateY(-2px);
    box-shadow:0 10px 25px rgba(37,99,235,.35);
}

.btn-light{
    background:#f1f5f9;
}
.btn-light:hover{
    background:#e2e8f0;
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
        padding: 12px;
    }
}
</style>

<div class="popup-overlay"></div>

<div class="popup-container">
    <div class="popup-card">

        {{-- HEADER --}}
        <div class="popup-header">
            <h5>
                <i class="bi bi-house-door"></i>
                Tambah Konten Beranda
            </h5>
            <a href="{{ route('admin.beranda.index') }}" class="popup-close">&times;</a>
        </div>

        {{-- BODY --}}
        <div class="popup-body">

            <form action="{{ route('admin.beranda.store') }}" method="POST">
            @csrf

            {{-- ================= SAMBUTAN ================= --}}
            <div class="form-section">
                <h6 class="section-title">
                    <i class="bi bi-megaphone-fill"></i> Sambutan Kepala Sekolah
                </h6>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Judul Sambutan</label>
                    <input type="text"
                           name="judul"
                           class="form-control @error('judul') is-invalid @enderror"
                           placeholder="Contoh: Sambutan Kepala Sekolah"
                           value="{{ old('judul') }}">

                    @error('judul')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Deskripsi Sambutan</label>
                    <textarea name="deskripsi"
                              rows="4"
                              class="form-control @error('deskripsi') is-invalid @enderror"
                              placeholder="Isi sambutan kepala sekolah...">{{ old('deskripsi') }}</textarea>
                    
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
                        <label class="form-label fw-semibold">Jumlah Siswa</label>
                        <input type="number" 
                               name="jumlah_siswa" 
                               class="form-control @error('jumlah_siswa') is-invalid @enderror"
                               placeholder="0"
                               value="{{ old('jumlah_siswa', 0) }}">
                        
                        @error('jumlah_siswa')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label class="form-label fw-semibold">Jumlah Guru</label>
                        <input type="number" 
                               name="jumlah_guru" 
                               class="form-control @error('jumlah_guru') is-invalid @enderror"
                               placeholder="0"
                               value="{{ old('jumlah_guru', 0) }}">
                        
                        @error('jumlah_guru')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label class="form-label fw-semibold">Jumlah Jurusan</label>
                        <input type="number" 
                               name="jumlah_jurusan" 
                               class="form-control @error('jumlah_jurusan') is-invalid @enderror"
                               placeholder="0"
                               value="{{ old('jumlah_jurusan', 0) }}">
                        
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
                    <i class="bi bi-save me-1"></i> Simpan
                </button>
            </div>

            </form>

        </div>
    </div>
</div>

@endsection