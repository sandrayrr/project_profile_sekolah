@extends('admin.layout')

@section('title','Galeri')

@section('content')
<div class="p-6">

    {{-- Header --}}
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Galeri Sekolah</h1>
        <a href="{{ route('admin.galeri.create') }}"
           class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
            + Tambah Galeri
        </a>
    </div>

    {{-- Grid Galeri --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach($galeri as $g)
            <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">
                
                {{-- Foto --}}
                <img src="{{ asset('storage/'.$g->foto) }}"
                     class="w-full h-48 object-cover">

                {{-- Konten --}}
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">
                        {{ $g->judul }}
                    </h3>

                    {{-- Aksi --}}
                    <div class="flex gap-2">
                        <a href="{{ route('admin.galeri.edit',$g->id) }}"
                           class="w-full text-center text-sm px-3 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
                            Edit
                        </a>

                        <form action="{{ route('admin.galeri.destroy',$g->id) }}"
                              method="POST"
                              class="w-full"
                              onsubmit="return confirm('Yakin ingin menghapus galeri ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="w-full text-sm px-3 py-2 bg-blue-700 text-white rounded-lg hover:bg-blue-800 transition">
                                Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>
@endsection
