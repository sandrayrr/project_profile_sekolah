@extends('admin.layout')

@section('title','Edit Fasilitas')

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
    width: 520px;
    max-width: 95%;
    background: #fff;
    border-radius: 18px;
    box-shadow: 0 30px 80px rgba(0,0,0,.25);
    animation: popupScale .25s ease;
}

/* HEADER */
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

/* BODY */
.popup-body{
    padding: 22px;
}

/* ANIMATION */
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
                <i class="bi bi-pencil-square me-1"></i>
                Edit Fasilitas
            </h5>

            <a href="{{ route('admin.fasilitas.index') }}"
               class="popup-close">&times;</a>
        </div>

        {{-- BODY --}}
        <div class="popup-body">

            <form action="{{ route('admin.fasilitas.update', $fasilitas->id) }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- JUDUL --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Judul Fasilitas
                    </label>
                    <input type="text"
                           name="judul"
                           class="form-control"
                           value="{{ old('judul', $fasilitas->judul) }}"
                           required>
                </div>

                {{-- FOTO --}}
                <div class="mb-4">
                    <label class="form-label fw-semibold d-block">
                        Foto Saat Ini
                    </label>

                    <div class="d-flex align-items-center gap-3 flex-wrap">
                        <img src="{{ asset('storage/'.$fasilitas->foto) }}"
                             class="rounded border shadow-sm"
                             style="width:160px;height:100px;object-fit:cover;">

                        <div>
                            <small class="text-muted d-block mb-1">
                                Ganti foto (opsional)
                            </small>
                            <input type="file"
                                   name="foto"
                                   class="form-control">
                        </div>
                    </div>
                </div>

                {{-- ACTION --}}
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.fasilitas.index') }}"
                       class="btn btn-light">
                        Batal
                    </a>

                    <button class="btn btn-primary">
                        <i class="bi bi-save me-1"></i> Update
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>

@endsection

