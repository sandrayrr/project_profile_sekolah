@extends('admin.layout')

@section('title', 'Manajemen Artikel')

@section('content')
<style>
    :root {
        /* Warna yang terinspirasi dari logo SMKN 1 Kawali */
        --primary-blue: #0056b3;
        --primary-yellow: #ffc107;
        --primary-red: #dc3545;
        --secondary-blue: #4a6cf7;
        --secondary-purple: #7c3aed;
        --secondary-pink: #ec4899;
        --light-blue: #e6f2ff;
        --light-yellow: #fff8e1;
        --light-red: #ffebee;
        --dark-color: #1a1a2e;
        --light-color: #f5f5f5;
        --text-muted: #6c757d;
        --border-color: #e0e0e0;
        --gradient-primary: linear-gradient(135deg, var(--primary-blue) 0%, #0040a0 100%);
        --gradient-accent: linear-gradient(135deg, var(--primary-yellow) 0%, #ff9800 100%);
        --gradient-secondary: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
        --gradient-success: linear-gradient(135deg, #10b981 0%, #059669 100%);
        --gradient-danger: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        --gradient-modern: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        --gradient-vibrant: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        --shadow-sm: 0 2px 4px rgba(0,0,0,0.05);
        --shadow-md: 0 4px 6px rgba(0,0,0,0.07);
        --shadow-lg: 0 10px 15px rgba(0,0,0,0.1);
        --shadow-xl: 0 20px 25px rgba(0,0,0,0.1);
        --shadow-2xl: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    }
    
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    body {
        font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        color: var(--dark-color);
        position: relative;
        overflow-x: hidden;
        line-height: 1.6;
        min-height: 100vh;
    }
    
    /* Animasi */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    @keyframes slideInLeft {
        from { opacity: 0; transform: translateX(-30px); }
        to { opacity: 1; transform: translateX(0); }
    }
    
    @keyframes slideInRight {
        from { opacity: 0; transform: translateX(30px); }
        to { opacity: 1; transform: translateX(0); }
    }
    
    @keyframes slideInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.05); }
        100% { transform: scale(1); }
    }
    
    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
        100% { transform: translateY(0px); }
    }
    
    @keyframes shimmer {
        0% { background-position: -1000px 0; }
        100% { background-position: 1000px 0; }
    }
    
    @keyframes blob {
        0% { transform: translate(0px, 0px) scale(1); }
        33% { transform: translate(30px, -50px) scale(1.1); }
        66% { transform: translate(-20px, 20px) scale(0.9); }
        100% { transform: translate(0px, 0px) scale(1); }
    }
    
    .fade-in {
        animation: fadeIn 0.8s ease-out;
    }
    
    .slide-in-left {
        animation: slideInLeft 0.8s ease-out;
    }
    
    .slide-in-right {
        animation: slideInRight 0.8s ease-out;
    }
    
    .slide-in-up {
        animation: slideInUp 0.8s ease-out;
    }
    
    .pulse-animation {
        animation: pulse 2s infinite;
    }
    
    .float-animation {
        animation: float 3s ease-in-out infinite;
    }
    
    /* Watermark Logo Sekolah di tengah halaman */
    .watermark-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: -1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }
    
    .school-logo-watermark {
        width: 600px;
        height: 600px;
        background-image: url('https://z-cdn-media.chatglm.cn/files/87692716-b454-4f10-975a-68b6e0678b15.png?auth_key=1867942909-fa1d2338d8714febac500b8f54a413df-0-48e85327eb38ab7c1cb8680e2576aa2d');
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
        opacity: 0.05;
        filter: grayscale(100%) contrast(1.2);
    }
    
    .school-text-watermark {
        font-size: 5rem;
        font-weight: 900;
        color: var(--dark-color);
        opacity: 0.02;
        letter-spacing: 0.5rem;
        text-transform: uppercase;
        margin-top: 2rem;
        transform: rotate(-5deg);
    }
    
    /* Background Pattern */
    .bg-pattern {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: radial-gradient(var(--primary-blue) 1px, transparent 1px);
        background-size: 30px 30px;
        opacity: 0.03;
        z-index: -2;
    }
    
    /* Modern Background Elements */
    .bg-blob {
        position: fixed;
        border-radius: 50%;
        filter: blur(40px);
        opacity: 0.4;
        z-index: -1;
    }
    
    .blob-1 {
        top: 10%;
        left: 10%;
        width: 300px;
        height: 300px;
        background: var(--gradient-primary);
        animation: blob 7s infinite;
    }
    
    .blob-2 {
        bottom: 10%;
        right: 10%;
        width: 400px;
        height: 400px;
        background: var(--gradient-accent);
        animation: blob 9s infinite;
    }
    
    .blob-3 {
        top: 50%;
        right: 30%;
        width: 250px;
        height: 250px;
        background: var(--gradient-secondary);
        animation: blob 11s infinite;
    }
    
    /* Container */
    .container-fluid {
        padding: 2rem;
        max-width: 1400px;
        margin: 0 auto;
    }
    
    /* Header Section */
    .page-header {
        background: var(--gradient-primary);
        color: white;
        padding: 2.5rem;
        border-radius: 20px;
        box-shadow: var(--shadow-2xl);
        position: relative;
        overflow: hidden;
        margin-bottom: 2rem;
    }
    
    .page-header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('https://picsum.photos/seed/smkn1kawali/1200/300.jpg');
        background-size: cover;
        background-position: center;
        opacity: 0.1;
        z-index: 0;
    }
    
    .page-header::after {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%);
        z-index: 0;
    }
    
    .page-header-content {
        position: relative;
        z-index: 1;
    }
    
    /* Stat Card */
    .stat-card {
        background: white;
        border-radius: 20px;
        padding: 1.5rem;
        box-shadow: var(--shadow-lg);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        margin-bottom: 1.5rem;
        height: 100%;
        border: 1px solid rgba(0,0,0,0.05);
    }
    
    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-2xl);
    }
    
    .stat-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 4px;
        height: 100%;
        background: var(--gradient-primary);
    }
    
    .stat-card::after {
        content: '';
        position: absolute;
        bottom: -50px;
        right: -50px;
        width: 150px;
        height: 150px;
        border-radius: 50%;
        background: var(--gradient-primary);
        opacity: 0.05;
    }
    
    .stat-icon {
        width: 70px;
        height: 70px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.5rem;
        font-size: 1.8rem;
        color: white;
        position: relative;
        z-index: 1;
        box-shadow: var(--shadow-md);
    }
    
    /* Filter Card */
    .filter-card {
        background: white;
        border-radius: 20px;
        padding: 1.5rem;
        box-shadow: var(--shadow-lg);
        margin-bottom: 1.5rem;
        position: relative;
        overflow: hidden;
        border: 1px solid rgba(0,0,0,0.05);
    }
    
    .filter-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: var(--gradient-modern);
    }
    
    .input-group-text {
        background: var(--light-blue);
        border: 1px solid var(--border-color);
        color: var(--primary-blue);
        border-radius: 10px 0 0 10px;
    }
    
    .form-control, .form-select {
        border: 1px solid var(--border-color);
        border-radius: 10px;
        padding: 12px 15px;
        transition: all 0.3s ease;
        font-size: 0.95rem;
    }
    
    .form-control:focus, .form-select:focus {
        border-color: var(--primary-blue);
        box-shadow: 0 0 0 0.2rem rgba(0, 86, 179, 0.25);
    }
    
    /* Table Card */
    .table-card {
        background: white;
        border-radius: 20px;
        box-shadow: var(--shadow-lg);
        overflow: hidden;
        position: relative;
        border: 1px solid rgba(0,0,0,0.05);
    }
    
    .table-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: var(--gradient-primary);
    }
    
    .table {
        margin-bottom: 0;
    }
    
    .table thead th {
        border-bottom: 2px solid var(--border-color);
        color: var(--dark-color);
        font-weight: 600;
        padding: 15px;
        background: rgba(0, 86, 179, 0.05);
    }
    
    .table tbody td {
        padding: 15px;
        vertical-align: middle;
    }
    
    .table tbody tr {
        transition: all 0.3s ease;
        position: relative;
    }
    
    .table tbody tr:hover {
        background-color: var(--light-blue);
        transform: translateX(5px);
    }
    
    .table tbody tr::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 3px;
        background: var(--gradient-primary);
        border-radius: 3px;
        transform: scaleY(0);
        transition: transform 0.3s ease;
    }
    
    .table tbody tr:hover::before {
        transform: scaleY(1);
    }
    
    /* Badge */
    .badge {
        padding: 8px 12px;
        border-radius: 50px;
        font-weight: 500;
        font-size: 0.85rem;
        transition: all 0.3s ease;
    }
    
    .badge:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-sm);
    }
    
    /* Button */
    .btn {
        padding: 0.75rem 1.5rem;
        border-radius: 12px;
        font-weight: 600;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
        font-size: 0.95rem;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
    }
    
    .btn i {
        margin-right: 0.5rem;
    }
    
    .btn-primary {
        background: var(--gradient-primary);
        color: white;
        box-shadow: var(--shadow-md);
    }
    
    .btn-primary::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: left 0.5s;
    }
    
    .btn-primary:hover::before {
        left: 100%;
    }
    
    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-xl);
    }
    
    .btn-light {
        background: rgba(255, 255, 255, 0.9);
        color: var(--primary-blue);
        box-shadow: var(--shadow-sm);
    }
    
    .btn-light:hover {
        background: white;
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
    }
    
    .btn-action {
        width: 40px;
        height: 40px;
        border-radius: 12px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        background: white;
        border: 1px solid var(--border-color);
    }
    
    .btn-action:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
    }
    
    /* Alert */
    .alert {
        border-radius: 15px;
        border: none;
        box-shadow: var(--shadow-sm);
    }
    
    /* Empty State */
    .empty-state {
        padding: 50px 0;
        text-align: center;
    }
    
    .empty-state i {
        font-size: 4rem;
        color: var(--text-muted);
        margin-bottom: 20px;
    }
    
    /* Pagination */
    .pagination {
        justify-content: center;
        margin-top: 2rem;
    }
    
    .page-link {
        border-radius: 10px;
        margin: 0 3px;
        color: var(--primary-blue);
        border: 1px solid var(--border-color);
    }
    
    .page-item.active .page-link {
        background: var(--gradient-primary);
        border-color: var(--primary-blue);
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .container-fluid {
            padding: 1rem;
        }
        
        .page-header {
            padding: 1.5rem;
        }
        
        .school-logo-watermark {
            width: 300px;
            height: 300px;
        }
        
        .school-text-watermark {
            font-size: 2.5rem;
        }
    }
