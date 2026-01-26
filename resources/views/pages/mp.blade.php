<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Informasi Jurusan MP - SMKN 1 Kawali</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/global.css">
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#3b82f6", // Diubah menjadi Biru untuk kesan Professional/Office
                        secondary: "#2563eb",
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
        /* Update warna primary selector agar dinamis mengikuti config tailwind */
        .tab-active {
            border-bottom: 3px solid #3b82f6;
            color: #3b82f6;
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
            border-left: 4px solid #3b82f6;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -8px;
            top: 8px;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background-color: #3b82f6;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-100 font-body">

    <!-- NAVBAR (Placeholder untuk include) -->
    @include('layouts.navbar')
  
    <!-- HEADER JURUSAN -->
    <header class="bg-gradient-to-br from-primary to-secondary dark:from-gray-700 dark:to-gray-900 py-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center gap-8">
                <div class="md:w-2/3">
                    <div class="mb-4">
                        <span
                            class="text-blue-100 font-semibold text-base bg-blue-800 bg-opacity-30 px-3 py-1 rounded-full">SMKN
                            1 Kawali</span>
                    </div>
                    <h1 class="text-3xl md:text-4xl font-bold text-white mb-4">
                        Jurusan Manajemen Perkantoran (MP)
                    </h1>
                    <p class="text-blue-100 text-lg mb-6">
                        Jurusan yang mempersiapkan tenaga administratif profesional, sekretaris, dan staf kantor yang
                        kompeten dalam mengelola informasi dan teknologi perkantoran modern.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-lg px-4 py-2 text-white">
                            <span class="material-icons mr-2 text-sm">people</span>
                            <span class="text-sm">125+ Siswa</span>
                        </div>
                        <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-lg px-4 py-2 text-white">
                            <span class="material-icons mr-2 text-sm">person</span>
                            <span class="text-sm">6 Guru Profesional</span>
                        </div>
                        <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-lg px-4 py-2 text-white">
                            <span class="material-icons mr-2 text-sm">business_center</span>
                            <span class="text-sm">Terakreditasi A</span>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/3 flex justify-center">
                    <!-- Gambar placeholder perkantoran -->
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                        alt="Siswa MP"
                        class="w-full max-w-sm h-48 object-cover rounded-xl shadow-lg border-4 border-white border-opacity-20">
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
                                    Jurusan Manajemen Perkantoran (MP) di SMKN 1 Kawali berfokus pada pencetakan
                                    lulusan yang siap bekerja di dunia administrasi perkantoran, sekretariat, dan
                                    manajemen layanan kantor. Siswa dilatih untuk mahir dalam penggunaan teknologi
                                    informasi, kearsipan, korespondensi bisnis, dan pelayanan prima yang dibutuhkan
                                    oleh perusahaan modern maupun instansi pemerintah.
                                </p>
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-8">
                            <div>
                                <h4 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white">Data Jurusan</h4>
                                <div class="space-y-4">
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">business</span>
                                        <div>
                                            <h5 class="font-medium text-gray-900 dark:text-white">Nama Lengkap</h5>
                                            <p class="text-gray-600 dark:text-gray-400">Manajemen Perkantoran (MP)</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">school</span>
                                        <div>
                                            <h5 class="font-medium text-gray-900 dark:text-white">Kepala Jurusan</h5>
                                            <p class="text-gray-600 dark:text-gray-400">Ibu Hj. Ratna Sari, S.Pd., M.M.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">handshake</span>
                                        <div>
                                            <h5 class="font-medium text-gray-900 dark:text-white">Mitra Industri</h5>
                                            <p class="text-gray-600 dark:text-gray-400">Bank BUMN, Dinas, Perusahaan
                                                Jasa, Hotel</p>
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
                                            <p class="text-gray-600 dark:text-gray-400">98% (2022/2023)</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">work</span>
                                        <div>
                                            <h5 class="font-medium text-gray-900 dark:text-white">Tingkat Penyerapan
                                                Kerja</h5>
                                            <p class="text-gray-600 dark:text-gray-400">95% dalam 3 bulan setelah lulus
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">emoji_events</span>
                                        <div>
                                            <h5 class="font-medium text-gray-900 dark:text-white">Prestasi</h5>
                                            <p class="text-gray-600 dark:text-gray-400">Juara 1 LKS Secretary Tingkat
                                                Kabupaten</p>
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
                            <h4 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white">Laboratorium & Ruang
                                Praktik</h4>
                            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                        <span class="material-icons text-primary">desktop_windows</span>
                                    </div>
                                    <h5 class="font-semibold text-gray-900 dark:text-white mb-2">Lab Simulasi
                                        Perkantoran</h5>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">Ruang praktik menyerupai
                                        kantor modern</p>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Partisi Kerja Modern</li>
                                        <li>• Telepon PABX</li>
                                        <li>• Mesin Tik & Faksimili</li>
                                        <li>• Mesin Absensi Sidik Jari</li>
                                    </ul>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                        <span class="material-icons text-primary">folder_shared</span>
                                    </div>
                                    <h5 class="font-semibold text-gray-900 dark:text-white mb-2">Lab Kearsipan Digital
                                    </h5>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">Praktik pengelolaan arsip
                                        fisik & digital</p>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Lemari Arsip Kartodoks</li>
                                        <li>• Software E-Government</li>
                                        <li>• Scanner Dokumen</li>
                                        <li>• Shredding Machine</li>
                                    </ul>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                        <span class="material-icons text-primary">computer</span>
                                    </div>
                                    <h5 class="font-semibold text-gray-900 dark:text-white mb-2">Lab Aplikasi Kantor
                                    </h5>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">Penguasaan software
                                        administrasi</p>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Microsoft Office Advanced</li>
                                        <li>• Google Workspace</li>
                                        <li>• Zoho & Asana</li>
                                        <li>• Sistem Informasi Manajemen</li>
                                    </ul>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                        <span class="material-icons text-primary">record_voice_over</span>
                                    </div>
                                    <h5 class="font-semibold text-gray-900 dark:text-white mb-2">Lab Bahasa & Sekretaris
                                    </h5>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">Latih tata bahasa &
                                        protokoler</p>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Audio Lingual Lab</li>
                                        <li>• Ruang Meeting Mini</li>
                                        <li>• Alat Protokoler</li>
                                        <li>• Coffee Break Tools</li>
                                    </ul>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                        <span class="material-icons text-primary">local_shipping</span>
                                    </div>
                                    <h5 class="font-semibold text-gray-900 dark:text-white mb-2">Unit Produksi</h5>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">Bisnis nyata yang dikelola
                                        siswa</p>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Percetakan Digital</li>
                                        <li>• Layanan Fotokopi</li>
                                        <li>• Jasa Binding</li>
                                        <li>• Rental Alat Presentasi</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h4 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white">Sertifikasi Profesi
                            </h4>
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                                    <div class="text-center">
                                        <div
                                            class="w-16 h-16 bg-white dark:bg-gray-700 rounded-lg flex items-center justify-center mx-auto mb-2">
                                            <span class="material-icons text-primary">verified</span>
                                        </div>
                                        <p class="text-sm font-medium text-gray-900 dark:text-white">Microsoft Office
                                        </p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">Specialist (MOS)</p>
                                    </div>
                                    <div class="text-center">
                                        <div
                                            class="w-16 h-16 bg-white dark:bg-gray-700 rounded-lg flex items-center justify-center mx-auto mb-2">
                                            <span class="material-icons text-primary">verified</span>
                                        </div>
                                        <p class="text-sm font-medium text-gray-900 dark:text-white">Adobe Photoshop</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">Desain Grafis</p>
                                    </div>
                                    <div class="text-center">
                                        <div
                                            class="w-16 h-16 bg-white dark:bg-gray-700 rounded-lg flex items-center justify-center mx-auto mb-2">
                                            <span class="material-icons text-primary">verified</span>
                                        </div>
                                        <p class="text-sm font-medium text-gray-900 dark:text-white">BNSP</p>
                                        <p class="text-xs text-gray-600 dark:text-400">Staff Administrasi</p>
                                    </div>
                                    <div class="text-center">
                                        <div
                                            class="w-16 h-16 bg-white dark:bg-gray-700 rounded-lg flex items-center justify-center mx-auto mb-2">
                                            <span class="material-icons text-primary">verified</span>
                                        </div>
                                        <p class="text-sm font-medium text-gray-900 dark:text-white">Tik BNSP</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">Tingkat Menengah</p>
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
                                    <span class="material-icons text-3xl">account_balance</span>
                                </div>
                                <h4 class="font-bold text-lg">Kepala Jurusan</h4>
                                <p class="text-sm opacity-90">Ibu Hj. Ratna Sari, S.Pd., M.M.</p>
                                <p class="text-xs opacity-75 mt-2">NIP. 197803202002122001</p>
                            </div>
                        </div>

                        <!-- Guru Produktif -->
                        <div class="org-chart flex justify-center mb-8">
                            <div class="flex gap-4">
                                <div
                                    class="org-chart-item bg-gray-100 dark:bg-gray-800 rounded-xl p-4 text-center max-w-xs card-hover">
                                    <div
                                        class="w-16 h-16 bg-primary bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-3">
                                        <span class="material-icons text-primary">description</span>
                                    </div>
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Guru Administrasi
                                    </h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">3 Guru</p>
                                </div>
                                <div
                                    class="org-chart-item bg-gray-100 dark:bg-gray-800 rounded-xl p-4 text-center max-w-xs card-hover">
                                    <div
                                        class="w-16 h-16 bg-primary bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-3">
                                        <span class="material-icons text-primary">folder_open</span>
                                    </div>
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Guru Kearsipan
                                    </h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">3 Guru</p>
                                </div>
                            </div>
                        </div>

                        <!-- Detail Guru -->
                        <div class="grid md:grid-cols-2 gap-6 mb-8">
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Guru Administrasi</h4>
                                <div class="space-y-3">
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <p class="font-medium text-gray-900 dark:text-white">Ibu Rina Melati, S.Pd.
                                        </p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Administrasi Umum &
                                            Korespondensi</p>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <p class="font-medium text-gray-900 dark:text-white">Bapak Dedi Kurniawan,
                                            S.Kom.</p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Aplikasi Komputer Akuntansi
                                        </p>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <p class="font-medium text-gray-900 dark:text-white">Ibu Siska Amelia, S.E.</p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Pelayanan Prima & Protokoler
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Guru Kearsipan</h4>
                                <div class="space-y-3">
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <p class="font-medium text-gray-900 dark:text-white">Bapak Asep Sunandar, S.Pd.
                                        </p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Manajemen Kearsipan</p>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <p class="font-medium text-gray-900 dark:text-white">Ibu Dian Pratama, S.H.</p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Hukum & Tata Usaha</p>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <p class="font-medium text-gray-900 dark:text-white">Bapak Eko Prasetyo, S.T.
                                        </p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Teknologi Perkantoran</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Struktur Kelas -->
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Struktur Kelas X MP</h4>
                                <div class="grid grid-cols-1 gap-3">
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <span class="text-gray-700 dark:text-gray-300">Wali Kelas: Ibu Rina Melati,
                                            S.Pd.</span>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <span class="text-gray-700 dark:text-gray-300">Ketua Kelas: Nadya Putri</span>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <span class="text-gray-700 dark:text-gray-300">Wakil Ketua: Rizky
                                            Ramadhan</span>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Struktur Kelas XI MP</h4>
                                <div class="grid grid-cols-1 gap-3">
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <span class="text-gray-700 dark:text-gray-300">Wali Kelas: Bapak Dedi Kurniawan,
                                            S.Kom.</span>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <span class="text-gray-700 dark:text-gray-300">Ketua Kelas: Indah
                                            Permatasari</span>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <span class="text-gray-700 dark:text-gray-300">Wakil Ketua: Budi Santoso</span>
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
                                            <span class="material-icons text-primary mr-3 mt-1">business_center</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Administrasi
                                                    Perkantoran</h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Pengelolaan jadwal,
                                                    agenda & surat</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">folder_shared</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Kearsipan</h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Pengarsipan manual,
                                                    digital & maping</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">phone</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Teknologi
                                                    Perkantoran</h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">PABX, Faksimili,
                                                    Mesin Tik</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">mail</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Korespondensi
                                                    Bisnis</h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Surat Niaga, Bahasa
                                                    Inggris Bisnis</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">security</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">K3 & Keselamatan
                                                    Kerja</h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Prosedur keselamatan
                                                    di kantor</p>
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
                                            <span class="material-icons text-primary mr-3 mt-1">computer</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Aplikasi Komputer
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Word, Excel, PPT,
                                                    Access</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">shopping_bag</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Akuntansi Dasar
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Pencatatan keuangan
                                                    sederhana</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span
                                                class="material-icons text-primary mr-3 mt-1">sentiment_satisfied_alt</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Pelayanan Prima
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Customer Service
                                                    Skills</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">emoji_people</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Sekretaris &
                                                    Protokoler</h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Meeting handling &
                                                    Event organizer</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">create</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Desain Grafis
                                                    Dasar</h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Pembuatan brosur &
                                                    banner</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="p-6 bg-blue-50 dark:bg-blue-900 dark:bg-opacity-20 rounded-xl">
                            <h4 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Peluang Karir</h4>
                            <p class="text-gray-700 dark:text-gray-300 mb-6">Lulusan MP sangat dibutuhkan di berbagai
                                lini industri:</p>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                <div class="bg-white dark:bg-gray-800 p-4 rounded-xl text-center card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">badge</span>
                                    </div>
                                    <p class="text-sm font-medium text-gray-700 dark:text-gray-300">Sekretaris</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">Perusahaan/Instansi</p>
                                </div>
                                <div class="bg-white dark:bg-gray-800 p-4 rounded-xl text-center card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">admin_panel_settings</span>
                                    </div>
                                    <p class="text-sm font-medium text-gray-700 dark:text-gray-300">Admin Staff</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">HRD / General Affair</p>
                                </div>
                                <div class="bg-white dark:bg-gray-800 p-4 rounded-xl text-center card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">support_agent</span>
                                    </div>
                                    <p class="text-sm font-medium text-gray-700 dark:text-gray-300">Resepsionis</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">Hotel / Kantor</p>
                                </div>
                                <div class="bg-white dark:bg-gray-800 p-4 rounded-xl text-center card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">front_hand</span>
                                    </div>
                                    <p class="text-sm font-medium text-gray-700 dark:text-gray-300">Front Liner</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">Bank / Service</p>
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
                                    Jurusan MP menerapkan kurikulum berbasis kompetensi yang menyesuaikan dengan
                                    revolusi industri 4.0.
                                    Fokus utama adalah penguasaan teknologi informasi kantor dan soft skill pelayanan.
                                    Komposisi pembelajaran: 60% Praktik dan 40% Teori.
                                </p>
                                <div class="grid md:grid-cols-3 gap-4">
                                    <div class="bg-white dark:bg-gray-700 p-4 rounded-lg">
                                        <h5 class="font-medium text-gray-900 dark:text-white mb-2">Kelas X</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Pengenalan dasar
                                            administrasi, komputer, & karakter</p>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-4 rounded-lg">
                                        <h5 class="font-medium text-gray-900 dark:text-white mb-2">Kelas XI</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Penerapan teknologi
                                            perkantoran, korespondensi, dan kearsipan</p>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-4 rounded-lg">
                                        <h5 class="font-medium text-gray-900 dark:text-white mb-2">Kelas XII</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Manajemen pelayanan terpadu,
                                            sekretaris, & persiapan usaha</p>
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
                                                Administrasi Perkantoran</p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Kearsipan</p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Alat Perkantoran</p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Komputer Dasar</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="font-medium text-gray-900 dark:text-white mb-2">Kelas XI</h5>
                                    <div class="grid md:grid-cols-2 gap-3">
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Administrasi
                                                Kepegawaian</p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Korespondensi</p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Teknologi Perkantoran
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Bahasa Inggris Bisnis
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="font-medium text-gray-900 dark:text-white mb-2">Kelas XII</h5>
                                    <div class="grid md:grid-cols-2 gap-3">
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Pelayanan Prima</p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Sekretaris</p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Akuntansi Perusahaan
                                                Jasa</p>
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
                                        <span class="material-icons text-primary mr-2">groups</span>
                                        <h5 class="font-medium text-gray-900 dark:text-white">English Club</h5>
                                    </div>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Latih conversation bisnis &
                                        TOEIC</p>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-4 card-hover">
                                    <div class="flex items-center mb-2">
                                        <span class="material-icons text-primary mr-2">brush</span>
                                        <h5 class="font-medium text-gray-900 dark:text-white">Design Club</h5>
                                    </div>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Desain grafis & editing video
                                    </p>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-4 card-hover">
                                    <div class="flex items-center mb-2">
                                        <span class="material-icons text-primary mr-2">campaign</span>
                                        <h5 class="font-medium text-gray-900 dark:text-white">Public Speaking</h5>
                                    </div>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">MC, Protokoler & Presentasi</p>
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
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                        alt="Kegiatan MP"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                        alt="Kegiatan MP"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                        alt="Kegiatan MP"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                        alt="Kegiatan MP"
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
                        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80"
                            alt="Alumni" class="w-12 h-12 rounded-full mr-4 object-cover">
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Siti Aminah</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Alumni 2021</p>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 text-sm mb-3">Sekretaris PT. Maju Mundur</p>
                    <p class="text-gray-600 dark:text-gray-400 text-sm italic">"Jurusan MP mengajarkan saya pentingnya
                        ketelitian dan etika kerja yang sangat berguna di dunia kerja."</p>
                </div>
                <div class="bg-gray-50 dark:bg-gray-700 rounded-xl p-6 card-hover">
                    <div class="flex items-center mb-4">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80"
                            alt="Alumni" class="w-12 h-12 rounded-full mr-4 object-cover">
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Rian Pratama</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Alumni 2020</p>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 text-sm mb-3">Admin Bank BJB</p>
                    <p class="text-gray-600 dark:text-gray-400 text-sm italic">"Fasilitas komputer dan pelatihan
                        Microsoft Office sangat membantu saya melewati seleksi kerja."</p>
                </div>
                <div class="bg-gray-50 dark:bg-gray-700 rounded-xl p-6 card-hover">
                    <div class="flex items-center mb-4">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80"
                            alt="Alumni" class="w-12 h-12 rounded-full mr-4 object-cover">
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Dewi Sartika</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Alumni 2022</p>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 text-sm mb-3">Frontliner Hotel Savoy</p>
                    <p class="text-gray-600 dark:text-gray-400 text-sm italic">"Pelajaran pelayanan prima dan bahasa
                        Inggris membuat saya percaya diri melayani tamu hotel."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <!-- @include('layouts.footer') -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4 grid md:grid-cols-3 gap-8">
            <div>
                <h3 class="text-xl font-bold mb-4">SMKN 1 Kawali</h3>
                <p class="text-gray-400 text-sm">Mencetak generasi unggul, kompeten, dan berkarakter di bidang Manajemen
                    Perkantoran.</p>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-4">Kontak</h3>
                <ul class="text-sm text-gray-400 space-y-2">
                    <li>Jl. Kawali-Ciamis KM.5</li>
                    <li>info@smkn1kawali.sch.id</li>
                    <li>(0265) 123456</li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-4">Sosial Media</h3>
                <div class="flex gap-4">
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram fa-lg"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-youtube fa-lg"></i></a>
                </div>
            </div>
        </div>
        <div class="text-center text-gray-500 text-sm mt-8 pt-8 border-t border-gray-800">
            &copy; 2023 SMKN 1 Kawali. All rights reserved.
        </div>
    </footer>

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