<div class="sidebar">
    <div class="title">
        <i class="bi bi-mortarboard-fill"></i> School Admin
    </div>

    {{-- DASHBOARD --}}
    <div class="menu-title">Dashboard</div>
    <a href="{{ route('admin.dashboard') }}">
        <i class="bi bi-speedometer2"></i> Dashboard
    </a>

    {{-- KONTEN WEBSITE --}}
    <div class="menu-title">Konten Website</div>

    <a href="{{ route('admin.beranda.index') }}">
        <i class="bi bi-house-door"></i> Beranda
    </a>

    {{-- <a href="{{ route('admin.profil.index') }}">
        <i class="bi bi-person-badge"></i> Profil Sekolah
    </a>

    <a href="{{ route('admin.jurusan.index') }}">
        <i class="bi bi-diagram-3"></i> Jurusan
    </a>

    <a href="{{ route('admin.artikel.index') }}">
        <i class="bi bi-file-earmark-text"></i> Artikel
    </a>

    <a href="{{ route('admin.galeri.index') }}">
        <i class="bi bi-images"></i> Galeri
    </a>

    <a href="{{ route('admin.prestasi.index') }}">
        <i class="bi bi-trophy"></i> Prestasi
    </a>

    <a href="{{ route('admin.link.index') }}">
        <i class="bi bi-link-45deg"></i> Link Terkait
    </a>

    <a href="{{ route('admin.fasilitas.index') }}">
        <i class="bi bi-building"></i> Fasilitas
    </a>

    <a href="{{ route('admin.akreditasi.index') }}">
        <i class="bi bi-patch-check"></i> Akreditasi
    </a>

    <a href="{{ route('admin.agenda.index') }}">
        <i class="bi bi-calendar-event"></i> Agenda
    </a> --}}

    {{-- MANAJEMEN USER --}}
    <div class="menu-title">Manajemen Pengguna</div>
    <a href="{{ route('admin.users.index') }}">
        <i class="bi bi-people"></i> Kelola User
    </a>

    {{-- SISTEM --}}
    <div class="menu-title">Sistem</div>
    <a href="#">
        <i class="bi bi-gear"></i> Pengaturan
    </a>

    {{-- LOGOUT --}}
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>

    <a href="#" class="logout-btn"
       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="bi bi-box-arrow-right"></i> Logout
    </a>
</div>
