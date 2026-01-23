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
                            <span class="text-sm">Berdiri sejak 2013</span>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/3 flex justify-center">
                    <img src="https://sfile.chatglm.cn/images-ppt/accounting-finance-calculator.jpg" alt="Siswa AKL"
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
                                    Jurusan Akuntansi dan Keuangan Lembaga (AKL) di SMKN 1 Kawali dirancang untuk
                                    menghasilkan lulusan yang ahli dalam pencatatan, pengolahan, dan pelaporan keuangan
                                    perusahaan. Dengan kurikulum yang selalu update sesuai kebutuhan industri,
                                    siswa dibekali dengan keterampilan teknis dan soft skill yang relevan
                                    untuk karir di era digital.
                                </p>
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-8">
                            <div>
                                <h4 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white">Data Jurusan</h4>
                                <div class="space-y-4">
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">account_balance</span>
                                        <div>
                                            <h5 class="font-medium text-gray-900 dark:text-white">Nama Lengkap</h5>
                                            <p class="text-gray-600 dark:text-gray-400">Akuntansi dan Keuangan Lembaga
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">school</span>
                                        <div>
                                            <h5 class="font-medium text-gray-900 dark:text-white">Kepala Jurusan</h5>
                                            <p class="text-gray-600 dark:text-gray-400">Ibu Siti Nurhaliza, S.E., M.Ak.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">business</span>
                                        <div>
                                            <h5 class="font-medium text-gray-900 dark:text-white">Mitra Industri</h5>
                                            <p class="text-gray-600 dark:text-gray-400">KAP, KPP, Bank, Perusahaan
                                                Manufaktur</p>
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
                                            <p class="text-gray-600 dark:text-gray-400">95% (2022/2023)</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">work</span>
                                        <div>
                                            <h5 class="font-medium text-gray-900 dark:text-white">Tingkat Penyerapan
                                                Kerja</h5>
                                            <p class="text-gray-600 dark:text-gray-400">90% dalam 6 bulan setelah lulus
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">emoji_events</span>
                                        <div>
                                            <h5 class="font-medium text-gray-900 dark:text-white">Prestasi</h5>
                                            <p class="text-gray-600 dark:text-gray-400">Juara 1 LKS Akuntansi
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
                                <p class="text-sm opacity-90">Ibu Siti Nurhaliza, S.E., M.Ak.</p>
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
                                        <span class="material-icons text-primary">calculate</span>
                                    </div>
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Guru Akuntansi
                                    </h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">4 Guru</p>
                                </div>
                                <div
                                    class="org-chart-item bg-gray-100 dark:bg-gray-800 rounded-xl p-4 text-center max-w-xs card-hover">
                                    <div
                                        class="w-16 h-16 bg-primary bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-3">
                                        <span class="material-icons text-primary">receipt_long</span>
                                    </div>
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Guru Perpajakan
                                    </h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">3 Guru</p>
                                </div>
                            </div>
                        </div>

                        <!-- Detail Guru -->
                        <div class="grid md:grid-cols-2 gap-6 mb-8">
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Guru Akuntansi</h4>
                                <div class="space-y-3">
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <p class="font-medium text-gray-900 dark:text-white">Ibu Rina Wijaya, S.E.,
                                            M.Ak.
                                        </p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Akuntansi Keuangan & Pajak
                                        </p>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <p class="font-medium text-gray-900 dark:text-white">Bapak Ahmad Fauzi, S.E.,
                                            M.Ak.
                                        </p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Akuntansi Manajerial &
                                            Perpajakan
                                        </p>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <p class="font-medium text-gray-900 dark:text-white">Ibu Maya Sari, S.E.
                                        </p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Akuntansi Biaya & Komersial
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Guru Perpajakan
                                </h4>
                                <div class="space-y-3">
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <p class="font-medium text-gray-900 dark:text-white">Bapak Budi Santoso, S.E.
                                        </p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Perpajakan & Audit
                                        </p>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <p class="font-medium text-gray-900 dark:text-white">Ibu Dina Azahra, S.E.
                                        </p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Pajak & Perpajakan
                                        </p>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <p class="font-medium text-gray-900 dark:text-white">Bapak Fajar Saputra, S.E.
                                        </p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Sistem Informasi Akuntansi
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Struktur Kelas -->
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Struktur Kelas X AKL</h4>
                                <div class="grid grid-cols-1 gap-3">
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <span class="text-gray-700 dark:text-gray-300">Wali Kelas: Ibu Rina Wijaya,
                                            S.E., M.Ak.</span>
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
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Struktur Kelas XI AKL</h4>
                                <div class="grid grid-cols-1 gap-3">
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <span class="text-gray-700 dark:text-gray-300">Wali Kelas: Bapak Ahmad Fauzi,
                                            S.E., M.Ak.</span>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <span class="text-gray-700 dark:text-gray-300">Ketua Kelas: Bayu Setiawan</span>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <span class="text-gray-700 dark:text-gray-300">Wakil Ketua: Citra Dewi</span>
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
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Dasar-Dasar
                                                Akuntansi</p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Akuntansi Perusahaan
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Prinsip Akuntansi
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Etika Profesi
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="font-medium text-gray-900 dark:text-white mb-2">Kelas XI</h5>
                                    <div class="grid md:grid-cols-2 gap-3">
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Akuntansi Perusahaan
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Perpajakan & Audit
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Akuntansi Biaya
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Perpajakan
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="font-medium text-gray-900 dark:text-white mb-2">Kelas XII</h5>
                                    <div class="grid md:grid-cols-2 gap-3">
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Proyek Integrasi
                                                Akuntansi</p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Audit Laporan Keuangan
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Sistem Informasi
                                                Akuntansi</p>
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
                    <img src="https://picsum.photos/seed/seed/akl1/400/300.jpg" alt="Kegiatan AKL"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/akl2/400/300.jpg" alt="Kegiatan AKL"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/akl3/400/300.jpg" alt="Kegiatan AKL"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/akl4/400/300.jpg" alt="Kegiatan AKL"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/akl5/400/300.jpg" alt="Kegiatan AKL"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/akl6/400/300.jpg" alt="Kegiatan AKL"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/akl7/400/300.jpg" alt="Kegiatan AKL"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/akl8/400/300.jpg" alt="Kegiatan AKL"
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
                        <img src="https://sfile.chatglm.cn/images-ppt/accounting-finance-professional.jpg" alt="Alumni"
                            class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Rizki Ananda</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Alumni 2021</p>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 text-sm mb-3">Junior Auditor at KAP</p>
                    <p class="text-gray-600 dark:text-gray-400 text-sm italic">"Jurusan AKL memberikan saya fondasi yang
                        kuat dalam akuntansi berstandar internasional. Materinya selalu update dan guru-gurunya sangat
                        mendukung."</p>
                </div>
                <div class="bg-gray-50 dark:bg-gray-700 rounded-xl p-6 card-hover">
                    <div class="flex items-center mb-4">
                        <img src="https://sfile.chatglm.cn/images-ppt/finance-analyst.jpg" alt="Alumni"
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