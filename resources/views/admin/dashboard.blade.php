@extends('admin.layout')

@section('title','Dashboard Admin')

@section('content')

<style>
    .dashboard-welcome {
        background: linear-gradient(135deg, #4f46e5, #6366f1);
        color: white;
        padding: 30px;
        border-radius: 18px;
        box-shadow: 0 6px 18px rgba(0,0,0,0.15);
    }

    .big-card {
        padding: 35px 20px;
        border-radius: 18px;
        background: #fff;
        border: none;
        transition: 0.3s ease;
    }
    .big-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.12);
    }

    #current-time {
        font-size: 55px;
        font-weight: 700;
        color: #4338ca;
    }

    #current-date {
        font-size: 22px;
        font-weight: 600;
        color: #4b5563;
    }

    .card-stat {
        padding: 20px;
        border-radius: 16px;
        transition: 0.3s ease;
        background: white;
        border-left: 6px solid #4f46e5;
    }
    .card-stat:hover {
        transform: translateY(-4px);
        box-shadow: 0 6px 20px rgba(0,0,0,0.12);
    }
    .stat-title {
        font-size: 15px;
        font-weight: 600;
        color: #6b7280;
    }
    .stat-value {
        font-size: 32px;
        font-weight: bold;
        margin-top: 5px;
        color: #111827;
    }
</style>

<div class="dashboard-welcome mb-4">
    <h2 class="fw-bold">Selamat Datang, Super Admin! 👑</h2>
    <p class="mt-1">Kelola seluruh konten dan data website dengan mudah melalui dashboard profesional ini.</p>
</div>

<div class="row g-4">
    <div class="col-md-6">
        <div class="big-card shadow-sm text-center">
            <h1 id="current-time">00:00:00</h1>
            <p class="text-muted">Jam Saat Ini</p>
        </div>
    </div>

    <div class="col-md-6">
        <div class="big-card shadow-sm text-center">
            <h3 id="current-date"></h3>
        </div>
    </div>
</div>

<h4 class="mt-5 mb-3 fw-bold">📊 Statistik Website</h4>

<div class="row g-4">
    <div class="col-md-4">
        <div class="card-stat shadow-sm">
            <div class="stat-title">Artikel Aktif</div>
            <div class="stat-value">128</div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card-stat shadow-sm">
            <div class="stat-title">Prestasi</div>
            <div class="stat-value">52</div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card-stat shadow-sm">
            <div class="stat-title">Galeri Foto</div>
            <div class="stat-value">340</div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card-stat shadow-sm">
            <div class="stat-title">Pesanan Baru</div>
            <div class="stat-value">14</div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card-stat shadow-sm">
            <div class="stat-title">Produk Aktif</div>
            <div class="stat-value">87</div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card-stat shadow-sm">
            <div class="stat-title">Transaksi Bulan Ini</div>
            <div class="stat-value">Rp 12.4 Jt</div>
        </div>
    </div>
</div>

<script>
    function updateTime() {
        const now = new Date();
        document.getElementById('current-time').innerHTML = now.toLocaleTimeString('id-ID');
        document.getElementById('current-date').innerHTML = now.toLocaleDateString('id-ID', {
            weekday:'long', year:'numeric', month:'long', day:'numeric'
        });
    }
    setInterval(updateTime, 1000);
    updateTime();
</script>

@endsection
