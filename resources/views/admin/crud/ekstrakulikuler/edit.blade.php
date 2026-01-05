@extends('admin.layout')

@section('title', 'Edit Ekstrakulikuler')

@section('content')
<div class="container">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold mb-0">Edit Ekstrakulikuler</h4>
        <a href="{{ route('admin.ekstrakulikuler.index') }}" class="btn btn-light">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>
    </div>

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

    {{-- FORM --}}
    <div class="card border-0 shadow-sm">
        <div class="card-body">

            <form action="{{ route('admin.ekstrakulikuler.update', $ekstrakulikuler->id) }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- JUDUL --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">Judul Ekstrakulikuler</label>
                    <input type="text"
                           name="judul"
                           value="{{ old('judul', $ekstrakulikuler->judul) }}"
                           class="form-control"
                           placeholder="Contoh: Futsal, Pramuka, Tari Tradisional"
                           required>
                </div>

                {{-- KATEGORI --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">Kategori</label>
                    <select name="kategori"
                            class="form-select"
                            required>
                        <option value="">-- Pilih Kategori --</option>
                        @foreach (['Olahraga','Seni','Kepramukaan','Keagamaan','Akademik','Lainnya'] as $kat)
                            <option value="{{ $kat }}"
                                {{ old('kategori', $ekstrakulikuler->kategori) == $kat ? 'selected' : '' }}>
                                {{ $kat }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- FOTO --}}
                <div class="mb-4">
                    <label class="form-label fw-semibold">Foto</label><br>

                    @if ($ekstrakulikuler->foto)
                        <img src="{{ asset('storage/'.$ekstrakulikuler->foto) }}"
                             class="rounded mb-2"
                             style="width:180px;height:120px;object-fit:cover;">
                    @endif

                    <input type="file"
                           name="foto"
                           class="form-control"
                           accept="image/*">
                    <small class="text-muted">
                        Kosongkan jika tidak ingin mengganti foto (JPG / PNG • Maks 2MB)
                    </small>
                </div>

                {{-- BUTTON --}}
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.ekstrakulikuler.index') }}"
                       class="btn btn-secondary">
                        Batal
                    </a>
                    <button class="btn btn-success px-4">
                        <i class="bi bi-save me-1"></i> Simpan
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>
@endsection
