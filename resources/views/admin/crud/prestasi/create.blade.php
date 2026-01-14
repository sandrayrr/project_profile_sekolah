@extends('admin.layout')

@section('title','Tambah Prestasi')

@section('content')

<style>
/* ================= POPUP OVERLAY ================= */
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

/* ================= POPUP CONTAINER ================= */
.popup-container{
    position: fixed;
    inset: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1300;
}

/* ================= POPUP CARD ================= */
.popup-card{
    width: 620px;
    max-width: 95%;
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
    transition: .2s;
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

.form-control,
.form-select{
    border-radius:12px;
    padding:10px 14px;
    border:1px solid #e5e7eb;
    transition:.25s;
}

.form-control:focus,
.form-select:focus{
    border-color:#2563eb;
    box-shadow:0 0 0 .15rem rgba(37,99,235,.25);
}

/* ================= BUTTON ================= */
.btn{
    border-radius:12px;
    padding:10px 18px;
    font-weight:600;
}

.btn-success{
    background:linear-gradient(135deg,#22c55e,#16a34a);
    border:none;
}
.btn-success:hover{
    transform:translateY(-2px);
    box-shadow:0 10px 25px rgba(34,197,94,.35);
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
</style>

<div class="popup-overlay"></div>

<div class="popup-container">
    <div class="popup-card">

        {{-- HEADER --}}
        <div class="popup-header">
            <h5>
                <i class="bi bi-trophy"></i>
                Tambah Prestasi
            </h5>
            <a href="{{ route('admin.prestasi.index') }}" class="popup-close">&times;</a>
        </div>

        {{-- BODY --}}
        <div class="popup-body">
            <form action="{{ route('admin.prestasi.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label fw-semibold">Judul Prestasi</label>
                    <input type="text" name="judul" class="form-control"
                           placeholder="Contoh: Juara 1 Lomba Futsal" required>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Kelas</label>
                        <select name="kelas" class="form-select" required>
                            <option value="">-- Pilih Kelas --</option>
                            <option>Kelas X</option>
                            <option>Kelas XI</option>
                            <option>Kelas XII</option>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Jurusan</label>
                        <select name="jurusan" class="form-select" required>
                            <option value="">-- Pilih Jurusan --</option>
                            <option>TJKT</option>
                            <option>PPLG</option>
                            <option>AKL</option>
                            <option>MPLB</option>
                            <option>DPIB</option>
                            <option>TO</option>
                            <option>SP</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" required>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-semibold">Foto Prestasi</label>
                    <input type="file" name="foto" class="form-control" accept="image/*">
                </div>

                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.prestasi.index') }}" class="btn btn-light">Batal</a>
                    <button class="btn btn-success">
                        <i class="bi bi-save me-1"></i>Simpan
                    </button>
                </div>
            </form>
        </div>

    </div>
</div>

@endsection
