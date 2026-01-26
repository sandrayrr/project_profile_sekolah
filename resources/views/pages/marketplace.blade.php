<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace - SMKN 1 Kawali</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        /* ================= ROOT VARIABLES ================= */
        :root {
            /* Palette Biru Modern */
            --primary-blue: #2563EB;     /* Biru Utama */
            --dark-blue: #1E40AF;        /* Biru Gelap untuk Hover */
            --light-blue: #EFF6FF;       /* Background lembut */
            --accent-blue: #3B82F6;      /* Aksen */
            
            /* Netral */
            --bg-body: #F8FAFC;          /* Abu-abu sangat muda ( Hampir putih ) */
            --bg-card: #FFFFFF;          /* Putih Murni */
            --text-main: #1E293B;        /* Abu gelap untuk teks utama */
            --text-muted: #64748B;       /* Abu sedang untuk deskripsi */
            --border-color: #E2E8F0;     /* Garis halus */
            
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-hover: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        /* ================= BODY ================= */
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background-color: var(--bg-body);
            color: var(--text-main);
            min-height: 100vh;
            -webkit-font-smoothing: antialiased;
        }

        /* ================= HEADER ================= */
        .header {
            background: var(--bg-card);
            border-bottom: 1px solid var(--border-color);
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: var(--shadow-sm);
        }

        .header-logo {
            width: 45px;
            height: 45px;
            background-color: var(--bg-body);
            border-radius: 12px;
            padding: 5px;
            display: inline-block;
            transition: transform 0.3s ease;
        }
        
        .header-logo:hover {
            transform: rotate(-5deg);
        }

        .header-logo img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .brand-text h1 {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--text-main);
            margin: 0;
            line-height: 1.2;
        }

        .brand-text p {
            font-size: 0.8rem;
            color: var(--text-muted);
            margin: 0;
            font-weight: 500;
        }

        /* Modern Search Bar */
        .search-container {
            position: relative;
        }

        .search-box {
            background-color: var(--bg-body);
            border: 1px solid var(--border-color);
            border-radius: 50px; /* Pill shape */
            padding: 10px 45px 10px 20px;
            width: 100%;
            color: var(--text-main);
            font-size: 0.95rem;
            transition: all 0.3s ease;
        }

        .search-box:focus {
            background-color: #fff;
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1);
            outline: none;
        }

        .search-icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-muted);
            pointer-events: none;
        }

        /* Back Button - Minimalist Outline */
        .back-btn {
            background-color: transparent;
            border: 1px solid var(--border-color);
            border-radius: 50px;
            padding: 8px 20px;
            color: var(--text-main);
            font-weight: 600;
            font-size: 0.9rem;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            transition: all 0.3s ease;
        }

        .back-btn:hover {
            background-color: var(--bg-body);
            border-color: var(--text-muted);
            color: var(--primary-blue);
            transform: translateX(-3px);
        }

        /* ================= CATEGORIES ================= */
        .category-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            padding: 20px;
            text-align: center;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            height: 100%;
            position: relative;
            overflow: hidden;
        }

        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
            border-color: var(--primary-blue);
        }

        .category-icon {
            width: 50px;
            height: 50px;
            background-color: var(--light-blue);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 12px;
            color: var(--primary-blue);
            font-size: 1.5rem;
            transition: all 0.3s ease;
        }

        .category-card:hover .category-icon {
            background-color: var(--primary-blue);
            color: white;
        }

        .category-name {
            font-weight: 600;
            font-size: 0.95rem;
            margin: 0;
            color: var(--text-main);
        }

        /* ================= FILTER ================= */
        .filter-section {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            padding: 15px 25px;
            margin-bottom: 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 15px;
        }

        .filter-title {
            font-weight: 600;
            font-size: 1.1rem;
            margin: 0;
            color: var(--text-main);
        }

        .filter-btn {
            background: transparent;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            padding: 6px 16px;
            color: var(--text-muted);
            font-size: 0.9rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .filter-btn:hover {
            border-color: var(--primary-blue);
            color: var(--primary-blue);
        }

        .filter-btn.active {
            background-color: var(--primary-blue);
            border-color: var(--primary-blue);
            color: white;
            box-shadow: 0 4px 6px rgba(37, 99, 235, 0.2);
        }

        /* ================= PRODUCTS ================= */
        .product-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            overflow: hidden;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-hover);
            border-color: rgba(37, 99, 235, 0.3);
        }

        .product-image {
            height: 220px;
            width: 100%;
            background-size: cover;
            background-position: center;
            background-color: #f1f5f9;
            position: relative;
        }

        /* Badge overlay */
        .badge-new {
            position: absolute;
            top: 12px;
            left: 12px;
            background: rgba(255, 255, 255, 0.95);
            color: var(--primary-blue);
            padding: 4px 10px;
            border-radius: 6px;
            font-size: 0.75rem;
            font-weight: 700;
            box-shadow: var(--shadow-sm);
        }

        .product-body {
            padding: 20px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .product-title {
            color: var(--text-main);
            font-weight: 600;
            font-size: 1rem;
            margin-bottom: 8px;
            line-height: 1.4;
            /* Truncate text */
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .product-price {
            color: var(--primary-blue);
            font-weight: 700;
            font-size: 1.15rem;
            margin-top: auto;
        }

        /* ================= FOOTER ================= */
        .footer {
            background-color: #0F172A; /* Dark Blue Slate */
            padding: 60px 0 30px;
            margin-top: 80px;
            color: white;
        }

        .footer-logo {
            width: 50px;
            height: 50px;
            background-color: rgba(255,255,255,0.1);
            border-radius: 10px;
            padding: 8px;
            margin-bottom: 20px;
            display: inline-block;
        }
        
        .footer-logo img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .footer h3, .footer h4 {
            color: white;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .footer p {
            color: #94A3B8;
            font-size: 0.9rem;
            line-height: 1.6;
        }

        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: #94A3B8;
            text-decoration: none;
            transition: color 0.3s ease;
            font-size: 0.95rem;
        }

        .footer-links a:hover {
            color: var(--primary-blue);
            padding-left: 5px;
        }

        .social-links a {
            width: 36px;
            height: 36px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: white;
            margin-right: 10px;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .social-links a:hover {
            background: var(--primary-blue);
            transform: translateY(-3px);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            margin-top: 40px;
            padding-top: 30px;
            text-align: center;
            color: #64748B;
            font-size: 0.85rem;
        }

        /* ================= RESPONSIVE ================= */
        @media (max-width: 768px) {
            .header {
                padding: 10px 0;
            }
            
            .search-box {
                margin: 10px 0;
            }
            
            .category-card {
                padding: 15px;
            }
            
            .category-icon {
                width: 40px;
                height: 40px;
                font-size: 1.2rem;
            }
            
            .product-image {
                height: 180px;
            }

            .filter-section {
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="row align-items-center">
                <!-- Brand -->
                <div class="col-md-3">
                    <div class="d-flex align-items-center">
                        <div class="header-logo me-3">
                            <img src="https://z-cdn-media.chatglm.cn/files/9d0ca30d-954f-4e5f-bf66-bfb4a115ecfc.png?auth_key=1868371606-21df551d97db4bbbadc671626e9e83a6-0-e0a0e057a73f58e5763d4379b39763b1" alt="Logo SMKN 1 Kawali">
                        </div>
                        <div class="brand-text">
                            <h1>Marketplace</h1>
                            <p>SMKN 1 KAWALI</p>
                        </div>
                    </div>
                </div>

                <!-- Search -->
                <div class="col-md-6">
                    <div class="search-container">
                        <input type="text" class="search-box" placeholder="Cari buku, alat tulis, atau seragam...">
                        <i class="bi bi-search search-icon"></i>
                    </div>
                </div>

                <!-- Back Button -->
                <div class="col-md-3">
                    <div class="text-end">
                        <a href="{{ route('beranda') }}" class="back-btn">
                            <i class="bi bi-arrow-left me-2"></i>
                            Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <div class="container py-5">
            
            <!-- Categories Section -->
            <section class="mb-5">
                <div class="row g-3">
                    <div class="col-6 col-md-3">
                        <div class="category-card">
                            <div class="category-icon">
                                <i class="bi bi-laptop"></i>
                            </div>
                            <p class="category-name">Elektronik</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="category-card">
                            <div class="category-icon">
                                <i class="bi bi-book"></i>
                            </div>
                            <p class="category-name">Buku</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="category-card">
                            <div class="category-icon">
                                <i class="bi bi-pencil-square"></i>
                            </div>
                            <p class="category-name">Alat Tulis</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="category-card">
                            <div class="category-icon">
                                <i class="bi bi-handbag"></i>
                            </div>
                            <p class="category-name">Seragam</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Filter Section -->
            <section class="filter-section">
                <h3 class="filter-title">Filter Produk</h3>
                <div class="d-flex flex-wrap gap-2">
                    <button class="filter-btn active">Semua</button>
                    <button class="filter-btn">Terbaru</button>
                    <button class="filter-btn">Terlaris</button>
                    <button class="filter-btn">Harga Terendah</button>
                    <button class="filter-btn">Promo</button>
                </div>
            </section>

            <!-- Products Section -->
            <section>
                <!-- Section Title (Optional, kept clean) -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="h4 fw-bold m-0" style="color: var(--text-main);">Rekomendasi Untukmu</h2>
                    <small class="text-muted">Menampilkan semua produk</small>
                </div>

                <div class="row g-4">
                    {{-- AWAL LOOPING PRODUK --}}
                    @forelse ($marketplaces as $marketplace)
                        <div class="col-md-6 col-lg-4">
                            <div class="product-card">
                                {{-- Menampilkan foto produk --}}
                                <div class="product-image" style="background-image: url('{{ $marketplace->foto ? asset('storage/' . $marketplace->foto) : 'https://picsum.photos/seed/smkn1kawali/400/300.jpg' }}');">
                                    <div class="badge-new">Baru</div>
                                </div>
                                
                                <div class="product-body">
                                    {{-- Menampilkan nama produk --}}
                                    <h3 class="product-title">{{ $marketplace->nama }}</h3>
                                    
                                    {{-- Menampilkan harga produk dengan format Rupiah --}}
                                    <div class="product-price">Rp {{ number_format($marketplace->harga, 0, ',', '.') }}</div>
                                    
                                    <!-- Tombol Beli Mini (Opsional) -->
                                    <button class="btn btn-sm w-100 mt-3 fw-semibold" style="background-color: var(--primary-blue); color: white; border-radius: 8px;">
                                        <i class="bi bi-cart-plus me-1"></i> Beli Sekarang
                                    </button>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            <div class="text-center py-5">
                                <div style="background: white; border-radius: 16px; padding: 40px; border: 1px dashed var(--border-color);">
                                    <i class="bi bi-inbox text-muted" style="font-size: 3rem;"></i>
                                    <h4 class="mt-3 fw-bold text-muted">Belum ada produk</h4>
                                    <p class="text-muted">Silakan cek lagi lain waktu.</p>
                                </div>
                            </div>
                        </div>
                    @endforelse
                    {{-- AKHIR LOOPING PRODUK --}}
                </div>
            </section>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="footer-logo">
                        <img src="https://z-cdn-media.chatglm.cn/files/9d0ca30d-954f-4e5f-bf66-bfb4a115ecfc.png?auth_key=1868371606-21df551d97db4bbbadc671626e9e83a6-0-e0a0e057a73f58e5763d4379b39763b1" alt="Logo SMKN 1 Kawali">
                    </div>
                    <h3>SMKN 1 KAWALI</h3>
                    <p>Marketplace resmi yang dikelola siswa untuk memenuhi kebutuhan belajar mengajar dengan cara yang praktis dan terpercaya.</p>
                    <div class="social-links mt-4">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <h4>Navigasi</h4>
                    <ul class="footer-links">
                        <li><a href="#">Beranda</a></li>
                        <li><a href="#">Katalog Produk</a></li>
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Hubungi Admin</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4">
                    <h4>Hubungi Kami</h4>
                    <ul class="footer-links">
                        <li><i class="bi bi-geo-alt me-2 text-primary"></i> Jl. Pendidikan No. 1, Kawali, Ciamis</li>
                        <li><i class="bi bi-telephone me-2 text-primary"></i> (0265) 123456</li>
                        <li><i class="bi bi-envelope me-2 text-primary"></i> info@smkn1kawali.sch.id</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p class="m-0">&copy; 2024 SMKN 1 Kawali. Dibuat dengan ❤️ oleh Tim IT.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Filter buttons interaction
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                // Hapus kelas active dari semua tombol
                document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                // Tambahkan kelas active ke tombol yang diklik
                this.classList.add('active');
            });
        });

        // Search interaction (Simulasi)
        const searchBox = document.querySelector('.search-box');
        searchBox.addEventListener('focus', () => {
            searchBox.parentElement.style.transform = "scale(1.02)";
        });
        searchBox.addEventListener('blur', () => {
            searchBox.parentElement.style.transform = "scale(1)";
        });
    </script>
</body>
</html>