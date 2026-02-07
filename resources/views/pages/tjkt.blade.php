<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Informasi Jurusan TJKT - SMKN 1 Kawali</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
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
                        primary: "#3b82f6",
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
                        Jurusan Teknik Jaringan Komputer dan Telekomunikasi (TJKT)
                    </h1>
                    <p class="text-gray-100 text-lg mb-6">
                        Jurusan yang mempersiapkan ahli dalam instalasi, konfigurasi, dan pemeliharaan
                        jaringan komputer serta sistem telekomunikasi modern.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-lg px-4 py-2 text-white">
                            <span class="material-icons mr-2 text-sm">people</span>
                            <span class="text-sm">120+ Siswa</span>
                        </div>
                        <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-lg px-4 py-2 text-white">
                            <span class="material-icons mr-2 text-sm">person</span>
                            <span class="text-sm">8 Guru Profesional</span>
                        </div>
                        <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-lg px-4 py-2 text-white">
                            <span class="material-icons mr-2 text-sm">history</span>
                            <span class="text-sm">Berdiri sejak 2014</span>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/3 flex justify-center">
                    <img src="tkj6.jpg" alt="Siswa TJKT"
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
                    Teknik Jaringan Komputer dan Telekomunikasi adalah Kompetensi Kejuruan yang memiliki pengetahuan, keterampilan, nilai serta sikap yang terintegrasi dan kecakapan kerja dalam bidang jaringan komputer dan sistem telekomunikasi dengan menerapkan sikap kewirausahaan serta mampu beradaptasi dengan perkembangan teknologi jaringan guna memenuhi tuntutan dunia kerja masa kini dan masa yang akan datang.
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
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Teknik Jaringan Komputer dan Telekomunikasi</p>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-gray-800 rounded-xl p-5 shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-700 hover:-translate-y-1">
                        <div class="flex flex-col items-center text-center">
                            <div class="w-14 h-14 bg-gradient-to-br from-blue-50 to-blue-100 dark:from-blue-900 dark:to-blue-800 rounded-full flex items-center justify-center mb-3">
                                <span class="material-icons text-primary text-xl">school</span>
                            </div>
                            <h5 class="font-medium text-gray-900 dark:text-white mb-1">Kepala Jurusan</h5>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Gian Darmawan, S.Kom.</p>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-gray-800 rounded-xl p-5 shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-700 hover:-translate-y-1">
                        <div class="flex flex-col items-center text-center">
                            <div class="w-14 h-14 bg-gradient-to-br from-blue-50 to-blue-100 dark:from-blue-900 dark:to-blue-800 rounded-full flex items-center justify-center mb-3">
                                <span class="material-icons text-primary text-xl">business</span>
                            </div>
                            <h5 class="font-medium text-gray-900 dark:text-white mb-1">Mitra Industri</h5>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Skyline</p>
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
                                        <span class="material-icons text-primary">router</span>
                                    </div>
                                    <h5 class="font-semibold text-gray-900 dark:text-white mb-2">Lab Jaringan</h5>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">40 unit PC dengan perangkat
                                        jaringan lengkap untuk praktikum</p>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Switch Managed Layer 2/3</li>
                                        <li>• Router Cisco & Mikrotik</li>
                                        <li>• Access Point Enterprise</li>
                                        <li>• Firewall & Security Appliance</li>
                                    </ul>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                        <span class="material-icons text-primary">settings_input_antenna</span>
                                    </div>
                                    <h5 class="font-semibold text-gray-900 dark:text-white mb-2">Lab Telekomunikasi</h5>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">Peralatan praktikum untuk
                                        sistem telekomunikasi modern</p>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Perangkat FO (Fiber Optic)</li>
                                        <li>• Radio Microwave & VSAT</li>
                                        <li>• BTS & GSM Equipment</li>
                                        <li>• VoIP Gateway & IP PBX</li>
                                    </ul>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                        <span class="material-icons text-primary">dns</span>
                                    </div>
                                    <h5 class="font-semibold text-gray-900 dark:text-white mb-2">Server Room</h5>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">Infrastruktur server untuk
                                        praktikum administrasi jaringan</p>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Server Dell PowerEdge</li>
                                        <li>• NAS & SAN Storage</li>
                                        <li>• VMware vSphere</li>
                                        <li>• Backup & Disaster Recovery</li>
                                    </ul>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                        <span class="material-icons text-primary">security</span>
                                    </div>
                                    <h5 class="font-semibold text-gray-900 dark:text-white mb-2">Lab Keamanan Jaringan
                                    </h5>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">Peralatan untuk praktikum
                                        keamanan siber dan ethical hacking</p>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Firewall Palo Alto</li>
                                        <li>• SIEM Systems</li>
                                        <li>• Intrusion Detection</li>
                                        <li>• Forensics Tools</li>
                                    </ul>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                        <span class="material-icons text-primary">wifi</span>
                                    </div>
                                    <h5 class="font-semibold text-gray-900 dark:text-white mb-2">Lab Wireless</h5>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">Area khusus untuk praktikum
                                        jaringan nirkabel</p>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Wireless Controllers</li>
                                        <li>• Spectrum Analyzer</li>
                                        <li>• Site Survey Tools</li>
                                        <li>• Heat Mapping Software</li>
                                    </ul>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                        <span class="material-icons text-primary">cloud</span>
                                    </div>
                                    <h5 class="font-semibold text-gray-900 dark:text-white mb-2">Cloud Lab</h5>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">Praktikum cloud computing
                                        dan virtualisasi</p>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• AWS/Azure/GCP Access</li>
                                        <li>• Docker & Kubernetes</li>
                                        <li>• Private Cloud Setup</li>
                                        <li>• DevOps Tools</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h4 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white">Sertifikasi & Software
                            </h4>
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                                    <div class="text-center">
                                        <div
                                            class="w-16 h-16 bg-white dark:bg-gray-700 rounded-lg flex items-center justify-center mx-auto mb-2">
                                            <span class="material-icons text-primary">verified</span>
                                        </div>
                                        <p class="text-sm font-medium text-gray-900 dark:text-white">Cisco CCNA</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">Networking</p>
                                    </div>
                                    <div class="text-center">
                                        <div
                                            class="w-16 h-16 bg-white dark:bg-gray-700 rounded-lg flex items-center justify-center mx-auto mb-2">
                                            <span class="material-icons text-primary">verified</span>
                                        </div>
                                        <p class="text-sm font-medium text-gray-900 dark:text-white">CompTIA Network+
                                        </p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">Foundation</p>
                                    </div>
                                    <div class="text-center">
                                        <div
                                            class="w-16 h-16 bg-white dark:bg-gray-700 rounded-lg flex items-center justify-center mx-auto mb-2">
                                            <span class="material-icons text-primary">verified</span>
                                        </div>
                                        <p class="text-sm font-medium text-gray-900 dark:text-white">Mikrotik MTCNA</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">RouterOS</p>
                                    </div>
                                    <div class="text-center">
                                        <div
                                            class="w-16 h-16 bg-white dark:bg-gray-700 rounded-lg flex items-center justify-center mx-auto mb-2">
                                            <span class="material-icons text-primary">verified</span>
                                        </div>
                                        <p class="text-sm font-medium text-gray-900 dark:text-white">AWS Cloud</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">Practitioner</p>
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
                <p class="text-sm opacity-90">Gian Darmawan, S.Kom.</p>
                <p class="text-xs opacity-75 mt-2"></p>
            </div>
        </div>

        <!-- Detail Guru -->
        <div class="grid md:grid-cols-3 gap-6 mb-8">
            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Guru Dasar Dasar Program Keahlian</h4>
                <div class="space-y-3">
                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                        <p class="font-medium text-gray-900 dark:text-white">Gian Darmawan, S.Kom</p>
                    </div>
                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                        <p class="font-medium text-gray-900 dark:text-white">Roni Sunandar, M.Kom</p>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Guru Teknik Jaringan Komputer dan Telekomunikasi</h4>
                <div class="space-y-3">
                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                        <p class="font-medium text-gray-900 dark:text-white">Dian Sediana, M.kom</p>
                    </div>
                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                        <p class="font-medium text-gray-900 dark:text-white">Dian Sudiana, S.Kom</p>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Guru Mata Pelajaran Pilihan</h4>
                <div class="space-y-3">
                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                        <p class="font-medium text-gray-900 dark:text-white">Anas Anshori Safari, S.Pd</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Struktur Kelas -->
        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Struktur Kelas X TJKT</h4>
                <div class="grid grid-cols-1 gap-3">
                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                        <span class="text-gray-700 dark:text-gray-300">Wali Kelas X TJKT 1 : Irma Sri Suryantini, S.Pd</span>
                    </div>
                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                        <span class="text-gray-700 dark:text-gray-300">Wali Kelas X TJKT 2 : Mia Prajawastuti, S.Pd</span>
                    </div>
                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                        <span class="text-gray-700 dark:text-gray-300">Wali Kelas X TJKT 3 : Khoerul Umam Al Awahir, S.Pd</span>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Struktur Kelas XI TJKT</h4>
                <div class="grid grid-cols-1 gap-3">
                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                        <span class="text-gray-700 dark:text-gray-300">Wali Kelas XI TJKT 1 : Dian Sudiana, S.Kom</span>
                    </div>
                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                        <span class="text-gray-700 dark:text-gray-300">Wali Kelas XI TJKT 2 : Siti Maesaroh, S.Pd.I</span>
                    </div>
                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                        <span class="text-gray-700 dark:text-gray-300">Wali Kelas XI TJKT 3 : Mumu Mubarak, S.H.I</span>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Struktur Kelas XII TJKT </h4>
                <div class="grid grid-cols-1 gap-3">
                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                        <span class="text-gray-700 dark:text-gray-300">Wali Kelas XII TJKT 1 : Nela Lismaya, S.Pd</span>
                    </div>
                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                        <span class="text-gray-700 dark:text-gray-300">Wali Kelas XII TJKT 2 : Anas Anshori Safari, S.Pd</span>
                    </div>
                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                        <span class="text-gray-700 dark:text-gray-300">Wali Kelas XII TJKT 3 : Santi Sulastri, S.Pd</span>
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
                                            <span class="material-icons text-primary mr-3 mt-1">router</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Administrasi
                                                    Jaringan
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Konfigurasi Router,
                                                    Switch, & Firewall
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span
                                                class="material-icons text-primary mr-3 mt-1">settings_input_antenna</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Teknologi
                                                    Telekomunikasi
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">FO, Wireless, VoIP,
                                                    & Microwave
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">security</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Keamanan Jaringan
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Firewall, VPN, &
                                                    Security Monitoring
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">cloud</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Cloud Computing
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Virtualisasi & Cloud
                                                    Services
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">wifi</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Jaringan Nirkabel
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">WiFi Design & Site
                                                    Survey
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
                                            <span class="material-icons text-primary mr-3 mt-1">build</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Infrastruktur
                                                    Jaringan
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Cabling & Physical
                                                    Layer
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">dns</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Server
                                                    Administration
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Windows & Linux
                                                    Server
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">support_agent</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Technical Support
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Troubleshooting &
                                                    Help Desk
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">language</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Programming Basics
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Scripting &
                                                    Automation
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">business</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Project Management
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">ITIL & Service
                                                    Management
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="p-6 bg-blue-50 dark:bg-blue-900 dark:bg-opacity-20 rounded-xl">
                            <h4 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Peluang Karir</h4>
                            <p class="text-gray-700 dark:text-gray-300 mb-6">Lulusan TJKT memiliki prospek karir yang
                                sangat luas di era digital:</p>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                <div class="bg-white dark:bg-gray-800 p-4 rounded-xl text-center card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">router</span>
                                    </div>
                                    <p class="text-sm font-medium text-gray-700 dark:text-gray-300">Network Engineer</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">Rp 8-20 Juta/bulan</p>
                                </div>
                                <div class="bg-white dark:bg-gray-800 p-4 rounded-xl text-center card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">security</span>
                                    </div>
                                    <p class="text-sm font-medium text-gray-700 dark:text-gray-300">Security Engineer
                                    </p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">Rp 10-25 Juta/bulan</p>
                                </div>
                                <div class="bg-white dark:bg-gray-800 p-4 rounded-xl text-center card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">cloud</span>
                                    </div>
                                    <p class="text-sm font-medium text-gray-700 dark:text-gray-300">Cloud Engineer</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">Rp 12-30 Juta/bulan</p>
                                </div>
                                <div class="bg-white dark:bg-gray-800 p-4 rounded-xl text-center card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">support_agent</span>
                                    </div>
                                    <p class="text-sm font-medium text-gray-700 dark:text-gray-300">IT Support</p>
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
                                    Jurusan TJKT menerapkan kurikulum berbasis kompetensi yang disesuaikan dengan
                                    kebutuhan industri teknologi informasi dan telekomunikasi terkini. Kurikulum ini
                                    dirancang untuk memberikan
                                    keseimbangan antara teori dan praktik, dengan porsi 70% praktikum dan 30% teori.
                                </p>
                                <div class="grid md:grid-cols-3 gap-4">
                                    <div class="bg-white dark:bg-gray-700 p-4 rounded-lg">
                                        <h5 class="font-medium text-gray-900 dark:text-white mb-2">Kelas X</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Fokus pada dasar-dasar
                                            jaringan komputer dan telekomunikasi fundamental</p>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-4 rounded-lg">
                                        <h5 class="font-medium text-gray-900 dark:text-white mb-2">Kelas XI</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Pengembangan jaringan
                                            lanjutan,
                                            keamanan, dan sistem telekomunikasi</p>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-4 rounded-lg">
                                        <h5 class="font-medium text-gray-900 dark:text-white mb-2">Kelas XII</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Proyek integrasi, cloud
                                            computing,
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
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Memahami Perencanaan dan Pengalamatan Jaringan</p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Memahami Topologi dan Arsitektur Jaringan Komputer
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Memahami Teknologi Jaringan Kabel dan Nirkabel
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Memahami Dasar-dasar Instalasi Jaringan Komputer
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="font-medium text-gray-900 dark:text-white mb-2">Kelas XI</h5>
                                    <div class="grid md:grid-cols-2 gap-3">
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Menerapkan Instalasi dan Perawatan Jaringan Kabel dan Nirkabel
                                                Lanjutan
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Menerapkan Teknologi Jaringan Fiber Optic dan Wireless
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Menerapkan Konfigurasi Perangkat Jaringan
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Menerapkan Routing, VLAN, dan Manajemen Bandwidth
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="font-medium text-gray-900 dark:text-white mb-2">Kelas XII</h5>
                                    <div class="grid md:grid-cols-2 gap-3">
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Menerapkan Administrasi Sistem Jaringan
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Menerapkan Konfigurasi dan Manajemen Server
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Menerapkan Layanan Server Jaringan (DNS, DHCP, Web, FTP, Mail, dan File Server)
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Menerapkan Keamanan dan Monitoring Sistem Jaringan</p>
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
                                        <span class="material-icons text-primary mr-2">router</span>
                                        <h5 class="font-medium text-gray-900 dark:text-white">Network Club</h5>
                                    </div>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Kompetisi networking,
                                        workshop teknologi, dan sertifikasi preparation</p>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-4 card-hover">
                                    <div class="flex items-center mb-2">
                                        <span class="material-icons text-primary mr-2">security</span>
                                        <h5 class="font-medium text-gray-900 dark:text-white">Cyber Security Club</h5>
                                    </div>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Ethical hacking,
                                        CTF competition, dan security awareness</p>
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
                                        <span class="material-icons text-primary mr-2">wifi</span>
                                        <h5 class="font-medium text-gray-900 dark:text-white">Wireless Club</h5>
                                    </div>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">WiFi community projects,
                                        mesh networking, dan hotspot setup</p>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-4 card-hover">
                                    <div class="flex items-center mb-2">
                                        <span class="material-icons text-primary mr-2">code</span>
                                        <h5 class="font-medium text-gray-900 dark:text-white">Programming Club</h5>
                                    </div>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Network automation,
                                        scripting, dan DevOps basics</p>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-4 card-hover">
                                    <div class="flex items-center mb-2">
                                        <span class="material-icons text-primary mr-2">business</span>
                                        <h5 class="font-medium text-gray-900 dark:text-white">IT Entrepreneurship</h5>
                                    </div>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Startup teknologi,
                                        IT service business, dan konsultasi</p>
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
                    <img src="tk1.jpg" alt="Kegiatan TJKT"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="tkj2.jpg" alt="Kegiatan TJKT"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="tkj3.jpg" alt="Kegiatan TJKT"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="tkj4.jpg" alt="Kegiatan TJKT"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="tkj5.jpg" alt="Kegiatan TJKT"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="tkj6.jpg" alt="Kegiatan TJKT"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="tkj7.jpg" alt="Kegiatan TJKT"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="tkj8.jpg" alt="Kegiatan TJKT"
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
                        <img src="https://picsum.photos/seed/alumni-tjkt1/100/100.jpg" alt="Alumni"
                            class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Reza Fahlevi</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Alumni 2021</p>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 text-sm mb-3">Network Engineer at Telkom Indonesia</p>
                    <p class="text-gray-600 dark:text-gray-400 text-sm italic">"Sertifikasi Cisco yang saya dapatkan di
                        TJKT menjadi modal utama karir saya. Pembelajaran praktikum yang intensif sangat membantu siap
                        kerja."</p>
                </div>
                <div class="bg-gray-50 dark:bg-gray-700 rounded-xl p-6 card-hover">
                    <div class="flex items-center mb-4">
                        <img src="https://picsum.photos/seed/alumni-tjkt2/100/100.jpg" alt="Alumni"
                            class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Rosa Nur Rosilawati</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Universitas Galuh</p>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 text-sm mb-3">Alumni Jurusan TJKT Angkatan 2025</p>
                    <p class="text-gray-600 dark:text-gray-400 text-sm italic">"Sebagai alumni SMKN 1 Kawali Jurusan Teknik Komputer dan Jaringan, saya merasa sangat bangga dan terinspirasi oleh pengalaman berharga yang saya peroleh selama masa sekolah. Ilmu-ilmu teknis seperti jaringan komputer dan pemrograman telah membekali saya dengan keterampilan praktis yang bisa di terapkan di dunia kerja. Selain itu, sekolah ini juga menumbuhkan soft skills seperti kerja tim, komunikasi efektif, dan ketahanan dalam menghadapi tantangan, yang membantu saya beradaptasi di lingkungan profesional dan akademik. Terima kasih SMKN 1 Kawali atas bekal yang bermanfaat!"</p>
                </div>
                <div class="bg-gray-50 dark:bg-gray-700 rounded-xl p-6 card-hover">
                    <div class="flex items-center mb-4">
                        <img src="https://picsum.photos/seed/alumni-tjkt3/100/100.jpg" alt="Alumni"
                            class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Dimas Aryo</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Alumni 2022</p>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 text-sm mb-3">Cloud Engineer at Tokopedia</p>
                    <p class="text-gray-600 dark:text-gray-400 text-sm italic">"Kurikulum TJKT yang sudah mengadopsi
                        cloud computing sejak dulu membuat saya siap menghadapi transformasi digital di industri
                        teknologi."</p>
                </div>
            </div>
        </div>
    </section>
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