</style>

<!-- Background Pattern -->
<div class="bg-pattern"></div>

<!-- Modern Background Elements -->
<div class="bg-blob blob-1"></div>
<div class="bg-blob blob-2"></div>
<div class="bg-blob blob-3"></div>

<!-- Watermark Container -->
<div class="watermark-container">
    <div class="school-logo-watermark"></div>
    <div class="school-text-watermark">SMKN 1 Kawali</div>
</div>

<div class="container-fluid py-4">

    {{-- HEADER --}}
    <div class="page-header fade-in">
        <div class="page-header-content">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                <div>
                    <h4 class="fw-bold mb-1">Manajemen Artikel</h4>
                    <p class="mb-0 opacity-75">
                        Kelola konten artikel dan berita sekolah
                    </p>
                </div>
                <a href="{{ route('admin.artikel.create') }}"
                   class="btn btn-light px-4 shadow-sm">
                    <i class="bi bi-plus-circle me-2"></i> Tambah Artikel
                </a>
            </div>
        </div>
    </div>

    {{-- STATISTIK --}}
    <div class="row mb-4">
        <div class="col-md-3 col-sm-6 mb-3 slide-in-left" style="animation-delay: 0.1s;">
            <div class="stat-card">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <span class="text-muted small d-block mb-1">Total Artikel</span>
                        <h2 class="fw-bold mb-0">{{ $artikels->total() }}</h2>
                    </div>
                    <div class="stat-icon" style="background: var(--gradient-modern);">
                        <i class="bi bi-journal-text"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ALERT --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm mb-4 slide-in-up" style="animation-delay: 0.2s;">
            <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- FILTER --}}
    <div class="filter-card slide-in-up" style="animation-delay: 0.3s;">
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-5">
                    <label class="form-label small text-muted fw-semibold">
                        Cari Artikel
                    </label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bi bi-search"></i>
                        </span>
                        <input type="text"
                               class="form-control"
                               id="searchInput"
                               placeholder="Cari judul artikel...">
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="form-label small text-muted fw-semibold">
                        Kategori
                    </label>
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
                    <label class="form-label small text-muted fw-semibold">
                        Urutkan
                    </label>
                    <select class="form-select" id="sortSelect">
                        <option value="newest">Terbaru</option>
                        <option value="oldest">Terlama</option>
                        <option value="title">Judul A-Z</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    {{-- TABEL ARTIKEL --}}
    <div class="table-card slide-in-right" style="animation-delay: 0.4s;">
        <div class="table-responsive">
            <table class="table table-borderless align-middle mb-0" id="artikelTable">
                {{-- HEADER --}}
                <thead>
                    <tr class="text-muted small">
                        <th class="text-center" width="60">No</th>
                        <th class="text-center" width="120">Foto</th>
                        <th>Judul</th>
                        <th class="text-center" width="160">Kategori</th>
                        <th class="text-center" width="150">Tanggal</th>
                        <th class="text-center" width="120">Aksi</th>
                    </tr>
                </thead>

                <tbody id="artikelContainer">
                    @forelse ($artikels as $item)
                        @php
                            $badge = match($item->kategori) {
                                'Akademik' => 'primary',
                                'Kesiswaan' => 'success',
                                'Prestasi' => 'warning',
                                'Pengumuman' => 'danger',
                                'Berita Sekolah' => 'info',
                                default => 'secondary'
                            };
                        @endphp

                        <tr class="artikel-item border-bottom"
                            data-judul="{{ strtolower($item->judul) }}"
                            data-kategori="{{ $item->kategori }}"
                            data-tanggal="{{ $item->tanggal }}">

                            {{-- NO --}}
                            <td class="text-center text-muted">
                                {{ $loop->iteration }}
                            </td>

                            {{-- FOTO --}}
                            <td class="text-center">
                                @if($item->foto)
                                    <img src="{{ asset('storage/'.$item->foto) }}"
                                         class="rounded-3 shadow-sm"
                                         style="width:90px;height:60px;object-fit:cover">
                                @else
                                    <i class="bi bi-image text-muted fs-3"></i>
                                @endif
                            </td>

                            {{-- JUDUL --}}
                            <td>
                                <div class="fw-semibold text-dark">
                                    {{ $item->judul }}
                                </div>
                                <small class="text-muted">
                                    {{ Str::limit(strip_tags($item->deskripsi), 60) }}
                                </small>
                            </td>

                            {{-- KATEGORI --}}
                            <td class="text-center">
                                <span class="badge bg-{{ $badge }} bg-opacity-10 text-{{ $badge }} rounded-pill px-3 py-2">
                                    {{ $item->kategori }}
                                </span>
                            </td>

                            {{-- TANGGAL --}}
                            <td class="text-center text-muted">
                                {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}
                            </td>

                            {{-- AKSI --}}
                            <td class="text-center">
                                <div class="d-inline-flex gap-1">
                                    <a href="{{ route('admin.artikel.edit', $item->id) }}"
                                       class="btn btn-action">
                                        <i class="bi bi-pencil text-primary"></i>
                                    </a>

                                    <form action="{{ route('admin.artikel.destroy', $item->id) }}"
                                          method="POST"
                                          onsubmit="return confirmDelete()">
                                        @csrf @method('DELETE')
                                        <button class="btn btn-action">
                                            <i class="bi bi-trash text-danger"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        {{-- EMPTY STATE --}}
                        <tr>
                            <td colspan="6" class="empty-state">
                                <div class="d-flex flex-column align-items-center gap-2 text-muted">
                                    <i class="bi bi-file-text fs-1"></i>
                                    <span class="fw-semibold">
                                        Data artikel belum tersedia
                                    </span>
                                    <a href="{{ route('admin.artikel.create') }}" class="btn btn-primary mt-3">
                                        <i class="bi bi-plus-circle me-2"></i>
                                        Tambah Artikel Baru
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{-- PAGINATION --}}
    <div class="d-flex justify-content-center mt-4">
        {{ $artikels->links('pagination::bootstrap-4') }}
    </div>
</div>

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