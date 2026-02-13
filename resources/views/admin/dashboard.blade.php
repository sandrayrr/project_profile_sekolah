@extends('admin.layout')

@section('title', 'Dashboard Admin SMKN 1 Kawali')

@section('content')
    <style>
        :root {
            /* Warna yang terinspirasi dari logo SMKN 1 Kawali */
            --primary-blue: #0056b3;
            --primary-yellow: #ffc107;
            --primary-red: #dc3545;
            --secondary-blue: #4a6cf7;
            --secondary-purple: #7c3aed;
            --secondary-pink: #ec4899;
            --light-blue: #e6f2ff;
            --light-yellow: #fff8e1;
            --light-red: #ffebee;
            --dark-color: #1a1a2e;
            --light-color: #f5f5f5;
            --text-muted: #6c757d;
            --border-color: #e0e0e0;
            --gradient-primary: linear-gradient(135deg, var(--primary-blue) 0%, #0040a0 100%);
            --gradient-accent: linear-gradient(135deg, var(--primary-yellow) 0%, #ff9800 100%);
            --gradient-secondary: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
            --gradient-success: linear-gradient(135deg, #10b981 0%, #059669 100%);
            --gradient-danger: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
            --gradient-dark: linear-gradient(135deg, #1a1a2e 0%, #0f0f1e 100%);
            --gradient-modern: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --gradient-vibrant: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            --shadow-sm: 0 2px 4px rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px rgba(0, 0, 0, 0.07);
            --shadow-lg: 0 10px 15px rgba(0, 0, 0, 0.1);
            --shadow-xl: 0 20px 25px rgba(0, 0, 0, 0.1);
            --shadow-2xl: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            color: var(--dark-color);
            position: relative;
            overflow-x: hidden;
            line-height: 1.6;
            min-height: 100vh;
        }

        /* Animasi */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(30px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        @keyframes shimmer {
            0% {
                background-position: -1000px 0;
            }

            100% {
                background-position: 1000px 0;
            }
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        @keyframes blob {
            0% {
                transform: translate(0px, 0px) scale(1);
            }

            33% {
                transform: translate(30px, -50px) scale(1.1);
            }

            66% {
                transform: translate(-20px, 20px) scale(0.9);
            }

            100% {
                transform: translate(0px, 0px) scale(1);
            }
        }

        .fade-in {
            animation: fadeIn 0.8s ease-out;
        }

        .slide-in-left {
            animation: slideInLeft 0.8s ease-out;
        }

        .slide-in-right {
            animation: slideInRight 0.8s ease-out;
        }

        .slide-in-up {
            animation: slideInUp 0.8s ease-out;
        }

        .pulse-animation {
            animation: pulse 2s infinite;
        }

        .float-animation {
            animation: float 3s ease-in-out infinite;
        }

        /* Watermark Logo Sekolah di tengah halaman */
        .watermark-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .school-logo-watermark {
            width: 600px;
            height: 600px;
            background-image: url('https://z-cdn-media.chatglm.cn/files/87692716-b454-4f10-975a-68b6e0678b15.png?auth_key=1867942909-fa1d2338d8714febac500b8f54a413df-0-48e85327eb38ab7c1cb8680e2576aa2d');
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
            opacity: 0.05;
            filter: grayscale(100%) contrast(1.2);
        }

        .school-text-watermark {
            font-size: 5rem;
            font-weight: 900;
            color: var(--dark-color);
            opacity: 0.02;
            letter-spacing: 0.5rem;
            text-transform: uppercase;
            margin-top: 2rem;
            transform: rotate(-5deg);
        }

        /* Background Pattern */
        .bg-pattern {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: radial-gradient(var(--primary-blue) 1px, transparent 1px);
            background-size: 30px 30px;
            opacity: 0.03;
            z-index: -2;
        }

        /* Modern Background Elements */
        .bg-blob {
            position: fixed;
            border-radius: 50%;
            filter: blur(40px);
            opacity: 0.4;
            z-index: -1;
        }

        .blob-1 {
            top: 10%;
            left: 10%;
            width: 300px;
            height: 300px;
            background: var(--gradient-primary);
            animation: blob 7s infinite;
        }

        .blob-2 {
            bottom: 10%;
            right: 10%;
            width: 400px;
            height: 400px;
            background: var(--gradient-accent);
            animation: blob 9s infinite;
        }

        .blob-3 {
            top: 50%;
            right: 30%;
            width: 250px;
            height: 250px;
            background: var(--gradient-secondary);
            animation: blob 11s infinite;
        }

        /* Container */
        .container-fluid {
            padding: 2rem;
            max-width: 1400px;
            margin: 0 auto;
        }

        /* Header Dashboard */
        .dashboard-header {
            background: var(--gradient-primary);
            color: white;
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: var(--shadow-2xl);
            position: relative;
            overflow: hidden;
            margin-bottom: 2rem;
        }

        .dashboard-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('/admin/Foto SMKN 2.jpeg');
            background-size: cover;
            background-position: center;
            opacity: 0.1;
            z-index: 0;
        }

        .dashboard-header::after {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0) 70%);
            z-index: 0;
        }

        .dashboard-header-content {
            position: relative;
            z-index: 1;
        }

        .dashboard-header h1 {
            font-weight: 700;
            margin-bottom: 0.5rem;
            font-size: 2.5rem;
            letter-spacing: -0.02em;
        }

        .dashboard-header p {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 1.5rem;
        }

        .info-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 0.75rem;
        }

        .info-badge {
            background: rgba(255, 255, 255, 0.2);
            padding: 0.5rem 1rem;
            border-radius: 50px;
            display: inline-flex;
            align-items: center;
            backdrop-filter: blur(5px);
            transition: all 0.3s ease;
            font-size: 0.9rem;
        }

        .info-badge:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-3px);
        }

        .info-badge i {
            margin-right: 0.5rem;
        }

        /* Kartu Statistik */
        .stat-card {
            background: white;
            border-radius: 20px;
            padding: 1.5rem;
            box-shadow: var(--shadow-lg);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            margin-bottom: 1.5rem;
            height: 100%;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-2xl);
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: var(--gradient-primary);
        }

        .stat-card.yellow::before {
            background: var(--gradient-accent);
        }

        .stat-card.red::before {
            background: var(--gradient-danger);
        }

        .stat-card.green::before {
            background: var(--gradient-success);
        }

        .stat-card::after {
            content: '';
            position: absolute;
            bottom: -50px;
            right: -50px;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background: var(--gradient-primary);
            opacity: 0.05;
        }

        .stat-icon {
            width: 70px;
            height: 70px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            font-size: 1.8rem;
            color: white;
            position: relative;
            z-index: 1;
            box-shadow: var(--shadow-md);
        }

        .stat-icon.blue {
            background: var(--gradient-primary);
        }

        .stat-icon.yellow {
            background: var(--gradient-accent);
        }

        .stat-icon.red {
            background: var(--gradient-danger);
        }

        .stat-icon.green {
            background: var(--gradient-success);
        }

        .stat-value {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--dark-color);
            margin-bottom: 0.5rem;
            line-height: 1.2;
        }

        .stat-label {
            font-size: 1rem;
            color: var(--text-muted);
            margin-bottom: 1.5rem;
            font-weight: 500;
        }

        .stat-change {
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            font-weight: 600;
            padding: 0.5rem 0.75rem;
            border-radius: 10px;
            background: rgba(0, 86, 179, 0.05);
            width: fit-content;
        }

        .stat-change.positive {
            color: var(--primary-blue);
        }

        .stat-change.negative {
            color: var(--primary-red);
        }

        .stat-change i {
            margin-right: 0.5rem;
        }

        /* Chart Container */
        .chart-container {
            background: white;
            border-radius: 20px;
            padding: 1.5rem;
            box-shadow: var(--shadow-lg);
            margin-bottom: 1.5rem;
            position: relative;
            overflow: hidden;
            height: 100%;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .chart-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: var(--gradient-modern);
        }

        .chart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .chart-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--dark-color);
        }

        .chart-actions {
            display: flex;
            gap: 0.5rem;
        }

        .chart-action-btn {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--light-blue);
            color: var(--primary-blue);
            border: none;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .chart-action-btn:hover {
            background: var(--primary-blue);
            color: white;
            transform: scale(1.1);
        }

        .chart-canvas-container {
            position: relative;
            height: 300px;
            width: 100%;
        }

        .chart-legend {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .chart-legend-item {
            display: flex;
            align-items: center;
            font-size: 0.9rem;
            color: var(--text-muted);
        }

        .chart-legend-color {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            margin-right: 0.5rem;
        }

        /* Tombol */
        .btn {
            padding: 0.75rem 1.5rem;
            border-radius: 12px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            font-size: 1rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .btn i {
            margin-right: 0.5rem;
        }

        .btn-primary {
            background: var(--gradient-primary);
            color: white;
            box-shadow: var(--shadow-md);
        }

        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .btn-primary:hover::before {
            left: 100%;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-xl);
        }

        .btn-outline-primary {
            background: transparent;
            color: var(--primary-blue);
            border: 2px solid var(--primary-blue);
        }

        .btn-outline-primary:hover {
            background: var(--primary-blue);
            color: white;
        }

        /* Floating Action Button */
        .fab-container {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            z-index: 100;
        }

        .fab {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: var(--gradient-primary);
            color: white;
            border: none;
            box-shadow: var(--shadow-xl);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            transition: all 0.3s ease;
        }

        .fab:hover {
            transform: scale(1.1);
            box-shadow: var(--shadow-2xl);
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .container-fluid {
                padding: 1.5rem;
            }

            .dashboard-header {
                padding: 2rem;
            }

            .dashboard-header h1 {
                font-size: 2.2rem;
            }

            .stat-value {
                font-size: 2.2rem;
            }
        }

        @media (max-width: 992px) {
            .container-fluid {
                padding: 1.2rem;
            }

            .dashboard-header {
                padding: 1.8rem;
            }

            .dashboard-header h1 {
                font-size: 2rem;
            }

            .stat-value {
                font-size: 2rem;
            }

            .chart-canvas-container {
                height: 250px;
            }
        }

        @media (max-width: 768px) {
            .container-fluid {
                padding: 1rem;
            }

            .dashboard-header {
                padding: 1.5rem;
            }

            .dashboard-header h1 {
                font-size: 1.8rem;
            }

            .stat-value {
                font-size: 1.8rem;
            }

            .school-logo-watermark {
                width: 300px;
                height: 300px;
            }

            .school-text-watermark {
                font-size: 2.5rem;
            }

            .info-badges {
                flex-direction: column;
                gap: 0.5rem;
            }

            .chart-canvas-container {
                height: 200px;
            }

            .chart-legend {
                gap: 0.5rem;
            }

            .chart-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }
        }

        @media (max-width: 576px) {
            .dashboard-header {
                padding: 1.2rem;
            }

            .dashboard-header h1 {
                font-size: 1.6rem;
            }

            .stat-value {
                font-size: 1.6rem;
            }

            .chart-canvas-container {
                height: 180px;
            }

            .fab {
                width: 50px;
                height: 50px;
                font-size: 1.2rem;
            }
                    /* ... CSS yang sudah ada ... */

        /* ==================== TAMBAHAN CSS KALENDER ==================== */
        .calendar-header-actions {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .calendar-month-year {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--dark-color);
            min-width: 150px;
            text-align: center;
        }

        .calendar-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }

        .calendar-table th {
            font-weight: 600;
            color: var(--text-muted);
            padding: 0.75rem 0.5rem;
            font-size: 0.9rem;
            text-align: center;
        }

        .calendar-table td {
            padding: 0.5rem;
            text-align: center;
            vertical-align: middle;
        }

        .calendar-day {
            width: 40px;
            height: 40px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            font-weight: 600;
            color: var(--dark-color);
            transition: all 0.2s ease;
            cursor: pointer;
            position: relative;
        }

        .calendar-day:hover {
            background-color: var(--light-blue);
            transform: scale(1.1);
        }

        .calendar-day.today {
            background: var(--gradient-primary);
            color: white;
            box-shadow: var(--shadow-md);
        }

        .calendar-day.today::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
            width: 4px;
            height: 4px;
            background: var(--primary-blue);
            border-radius: 50%;
        }
        
        .calendar-day.other-month {
            color: var(--text-muted);
            opacity: 0.5;
        }
        /* ==================== AKHIR CSS KALENDER ==================== */
        }
    </style>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Background Pattern -->
    <div class="bg-pattern"></div>

    <!-- Modern Background Elements -->
    <div class="bg-blob blob-1"></div>
    <div class="bg-blob blob-2"></div>
    <div class="bg-blob blob-3"></div>

    <!-- Watermark Container -->
    <div class="watermark-container">
        <div class="school-logo-watermark"></div>
        <div class="school-text-watermark">SMKN 1 Kawali</div>
    </div>

    <div class="container-fluid">
        <!-- Header Dashboard -->
        <div class="dashboard-header fade-in">
            <div class="dashboard-header-content">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-7">
                        <h1>Dashboard Admin</h1>
                        <p>SMKN 1 Kawali - Kab. Ciamis</p>
                        <div class="info-badges">
                            <span class="info-badge">
                                <i class="bi bi-calendar3"></i> {{ now()->format('d F Y') }}
                            </span>
                            <span class="info-badge">
                                <i class="bi bi-clock"></i> <span id="current-time"></span>
                            </span>
                            {{-- Script Jam Real Time --}}
                            <script>
                                function updateTime() {
                                    const now = new Date();

                                    // Format jam:menit:detik
                                    const hours = String(now.getHours()).padStart(2, '0');
                                    const minutes = String(now.getMinutes()).padStart(2, '0');
                                    const seconds = String(now.getSeconds()).padStart(2, '0');

                                    const timeString = `${hours}:${minutes}:${seconds}`;
                                    document.getElementById('current-time').textContent = timeString;
                                }

                                // Update setiap 1 detik
                                updateTime(); // panggil langsung supaya muncul tanpa delay
                                setInterval(updateTime, 1000);
                            </script>
                            <span class="info-badge">
                                <i class="bi bi-person-circle"></i> Admin
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 text-end">
                        <div class="header-actions d-flex flex-column align-items-end gap-1">
                            <!-- Greeting utama -->
                            <div class="info-badge greeting-badge"
                                style="background: rgba(255,255,255,0.15); backdrop-filter: blur(5px); border-radius: 16px; padding: 0.8rem 1.2rem; cursor: default; box-shadow: var(--shadow-md); text-align: right; position: relative; overflow: hidden;">
                                <span id="timeGreeting"
                                    style="font-size: 1.2rem; font-weight: 400; color: white; display: inline-block;">
                                    Selamat Pagi 🌅
                                </span>
                                <br>
                                <small style="font-size: 0.85rem; font-weight:500; color: white;">SMK BISA - HEBAT!</small>
                            </div>
                        </div>
                        <script>
                            function updateGreeting() {
                                const greetingEl = document.getElementById('timeGreeting');
                                const now = new Date();
                                const hour = now.getHours();
                                let greeting = '';
                                let emoji = '';

                                // Aturan jam baru
                                if (hour >= 19 || hour < 0) { // 19:00 - 00:00
                                    greeting = "Selamat Malam";
                                    emoji = "🌙";
                                } else if (hour >= 0 && hour < 9) { // 00:00 - 09:00
                                    greeting = "Selamat Pagi";
                                    emoji = "🌅";
                                } else if (hour >= 9 && hour < 14) { // 09:00 - 14:00
                                    greeting = "Selamat Siang";
                                    emoji = "☀️";
                                } else if (hour >= 14 && hour < 19) { // 14:00 - 19:00
                                    greeting = "Selamat Sore";
                                    emoji = "🌇";
                                }

                                greetingEl.innerHTML = `${greeting} ${emoji}`;
                            }

                            // Update saat load halaman
                            updateGreeting();
                            setInterval(updateGreeting, 60000);
                        </script>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistik Utama -->
        <div class="row mb-4">
            <div class="col-xl-3 col-lg-6 col-md-6 mb-3 fade-in" style="animation-delay: 0.1s;">
                <div class="stat-card">
                    <div class="stat-icon blue">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="stat-value">{{ $siswaNow }}</div>
                    <div class="stat-label">Total Siswa</div>
                    <div class="stat-change {{ $siswaGrowth >= 0 ? 'positive' : 'negative' }}">
                        <i class="bi {{ $siswaGrowth >= 0 ? 'bi-arrow-up' : 'bi-arrow-down' }}"></i>
                        {{ abs($siswaGrowth) }}% dari tahun lalu
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 mb-3 fade-in" style="animation-delay: 0.2s;">
                <div class="stat-card yellow">
                    <div class="stat-icon yellow">
                        <i class="bi bi-person-badge-fill"></i>
                    </div>
                    <div class="stat-value">{{ $guruNow }}</div>
                    <div class="stat-label">Total Guru</div>
                    <div class="stat-change {{ $guruGrowth >= 0 ? 'positive' : 'negative' }}">
                        <i class="bi {{ $guruGrowth >= 0 ? 'bi-arrow-up' : 'bi-arrow-down' }}"></i>
                        {{ abs($guruGrowth) }}% dari tahun lalu
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 mb-3 fade-in" style="animation-delay: 0.3s;">
                <div class="stat-card">
                    <div class="stat-icon blue">
                        <i class="bi bi-building"></i>
                    </div>
                    <div class="stat-value">{{ $jurusanNow }}</div>
                    <div class="stat-label">Jurusan</div>
                    <div class="stat-change {{ $jurusanGrowth >= 0 ? 'positive' : 'negative' }}">
                        <i class="bi {{ $jurusanGrowth >= 0 ? 'bi-arrow-up' : 'bi-arrow-down' }}"></i>
                        {{ abs($jurusanGrowth) }}% dari tahun lalu
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 mb-3 fade-in" style="animation-delay: 0.4s;">
                <div class="stat-card red">
                    <div class="stat-icon red">
                        <i class="bi bi-trophy-fill"></i>
                    </div>
                    <div class="stat-value">{{ $prestasiNow }}</div>
                    <div class="stat-label">Prestasi</div>
                    <div class="stat-change {{ $prestasiGrowth >= 0 ? 'positive' : 'negative' }}">
                        <i class="bi {{ $prestasiGrowth >= 0 ? 'bi-arrow-up' : 'bi-arrow-down' }}"></i>
                        {{ abs($prestasiGrowth) }}% dari tahun lalu
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <script>
        // Update waktu
        function updateTime() {
            const now = new Date();
            document.getElementById('current-time').innerHTML = now.toLocaleTimeString('id-ID', {
                hour: '2-digit', minute: '2-digit'
            });
        }
        setInterval(updateTime, 1000);
        updateTime();

        // FAB click handler
        document.querySelector('.fab').addEventListener('click', function () {
            // Redirect to create content page or show modal
            window.location.href = '{{ route("admin.artikel.create") }}';
        });

        // Chart configurations
        const chartOptions = {
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
        };

        // Real-time Line Chart
        const realtimeCtx = document.getElementById('realtimeChart').getContext('2d');
        const realtimeChart = new Chart(realtimeCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [
                    {
                        label: 'Siswa',
                        data: [1200, 1210, 1225, 1230, 1240, 1248],
                        borderColor: 'rgba(54, 162, 235, 0.8)',
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        tension: 0.4,
                        fill: true
                    },
                    {
                        label: 'Guru',
                        data: [80, 81, 82, 83, 85, 86],
                        borderColor: 'rgba(255, 193, 7, 0.8)',
                        backgroundColor: 'rgba(255, 193, 7, 0.2)',
                        tension: 0.4,
                        fill: true
                    },
                    {
                        label: 'Prestasi',
                        data: [45, 46, 48, 49, 50, 52],
                        borderColor: 'rgba(75, 192, 192, 0.8)',
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        tension: 0.4,
                        fill: true
                    }
                ]
            },
            options: chartOptions
        });

        // Jurusan Doughnut Chart
        const jurusanCtx = document.getElementById('jurusanChart').getContext('2d');
        const jurusanChart = new Chart(jurusanCtx, {
            type: 'doughnut',
            data: {
                labels: ['RPL', 'TKJ', 'Multimedia', 'PPLG', 'AKL', 'OTKP'],
                datasets: [{
                    data: [320, 280, 240, 200, 120, 88],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.8)',
                        'rgba(54, 162, 235, 0.8)',
                        'rgba(255, 206, 86, 0.8)',
                        'rgba(75, 192, 192, 0.8)',
                        'rgba(153, 102, 255, 0.8)',
                        'rgba(255, 159, 64, 0.8)'
                    ],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });

        // Pendaftaran Bar Chart
        const pendaftaranCtx = document.getElementById('pendaftaranChart').getContext('2d');
        const pendaftaranChart = new Chart(pendaftaranCtx, {
            type: 'bar',
            data: {
                labels: ['2018', '2019', '2020', '2021', '2022', '2023'],
                datasets: [{
                    label: 'Pendaftaran',
                    data: [180, 220, 190, 250, 280, 320],
                    backgroundColor: 'rgba(54, 162, 235, 0.8)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: chartOptions
        });

        // Activity Chart
        const activityCtx = document.getElementById('activityChart').getContext('2d');
        const activityChart = new Chart(activityCtx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [
                    {
                        label: 'Event',
                        data: [12, 19, 15, 25, 22, 30],
                        backgroundColor: 'rgba(255, 99, 132, 0.8)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Kompetisi',
                        data: [8, 11, 13, 15, 12, 18],
                        backgroundColor: 'rgba(54, 162, 235, 0.8)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }
                ]
            },
            options: chartOptions
        });

        // Update functions for charts
        function updateLineChart() {
            realtimeChart.data.datasets.forEach(dataset => {
                dataset.data = dataset.data.map(value => {
                    return value + Math.floor(Math.random() * 10) - 5;
                });
            });
            realtimeChart.update();
        }

        function updateDoughnutChart() {
            jurusanChart.data.datasets[0].data = jurusanChart.data.datasets[0].data.map(value => {
                return value + Math.floor(Math.random() * 20) - 10;
            });
            jurusanChart.update();
        }

        function updateBarChart() {
            pendaftaranChart.data.datasets[0].data = pendaftaranChart.data.datasets[0].data.map(value => {
                return value + Math.floor(Math.random() * 20) - 10;
            });
            pendaftaranChart.update();
        }

        function updateActivityChart() {
            activityChart.data.datasets.forEach(dataset => {
                dataset.data = dataset.data.map(value => {
                    return value + Math.floor(Math.random() * 5) - 2;
                });
            });
            activityChart.update();
        }

        function downloadLineChart() {
            const link = document.createElement('a');
            link.download = 'statistik.png';
            link.href = realtimeChart.toBase64Image();
            link.click();
        }

        // Auto update charts every 5 seconds
        setInterval(() => {
            updateLineChart();
        }, 5000);
    </script>
@endsection