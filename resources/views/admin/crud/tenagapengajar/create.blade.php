@extends('admin.layout')

@section('title', 'Tambah Tenaga Kependidikan')

@section('content')

<style>
/* === OVERLAY === */
.popup-overlay{
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,.35);
    backdrop-filter: blur(6px);
    z-index: 999;
}

/* === CONTAINER === */
.popup-container{
    position: fixed;
    inset: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1000;
}

/* === CARD === */
.popup-card{
    width: 700px;
    max-width: 95%;
    max-height: 90vh;
    overflow-y: auto;
    background: #fff;
    border-radius: 18px;
    animation: popupScale .25s ease;
    box-shadow: 0 30px 80px rgba(0,0,0,.25);
}

/* === HEADER === */
.popup-header{
    padding: 18px 24px;
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
    font-size: 28px;
    text-decoration: none;
    color: #666;
    line-height: 1;
}

/* === BODY === */
.popup-body{
    padding: 24px;
}

/* === ANIMATION === */
@keyframes popupScale{
    from{ opacity: 0; transform: scale(.96); }
    to{ opacity: 1; transform: scale(1); }
}
</style>

<div class="popup-overlay"></div>

<div class="popup-container">
    <div class="popup-card">

        {{-- HEADER --}}
        <div class="popup-header">
            <h5>
                <i class="bi bi-person-plus-fill me-2"></i>
                Tambah Tenaga Kependidikan
            </h5>
            <a href="{{ route('admin.tenagapengajar.index') }}" class="popup-close">&times;</a>
        </div>

        {{-- BODY --}}
        <div class="popup-body">

            {{-- ERROR --}}
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.tenagapengajar.store') }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf

                {{-- NAMA --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">Nama</label>
                    <input type="text"
                           name="nama"
                           class="form-control"
                           value="{{ old('nama') }}"
                           placeholder="Nama lengkap"
                           required>
                </div>

                {{-- PENGAMPU --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">Pengampu</label>
                    <input type="text"
                           name="pengampu"
                           class="form-control"
                           value="{{ old('pengampu') }}"
                           placeholder="Contoh: TU, BK, Perpustakaan"
                           required>
                </div>

                {{-- FOTO --}}
                <div class="mb-4">
                    <label class="form-label fw-semibold">Foto</label>
                    <input type="file"
                           name="foto"
                           class="form-control"
                           accept="image/*">
                    <small class="text-muted">
                        JPG / PNG • Maks 2MB
                    </small>
                </div>

                {{-- BUTTON --}}
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.tenagapengajar.index') }}"
                       class="btn btn-light">
                        Batal
                    </a>
                    <button class="btn btn-primary px-4">
                        <i class="bi bi-save me-1"></i> Simpan
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>

@endsection
