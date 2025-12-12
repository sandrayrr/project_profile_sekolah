@extends('layouts.main')

@section('title', 'Beranda')

@section('content')
<!-- Hero Section / Banner -->
<section class="relative h-96 bg-gray-300">
    <img src="https://via.placeholder.com/1920x600/4e73df/ffffff?text=Selamat+Datang+di+SMK+Negeri+1+Kawali" class="absolute inset-0 w-full h-full object-cover" alt="Hero Banner">
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white bg-black bg-opacity-50">
        <h1 class="text-4xl font-bold mb-4">SMK Negeri 1 Kawali</h1>
        <p class="text-xl mb-6">Membentuk Generasi Unggul dan Berkarakter</p>
        <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300">Lebih Lanjut</a>
    </div>
</section>

<!-- Agenda Section -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Agenda</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @for ($i = 1; $i <= 3; $i++)
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:scale-105">
                <img src="https://via.placeholder.com/400x250" class="w-full h-48 object-cover" alt="Foto Agenda {{ $i }}">
                <div class="p-6">
                    <h5 class="text-xl font-bold mb-2">Judul Agenda {{ $i }}</h5>
                    <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore.</p>
                    <a href="#" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition duration-300">Baca Selengkapnya</a>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>

<!-- Berita, Artikel & Informasi Section -->
<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Berita, Artikel & Informasi</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @for ($i = 1; $i <= 3; $i++)
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:scale-105">
                <img src="https://via.placeholder.com/400x250" class="w-full h-48 object-cover" alt="Foto Berita {{ $i }}">
                <div class="p-6">
                    <h5 class="text-xl font-bold mb-2">Judul Berita {{ $i }}</h5>
                    <p class="text-gray-600 mb-4">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                    <a href="#" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition duration-300">Baca Selengkapnya</a>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>

<!-- Guru Section -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Guru</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            @for ($i = 1; $i <= 4; $i++)
            <div class="bg-white rounded-lg shadow-md p-6 text-center">
                <img src="https://via.placeholder.com/250x250" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover" alt="Foto Guru {{ $i }}">
                <h5 class="text-lg font-bold">Nama Guru {{ $i }}</h5>
                <p class="text-gray-500">Guru Mata Pelajaran</p>
            </div>
            @endfor
        </div>
    </div>
</section>

<!-- Fasilitas Sekolah Section -->
<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Fasilitas Sekolah</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            @for ($i = 1; $i <= 4; $i++)
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://via.placeholder.com/300x200" class="w-full h-40 object-cover" alt="Fasilitas {{ $i }}">
                <div class="p-4 text-center">
                    <h5 class="text-lg font-bold">Nama Fasilitas {{ $i }}</h5>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>

<!-- Ekstrakurikuler Section -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Ekstrakurikuler</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            @for ($i = 1; $i <= 4; $i++)
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://via.placeholder.com/300x200" class="w-full h-40 object-cover" alt="Ekstrakurikuler {{ $i }}">
                <div class="p-4 text-center">
                    <h5 class="text-lg font-bold">Nama Ekstrakurikuler {{ $i }}</h5>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>

<!-- Testimoni Section -->
<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Testimoni</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @for ($i = 1; $i <= 3; $i++)
            <div class="bg-white rounded-lg shadow-md p-6">
                <blockquote class="text-gray-600 mb-6 italic">"SMK Negeri 1 Kawali memberikan bekal ilmu dan pengalaman yang luar biasa, membuat saya siap terjun ke dunia kerja."</blockquote>
                <div class="flex items-center">
                    <img src="https://via.placeholder.com/80x80" class="w-16 h-16 rounded-full mr-4 object-cover" alt="Foto Alumni {{ $i }}">
                    <div>
                        <h6 class="font-bold">Nama Alumni {{ $i }}</h6>
                        <small class="text-gray-500">Angkatan 202{{ $i }}</small>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>
@endsection