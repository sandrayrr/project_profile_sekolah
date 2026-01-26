<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Informasi Jurusan Teknik Otomotif - SMKN 1 Kawali</title>

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
                        primary: "#f97316", // Orange untuk kesan Otomotif/Mekanik
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
        /* Update warna primary selector agar dinamis mengikuti config tailwind */
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
            border-left: 4px solid #f97316;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -8px;
            top: 8px;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background-color: #f97316;
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
                            class="text-orange-100 font-semibold text-base bg-orange-800 bg-opacity-30 px-3 py-1 rounded-full">SMKN
                            1 Kawali</span>
                    </div>
                    <h1 class="text-3xl md:text-4xl font-bold text-white mb-4">
                        Jurusan Teknik Otomotif (TO)
                    </h1>
                    <p class="text-orange-100 text-lg mb-6">
                        Jurusan unggulan yang mencetak tenaga teknis handal dalam perawatan, perbaikan kendaraan ringan,
                        dan manajemen bengkel profesional sesuai standar industri otomotif modern.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-lg px-4 py-2 text-white">
                            <span class="material-icons mr-2 text-sm">directions_car</span>
                            <span class="text-sm">200+ Siswa</span>
                        </div>
                        <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-lg px-4 py-2 text-white">
                            <span class="material-icons mr-2 text-sm">engineering</span>
                            <span class="text-sm">12 Guru Sertifikasi BNSP</span>
                        </div>
                        <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-lg px-4 py-2 text-white">
                            <span class="material-icons mr-2 text-sm">build</span>
                            <span class="text-sm">Bengkel Standar Industri</span>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/3 flex justify-center">
                    <!-- Gambar placeholder Otomotif -->
                    <img src="https://images.unsplash.com/photo-1625047509248-ec889cbff17f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                        alt="Siswa Teknik Otomotif"
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
                                    Jurusan Teknik Otomotif SMKN 1 Kawali berfokus pada pengembangan kompetensi
                                    siswa di bidang perawatan kendaraan ringan. Kami menerapkan standar kerja
                                    industri terkini, dilengkapi dengan bengkel modern dan peralatan diagnosis
                                    canggih. Siswa diajarkan untuk menganalisis kerusakan, memperbaiki mesin,
                                    serta melakukan perawatan berkala dengan standar K3 yang ketat.
                                </p>
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-8">
                            <div>
                                <h4 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white">Data Jurusan</h4>
                                <div class="space-y-4">
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">settings</span>
                                        <div>
                                            <h5 class="font-medium text-gray-900 dark:text-white">Nama Lengkap</h5>
                                            <p class="text-gray-600 dark:text-gray-400">Teknik Otomotif (TO)</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">school</span>
                                        <div>
                                            <h5 class="font-medium text-gray-900 dark:text-white">Kaprog & Pembina</h5>
                                            <p class="text-gray-600 dark:text-gray-400">Bapak H. Asep Hidayat, S.T.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">business</span>
                                        <div>
                                            <h5 class="font-medium text-gray-900 dark:text-white">Mitra Industri</h5>
                                            <p class="text-gray-600 dark:text-gray-400">AHM, Toyota Astra Motor,
                                                Mitsubishi, Pertamina</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white">Pencapaian</h4>
                                <div class="space-y-4">
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">emoji_events</span>
                                        <div>
                                            <h5 class="font-medium text-gray-900 dark:text-white">LKS Otomotif</h5>
                                            <p class="text-gray-600 dark:text-gray-400">Juara Harapan 1 Provinsi 2023
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">verified</span>
                                        <div>
                                            <h5 class="font-medium text-gray-900 dark:text-white">Sertifikasi Kompetensi
                                            </h5>
                                            <p class="text-gray-600 dark:text-gray-400">95% Siswa Lulus UKK / BNSP</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">handshake</span>
                                        <div>
                                            <h5 class="font-medium text-gray-900 dark:text-white">Penyerapan Kerja</h5>
                                            <p class="text-gray-600 dark:text-gray-400">100% Terserap di Dunia Industri
                                            </p>
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
                            <h4 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white">Area Bengkel Praktik
                            </h4>
                            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                        <span class="material-icons text-primary">build_circle</span>
                                    </div>
                                    <h5 class="font-semibold text-gray-900 dark:text-white mb-2">Bengkel Perbaikan Mesin
                                    </h5>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">Area turun mesin dan servis
                                        ringan</p>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Engine Stand</li>
                                        <li>• Tool Set Lengkap</li>
                                        <li>• Alat Ukur Presisi</li>
                                        <li>• Kompresor Angin</li>
                                    </ul>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                        <span class="material-icons text-primary">bolt</span>
                                    </div>
                                    <h5 class="font-semibold text-gray-900 dark:text-white mb-2">Bengkel Kelistrikan
                                    </h5>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">Diagnosa sistem kelistrikan
                                        & EFI</p>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Scanner Diagnosa OBD</li>
                                        <li>• Multimeter Digital</li>
                                        <li>• Osiloskop</li>
                                        <li>• Trainer Kelistrikan</li>
                                    </ul>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                        <span class="material-icons text-primary">directions_car</span>
                                    </div>
                                    <h5 class="font-semibold text-gray-900 dark:text-white mb-2">Bengkel Sasis & Rem
                                    </h5>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">Perawatan kaki-kaki &
                                        pengereman</p>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Lift Mobil (Hydraulic)</li>
                                        <li>• Wheel Balancer</li>
                                        <li>• Spooring Machine</li>
                                        <li>• Brake Tester</li>
                                    </ul>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                        <span class="material-icons text-primary">water_drop</span>
                                    </div>
                                    <h5 class="font-semibold text-gray-900 dark:text-white mb-2">Bengkel Pendingin</h5>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">Servis AC dan sistem
                                        pendingin</p>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• AC Refrigerant Machine</li>
                                        <li>• Manifold Gauge</li>
                                        <li>• Vacuum Pump</li>
                                        <li>• Leak Detector</li>
                                    </ul>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                        <span class="material-icons text-primary">inventory</span>
                                    </div>
                                    <h5 class="font-semibold text-gray-900 dark:text-white mb-2">Gudang Sparepart</h5>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">Manajemen suku cadang</p>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Rak Sistem Kartu</li>
                                        <li>• Software Inventory</li>
                                        <li>• Katalog Sparepart</li>
                                        <li>• Minyak Pelumas</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h4 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white">Sertifikasi & Tools
                            </h4>
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                                    <div class="text-center">
                                        <div
                                            class="w-16 h-16 bg-white dark:bg-gray-700 rounded-lg flex items-center justify-center mx-auto mb-2">
                                            <span class="material-icons text-primary">verified</span>
                                        </div>
                                        <p class="text-sm font-medium text-gray-900 dark:text-white">UKK BNSP</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">Servis Ringan</p>
                                    </div>
                                    <div class="text-center">
                                        <div
                                            class="w-16 h-16 bg-white dark:bg-gray-700 rounded-lg flex items-center justify-center mx-auto mb-2">
                                            <span class="material-icons text-primary">build</span>
                                        </div>
                                        <p class="text-sm font-medium text-gray-900 dark:text-white">Honda</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">Technical Training</p>
                                    </div>
                                    <div class="text-center">
                                        <div
                                            class="w-16 h-16 bg-white dark:bg-gray-700 rounded-lg flex items-center justify-center mx-auto mb-2">
                                            <span class="material-icons text-primary">two_wheeler</span>
                                        </div>
                                        <p class="text-sm font-medium text-gray-900 dark:text-white">Yamaha</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">Technical Training</p>
                                    </div>
                                    <div class="text-center">
                                        <div
                                            class="w-16 h-16 bg-white dark:bg-gray-700 rounded-lg flex items-center justify-center mx-auto mb-2">
                                            <span class="material-icons text-primary">school</span>
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
                                    <span class="material-icons text-3xl">engineering</span>
                                </div>
                                <h4 class="font-bold text-lg">Kaprog Otomotif</h4>
                                <p class="text-sm opacity-90">Bapak H. Asep Hidayat, S.T.</p>
                                <p class="text-xs opacity-75 mt-2">NIP. 197803152005011003</p>
                            </div>
                        </div>

                        <!-- Guru Produktif -->
                        <div class="org-chart flex justify-center mb-8">
                            <div class="flex gap-4">
                                <div
                                    class="org-chart-item bg-gray-100 dark:bg-gray-800 rounded-xl p-4 text-center max-w-xs card-hover">
                                    <div
                                        class="w-16 h-16 bg-primary bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-3">
                                        <span class="material-icons text-primary">settings</span>
                                    </div>
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Bidang Mesin</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">3 Guru</p>
                                </div>
                                <div
                                    class="org-chart-item bg-gray-100 dark:bg-gray-800 rounded-xl p-4 text-center max-w-xs card-hover">
                                    <div
                                        class="w-16 h-16 bg-primary bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-3">
                                        <span class="material-icons text-primary">bolt</span>
                                    </div>
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Bidang Kelistrikan</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">3 Guru</p>
                                </div>
                            </div>
                        </div>

                        <!-- Detail Guru -->
                        <div class="grid md:grid-cols-2 gap-6 mb-8">
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Bidang Mesin</h4>
                                <div class="space-y-3">
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <p class="font-medium text-gray-900 dark:text-white">Bapak Dedi Kurniawan, S.T.
                                        </p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Overhaul Mesin & Sistem
                                            Bahan Bakar</p>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <p class="font-medium text-gray-900 dark:text-white">Bapak Rizky Ramadhan, S.Pd.
                                        </p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">K3 & Dasar Otomotif</p>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <p class="font-medium text-gray-900 dark:text-white">Ibu Siti Aminah, S.T.</p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Manajemen Perawatan</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Bidang Kelistrikan</h4>
                                <div class="space-y-3">
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <p class="font-medium text-gray-900 dark:text-white">Bapak Budi Santoso, S.Kom.
                                        </p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Sistem Pengapian & EFI</p>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <p class="font-medium text-gray-900 dark:text-white">Bapak Hendra Gunawan, S.Pd.
                                        </p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Sistem Starter & Pengisian
                                        </p>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <p class="font-medium text-gray-900 dark:text-white">Bapak Eko Prasetyo, S.T.
                                        </p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Kelistrikan Body & Aksesoris
                                        </p>
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
                                <h4 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Kompetensi Utama
                                </h4>
                                <div class="space-y-3">
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">build</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Perbaikan Mesin
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Overhaul, tune-up,
                                                    penggantian part</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span
                                                class="material-icons text-primary mr-3 mt-1">settings_input_component</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Kelistrikan
                                                    Kendaraan</h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Diagnosa
                                                    kelistrikan, body, charging</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">disc_full</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Sasis & Pengereman
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Suspensi, rem,
                                                    steering, wheel alignment</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">ac_unit</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Sistem Pendingin
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">AC Engine, radiator
                                                    maintenance</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Penunjang & K3</h4>
                                <div class="space-y-3">
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">medical_services</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">K3 Otomotif</h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Keselamatan kerja &
                                                    lingkungan</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">psychology</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Pemecahan Masalah
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Troubleshooting
                                                    sistematis</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">shopping_cart</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Manajemen Bengkel
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Estimasi biaya,
                                                    pelayanan pelanggan</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="p-6 bg-orange-50 dark:bg-orange-900 dark:bg-opacity-20 rounded-xl">
                            <h4 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Peluang Karir</h4>
                            <p class="text-gray-700 dark:text-gray-300 mb-6">Lulusan TO sangat dicari oleh ATPM dan
                                bengkel umum:</p>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                <div class="bg-white dark:bg-gray-800 p-4 rounded-xl text-center card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">build</span>
                                    </div>
                                    <p class="text-sm font-medium text-gray-700 dark:text-gray-300">Mekanik Profesional
                                    </p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">Bengkel Resmi</p>
                                </div>
                                <div class="bg-white dark:bg-gray-800 p-4 rounded-xl text-center card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">engineering</span>
                                    </div>
                                    <p class="text-sm font-medium text-gray-700 dark:text-gray-300">Foreman</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">Kepala Regu</p>
                                </div>
                                <div class="bg-white dark:bg-gray-800 p-4 rounded-xl text-center card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">support_agent</span>
                                    </div>
                                    <p class="text-sm font-medium text-gray-700 dark:text-gray-300">Service Advisor</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">Konsultan Servis</p>
                                </div>
                                <div class="bg-white dark:bg-gray-800 p-4 rounded-xl text-center card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">store</span>
                                    </div>
                                    <p class="text-sm font-medium text-gray-700 dark:text-gray-300">Pemilik Bengkel</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">Wirausaha</p>
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
                                    Kurikulum berbasis kompetensi yang diselaraskan dengan standar industri otomotif
                                    nasional dan internasional. Fokus pada kemampuan praktik dan pemahaman prinsip kerja
                                    kendaraan modern. Komposisi: 70% Praktikum & 30% Teori.
                                </p>
                                <div class="grid md:grid-cols-3 gap-4">
                                    <div class="bg-white dark:bg-gray-700 p-4 rounded-lg">
                                        <h5 class="font-medium text-gray-900 dark:text-white mb-2">Kelas X</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Dasar otomotif, penggunaan
                                            alat, K3</p>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-4 rounded-lg">
                                        <h5 class="font-medium text-gray-900 dark:text-white mb-2">Kelas XI</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Perbaikan mesin,
                                            kelistrikan, sasis</p>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-4 rounded-lg">
                                        <h5 class="font-medium text-gray-900 dark:text-white mb-2">Kelas XII</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Diagnosa, manajemen bengkel,
                                            PKL</p>
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
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Dasar Otomotif</p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Pemeliharaan/Perbaikan
                                                Chassis</p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Pemeliharaan/Perbaikan
                                                Kelistrikan</p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Ilmu Pengetahuan Alat
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="font-medium text-gray-900 dark:text-white mb-2">Kelas XI</h5>
                                    <div class="grid md:grid-cols-2 gap-3">
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Pemeliharaan/Perbaikan
                                                Mesin</p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Sistem Pengapian &
                                                Bahan Bakar</p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Pengoperasikan
                                                Kendaraan Ringan</p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Pekerjaan Dasar
                                                Listrik</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="font-medium text-gray-900 dark:text-white mb-2">Kelas XII</h5>
                                    <div class="grid md:grid-cols-2 gap-3">
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Perbaikan Sistem Rem
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Servis Rem (Disk &
                                                Drum)</p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Perbaikan Suspensi &
                                                Roda</p>
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
                            <h4 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white">Ekstrakurikuler</h4>
                            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-4 card-hover">
                                    <div class="flex items-center mb-2">
                                        <span class="material-icons text-primary mr-2">speed</span>
                                        <h5 class="font-medium text-gray-900 dark:text-white">Klub Balap</h5>
                                    </div>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Tune-up & modifikasi motor</p>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-4 card-hover">
                                    <div class="flex items-center mb-2">
                                        <span class="material-icons text-primary mr-2">electric_car</span>
                                        <h5 class="font-medium text-gray-900 dark:text-white">Klub Mobil Listrik</h5>
                                    </div>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Eksperimen teknologi hijau</p>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-4 card-hover">
                                    <div class="flex items-center mb-2">
                                        <span class="material-icons text-primary mr-2">groups</span>
                                        <h5 class="font-medium text-gray-900 dark:text-white">Komunitas K3</h5>
                                    </div>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Pemasangan instalasi listrik
                                        umum</p>
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
                Dokumentasi Bengkel
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                        alt="Kegiatan TO"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://images.unsplash.com/photo-1530046339160-c540c9d3160e?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                        alt="Kegiatan TO"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://images.unsplash.com/photo-1486262715619-67b85e0b08d3?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                        alt="Kegiatan TO"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                        alt="Kegiatan TO"
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
                Alumni Otomotif
            </h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-gray-50 dark:bg-gray-700 rounded-xl p-6 card-hover">
                    <div class="flex items-center mb-4">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80"
                            alt="Alumni" class="w-12 h-12 rounded-full mr-4 object-cover">
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Agus Setiawan</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Alumni 2020</p>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 text-sm mb-3">Mekanik Senior Honda</p>
                    <p class="text-gray-600 dark:text-gray-400 text-sm italic">"Latihan praktek yang intensif membuat
                        saya siap kerja di dealer."</p>
                </div>
                <div class="bg-gray-50 dark:bg-gray-700 rounded-xl p-6 card-hover">
                    <div class="flex items-center mb-4">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80"
                            alt="Alumni" class="w-12 h-12 rounded-full mr-4 object-cover">
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Dedi Mulyadi</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Alumni 2019</p>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 text-sm mb-3">Owner Bengkel Sejahtera</p>
                    <p class="text-gray-600 dark:text-gray-400 text-sm italic">"Ilmu manajemen bengkel sangat membantu
                        saya memulai usaha sendiri."</p>
                </div>
                <div class="bg-gray-50 dark:bg-gray-700 rounded-xl p-6 card-hover">
                    <div class="flex items-center mb-4">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80"
                            alt="Alumni" class="w-12 h-12 rounded-full mr-4 object-cover">
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Rizky Pratama</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Alumni 2021</p>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 text-sm mb-3">Service Advisor Toyota</p>
                    <p class="text-gray-600 dark:text-gray-400 text-sm italic">"Pendidikan karakter dan disiplin di SMKN
                        1 Kawali sangat terasa."</p>
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