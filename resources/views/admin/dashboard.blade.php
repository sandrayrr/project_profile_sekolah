@extends('admin.layout')

@section('title','Dashboard Admin SMKN 1 Kawali')

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
        --gradient-dark: linear-gradient(135deg, #1a1a2e 0%, #0f0f1e 100%);
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
    
    @keyframes gradient {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
    
    @keyframes rotate {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
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
    
    /* Header Dashboard */
    .dashboard-header {
        background: var(--gradient-primary);
        color: white;
        padding: 2.5rem;
        border-radius: 20px;
        box-shadow: var(--shadow-2xl);
        position: relative;
        overflow: hidden;
        margin-bottom: 2rem;
    }
    
    .dashboard-header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('https://picsum.photos/seed/smkn1kawali/1200/400.jpg');
        background-size: cover;
        background-position: center;
        opacity: 0.1;
        z-index: 0;
    }
    
    .dashboard-header::after {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%);
        z-index: 0;
    }
    
    .dashboard-header-content {
        position: relative;
        z-index: 1;
    }
    
    .dashboard-header h1 {
        font-weight: 700;
        margin-bottom: 0.5rem;
        font-size: 2.5rem;
        letter-spacing: -0.02em;
    }
    
    .dashboard-header p {
        font-size: 1.1rem;
        opacity: 0.9;
        margin-bottom: 1.5rem;
    }
    
    .info-badges {
        display: flex;
        flex-wrap: wrap;
        gap: 0.75rem;
    }
    
    .info-badge {
        background: rgba(255,255,255,0.2);
        padding: 0.5rem 1rem;
        border-radius: 50px;
        display: inline-flex;
        align-items: center;
        backdrop-filter: blur(5px);
        transition: all 0.3s ease;
        font-size: 0.9rem;
    }
    
    .info-badge:hover {
        background: rgba(255,255,255,0.3);
        transform: translateY(-3px);
    }
    
    .info-badge i {
        margin-right: 0.5rem;
    }
    
    /* Kartu Statistik */
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
    
    .stat-card.yellow::before {
        background: var(--gradient-accent);
    }
    
    .stat-card.red::before {
        background: var(--gradient-danger);
    }
    
    .stat-card.green::before {
        background: var(--gradient-success);
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
    
    .stat-icon.blue {
        background: var(--gradient-primary);
    }
    
    .stat-icon.yellow {
        background: var(--gradient-accent);
    }
    
    .stat-icon.red {
        background: var(--gradient-danger);
    }
    
    .stat-icon.green {
        background: var(--gradient-success);
    }
    
    .stat-value {
        font-size: 2.5rem;
        font-weight: 800;
        color: var(--dark-color);
        margin-bottom: 0.5rem;
        line-height: 1.2;
    }
    
    .stat-label {
        font-size: 1rem;
        color: var(--text-muted);
        margin-bottom: 1.5rem;
        font-weight: 500;
    }
    
    .stat-change {
        font-size: 0.9rem;
        display: flex;
        align-items: center;
        font-weight: 600;
        padding: 0.5rem 0.75rem;
        border-radius: 10px;
        background: rgba(0, 86, 179, 0.05);
        width: fit-content;
    }
    
    .stat-change.positive {
        color: var(--primary-blue);
    }
    
    .stat-change.negative {
        color: var(--primary-red);
    }
    
    .stat-change i {
        margin-right: 0.5rem;
    }
    
    /* Modern Empty State */
    .empty-state-container {
        margin-top: 3rem;
        position: relative;
    }
    
    .empty-state-card {
        background: white;
        border-radius: 20px;
        padding: 3rem;
        box-shadow: var(--shadow-lg);
        position: relative;
        overflow: hidden;
        text-align: center;
    }
    
    .empty-state-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: var(--gradient-modern);
    }
    
    .empty-state-illustration {
        width: 300px;
        height: 300px;
        margin: 0 auto 2rem;
        position: relative;
    }
    
    .empty-state-circle {
        position: absolute;
        border-radius: 50%;
    }
    
    .circle-1 {
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 200px;
        height: 200px;
        background: var(--gradient-primary);
        opacity: 0.1;
    }
    
    .circle-2 {
        top: 50px;
        left: 50%;
        transform: translateX(-50%);
        width: 150px;
        height: 150px;
        background: var(--gradient-accent);
        opacity: 0.1;
    }
    
    .circle-3 {
        top: 100px;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 100px;
        background: var(--gradient-secondary);
        opacity: 0.1;
    }
    
    .empty-state-icon {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 4rem;
        color: var(--primary-blue);
        z-index: 1;
    }
    
    .empty-state-title {
        font-size: 1.8rem;
        font-weight: 700;
        color: var(--dark-color);
        margin-bottom: 1rem;
    }
    
    .empty-state-description {
        font-size: 1rem;
        color: var(--text-muted);
        margin-bottom: 2rem;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }
    
    .empty-state-actions {
        display: flex;
        justify-content: center;
        gap: 1rem;
        flex-wrap: wrap;
    }
    
    /* Tombol */
    .btn {
        padding: 0.75rem 1.5rem;
        border-radius: 12px;
        font-weight: 600;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
        font-size: 1rem;
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
    
    .btn-outline-primary {
        background: transparent;
        color: var(--primary-blue);
        border: 2px solid var(--primary-blue);
    }
    
    .btn-outline-primary:hover {
        background: var(--primary-blue);
        color: white;
    }
    
    /* Floating Action Button */
    .fab-container {
        position: fixed;
        bottom: 2rem;
        right: 2rem;
        z-index: 100;
    }
    
    .fab {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background: var(--gradient-primary);
        color: white;
        border: none;
        box-shadow: var(--shadow-xl);
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        transition: all 0.3s ease;
    }
    
    .fab:hover {
        transform: scale(1.1);
        box-shadow: var(--shadow-2xl);
    }
    
    /* Feature Cards */
    .feature-card {
        background: white;
        border-radius: 20px;
        padding: 2rem;
        box-shadow: var(--shadow-lg);
        margin-bottom: 1.5rem;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
    
    .feature-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-2xl);
    }
    
    .feature-icon {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.5rem;
        font-size: 2rem;
        color: white;
        background: var(--gradient-modern);
        box-shadow: var(--shadow-md);
    }
    
    .feature-title {
        font-size: 1.3rem;
        font-weight: 700;
        color: var(--dark-color);
        margin-bottom: 1rem;
    }
    
    .feature-description {
        font-size: 1rem;
        color: var(--text-muted);
        margin-bottom: 1.5rem;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .container-fluid {
            padding: 1rem;
        }
        
        .dashboard-header {
            padding: 1.5rem;
        }
        
        .dashboard-header h1 {
            font-size: 1.8rem;
        }
        
        .stat-value {
            font-size: 2rem;
        }
        
        .school-logo-watermark {
            width: 300px;
            height: 300px;
        }
        
        .school-text-watermark {
            font-size: 2.5rem;
        }
        
        .info-badges {
            flex-direction: column;
            gap: 0.5rem;
        }
        
        .empty-state-illustration {
            width: 200px;
            height: 200px;
        }
        
        .empty-state-icon {
            font-size: 3rem;
        }
        
        .empty-state-title {
            font-size: 1.5rem;
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

<div class="container-fluid">
    <!-- Header Dashboard -->
    <div class="dashboard-header fade-in">
        <div class="dashboard-header-content">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1>Dashboard Admin</h1>
                    <p>SMKN 1 Kawali - Kab. Ciamis</p>
                    <div class="info-badges">
                        <span class="info-badge">
                            <i class="bi bi-calendar3"></i> {{ now()->format('d F Y') }}
                        </span>
                        <span class="info-badge">
                            <i class="bi bi-clock"></i> <span id="current-time"></span>
                        </span>
                        <span class="info-badge">
                            <i class="bi bi-person-circle"></i> Admin
                        </span>
                    </div>
                </div>
                <div class="col-md-4 text-end">
                    <img src="https://picsum.photos/seed/smkn1kawali/200/150.jpg" alt="SMKN 1 Kawali" class="img-fluid rounded-3 shadow-lg float-animation" style="max-height: 150px;">
                </div>
            </div>
        </div>
    </div>

    <!-- Statistik Utama -->
    <div class="row mb-4">
        <div class="col-md-3 col-sm-6 mb-3 fade-in" style="animation-delay: 0.1s;">
            <div class="stat-card">
                <div class="stat-icon blue">
                    <i class="bi bi-people-fill"></i>
                </div>
                <div class="stat-value">1,248</div>
                <div class="stat-label">Total Siswa</div>
                <div class="stat-change positive">
                    <i class="bi bi-arrow-up"></i> 12% dari tahun lalu
                </div>
            </div>
        </div>
        
        <div class="col-md-3 col-sm-6 mb-3 fade-in" style="animation-delay: 0.2s;">
            <div class="stat-card yellow">
                <div class="stat-icon yellow">
                    <i class="bi bi-person-badge-fill"></i>
                </div>
                <div class="stat-value">86</div>
                <div class="stat-label">Total Guru</div>
                <div class="stat-change positive">
                    <i class="bi bi-arrow-up"></i> 5% dari tahun lalu
                </div>
            </div>
        </div>
        
        <div class="col-md-3 col-sm-6 mb-3 fade-in" style="animation-delay: 0.3s;">
            <div class="stat-card">
                <div class="stat-icon blue">
                    <i class="bi bi-building"></i>
                </div>
                <div class="stat-value">12</div>
                <div class="stat-label">Jurusan</div>
                <div class="stat-change positive">
                    <i class="bi bi-arrow-up"></i> 1 jurusan baru
                </div>
            </div>
        </div>
        
        <div class="col-md-3 col-sm-6 mb-3 fade-in" style="animation-delay: 0.4s;">
            <div class="stat-card red">
                <div class="stat-icon red">
                    <i class="bi bi-trophy-fill"></i>
                </div>
                <div class="stat-value">52</div>
                <div class="stat-label">Prestasi</div>
                <div class="stat-change positive">
                    <i class="bi bi-arrow-up"></i> 8% dari tahun lalu
                </div>
            </div>
        </div>
    </div>

    <!-- Modern Empty State -->
    <div class="empty-state-container">
        <div class="empty-state-card slide-in-up">
            <div class="empty-state-illustration">
                <div class="empty-state-circle circle-1"></div>
                <div class="empty-state-circle circle-2"></div>
                <div class="empty-state-circle circle-3"></div>
                <div class="empty-state-icon">
                    <i class="bi bi-graph-up-arrow"></i>
                </div>
            </div>
            <h2 class="empty-state-title">Dashboard Modern SMKN 1 Kawali</h2>
            <p class="empty-state-description">
                Selamat datang di dashboard administrasi SMKN 1 Kawali. Sistem ini dirancang untuk memudahkan pengelolaan konten website sekolah dengan antarmuka yang modern dan intuitif.
            </p>
            <div class="empty-state-actions">
                <a href="{{ route('admin.artikel.create') }}" class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i> Tambah Konten
                </a>
                <a href="{{ route('admin.users.index') }}" class="btn btn-outline-primary">
                    <i class="bi bi-people"></i> Kelola Pengguna
                </a>
            </div>
        </div>
    </div>

    <!-- Feature Cards -->
    <div class="row mt-5">
        <div class="col-md-4 mb-4 slide-in-left" style="animation-delay: 0.5s;">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="bi bi-speedometer2"></i>
                </div>
                <h3 class="feature-title">Performa Tinggi</h3>
                <p class="feature-description">
                    Sistem kami dioptimalkan untuk memberikan performa terbaik dengan waktu loading yang cepat dan responsif di berbagai perangkat.
                </p>
            </div>
        </div>
        
        <div class="col-md-4 mb-4 slide-in-up" style="animation-delay: 0.6s;">
            <div class="feature-card">
                <div class="feature-icon" style="background: var(--gradient-accent);">
                    <i class="bi bi-shield-check"></i>
                </div>
                <h3 class="feature-title">Keamanan Terjamin</h3>
                <p class="feature-description">
                    Dilengkapi dengan sistem keamanan berlapis untuk melindungi data sensitif dan mencegah akses tidak sah ke dalam sistem.
                </p>
            </div>
        </div>
        
        <div class="col-md-4 mb-4 slide-in-right" style="animation-delay: 0.7s;">
            <div class="feature-card">
                <div class="feature-icon" style="background: var(--gradient-secondary);">
                    <i class="bi bi-palette"></i>
                </div>
                <h3 class="feature-title">Desain Modern</h3>
                <p class="feature-description">
                    Tampilan antarmuka yang modern dan intuitif dirancang khusus untuk memberikan pengalaman pengguna yang terbaik.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Floating Action Button -->
<div class="fab-container">
    <button class="fab pulse-animation">
        <i class="bi bi-plus"></i>
    </button>
</div>

<script>
    // Update waktu
    function updateTime() {
        const now = new Date();
        document.getElementById('current-time').innerHTML = now.toLocaleTimeString('id-ID', {
            hour: '2-digit', minute: '2-digit'
        });
    }
    setInterval(updateTime, 1000);
    updateTime();
    
    // FAB click handler
    document.querySelector('.fab').addEventListener('click', function() {
        // Redirect to create content page or show modal
        window.location.href = '{{ route("admin.artikel.create") }}';
    });
</script>
@endsection