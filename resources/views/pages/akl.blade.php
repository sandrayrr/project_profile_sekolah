<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Informasi Jurusan AKL - SMKN 1 Kawali</title>

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
                        primary: "#10b981",
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
                            '0%': {
                                opacity: '0',
                                transform: 'translateY(10px)'
                            },
                            '100%': {
                                opacity: '1',
                                transform: 'translateY(0)'
                            },
                        },
                        float: {
                            '0%': {
                                transform: 'translateY(0px)'
                            },
                            '50%': {
                                transform: 'translateY(-10px)'
                            },
                            '100%': {
                                transform: 'translateY(0px)'
                            },
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
            border-left: 4px solid #10b981;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -8px;
            top: 8px;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background-color: #10b981;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-100 font-body">

    <!-- NAVBAR -->
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
                        Jurusan Akuntansi dan Keuangan Lembaga (AKL)
                    </h1>
                    <p class="text-gray-100 text-lg mb-6">
                        Jurusan yang mempersiapkan profesional di bidang akuntansi, keuangan, dan
                        manajemen keuangan untuk mendukung pengambilan keputusan bisnis yang akurat.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-lg px-4 py-2 text-white">
                            <span class="material-icons mr-2 text-sm">people</span>
                            <span class="text-sm">110+ Siswa</span>
                        </div>
                        <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-lg px-4 py-2 text-white">
                            <span class="material-icons mr-2 text-sm">person</span>
                            <span class="text-sm">7 Guru Profesional</span>
                        </div>
                        <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-lg px-4 py-2 text-white">
                            <span class="material-icons mr-2 text-sm">history</span>
                            <span class="text-sm">Berdiri sejak 15 Oktober 2015 2013</span>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/3 flex justify-center">
                    <img src="ak6.jpg" alt="Siswa AKL"
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
        <h3 class="text-2xl font-bold mb-6 text-gray-900 dark:text-white text-center relative">
            <span class="bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent">Identitas Jurusan</span>
            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-24 h-1 bg-gradient-to-r from-primary to-secondary rounded-full"></div>
        </h3>

        <div class="mb-8">
            <h4 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white flex items-center">
                <span class="w-8 h-8 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mr-3">
                    <span class="material-icons text-primary text-sm">info</span>
                </span>
                Profil Jurusan
            </h4>
            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 border-l-4 border-primary shadow-sm">
                <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                    Akuntansi Keuangan Lembaga adalah Kompetensi Kejuruan yang memiliki pengetahuan, keterampilan dan nilai serta sikap yang terintegrasi dan kecakapan kerja dalam bidang Akuntansi dengan menerapkan kewiraswastaan serta mampu mengadaptasi perkembangan masyarakat yang sesuai dengan kemajuan ilmu dan teknologi serta dapat memenuhi tuntutan dunia kerja masa sekarang dan masa yang akan datang.
                </p>
            </div>
        </div>

        <div class="flex justify-center">
            <div class="max-w-2xl w-full">
                <h4 class="text-lg font-semibold mb-6 text-gray-900 dark:text-white text-center flex items-center justify-center">
                    <span class="w-8 h-8 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mr-3">
                        <span class="material-icons text-primary text-sm">folder_shared</span>
                    </span>
                    Data Jurusan
                </h4>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="bg-white dark:bg-gray-800 rounded-xl p-5 shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-700 hover:-translate-y-1">
                        <div class="flex flex-col items-center text-center">
                            <div class="w-14 h-14 bg-gradient-to-br from-blue-50 to-blue-100 dark:from-blue-900 dark:to-blue-800 rounded-full flex items-center justify-center mb-3">
                                <span class="material-icons text-primary text-xl">account_balance</span>
                            </div>
                            <h5 class="font-medium text-gray-900 dark:text-white mb-1">Nama Lengkap</h5>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Akuntansi dan Keuangan Lembaga</p>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-gray-800 rounded-xl p-5 shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-700 hover:-translate-y-1">
                        <div class="flex flex-col items-center text-center">
                            <div class="w-14 h-14 bg-gradient-to-br from-blue-50 to-blue-100 dark:from-blue-900 dark:to-blue-800 rounded-full flex items-center justify-center mb-3">
                                <span class="material-icons text-primary text-xl">school</span>
                            </div>
                            <h5 class="font-medium text-gray-900 dark:text-white mb-1">Kepala Jurusan</h5>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Ibu Siti Nurhaliza, S.E., M.Ak.</p>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-gray-800 rounded-xl p-5 shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-700 hover:-translate-y-1">
                        <div class="flex flex-col items-center text-center">
                            <div class="w-14 h-14 bg-gradient-to-br from-blue-50 to-blue-100 dark:from-blue-900 dark:to-blue-800 rounded-full flex items-center justify-center mb-3">
                                <span class="material-icons text-primary text-xl">business</span>
                            </div>
                            <h5 class="font-medium text-gray-900 dark:text-white mb-1">Mitra Industri</h5>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">KAP, KPP, Bank, Perusahaan Manufaktur</p>
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
                                    <h5 class="font-semibold text-gray-900 dark:text-white mb-2">Lab Akuntansi</h5>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">40 unit PC dengan software
                                        akuntansi terkini</p>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Accurate Accounting</li>
                                        <li>• MYOB Accounting</li>
                                        <li>• Zahir & SAP Business One</li>
                                        <li>• E-Faktur & Pajak</li>
                                    </ul>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                        <span class="material-icons text-primary">receipt_long</span>
                                    </div>
                                    <h5 class="font-semibold text-gray-900 dark:text-white mb-2">Lab Perpajakan</h5>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">Area praktikum transaksi
                                        dan pembukuan</p>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Mesin Kasir & EDC</li>
                                        <li>• Barcode Scanner</li>
                                        <li>• Sistem POS</li>
                                        <li>• Mesin Cek Validasi</li>
                                    </ul>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                        <span class="material-icons text-primary">description</span>
                                    </div>
                                    <h5 class="font-semibold text-gray-900 dark:text-white mb-2">Lab Laporan Keuangan
                                    </h5>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">Area pembuatan laporan
                                        keuangan profesional</p>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Template Laporan Standar</li>
                                        <li>• Software Analisis</li>
                                        <li>• Perpustakaan Data</li>
                                        <li>• Visualisasi Data</li>
                                    </ul>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                        <span class="material-icons text-primary">gavel</span>
                                    </div>
                                    <h5 class="font-semibold text-gray-900 dark:text-white mb-2">Lab Perpajakan</h5>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">Praktikum perpajakan dan
                                        audit keuangan</p>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Alat Audit</li>
                                        <li>• Bukti Transaksi</li>
                                        <li>• Dokumen Kerja</li>
                                        <li>• Standar Audit</li>
                                    </ul>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                        <span class="material-icons text-primary">inventory</span>
                                    </div>
                                    <h5 class="font-semibold text-gray-900 dark:text-white mb-2">Lab Gudang & Persediaan
                                    </h5>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">Simulasi manajemen
                                        persediaan dan gudang</p>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Software ERP</li>
                                        <li>• Barcode System</li>
                                        <li>• RFID Tracking</li>
                                        <li>• Inventory Control</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h4 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white">Software & Sertifikasi
                            </h4>
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                                    <div class="text-center">
                                        <div
                                            class="w-16 h-16 bg-white dark:bg-gray-700 rounded-lg flex items-center justify-center mx-auto mb-2">
                                            <span class="material-icons text-primary">verified</span>
                                        </div>
                                        <p class="text-sm font-medium text-gray-900 dark:text-white">Brevet A</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">Akuntansi</p>
                                    </div>
                                    <div class="text-center">
                                        <div
                                            class="w-16 h-16 bg-white dark:bg-gray-700 rounded-lg flex items-center justify-center mx-auto mb-2">
                                            <span class="material-icons text-primary">verified</span>
                                        </div>
                                        <p class="text-sm font-medium text-gray-900 dark:text-white">Sertifikasi KAP</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">Praktisi</p>
                                    </div>
                                    <div class="text-center">
                                        <div
                                            class="w-16 h-16 bg-white dark:bg-gray-700 rounded-lg flex items-center justify-center mx-auto mb-2">
                                            <span class="material-icons text-primary">verified</span>
                                        </div>
                                        <p class="text-sm font-medium text-gray-900 dark:text-white">Sertifikasi Pajak
                                        </p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">Brevet C</p>
                                    </div>
                                    <div class="text-center">
                                        <div
                                            class="w-16 h-16 bg-white dark:bg-gray-700 rounded-lg flex items-center justify-center mx-auto mb-2">
                                            <span class="material-icons text-primary">verified</span>
                                        </div>
                                        <p class="text-sm font-medium text-gray-900 dark:text-white">Sertifikasi
                                            Microsoft</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">Office Specialist</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- STRUKTUR ORGANISASI -->
 <div id="struktur" class="tab-pane hidden">
    <div class="bg-card-light dark:bg-card-dark rounded-2xl shadow-lg p-8">
        <h3 class="text-2xl font-bold mb-6 text-gray-900 dark:text-white">Struktur Organisasi Jurusan</h3>

        <!-- Kepala Jurusan -->
        <div class="flex justify-center mb-8">
            <div class="bg-primary text-white rounded-xl p-6 text-center max-w-xs card-hover">
                <div class="w-20 h-20 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="material-icons text-3xl">architecture</span>
                </div>
                <h4 class="font-bold text-lg">Kepala Jurusan</h4>
                <p class="text-sm opacity-90">Neng Tati Erlina, S.Pd.</p>
                <p class="text-xs opacity-75 mt-2"></p>
            </div>
        </div>

        <!-- Detail Guru -->
        <div class="grid md:grid-cols-3 gap-6 mb-8">
            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Guru Dasar Dasar Program Keahlian</h4>
                <div class="space-y-3">
                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                        <p class="font-medium text-gray-900 dark:text-white">Eni Kusnaeni, S.Pd., M.M</p>
                       
                    </div>
                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                        <p class="font-medium text-gray-900 dark:text-white">Ade Nuraisah, S.Pd.</p>
                       
                    </div>
                
                </div>
            </div>
            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Guru Akuntansi dan Keuangan Lembaga</h4>
                <div class="space-y-3">
                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                        <p class="font-medium text-gray-900 dark:text-white">Neng Tati Erlina, S.Pd</p>
                        
                    </div>
                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                        <p class="font-medium text-gray-900 dark:text-white"> Ika Riskawati, S.Pd</p>
                       
                    </div>
                <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                        <p class="font-medium text-gray-900 dark:text-white"> Neni Nuraeni, S.Pd</p>
                       
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Guru Mata Pelajaran Pilihan</h4>
                <div class="space-y-3">
                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                        <p class="font-medium text-gray-900 dark:text-white"> Yani Handayani, S.Pd</p>
                        
                    </div>
                    
                </div>
            </div>
        </div>

        <!-- Struktur Kelas -->
        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Wali Kelas X AKL</h4>
                <div class="grid grid-cols-1 gap-3">
                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                        <span class="text-gray-700 dark:text-gray-300">Wali Kelas X AKL 1 : Eni Kusnaeni, S.Pd., M.M</span>
                    </div>
                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                        <span class="text-gray-700 dark:text-gray-300">Wali Kelas X AKL 2 : Yani Handayani, S.Pd</span>
                    </div>
                    
                </div>
            </div>
            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Wali Kelas XI AKL</h4>
                <div class="grid grid-cols-1 gap-3">
                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                        <span class="text-gray-700 dark:text-gray-300">Wali Kelas XI AKL 1 : Ika Riskawati, S.Pd.</span>
                    </div>
                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                        <span class="text-gray-700 dark:text-gray-300">Wali Kelas XI AKL 2 : Ade Nuraisah, S.Pd</span>
                    </div>
                    
                </div>
            </div>
            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Wali Kelas XII AKL</h4>
                <div class="grid grid-cols-1 gap-3">
                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                        <span class="text-gray-700 dark:text-gray-300">Wali Kelas XII AKL 1 : Tuti Fitriyah S.Pd</span>
                    </div>
                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                        <span class="text-gray-700 dark:text-gray-300">Wali Kelas XII AK 2 : Neni Nuraeni, S.Pd</span>
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
                                            <span class="material-icons text-primary mr-3 mt-1">calculate</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Akuntansi Dasar &
                                                    Prinsip
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Pengantar, Jurnal, &
                                                    Posting
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">receipt_long</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Akuntansi
                                                    Perusahaan
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Jurnal Umum & Khusus
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">request_quote</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Akuntansi Biaya &
                                                    Komersial
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">HPP, Pajak, &
                                                    Laporan Laba Rugi
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">description</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Akuntansi
                                                    Manufaktur
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">HPP, Biaya, &
                                                    Persediaan
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span
                                                class="material-icons text-primary mr-3 mt-1">account_balance_wallet</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Akuntansi Lembaga
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Yayasan,
                                                    Pemerintahah, & Non-Profit
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
                                            <span class="material-icons text-primary mr-3 mt-1">computer</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Aplikasi Akuntansi
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Software Akuntansi
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">bar_chart</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Analisis Laporan
                                                    Keuangan
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Financial Statement
                                                    Analysis
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">gavel</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Perpajakan & Audit
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Audit Internal &
                                                    Eksternal
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">business</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Manajemen Keuangan
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Budgeting & Cash
                                                    Flow
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">public</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Perpajakan Pajak
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">PPh 21, PPN, & BPHTB
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="p-6 bg-green-50 dark:bg-green-900 dark:bg-opacity-20 rounded-xl">
                            <h4 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Peluang Karir</h4>
                            <p class="text-gray-700 dark:text-gray-300 mb-6">Lulusan AKL memiliki prospek karir yang
                                sangat luas di berbagai sektor industri:</p>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                <div class="bg-white dark:bg-gray-800 p-4 rounded-xl text-center card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">account_balance</span>
                                    </div>
                                    <p class="text-sm font-medium text-gray-700 dark:text-gray-300">Staff Akuntan</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">Rp 6-15 Juta/bulan</p>
                                </div>
                                <div class="bg-white dark:bg-gray-800 p-4 rounded-xl text-center card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">receipt</span>
                                    </div>
                                    <p class="text-sm font-medium text-gray-700 dark:text-gray-300">Junior Auditor</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">Rp 8-20 Juta/bulan</p>
                                </div>
                                <div class="bg-white dark:bg-gray-800 p-4 rounded-xl text-center card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">analytics</span>
                                    </div>
                                    <p class="text-sm font-medium text-gray-700 dark:text-gray-300">Financial Analyst
                                    </p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">Rp 7-18 Juta/bulan</p>
                                </div>
                                <div class="bg-white dark:bg-gray-800 p-4 rounded-xl text-center card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">receipt_long</span>
                                    </div>
                                    <p class="text-sm font-medium text-gray-700 dark:text-gray-300">Tax Consultant</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">Rp 8-22 Juta/bulan</p>
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
                                    Jurusan AKL menerapkan kurikulum berbasis kompetensi yang disesuaikan dengan
                                    kebutuhan industri akuntansi dan keuangan terkini. Kurikulum ini dirancang untuk
                                    memberikan
                                    keseimbangan antara teori dan praktik, dengan porsi 70% praktikum dan 30% teori.
                                </p>
                                <div class="grid md:grid-cols-3 gap-4">
                                    <div class="bg-white dark:bg-gray-700 p-4 rounded-lg">
                                        <h5 class="font-medium text-gray-900 dark:text-white mb-2">Kelas X</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Fokus pada dasar-dasar
                                            akuntansi, prinsipip, dan etika profesi</p>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-4 rounded-lg">
                                        <h5 class="font-medium text-gray-900 dark:text-white mb-2">Kelas XI</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Pengembangan akuntansi
                                            perusahaan,
                                            perpajakan, dan audit keuangan</p>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-4 rounded-lg">
                                        <h5 class="font-medium text-gray-900 dark:text-white mb-2">Kelas XII</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Proyekek integrasi, audit,
                                            dan persiapan kerja/entrepreneurship</p>
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
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Memahami Etika Profesi dan Budaya Kerja Akuntansi</p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Memahami Aplikasi Pengolah Angka (Spreadsheet)
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">•Memahami Akuntansi Dasar
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">•Memahami Perbankan Dasar
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="font-medium text-gray-900 dark:text-white mb-2">Kelas XI</h5>
                                    <div class="grid md:grid-cols-2 gap-3">
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">•Menerapkan Akuntansi Perusahaan Jasa, Dagang, dan Manufaktur
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">•Menerapkan Akuntansi Lembaga/Instansi
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">•Menerapkan Komputer Akuntansi
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Menerapkan Akuntansi Keuangan
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="font-medium text-gray-900 dark:text-white mb-2">Kelas XII</h5>
                                    <div class="grid md:grid-cols-2 gap-3">
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">•Menerapkan Akuntansi Perusahaan Jasa, Dagang, dan Manufaktur secara Lanjutan</p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Menerapkan Akuntansi Lembaga/Instansi secara Profesional
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">•Menerapkan Penyusunan Laporan Keuangan</p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Menerapkan Administrasi Perpajakan sesuai Ketentuan</p>
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
                                        <span class="material-icons text-primary mr-2">calculate</span>
                                        <h5 class="font-medium text-gray-900 dark:text-white">Accounting Club</h5>
                                    </div>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Kompetisi akuntansi,
                                        workshop teknologi, dan sertifikasi preparation</p>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-4 card-hover">
                                    <div class="flex items-center mb-2">
                                        <span class="material-icons text-primary mr-2">bar_chart</span>
                                        <h5 class="font-medium text-gray-900 dark:text-white">Audit Club</h5>
                                    </div>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Audit competition,
                                        ethical hacking, dan security awareness</p>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-4 card-hover">
                                    <div class="flex items-center mb-2">
                                        <span class="material-icons text-primary mr-2">cloud</span>
                                        <h5 class="font-medium text-gray-900 dark:text-white">Cloud Computing Club</h5>
                                    </div>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">AWS/Azure study group,
                                        cloud certification preparation</p>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-4 card-hover">
                                    <div class="flex items-center mb-2">
                                        <span class="material-icons text-primary mr-2">business</span>
                                        <h5 class="font-medium text-gray-900 dark:text-white">IT Entrepreneurship</h5>
                                    </div>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Startup teknologi,
                                        IT service business, dan konsultasi</p>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-4 card-hover">
                                    <div class="flex items-center mb-2">
                                        <span class="material-icons text-primary mr-2">school</span>
                                        <h5 class="font-medium text-gray-900 dark:text-white">Accounting Tutoring
                                    </div>
                                </div>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Program bimbing untuk
                                    siswa yang kesulitan</p>
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
                    <img src="ak1.jpg" alt="Kegiatan AKL"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="ak2.jpg" alt="Kegiatan AKL"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="ak3.jpg" alt="Kegiatan AKL"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="ak4.jpg" alt="Kegiatan AKL"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="ak5.jpg" alt="Kegiatan AKL"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="ak6.jpg" alt="Kegiatan AKL"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="ak7.jpg" alt="Kegiatan AKL"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="ak8.jpg" alt="Kegiatan AKL"
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
                        <img src="Ak9.jpeg" alt="Alumni"
                            class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Tarisha Oktaviani Hermansyah</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Putri Hijabfluencer 2025</p>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 text-sm mb-3">Alumni AKL Angkatan 2022</p>
                    <p class="text-gray-600 dark:text-gray-400 text-sm italic">"Bersekolah di jurusan Akuntansi SMKN 1 Kawali memberikan saya banyak pengalaman berharga, tidak hanya dalam memahami pencatatan keuangan dan laporan akuntansi, tetapi juga dalam melatih ketelitian, tanggung jawab, dan disiplin. Didukung oleh guru-guru yang kompeten serta lingkungan belajar yang nyaman, saya merasa dibimbing untuk siap menghadapi dunia kerja maupun melanjutkan pendidikan ke jenjang yang lebih tinggi. Jurusan Akuntansi di SMKN 1 Kawali menjadi fondasi penting bagi saya dalam membangun keterampilan profesional dan kepercayaan diri untuk masa depan."</p>
                </div>
                <div class="bg-gray-50 dark:bg-gray-700 rounded-xl p-6 card-hover">
                    <div class="flex items-center mb-4">
                        <img src="dzikri.jpeg" alt="Alumni"
                            class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Nadia Permata</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Alumni 2020</p>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 text-sm mb-3">Junior Accountant at PWC</p>
                    <p class="text-gray-600 dark:text-gray-400 text-sm italic">"Praktikum di lab audit memberikan saya
                        pengalaman nyata untuk karir di bidang audit."</p>
                </div>
                <div class="bg-gray-50 dark:bg-gray-700 rounded-xl p-6 card-hover">
                    <div class="flex items-center mb-4">
                        <img src="https://sfile.chatglm.cn/images-ppt/accounting-finance-professional.jpg" alt="Alumni"
                            class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Dimas Aryo</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Alumni 2022</p>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 text-sm mb-3">Junior Tax Consultant</p>
                    <p class="text-gray-600 dark:text-gray-400 text-sm italic">"Kurikulum AKL yang komprehensif sangat
                        relevan dengan standar industri saat ini. Saya langsung siap kerja setelah lulus."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
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