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
/* ================= ROOT ================= */
:root{
    --blue-dark:#0A2540;
    --blue-main:#0D6EFD;
    --blue-soft:#3B82F6;
    --blue-light:#E8F1FF;
    --yellow-accent:#FFC107;
    --red-accent:#DC3545;
}

/* ================= BODY ================= */
body{
    margin:0;
    font-family:'Poppins',sans-serif;
    background: linear-gradient(135deg,var(--blue-dark),var(--blue-main),#38BDF8);
    background-size:300% 300%;
    animation: oceanMove 12s ease infinite;
    min-height: 100vh;
    position:relative;
}

/* Background pattern */
body::before {
    content: "";
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: radial-gradient(circle at 10% 20%, rgba(255,255,255,0.05) 0%, transparent 8%),
                      radial-gradient(circle at 80% 50%, rgba(255,255,255,0.07) 0%, transparent 8%),
                      radial-gradient(circle at 40% 80%, rgba(255,255,255,0.05) 0%, transparent 8%);
    z-index: -1;
}

/* Gradient movement */
@keyframes oceanMove{
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}

/* ================= HEADER ================= */
.header {
    background: rgba(255,255,255,0.15);
    backdrop-filter: blur(18px);
    border-bottom: 1px solid rgba(255,255,255,0.1);
    padding: 15px 0;
    position: sticky;
    top: 0;
    z-index: 1000;
}

.header-logo {
    width: 50px;
    height: 50px;
    background-color: white;
    border-radius: 50%;
    padding: 6px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    display: inline-block;
}

.header-logo img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.header-title {
    color: white;
    font-weight: 700;
    font-size: 1.5rem;
    margin: 0;
}

.header-subtitle {
    color: rgba(255,255,255,0.8);
    font-size: 0.9rem;
    margin: 0;
}

.search-box {
    background: rgba(255,255,255,0.25);
    border: none;
    border-radius: 25px;
    padding: 10px 20px;
    color: white;
    width: 100%;
    max-width: 400px;
}

.search-box::placeholder {
    color: rgba(255,255,255,0.7);
}

.search-box:focus {
    background: rgba(255,255,255,0.35);
    box-shadow: 0 0 0 3px rgba(59,130,246,0.4);
    color: white;
    outline: none;
}

.cart-btn {
    background: linear-gradient(90deg,var(--blue-main),#38BDF8);
    border: none;
    border-radius: 25px;
    padding: 10px 20px;
    color: white;
    font-weight: 600;
    position: relative;
    transition: all 0.3s ease;
}

.cart-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.3);
}

.cart-count {
    position: absolute;
    top: -8px;
    right: -8px;
    background: var(--red-accent);
    color: white;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.75rem;
    font-weight: 700;
}

/* ================= MAIN CONTENT ================= */
.main-content {
    padding: 30px 0;
}

/* ================= CATEGORIES ================= */
.category-section {
    margin-bottom: 40px;
}

.section-title {
    color: white;
    font-weight: 700;
    font-size: 1.8rem;
    margin-bottom: 25px;
    position: relative;
    padding-left: 15px;
}

.section-title::before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 5px;
    height: 30px;
    background: linear-gradient(180deg, var(--blue-main), #38BDF8);
    border-radius: 3px;
}

.category-card {
    background: rgba(255,255,255,0.15);
    backdrop-filter: blur(18px);
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 15px;
    padding: 20px;
    text-align: center;
    color: white;
    transition: all 0.3s ease;
    cursor: pointer;
    height: 100%;
}

.category-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.3);
    background: rgba(255,255,255,0.25);
}

.category-icon {
    font-size: 2.5rem;
    margin-bottom: 15px;
    background: linear-gradient(135deg, var(--blue-main), #38BDF8);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.category-name {
    font-weight: 600;
    font-size: 1rem;
    margin: 0;
}

/* ================= PRODUCTS ================= */
.product-card {
    background: rgba(255,255,255,0.15);
    backdrop-filter: blur(18px);
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 15px;
    overflow: hidden;
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.3);
}

