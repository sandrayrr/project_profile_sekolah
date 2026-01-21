{{-- SISIPKAN KODE INI DI DALAM FILE admin.layout.blade.php ANDA --}}
{{-- Biasanya di dalam tag <body> dan sebagai pengganti sidebar lama Anda --}}

<style>
    :root {
        /* Warna yang terinspirasi dari logo SMKN 1 Kawali */
        --primary-blue: #0056b3;
        --primary-yellow: #ffc107;
        --primary-red: #dc3545;
        --primary-soft: #eef2ff;
        --text-main: #0f172a;
        --text-muted: #64748b;
        --bg: #ffffff;
        --gradient-primary: linear-gradient(135deg, var(--primary-blue) 0%, #0040a0 100%);
        --gradient-accent: linear-gradient(135deg, var(--primary-yellow) 0%, #ff9800 100%);
        --gradient-danger: linear-gradient(135deg, var(--primary-red) 0%, #c62828 100%);
        --gradient-sidebar: linear-gradient(180deg, #f8fafc 0%, #e2e8f0 100%);
        --shadow-sm: 0 2px 4px rgba(0,0,0,0.05);
        --shadow-md: 0 4px 6px rgba(0,0,0,0.07);
        --shadow-lg: 0 10px 15px rgba(0,0,0,0.1);
        --shadow-xl: 0 20px 25px rgba(0,0,0,0.1);
        --shadow-glow: 0 0 20px rgba(0, 86, 179, 0.2);
    }

    /* SIDEBAR */
    .sidebar {
        position: fixed;
        top: 16px;
        left: 16px;
        width: 260px;
        height: calc(100vh - 32px);
        background: var(--gradient-sidebar);
        border-radius: 20px;
        padding: 18px;
        display: flex;
        flex-direction: column;
        box-shadow: var(--shadow-xl);
        overflow: hidden;
        z-index: 1000;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.8);
    }

    /* Logo Sekolah */
    .sidebar-logo {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        position: relative;
        padding: 15px 0;
    }

    .logo-container {
        width: 80px;
        height: 80px;
        background-image: url('https://z-cdn-media.chatglm.cn/files/87692716-b454-4f10-975a-68b6e0678b15.png?auth_key=1867942909-fa1d2338d8714febac500b8f54a413df-0-48e85327eb38ab7c1cb8680e2576aa2d');
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
        margin-bottom: 10px;
        transition: all 0.3s ease;
    }

    .logo-container:hover {
        transform: scale(1.05);
    }

    .school-name {
        font-weight: 700;
        font-size: 1rem;
        color: var(--primary-blue);
        text-align: center;
        margin-top: 5px;
        letter-spacing: -0.02em;
    }

    .school-location {
        font-size: 0.75rem;
        color: var(--text-muted);
        text-align: center;
        margin-top: 2px;
    }

    /* USER */
    .sidebar-user {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 14px;
        border-radius: 16px;
        background: rgba(255, 255, 255, 0.7);
        margin-bottom: 24px;
        position: relative;
        overflow: hidden;
        backdrop-filter: blur(5px);
        box-shadow: var(--shadow-sm);
        transition: all 0.3s ease;
    }

    .sidebar-user:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
    }

    .sidebar-user::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 4px;
        height: 100%;
        background: var(--gradient-primary);
        border-radius: 4px 0 0 4px;
    }

    .sidebar-user img {
        width: 42px;
        height: 42px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid var(--bg);
        box-shadow: var(--shadow-sm);
        transition: all 0.3s ease;
    }

    .sidebar-user:hover img {
        transform: scale(1.05);
        border-color: var(--primary-blue);
    }

    .user-info {
        line-height: 1.2;
    }

    .user-name {
        font-weight: 600;
        font-size: 0.95rem;
        color: var(--text-main);
    }

    .user-role {
        font-size: 0.75rem;
        color: var(--text-muted);
    }

    /* NAV */
    .sidebar-nav {
        flex: 1;
        overflow-y: auto;
        padding-right: 5px;
    }

    .sidebar-nav::-webkit-scrollbar {
        width: 4px;
    }

    .sidebar-nav::-webkit-scrollbar-track {
        background: rgba(255, 255, 255, 0.3);
        border-radius: 10px;
    }

    .sidebar-nav::-webkit-scrollbar-thumb {
        background: var(--primary-blue);
        border-radius: 10px;
    }

    .nav-title {
        font-size: 0.7rem;
        font-weight: 700;
        color: var(--text-muted);
        margin: 20px 8px 10px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        display: flex;
        align-items: center;
        position: relative;
    }

    .nav-title::before {
        content: '';
        display: inline-block;
        width: 12px;
        height: 2px;
        background: var(--gradient-primary);
        margin-right: 8px;
        border-radius: 1px;
    }

    .nav-link {
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 12px 14px;
        margin-bottom: 6px;
        border-radius: 14px;
        text-decoration: none;
        color: var(--text-main);
        font-weight: 500;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .nav-link::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 0;
        height: 100%;
        background: var(--gradient-primary);
        opacity: 0.1;
        transition: width 0.3s ease;
        z-index: 0;
    }

    .nav-link i {
        font-size: 1.1rem;
        color: var(--text-muted);
        transition: all 0.3s ease;
        position: relative;
        z-index: 1;
    }

    .nav-link span {
        position: relative;
        z-index: 1;
    }

    /* ACTIVE */
    .nav-link.active {
        background: rgba(0, 86, 179, 0.1);
        color: var(--primary-blue);
        font-weight: 600;
        box-shadow: var(--shadow-sm);
    }

    .nav-link.active::before {
        width: 4px;
    }

    .nav-link.active i {
        color: var(--primary-blue);
    }

    .nav-link:hover {
        background: rgba(255, 255, 255, 0.7);
        transform: translateX(4px);
        box-shadow: var(--shadow-sm);
    }

    .nav-link:hover::before {
        width: 100%;
    }

    .nav-link:hover i {
        color: var(--primary-blue);
    }

    /* BOTTOM */
    .sidebar-bottom {
        margin-top: auto;
        padding-top: 15px;
        border-top: 1px solid rgba(226, 232, 240, 0.7);
    }

    .logout-btn {
        color: var(--primary-red);
    }

    .logout-btn:hover {
        background: rgba(220, 53, 69, 0.1);
    }

    /* Watermark SMKN di background sidebar */
    .sidebar::after {
        content: '';
        position: absolute;
        bottom: 20px;
        right: 20px;
        width: 100px;
        height: 100px;
        background-image: url('https://z-cdn-media.chatglm.cn/files/87692716-b454-4f10-975a-68b6e0678b15.png?auth_key=1867942909-fa1d2338d8714febac500b8f54a413df-0-48e85327eb38ab7c1cb8680e2576aa2d');
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
        opacity: 0.05;
        pointer-events: none;
        z-index: 0;
    }

    /* Badge untuk menu baru/notifikasi */
    .nav-badge {
        position: absolute;
        top: 8px;
        right: 8px;
        background: var(--gradient-danger);
        color: white;
        font-size: 0.6rem;
        font-weight: 600;
        padding: 2px 6px;
        border-radius: 10px;
        min-width: 18px;
        text-align: center;
        box-shadow: var(--shadow-sm);
        animation: pulse 2s infinite;
    }

    /* Animasi untuk menu */
    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateX(-20px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.1); }
        100% { transform: scale(1); }
    }

    .nav-link {
        animation: slideIn 0.3s ease-out forwards;
        opacity: 0;
    }

    .nav-link:nth-child(1) { animation-delay: 0.1s; }
    .nav-link:nth-child(2) { animation-delay: 0.2s; }
    .nav-link:nth-child(3) { animation-delay: 0.3s; }
    .nav-link:nth-child(4) { animation-delay: 0.4s; }
    .nav-link:nth-child(5) { animation-delay: 0.5s; }
    .nav-link:nth-child(6) { animation-delay: 0.6s; }
    .nav-link:nth-child(7) { animation-delay: 0.7s; }
    .nav-link:nth-child(8) { animation-delay: 0.8s; }
    .nav-link:nth-child(9) { animation-delay: 0.9s; }
    .nav-link:nth-child(10) { animation-delay: 1.0s; }
    .nav-link:nth-child(11) { animation-delay: 1.1s; }
    .nav-link:nth-child(12) { animation-delay: 1.2s; }
    .nav-link:nth-child(13) { animation-delay: 1.3s; }
    .nav-link:nth-child(14) { animation-delay: 1.4s; }
