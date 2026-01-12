@extends('admin.layout')

@section('title','Manajemen Beranda')

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
    
    @keyframes slideIn {
        from { opacity: 0; transform: translateX(-20px); }
        to { opacity: 1; transform: translateX(0); }
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
    
    @keyframes gradient {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
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
    
    .slide-in {
        animation: slideIn 0.6s ease-out;
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
        background: var(--gradient-primary);
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
    .badge-stat {
        padding: 8px 12px;
        border-radius: 50px;
        font-weight: 500;
        font-size: 0.85rem;
        margin-right: 5px;
        margin-bottom: 5px;
        display: inline-block;
        transition: all 0.3s ease;
    }
    
    .badge-stat:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-sm);
    }
    
    .badge-stat.blue {
        background-color: rgba(0, 86, 179, 0.1);
        color: var(--primary-blue);
    }
    
    .badge-stat.green {
        background-color: rgba(40, 167, 69, 0.1);
        color: #28a745;
    }
    
    .badge-stat.yellow {
        background-color: rgba(255, 193, 7, 0.1);
        color: var(--primary-yellow);
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
    
    /* Loading Animation */
    .loading {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255,255,255,0.8);
        z-index: 9999;
        justify-content: center;
        align-items: center;
    }
    
    .loading-spinner {
        width: 50px;
        height: 50px;
        border: 5px solid var(--light-blue);
        border-top: 5px solid var(--primary-blue);
        border-radius: 50%;
        animation: spin 1s linear infinite;
    }
    
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
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

<!-- Loading Animation -->
<div class="loading" id="loading">
    <div class="loading-spinner"></div>
</div>

<div class="container-fluid py-4">

    {{-- ================= HEADER ================= --}}
    <div class="page-header fade-in">
        <div class="page-header-content">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                <div>
                    <h4 class="fw-bold mb-1">Manajemen Beranda</h4>
                    <p class="mb-0 opacity-75">
                        Kelola sambutan kepala sekolah & statistik beranda
                    </p>
                </div>

                <a href="{{ route('admin.beranda.create') }}"
                   class="btn btn-light px-4 shadow-sm">
                    <i class="bi bi-plus-circle me-2"></i>
                    Tambah Beranda
                </a>
            </div>
        </div>
    </div>

    {{-- ================= STAT CARD ================= --}}
    <div class="row mb-4">
        <div class="col-md-4 col-sm-6 slide-in-left" style="animation-delay: 0.1s;">
            <div class="stat-card">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <span class="text-muted small d-block mb-1">Total Konten</span>
                        <h2 class="fw-bold mb-0">{{ $data->count() }}</h2>
                    </div>
                    <div class="stat-icon">
                        <i class="bi bi-house-door"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ================= FILTER ================= --}}
    <div class="filter-card slide-in-up" style="animation-delay: 0.2s;">
        <div class="row g-3 align-items-end">
            <div class="col-md-8">
                <label class="form-label small text-muted fw-semibold">
                    Cari Konten
                </label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-search"></i>
                    </span>
                    <input type="text"
                           id="searchInput"
                           class="form-control"
                           placeholder="Cari judul atau isi sambutan...">
                </div>
            </div>

            <div class="col-md-4">
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

    {{-- ================= TABLE ================= --}}
    <div class="table-card slide-in-right" style="animation-delay: 0.3s;">
        <div class="table-responsive">
            <table class="table table-borderless align-middle mb-0" id="berandaTable">
                <thead>
                    <tr>
                        <th width="60" class="text-center">No</th>
                        <th>Konten Sambutan</th>
                        <th width="120" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($data as $item)
                    <tr class="beranda-row"
                        data-judul="{{ strtolower($item->judul) }}"
                        data-deskripsi="{{ strtolower(strip_tags($item->deskripsi)) }}"
                        data-created="{{ $item->created_at }}">

                        {{-- NO --}}
                        <td class="text-center text-muted fw-semibold">
                            {{ $loop->iteration }}
                        </td>

                        {{-- KONTEN --}}
                        <td>
                            <div class="fw-semibold text-dark mb-2">
                                {{ $item->judul }}
                            </div>

                            <small class="text-muted d-block mb-3">
                                {{ \Illuminate\Support\Str::limit(strip_tags($item->deskripsi), 140) }}
                            </small>

                            {{-- STAT --}}
                            <div class="d-flex gap-2 flex-wrap">
                                <span class="badge-stat blue">
                                    👨‍🎓 {{ $item->jumlah_siswa ?? 0 }} Siswa
                                </span>
                                <span class="badge-stat green">
                                    👩‍🏫 {{ $item->jumlah_guru ?? 0 }} Guru
                                </span>
                                <span class="badge-stat yellow">
                                    🏫 {{ $item->jumlah_jurusan ?? 0 }} Jurusan
                                </span>
                            </div>
                        </td>

                        {{-- AKSI --}}
                        <td class="text-center">
                            <div class="d-inline-flex gap-1">
                                <a href="{{ route('admin.beranda.edit',$item->id) }}"
                                   class="btn btn-action">
                                    <i class="bi bi-pencil text-primary"></i>
                                </a>

                                <form action="{{ route('admin.beranda.destroy',$item->id) }}"
                                      method="POST"
                                      onsubmit="return confirm('Hapus konten beranda ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-action">
                                        <i class="bi bi-trash text-danger"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="empty-state">
                            <div class="d-flex flex-column align-items-center gap-2 text-muted">
                                <i class="bi bi-house"></i>
                                <span class="fw-semibold">
                                    Belum ada konten beranda
                                </span>
                                <a href="{{ route('admin.beranda.create') }}" class="btn btn-primary mt-3">
                                    <i class="bi bi-plus-circle me-2"></i>
                                    Tambah Konten Baru
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>

<script>
// Show loading animation
window.addEventListener('load', function() {
    setTimeout(function() {
        document.getElementById('loading').style.display = 'none';
    }, 500);
});

// Show loading on form submit
document.querySelectorAll('form').forEach(form => {
    form.addEventListener('submit', function() {
        document.getElementById('loading').style.display = 'flex';
    });
});

const searchInput = document.getElementById('searchInput');
const sortBy = document.getElementById('sortBy');

function applyFilter() {
    const keyword = searchInput.value.toLowerCase();
    document.querySelectorAll('.beranda-row').forEach(row => {
        row.style.display =
            row.dataset.judul.includes(keyword) ||
            row.dataset.deskripsi.includes(keyword)
            ? '' : 'none';
    });
}

function applySort() {
    const rows = Array.from(document.querySelectorAll('.beranda-row'));
    const tbody = document.querySelector('#berandaTable tbody');

    rows.sort((a,b)=>{
        if(sortBy.value === 'title'){
            return a.dataset.judul.localeCompare(b.dataset.judul);
        }
        if(sortBy.value === 'oldest'){
            return new Date(a.dataset.created) - new Date(b.dataset.created);
        }
        return new Date(b.dataset.created) - new Date(a.dataset.created);
    });

    rows.forEach(r => tbody.appendChild(r));
}

searchInput.addEventListener('input', applyFilter);
sortBy.addEventListener('change', () => {
    applySort();
    applyFilter();
});
</script>
@endsection