
@extends('admin.layout')

@section('content')
<div class="container">
    <h4 class="fw-bold mb-3">Edit Produk Marketplace</h4>

    <form action="{{ route('admin.marketplace.update', $marketplace->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nama Produk</label>
            <input type="text" name="nama" class="form-control" value="{{ $marketplace->nama }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="number" name="harga" class="form-control" value="{{ $marketplace->harga }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Foto Produk</label><br>
            <img src="{{ asset('storage/'.$marketplace->foto) }}" class="img-thumbnail mb-2" width="120">
            <input type="file" name="foto" class="form-control">
        </div>

        <button class="btn btn-success">Update</button>
        <a href="{{ route('admin.marketplace.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
