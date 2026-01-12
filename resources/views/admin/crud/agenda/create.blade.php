@extends('admin.layout')

@section('title','Tambah Agenda')

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
    width: 800px;
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
    from{
        opacity: 0;
        transform: scale(.96);
    }
    to{
        opacity: 1;
        transform: scale(1);
    }
}
</style>

<div class="popup-overlay"></div>

<div class="popup-container">
    <div class="popup-card">

        {{-- HEADER --}}
        <div class="popup-header">
            <h5>
                <i class="bi bi-calendar-event me-2"></i>
                Tambah Agenda
            </h5>
            <a href="{{ route('admin.agenda.index') }}"
               class="popup-close">&times;</a>
        </div>

        {{-- BODY --}}
        <div class="popup-body">
            <form action="{{ route('admin.agenda.store') }}" method="POST">
                @csrf

                {{-- JUDUL --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">
                        Judul Agenda
                    </label>
                    <input type="text"
                           name="judul"
                           class="form-control @error('judul') is-invalid @enderror"
                           value="{{ old('judul') }}"
                           placeholder="Contoh: Rapat Orang Tua Siswa"
                           required>
                    @error('judul')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- DESKRIPSI --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">
                        Deskripsi
                    </label>
                    <textarea name="deskripsi"
                              rows="4"
                              class="form-control @error('deskripsi') is-invalid @enderror"
                              placeholder="Deskripsi singkat agenda...">{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- TANGGAL & WAKTU --}}
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">
                            Tanggal
                        </label>
                        <input type="date"
                               name="tanggal"
                               class="form-control @error('tanggal') is-invalid @enderror"
                               value="{{ old('tanggal') }}"
                               required>
                        @error('tanggal')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">
                            Waktu
                        </label>
                        <input type="time"
                               name="waktu"
                               class="form-control @error('waktu') is-invalid @enderror"
                               value="{{ old('waktu') }}"
                               required>
                        @error('waktu')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- BUTTON --}}
                <div class="d-flex justify-content-end gap-2 mt-4">
                    <a href="{{ route('admin.agenda.index') }}"
                       class="btn btn-light">
                        Batal
                    </a>

                    <button class="btn btn-primary">
                        <i class="bi bi-save me-1"></i>
                        Simpan Agenda
                    </button>
                </div>

            </form>
        </div>

    </div>
</div>

@endsection