.product-image {
    height: 200px;
    background-size: cover;
    background-position: center;
    position: relative;
}

.product-badge {
    position: absolute;
    top: 10px;
    right: 10px;
    background: var(--red-accent);
    color: white;
    padding: 5px 10px;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 600;
}

.product-body {
    padding: 20px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}

.product-title {
    color: white;
    font-weight: 600;
    font-size: 1.1rem;
    margin-bottom: 10px;
}

.product-description {
    color: rgba(255,255,255,0.8);
    font-size: 0.9rem;
    margin-bottom: 15px;
    flex-grow: 1;
}

.product-price {
    color: var(--yellow-accent);
    font-weight: 700;
    font-size: 1.3rem;
    margin-bottom: 15px;
}

.product-footer {
    display: flex;
    gap: 10px;
}

.btn-add-cart {
    flex: 1;
    background: linear-gradient(90deg,var(--blue-main),#38BDF8);
    border: none;
    border-radius: 10px;
    padding: 10px;
    color: white;
    font-weight: 600;
    transition: all 0.3s ease;
}

.btn-add-cart:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
}

.btn-detail {
    background: rgba(255,255,255,0.25);
    border: 1px solid rgba(255,255,255,0.3);
    border-radius: 10px;
    padding: 10px 15px;
    color: white;
    transition: all 0.3s ease;
}

.btn-detail:hover {
    background: rgba(255,255,255,0.35);
}

/* ================= FILTER SECTION ================= */
.filter-section {
    background: rgba(255,255,255,0.15);
    backdrop-filter: blur(18px);
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 15px;
    padding: 20px;
    margin-bottom: 30px;
}

.filter-title {
    color: white;
    font-weight: 600;
    font-size: 1.1rem;
    margin-bottom: 15px;
}

.filter-btn {
    background: rgba(255,255,255,0.25);
    border: 1px solid rgba(255,255,255,0.2);
    border-radius: 20px;
    padding: 8px 16px;
    color: white;
    font-size: 0.9rem;
    margin-right: 10px;
    margin-bottom: 10px;
    transition: all 0.3s ease;
}