</style>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

<div class="sidebar">

    <!-- LOGO SEKOLAH -->
    <div class="sidebar-logo">
        <div class="logo-container"></div>
        <div class="school-name">SMKN 1 Kawali</div>
        <div class="school-location">Kab. Ciamis</div>
    </div>

    <!-- USER -->
    <div class="sidebar-user">
        <img src="{{ asset('storage/dashboard/Profesional Photos.jpeg') }}">
        <div class="user-info">
            <div class="user-name">{{ Auth::user()->name }}</div>
            <div class="user-role">{{ ucfirst(Auth::user()->role) }}</div>
        </div>
    </div>

    <!-- NAV -->
    <nav class="sidebar-nav">

        <div class="nav-title">Main</div>
        <a href="{{ route('admin.dashboard') }}"
            class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
        </a>

        <div class="nav-title">Content</div>
        <a href="{{ route('admin.artikel.index') }}"
            class="nav-link {{ request()->routeIs('admin.artikel*') ? 'active' : '' }}">
            <i class="bi bi-file-text"></i>
            <span>Artikel</span>
        </a>

        <a href="{{ route('admin.galeri.index') }}"
            class="nav-link {{ request()->routeIs('admin.galeri*') ? 'active' : '' }}">
            <i class="bi bi-image"></i>
            <span>Galeri</span>
        </a>

        <a href="{{ route('admin.beranda.index') }}"
            class="nav-link {{ request()->routeIs('admin.beranda*') ? 'active' : '' }}">
            <i class="material-icons">summarize</i>
            <span>Beranda</span>
        </a>

        <a href="{{ route('admin.prestasi.index') }}"
            class="nav-link {{ request()->routeIs('admin.prestasi*') ? 'active' : '' }}">
            <i class="bi bi-award"></i>
            <span>Prestasi</span>
        </a>

        <a href="{{ route('admin.agenda.index') }}"
            class="nav-link {{ request()->routeIs('admin.agenda*') ? 'active' : '' }}">
            <i class="bi bi-calendar"></i>
            <span>Agenda</span>
        </a>

        <a href="{{ route('admin.fasilitas.index') }}"
            class="nav-link {{ request()->routeIs('admin.fasilitas*') ? 'active' : '' }}">
            <i class="material-icons">business</i>
            <span>Fasilitas</span>
        </a>

        <a href="{{ route('admin.tenagapengajar.index') }}"
            class="nav-link {{ request()->routeIs('admin.tenagapengajar*') ? 'active' : '' }}">
            <i class="material-icons">groups</i>
            <span>Tenaga Pengajar</span>
        </a>

        <a href="{{ route('admin.staffkependidikan.index') }}"
            class="nav-link {{ request()->routeIs('admin.staffkependidikan*') ? 'active' : '' }}">
            <i class="material-icons">badge</i>
            <span>Staff Kependidikan</span>
        </a>

        <a href="{{ route('admin.ekstrakulikuler.index') }}"
            class="nav-link {{ request()->routeIs('admin.ekstrakulikuler*') ? 'active' : '' }}">
            <i class="material-icons">diversity_3</i>
            <span>Ekstrakurikuler</span>
        </a>

        <a href="{{ route('admin.marketplace.index') }}"
            class="nav-link {{ request()->routeIs('admin.marketplace*') ? 'active' : '' }}">
            <i class="material-icons">storefront</i>
            <span>Marketplace</span>
        </a>

        <div class="nav-title">User</div>
        <a href="{{ route('admin.users.index') }}"
            class="nav-link {{ request()->routeIs('admin.users*') ? 'active' : '' }}">
            <i class="bi bi-people"></i>
            <span>Kelola User</span>
            
        </a>

    </nav>

    <!-- LOGOUT -->
    <div class="sidebar-bottom">
        <form id="logout-form" action="{{ route('logout') }}" method="POST">@csrf</form>
        <a href="#" class="nav-link logout-btn"
            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            <i class="bi bi-box-arrow-right"></i>
            <span>Logout</span>
        </a>
    </div>

</div>

{{-- --- PENTING --- --}}
{{-- Pastikan Anda menyesuaikan wrapper konten utama Anda agar tidak tertutup sidebar. --}}
{{-- Cari elemen utama yang membungkus @yield('content') dan tambahkan style margin-left: 260px; --}}

{{-- Contoh: <div class="content-wrapper p-4" style="margin-left: 260px;"> @yield('content') </div> --}}