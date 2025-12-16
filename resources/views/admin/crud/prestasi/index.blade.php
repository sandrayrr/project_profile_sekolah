@extends('admin.layout')

@section('content')
<div class="container">
    <a href="{{ route('admin.prestasi.create') }}" class="btn btn-primary mb-3">
        + Tambah Prestasi
    </a>

    <div class="row">
        @foreach($prestasis as $p)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <img src="{{ asset('storage/'.$p->foto) }}" class="card-img-top" height="200" style="object-fit:cover">

                <div class="card-body">
                    <small class="text-muted">{{ $p->tanggal }}</small>
                    <h5 class="mt-2">{{ $p->judul }}</h5>
                    <p class="text-primary">{{ $p->kelas }}</p>

                    <a href="{{ route('admin.prestasi.edit',$p->id) }}" class="btn btn-warning btn-sm">Edit</a>

                    <form action="{{ route('admin.prestasi.destroy',$p->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Hapus data?')" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
