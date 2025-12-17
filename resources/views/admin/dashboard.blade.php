@extends('admin.layout')

@section('title','Dashboard Admin')

@section('content')
<style>
    :root {
        --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        --secondary-gradient: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        --success-gradient: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        --info-gradient: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        --warning-gradient: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
        --dark-gradient: linear-gradient(135deg, #30cfd0 0%, #330867 100%);
    }
    
    .dashboard-welcome {
        background: var(--primary-gradient);
        color: white;
        padding: 30px;
        border-radius: 18px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        position: relative;
        overflow: hidden;
    }
    
    .dashboard-welcome::before {
        content: '';
        position: absolute;
        top: -50px;
        right: -50px;
        width: 200px;
        height: 200px;
        background: rgba(255,255,255,0.1);
        border-radius: 50%;
    }
    
    .dashboard-welcome::after {
        content: '';
        position: absolute;
        bottom: -30px;
        left: -30px;
        width: 150px;
        height: 150px;
        background: rgba(255,255,255,0.1);
        border-radius: 50%;
    }

    .big-card {
        padding: 35px 20px;
        border-radius: 18px;
        background: #fff;
        border: none;
        transition: all 0.3s ease;
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        position: relative;
        overflow: hidden;
    }
    
    .big-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: var(--primary-gradient);
    }
    
    .big-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.15);
    }

    #current-time {
        font-size: 55px;
        font-weight: 700;
        background: var(--primary-gradient);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    #current-date {
        font-size: 22px;
        font-weight: 600;
        color: #4b5563;
    }

    .card-stat {
        padding: 25px;
        border-radius: 16px;
        transition: all 0.3s ease;
        background: white;
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        position: relative;
        overflow: hidden;
    }
    
    .card-stat::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 6px;
        height: 100%;
    }
    
    .card-stat.primary::before { background: var(--primary-gradient); }
    .card-stat.secondary::before { background: var(--secondary-gradient); }
    .card-stat.success::before { background: var(--success-gradient); }
    .card-stat.info::before { background: var(--info-gradient); }
    .card-stat.warning::before { background: var(--warning-gradient); }
    .card-stat.dark::before { background: var(--dark-gradient); }
    
    .card-stat:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.15);
    }
    
    .stat-title {
        font-size: 15px;
        font-weight: 600;
        color: #6b7280;
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }
    
    .stat-icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        font-size: 20px;
    }
    
    .stat-icon.primary { background: rgba(102, 126, 234, 0.15); color: #667eea; }
    .stat-icon.secondary { background: rgba(240, 147, 251, 0.15); color: #f093fb; }
    .stat-icon.success { background: rgba(67, 233, 123, 0.15); color: #43e97b; }
    .stat-icon.info { background: rgba(79, 172, 254, 0.15); color: #4facfe; }
    .stat-icon.warning { background: rgba(250, 112, 154, 0.15); color: #fa709a; }
    .stat-icon.dark { background: rgba(48, 207, 208, 0.15); color: #30cfd0; }
    
    .stat-value {
        font-size: 32px;
        font-weight: bold;
        color: #111827;
    }
    
    .stat-change {
        font-size: 14px;
        margin-top: 5px;
        display: flex;
        align-items: center;
    }
    
    .stat-change.positive { color: #10b981; }
    .stat-change.negative { color: #ef4444; }
    
    .quick-action-card {
        padding: 20px;
        border-radius: 16px;
        background: white;
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        text-align: center;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    
    .quick-action-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.15);
    }
    
    .quick-action-icon {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 15px;
        font-size: 24px;
        color: white;
    }
    
    .activity-item {
        padding: 15px;
        border-left: 3px solid #e5e7eb;
        margin-left: 10px;
        position: relative;
    }
    
    .activity-item::before {
        content: '';
        position: absolute;
        left: -8px;
        top: 20px;
        width: 13px;
        height: 13px;
        border-radius: 50%;
        background: white;
        border: 3px solid #e5e7eb;
    }
    
    .activity-item.new::before {
        background: #10b981;
        border-color: #10b981;
    }
    
    .activity-item.new {
        border-left-color: #10b981;
    }
    
    .chart-container {
        position: relative;
        height: 300px;
        width: 100%;
    }
</style>

<div class="dashboard-welcome mb-4">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h2 class="fw-bold">Selamat Datang, Super Admin! 👑</h2>
            <p class="mt-2">Kelola seluruh konten dan data website dengan mudah melalui dashboard profesional ini.</p>
            <div class="mt-3">
                <span class="badge bg-white text-primary p-2 me-2">
                    <i class="bi bi-calendar3 me-1"></i> {{ now()->format('d F Y') }}
                </span>
                <span class="badge bg-white text-primary p-2">
                    <i class="bi bi-clock me-1"></i> <span id="welcome-time"></span>
                </span>
            </div>
        </div>
        <div class="col-md-4 text-end">
            <img src="https://picsum.photos/seed/admin123/200/150.jpg" alt="Admin" class="img-fluid rounded-3 shadow-lg" style="max-height: 150px;">
        </div>
    </div>
</div>

<div class="row g-4 mb-4">
    <div class="col-md-6">
        <div class="big-card shadow-sm text-center">
            <h1 id="current-time">00:00:00</h1>
            <p class="text-muted">Jam Saat Ini</p>
        </div>
    </div>

    <div class="col-md-6">
        <div class="big-card shadow-sm text-center">
            <h3 id="current-date"></h3>
            <p class="text-muted">Hari Ini</p>
        </div>
    </div>
</div>

<h4 class="mt-5 mb-3 fw-bold">📊 Statistik Website</h4>

<div class="row g-4 mb-4">
    <div class="col-md-4">
        <div class="card-stat shadow-sm primary">
            <div class="stat-title">
                <div class="stat-icon primary">
                    <i class="bi bi-journal-text"></i>
                </div>
                <div>
                    <div>Artikel Aktif</div>
                    <div class="stat-change positive">
                        <i class="bi bi-arrow-up me-1"></i> 12% dari bulan lalu
                    </div>
                </div>
            </div>
            <div class="stat-value">128</div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card-stat shadow-sm secondary">
            <div class="stat-title">
                <div class="stat-icon secondary">
                    <i class="bi bi-trophy"></i>
                </div>
                <div>
                    <div>Prestasi</div>
                    <div class="stat-change positive">
                        <i class="bi bi-arrow-up me-1"></i> 8% dari bulan lalu
                    </div>
                </div>
            </div>
            <div class="stat-value">52</div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card-stat shadow-sm success">
            <div class="stat-title">
                <div class="stat-icon success">
                    <i class="bi bi-images"></i>
                </div>
                <div>
                    <div>Galeri Foto</div>
                    <div class="stat-change positive">
                        <i class="bi bi-arrow-up me-1"></i> 25% dari bulan lalu
                    </div>
                </div>
            </div>
            <div class="stat-value">340</div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card-stat shadow-sm info">
            <div class="stat-title">
                <div class="stat-icon info">
                    <i class="bi bi-cart3"></i>
                </div>
                <div>
                    <div>Pesanan Baru</div>
                    <div class="stat-change negative">
                        <i class="bi bi-arrow-down me-1"></i> 3% dari bulan lalu
                    </div>
                </div>
            </div>
            <div class="stat-value">14</div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card-stat shadow-sm warning">
            <div class="stat-title">
                <div class="stat-icon warning">
                    <i class="bi bi-box"></i>
                </div>
                <div>
                    <div>Produk Aktif</div>
                    <div class="stat-change positive">
                        <i class="bi bi-arrow-up me-1"></i> 5% dari bulan lalu
                    </div>
                </div>
            </div>
            <div class="stat-value">87</div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card-stat shadow-sm dark">
            <div class="stat-title">
                <div class="stat-icon dark">
                    <i class="bi bi-currency-dollar"></i>
                </div>
                <div>
                    <div>Transaksi Bulan Ini</div>
                    <div class="stat-change positive">
                        <i class="bi bi-arrow-up me-1"></i> 18% dari bulan lalu
                    </div>
                </div>
            </div>
            <div class="stat-value">Rp 12.4 Jt</div>
        </div>
    </div>
</div>

<div class="row g-4 mb-4">
    <div class="col-md-8">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h5 class="card-title fw-bold mb-4">Grafik Kunjungan Website</h5>
                <div class="chart-container">
                    <canvas id="visitsChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h5 class="card-title fw-bold mb-4">Aktivitas Terkini</h5>
                <div class="activity-feed">
                    <div class="activity-item new">
                        <div class="fw-semibold">Artikel baru ditambahkan</div>
                        <div class="text-muted small">2 menit yang lalu</div>
                    </div>
                    <div class="activity-item">
                        <div class="fw-semibold">Prestasi siswa diperbarui</div>
                        <div class="text-muted small">1 jam yang lalu</div>
                    </div>
                    <div class="activity-item">
                        <div class="fw-semibold">Galeri foto ditambahkan</div>
                        <div class="text-muted small">3 jam yang lalu</div>
                    </div>
                    <div class="activity-item">
                        <div class="fw-semibold">User baru terdaftar</div>
                        <div class="text-muted small">5 jam yang lalu</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<h4 class="mt-5 mb-3 fw-bold">⚡ Aksi Cepat</h4>

<div class="row g-4 mb-4">
    <div class="col-md-3">
        <a href="{{ route('admin.artikel.create') }}" class="text-decoration-none">
            <div class="quick-action-card">
                <div class="quick-action-icon" style="background: var(--primary-gradient);">
                    <i class="bi bi-plus-circle"></i>
                </div>
                <h6 class="fw-bold">Tambah Artikel</h6>
            </div>
        </a>
    </div>
    
    <div class="col-md-3">
        <a href="{{ route('admin.prestasi.create') }}" class="text-decoration-none">
            <div class="quick-action-card">
                <div class="quick-action-icon" style="background: var(--secondary-gradient);">
                    <i class="bi bi-trophy-fill"></i>
                </div>
                <h6 class="fw-bold">Tambah Prestasi</h6>
            </div>
        </a>
    </div>
    
    <div class="col-md-3">
        <a href="{{ route('admin.galeri.create') }}" class="text-decoration-none">
            <div class="quick-action-card">
                <div class="quick-action-icon" style="background: var(--success-gradient);">
                    <i class="bi bi-image-fill"></i>
                </div>
                <h6 class="fw-bold">Tambah Galeri</h6>
            </div>
        </a>
    </div>
    
    <div class="col-md-3">
        <a href="{{ route('admin.users.create') }}" class="text-decoration-none">
            <div class="quick-action-card">
                <div class="quick-action-icon" style="background: var(--info-gradient);">
                    <i class="bi bi-person-plus-fill"></i>
                </div>
                <h6 class="fw-bold">Tambah User</h6>
            </div>
        </a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    function updateTime() {
        const now = new Date();
        document.getElementById('current-time').innerHTML = now.toLocaleTimeString('id-ID');
        document.getElementById('current-date').innerHTML = now.toLocaleDateString('id-ID', {
            weekday:'long', year:'numeric', month:'long', day:'numeric'
        });
        document.getElementById('welcome-time').innerHTML = now.toLocaleTimeString('id-ID', {
            hour: '2-digit', minute: '2-digit'
        });
    }
    setInterval(updateTime, 1000);
    updateTime();
    
    // Chart initialization
    const ctx = document.getElementById('visitsChart').getContext('2d');
    const visitsChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
            datasets: [{
                label: 'Kunjungan',
                data: [65, 78, 90, 81, 96, 105, 120],
                fill: true,
                backgroundColor: 'rgba(102, 126, 234, 0.2)',
                borderColor: 'rgba(102, 126, 234, 1)',
                tension: 0.4,
                pointBackgroundColor: 'rgba(102, 126, 234, 1)',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgba(102, 126, 234, 1)'
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(0, 0, 0, 0.05)'
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            }
        }
    });
</script>
@endsection