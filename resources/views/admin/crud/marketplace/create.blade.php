
@extends('admin.layout')

@section('content')
<div class="container">
    <h4 class="fw-bold mb-3">Tambah Produk Marketplace</h4>

    <form action="{{ route('admin.marketplace.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nama Produk</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="number" name="harga" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Foto Produk</label>
            <input type="file" name="foto" class="form-control" required>
        </div>

        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('admin.marketplace.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
