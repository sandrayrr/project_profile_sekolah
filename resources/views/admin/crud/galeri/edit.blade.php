@extends('admin.layout')

@section('title','Edit Galeri')

@section('content')
<div class="container-fluid">

    {{-- HEADER --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <h1 class="h4 fw-bold mb-1">
                🖼️ Edit Galeri
            </h1>
            <small class="text-muted">
                Perbarui judul dan foto galeri kegiatan sekolah
            </small>
        </div>
    </div>

    {{-- CARD FORM --}}
    <div class="card shadow-sm border-0">
        <div class="card-body">

            <form action="{{ route('admin.galeri.update', $galeri->id) }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- JUDUL --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Judul Foto
                    </label>
                    <input type="text"
                           name="judul"
                           class="form-control"
                           value="{{ old('judul', $galeri->judul) }}">
                </div>

                {{-- FOTO --}}
                <div class="mb-4">
                    <label class="form-label fw-semibold d-block">
                        Foto Saat Ini
                    </label>

                    <div class="d-flex align-items-center gap-3 flex-wrap">
                        <img src="{{ asset('storage/'.$galeri->foto) }}"
                             class="rounded border shadow-sm"
                             style="width: 180px; height: 110px; object-fit: cover;">

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
                    <a href="{{ route('admin.galeri.index') }}"
                       class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>

                    <button class="btn btn-primary">
                        <i class="bi bi-save"></i> Update Galeri
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>
@endsection
