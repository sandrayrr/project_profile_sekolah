@extends('admin.layout')

@section('title','Dashboard Admin')

@section('content')
<style>
    :root {
        /* Warna yang lebih halus dan profesional */
        --primary-color: #4f46e5;
        --primary-light: #e0e7ff;
        --secondary-color: #6366f1;
        --success-color: #10b981;
        --success-light: #d1fae5;
        --info-color: #3b82f6;
        --info-light: #dbeafe;
        --warning-color: #f59e0b;
        --warning-light: #fed7aa;
        --danger-color: #ef4444;
        --danger-light: #fee2e2;
        --dark-color: #1f2937;
        --light-color: #f9fafb;
        --text-muted: #6b7280;
        --border-color: #e5e7eb;
    }
    
    .dashboard-welcome {
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
        color: white;
        padding: 30px;
        border-radius: 18px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
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
        border: 1px solid var(--border-color);
        transition: all 0.3s ease;
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        position: relative;
        overflow: hidden;
    }
    
    .big-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.08);
    }

    #current-time {
        font-size: 55px;
        font-weight: 700;
        color: var(--primary-color);
    }

    #current-date {
        font-size: 22px;
        font-weight: 600;
        color: var(--text-muted);
    }

    .card-stat {
        padding: 25px;
        border-radius: 16px;
        transition: all 0.3s ease;
        background: white;
        border: 1px solid var(--border-color);
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        position: relative;
    }
    
    /* Menghilangkan border warna-warni yang mencolok */
    .card-stat::before {
        display: none;
    }
    
    .card-stat:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.08);
        border-color: var(--primary-color);
    }
    
    .stat-title {
        font-size: 15px;
        font-weight: 600;
        color: var(--text-muted);
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
    
    /* Menggunakan warna yang lebih konsisten untuk ikon */
    .stat-icon { 
        background: var(--primary-light); 
        color: var(--primary-color); 
    }
    
    .stat-value {
        font-size: 32px;
        font-weight: bold;
        color: #1f2937;
    }
    
    .stat-change {
        font-size: 14px;
        margin-top: 5px;
        display: flex;
        align-items: center;
    }
    
    .stat-change.positive { color: var(--success-color); }
    .stat-change.negative { color: var(--danger-color); }
    
    .quick-action-card {
        padding: 20px;
        border-radius: 16px;
        background: white;
        border: 1px solid var(--border-color);
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        transition: all 0.3s ease;
        text-align: center;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    
    .quick-action-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.08);
        border-color: var(--primary-color);
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
        border-left: 3px solid var(--border-color);
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
        border: 3px solid var(--border-color);
    }
    
    .activity-item.new::before {
        background: var(--success-color);
        border-color: var(--success-color);
    }
    
    .activity-item.new {
        border-left-color: var(--success-color);
    }
    
    .chart-container {
        position: relative;
        height: 300px;
        width: 100%;
    }
    
    .chart-container-small {
        position: relative;
        height: 200px;
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
        <div class="big-card text-center">
            <h1 id="current-time">00:00:00</h1>
            <p class="text-muted">Jam Saat Ini</p>
        </div>
    </div>

    <div class="col-md-6">
        <div class="big-card text-center">
            <h3 id="current-date"></h3>
            <p class="text-muted">Hari Ini</p>
        </div>
    </div>
</div>

<h4 class="mt-5 mb-3 fw-bold">📊 Statistik Website</h4>

<div class="row g-4 mb-4">
    <div class="col-md-4">
        <div class="card-stat">
            <div class="stat-title">
                <div class="stat-icon">
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
        <div class="card-stat">
            <div class="stat-title">
                <div class="stat-icon">
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
        <div class="card-stat">
            <div class="stat-title">
                <div class="stat-icon">
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
        <div class="card-stat">
            <div class="stat-title">
                <div class="stat-icon">
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
        <div class="card-stat">
            <div class="stat-title">
                <div class="stat-icon">
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
        <div class="card-stat">
            <div class="stat-title">
                <div class="stat-icon">
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
        <div class="card border-0">
            <div class="card-body">
                <h5 class="card-title fw-bold mb-4">Grafik Kunjungan Website</h5>
                <div class="chart-container">
                    <canvas id="visitsChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="card border-0">
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

<!-- Tambahan grafik baru -->
<div class="row g-4 mb-4">
    <div class="col-md-6">
        <div class="card border-0">
            <div class="card-body">
                <h5 class="card-title fw-bold mb-4">Distribusi Konten</h5>
                <div class="chart-container-small">
                    <canvas id="contentChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="card border-0">
            <div class="card-body">
                <h5 class="card-title fw-bold mb-4">Statistik Bulanan</h5>
                <div class="chart-container-small">
                    <canvas id="monthlyStatsChart"></canvas>
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
                <div class="quick-action-icon" style="background: var(--primary-color);">
                    <i class="bi bi-plus-circle"></i>
                </div>
                <h6 class="fw-bold">Tambah Artikel</h6>
            </div>
        </a>
    </div>
    
    <div class="col-md-3">
        <a href="{{ route('admin.prestasi.create') }}" class="text-decoration-none">
            <div class="quick-action-card">
                <div class="quick-action-icon" style="background: var(--primary-color);">
                    <i class="bi bi-trophy-fill"></i>
                </div>
                <h6 class="fw-bold">Tambah Prestasi</h6>
            </div>
        </a>
    </div>
    
    <div class="col-md-3">
        <a href="{{ route('admin.galeri.create') }}" class="text-decoration-none">
            <div class="quick-action-card">
                <div class="quick-action-icon" style="background: var(--primary-color);">
                    <i class="bi bi-image-fill"></i>
                </div>
                <h6 class="fw-bold">Tambah Galeri</h6>
            </div>
        </a>
    </div>
    
    <div class="col-md-3">
        <a href="{{ route('admin.users.create') }}" class="text-decoration-none">
            <div class="quick-action-card">
                <div class="quick-action-icon" style="background: var(--primary-color);">
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
    
    // Chart initialization for visits
    const ctx = document.getElementById('visitsChart').getContext('2d');
    const visitsChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
            datasets: [{
                label: 'Kunjungan',
                data: [65, 78, 90, 81, 96, 105, 120],
                fill: true,
                backgroundColor: 'rgba(79, 70, 229, 0.1)',
                borderColor: 'rgba(79, 70, 229, 1)',
                tension: 0.4,
                pointBackgroundColor: 'rgba(79, 70, 229, 1)',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgba(79, 70, 229, 1)'
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
    
    // New chart for content distribution
    const contentCtx = document.getElementById('contentChart').getContext('2d');
    const contentChart = new Chart(contentCtx, {
        type: 'doughnut',
        data: {
            labels: ['Artikel', 'Prestasi', 'Galeri', 'Produk', 'Lainnya'],
            datasets: [{
                data: [128, 52, 340, 87, 45],
                backgroundColor: [
                    'rgba(79, 70, 229, 0.8)',
                    'rgba(99, 102, 241, 0.8)',
                    'rgba(16, 185, 129, 0.8)',
                    'rgba(245, 158, 11, 0.8)',
                    'rgba(107, 114, 128, 0.8)'
                ],
                borderWidth: 0
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        padding: 15,
                        font: {
                            size: 12
                        }
                    }
                }
            }
        }
    });
    
    // New chart for monthly statistics
    const monthlyCtx = document.getElementById('monthlyStatsChart').getContext('2d');
    const monthlyStatsChart = new Chart(monthlyCtx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [
                {
                    label: 'Artikel',
                    data: [12, 19, 15, 25, 22, 30],
                    backgroundColor: 'rgba(79, 70, 229, 0.7)'
                },
                {
                    label: 'Prestasi',
                    data: [7, 11, 5, 8, 12, 9],
                    backgroundColor: 'rgba(16, 185, 129, 0.7)'
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        padding: 15,
                        font: {
                            size: 12
                        }
                    }
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