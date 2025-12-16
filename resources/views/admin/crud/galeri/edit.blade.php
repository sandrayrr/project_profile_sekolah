@extends('admin.layout')

@section('title','Edit Galeri')

@section('content')

<div class="card shadow-sm">
    <div class="card-header fw-bold">
        Edit Galeri
    </div>

    <div class="card-body">
        <form action="{{ route('admin.galeri.update',$galeri->id) }}"
              method="POST"
              enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Judul</label>
                <input type="text" name="judul"
                       class="form-control"
                       value="{{ $galeri->judul }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Foto Sekarang</label><br>
                <img src="{{ asset('storage/'.$galeri->foto) }}"
                     class="rounded border mb-2"
                     style="width: 150px; height: 90px; object-fit: cover;">
                <input type="file" name="foto" class="form-control mt-2">
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('admin.galeri.index') }}" class="btn btn-secondary">
                    Kembali
                </a>
                <button class="btn btn-primary">
                    Update
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
