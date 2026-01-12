@extends('admin.layout')

@section('title', 'Edit Staff Kependidikan')

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
                <i class="bi bi-pencil-square me-2"></i>
                Edit Staff Kependidikan
            </h5>
            <a href="{{ route('admin.staffkependidikan.index') }}"
               class="popup-close">&times;</a>
        </div>

        {{-- BODY --}}
        <div class="popup-body">

            {{-- ERROR VALIDATION --}}
            @if ($errors->any())
                <div class="alert alert-danger shadow-sm">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.staffkependidikan.update', $staff->id) }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- NAMA --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">Nama</label>
                    <input type="text"
                           name="nama"
                           class="form-control @error('nama') is-invalid @enderror"
                           value="{{ old('nama', $staff->nama) }}"
                           required>
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- JABATAN --}}
                <div class="mb-3">
                    <label class="form-label fw-bold">Jabatan</label>
                    <input type="text"
                           name="jabatan"
                           class="form-control @error('jabatan') is-invalid @enderror"
                           value="{{ old('jabatan', $staff->jabatan) }}"
                           required>
                    @error('jabatan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- FOTO --}}
                <div class="mb-4">
                    <label class="form-label fw-bold">Foto</label>
                    <input type="file"
                           name="foto"
                           class="form-control @error('foto') is-invalid @enderror"
                           accept="image/*">

                    @if($staff->foto)
                        <div class="mt-3">
                            <small class="text-muted d-block mb-1">Foto Saat Ini</small>
                            <img src="{{ asset('storage/'.$staff->foto) }}"
                                 alt="{{ $staff->nama }}"
                                 class="rounded shadow-sm"
                                 style="width:120px;height:120px;object-fit:cover;">
                        </div>
                    @endif

                    @error('foto')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- BUTTON --}}
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.staffkependidikan.index') }}"
                       class="btn btn-light">
                        Batal
                    </a>
                    <button class="btn btn-primary px-4">
                        <i class="bi bi-save me-1"></i> Update
                    </button>
                </div>

            </form>
        </div>

    </div>
</div>

@endsection
