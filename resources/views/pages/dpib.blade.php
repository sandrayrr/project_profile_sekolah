<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Program DPIB - SMKN 1 Kawali</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#14b8a6", // Warna teal untuk tema desain/kreatif
                        secondary: "#0d9488",
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
            border-bottom: 3px solid #14b8a6;
            color: #14b8a6;
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
    </style>
</head>

<body class="bg-white dark:bg-background-dark text-gray-800 dark:text-gray-100 font-body">

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
                        Desain Permodelan <br> dan Informasi Bangunan
                    </h1>

                    <p class="text-gray-100 text-lg leading-relaxed mb-8 max-w-xl">
                        Jurusan kreatif yang menggabungkan seni dan teknologi untuk merancang bangunan,
                        membuat model 3D, dan mengelola informasi konstruksi digital (BIM).
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
                        src="https://sfile.chatglm.cn/images-ppt/b1c2d3e4f5g6.jpg" <!-- Gambar placeholder desain arsitektur -->
                        alt="Siswa DPIB"
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
                    <div class="text-4xl font-bold text-primary mb-2">95+</div>
                    <div class="text-gray-600 dark:text-gray-400">Siswa Aktif</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-primary mb-2">6</div>
                    <div class="text-gray-600 dark:text-gray-400">Guru Profesional</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-primary mb-2">96%</div>
                    <div class="text-gray-600 dark:text-gray-400">Tingkat Kelulusan</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-primary mb-2">88%</div>
                    <div class="text-gray-600 dark:text-gray-400">Terserab Kerja</div>
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
                                        <span class="material-icons text-primary mr-3 mt-1">architecture</span>
                                        <div>
                                            <h4 class="font-semibold text-gray-900 dark:text-white">Nama Jurusan</h4>
                                            <p class="text-gray-600 dark:text-gray-400">Desain Permodelan dan Informasi Bangunan</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">tag</span>
                                        <div>
                                            <h4 class="font-semibold text-gray-900 dark:text-white">Kode Jurusan</h4>
                                            <p class="text-gray-600 dark:text-gray-400">DPIB</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">history</span>
                                        <div>
                                            <h4 class="font-semibold text-gray-900 dark:text-white">Tahun Berdiri</h4>
                                            <p class="text-gray-600 dark:text-gray-400">2015</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">description</span>
                                        <div>
                                            <h4 class="font-semibold text-gray-900 dark:text-white">Deskripsi</h4>
                                            <p class="text-gray-600 dark:text-gray-400">Jurusan DPIB fokus pada perancangan bangunan dengan memanfaatkan teknologi digital. Siswa belajar membuat gambar teknik 2D, model 3D, rendering fotorealistik, hingga penerapan BIM (Building Information Modeling).</p>
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
                                            <p class="text-gray-600 dark:text-gray-400">95 siswa (sekitar 23-24 siswa per kelas)</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">person</span>
                                        <div>
                                            <h4 class="font-semibold text-gray-900 dark:text-white">Jumlah Guru</h4>
                                            <p class="text-gray-600 dark:text-gray-400">6 guru profesional dengan latar belakang arsitektur & desain</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">business</span>
                                        <div>
                                            <h4 class="font-semibold text-gray-900 dark:text-white">Mitra Industri</h4>
                                            <p class="text-gray-600 dark:text-gray-400">Konsultan arsitek, developer properti, dan kontraktor</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">work</span>
                                        <div>
                                            <h4 class="font-semibold text-gray-900 dark:text-white">Prospek Kerja</h4>
                                            <p class="text-gray-600 dark:text-gray-400">Arsitek, 3D Visualizer, BIM Modeler, Drafter, dll.</p>
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
                                    <span class="material-icons text-primary">computer</span>
                                </div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Lab Desain & Gambar</h4>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">30 unit PC high-spec dengan software AutoCAD, SketchUp, Revit, dan 3ds Max.</p>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 hover:shadow-lg transition">
                                <div class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                    <span class="material-icons text-primary">view_in_ar</span>
                                </div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Studio Arsitektur</h4>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Ruang kreatif dengan meja gambar, papan tulis besar, dan pencahayaan optimal.</p>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 hover:shadow-lg transition">
                                <div class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                    <span class="material-icons text-primary">category</span>
                                </div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Workshop Maket</h4>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Lengkap dengan alat pemotong, perekat, dan berbagai material untuk membuat maket fisik.</p>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 hover:shadow-lg transition">
                                <div class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                    <span class="material-icons text-primary">print</span>
                                </div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Lab 3D Printing & Plotter</h4>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Printer 3D dan plotter untuk mencetak model fisik dan gambar teknik berukuran besar.</p>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 hover:shadow-lg transition">
                                <div class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                    <span class="material-icons text-primary">menu_book</span>
                                </div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Perpustakaan Desain</h4>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Koleksi buku referensi arsitektur, desain interior, dan material konstruksi.</p>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 hover:shadow-lg transition">
                                <div class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                    <span class="material-icons text-primary">slideshow</span>
                                </div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Ruang Presentasi</h4>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Dilengkapi proyektor dan layar besar untuk presentasi desain dan review.</p>
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
                                            <span class="material-icons text-3xl">architecture</span>
                                        </div>
                                        <h4 class="font-bold text-lg">Kepala Jurusan</h4>
                                        <p class="text-sm opacity-90">Bapak Firman Hakim, S.T., M.Ars.</p>
                                    </div>
                                </div>
                                
                                <!-- Guru Produktif -->
                                <div class="org-chart flex justify-center mb-8">
                                    <div class="flex gap-4">
                                        <div class="org-chart-item bg-gray-100 dark:bg-gray-800 rounded-xl p-4 text-center max-w-xs">
                                            <div class="w-16 h-16 bg-primary bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-3">
                                                <span class="material-icons text-primary">brush</span>
                                            </div>
                                            <h4 class="font-semibold text-gray-900 dark:text-white">Guru Desain & Permodelan</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">4 Guru</p>
                                        </div>
                                        <div class="org-chart-item bg-gray-100 dark:bg-gray-800 rounded-xl p-4 text-center max-w-xs">
                                            <div class="w-16 h-16 bg-primary bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-3">
                                                <span class="material-icons text-primary">straighten</span>
                                            </div>
                                            <h4 class="font-semibold text-gray-900 dark:text-white">Guru Gambar Teknik & Konstruksi</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">2 Guru</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Struktur Kelas -->
                                <div class="grid md:grid-cols-2 gap-6">
                                    <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                                        <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Struktur Kelas X DPIB</h4>
                                        <div class="space-y-3">
                                            <div class="flex items-center">
                                                <span class="material-icons text-primary mr-3 text-sm">person</span>
                                                <span class="text-gray-700 dark:text-gray-300">Wali Kelas: Ibu Indah Permata Sari, S.T.</span>
                                            </div>
                                            <div class="flex items-center">
                                                <span class="material-icons text-primary mr-3 text-sm">groups</span>
                                                <span class="text-gray-700 dark:text-gray-300">Ketua Kelas: Rizki Ananda</span>
                                            </div>
                                            <div class="flex items-center">
                                                <span class="material-icons text-primary mr-3 text-sm">groups</span>
                                                <span class="text-gray-700 dark:text-gray-300">Wakil Ketua: Dina Azahra</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                                        <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Struktur Kelas XI DPIB</h4>
                                        <div class="space-y-3">
                                            <div class="flex items-center">
                                                <span class="material-icons text-primary mr-3 text-sm">person</span>
                                                <span class="text-gray-700 dark:text-gray-300">Wali Kelas: Bapak Yudi Pratama, S.Pd.</span>
                                            </div>
                                            <div class="flex items-center">
                                                <span class="material-icons text-primary mr-3 text-sm">groups</span>
                                                <span class="text-gray-700 dark:text-gray-300">Ketua Kelas: Fajar Saputra</span>
                                            </div>
                                            <div class="flex items-center">
                                                <span class="material-icons text-primary mr-3 text-sm">groups</span>
                                                <span class="text-gray-700 dark:text-gray-300">Wakil Ketua: Siti Nurhaliza</span>
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
                                        <span class="text-gray-700 dark:text-gray-300">Menggambar Gambar Teknik 2D (Denah, Tampak, Potong)</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1 text-sm">check_circle</span>
                                        <span class="text-gray-700 dark:text-gray-300">Membuat Model 3D Bangunan dengan Software CAD</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1 text-sm">check_circle</span>
                                        <span class="text-gray-700 dark:text-gray-300">Rendering Presentasi 3D (Eksterior & Interior)</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1 text-sm">check_circle</span>
                                        <span class="text-gray-700 dark:text-gray-300">Menerapkan Konsep Building Information Modeling (BIM)</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1 text-sm">check_circle</span>
                                        <span class="text-gray-700 dark:text-gray-300">Membuat Maket Fisik dan Digital</span>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Kompetensi Pendukung</h4>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1 text-sm">check_circle</span>
                                        <span class="text-gray-700 dark:text-gray-300">Dasar-Dasar Desain Arsitektur & Estetika</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1 text-sm">check_circle</span>
                                        <span class="text-gray-700 dark:text-gray-300">Menghitung Rencana Anggaran Biaya (RAB)</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1 text-sm">check_circle</span>
                                        <span class="text-gray-700 dark:text-gray-300">Presentasi Desain dan Komunikasi Visual</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1 text-sm">check_circle</span>
                                        <span class="text-gray-700 dark:text-gray-300">Pemahaman Material & Struktur Bangunan</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1 text-sm">check_circle</span>
                                        <span class="text-gray-700 dark:text-gray-300">Fotografi & Videografi Arsitektur</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="mt-8 p-6 bg-teal-50 dark:bg-teal-900 dark:bg-opacity-20 rounded-xl">
                            <h4 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">Peluang Karir</h4>
                            <p class="text-gray-700 dark:text-gray-300 mb-4">Lulusan DPIB memiliki keterampilan yang sangat dicari di industri properti dan konstruksi:</p>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                <div class="text-center">
                                    <div class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">architecture</span>
                                    </div>
                                    <p class="text-sm text-gray-700 dark:text-gray-300">Arsitek</p>
                                </div>
                                <div class="text-center">
                                    <div class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">view_in_ar</span>
                                    </div>
                                    <p class="text-sm text-gray-700 dark:text-gray-300">3D Visualizer</p>
                                </div>
                                <div class="text-center">
                                    <div class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">view_in_ar</span>
                                    </div>
                                    <p class="text-sm text-gray-700 dark:text-gray-300">BIM Modeler</p>
                                </div>
                                <div class="text-center">
                                    <div class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">straighten</span>
                                    </div>
                                    <p class="text-sm text-gray-700 dark:text-gray-300">Drafter</p>
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
                    <img src="https://picsum.photos/seed/dpib1/400/300.jpg" alt="Kegiatan DPIB" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/dpib2/400/300.jpg" alt="Kegiatan DPIB" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/dpib3/400/300.jpg" alt="Kegiatan DPIB" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/dpib4/400/300.jpg" alt="Kegiatan DPIB" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/dpib5/400/300.jpg" alt="Kegiatan DPIB" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/dpib6/400/300.jpg" alt="Kegiatan DPIB" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/dpib7/400/300.jpg" alt="Kegiatan DPIB" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/dpib8/400/300.jpg" alt="Kegiatan DPIB" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
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
                        <img src="https://picsum.photos/seed/alumni-dpib1/100/100.jpg" alt="Alumni" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Cahya Kusuma</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Alumni 2021 - 3D Visualis</p>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 italic">"Portfolio yang saya bangun di DPIB menjadi modal utama saya diterima di studio visualisasi ternama. Pembelajaran softwarenya sangat mendalam dan relevan industri."</p>
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
                        <img src="https://picsum.photos/seed/alumni-dpib2/100/100.jpg" alt="Alumni" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Lina Marlina</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Alumni 2020 - Arsitek Junior</p>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 italic">"Pembelajaran desain yang seimbang antara teori dan praktikum, ditambah dengan bimbingan dari guru yang ahli, membentuk fondasi arsitektur yang kuat bagi saya."</p>
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
                        <img src="https://picsum.photos/seed/alumni-dpib3/100/100.jpg" alt="Alumni" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Bayu Anggara</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Alumni 2022 - BIM Modeler</p>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 italic">"Kebetulan sekali, jurusan ini sudah mengajarkan BIM sejak dulu. Ini membuat saya langsung siap kerja dan menjadi unggul di proyek-proyek konstruksi besar."</p>
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
                Tertarik Menjadi Arsitek dan Desainer?
            </h2>
            <p class="text-xl text-gray-100 mb-8 max-w-2xl mx-auto">
                Wujudkan imajinasi Anda menjadi bangunan nyata. Daftar sekarang dan rancang masa depan Anda!
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