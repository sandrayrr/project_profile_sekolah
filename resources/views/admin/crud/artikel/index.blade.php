@extends('admin.layout')

@section('title', 'Manajemen Artikel')

@section('content')
<div class="container-fluid py-4">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
        <div>
            <h4 class="fw-bold mb-1">Manajemen Artikel</h4>
            <p class="text-muted mb-0">Kelola konten artikel dan berita sekolah</p>
        </div>
        <a href="{{ route('admin.artikel.create') }}"
           class="btn btn-primary btn-lg px-4 shadow-sm hover-lift">
            <i class="bi bi-plus-circle me-2"></i> Tambah Artikel
        </a>
    </div>

    {{-- STATISTIK --}}
    <div class="row mb-4">
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="card border-0 bg-gradient-primary text-white shadow-sm">
                <div class="card-body d-flex align-items-center">
                    <div class="flex-grow-1">
                        <h6 class="mb-0 text-white-50">Total Artikel</h6>
                        <h3 class="mb-0 fw-bold">{{ $artikels->total() }}</h3>
                    </div>
                    <i class="bi bi-journal-text fs-1 opacity-75"></i>
                </div>
            </div>
        </div>
    </div>

    {{-- ALERT --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm mb-4">
            <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- FILTER --}}
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body">
            <div class="row g-3">

                <div class="col-md-5">
                    <div class="input-group">
                        <span class="input-group-text bg-transparent border-end-0">
                            <i class="bi bi-search"></i>
                        </span>
                        <input type="text"
                               class="form-control border-start-0"
                               id="searchInput"
                               placeholder="Cari judul artikel...">
                    </div>
                </div>

                <div class="col-md-4">
                    <select class="form-select" id="kategoriFilter">
                        <option value="">Semua Kategori</option>
                        <option value="Akademik">Akademik</option>
                        <option value="Kesiswaan">Kesiswaan</option>
                        <option value="Prestasi">Prestasi</option>
                        <option value="Pengumuman">Pengumuman</option>
                        <option value="Berita Sekolah">Berita Sekolah</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <select class="form-select" id="sortSelect">
                        <option value="newest">Terbaru</option>
                        <option value="oldest">Terlama</option>
                        <option value="title">Judul A-Z</option>
                    </select>
                </div>

            </div>
        </div>
    </div>

    {{-- LIST ARTIKEL --}}
    <div class="row" id="artikelContainer">
        @forelse ($artikels as $item)

        @php
            $warna = match($item->kategori) {
                'Akademik' => 'primary',
                'Kesiswaan' => 'success',
                'Prestasi' => 'warning',
                'Pengumuman' => 'danger',
                'Berita Sekolah' => 'info',
                default => 'secondary'
            };
        @endphp

        <div class="col-lg-6 col-xl-4 mb-4 artikel-item"
             data-judul="{{ strtolower($item->judul) }}"
             data-kategori="{{ $item->kategori }}"
             data-tanggal="{{ $item->tanggal }}">

            <div class="card h-100 shadow-sm border-0 article-card">

                {{-- IMAGE --}}
                @if($item->foto)
                    <img src="{{ asset('storage/'.$item->foto) }}"
                         class="card-img-top article-image"
                         style="height:200px;object-fit:cover">
                @else
                    <div class="card-img-top d-flex align-items-center justify-content-center bg-light"
                         style="height:200px">
                        <i class="bi bi-image fs-1 text-muted"></i>
                    </div>
                @endif

                {{-- BODY --}}
                <div class="card-body d-flex flex-column">
                    <span class="badge bg-{{ $warna }}-subtle text-{{ $warna }} mb-2 align-self-start">
                        {{ $item->kategori }}
                    </span>

                    <h5 class="fw-semibold">{{ $item->judul }}</h5>

                    <p class="text-muted small flex-grow-1">
                        {{ Str::limit(strip_tags($item->deskripsi), 100) }}
                    </p>

                    <div class="d-flex justify-content-between align-items-center pt-3 border-top">
                        <span class="text-muted small">
                            <i class="bi bi-calendar3 me-1"></i>
                            {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}
                        </span>

                        <div class="btn-group btn-group-sm">
                            <a href="{{ route('admin.artikel.edit', $item->id) }}"
                               class="btn btn-outline-primary">
                                <i class="bi bi-pencil-square"></i>
                            </a>

                            <form action="{{ route('admin.artikel.destroy', $item->id) }}"
                                  method="POST"
                                  onsubmit="return confirmDelete()">
                                @csrf @method('DELETE')
                                <button class="btn btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        @empty
            <div class="col-12 text-center py-5">
                <i class="bi bi-journal-x fs-1 text-muted"></i>
                <h5 class="mt-3">Belum ada artikel</h5>
            </div>
        @endforelse
    </div>

    {{-- PAGINATION --}}
    {{ $artikels->links('pagination::bootstrap-4') }}

</div>

{{-- STYLE --}}
<style>
.bg-gradient-primary{
    background:linear-gradient(135deg,#667eea,#764ba2)
}
.article-card{transition:.3s}
.article-card:hover{transform:translateY(-5px)}
.article-image{transition:.5s}
.article-card:hover .article-image{transform:scale(1.05)}
</style>

{{-- SCRIPT --}}
<script>
const searchInput = document.getElementById('searchInput');
const kategoriFilter = document.getElementById('kategoriFilter');
const sortSelect = document.getElementById('sortSelect');

function filterArtikel(){
    const search = searchInput.value.toLowerCase();
    const kategori = kategoriFilter.value;

    document.querySelectorAll('.artikel-item').forEach(item => {
        const judul = item.dataset.judul;
        const kat = item.dataset.kategori;

        item.style.display =
            judul.includes(search) &&
            (kategori === '' || kat === kategori)
            ? '' : 'none';
    });
}

searchInput.addEventListener('input', filterArtikel);
kategoriFilter.addEventListener('change', filterArtikel);

sortSelect.addEventListener('change', function(){
    const items = [...document.querySelectorAll('.artikel-item')];
    const container = document.getElementById('artikelContainer');

    items.sort((a,b)=>{
        if(this.value==='title') return a.dataset.judul.localeCompare(b.dataset.judul);
        return this.value==='newest'
            ? new Date(b.dataset.tanggal)-new Date(a.dataset.tanggal)
            : new Date(a.dataset.tanggal)-new Date(b.dataset.tanggal);
    });

    items.forEach(i=>container.appendChild(i));
});

function confirmDelete(){
    return confirm('Yakin ingin menghapus artikel?');
}
</script>
@endsection
