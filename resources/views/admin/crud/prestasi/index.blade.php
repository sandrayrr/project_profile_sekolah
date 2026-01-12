@extends('admin.layout')

@section('title', 'Manajemen Prestasi')

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
    
    /* Badge Jurusan */
    .badge-to {
        background-color: rgba(0, 86, 179, 0.1);
        color: var(--primary-blue);
    }
    
    .badge-tjkt {
        background-color: rgba(99, 102, 241, 0.1);
        color: #6366f1;
    }
    
    .badge-pplg {
        background-color: rgba(255, 193, 7, 0.1);
        color: var(--primary-yellow);
    }
    
    .badge-dpib {
        background-color: rgba(107, 114, 128, 0.1);
        color: #6b7280;
    }
    
    .badge-mplb {
        background-color: rgba(239, 68, 68, 0.1);
        color: var(--primary-red);
    }
    
    .badge-akl {
        background-color: rgba(251, 146, 60, 0.1);
        color: #fb923c;
    }
    
    .badge-sp {
        background-color: rgba(17, 24, 39, 0.1);
        color: #111827;
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
    
    .btn-outline-primary {
        background: transparent;
        color: var(--primary-blue);
        border: 1px solid var(--primary-blue);
    }
    
    .btn-outline-primary:hover {
        background: var(--primary-blue);
        color: white;
    }
    
    .btn-outline-danger {
        background: transparent;
        color: var(--primary-red);
        border: 1px solid var(--primary-red);
    }
    
    .btn-outline-danger:hover {
        background: var(--primary-red);
        color: white;
    }
    
    /* Modal */
    .modal-content {
        border-radius: 20px;
        border: none;
        overflow: hidden;
    }
    
    .modal-header {
        border-bottom: none;
        padding: 1.5rem;
    }
    
    .modal-body {
        padding: 0;
    }
    
    .modal-image {
        width: 100%;
        border-radius: 0;
    }
    
    /* Empty State */
    .empty-state {
        padding: 80px 0;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 400px;
    }
    
    .empty-state i {
        font-size: 5rem;
        color: var(--text-muted);
        margin-bottom: 1.5rem;
        opacity: 0.7;
    }
    
    .empty-state h5 {
        margin-bottom: 1rem;
        font-size: 1.5rem;
        font-weight: 600;
    }
    
    .empty-state p {
        margin-bottom: 2rem;
        font-size: 1.1rem;
        max-width: 500px;
    }
    
    /* Image Container */
    .image-container {
        position: relative;
        overflow: hidden;
        border-radius: 12px;
        transition: all 0.3s ease;
    }
    
    .image-container:hover {
        transform: scale(1.05);
        box-shadow: var(--shadow-lg);
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

    {{-- HEADER dengan statistik --}}
    <div class="page-header fade-in">
        <div class="page-header-content">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                <div>
                    <h4 class="fw-bold mb-1">Manajemen Prestasi</h4>
                    <p class="mb-0 opacity-75">
                        Kelola daftar prestasi siswa dengan mudah
                    </p>
                </div>
                <a href="{{ route('admin.prestasi.create') }}" class="btn btn-light px-4 shadow-sm">
                    <i class="bi bi-plus-circle me-2"></i> Tambah Prestasi
                </a>
            </div>
        </div>
    </div>

    {{-- STATISTIK KARTU --}}
    <div class="row mb-4">
        <div class="col-md-3 col-sm-6 mb-3 slide-in-left" style="animation-delay: 0.1s;">
            <div class="stat-card">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <span class="text-muted small d-block mb-1">Total Prestasi</span>
                        <h2 class="fw-bold mb-0">{{ $prestasi->count() }}</h2>
                    </div>
                    <div class="stat-icon" style="background: var(--gradient-modern);">
                        <i class="bi bi-trophy"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- FILTER DAN SEARCH --}}
    <div class="filter-card slide-in-up" style="animation-delay: 0.2s;">
        <div class="card-body">
            <div class="row g-3 align-items-end">
                {{-- SEARCH --}}
                <div class="col-md-6">
                    <label class="form-label small text-muted fw-semibold">
                        Cari Prestasi
                    </label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bi bi-search"></i>
                        </span>
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Cari judul prestasi..."
                            id="searchInput">
                    </div>
                </div>

                {{-- FILTER KELAS --}}
                <div class="col-md-2">
                    <label class="form-label small text-muted fw-semibold">
                        Kelas
                    </label>
                    <select class="form-select" id="filterKelas">
                        <option value="">Semua</option>
                        <option value="Kelas X">Kelas X</option>
                        <option value="Kelas XI">Kelas XI</option>
                        <option value="Kelas XII">Kelas XII</option>
                    </select>
                </div>

                {{-- FILTER JURUSAN --}}
                <div class="col-md-2">
                    <label class="form-label small text-muted fw-semibold">
                        Jurusan
                    </label>
                    <select class="form-select" id="filterJurusan">
                        <option value="">Semua</option>
                        <option value="TJKT">TJKT</option>
                        <option value="TO">TO</option>
                        <option value="PPLG">PPLG</option>
                        <option value="DPIB">DPIB</option>
                        <option value="MPLB">MPLB</option>
                        <option value="AKL">AKL</option>
                        <option value="SP">SP</option>
                    </select>
                </div>

                {{-- SORT --}}
                <div class="col-md-2">
                    <label class="form-label small text-muted fw-semibold">
                        Urutkan
                    </label>
                    <select class="form-select" id="sortBy">
                        <option value="newest">Terbaru</option>
                        <option value="oldest">Terlama</option>
                        <option value="title">Judul A–Z</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    {{-- TABLE --}}
    <div class="table-card slide-in-right" style="animation-delay: 0.3s;">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0" id="prestasiTable">
                    {{-- HEADER --}}
                    <thead>
                        <tr>
                            <th class="text-center" style="width:60px">No</th>
                            <th class="text-center" style="width:120px">Foto</th>
                            <th>Judul</th>
                            <th class="text-center" style="width:120px">Kelas</th>
                            <th class="text-center" style="width:120px">Jurusan</th>
                            <th class="text-center" style="width:140px">Tanggal</th>
                            <th class="text-center" style="width:120px">Aksi</th>
                        </tr>
                    </thead>

                    {{-- BODY --}}
                    <tbody>
                    @forelse ($prestasi as $p)
                        <tr class="prestasi-row"
                            data-judul="{{ strtolower($p->judul) }}"
                            data-kelas="{{ $p->kelas }}"
                            data-jurusan="{{ $p->jurusan }}"
                            data-tanggal="{{ $p->tanggal }}">

                            {{-- NO --}}
                            <td class="text-center">
                                <span class="badge bg-light text-dark rounded-pill">
                                    {{ $loop->iteration }}
                                </span>
                            </td>

                            {{-- FOTO --}}
                            <td class="text-center">
                                @if ($p->foto)
                                    <div class="image-container">
                                        <img src="{{ asset('storage/'.$p->foto) }}"
                                             class="rounded-3 shadow-sm"
                                             style="width:90px;height:60px;object-fit:cover;cursor:pointer"
                                             onclick="showImageModal('{{ asset('storage/'.$p->foto) }}')">
                                    </div>
                                @else
                                    <div class="bg-light rounded-3 d-flex align-items-center justify-content-center"
                                         style="width:90px;height:60px">
                                        <i class="bi bi-image text-muted fs-4"></i>
                                    </div>
                                @endif
                            </td>

                            {{-- JUDUL --}}
                            <td>
                                <h6 class="mb-1 fw-semibold">{{ $p->judul }}</h6>
                                <small class="text-muted">
                                    <i class="bi bi-clock me-1"></i>
                                    {{ \Carbon\Carbon::parse($p->tanggal)->diffForHumans() }}
                                </small>
                            </td>

                            {{-- KELAS --}}
                            <td class="text-center">
                                <span class="badge bg-info bg-opacity-10 text-info px-3 py-2 rounded-pill fw-semibold">
                                    {{ $p->kelas }}
                                </span>
                            </td>

                            {{-- JURUSAN --}}
                            <td class="text-center">
                                <span class="badge badge-{{ strtolower($p->jurusan) }} px-3 py-2 rounded-pill fw-semibold">
                                    {{ $p->jurusan }}
                                </span>
                            </td>

                            {{-- TANGGAL --}}
                            <td class="text-center text-muted">
                                <i class="bi bi-calendar3 me-1"></i>
                                {{ \Carbon\Carbon::parse($p->tanggal)->format('d M Y') }}
                            </td>

                            {{-- AKSI --}}
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="{{ route('admin.prestasi.edit',$p->id) }}"
                                       class="btn btn-sm btn-outline-primary px-3">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>

                                    <form action="{{ route('admin.prestasi.destroy',$p->id) }}"
                                          method="POST"
                                          class="d-inline"
                                          onsubmit="return confirmDelete('Yakin ingin menghapus prestasi ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-outline-danger px-3">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        {{-- EMPTY STATE --}}
                        <tr>
                            <td colspan="7" class="empty-state">
                                <div class="empty-state-content">
                                    <i class="bi bi-award"></i>
                                    <h5 class="mt-3 text-muted">Belum ada data prestasi</h5>
                                    {{-- <p class="text-muted">Mulai dengan menambahkan prestasi pertama untuk menampilkan pencapaian siswa</p>
                                    <a href="{{ route('admin.prestasi.create') }}" class="btn btn-primary btn-lg px-4">
                                        <i class="bi bi-plus-circle me-2"></i>Tambah Prestasi
                                    </a> --}}
                                </div>
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        {{-- PAGINATION --}}
        @if($prestasi->hasPages())
            <div class="card-footer bg-transparent border-top">
                <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">
                        Menampilkan {{ $prestasi->firstItem() }} – {{ $prestasi->lastItem() }}
                        dari {{ $prestasi->total() }} data
                    </small>
                    {{ $prestasi->links('pagination::bootstrap-4') }}
                </div>
            </div>
        @endif
    </div>

