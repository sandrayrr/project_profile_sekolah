<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Program TKR - SMKN 1 Kawali</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#f97316", // Warna oranye untuk tema otomotif/energik
                        secondary: "#ea580c",
                        "background-light": "#f9fafb",
                        "background-dark": "#111827",
                        "card-light": "#ffffff",
                        "card-dark": "#1f2937",
                        "border-light": "#e5e7eb",
                        "border-dark": "#374151",
                    },
                    fontFamily: {
                        body: ["Inter", "sans-serif"],
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.6s ease-out',
                        'float': 'float 3s ease-in-out infinite',
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(10px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        float: {
                            '0%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-10px)' },
                            '100%': { transform: 'translateY(0px)' },
                        }
                    }
                },
            },
        };
    </script>

    <style>
        .tab-active {
            border-bottom: 3px solid #f97316;
            color: #f97316;
        }
        .org-chart {
            position: relative;
        }
        .org-chart::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 2px;
            background-color: #e5e7eb;
            z-index: 0;
        }
        .dark .org-chart::before {
            background-color: #374151;
        }
        .org-chart-item {
            position: relative;
            z-index: 1;
        }
        .org-chart-item::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 2px;
            height: 30px;
            background-color: #e5e7eb;
            transform: translate(-50%, -100%);
        }
        .dark .org-chart-item::before {
            background-color: #374151;
        }
        .org-chart-item:last-child::before {
            display: none;
        }
        .automotive-bg {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23f97316' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-100 font-body automotive-bg">

    @include('layouts.navbar')

    <!-- HERO -->
    <section class="relative bg-gradient-to-br from-primary to-secondary dark:from-gray-700 dark:to-gray-900 py-20 overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="absolute top-0 right-0 w-64 h-64 bg-white opacity-5 rounded-full -mr-32 -mt-32"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-white opacity-5 rounded-full -ml-48 -mb-48"></div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <!-- LEFT -->
                <div class="lg:w-1/2">
                    <span class="text-gray-100 font-semibold text-base mb-3 block">
                        Kompetensi Keahlian
                    </span>

                    <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6 text-white">
                        Teknik Kendaraan <br> Ringan
                    </h1>

                    <p class="text-gray-100 text-lg leading-relaxed mb-8 max-w-xl">
                        Jurusan yang mendalami seni perbaikan dan perawatan mesin, dari sepeda motor
                        hingga mobil modern. Jadilah ahli di balik mesin yang bertenaga.
                    </p>

                    <div class="flex flex-wrap gap-4">
                        <a href="#"
                            class="bg-white text-primary px-8 py-4 rounded-xl font-medium hover:bg-gray-100 transition shadow-lg">
                            Daftar Sekarang
                        </a>
                        <a href="#informasi"
                            class="border border-white text-white px-8 py-4 rounded-xl font-medium hover:bg-white hover:text-primary transition">
                            Pelajari Lebih Lanjut
                        </a>
                    </div>
                </div>

                <!-- RIGHT -->
                <div class="lg:w-1/2 flex justify-center">
                    <img
                        src="https://sfile.chatglm.cn/images-ppt/5c8d9e2f1a3b.jpg" <!-- Gambar placeholder mekanik -->
                        alt="Siswa TKR"
                        class="w-full max-w-xl h-[420px] object-cover rounded-2xl shadow-2xl">
                </div>
            </div>
        </div>
    </section>

    <!-- STATISTICS -->
    <section class="py-16 bg-white dark:bg-gray-800">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-4xl font-bold text-primary mb-2">180+</div>
                    <div class="text-gray-600 dark:text-gray-400">Siswa Aktif</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-primary mb-2">12</div>
                    <div class="text-gray-600 dark:text-gray-400">Guru Profesional</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-primary mb-2">96%</div>
                    <div class="text-gray-600 dark:text-gray-400">Tingkat Kelulusan</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-primary mb-2">94%</div>
                    <div class="text-gray-600 dark:text-gray-400">Terserap Kerja</div>
                </div>
            </div>
        </div>
    </section>

    <!-- INFORMASI JURUSAN -->
    <section id="informasi" class="py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-900 dark:text-white">
                Informasi Jurusan
            </h2>
            
            <!-- TABS -->
            <div class="flex flex-wrap justify-center mb-10 border-b border-gray-200 dark:border-gray-700">
                <button class="tab-btn px-6 py-3 font-medium text-gray-700 dark:text-gray-300 hover:text-primary transition tab-active" data-tab="identitas">
                    Identitas
                </button>
                <button class="tab-btn px-6 py-3 font-medium text-gray-700 dark:text-gray-300 hover:text-primary transition" data-tab="fasilitas">
                    Fasilitas
                </button>
                <button class="tab-btn px-6 py-3 font-medium text-gray-700 dark:text-gray-300 hover:text-primary transition" data-tab="struktur">
                    Struktur Organisasi
                </button>
                <button class="tab-btn px-6 py-3 font-medium text-gray-700 dark:text-gray-300 hover:text-primary transition" data-tab="kompetensi">
                    Kompetensi
                </button>
            </div>
            
            <!-- TAB CONTENT -->
            <div class="tab-content">
                <!-- IDENTITAS -->
                <div id="identitas" class="tab-pane">
                    <div class="bg-card-light dark:bg-card-dark rounded-2xl shadow-lg p-8">
                        <div class="grid md:grid-cols-2 gap-8">
                            <div>
                                <h3 class="text-2xl font-bold mb-6 text-gray-900 dark:text-white">Identitas Jurusan</h3>
                                <div class="space-y-4">
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">build</span>
                                        <div>
                                            <h4 class="font-semibold text-gray-900 dark:text-white">Nama Jurusan</h4>
                                            <p class="text-gray-600 dark:text-gray-400">Teknik Kendaraan Ringan</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">tag</span>
                                        <div>
                                            <h4 class="font-semibold text-gray-900 dark:text-white">Kode Jurusan</h4>
                                            <p class="text-gray-600 dark:text-gray-400">TKR</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">history</span>
                                        <div>
                                            <h4 class="font-semibold text-gray-900 dark:text-white">Tahun Berdiri</h4>
                                            <p class="text-gray-600 dark:text-gray-400">2009</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">description</span>
                                        <div>
                                            <h4 class="font-semibold text-gray-900 dark:text-white">Deskripsi</h4>
                                            <p class="text-gray-600 dark:text-gray-400">Jurusan TKR mempersiapkan siswa menjadi tenaga ahli yang mampu melakukan perawatan, perbaikan, dan overhaul mesin pada sepeda motor dan mobil. Fokus pada sistem mesin, kelistrikan, dan chassis kendaraan.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold mb-6 text-gray-900 dark:text-white">Data Statistik</h3>
                                <div class="space-y-4">
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">people</span>
                                        <div>
                                            <h4 class="font-semibold text-gray-900 dark:text-white">Jumlah Siswa</h4>
                                            <p class="text-gray-600 dark:text-gray-400">180 siswa (45 siswa per kelas)</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">person</span>
                                        <div>
                                            <h4 class="font-semibold text-gray-900 dark:text-white">Jumlah Guru</h4>
                                            <p class="text-gray-600 dark:text-gray-400">12 guru profesional dengan sertifikasi otomotif</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">business</span>
                                        <div>
                                            <h4 class="font-semibold text-gray-900 dark:text-white">Mitra Industri</h4>
                                            <p class="text-gray-600 dark:text-gray-400">25+ bengkel resmi, dealer, dan industri komponen</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">work</span>
                                        <div>
                                            <h4 class="font-semibold text-gray-900 dark:text-white">Prospek Kerja</h4>
                                            <p class="text-gray-600 dark:text-gray-400">Mekanik, Foreman, Service Advisor, dll.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- FASILITAS -->
                <div id="fasilitas" class="tab-pane hidden">
                    <div class="bg-card-light dark:bg-card-dark rounded-2xl shadow-lg p-8">
                        <h3 class="text-2xl font-bold mb-6 text-gray-900 dark:text-white">Fasilitas Jurusan</h3>
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 hover:shadow-lg transition">
                                <div class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                    <span class="material-icons text-primary">directions_car</span>
                                </div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Bengkel Otomotif</h4>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Area kerja luas dengan 20 pit lengkap peralatan perbaikan umum.</p>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 hover:shadow-lg transition">
                                <div class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                    <span class="material-icons text-primary">settings</span>
                                </div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Bengkel Mesin</h4>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Khusus pembongkaran, pemasangan, dan balancing komponen mesin.</p>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 hover:shadow-lg transition">
                                <div class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                    <span class="material-icons text-primary">electrical_services</span>
                                </div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Lab Kelistrikan</h4>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Lengkap dengan alat diagnostic multimeter dan scanner OBD-II.</p>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 hover:shadow-lg transition">
                                <div class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                    <span class="material-icons text-primary">sync</span>
                                </div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Area Spooring & Balancing</h4>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Mesin spooring dan wheel balancing modern untuk setting kaki-kaki.</p>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 hover:shadow-lg transition">
                                <div class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                    <span class="material-icons text-primary">format_paint</span>
                                </div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Bengkel Body Repair</h4>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Area untuk praktikum ketok magic, dempul, dan dasar pengecatan.</p>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 hover:shadow-lg transition">
                                <div class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                    <span class="material-icons text-primary">local_fire_department</span>
                                </div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Bengkel Las</h4>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Peralatan las argon dan listrik untuk praktikum perbaikan chassis.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- STRUKTUR ORGANISASI -->
                <div id="struktur" class="tab-pane hidden">
                    <div class="bg-card-light dark:bg-card-dark rounded-2xl shadow-lg p-8">
                        <h3 class="text-2xl font-bold mb-6 text-gray-900 dark:text-white">Struktur Organisasi Jurusan</h3>
                        <div class="overflow-x-auto">
                            <div class="min-w-full">
                                <!-- Kepala Jurusan -->
                                <div class="flex justify-center mb-8">
                                    <div class="bg-primary text-white rounded-xl p-6 text-center max-w-xs">
                                        <div class="w-20 h-20 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4">
                                            <span class="material-icons text-3xl">build</span>
                                        </div>
                                        <h4 class="font-bold text-lg">Kepala Jurusan</h4>
                                        <p class="text-sm opacity-90">Bapak Joko Prasetyo, S.T.</p>
                                    </div>
                                </div>
                                
                                <!-- Guru Produktif -->
                                <div class="org-chart flex justify-center mb-8">
                                    <div class="flex gap-4">
                                        <div class="org-chart-item bg-gray-100 dark:bg-gray-800 rounded-xl p-4 text-center max-w-xs">
                                            <div class="w-16 h-16 bg-primary bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-3">
                                                <span class="material-icons text-primary">settings</span>
                                            </div>
                                            <h4 class="font-semibold text-gray-900 dark:text-white">Guru Mesin & Powertrain</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">7 Guru</p>
                                        </div>
                                        <div class="org-chart-item bg-gray-100 dark:bg-gray-800 rounded-xl p-4 text-center max-w-xs">
                                            <div class="w-16 h-16 bg-primary bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-3">
                                                <span class="material-icons text-primary">electrical_services</span>
                                            </div>
                                            <h4 class="font-semibold text-gray-900 dark:text-white">Guru Kelistrikan & Chassis</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">5 Guru</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Struktur Kelas -->
                                <div class="grid md:grid-cols-2 gap-6">
                                    <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                                        <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Struktur Kelas X TKR</h4>
                                        <div class="space-y-3">
                                            <div class="flex items-center">
                                                <span class="material-icons text-primary mr-3 text-sm">person</span>
                                                <span class="text-gray-700 dark:text-gray-300">Wali Kelas: Bapak Supriadi, S.Pd.</span>
                                            </div>
                                            <div class="flex items-center">
                                                <span class="material-icons text-primary mr-3 text-sm">groups</span>
                                                <span class="text-gray-700 dark:text-gray-300">Ketua Kelas: Indra Gunawan</span>
                                            </div>
                                            <div class="flex items-center">
                                                <span class="material-icons text-primary mr-3 text-sm">groups</span>
                                                <span class="text-gray-700 dark:text-gray-300">Wakil Ketua: Dina Kartika</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                                        <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Struktur Kelas XI TKR</h4>
                                        <div class="space-y-3">
                                            <div class="flex items-center">
                                                <span class="material-icons text-primary mr-3 text-sm">person</span>
                                                <span class="text-gray-700 dark:text-gray-300">Wali Kelas: Bapak Eko Hidayat, S.T.</span>
                                            </div>
                                            <div class="flex items-center">
                                                <span class="material-icons text-primary mr-3 text-sm">groups</span>
                                                <span class="text-gray-700 dark:text-gray-300">Ketua Kelas: Ahmad Fauzi</span>
                                            </div>
                                            <div class="flex items-center">
                                                <span class="material-icons text-primary mr-3 text-sm">groups</span>
                                                <span class="text-gray-700 dark:text-gray-300">Wakil Ketua: Rani Permata</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- KOMPETENSI -->
                <div id="kompetensi" class="tab-pane hidden">
                    <div class="bg-card-light dark:bg-card-dark rounded-2xl shadow-lg p-8">
                        <h3 class="text-2xl font-bold mb-6 text-gray-900 dark:text-white">Kompetensi Jurusan</h3>
                        <div class="grid md:grid-cols-2 gap-8">
                            <div>
                                <h4 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Kompetensi Inti</h4>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1 text-sm">check_circle</span>
                                        <span class="text-gray-700 dark:text-gray-300">Perawatan Sistem Engine (Mesin Bensin & Diesel)</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1 text-sm">check_circle</span>
                                        <span class="text-gray-700 dark:text-gray-300">Perbaikan Sistem Bahan Bakar & Injeksi</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1 text-sm">check_circle</span>
                                        <span class="text-gray-700 dark:text-gray-300">Overhaul Mesin (Top & Major Overhaul)</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1 text-sm">check_circle</span>
                                        <span class="text-gray-700 dark:text-gray-300">Perbaikan Sistem Kelistrikan & Pengapian</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1 text-sm">check_circle</span>
                                        <span class="text-gray-700 dark:text-gray-300">Perawatan & Perbaikan Sistem Transmisi</span>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Kompetensi Pendukung</h4>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1 text-sm">check_circle</span>
                                        <span class="text-gray-700 dark:text-gray-300">Perbaikan Sistem Kaki-Kaki & Kemudi</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1 text-sm">check_circle</span>
                                        <span class="text-gray-700 dark:text-gray-300">Las dan Fabrikasi Dasar (Chassis)</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1 text-sm">check_circle</span>
                                        <span class="text-gray-700 dark:text-gray-300">Diagnostik Kendaraan dengan Scanner</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1 text-sm">check_circle</span>
                                        <span class="text-gray-700 dark:text-gray-300">Tata Kelola Bengkel (Service Advisor)</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1 text-sm">check_circle</span>
                                        <span class="text-gray-700 dark:text-gray-300">Keselamatan & Kesehatan Kerja (K3L)</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="mt-8 p-6 bg-orange-50 dark:bg-orange-900 dark:bg-opacity-20 rounded-xl">
                            <h4 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">Peluang Karir</h4>
                            <p class="text-gray-700 dark:text-gray-300 mb-4">Lulusan TKR adalah tenaga terampil yang sangat dibutuhkan di industri otomotif yang terus berkembang:</p>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                <div class="text-center">
                                    <div class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">build</span>
                                    </div>
                                    <p class="text-sm text-gray-700 dark:text-gray-300">Mekanik Ahli</p>
                                </div>
                                <div class="text-center">
                                    <div class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">support_agent</span>
                                    </div>
                                    <p class="text-sm text-gray-700 dark:text-gray-300">Service Advisor</p>
                                </div>
                                <div class="text-center">
                                    <div class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">engineering</span>
                                    </div>
                                    <p class="text-sm text-gray-700 dark:text-gray-300">Foreman Bengkel</p>
                                </div>
                                <div class="text-center">
                                    <div class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">store</span>
                                    </div>
                                    <p class="text-sm text-gray-700 dark:text-gray-300">Wirausaha Bengkel</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GALLERY -->
    <section class="py-20 bg-white dark:bg-gray-800">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-900 dark:text-white">
                Galeri Kegiatan
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/tkr1/400/300.jpg" alt="Kegiatan TKR" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/tkr2/400/300.jpg" alt="Kegiatan TKR" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/tkr3/400/300.jpg" alt="Kegiatan TKR" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/tkr4/400/300.jpg" alt="Kegiatan TKR" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/tkr5/400/300.jpg" alt="Kegiatan TKR" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/tkr6/400/300.jpg" alt="Kegiatan TKR" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/tkr7/400/300.jpg" alt="Kegiatan TKR" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/tkr8/400/300.jpg" alt="Kegiatan TKR" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONI -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-900 dark:text-white">
                Apa Kata Alumni
            </h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-card-light dark:bg-card-dark rounded-2xl shadow-lg p-6">
                    <div class="flex items-center mb-4">
                        <img src="https://picsum.photos/seed/alumni-tkr1/100/100.jpg" alt="Alumni" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Rizki Ramadhan</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Alumni 2021 - Mekanik Head di Dealer Resmi</p>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 italic">"Peralatan di bengkel sekolah sangat lengkap, hampir sama dengan bengkel profesional. Ini membuat transisi ke dunia kerja menjadi sangat mudah."</p>
                    <div class="flex mt-4">
                        <span class="material-icons text-yellow-500 text-sm">star</span>
                        <span class="material-icons text-yellow-500 text-sm">star</span>
                        <span class="material-icons text-yellow-500 text-sm">star</span>
                        <span class="material-icons text-yellow-500 text-sm">star</span>
                        <span class="material-icons text-yellow-500 text-sm">star</span>
                    </div>
                </div>
                <div class="bg-card-light dark:bg-card-dark rounded-2xl shadow-lg p-6">
                    <div class="flex items-center mb-4">
                        <img src="https://picsum.photos/seed/alumni-tkr2/100/100.jpg" alt="Alumni" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Siti Nurhaliza</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Alumni 2020 - Owner Bengkel Spesialis AC Mobil</p>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 italic">"Ilmu yang saya dapatkan tidak hanya soal mesin, tapi juga cara berkomunikasi dengan pelanggan. Sekarang saya bisa mengelola bengkel sendiri."</p>
                    <div class="flex mt-4">
                        <span class="material-icons text-yellow-500 text-sm">star</span>
                        <span class="material-icons text-yellow-500 text-sm">star</span>
                        <span class="material-icons text-yellow-500 text-sm">star</span>
                        <span class="material-icons text-yellow-500 text-sm">star</span>
                        <span class="material-icons text-yellow-500 text-sm">star</span>
                    </div>
                </div>
                <div class="bg-card-light dark:bg-card-dark rounded-2xl shadow-lg p-6">
                    <div class="flex items-center mb-4">
                        <img src="https://picsum.photos/seed/alumni-tkr3/100/100.jpg" alt="Alumni" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Doni Pradana</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Alumni 2022 - Service Advisor</p>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 italic">"Pelatihan service advisor di sekolah sangat membantu. Saya tidak hanya jago di mesin, tapi juga bisa menganalisis kebutuhan kendaraan pelanggan."</p>
                    <div class="flex mt-4">
                        <span class="material-icons text-yellow-500 text-sm">star</span>
                        <span class="material-icons text-yellow-500 text-sm">star</span>
                        <span class="material-icons text-yellow-500 text-sm">star</span>
                        <span class="material-icons text-yellow-500 text-sm">star</span>
                        <span class="material-icons text-gray-300 dark:text-gray-600 text-sm">star</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-20 bg-gradient-to-br from-primary to-secondary dark:from-gray-700 dark:to-gray-900">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6 text-white">
                Tertarik Menjadi Ahli Otomotif?
            </h2>
            <p class="text-xl text-gray-100 mb-8 max-w-2xl mx-auto">
                Ubah passion Anda terhadap mesin menjadi karir yang solid. Daftar sekarang dan kuasai dunia otomotif!
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="#" class="bg-white text-primary px-8 py-4 rounded-xl font-medium hover:bg-gray-100 transition shadow-lg">
                    Daftar Sekarang
                </a>
                <a href="#" class="border border-white text-white px-8 py-4 rounded-xl font-medium hover:bg-white hover:text-primary transition">
                    Download Brosur
                </a>
            </div>
        </div>
    </section>

    @include('layouts.footer')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Tab functionality
            const tabBtns = document.querySelectorAll('.tab-btn');
            const tabPanes = document.querySelectorAll('.tab-pane');
            
            tabBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const tabId = this.getAttribute('data-tab');
                    
                    // Remove active class from all tabs and panes
                    tabBtns.forEach(tab => tab.classList.remove('tab-active'));
                    tabPanes.forEach(pane => pane.classList.add('hidden'));
                    
                    // Add active class to clicked tab and show corresponding pane
                    this.classList.add('tab-active');
                    document.getElementById(tabId).classList.remove('hidden');
                });
            });
        });
    </script>
</body>
</html>