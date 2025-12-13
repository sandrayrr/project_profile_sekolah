<div class="sidebar">
    <div class="title">School Admin</div>

    <div class="menu-title">Galeri</div>
    <a href="#"><i class="bi bi-image"></i> Galeri</a>

    <div class="menu-title">Marketplace</div>
    <a href="#"><i class="bi bi-box"></i> Produk</a>
    <a href="#"><i class="bi bi-tag"></i> Kategori Produk</a>
    <a href="#"><i class="bi bi-cart"></i> Pemesanan</a>

    <div class="menu-title">Manajemen Pengguna</div>
    <a href="{{ route('admin.users.index') }}">
        <i class="bi bi-person"></i> Kelola Akun User
    </a>

    <div class="menu-title">Pengaturan Sistem</div>
    <a href="#"><i class="bi bi-gear"></i> Pengaturan Umum</a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>

    <a href="#" class="logout-btn"
       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="bi bi-box-arrow-right"></i> Logout
    </a>
</div>
