{{-- SISIPKAN KODE INI DI DALAM FILE admin.layout.blade.php ANDA --}}
{{-- Biasanya di dalam tag <body> dan sebagai pengganti sidebar lama Anda --}}

<style>
    /* --- Variabel Warna (Bisa disesuaikan) --- */
    :root {
        --sidebar-bg: #ffffff; /* Background putih bersih */
        --sidebar-border: #e9ecef; /* Border abu-abu sangat muda */
        --sidebar-text: #495057; /* Teks utama abu-abu gelap */
        --sidebar-text-muted: #6c757d; /* Teks sekunder */
        --sidebar-hover-bg: #f8f9fa; /* Background saat hover */
        --sidebar-active-bg: #007bff; /* Warna biru untuk elemen aktif */
        --sidebar-active-text: #ffffff;
        --sidebar-shadow: rgba(0, 0, 0, 0.08);
    }

    /* --- Layout Utama Sidebar --- */
    .sidebar {
        position: fixed;
        top: 0;
        left: 0;
        height: 100vh;
        width: 260px;
        background-color: var(--sidebar-bg);
        color: var(--sidebar-text);
        display: flex;
        flex-direction: column;
        z-index: 1000;
        transition: all 0.3s ease;
        box-shadow: 2px 0 15px var(--sidebar-shadow);
        border-right: 1px solid var(--sidebar-border);
    }

    /* --- Header/Branding Sidebar --- */
    .sidebar-brand {
        padding: 20px 15px;
        text-align: center;
        border-bottom: 1px solid var(--sidebar-border);
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); /* Biarkan branding tetap menonjol */
    }
    
    .sidebar-brand i {
        font-size: 2rem;
        color: #ffffff;
        margin-right: 10px;
    }
    
    .sidebar-brand span {
        font-size: 1.2rem;
        font-weight: 700;
        vertical-align: middle;
        color: #ffffff;
    }

    /* --- Profil Pengguna (Bonus) --- */
    .sidebar-user {
        padding: 20px 15px;
        text-align: center;
        border-bottom: 1px solid var(--sidebar-border);
    }
    
    .sidebar-user .avatar {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        margin-bottom: 10px;
        border: 3px solid var(--sidebar-active-bg);
    }
    
    .sidebar-user .user-name {
        font-weight: 600;
        font-size: 1rem;
        color: var(--sidebar-text);
    }
    
    .sidebar-user .user-role {
        font-size: 0.8rem;
        color: var(--sidebar-text-muted);
    }

    /* --- Navigasi --- */
    .sidebar-nav {
        flex-grow: 1;
        padding: 20px 0;
        overflow-y: auto;
    }

    .nav-section {
        margin-bottom: 25px;
    }

    .nav-title {
        padding: 0 20px;
        margin-bottom: 10px;
        font-size: 0.75rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: var(--sidebar-text-muted);
    }

    .nav-link {
        display: flex;
        align-items: center;
        padding: 12px 20px;
        color: var(--sidebar-text);
        text-decoration: none;
        transition: all 0.2s ease-in-out;
        position: relative;
        font-size: 0.95rem;
    }

    .nav-link i {
        font-size: 1.1rem;
        margin-right: 15px;
        width: 20px;
        text-align: center;
        color: var(--sidebar-text-muted); /* Ikon lebih tenang */
    }
    
    /* --- Efek Hover dan Aktif --- */
    .nav-link:hover {
        background-color: var(--sidebar-hover-bg);
        color: var(--sidebar-text);
        text-decoration: none;
    }
    
    .nav-link:hover i {
        color: var(--sidebar-active-bg); /* Ikon berwarna saat hover */
    }
    
    .nav-link.active {
        background-color: var(--sidebar-active-bg);
        color: var(--sidebar-active-text);
        font-weight: 600;
        box-shadow: 0 2px 8px rgba(0, 123, 255, 0.3); /* Tambahkan bayangan untuk menonjol */
    }
    
    .nav-link.active i {
        color: var(--sidebar-active-text); /* Ikon putih saat aktif */
    }
    
    .nav-link.active::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 5px;
        background: #ffffff;
    }

    /* --- Bagian Bawah (Pengaturan & Logout) --- */
    .sidebar-bottom {
        padding: 15px 0;
        border-top: 1px solid var(--sidebar-border);
    }

    .nav-link.logout-btn {
        color: #dc3545; /* Warna merah untuk logout */
    }
    
    .nav-link.logout-btn i {
        color: #dc3545;
    }
    
    .nav-link.logout-btn:hover {
        background-color: #f8d7da;
        color: #721c24;
    }
    
    /* --- Form Logout (Sembunyikan) --- */
    #logout-form {
        display: none;
    }

    /* --- Agar konten utama tidak tertutup sidebar --- */
    /* Anda perlu menambahkan padding-left pada wrapper konten utama Anda */
    /* Contoh: <div class="main-content" style="margin-left: 260px;"> ... </div> */
