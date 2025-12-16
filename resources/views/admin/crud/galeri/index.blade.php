@extends('admin.layout')

@section('title','Galeri')

@section('content')
<div class="p-6">

    {{-- Header --}}
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Galeri Sekolah</h1>
            <p class="text-sm text-gray-500">Kelola dokumentasi kegiatan sekolah</p>
        </div>

        <a href="{{ route('admin.galeri.create') }}"
           class="inline-flex items-center gap-2 px-4 py-2 bg-blue-600 text-white rounded-lg
                  hover:bg-blue-700 transition shadow">
            <span class="text-lg">+</span> Tambah Galeri
        </a>
    </div>

    {{-- Jika Data Kosong --}}
    @if($galeri->count() == 0)
        <div class="bg-white rounded-xl shadow p-10 text-center text-gray-500">
            <p class="text-lg font-semibold mb-2">Belum ada galeri</p>
            <p class="text-sm mb-4">Silakan tambahkan foto kegiatan sekolah</p>
            <a href="{{ route('admin.galeri.create') }}"
               class="inline-block px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                Tambah Galeri
            </a>
        </div>
    @else

    {{-- Grid Galeri --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($galeri as $g)
            <div class="group bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden">

                {{-- Foto --}}
                <div class="relative">
                    <img src="{{ asset('storage/'.$g->foto) }}"
                         alt="{{ $g->judul }}"
                         class="w-full h-48 object-cover">

                    {{-- Overlay Aksi --}}
                    <div class="absolute inset-0 bg-black/40 opacity-0
                                group-hover:opacity-100 transition flex items-center justify-center gap-3">
                        <a href="{{ route('admin.galeri.edit',$g->id) }}"
                           class="px-3 py-2 bg-blue-500 text-white text-sm rounded-lg hover:bg-blue-600">
                            Edit
                        </a>

                        <form action="{{ route('admin.galeri.destroy',$g->id) }}"
                              method="POST"
                              onsubmit="return confirm('Yakin ingin menghapus galeri ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="px-3 py-2 bg-red-600 text-white text-sm rounded-lg hover:bg-red-700">
                                Hapus
                            </button>
                        </form>
                    </div>
                </div>

                {{-- Konten --}}
                <div class="p-4">
                    <h3 class="text-base font-semibold text-gray-800 line-clamp-2">
                        {{ $g->judul }}
                    </h3>
                </div>

            </div>
        @endforeach
    </div>

    @endif

</div>
@endsection
