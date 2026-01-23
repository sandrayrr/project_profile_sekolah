<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Informasi Jurusan DPIB - SMKN 1 Kawali</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#14b8a6",
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

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .dark .card-hover:hover {
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
        }

        .info-section {
            border-left: 4px solid #14b8a6;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -8px;
            top: 8px;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background-color: #14b8a6;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-100 font-body">

    @include('layouts.navbar')

    <!-- HEADER JURUSAN -->
    <header class="bg-gradient-to-br from-primary to-secondary dark:from-gray-700 dark:to-gray-900 py-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center gap-8">
                <div class="md:w-2/3">
                    <div class="mb-4">
                        <span class="text-gray-100 font-semibold text-base">SMKN 1 Kawali</span>
                    </div>
                    <h1 class="text-3xl md:text-4xl font-bold text-white mb-4">
                        Jurusan Desain Permodelan dan Informasi Bangunan (DPIB)
                    </h1>
                    <p class="text-gray-100 text-lg mb-6">
                        Jurusan kreatif yang menggabungkan seni dan teknologi untuk merancang bangunan,
                        membuat model 3D, dan mengelola informasi konstruksi digital (BIM).
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-lg px-4 py-2 text-white">
                            <span class="material-icons mr-2 text-sm">people</span>
                            <span class="text-sm">95+ Siswa</span>
                        </div>
                        <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-lg px-4 py-2 text-white">
                            <span class="material-icons mr-2 text-sm">person</span>
                            <span class="text-sm">6 Guru Profesional</span>
                        </div>
                        <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-lg px-4 py-2 text-white">
                            <span class="material-icons mr-2 text-sm">history</span>
                            <span class="text-sm">Berdiri sejak 2015</span>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/3 flex justify-center">
                    <img src="https://sfile.chatglm.cn/images-ppt/b1c2d3e4f5g6.jpg" alt="Siswa DPIB"
                        class="w-full max-w-sm h-48 object-cover rounded-xl shadow-lg">
                </div>
            </div>
        </div>
    </header>

    <!-- INFORMASI JURUSAN -->
    <main class="py-12">
        <div class="container mx-auto px-4">
            <!-- TABS -->
            <div class="flex flex-wrap justify-center mb-8 border-b border-gray-200 dark:border-gray-700">
                <button
                    class="tab-btn px-6 py-3 font-medium text-gray-700 dark:text-gray-300 hover:text-primary transition tab-active"
                    data-tab="identitas">
                    Identitas
                </button>
                <button
                    class="tab-btn px-6 py-3 font-medium text-gray-700 dark:text-gray-300 hover:text-primary transition"
                    data-tab="fasilitas">
                    Fasilitas
                </button>
                <button
                    class="tab-btn px-6 py-3 font-medium text-gray-700 dark:text-gray-300 hover:text-primary transition"
                    data-tab="struktur">
                    Struktur Organisasi
                </button>
                <button
                    class="tab-btn px-6 py-3 font-medium text-gray-700 dark:text-gray-300 hover:text-primary transition"
                    data-tab="kompetensi">
                    Kompetensi
                </button>
                <button
                    class="tab-btn px-6 py-3 font-medium text-gray-700 dark:text-gray-300 hover:text-primary transition"
                    data-tab="kurikulum">
                    Kurikulum
                </button>
            </div>

            <!-- TAB CONTENT -->
            <div class="tab-content">
                <!-- IDENTITAS -->
                <div id="identitas" class="tab-pane">
                    <div class="bg-card-light dark:bg-card-dark rounded-2xl shadow-lg p-8">
                        <h3 class="text-2xl font-bold mb-6 text-gray-900 dark:text-white">Identitas Jurusan</h3>

                        <div class="mb-8">
                            <h4 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white">Profil Jurusan</h4>
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                                <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                                    Jurusan Desain Permodelan dan Informasi Bangunan (DPIB) di SMKN 1 Kawali dirancang
                                    untuk
                                    menghasilkan lulusan yang ahli dalam merancang, mengembangkan, dan memelihara
                                    desain bangunan serta informasi konstruksi digital. Dengan kurikulum yang selalu
                                    update sesuai kebutuhan
                                    industri, siswa dibekali dengan keterampilan teknis dan soft skill yang relevan
                                    untuk karir di era digital.
                                </p>
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-8">
                            <div>
                                <h4 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white">Data Jurusan</h4>
                                <div class="space-y-4">
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">architecture</span>
                                        <div>
                                            <h5 class="font-medium text-gray-900 dark:text-white">Nama Lengkap</h5>
                                            <p class="text-gray-600 dark:text-gray-400">Desain Permodelan dan Informasi
                                                Bangunan</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">school</span>
                                        <div>
                                            <h5 class="font-medium text-gray-900 dark:text-white">Kepala Jurusan</h5>
                                            <p class="text-gray-600 dark:text-gray-400">Bapak Firman Hakim, S.T., M.Ars.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">business</span>
                                        <div>
                                            <h5 class="font-medium text-gray-900 dark:text-white">Mitra Industri</h5>
                                            <p class="text-gray-600 dark:text-gray-400">Konsultan arsitek, developer
                                                properti, dan kontraktor</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white">Pencapaian</h4>
                                <div class="space-y-4">
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">trending_up</span>
                                        <div>
                                            <h5 class="font-medium text-gray-900 dark:text-white">Tingkat Kelulusan</h5>
                                            <p class="text-gray-600 dark:text-gray-400">96% (2022/2023)</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">work</span>
                                        <div>
                                            <h5 class="font-medium text-gray-900 dark:text-white">Tingkat Penyerapan
                                                Kerja</h5>
                                            <p class="text-gray-600 dark:text-gray-400">88% dalam 6 bulan setelah lulus
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">emoji_events</span>
                                        <div>
                                            <h5 class="font-medium text-gray-900 dark:text-white">Prestasi</h5>
                                            <p class="text-gray-600 dark:text-gray-400">Juara 1 Kompetisi Desain
                                                Arsitektur
                                                Tingkat Provinsi 2023</p>
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

                        <div class="mb-8">
                            <h4 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white">Laboratorium</h4>
                            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                        <span class="material-icons text-primary">computer</span>
                                    </div>
                                    <h5 class="font-semibold text-gray-900 dark:text-white mb-2">Lab Desain & Gambar
                                    </h5>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">30 unit PC high-spec untuk
                                        desain dan modeling</p>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Intel Core i7 Gen 11</li>
                                        <li>• RAM 16GB DDR4</li>
                                        <li>• SSD 512GB</li>
                                        <li>• Monitor 27" 4K</li>
                                    </ul>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                        <span class="material-icons text-primary">view_in_ar</span>
                                    </div>
                                    <h5 class="font-semibold text-gray-900 dark:text-white mb-2">Studio Arsitektur</h5>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">Ruang kreatif dengan meja
                                        gambar,
                                        papan tulis besar, dan pencahayaan optimal</p>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Meja gambar adjustable</li>
                                        <li>• Papan tulis interaktif</li>
                                        <li>• Pencahayaan natural & buatan</li>
                                        <li>• Area review desain</li>
                                    </ul>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                        <span class="material-icons text-primary">category</span>
                                    </div>
                                    <h5 class="font-semibold text-gray-900 dark:text-white mb-2">Workshop Maket</h5>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">Lengkap dengan alat
                                        pemotong,
                                        perekat, dan berbagai material untuk membuat maket fisik</p>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Alat pemotong presisi</li>
                                        <li>• Berbagai material maket</li>
                                        <li>• Area finishing & painting</li>
                                        <li>• Penyimpanan alat & material</li>
                                    </ul>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                        <span class="material-icons text-primary">print</span>
                                    </div>
                                    <h5 class="font-semibold text-gray-900 dark:text-white mb-2">Lab 3D Printing &
                                        Plotter</h5>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">Printer 3D dan plotter
                                        untuk mencetak
                                        model fisik dan gambar teknik berukuran besar</p>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• 3D Printer FDM & SLA</li>
                                        <li>• Plotter ukuran A0</li>
                                        <li>• Scanner 3D</li>
                                        <li>• Station laser cutting</li>
                                    </ul>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                        <span class="material-icons text-primary">menu_book</span>
                                    </div>
                                    <h5 class="font-semibold text-gray-900 dark:text-white mb-2">Perpustakaan Desain
                                    </h5>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">Koleksi buku referensi
                                        arsitektur,
                                        desain interior, dan material konstruksi</p>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Buku referensi arsitektur</li>
                                        <li>• Material samples library</li>
                                        <li>• Digital catalog & resources</li>
                                        <li>• Area baca & riset</li>
                                    </ul>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                        <span class="material-icons text-primary">slideshow</span>
                                    </div>
                                    <h5 class="font-semibold text-gray-900 dark:text-white mb-2">Ruang Presentasi</h5>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">Dilengkapi proyektor dan
                                        layar besar
                                        untuk presentasi desain dan review</p>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Proyektor 4K</li>
                                        <li>• Layar presentasi 120"</li>
                                        <li>• Sound system surround</li>
                                        <li>• VR showcase area</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h4 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white">Software & Lisensi</h4>
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                                    <div class="text-center">
                                        <div
                                            class="w-16 h-16 bg-white dark:bg-gray-700 rounded-lg flex items-center justify-center mx-auto mb-2">
                                            <span class="material-icons text-primary">architecture</span>
                                        </div>
                                        <p class="text-sm font-medium text-gray-900 dark:text-white">AutoCAD</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">Professional</p>
                                    </div>
                                    <div class="text-center">
                                        <div
                                            class="w-16 h-16 bg-white dark:bg-gray-700 rounded-lg flex items-center justify-center mx-auto mb-2">
                                            <span class="material-icons text-primary">view_in_ar</span>
                                        </div>
                                        <p class="text-sm font-medium text-gray-900 dark:text-white">Revit</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">BIM Suite</p>
                                    </div>
                                    <div class="text-center">
                                        <div
                                            class="w-16 h-16 bg-white dark:bg-gray-700 rounded-lg flex items-center justify-center mx-auto mb-2">
                                            <span class="material-icons text-primary">view_in_ar</span>
                                        </div>
                                        <p class="text-sm font-medium text-gray-900 dark:text-white">3ds Max</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">Design Suite</p>
                                    </div>
                                    <div class="text-center">
                                        <div
                                            class="w-16 h-16 bg-white dark:bg-gray-700 rounded-lg flex items-center justify-center mx-auto mb-2">
                                            <span class="material-icons text-primary">brush</span>
                                        </div>
                                        <p class="text-sm font-medium text-gray-900 dark:text-white">Adobe CC</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">All Apps</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- STRUKTUR ORGANISASI -->
                <div id="struktur" class="tab-pane hidden">
                    <div class="bg-card-light dark:bg-card-dark rounded-2xl shadow-lg p-8">
                        <h3 class="text-2xl font-bold mb-6 text-gray-900 dark:text-white">Struktur Organisasi Jurusan
                        </h3>

                        <!-- Kepala Jurusan -->
                        <div class="flex justify-center mb-8">
                            <div class="bg-primary text-white rounded-xl p-6 text-center max-w-xs card-hover">
                                <div
                                    class="w-20 h-20 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <span class="material-icons text-3xl">architecture</span>
                                </div>
                                <h4 class="font-bold text-lg">Kepala Jurusan</h4>
                                <p class="text-sm opacity-90">Bapak Firman Hakim, S.T., M.Ars.</p>
                                <p class="text-xs opacity-75 mt-2">NIP. 198504152009011001</p>
                            </div>
                        </div>

                        <!-- Guru Produktif -->
                        <div class="org-chart flex justify-center mb-8">
                            <div class="flex gap-4">
                                <div
                                    class="org-chart-item bg-gray-100 dark:bg-gray-800 rounded-xl p-4 text-center max-w-xs card-hover">
                                    <div
                                        class="w-16 h-16 bg-primary bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-3">
                                        <span class="material-icons text-primary">brush</span>
                                    </div>
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Guru Desain & Permodelan
                                    </h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">4 Guru</p>
                                </div>
                                <div
                                    class="org-chart-item bg-gray-100 dark:bg-gray-800 rounded-xl p-4 text-center max-w-xs card-hover">
                                    <div
                                        class="w-16 h-16 bg-primary bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-3">
                                        <span class="material-icons text-primary">straighten</span>
                                    </div>
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Guru Gambar Teknik &
                                        Konstruksi
                                    </h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">2 Guru</p>
                                </div>
                            </div>
                        </div>

                        <!-- Detail Guru -->
                        <div class="grid md:grid-cols-2 gap-6 mb-8">
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Guru Desain & Permodelan
                                </h4>
                                <div class="space-y-3">
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <p class="font-medium text-gray-900 dark:text-white">Ibu Indah Permata Sari,
                                            S.T.
                                        </p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Desain Arsitektur & Interior
                                        </p>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <p class="font-medium text-gray-900 dark:text-white">Bapak Ahmad Wijaya, S.Sn.
                                        </p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">3D Modeling & Rendering
                                        </p>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <p class="font-medium text-gray-900 dark:text-white">Ibu Rina Kartika, S.T.
                                        </p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">BIM & Informasi Bangunan
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Guru Gambar Teknik &
                                    Konstruksi
                                </h4>
                                <div class="space-y-3">
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <p class="font-medium text-gray-900 dark:text-white">Bapak Budi Santoso, S.T.
                                        </p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Gambar Teknik & Struktur
                                        </p>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <p class="font-medium text-gray-900 dark:text-white">Ibu Siti Nurhaliza, S.Pd.
                                        </p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Konstruksi Bangunan
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Struktur Kelas -->
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Struktur Kelas X DPIB</h4>
                                <div class="grid grid-cols-1 gap-3">
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <span class="text-gray-700 dark:text-gray-300">Wali Kelas: Ibu Indah Permata
                                            Sari, S.T.</span>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <span class="text-gray-700 dark:text-gray-300">Ketua Kelas: Rizki Ananda</span>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <span class="text-gray-700 dark:text-gray-300">Wakil Ketua: Dina Azahra</span>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Struktur Kelas XI DPIB</h4>
                                <div class="grid grid-cols-1 gap-3">
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <span class="text-gray-700 dark:text-gray-300">Wali Kelas: Bapak Yudi Pratama,
                                            S.Pd.</span>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <span class="text-gray-700 dark:text-gray-300">Ketua Kelas: Fajar Saputra</span>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <span class="text-gray-700 dark:text-gray-300">Wakil Ketua: Siti
                                            Nurhaliza</span>
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

                        <div class="grid md:grid-cols-2 gap-8 mb-8">
                            <div>
                                <h4 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Kompetensi Inti
                                </h4>
                                <div class="space-y-3">
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">architecture</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Menggambar Gambar
                                                    Teknik 2D
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Denah, Tampak,
                                                    Potong
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">view_in_ar</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Membuat Model 3D
                                                    Bangunan
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Software CAD
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">view_in_ar</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Rendering
                                                    Presentasi 3D
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Eksterior & Interior
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">view_in_ar</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Menerapkan Konsep
                                                    BIM
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Building Information
                                                    Modeling
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">category</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Membuat Maket
                                                    Fisik dan Digital
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Manual & 3D Printing
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Kompetensi
                                    Pendukung</h4>
                                <div class="space-y-3">
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">brush</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Dasar-Dasar Desain
                                                    Arsitektur
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Estetika & Komposisi
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">calculate</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Menghitung Rencana
                                                    Anggaran Biaya
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">RAB & Quantity
                                                    Surveying
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">slideshow</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Presentasi Desain
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Komunikasi Visual
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">layers</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Pemahaman Material
                                                    & Struktur
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Bangunan
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">photo_camera</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Fotografi &
                                                    Videografi
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Arsitektur
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="p-6 bg-teal-50 dark:bg-teal-900 dark:bg-opacity-20 rounded-xl">
                            <h4 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Peluang Karir</h4>
                            <p class="text-gray-700 dark:text-gray-300 mb-6">Lulusan DPIB memiliki keterampilan yang
                                sangat dicari di industri properti dan konstruksi:</p>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                <div class="bg-white dark:bg-gray-800 p-4 rounded-xl text-center card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">architecture</span>
                                    </div>
                                    <p class="text-sm font-medium text-gray-700 dark:text-gray-300">Arsitek</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">Rp 8-20 Juta/bulan</p>
                                </div>
                                <div class="bg-white dark:bg-gray-800 p-4 rounded-xl text-center card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">view_in_ar</span>
                                    </div>
                                    <p class="text-sm font-medium text-gray-700 dark:text-gray-300">3D Visualizer</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">Rp 7-18 Juta/bulan</p>
                                </div>
                                <div class="bg-white dark:bg-gray-800 p-4 rounded-xl text-center card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">view_in_ar</span>
                                    </div>
                                    <p class="text-sm font-medium text-gray-700 dark:text-gray-300">BIM Modeler</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">Rp 10-25 Juta/bulan</p>
                                </div>
                                <div class="bg-white dark:bg-gray-800 p-4 rounded-xl text-center card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">straighten</span>
                                    </div>
                                    <p class="text-sm font-medium text-gray-700 dark:text-gray-300">Drafter</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">Rp 5-12 Juta/bulan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- KURIKULUM -->
                <div id="kurikulum" class="tab-pane hidden">
                    <div class="bg-card-light dark:bg-card-dark rounded-2xl shadow-lg p-8">
                        <h3 class="text-2xl font-bold mb-6 text-gray-900 dark:text-white">Kurikulum Jurusan</h3>

                        <div class="mb-8">
                            <h4 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white">Struktur Kurikulum</h4>
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                                <p class="text-gray-700 dark:text-gray-300 mb-4">
                                    Jurusan DPIB menerapkan kurikulum berbasis kompetensi yang disesuaikan dengan
                                    kebutuhan industri desain dan konstruksi terkini. Kurikulum ini dirancang untuk
                                    memberikan
                                    keseimbangan antara teori dan praktik, dengan porsi 70% praktikum dan 30% teori.
                                </p>
                                <div class="grid md:grid-cols-3 gap-4">
                                    <div class="bg-white dark:bg-gray-700 p-4 rounded-lg">
                                        <h5 class="font-medium text-gray-900 dark:text-white mb-2">Kelas X</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Fokus pada dasar-dasar
                                            desain, gambar teknik, dan prinsip arsitektur</p>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-4 rounded-lg">
                                        <h5 class="font-medium text-gray-900 dark:text-white mb-2">Kelas XI</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Pengembangan desain
                                            bangunan,
                                            modeling 3D, dan pengenalan BIM</p>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-4 rounded-lg">
                                        <h5 class="font-medium text-gray-900 dark:text-white mb-2">Kelas XII</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Proyek desain lengkap,
                                            BIM lanjutan, dan persiapan kerja/entrepreneurship</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-8">
                            <h4 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white">Mata Pelajaran
                                Produktif</h4>
                            <div class="space-y-4">
                                <div>
                                    <h5 class="font-medium text-gray-900 dark:text-white mb-2">Kelas X</h5>
                                    <div class="grid md:grid-cols-2 gap-3">
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Dasar-Dasar
                                                Desain Arsitektur</p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Gambar Teknik Dasar
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Menggambar Manual &
                                                Digital
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Prinsip Desain
                                                Interior
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="font-medium text-gray-900 dark:text-white mb-2">Kelas XI</h5>
                                    <div class="grid md:grid-cols-2 gap-3">
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Desain Bangunan
                                                Lanjutan
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Modeling 3D &
                                                Rendering
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Struktur & Konstruksi
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Pengenalan BIM
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="font-medium text-gray-900 dark:text-white mb-2">Kelas XII</h5>
                                    <div class="grid md:grid-cols-2 gap-3">
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Proyek Desain
                                                Komprehensif
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• BIM Lanjutan &
                                                Koordinasi
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Manajemen Proyek
                                                Desain
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Praktik Kerja Lapangan
                                                (PKL)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h4 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white">Kegiatan
                                Ekstrakurikuler</h4>
                            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-4 card-hover">
                                    <div class="flex items-center mb-2">
                                        <span class="material-icons text-primary mr-2">architecture</span>
                                        <h5 class="font-medium text-gray-900 dark:text-white">Architecture Club</h5>
                                    </div>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Kompetisi desain,
                                        workshop arsitektur, dan kunjungan bangunan ikonik</p>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-4 card-hover">
                                    <div class="flex items-center mb-2">
                                        <span class="material-icons text-primary mr-2">view_in_ar</span>
                                        <h5 class="font-medium text-gray-900 dark:text-white">3D Modeling Club</h5>
                                    </div>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Modeling competition,
                                        workshop rendering, dan portfolio development</p>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-4 card-hover">
                                    <div class="flex items-center mb-2">
                                        <span class="material-icons text-primary mr-2">category</span>
                                        <h5 class="font-medium text-gray-900 dark:text-white">Maket Club</h5>
                                    </div>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Pembuatan maket
                                        skala, miniatur, dan architectural models</p>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-4 card-hover">
                                    <div class="flex items-center mb-2">
                                        <span class="material-icons text-primary mr-2">photo_camera</span>
                                        <h5 class="font-medium text-gray-900 dark:text-white">Photography Club</h5>
                                    </div>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Arsitektur photography,
                                        editing, dan visual storytelling</p>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-4 card-hover">
                                    <div class="flex items-center mb-2">
                                        <span class="material-icons text-primary mr-2">business</span>
                                        <h5 class="font-medium text-gray-900 dark:text-white">Design Entrepreneurship
                                        </h5>
                                    </div>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Startup desain,
                                        product development, dan personal branding</p>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-4 card-hover">
                                    <div class="flex items-center mb-2">
                                        <span class="material-icons text-primary mr-2">public</span>
                                        <h5 class="font-medium text-gray-900 dark:text-white">Sustainability Club</h5>
                                    </div>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Green architecture,
                                        eco-design, dan sustainable building</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- GALLERY -->
    <section class="py-12 bg-white dark:bg-gray-800">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-bold text-center mb-8 text-gray-900 dark:text-white">
                Dokumentasi Kegiatan Jurusan
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/dpib1/400/300.jpg" alt="Kegiatan DPIB"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/dpib2/400/300.jpg" alt="Kegiatan DPIB"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/dpib3/400/300.jpg" alt="Kegiatan DPIB"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/dpib4/400/300.jpg" alt="Kegiatan DPIB"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/dpib5/400/300.jpg" alt="Kegiatan DPIB"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/dpib6/400/300.jpg" alt="Kegiatan DPIB"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/dpib7/400/300.jpg" alt="Kegiatan DPIB"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/dpib8/400/300.jpg" alt="Kegiatan DPIB"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ALUMNI -->
    <section class="py-12 bg-white dark:bg-gray-800">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-bold text-center mb-8 text-gray-900 dark:text-white">
                Jejak Alumni
            </h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-gray-50 dark:bg-gray-700 rounded-xl p-6 card-hover">
                    <div class="flex items-center mb-4">
                        <img src="https://picsum.photos/seed/alumni-dpib1/100/100.jpg" alt="Alumni"
                            class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Cahya Kusuma</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Alumni 2021</p>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 text-sm mb-3">3D Visualizer at Studio 85</p>
                    <p class="text-gray-600 dark:text-gray-400 text-sm italic">"Portfolio yang saya bangun di DPIB
                        menjadi modal utama saya diterima di studio visualisasi ternama. Pembelajaran softwarenya sangat
                        mendalam dan relevan industri."</p>
                </div>
                <div class="bg-gray-50 dark:bg-gray-700 rounded-xl p-6 card-hover">
                    <div class="flex items-center mb-4">
                        <img src="https://picsum.photos/seed/alumni-dpib2/100/100.jpg" alt="Alumni"
                            class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Lina Marlina</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Alumni 2020</p>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 text-sm mb-3">Arsitek Junior at Airmas Asri</p>
                    <p class="text-gray-600 dark:text-gray-400 text-sm italic">"Pembelajaran desain yang seimbang antara
                        teori dan praktikum, ditambah dengan bimbingan dari guru yang ahli, membentuk fondasi arsitektur
                        yang kuat bagi saya."</p>
                </div>
                <div class="bg-gray-50 dark:bg-gray-700 rounded-xl p-6 card-hover">
                    <div class="flex items-center mb-4">
                        <img src="https://picsum.photos/seed/alumni-dpib3/100/100.jpg" alt="Alumni"
                            class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Bayu Anggara</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Alumni 2022</p>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 text-sm mb-3">BIM Modeler at Waskita Karya</p>
                    <p class="text-gray-600 dark:text-gray-400 text-sm italic">"Kebetulan sekali, jurusan ini sudah
                        mengajarkan BIM sejak dulu. Ini membuat saya langsung siap kerja dan menjadi unggul di
                        proyek-proyek konstruksi besar."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
  @include('layouts.footer')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Tab functionality
            const tabBtns = document.querySelectorAll('.tab-btn');
            const tabPanes = document.querySelectorAll('.tab-pane');

            tabBtns.forEach(btn => {
                btn.addEventListener('click', function () {
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