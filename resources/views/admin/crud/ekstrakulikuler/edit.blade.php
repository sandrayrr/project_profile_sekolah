@extends('admin.layout')

@section('content')
<div class="container">
    <h4 class="fw-bold mb-3">Edit Ekstrakulikuler</h4>

    <form action="{{ route('admin.ekstrakulikuler.update',$ekstrakulikuler->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')

        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" value="{{ $ekstrakulikuler->judul }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Foto</label><br>
            <img src="{{ asset('storage/'.$ekstrakulikuler->foto) }}" width="120" class="mb-2"><br>
            <input type="file" name="foto" class="form-control">
        </div>

        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