.filter-btn:hover, .filter-btn.active {
    background: linear-gradient(90deg,var(--blue-main),#38BDF8);
    border-color: transparent;
}

/* ================= FOOTER ================= */
.footer {
    background: rgba(10,37,64,0.8);
    padding: 40px 0 20px;
    margin-top: 60px;
}

.footer-logo {
    width: 60px;
    height: 60px;
    background-color: white;
    border-radius: 50%;
    padding: 8px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    margin-bottom: 15px;
}

.footer-logo img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.footer-title {
    color: white;
    font-weight: 700;
    font-size: 1.3rem;
    margin-bottom: 10px;
}

.footer-text {
    color: rgba(255,255,255,0.8);
    font-size: 0.9rem;
    margin-bottom: 20px;
}

.footer-links {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-links li {
    margin-bottom: 10px;
}

.footer-links a {
    color: rgba(255,255,255,0.8);
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-links a:hover {
    color: var(--blue-light);
}

.social-links {
    display: flex;
    gap: 15px;
    margin-top: 20px;
}

.social-links a {
    width: 40px;
    height: 40px;
    background: rgba(255,255,255,0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    transition: all 0.3s ease;
}

.social-links a:hover {
    background: var(--blue-main);
    transform: translateY(-3px);
}

.footer-bottom {
    border-top: 1px solid rgba(255,255,255,0.1);
    margin-top: 30px;
    padding-top: 20px;
    text-align: center;
    color: rgba(255,255,255,0.6);
    font-size: 0.85rem;
}

/* ================= RESPONSIVE ================= */
@media (max-width: 768px) {
    .header-title {
        font-size: 1.2rem;
    }
    
    .search-box {
        max-width: 100%;
        margin: 10px 0;
    }
    
    .section-title {
        font-size: 1.5rem;
    }
    
    .category-icon {
        font-size: 2rem;
    }
    
    .product-image {
        height: 150px;
    }
}
</style>
</head>

<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <div class="d-flex align-items-center">
                        <div class="header-logo me-3">
                            <img src="https://z-cdn-media.chatglm.cn/files/9d0ca30d-954f-4e5f-bf66-bfb4a115ecfc.png?auth_key=1868371606-21df551d97db4bbbadc671626e9e83a6-0-e0a0e057a73f58e5763d4379b39763b1" alt="Logo SMKN 1 Kawali">
                        </div>
                        <div>
                            <h1 class="header-title">Marketplace</h1>
                            <p class="header-subtitle">SMKN 1 KAWALI</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center">
                        <input type="text" class="search-box" placeholder="Cari produk yang Anda inginkan...">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-end">
                        <button class="cart-btn">
                            <i class="bi bi-cart3 me-2"></i>
                            Keranjang
                            <span class="cart-count">3</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            <!-- Categories Section -->
            <section class="category-section">
                <h2 class="section-title">Kategori Populer</h2>
                <div class="row g-4">
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
                                <i class="bi bi-brush"></i>
                            </div>
                            <p class="category-name">Alat Tulis</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="category-card">
                            <div class="category-icon">
                                <i class="bi bi-tshirt"></i>
                            </div>
                            <p class="category-name">Seragam</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Filter Section -->
            <section class="filter-section">
                <h3 class="filter-title">Filter Produk</h3>
                <div class="d-flex flex-wrap">
                    <button class="filter-btn active">Semua</button>
                    <button class="filter-btn">Terbaru</button>
                    <button class="filter-btn">Terlaris</button>
                    <button class="filter-btn">Harga Terendah</button>
                    <button class="filter-btn">Harga Tertinggi</button>
                    <button class="filter-btn">Promo</button>
                </div>
            </section>

            <!-- Products Section -->
            <section>
                <h2 class="section-title">Produk Terbaru</h2>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="product-card">
                            <div class="product-image" style="background-image: url('https://picsum.photos/seed/laptop/400/300.jpg');">
                                <span class="product-badge">Promo</span>
                            </div>
                            <div class="product-body">
                                <h3 class="product-title">Laptop ASUS VivoBook</h3>
                                <p class="product-description">Laptop dengan performa tinggi untuk menunjang kegiatan belajar mengajar.</p>
                                <div class="product-price">Rp 8.500.000</div>
                                <div class="product-footer">
                                    <button class="btn-add-cart">
                                        <i class="bi bi-cart-plus me-2"></i>
                                        Tambah
                                    </button>
                                    <button class="btn-detail">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="product-card">
                            <div class="product-image" style="background-image: url('https://picsum.photos/seed/books/400/300.jpg');">
                            </div>
                            <div class="product-body">
                                <h3 class="product-title">Paket Buku Teknik</h3>
                                <p class="product-description">Kumpulan buku wajib untuk jurusan teknik komputer dan jaringan.</p>
                                <div class="product-price">Rp 450.000</div>
                                <div class="product-footer">
                                    <button class="btn-add-cart">
                                        <i class="bi bi-cart-plus me-2"></i>
                                        Tambah
                                    </button>
                                    <button class="btn-detail">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="product-card">
                            <div class="product-image" style="background-image: url('https://picsum.photos/seed/uniform/400/300.jpg');">
                                <span class="product-badge">Baru</span>
                            </div>
                            <div class="product-body">
                                <h3 class="product-title">Seragam SMKN 1</h3>
                                <p class="product-description">Seragam lengkap SMKN 1 Kawali dengan kualitas terbaik.</p>
                                <div class="product-price">Rp 250.000</div>
                                <div class="product-footer">
                                    <button class="btn-add-cart">
                                        <i class="bi bi-cart-plus me-2"></i>
                                        Tambah
                                    </button>
                                    <button class="btn-detail">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="product-card">
                            <div class="product-image" style="background-image: url('https://picsum.photos/seed/stationery/400/300.jpg');">
                            </div>
                            <div class="product-body">
                                <h3 class="product-title">Paket Alat Tulis</h3>
                                <p class="product-description">P lengkap alat tulis untuk kegiatan sekolah sehari-hari.</p>
                                <div class="product-price">Rp 75.000</div>
                                <div class="product-footer">
                                    <button class="btn-add-cart">
                                        <i class="bi bi-cart-plus me-2"></i>
                                        Tambah
                                    </button>
                                    <button class="btn-detail">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="product-card">
                            <div class="product-image" style="background-image: url('https://picsum.photos/seed/tablet/400/300.jpg');">
                                <span class="product-badge">Terlaris</span>
                            </div>
                            <div class="product-body">
                                <h3 class="product-title">Tablet Samsung</h3>
                                <p class="product-description">Tablet untuk mendukung pembelajaran digital di sekolah.</p>
                                <div class="product-price">Rp 3.200.000</div>
                                <div class="product-footer">
                                    <button class="btn-add-cart">
                                        <i class="bi bi-cart-plus me-2"></i>
                                        Tambah
                                    </button>
                                    <button class="btn-detail">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="product-card">
                            <div class="product-image" style="background-image: url('https://picsum.photos/seed/bag/400/300.jpg');">
                            </div>
                            <div class="product-body">
                                <h3 class="product-title">Tas Ransel</h3>
                                <p class="product-description">Tas ransel ergonomic dengan banyak kompartemen.</p>
                                <div class="product-price">Rp 180.000</div>
                                <div class="product-footer">
                                    <button class="btn-add-cart">
                                        <i class="bi bi-cart-plus me-2"></i>
                                        Tambah
                                    </button>
                                    <button class="btn-detail">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-logo">
                        <img src="https://z-cdn-media.chatglm.cn/files/9d0ca30d-954f-4e5f-bf66-bfb4a115ecfc.png?auth_key=1868371606-21df551d97db4bbbadc671626e9e83a6-0-e0a0e057a73f58e5763d4379b39763b1" alt="Logo SMKN 1 Kawali">
                    </div>
                    <h3 class="footer-title">SMKN 1 KAWALI</h3>
                    <p class="footer-text">Marketplace resmi SMKN 1 Kawali untuk memenuhi kebutuhan belajar mengajar siswa dan guru.</p>
                    <div class="social-links">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-youtube"></i></a>
                        <a href="#"><i class="bi bi-twitter"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4 class="footer-title">Link Cepat</h4>
                    <ul class="footer-links">
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Cara Pemesanan</a></li>
                        <li><a href="#">Pengiriman</a></li>
                        <li><a href="#">Pengembalian</a></li>
                        <li><a href="#">Bantuan</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4 class="footer-title">Kontak</h4>
                    <ul class="footer-links">
                        <li><i class="bi bi-geo-alt me-2"></i> Jl. Pendidikan No. 1, Kawali, Ciamis</li>
                        <li><i class="bi bi-telephone me-2"></i> (0265) 123456</li>
                        <li><i class="bi bi-envelope me-2"></i> info@smkn1kawali.sch.id</li>
                        <li><i class="bi bi-clock me-2"></i> Senin - Jumat: 07:00 - 15:00</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 SMKN 1 Kawali. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Filter buttons functionality
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Add to cart functionality
        document.querySelectorAll('.btn-add-cart').forEach(btn => {
            btn.addEventListener('click', function() {
                const cartCount = document.querySelector('.cart-count');
                let count = parseInt(cartCount.textContent);
                cartCount.textContent = count + 1;
                
                // Visual feedback
                this.innerHTML = '<i class="bi bi-check-circle me-2"></i>Ditambahkan';
                this.style.background = 'linear-gradient(90deg, #10B981, #059669)';
                
                setTimeout(() => {
                    this.innerHTML = '<i class="bi bi-cart-plus me-2"></i>Tambah';
                    this.style.background = '';
                }, 2000);
            });
        });

        // Search functionality
        document.querySelector('.search-box').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            // Here you would implement actual search logic
            console.log('Searching for:', searchTerm);
        });
    </script>
</body>
</html>