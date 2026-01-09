@extends('admin.layout')

@section('title','Tambah Prestasi')

@section('content')

<style>
.popup-overlay{
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,.35);
    backdrop-filter: blur(6px);
    z-index: 999;
}
.popup-container{
    position: fixed;
    inset: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1000;
}
.popup-card{
    width: 600px;
    max-width: 95%;
    background: #fff;
    border-radius: 18px;
    box-shadow: 0 30px 80px rgba(0,0,0,.25);
    animation: popupScale .25s ease;
}
.popup-header{
    padding: 16px 22px;
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
.popup-body{
    padding: 22px;
    max-height: 75vh;
    overflow-y: auto;
}
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
                <i class="bi bi-trophy me-1"></i>
                Tambah Prestasi
            </h5>

            <a href="{{ route('admin.prestasi.index') }}" class="popup-close">
                &times;
            </a>
        </div>

        {{-- BODY --}}
        <div class="popup-body">
            <form action="{{ route('admin.prestasi.store') }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf

                {{-- JUDUL --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Judul Prestasi
                    </label>
                    <input type="text"
                           name="judul"
                           class="form-control"
                           placeholder="Contoh: Juara 1 Lomba Futsal"
                           required>
                </div>

                {{-- KELAS & JURUSAN --}}
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">
                            Kelas
                        </label>
                        <select name="kelas" class="form-select" required>
                            <option value="">-- Pilih Kelas --</option>
                            <option value="Kelas X">Kelas X</option>
                            <option value="Kelas XI">Kelas XI</option>
                            <option value="Kelas XII">Kelas XII</option>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">
                            Jurusan
                        </label>
                        <select name="jurusan" class="form-select" required>
                            <option value="">-- Pilih Jurusan --</option>
                            <option value="TJKT">TJKT</option>
                            <option value="PPLG">PPLG</option>
                            <option value="AKL">AKL</option>
                            <option value="MPLB">MPLB</option>
                            <option value="DPIB">DPIB</option>
                            <option value="TO">TO</option>
                            <option value="SP">SP</option>
                        </select>
                    </div>
                </div>

                {{-- TANGGAL --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Tanggal
                    </label>
                    <input type="date"
                           name="tanggal"
                           class="form-control"
                           required>
                </div>

                {{-- FOTO --}}
                <div class="mb-4">
                    <label class="form-label fw-semibold">
                        Foto Prestasi
                    </label>
                    <input type="file"
                           name="foto"
                           class="form-control"
                           accept="image/*">
                </div>

                {{-- ACTION --}}
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.prestasi.index') }}"
                       class="btn btn-light">
                        Batal
                    </a>

                    <button class="btn btn-success">
                        <i class="bi bi-save me-1"></i>
                        Simpan
                    </button>
                </div>

            </form>
        </div>

    </div>
</div>

@endsection
