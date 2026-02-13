<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Informasi Jurusan DPIB - SMKN 1 Kawali</title>

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
                        'zoom-in': 'zoomIn 0.3s ease-out',
                        'slide-up': 'slideUp 0.5s ease-out',
                        'bounce-in': 'bounceIn 0.6s ease-out',
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
                        },
                        zoomIn: {
                            '0%': { opacity: '0', transform: 'scale(0.8)' },
                            '100%': { opacity: '1', transform: 'scale(1)' },
                        },
                        slideUp: {
                            '0%': { opacity: '0', transform: 'translateY(30px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        bounceIn: {
                            '0%': { opacity: '0', transform: 'scale(0.3)' },
                            '50%': { opacity: '1', transform: 'scale(1.05)' },
                            '70%': { transform: 'scale(0.9)' },
                            '100%': { opacity: '1', transform: 'scale(1)' },
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
        
        /* Badge animation */
        .badge-pulse {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(139, 92, 246, 0.7);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(139, 92, 246, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(139, 92, 246, 0);
            }
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-100 font-body">

   @include('layouts.navbar')

    <!-- HEADER JURUSAN -->
    <header class="bg-gradient-to-b from-blue-50 to-blue-100 dark:from-gray-900 dark:to-gray-800 py-16 md:py-24">
        <div class="container mx-auto px-4 text-center">
            <!-- Button -->
            <div class="mb-6">
                <button class="px-6 py-2 bg-white dark:bg-gray-800 text-primary font-semibold rounded-full shadow-md hover:shadow-lg transition-shadow duration-300 border border-blue-200 dark:border-gray-700">
                    <i class="fas fa-graduation-cap mr-2"></i>
                    Jurusan DPIB
                </button>
            </div>
            
            <!-- Title -->
            <h1 class="text-4xl md:text-6xl font-bold text-gray-900 dark:text-white mb-6">
                Jurusan <span class="text-primary">DPIB</span>
            </h1>
            
            <!-- Description -->
            <p class="text-lg md:text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto mb-8">
                Informasi Jurusan Desain Pemodelan dan Informasi Bangunan SMK Negeri 1 Kawali.
            </p>
            
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
                    data-tab="struktur">
                    Struktur Organisasi
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
                                Desain Pemodelan dan Informasi Bangunan adalah kompetensi kejuruan yang membekali peserta didik dengan pengetahuan, keterampilan, 
                                nilai, dan sikap yang terintegrasi serta kecakapan kerja dalam bidang perencanaan, pemodelan, dan pengelolaan informasi bangunan, 
                                yang mencakup pemahaman gambar teknik, perencanaan bangunan, dasar konstruksi, pengukuran, perhitungan kebutuhan material, 
                                penyusunan gambar kerja, serta penggunaan perangkat lunak desain dan pemodelan bangunan, dengan menerapkan sikap kewirausahaan, 
                                profesionalisme, dan kemampuan beradaptasi terhadap perkembangan teknologi konstruksi guna memenuhi tuntutan dunia kerja masa kini 
                                dan masa yang akan datang.
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
                                            <p class="text-gray-600 dark:text-gray-400 text-sm">Desain Pemodelan dan Informasi Bangunan</p>
                                        </div>
                                    </div>
                                    <div class="bg-white dark:bg-gray-800 rounded-xl p-5 shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-700 hover:-translate-y-1">
                                        <div class="flex flex-col items-center text-center">
                                            <div class="w-14 h-14 bg-gradient-to-br from-blue-50 to-blue-100 dark:from-blue-900 dark:to-blue-800 rounded-full flex items-center justify-center mb-3">
                                                <span class="material-icons text-primary text-xl">school</span>
                                            </div>
                                            <h5 class="font-medium text-gray-900 dark:text-white mb-1">Kepala Jurusan</h5>
                                            <p class="text-gray-600 dark:text-gray-400 text-sm">Dadang Kadarisman, S.Pd.</p>
                                        </div>
                                    </div>
                                    <div class="bg-white dark:bg-gray-800 rounded-xl p-5 shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-700 hover:-translate-y-1">
                                        <div class="flex flex-col items-center text-center">
                                            <div class="w-14 h-14 bg-gradient-to-br from-blue-50 to-blue-100 dark:from-blue-900 dark:to-blue-800 rounded-full flex items-center justify-center mb-3">
                                                <span class="material-icons text-primary text-xl">business</span>
                                            </div>
                                            <h5 class="font-medium text-gray-900 dark:text-white mb-1">Mitra Industri</h5>
                                            <p class="text-gray-600 dark:text-gray-400 text-sm">CV. TECHNOSKILL</p>
                                        </div>
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
                                <p class="text-sm opacity-90">Dadang Kadarisman, S.Pd.</p>
                                <p class="text-xs opacity-75 mt-2"></p>
                            </div>
                        </div>

                        <!-- Detail Guru -->
                        <div class="grid md:grid-cols-3 gap-6 mb-8">
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Guru Dasar Dasar Program Keahlian</h4>
                                <div class="space-y-3">
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <p class="font-medium text-gray-900 dark:text-white">Hj. Khoeriah Nur Wahidah, S.Pd</p>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <p class="font-medium text-gray-900 dark:text-white">Dadang Kadarisman, S.Pd</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Guru Desain Pemodelan</h4>
                                <div class="space-y-3">
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <p class="font-medium text-gray-900 dark:text-white">Ade Maya Nelasari, S.Pd</p>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <p class="font-medium text-gray-900 dark:text-white">Nurdin Rismansyah, S.T</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Guru Mata Pelajaran Pilihan</h4>
                                <div class="space-y-3">
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <p class="font-medium text-gray-900 dark:text-white">Arif Wicaksono, S.Pd</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Struktur Kelas -->
                        <div class="grid md:grid-cols-3 gap-6">
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Wali Kelas X DPIB</h4>
                                <div class="grid grid-cols-1 gap-3">
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <span class="text-gray-700 dark:text-gray-300">Wali Kelas X DPIB 1: Hj. Khoeriah Nur Wahidah S.Pd</span>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <span class="text-gray-700 dark:text-gray-300">Wali Kelas X DPIB 2: Arif Wicaksono, S.Pd</span>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Wali Kelas XI DPIB</h4>
                                <div class="grid grid-cols-1 gap-3">
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <span class="text-gray-700 dark:text-gray-300">Wali Kelas XI DPIB 1: Nurdin Rismansyah, S.T</span>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <span class="text-gray-700 dark:text-gray-300">Wali Kelas XI DPIB 2: Risna Rahmawati, S.Pd</span>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Wali Kelas XII DPIB</h4>
                                <div class="grid grid-cols-1 gap-3">
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <span class="text-gray-700 dark:text-gray-300">Wali Kelas XII DPIB 1: Gissa Firda Hasbia, S.Pd</span>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <span class="text-gray-700 dark:text-gray-300">Wali Kelas XII DPIB 2: Risna Rahmawati, S.Pd</span>
                                    </div>
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
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Memahami Dasar Desain Pemodelan dan Informasi Bangunan</p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Memahami Gambar 2D dan 3D Struktur, Arsitektur, Interior, dan Eksterior Bangunan
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Memahami Penggunaan Perangkat Lunak Desain Bangunan (BIM)
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Memahami Dasar Konstruksi Utilitas Gedung dan Sistem Plumbing
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="font-medium text-gray-900 dark:text-white mb-2">Kelas XI</h5>
                                    <div class="grid md:grid-cols-2 gap-3">
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Menerapkan Teknik Menggambar 2D dan 3D Bangunan Gedung
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Menerapkan Desain Pemodelan Jalan dan Jembatan
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Menerapkan Gambar Konstruksi Utilitas Gedung dan Sistem Plumbing
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Menerapkan Visualisasi dan Animasi Desain Bangunan berbasis BIM
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="font-medium text-gray-900 dark:text-white mb-2">Kelas XII</h5>
                                    <div class="grid md:grid-cols-2 gap-3">
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Menerapkan Pemodelan dan Informasi Bangunan secara Terintegrasi (BIM)
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Menerapkan Estimasi Biaya Konstruksi Bangunan (RAB)
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Menerapkan Rencana Penjadwalan Pekerjaan Konstruksi
                                                Desain
                                            </p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Menerapkan Koordinasi Desain dan Analisis Konstruksi Bangunan
                                                (PKL)</p>
                                        </div>
                                    </div>
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
                    <img src="dpib1.jpg" alt="Kegiatan DPIB"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="dpib2.jpg" alt="Kegiatan DPIB"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="dpib3.jpg" alt="Kegiatan DPIB"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="dpib4.jpg" alt="Kegiatan DPIB"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="dpib5.jpg" alt="Kegiatan DPIB"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="dpib6.jpg" alt="Kegiatan DPIB"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="dpib7.jpg" alt="Kegiatan DPIB"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="dpib8.jpg" alt="Kegiatan DPIB"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
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
                        <img src="abdal.jpeg" alt="Alumni"
                            class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Abdal Jabil Camis</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Prajurit TNI</p>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 text-sm mb-3">Alumni Jurusan DPIB Angkatan 2023</p>
                    <p class="text-gray-600 dark:text-gray-400 text-sm italic">"Senang bisa masuk juga ke jurusan dpib atau desain permodelan informasi bangunan disana saya mendapatkan ilmu bangunan terus juga bisa mengenal berbagai instruktur bangunan nya secara detail dan terperinci...kenapa masuk jurusan dpib karna ingin mempunyai berbagai keahlian yang lain juga selain di bidang olahraga..masuk di jurusan dpib guru nya baik dan mudah untuk di pahami segala materi nya supaya bisa dengan mudah tau dan bisa untuk kedepan nya mempraktekkan apa yang di kasih waktu di sekolah untuk bekerja"</p>
                </div>
                <div class="bg-gray-50 dark:bg-gray-700 rounded-xl p-6 card-hover">
                    <div class="flex items-center mb-4">
                        <img src="azzyura.jpeg" alt="Alumni"
                            class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Azzyura Nursyifa Orlando</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">PT. Prada Cipta Areco</p>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 text-sm mb-3">Alumni Jurusan DPIB Angkatan 2025</p>
                    <p class="text-gray-600 dark:text-gray-400 text-sm italic">"Selama sekolah di jurusan DPIB, saya banyak belajar tentang gambar denah, gambar bangunan, sampai praktik langsung di lapangan. Dari situ saya jadi paham proses perencanaan dan pelaksanaan bangunan dari awal sampai akhir. Ilmu dan pengalaman yang saya dapat di sekolah sangat membantu saya, apalagi sekarang saya bisa bekerja sesuai dengan jurusan yang saya ambil"</p>
                </div>
                <div class="bg-gray-50 dark:bg-gray-700 rounded-xl p-6 card-hover">
                    <div class="flex items-center mb-4">
                        <img src="https://picsum.photos/seed/alumni-dpib3/100/100.jpg" alt="Alumni"
                            class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Syaidan Anggara</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">PT. Yamaha Indonesia Manufacturing</p>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 text-sm mb-3">Angkatan 2022</p>
                    <p class="text-gray-600 dark:text-gray-400 text-sm italic">"Selama menempuh pendidikan di jurusan DPIB SMKN 1 Kawali, saya banyak belajar tentang dasar perencanaan dan gambar bangunan melalui pembelajaran teori dan praktik. Proses belajar yang dijalani melatih saya untuk lebih teliti, sabar, dan bertanggung jawab, serta membantu saya memahami dunia konstruksi secara lebih nyata sebagai bekal ke jenjang selanjutnya."</p>
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