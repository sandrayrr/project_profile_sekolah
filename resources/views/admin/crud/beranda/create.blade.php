@extends('admin.layout')

@section('title','Tambah Beranda')

@section('content')

<style>
/* OVERLAY */
.popup-overlay{
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,.35);
    backdrop-filter: blur(6px);
    z-index: 999;
}

/* CONTAINER */
.popup-container{
    position: fixed;
    inset: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1000;
}

/* CARD */
.popup-card{
    width: 680px;
    max-width: 96%;
    background: #fff;
    border-radius: 18px;
    box-shadow: 0 30px 80px rgba(0,0,0,.25);
    animation: popupScale .25s ease;
}

/* HEADER */
.popup-header{
    padding: 18px 22px;
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
    font-size: 26px;
    text-decoration: none;
    color: #666;
}

/* BODY */
.popup-body{
    padding: 22px;
    max-height: 75vh;
    overflow-y: auto;
}

/* ANIMASI */
@keyframes popupScale{
    from{ opacity:0; transform:scale(.96); }
    to{ opacity:1; transform:scale(1); }
}
</style>

<div class="popup-overlay"></div>

<div class="popup-container">
    <div class="popup-card">

        {{-- HEADER --}}
        <div class="popup-header">
            <h5>
                <i class="bi bi-house-door me-1"></i>
                Tambah Konten Beranda
            </h5>
            <a href="{{ route('admin.beranda.index') }}"
               class="popup-close">&times;</a>
        </div>

        {{-- BODY --}}
        <div class="popup-body">

            <form action="{{ route('admin.beranda.store') }}" method="POST">
            @csrf

            {{-- ================= SAMBUTAN ================= --}}
            <h6 class="fw-bold mb-3 text-primary">
                <i class="bi bi-megaphone me-1"></i> Sambutan
            </h6>

            <div class="mb-3">
                <label class="form-label fw-semibold">
                    Judul Sambutan
                </label>
                <input type="text"
                       name="judul"
                       class="form-control @error('judul') is-invalid @enderror"
                       placeholder="Contoh: Sambutan Kepala Sekolah"
                       value="{{ old('judul') }}">

                @error('judul')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label class="form-label fw-semibold">
                    Deskripsi Sambutan
                </label>
                <textarea name="deskripsi"
                          rows="4"
                          class="form-control"
                          placeholder="Isi sambutan kepala sekolah...">{{ old('deskripsi') }}</textarea>
            </div>

            <hr>

            {{-- ================= STATISTIK ================= --}}
            <h6 class="fw-bold mb-3 text-success">
                <i class="bi bi-bar-chart-fill me-1"></i> Statistik Sekolah
            </h6>

            <div class="row g-3 mb-4">
                <div class="col-md-4">
                    <label class="form-label fw-semibold">
                        Jumlah Siswa
                    </label>
                    <input type="number"
                           name="jumlah_siswa"
                           class="form-control"
                           value="{{ old('jumlah_siswa', 0) }}">
                </div>

                <div class="col-md-4">
                    <label class="form-label fw-semibold">
                        Jumlah Guru
                    </label>
                    <input type="number"
                           name="jumlah_guru"
                           class="form-control"
                           value="{{ old('jumlah_guru', 0) }}">
                </div>

                <div class="col-md-4">
                    <label class="form-label fw-semibold">
                        Jumlah Jurusan
                    </label>
                    <input type="number"
                           name="jumlah_jurusan"
                           class="form-control"
                           value="{{ old('jumlah_jurusan', 0) }}">
                </div>
            </div>

            {{-- ACTION --}}
            <div class="d-flex justify-content-end gap-2">
                <a href="{{ route('admin.beranda.index') }}"
                   class="btn btn-light">
                    Batal
                </a>

                <button class="btn btn-success">
                    <i class="bi bi-save me-1"></i> Simpan
                </button>
            </div>

            </form>

        </div>
    </div>
</div>

@endsection
