{{-- resources/views/admin/artikel/index.blade.php --}}
@extends('admin.layout')

@section('content')
<div class="container">
    <a href="{{ route('admin.artikel.create') }}" class="btn btn-primary mb-3">
        + Tambah Artikel
    </a>

    <div class="row">
        @foreach($artikels as $item)
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100">

                @if($item->foto)
                <img src="{{ asset('storage/'.$item->foto) }}"
                     class="card-img-top"
                     style="height:220px;object-fit:cover;">
                @endif

                <div class="card-body">
                    <small class="text-primary">
                        📅 {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}
                    </small>

                    <h5 class="mt-2">{{ $item->judul }}</h5>
                    <p>{{ Str::limit($item->deskripsi, 120) }}</p>

                    <a href="{{ route('admin.artikel.edit', $item->id) }}"
                       class="btn btn-warning btn-sm">Edit</a>

                    <form action="{{ route('admin.artikel.destroy', $item->id) }}"
                          method="POST"
                          class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm"
                                onclick="return confirm('Hapus artikel?')">
                            Hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    {{ $artikels->links() }}
</div>
@endsection
