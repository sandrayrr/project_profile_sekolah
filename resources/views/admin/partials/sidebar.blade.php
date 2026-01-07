{{-- SISIPKAN KODE INI DI DALAM FILE admin.layout.blade.php ANDA --}}
{{-- Biasanya di dalam tag

<body> dan sebagai pengganti sidebar lama Anda --}}

<style>
    :root {
        --primary: #4f46e5;
        --primary-soft: #eef2ff;
        --text-main: #0f172a;
        --text-muted: #64748b;
        --bg: #ffffff;
    }

    /* SIDEBAR */
    .sidebar {
        position: fixed;
        top: 16px;
        left: 16px;
        width: 260px;
        height: calc(100vh - 32px);
        background: var(--bg);
        border-radius: 20px;
        padding: 18px;
        display: flex;
        flex-direction: column;
        box-shadow: 0 20px 40px rgba(0, 0, 0, .08);
    }

    /* USER */
    .sidebar-user {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 10px 12px;
        border-radius: 14px;
        background: #f8fafc;
        margin-bottom: 20px;
    }

    .sidebar-user img {
        width: 42px;
        height: 42px;
        border-radius: 50%;
        object-fit: cover;
    }

    .user-info {
        line-height: 1.2;
    }

    .user-name {
        font-weight: 600;
        font-size: 0.95rem;
    }

    .user-role {
        font-size: 0.75rem;
        color: var(--text-muted);
    }

    /* NAV */
    .sidebar-nav {
        flex: 1;
    }

    .nav-title {
        font-size: 0.7rem;
        font-weight: 600;
        color: var(--text-muted);
        margin: 18px 8px 6px;
        text-transform: uppercase;
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
        transition: .25s;
    }

    .nav-link i {
        font-size: 1.1rem;
        color: var(--text-muted);
    }

    /* ACTIVE */
    .nav-link.active {
        background: var(--primary-soft);
        color: var(--primary);
    }

    .nav-link.active i {
        color: var(--primary);
    }

    .nav-link:hover {
        background: #f1f5f9;
    }

    /* BOTTOM */
    .sidebar-bottom {
        margin-top: auto;
    }

    .logout-btn {
        color: #dc2626;
    }
</style>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />


<div class="sidebar">

    <!-- USER -->
    <div class="sidebar-user">
        <img src="https://picsum.photos/seed/user/80/80">
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
            <i class="bi bi-grid"></i> Dashboard
        </a>

        <div class="nav-title">Content</div>
        <a href="{{ route('admin.artikel.index') }}"
            class="nav-link {{ request()->routeIs('admin.artikel*') ? 'active' : '' }}">
            <i class="bi bi-file-text"></i> Artikel
        </a>

        <a href="{{ route('admin.galeri.index') }}"
            class="nav-link {{ request()->routeIs('admin.galeri*') ? 'active' : '' }}">
            <i class="bi bi-image"></i> Galeri
        </a>
<a href="{{ route('admin.beranda.index') }}"
   class="nav-link {{ request()->routeIs('admin.beranda*') ? 'active' : '' }}">
   <i class="material-icons">summarize</i> Beranda
</a>

        <a href="{{ route('admin.prestasi.index') }}"
            class="nav-link {{ request()->routeIs('admin.prestasi*') ? 'active' : '' }}">
            <i class="bi bi-award"></i> Prestasi
        </a>

         <a href="{{ route('admin.agenda.index') }}"
            class="nav-link {{ request()->routeIs('admin.agenda*') ? 'active' : '' }}">
            <i class="bi bi-calendar"></i> Agenda
        </a>

        <a href="{{ route('admin.fasilitas.index') }}"
            class="nav-link {{ request()->routeIs('admin.fasilitas*') ? 'active' : '' }}">
            <i class="material-icons">business</i> Fasilitas
        </a>

        <a href="{{ route('admin.tenaga.index') }}"
   class="nav-link {{ request()->routeIs('admin.tenaga*') ? 'active' : '' }}">
    <i class="material-icons">groups</i> Tenaga Kependidikan
</a>

       <a href="{{ route('admin.ekstrakulikuler.index') }}"
            class="nav-link {{ request()->routeIs('admin.ekstrakulikuler*') ? 'active' : '' }}">
            <i class="material-icons">diversity_3</i> Ekstrakurikuler
        </a>
        

        <div class="nav-title">User</div>
        <a href="{{ route('admin.users.index') }}"
            class="nav-link {{ request()->routeIs('admin.users*') ? 'active' : '' }}">
            <i class="bi bi-people"></i> Kelola User
        </a>

    </nav>

    <!-- LOGOUT -->
    <div class="sidebar-bottom">
        <form id="logout-form" action="{{ route('logout') }}" method="POST">@csrf</form>
        <a href="#" class="nav-link logout-btn"
            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            <i class="bi bi-box-arrow-right"></i> Logout
        </a>
    </div>

</div>



{{-- --- PENTING --- --}}
{{-- Pastikan Anda menyesuaikan wrapper konten utama Anda agar tidak tertutup sidebar. --}}
{{-- Cari elemen utama yang membungkus @yield('content') dan tambahkan style margin-left: 260px; --}}

{{-- Contoh: <div class="content-wrapper p-4" style="margin-left: 260px;"> @yield('content') </div> --}}

{{-- Contoh: <div class="content-wrapper p-4" style="margin-left: 260px;"> @yield('content') </div> --}}


