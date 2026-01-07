@extends('admin.layout')

@section('content')
<div class="container-fluid">

    <div class="mb-4">
        <h3 class="fw-bold">Tambah Tenaga Kependidikan</h3>
        <p class="text-muted">Input data tenaga kependidikan baru</p>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body">
            <form action="{{ route('admin.tenaga.store') }}"
                  method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama"
                           class="form-control"
                           placeholder="Masukkan nama"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jabatan</label>
                    <input type="text" name="jabatan"
                           class="form-control"
                           placeholder="Contoh: Tata Usaha"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Foto</label>
                    <input type="file" name="foto"
                           class="form-control">
                </div>

                <div class="d-flex gap-2">
                    <button class="btn btn-primary">
                        Simpan
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

