<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Program MP - SMKN 1 Kawali</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#10b981", // Warna hijau emerald untuk tema bisnis/profesional
                        secondary: "#059669",
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
            border-bottom: 3px solid #10b981;
            color: #10b981;
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
        /* Latar belakang polos, tanpa pattern */
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
                        Manajemen <br> Perkantoran
                    </h1>

                    <p class="text-gray-100 text-lg leading-relaxed mb-8 max-w-xl">
                        Jurusan yang membentuk profesional administrasi yang andal, mahir dalam komunikasi bisnis,
                        pengelolaan informasi, dan penggunaan teknologi perkantoran modern.
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
                        src="https://sfile.chatglm.cn/images-ppt/9a1b2c3d4e5f.jpg" <!-- Gambar placeholder kantor/profesional -->
                        alt="Siswa MP"
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
                    <div class="text-4xl font-bold text-primary mb-2">110+</div>
                    <div class="text-gray-600 dark:text-gray-400">Siswa Aktif</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-primary mb-2">7</div>
                    <div class="text-gray-600 dark:text-gray-400">Guru Profesional</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-primary mb-2">98%</div>
                    <div class="text-gray-600 dark:text-gray-400">Tingkat Kelulusan</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-primary mb-2">95%</div>
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
                                        <span class="material-icons text-primary mr-3 mt-1">business_center</span>
                                        <div>
                                            <h4 class="font-semibold text-gray-900 dark:text-white">Nama Jurusan</h4>
                                            <p class="text-gray-600 dark:text-gray-400">Manajemen Perkantoran</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">tag</span>
                                        <div>
                                            <h4 class="font-semibold text-gray-900 dark:text-white">Kode Jurusan</h4>
                                            <p class="text-gray-600 dark:text-gray-400">MP</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">history</span>
                                        <div>
                                            <h4 class="font-semibold text-gray-900 dark:text-white">Tahun Berdiri</h4>
                                            <p class="text-gray-600 dark:text-gray-400">2011</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">description</span>
                                        <div>
                                            <h4 class="font-semibold text-gray-900 dark:text-white">Deskripsi</h4>
                                            <p class="text-gray-600 dark:text-gray-400">Jurusan MP mempersiapkan siswa menjadi tenaga administrasi profesional yang mampu mengelola korespondensi, arsip digital, dan tata usaha kantor dengan memanfaatkan teknologi informasi.</p>
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
                                            <p class="text-gray-600 dark:text-gray-400">110 siswa (sekitar 27-28 siswa per kelas)</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">person</span>
                                        <div>
                                            <h4 class="font-semibold text-gray-900 dark:text-white">Jumlah Guru</h4>
                                            <p class="text-gray-600 dark:text-gray-400">7 guru profesional dengan pengalaman industri</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">business</span>
                                        <div>
                                            <h4 class="font-semibold text-gray-900 dark:text-white">Mitra Industri</h4>
                                            <p class="text-gray-600 dark:text-gray-400">Kantor pemerintahan, perusahaan swasta, dan BUMN</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">work</span>
                                        <div>
                                            <h4 class="font-semibold text-gray-900 dark:text-white">Prospek Kerja</h4>
                                            <p class="text-gray-600 dark:text-gray-400">Sekretaris, Admin, Staff HR, Customer Service, dll.</p>
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
                                    <span class="material-icons text-primary">apartment</span>
                                </div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Lab Simulasi Kantor</h4>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Dilengkapi dengan meja kerja, komputer, dan telepon untuk simulasi kerja nyata.</p>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 hover:shadow-lg transition">
                                <div class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                    <span class="material-icons text-primary">record_voice_over</span>
                                </div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Lab Bahasa</h4>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Untuk meningkatkan kemampuan komunikasi bisnis dalam bahasa asing.</p>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 hover:shadow-lg transition">
                                <div class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                    <span class="material-icons text-primary">groups</span>
                                </div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Lab Komunikasi</h4>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Area untuk latihan public speaking dan presentasi dengan peralatan lengkap.</p>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 hover:shadow-lg transition">
                                <div class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                    <span class="material-icons text-primary">menu_book</span>
                                </div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Perpustakaan Bisnis</h4>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Koleksi khusus buku manajemen, administrasi, dan pengembangan diri.</p>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 hover:shadow-lg transition">
                                <div class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                    <span class="material-icons text-primary">cloud_done</span>
                                </div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Ruang Arsip Digital</h4>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Praktikum pengelolaan dokumen dan arsip berbasis cloud.</p>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 hover:shadow-lg transition">
                                <div class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                    <span class="material-icons text-primary">weekend</span>
                                </div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Lounge Bisnis</h4>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Ruang informal untuk diskusi, networking, dan pengembangan ide.</p>
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
                                            <span class="material-icons text-3xl">business_center</span>
                                        </div>
                                        <h4 class="font-bold text-lg">Kepala Jurusan</h4>
                                        <p class="text-sm opacity-90">Ibu Ratna Sari Dewi, S.Pd., M.M.</p>
                                    </div>
                                </div>
                                
                                <!-- Guru Produktif -->
                                <div class="org-chart flex justify-center mb-8">
                                    <div class="flex gap-4">
                                        <div class="org-chart-item bg-gray-100 dark:bg-gray-800 rounded-xl p-4 text-center max-w-xs">
                                            <div class="w-16 h-16 bg-primary bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-3">
                                                <span class="material-icons text-primary">assignment</span>
                                            </div>
                                            <h4 class="font-semibold text-gray-900 dark:text-white">Guru Produktif Administrasi</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">4 Guru</p>
                                        </div>
                                        <div class="org-chart-item bg-gray-100 dark:bg-gray-800 rounded-xl p-4 text-center max-w-xs">
                                            <div class="w-16 h-16 bg-primary bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-3">
                                                <span class="material-icons text-primary">school</span>
                                            </div>
                                            <h4 class="font-semibold text-gray-900 dark:text-white">Guru Normatif & Bahasa</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">3 Guru</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Struktur Kelas -->
                                <div class="grid md:grid-cols-2 gap-6">
                                    <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                                        <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Struktur Kelas X MP</h4>
                                        <div class="space-y-3">
                                            <div class="flex items-center">
                                                <span class="material-icons text-primary mr-3 text-sm">person</span>
                                                <span class="text-gray-700 dark:text-gray-300">Wali Kelas: Ibu Lestari Handayani, S.Pd.</span>
                                            </div>
                                            <div class="flex items-center">
                                                <span class="material-icons text-primary mr-3 text-sm">groups</span>
                                                <span class="text-gray-700 dark:text-gray-300">Ketua Kelas: Andika Pratama</span>
                                            </div>
                                            <div class="flex items-center">
                                                <span class="material-icons text-primary mr-3 text-sm">groups</span>
                                                <span class="text-gray-700 dark:text-gray-300">Wakil Ketua: Sarah Amalia</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                                        <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Struktur Kelas XI MP</h4>
                                        <div class="space-y-3">
                                            <div class="flex items-center">
                                                <span class="material-icons text-primary mr-3 text-sm">person</span>
                                                <span class="text-gray-700 dark:text-gray-300">Wali Kelas: Bapak Bambang Sutrisno, S.E.</span>
                                            </div>
                                            <div class="flex items-center">
                                                <span class="material-icons text-primary mr-3 text-sm">groups</span>
                                                <span class="text-gray-700 dark:text-gray-300">Ketua Kelas: Rizki Ahmad</span>
                                            </div>
                                            <div class="flex items-center">
                                                <span class="material-icons text-primary mr-3 text-sm">groups</span>
                                                <span class="text-gray-700 dark:text-gray-300">Wakil Ketua: Fitria Nur</span>
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
                                        <span class="text-gray-700 dark:text-gray-300">Korespondensi & Tata Usaha Kantor</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1 text-sm">check_circle</span>
                                        <span class="text-gray-700 dark:text-gray-300">Manajemen Arsip (Fisik & Digital)</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1 text-sm">check_circle</span>
                                        <span class="text-gray-700 dark:text-gray-300">Pengelolaan Data dengan Spreadsheet</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1 text-sm">check_circle</span>
                                        <span class="text-gray-700 dark:text-gray-300">Administrasi Kepegawaian & Gaji</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1 text-sm">check_circle</span>
                                        <span class="text-gray-700 dark:text-gray-300">Etika Profesi & Pelayanan Prima</span>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Kompetensi Pendukung</h4>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1 text-sm">check_circle</span>
                                        <span class="text-gray-700 dark:text-gray-300">Komunikasi Bisnis & Protokoler</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1 text-sm">check_circle</span>
                                        <span class="text-gray-700 dark:text-gray-300">Public Speaking & Presentasi</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1 text-sm">check_circle</span>
                                        <span class="text-gray-700 dark:text-gray-300">Aplikasi Perkantoran (Word, Excel, PPT)</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1 text-sm">check_circle</span>
                                        <span class="text-gray-700 dark:text-gray-300">Dasar-Dasar Akuntansi & Budgeting</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1 text-sm">check_circle</span>
                                        <span class="text-gray-700 dark:text-gray-300">Kewirausahaan & Digital Marketing</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="mt-8 p-6 bg-emerald-50 dark:bg-emerald-900 dark:bg-opacity-20 rounded-xl">
                            <h4 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">Peluang Karir</h4>
                            <p class="text-gray-700 dark:text-gray-300 mb-4">Lulusan MP adalah aset vital bagi setiap perusahaan, dengan peluang karir yang luas dan stabil:</p>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                <div class="text-center">
                                    <div class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">description</span>
                                    </div>
                                    <p class="text-sm text-gray-700 dark:text-gray-300">Sekretaris</p>
                                </div>
                                <div class="text-center">
                                    <div class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">admin_panel_settings</span>
                                    </div>
                                    <p class="text-sm text-gray-700 dark:text-gray-300">Admin Perkantoran</p>
                                </div>
                                <div class="text-center">
                                    <div class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">people</span>
                                    </div>
                                    <p class="text-sm text-gray-700 dark:text-gray-300">Staff HRD</p>
                                </div>
                                <div class="text-center">
                                    <div class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">support_agent</span>
                                    </div>
                                    <p class="text-sm text-gray-700 dark:text-gray-300">Customer Service</p>
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
                    <img src="https://picsum.photos/seed/mp1/400/300.jpg" alt="Kegiatan MP" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/mp2/400/300.jpg" alt="Kegiatan MP" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/mp3/400/300.jpg" alt="Kegiatan MP" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/mp4/400/300.jpg" alt="Kegiatan MP" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/mp5/400/300.jpg" alt="Kegiatan MP" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/mp6/400/300.jpg" alt="Kegiatan MP" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/mp7/400/300.jpg" alt="Kegiatan MP" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/mp8/400/300.jpg" alt="Kegiatan MP" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
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
                        <img src="https://picsum.photos/seed/alumni-mp1/100/100.jpg" alt="Alumni" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Sandra Dewi</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Alumni 2020 - Sekretaris Direktur</p>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 italic">"Jurusan MP mengajarkan saya bukan hanya soal administrasi, tapi juga etika dan cara berkomunikasi yang profesional. Ini bekal yang sangat berharga."</p>
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
                        <img src="https://picsum.photos/seed/alumni-mp2/100/100.jpg" alt="Alumni" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Hendra Kusuma</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Alumni 2021 - Staff Administrasi</p>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 italic">"Praktikum di Lab Simulasi Kantor sangat membantu. Saya sudah terbiasa dengan rutinitas kerja kantor sebelum benar-benar terjun ke dunia kerja."</p>
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
                        <img src="https://picsum.photos/seed/alumni-mp3/100/100.jpg" alt="Alumni" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Maya Sari</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Alumni 2022 - Customer Service Lead</p>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 italic">"Pelatihan public speaking dan service excellent di jurusan MP adalah kunci sukses saya di bidang customer service. Terima kasih SMKN 1 Kawali!"</p>
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
                Tertarik Menjadi Profesional Administrasi?
            </h2>
            <p class="text-xl text-gray-100 mb-8 max-w-2xl mx-auto">
                Bangun karir di balik kesuksesan sebuah perusahaan. Daftar sekarang dan jadi ahli manajemen perkantoran!
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