</div>

{{-- Image Modal --}}
<div class="modal fade" id="imageModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 shadow-lg">
            <div class="modal-body p-0">
                <img id="modalImage" src="" class="modal-image" alt="Prestasi Image">
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script>
const searchInput   = document.getElementById('searchInput');
const filterKelas   = document.getElementById('filterKelas');
const filterJurusan = document.getElementById('filterJurusan');
const sortBy        = document.getElementById('sortBy');

function applyFilter() {
    const search   = searchInput.value.toLowerCase();
    const kelas    = filterKelas.value;
    const jurusan  = filterJurusan.value;

    const rows = Array.from(document.querySelectorAll('.prestasi-row'));

    rows.forEach(row => {
        const judulRow   = row.dataset.judul;
        const kelasRow   = row.dataset.kelas;
        const jurusanRow = row.dataset.jurusan;

        let visible = true;

        if (search && !judulRow.includes(search)) {
            visible = false;
        }

        if (kelas && kelasRow !== kelas) {
            visible = false;
        }

        if (jurusan && jurusanRow !== jurusan) {
            visible = false;
        }

        row.style.display = visible ? '' : 'none';
    });
}

// ================= SORTING =================
function applySort() {
    const rows = Array.from(document.querySelectorAll('.prestasi-row'));
    const tbody = document.querySelector('#prestasiTable tbody');

    rows.sort((a, b) => {

        // SORT BY KELAS → JURUSAN
        const kelasA = a.dataset.kelas;
        const kelasB = b.dataset.kelas;

        if (kelasA !== kelasB) {
            return kelasA.localeCompare(kelasB);
        }

        const jurusanA = a.dataset.jurusan;
        const jurusanB = b.dataset.jurusan;

        if (jurusanA !== jurusanB) {
            return jurusanA.localeCompare(jurusanB);
        }

        // SORT OPSIONAL
        if (sortBy.value === 'title') {
            return a.dataset.judul.localeCompare(b.dataset.judul);
        }

        if (sortBy.value === 'oldest') {
            return new Date(a.dataset.tanggal) - new Date(b.dataset.tanggal);
        }

        return new Date(b.dataset.tanggal) - new Date(a.dataset.tanggal);
    });

    rows.forEach(row => tbody.appendChild(row));
}

// ================= EVENT =================
searchInput.addEventListener('input', applyFilter);
filterKelas.addEventListener('change', applyFilter);
filterJurusan.addEventListener('change', applyFilter);

sortBy.addEventListener('change', () => {
    applySort();
    applyFilter();
});

// Show image modal
function showImageModal(imageSrc) {
    document.getElementById('modalImage').src = imageSrc;
    new bootstrap.Modal(document.getElementById('imageModal')).show();
}

// Custom confirm dialog
function confirmDelete(message) {
    return Swal.fire({
        title: 'Konfirmasi Hapus',
        text: message,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#dc3545',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        return result.isConfirmed;
    });
}
</script>

{{-- Include SweetAlert2 if not already included --}}
@if(!View::hasSection('scripts'))
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush
@endif
@endsection