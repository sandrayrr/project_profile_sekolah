@extends('admin.layout')

@section('title','Tambah User')

@section('content')

<style>
/* ================= KONFIGURASI WARNA & TIPOGRAFI ================= */
:root {
    --sky-gradient-start: #E0F2FE; /* Biru Langit Sangat Muda */
    --sky-gradient-mid: #7DD3FC;   /* Biru Langit Cerah */
    --sky-gradient-end: #0EA5E9;   /* Biru Langit Sedang */
    --sky-shadow: rgba(14, 165, 233, 0.4);
    --text-muted: #64748b;
    --border-color: #e2e8f0;
    --bg-subtle: #f8fafc;
}

body {
    font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
}

/* ================= OVERLAY (Latar Belakang) ================= */
.popup-overlay {
    position: fixed;
    inset: 0;
    background: linear-gradient(135deg, rgba(224, 242, 254, 0.85), rgba(125, 211, 252, 0.95));
    backdrop-filter: blur(10px);
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
    max-width: 100%;
    background: #ffffff;
    border-radius: 24px;
    box-shadow: 0 25px 60px -10px var(--sky-shadow), 0 10px 20px -5px rgba(0, 0, 0, 0.1);
    animation: popupShow 0.5s cubic-bezier(0.16, 1, 0.3, 1);
    overflow: hidden; /* Memastikan sudut header melengkung sempurna */
}

/* ================= HEADER (Bagian Atas) ================= */
.popup-header {
    padding: 22px 26px;
    background: linear-gradient(135deg, var(--sky-gradient-mid), var(--sky-gradient-end));
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
}

/* ================= FORM (Elemen Form) ================= */
.form-label {
    font-size: .9rem;
    font-weight: 600;
    color: #334155;
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
    border-color: var(--sky-gradient-end);
    box-shadow: 0 0 0 4px rgba(14, 165, 233, 0.15);
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
    background: linear-gradient(135deg, var(--sky-gradient-mid), var(--sky-gradient-end));
    color: white;
    box-shadow: 0 4px 15px var(--sky-shadow);
}
.btn-primary:hover:not(:disabled) {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px var(--sky-shadow);
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
                <i class="bi bi-person-plus-fill"></i>
                Tambah User Baru
            </h5>
            <a href="{{ route('admin.users.index') }}" class="popup-close" title="Tutup">&times;</a>
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

            <form action="{{ route('admin.users.store') }}" method="POST" id="userForm">
                @csrf

                {{-- NAMA --}}
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" placeholder="Masukkan nama lengkap" required>
                </div>

                {{-- EMAIL --}}
                <div class="mb-3">
                    <label for="email" class="form-label">Alamat Email</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="email@example.com" required>
                </div>

                {{-- PASSWORD --}}
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Buat password baru" required>
                </div>

                {{-- KONFIRMASI PASSWORD --}}
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Ketik ulang password" required>
                </div>

                {{-- ROLE --}}
                <div class="mb-4">
                    <label for="role" class="form-label">Hak Akses (Role)</label>
                    <select id="role" name="role" class="form-select">
                        <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User</option>
                        <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                    </select>
                </div>

                {{-- TOMBOL AKSI --}}
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.users.index') }}" class="btn btn-light">
                        Batal
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        <span class="btn-text"><i class="bi bi-save"></i> Simpan User</span>
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>

{{-- JAVASCRIPT UNTUK LOADING STATE --}}
<script>
    document.getElementById('userForm').addEventListener('submit', function() {
        const submitBtn = this.querySelector('button[type="submit"]');
        // Tambahkan class 'btn-loading' untuk menampilkan spinner
        submitBtn.classList.add('btn-loading');
        // Non-aktifkan tombol untuk mencegah submit ganda
        submitBtn.disabled = true;
    });
</script>

@endsection