</style>

<div class="sidebar">
    {{-- Header/Branding --}}
    <div class="sidebar-brand">
        <i class="bi bi-mortarboard-fill"></i>
        <span>School Admin</span>
    </div>

    {{-- Profil Pengguna (Bonus) --}}
    <div class="sidebar-user">
        {{-- Anda bisa menggunakan foto user jika ada --}}
        {{-- <img src="{{ Auth::user()->foto ? asset('storage/'.Auth::user()->foto) : 'https://picsum.photos/seed/user/60/60.jpg' }}" alt="User Avatar" class="avatar"> --}}
        <img src="https://picsum.photos/seed/admin123/60/60.jpg" alt="User Avatar" class="avatar">
        <div class="user-name">{{ Auth::user()->name }}</div>
        <div class="user-role">{{ ucfirst(Auth::user()->role) }}</div>
    </div>

    {{-- Navigasi Utama --}}
    <nav class="sidebar-nav">
        {{-- DASHBOARD --}}
        <div class="nav-section">
            <div class="nav-title">Dashboard</div>
            <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>
        </div>

        {{-- KONTEN WEBSITE --}}
        <div class="nav-section">
            <div class="nav-title">Konten Website</div>
            <a href="{{ route('admin.artikel.index') }}" class="nav-link {{ request()->routeIs('admin.artikel*') ? 'active' : '' }}">
                <i class="bi bi-file-earmark-text"></i> Artikel
            </a>
            <a href="{{ route('admin.galeri.index') }}" class="nav-link {{ request()->routeIs('admin.galeri*') ? 'active' : '' }}">
                <i class="bi bi-images"></i> Galeri
            </a>
            <a href="{{ route('admin.prestasi.index') }}" class="nav-link {{ request()->routeIs('admin.prestasi*') ? 'active' : '' }}">
                <i class="bi bi-trophy"></i> Prestasi
            </a>
            
            {{-- Tambahkan link lainnya di sini jika diperlukan --}}
            {{-- <a href="{{ route('admin.beranda.index') }}" class="nav-link {{ request()->routeIs('admin.beranda*') ? 'active' : '' }}">
                <i class="bi bi-house-door"></i> Beranda
            </a> --}}
        </div>

        {{-- MANAJEMEN USER --}}
        <div class="nav-section">
            <div class="nav-title">Manajemen Pengguna</div>
            <a href="{{ route('admin.users.index') }}" class="nav-link {{ request()->routeIs('admin.users*') ? 'active' : '' }}">
                <i class="bi bi-people"></i> Kelola User
            </a>
        </div>
    </nav>

    {{-- Bagian Bawah --}}
    <div class="sidebar-bottom">
        <a href="#" class="nav-link">
            <i class="bi bi-gear"></i> Pengaturan
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
        </form>
        <a href="#" class="nav-link logout-btn"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="bi bi-box-arrow-right"></i> Logout
        </a>
    </div>
</div>

{{-- --- PENTING --- --}}
{{-- Pastikan Anda menyesuaikan wrapper konten utama Anda agar tidak tertutup sidebar. --}}
{{-- Cari elemen utama yang membungkus @yield('content') dan tambahkan style margin-left: 260px; --}}
{{-- Contoh: <div class="content-wrapper p-4" style="margin-left: 260px;"> @yield('content') </div> --}}