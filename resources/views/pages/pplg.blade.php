<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Informasi Jurusan PPLG - SMKN 1 Kawali</title>

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
                        primary: "#8b5cf6",
                        secondary: "#ec4899",
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
            border-bottom: 3px solid #8b5cf6;
            color: #8b5cf6;
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
            border-left: 4px solid #8b5cf6;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -8px;
            top: 8px;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background-color: #8b5cf6;
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
                        Jurusan Pengembangan Perangkat Lunak dan Gim (PPLG)
                    </h1>
                    <p class="text-gray-100 text-lg mb-6">
                        Jurusan yang fokus pada kreativitas dan logika untuk membangun aplikasi web, mobile, hingga game
                        interaktif yang inovatif.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-lg px-4 py-2 text-white">
                            <span class="material-icons mr-2 text-sm">people</span>
                            <span class="text-sm">150+ Siswa</span>
                        </div>
                        <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-lg px-4 py-2 text-white">
                            <span class="material-icons mr-2 text-sm">person</span>
                            <span class="text-sm">10 Guru Profesional</span>
                        </div>
                        <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-lg px-4 py-2 text-white">
                            <span class="material-icons mr-2 text-sm">history</span>
                            <span class="text-sm">Berdiri sejak 2018</span>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/3 flex justify-center">
                    <img src="https://sfile.chatglm.cn/images-ppt/8e5b2f9e9e9c.jpg" alt="Siswa PPLG"
                        class="w-full max-w-sm h-48 object-cover rounded-xl shadow-lg">
                </div>
            </div>
        </div>
    </header>

    <!-- INFORMASI JURUSAN -->
    <main class="py-12">
        <div class="container mx-auto px-4">
            <!-- QUICK INFO -->
          

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
                                    Jurusan Pengembangan Perangkat Lunak dan Gim (PPLG) di SMKN 1 Kawali dirancang untuk
                                    menghasilkan lulusan yang ahli dalam merancang, mengembangkan, dan memelihara
                                    perangkat lunak serta gim. Dengan kurikulum yang selalu update sesuai kebutuhan
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
                                        <span class="material-icons text-primary mr-3 mt-1">tag</span>
                                        <div>
                                            <h5 class="font-medium text-gray-900 dark:text-white">Nama Lengkap</h5>
                                            <p class="text-gray-600 dark:text-gray-400">Pengembangan Perangkat Lunak dan
                                                Gim</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">school</span>
                                        <div>
                                            <h5 class="font-medium text-gray-900 dark:text-white">Kepala Jurusan</h5>
                                            <p class="text-gray-600 dark:text-gray-400">Bapak Candra Kusuma, S.Kom.,
                                                M.T.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">business</span>
                                        <div>
                                            <h5 class="font-medium text-gray-900 dark:text-white">Mitra Industri</h5>
                                            <p class="text-gray-600 dark:text-gray-400">20+ perusahaan teknologi dan
                                                startup</p>
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
                                            <p class="text-gray-600 dark:text-gray-400">90% dalam 6 bulan setelah lulus
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">emoji_events</span>
                                        <div>
                                            <h5 class="font-medium text-gray-900 dark:text-white">Prestasi</h5>
                                            <p class="text-gray-600 dark:text-gray-400">Juara 1 LKS Game Development
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
                                    <h5 class="font-semibold text-gray-900 dark:text-white mb-2">Lab Pemrograman</h5>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">40 unit PC high-spec untuk
                                        coding dan development</p>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Intel Core i5 Gen 11</li>
                                        <li>• RAM 16GB DDR4</li>
                                        <li>• SSD 512GB</li>
                                        <li>• Monitor 24" Full HD</li>
                                    </ul>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                        <span class="material-icons text-primary">sports_esports</span>
                                    </div>
                                    <h5 class="font-semibold text-gray-900 dark:text-white mb-2">Lab Game Dev</h5>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">PC dengan GPU khusus untuk
                                        pengembangan dan testing game</p>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Intel Core i7 Gen 11</li>
                                        <li>• RAM 32GB DDR4</li>
                                        <li>• RTX 3060 Ti</li>
                                        <li>• SSD 1TB NVMe</li>
                                    </ul>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                        <span class="material-icons text-primary">dns</span>
                                    </div>
                                    <h5 class="font-semibold text-gray-900 dark:text-white mb-2">Server Room</h5>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">Praktikum backend,
                                        database, dan deployment</p>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• 3 Unit Server Dell PowerEdge</li>
                                        <li>• Network Storage 20TB</li>
                                        <li>• Switch Managed 24 Port</li>
                                        <li>• UPS 10KVA</li>
                                    </ul>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                        <span class="material-icons text-primary">brush</span>
                                    </div>
                                    <h5 class="font-semibold text-gray-900 dark:text-white mb-2">Lab Desain</h5>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">PC dengan tablet grafis
                                        untuk desain UI/UX dan aset game</p>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• iMac 24" M1</li>
                                        <li>• Wacom Intuos Pro</li>
                                        <li>• Adobe Creative Cloud</li>
                                        <li>• Monitor Calibrated</li>
                                    </ul>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                        <span class="material-icons text-primary">videogame_asset</span>
                                    </div>
                                    <h5 class="font-semibold text-gray-900 dark:text-white mb-2">Gaming Corner</h5>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">Area untuk riset game dan
                                        testing dengan konsol modern</p>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• PlayStation 5</li>
                                        <li>• Xbox Series X</li>
                                        <li>• Nintendo Switch</li>
                                        <li>• VR Headset</li>
                                    </ul>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                        <span class="material-icons text-primary">wifi</span>
                                    </div>
                                    <h5 class="font-semibold text-gray-900 dark:text-white mb-2">Internet Fiber</h5>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">Koneksi internet dedicated
                                        berkecepatan tinggi</p>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• 500 Mbps Dedicated</li>
                                        <li>• WiFi 6 Coverage</li>
                                        <li>• Network Monitoring</li>
                                        <li>• Content Filter</li>
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
                                            <span class="material-icons text-primary">code</span>
                                        </div>
                                        <p class="text-sm font-medium text-gray-900 dark:text-white">Visual Studio</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">Professional</p>
                                    </div>
                                    <div class="text-center">
                                        <div
                                            class="w-16 h-16 bg-white dark:bg-gray-700 rounded-lg flex items-center justify-center mx-auto mb-2">
                                            <span class="material-icons text-primary">sports_esports</span>
                                        </div>
                                        <p class="text-sm font-medium text-gray-900 dark:text-white">Unity Pro</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">Education License</p>
                                    </div>
                                    <div class="text-center">
                                        <div
                                            class="w-16 h-16 bg-white dark:bg-gray-700 rounded-lg flex items-center justify-center mx-auto mb-2">
                                            <span class="material-icons text-primary">brush</span>
                                        </div>
                                        <p class="text-sm font-medium text-gray-900 dark:text-white">Adobe CC</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">All Apps</p>
                                    </div>
                                    <div class="text-center">
                                        <div
                                            class="w-16 h-16 bg-white dark:bg-gray-700 rounded-lg flex items-center justify-center mx-auto mb-2">
                                            <span class="material-icons text-primary">storage</span>
                                        </div>
                                        <p class="text-sm font-medium text-gray-900 dark:text-white">AutoDesk</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">Education Suite</p>
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
                                    <span class="material-icons text-3xl">account_circle</span>
                                </div>
                                <h4 class="font-bold text-lg">Kepala Jurusan</h4>
                                <p class="text-sm opacity-90">Bapak Candra Kusuma, S.Kom., M.T.</p>
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
                                        <span class="material-icons text-primary">laptop_mac</span>
                                    </div>
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Guru Pemrograman</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">6 Guru</p>
                                </div>
                                <div
                                    class="org-chart-item bg-gray-100 dark:bg-gray-800 rounded-xl p-4 text-center max-w-xs card-hover">
                                    <div
                                        class="w-16 h-16 bg-primary bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-3">
                                        <span class="material-icons text-primary">palette</span>
                                    </div>
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Guru Desain & Multimedia
                                    </h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">4 Guru</p>
                                </div>
                            </div>
                        </div>

                        <!-- Detail Guru -->
                        <div class="grid md:grid-cols-2 gap-6 mb-8">
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Guru Pemrograman</h4>
                                <div class="space-y-3">
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <p class="font-medium text-gray-900 dark:text-white">Bapak Ahmad Fauzi, S.Kom.
                                        </p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Pemrograman Web & Mobile</p>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <p class="font-medium text-gray-900 dark:text-white">Ibu Sarah Permata, S.T.,
                                            M.Kom.</p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Algoritma & Struktur Data
                                        </p>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <p class="font-medium text-gray-900 dark:text-white">Bapak Budi Santoso, S.Kom.
                                        </p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Database & Backend
                                            Development</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Guru Desain & Multimedia
                                </h4>
                                <div class="space-y-3">
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <p class="font-medium text-gray-900 dark:text-white">Ibu Rina Wijaya, S.Ds.</p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">UI/UX Design</p>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <p class="font-medium text-gray-900 dark:text-white">Bapak Dedi Pratama, S.Sn.
                                        </p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Game Design & 3D Modeling
                                        </p>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <p class="font-medium text-gray-900 dark:text-white">Ibu Maya Sari, S.Kom.</p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Animasi & Visual Effects</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Struktur Kelas -->
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Struktur Kelas X PPLG</h4>
                                <div class="grid grid-cols-1 gap-3">
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <span class="text-gray-700 dark:text-gray-300">Wali Kelas: Ibu Maya Putri,
                                            S.Kom.</span>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <span class="text-gray-700 dark:text-gray-300">Ketua Kelas: Rizki Pratama</span>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <span class="text-gray-700 dark:text-gray-300">Wakil Ketua: Salsa Bilqis</span>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Struktur Kelas XI PPLG</h4>
                                <div class="grid grid-cols-1 gap-3">
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <span class="text-gray-700 dark:text-gray-300">Wali Kelas: Bapak Adi Nugroho,
                                            S.T.</span>
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
                                            <span class="material-icons text-primary mr-3 mt-1">code</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Pemrograman Dasar
                                                    & Algoritma</h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Pseudocode,
                                                    Flowchart, Struktur Data</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">web</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Pemrograman Web
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">HTML, CSS,
                                                    JavaScript, React, Node.js</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">smartphone</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Pemrograman Mobile
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Kotlin/Java, Swift,
                                                    React Native</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">sports_esports</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Pengembangan Game
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Unity, Unreal
                                                    Engine, C#, C++</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">storage</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Manajemen Database
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">SQL, NoSQL, MongoDB,
                                                    PostgreSQL</p>
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
                                                <h5 class="font-medium text-gray-900 dark:text-white">Prinsip Desain
                                                    UI/UX</h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Figma, Adobe XD,
                                                    Prototyping</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">sync</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Version Control
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Git & GitHub, GitLab
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">assignment</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Manajemen Proyek
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Agile, Scrum, Jira
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">3d_rotation</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Pembuatan Aset
                                                    Digital</h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">2D/3D Modeling,
                                                    Texturing, Animation</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">trending_up</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Digital Marketing
                                                </h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">SEO, SEM, Social
                                                    Media Marketing</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="p-6 bg-purple-50 dark:bg-purple-900 dark:bg-opacity-20 rounded-xl">
                            <h4 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Peluang Karir</h4>
                            <p class="text-gray-700 dark:text-gray-300 mb-6">Lulusan jurusan PPLG sangat diminati di era
                                digital dan memiliki peluang karir yang luas:</p>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                <div class="bg-white dark:bg-gray-800 p-4 rounded-xl text-center card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">web</span>
                                    </div>
                                    <p class="text-sm font-medium text-gray-700 dark:text-gray-300">Web Developer</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">Rp 5-15 Juta/bulan</p>
                                </div>
                                <div class="bg-white dark:bg-gray-800 p-4 rounded-xl text-center card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">smartphone</span>
                                    </div>
                                    <p class="text-sm font-medium text-gray-700 dark:text-gray-300">Mobile Developer</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">Rp 7-20 Juta/bulan</p>
                                </div>
                                <div class="bg-white dark:bg-gray-800 p-4 rounded-xl text-center card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">sports_esports</span>
                                    </div>
                                    <p class="text-sm font-medium text-gray-700 dark:text-gray-300">Game Developer</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">Rp 8-25 Juta/bulan</p>
                                </div>
                                <div class="bg-white dark:bg-gray-800 p-4 rounded-xl text-center card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">brush</span>
                                    </div>
                                    <p class="text-sm font-medium text-gray-700 dark:text-gray-300">UI/UX Designer</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">Rp 6-18 Juta/bulan</p>
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
                                    Jurusan PPLG menerapkan kurikulum berbasis kompetensi yang disesuaikan dengan
                                    kebutuhan industri teknologi terkini. Kurikulum ini dirancang untuk memberikan
                                    keseimbangan antara teori dan praktik, dengan porsi 70% praktikum dan 30% teori.
                                </p>
                                <div class="grid md:grid-cols-3 gap-4">
                                    <div class="bg-white dark:bg-gray-700 p-4 rounded-lg">
                                        <h5 class="font-medium text-gray-900 dark:text-white mb-2">Kelas X</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Fokus pada dasar-dasar
                                            pemrograman, algoritma, dan logika komputasi</p>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-4 rounded-lg">
                                        <h5 class="font-medium text-gray-900 dark:text-white mb-2">Kelas XI</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Pengembangan aplikasi web,
                                            mobile, dan pengenalan game development</p>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-4 rounded-lg">
                                        <h5 class="font-medium text-gray-900 dark:text-white mb-2">Kelas XII</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Proyek aplikasi lengkap,
                                            game development, dan persiapan kerja/entrepreneurship</p>
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
                                                Pemrograman</p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Algoritma dan Struktur
                                                Data</p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Pemrograman Web Dasar
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Desain Grafis Dasar
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="font-medium text-gray-900 dark:text-white mb-2">Kelas XI</h5>
                                    <div class="grid md:grid-cols-2 gap-3">
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Pemrograman Web Lanjut
                                            </p>
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Pemrograman Web
                                                Lanjutan</p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Pemrograman Mobile</p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Database dan SQL</p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Pengenalan Game
                                                Development</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="font-medium text-gray-900 dark:text-white mb-2">Kelas XII</h5>
                                    <div class="grid md:grid-cols-2 gap-3">
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Proyek Pengembangan
                                                Aplikasi</p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Game Development
                                                Lanjutan</p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• UI/UX Design</p>
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
                                        <span class="material-icons text-primary mr-2">code</span>
                                        <h5 class="font-medium text-gray-900 dark:text-white">Coding Club</h5>
                                    </div>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Kompetisi programming,
                                        hackathon, dan workshop teknologi terkini</p>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-4 card-hover">
                                    <div class="flex items-center mb-2">
                                        <span class="material-icons text-primary mr-2">sports_esports</span>
                                        <h5 class="font-medium text-gray-900 dark:text-white">Game Dev Club</h5>
                                    </div>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Pengembangan game indie, game
                                        jam, dan riset teknologi game</p>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-4 card-hover">
                                    <div class="flex items-center mb-2">
                                        <span class="material-icons text-primary mr-2">brush</span>
                                        <h5 class="font-medium text-gray-900 dark:text-white">Design Club</h5>
                                    </div>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Desain UI/UX, digital art, dan
                                        animasi</p>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-4 card-hover">
                                    <div class="flex items-center mb-2">
                                        <span class="material-icons text-primary mr-2">public</span>
                                        <h5 class="font-medium text-gray-900 dark:text-white">Robotics Club</h5>
                                    </div>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Pemrograman robot, IoT, dan
                                        automasi</p>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-4 card-hover">
                                    <div class="flex items-center mb-2">
                                        <span class="material-icons text-primary mr-2">business</span>
                                        <h5 class="font-medium text-gray-900 dark:text-white">Entrepreneurship Club</h5>
                                    </div>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Startup, product development,
                                        dan digital marketing</p>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-4 card-hover">
                                    <div class="flex items-center mb-2">
                                        <span class="material-icons text-primary mr-2">photo_camera</span>
                                        <h5 class="font-medium text-gray-900 dark:text-white">Multimedia Club</h5>
                                    </div>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Videografi, fotografi, dan
                                        editing video</p>
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
                    <img src="https://picsum.photos/seed/pplg1/400/300.jpg" alt="Kegiatan PPLG"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/pplg2/400/300.jpg" alt="Kegiatan PPLG"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/pplg3/400/300.jpg" alt="Kegiatan PPLG"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/pplg4/400/300.jpg" alt="Kegiatan PPLG"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/pplg5/400/300.jpg" alt="Kegiatan PPLG"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/pplg6/400/300.jpg" alt="Kegiatan PPLG"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/pplg7/400/300.jpg" alt="Kegiatan PPLG"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/pplg8/400/300.jpg" alt="Kegiatan PPLG"
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

    <!-- PRESTASI -->
   
    <!-- ALUMNI -->
    <section class="py-12 bg-white dark:bg-gray-800">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-bold text-center mb-8 text-gray-900 dark:text-white">
                Jejak Alumni
            </h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-gray-50 dark:bg-gray-700 rounded-xl p-6 card-hover">
                    <div class="flex items-center mb-4">
                        <img src="https://picsum.photos/seed/alumni-pplg1/100/100.jpg" alt="Alumni"
                            class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Reza Fahlevi</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Alumni 2021</p>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 text-sm mb-3">Frontend Developer at Tokopedia</p>
                    <p class="text-gray-600 dark:text-gray-400 text-sm italic">"Belajar di jurusan PPLG memberikan saya
                        fondasi coding yang kuat. Materinya selalu update dan guru-gurunya sangat mendukung."</p>
                </div>
                <div class="bg-gray-50 dark:bg-gray-700 rounded-xl p-6 card-hover">
                    <div class="flex items-center mb-4">
                        <img src="https://picsum.photos/seed/alumni-pplg2/100/100.jpg" alt="Alumni"
                            class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Nadia Permata</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Alumni 2020</p>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 text-sm mb-3">Game Designer at Agate Studio</p>
                    <p class="text-gray-600 dark:text-gray-400 text-sm italic">"Lab Game Development-nya luar biasa!
                        Saya bisa langsung praktek membuat game dari nol. Pengalaman ini sangat membantu karir saya."
                    </p>
                </div>
                <div class="bg-gray-50 dark:bg-gray-700 rounded-xl p-6 card-hover">
                    <div class="flex items-center mb-4">
                        <img src="https://picsum.photos/seed/alumni-pplg3/100/100.jpg" alt="Alumni"
                            class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Dimas Aryo</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Alumni 2022</p>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 text-sm mb-3">UI/UX Designer at Gojek</p>
                    <p class="text-gray-600 dark:text-gray-400 text-sm italic">"Kurikulum PPLG tidak hanya mengajarkan
                        coding, tapi juga desain. Ini membuat saya menjadi designer yang paham teknis."</p>
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