@extends('admin.layout')

@section('content')
<div class="container-fluid">

    <div class="mb-4">
        <h3 class="fw-bold">Edit Tenaga Kependidikan</h3>
        <p class="text-muted">Perbarui data tenaga kependidikan</p>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body">
            <form action="{{ route('admin.tenaga.update',$tenaga->id) }}"
                  method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama"
                           class="form-control"
                           value="{{ $tenaga->nama }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jabatan</label>
                    <input type="text" name="jabatan"
                           class="form-control"
                           value="{{ $tenaga->jabatan }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Foto</label>
                    <input type="file" name="foto"
                           class="form-control">
                </div>

                @if($tenaga->foto)
                <div class="mb-3">
                    <label class="form-label">Foto Saat Ini</label><br>
                    <img src="{{ asset('storage/'.$tenaga->foto) }}"
                         width="120" class="rounded">
                </div>
                @endif

                <div class="d-flex gap-2">
                    <button class="btn btn-primary">
                        Update
                    </button>
                    <a href="{{ route('admin.tenaga.index') }}"
                       class="btn btn-secondary">
                        Kembali
                    </a>
                </div>

            </form>
        </div>
    </div>

</div>
@endsection

