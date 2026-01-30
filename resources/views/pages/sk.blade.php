<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Informasi Jurusan Seni Pertunjukan - SMKN 1 Kawali</title>

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
                        primary: "#8b5cf6", // Violet untuk kesan Seni & Kreatif
                        secondary: "#7c3aed",
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

    <!-- NAVBAR (Placeholder untuk include) -->
    @include('layouts.navbar')

    <!-- HEADER JURUSAN -->
    <header class="bg-gradient-to-br from-primary to-secondary dark:from-gray-700 dark:to-gray-900 py-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center gap-8">
                <div class="md:w-2/3">
                    <div class="mb-4">
                        <span class="text-purple-100 font-semibold text-base bg-purple-800 bg-opacity-30 px-3 py-1 rounded-full">SMKN 1 Kawali</span>
                    </div>
                    <h1 class="text-3xl md:text-4xl font-bold text-white mb-4">
                        Jurusan Seni Pertunjukan (SP)
                    </h1>
                    <p class="text-purple-100 text-lg mb-6">
                        Jurusan yang mencetak seniman profesional, musisi, penari, dan manajer panggung 
                        kreatif yang siap berkarya di industri hiburan nasional maupun internasional.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-lg px-4 py-2 text-white">
                            <span class="material-icons mr-2 text-sm">stars</span>
                            <span class="text-sm">80+ Siswa Berbakat</span>
                        </div>
                        <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-lg px-4 py-2 text-white">
                            <span class="material-icons mr-2 text-sm">palette</span>
                            <span class="text-sm">5 Guru Praktisi Seni</span>
                        </div>
                        <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-lg px-4 py-2 text-white">
                            <span class="material-icons mr-2 text-sm">theater_comedy</span>
                            <span class="text-sm">Panggung & Studio Modern</span>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/3 flex justify-center">
                    <!-- Gambar placeholder teater/seni -->
                    <img src="https://images.unsplash.com/photo-1507676184212-d03ab07a01bf?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Siswa Seni Pertunjukan"
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
                                    Jurusan Seni Pertunjukan di SMKN 1 Kawali dirancang untuk mengembangkan bakat 
                                    seni siswa secara profesional. Kurikulum kami memadukan teori seni dengan praktik 
                                    panggung yang intensif. Siswa diajarkan untuk menguasai seni peran (acting), 
                                    seni tari (tari tradisional & kontemporer), seni musik, serta manajemen 
                                    produksi panggung secara terpadu.
                                </p>
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-8">
                            <div>
                                <h4 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white">Data Jurusan</h4>
                                <div class="space-y-4">
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">theater_comedy</span>
                                        <div>
                                            <h5 class="font-medium text-gray-900 dark:text-white">Nama Lengkap</h5>
                                            <p class="text-gray-600 dark:text-gray-400">Seni Pertunjukan (SP)</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">school</span>
                                        <div>
                                            <h5 class="font-medium text-gray-900 dark:text-white">Kaprog & Pembina</h5>
                                            <p class="text-gray-600 dark:text-gray-400">Bapak Andi Wijaya, S.Sn., M.Sn.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">work</span>
                                        <div>
                                            <h5 class="font-medium text-gray-900 dark:text-white">Mitra Industri</h5>
                                            <p class="text-gray-600 dark:text-gray-400">EO Nasional, TV Station, Teater Daerah, Dinas Pariwisata</p>
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
                                            <h5 class="font-medium text-gray-900 dark:text-white">Festival & Lomba</h5>
                                            <p class="text-gray-600 dark:text-gray-400">Juara 1 FLS2N Teater Provinsi</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">mic</span>
                                        <div>
                                            <h5 class="font-medium text-gray-900 dark:text-white">Pentas Keliling</h5>
                                            <p class="text-gray-600 dark:text-gray-400">Tari & Musik Daerah di 5 Kabupaten</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">people</span>
                                        <div>
                                            <h5 class="font-medium text-gray-900 dark:text-white">Karir Alumni</h5>
                                            <p class="text-gray-600 dark:text-gray-400">80% Bekerja di Industri Kreatif</p>
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
                            <h4 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white">Studio & Panggung</h4>
                            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                        <span class="material-icons text-primary">curtains</span>
                                    </div>
                                    <h5 class="font-semibold text-gray-900 dark:text-white mb-2">Panggung Teater</h5>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">Panggung lengkap untuk pertunjukan besar</p>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Lighting System Profesional</li>
                                        <li>• Sound System Digital</li>
                                        <li>• Panggung Terbuka & Tertutup</li>
                                        <li>• Backdrop & Props</li>
                                    </ul>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                        <span class="material-icons text-primary">music_note</span>
                                    </div>
                                    <h5 class="font-semibold text-gray-900 dark:text-white mb-2">Studio Musik</h5>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">Ruang latihan rekaman dan live</p>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Alat Musik Lengkap (Gamelan, Modern)</li>
                                        <li>• Sound Proofing</li>
                                        <li>• Studio Recording Mini</li>
                                        <li>• Vokal Booth</li>
                                    </ul>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                        <span class="material-icons text-primary">accessibility_new</span>
                                    </div>
                                    <h5 class="font-semibold text-gray-900 dark:text-white mb-2">Ruang Tari</h5>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">Area berlatih gerak & ekspresi</p>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Lantai Kayu (Sprung Floor)</li>
                                        <li>• Cermin Tembok Panjang</li>
                                        <li>• Sound System Tari</li>
                                        <li>• Kostum & Aksesoris</li>
                                    </ul>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                        <span class="material-icons text-primary">mask</span>
                                    </div>
                                    <h5 class="font-semibold text-gray-900 dark:text-white mb-2">Ruang Akting</h5>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">Latihan peran & karakterisasi</p>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Set Panggung Mini</li>
                                        <li>• Properti Teater</li>
                                        <li>• Area Audisi</li>
                                        <li>• Ruang Ganti Artistik</li>
                                    </ul>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                        <span class="material-icons text-primary">checkroom</span>
                                    </div>
                                    <h5 class="font-semibold text-gray-900 dark:text-white mb-2">Rongga Busana</h5>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">Penyimpanan & perawatan kostum</p>
                                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                        <li>• Lemari Kostum Steril</li>
                                        <li>• Meja Setrika Uap</li>
                                        <li>• Sewa Kostum External</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h4 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white">Sertifikasi & Kompetisi</h4>
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                                    <div class="text-center">
                                        <div
                                            class="w-16 h-16 bg-white dark:bg-gray-700 rounded-lg flex items-center justify-center mx-auto mb-2">
                                            <span class="material-icons text-primary">stars</span>
                                        </div>
                                        <p class="text-sm font-medium text-gray-900 dark:text-white">FLS2N</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">Tingkat Provinsi</p>
                                    </div>
                                    <div class="text-center">
                                        <div
                                            class="w-16 h-16 bg-white dark:bg-gray-700 rounded-lg flex items-center justify-center mx-auto mb-2">
                                            <span class="material-icons text-primary">workspace_premium</span>
                                        </div>
                                        <p class="text-sm font-medium text-gray-900 dark:text-white">LSK</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">Manajer Artis</p>
                                    </div>
                                    <div class="text-center">
                                        <div
                                            class="w-16 h-16 bg-white dark:bg-gray-700 rounded-lg flex items-center justify-center mx-auto mb-2">
                                            <span class="material-icons text-primary">verified</span>
                                        </div>
                                        <p class="text-sm font-medium text-gray-900 dark:text-white">TOEFL</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">Seni Pertunjukan</p>
                                    </div>
                                    <div class="text-center">
                                        <div
                                            class="w-16 h-16 bg-white dark:bg-gray-700 rounded-lg flex items-center justify-center mx-auto mb-2">
                                            <span class="material-icons text-primary">campaign</span>
                                        </div>
                                        <p class="text-sm font-medium text-gray-900 dark:text-white">Event Organizer</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">Sertifikat Pelatihan</p>
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
                                <div
                                    class="w-20 h-20 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <span class="material-icons text-3xl">theater_comedy</span>
                                </div>
                                <h4 class="font-bold text-lg">Kaprog Seni</h4>
                                <p class="text-sm opacity-90">Bapak Andi Wijaya, S.Sn., M.Sn.</p>
                                <p class="text-xs opacity-75 mt-2">NIP. 198209152005011002</p>
                            </div>
                        </div>

                        <!-- Guru Produktif -->
                        <div class="org-chart flex justify-center mb-8">
                            <div class="flex gap-4">
                                <div
                                    class="org-chart-item bg-gray-100 dark:bg-gray-800 rounded-xl p-4 text-center max-w-xs card-hover">
                                    <div
                                        class="w-16 h-16 bg-primary bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-3">
                                        <span class="material-icons text-primary">mic</span>
                                    </div>
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Bidang Musik</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">2 Guru</p>
                                </div>
                                <div
                                    class="org-chart-item bg-gray-100 dark:bg-gray-800 rounded-xl p-4 text-center max-w-xs card-hover">
                                    <div
                                        class="w-16 h-16 bg-primary bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-3">
                                        <span class="material-icons text-primary">directions_run</span>
                                    </div>
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Bidang Tari</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">2 Guru</p>
                                </div>
                            </div>
                        </div>

                        <!-- Detail Guru -->
                        <div class="grid md:grid-cols-2 gap-6 mb-8">
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Tim Musik & Teater</h4>
                                <div class="space-y-3">
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <p class="font-medium text-gray-900 dark:text-white">Bapak Hendra Gunawan, S.Sn.</p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Seni Peran & Sutradara</p>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <p class="font-medium text-gray-900 dark:text-white">Ibu Rina Melodi, S.Pd.</p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Vokal & Teori Musik</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Tim Tari</h4>
                                <div class="space-y-3">
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <p class="font-medium text-gray-900 dark:text-white">Ibu Ratna Sari, S.Sn.</p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Tari Tradisional Sunda</p>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-3 rounded-lg">
                                        <p class="font-medium text-gray-900 dark:text-white">Ibu Dian Ayu, S.Sn.</p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Tari Kontemporer & Kreasi</p>
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
                                <h4 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Kompetensi Seni</h4>
                                <div class="space-y-3">
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">record_voice_over</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Seni Peran (Akting)</h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Improvisasi, karakterisasi, vokal</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">music_note</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Seni Musik</h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Vokal, instrumen, harmoni</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">directions_run</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Seni Tari</h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Tari tradisional & modern</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Kompetensi Teknis</h4>
                                <div class="space-y-3">
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">engineering</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Manajemen Panggung</h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Stage manager, sound enginering</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">light_mode</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Teknik Pencahayaan</h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Lighting design & operation</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-xl card-hover">
                                        <div class="flex items-start">
                                            <span class="material-icons text-primary mr-3 mt-1">brush</span>
                                            <div>
                                                <h5 class="font-medium text-gray-900 dark:text-white">Tata Rias & Busana</h5>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">Makeup panggung & desain kostum</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="p-6 bg-purple-50 dark:bg-purple-900 dark:bg-opacity-20 rounded-xl">
                            <h4 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Peluang Karir</h4>
                            <p class="text-gray-700 dark:text-gray-300 mb-6">Lulusan SP memiliki jalur karir yang luas di industri kreatif:</p>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                <div class="bg-white dark:bg-gray-800 p-4 rounded-xl text-center card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">theater_comedy</span>
                                    </div>
                                    <p class="text-sm font-medium text-gray-700 dark:text-gray-300">Aktor / Aktris</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">TV / Film / Teater</p>
                                </div>
                                <div class="bg-white dark:bg-gray-800 p-4 rounded-xl text-center card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">music_note</span>
                                    </div>
                                    <p class="text-sm font-medium text-gray-700 dark:text-gray-300">Musisi</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">Solo / Band</p>
                                </div>
                                <div class="bg-white dark:bg-gray-800 p-4 rounded-xl text-center card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">person_search</span>
                                    </div>
                                    <p class="text-sm font-medium text-gray-700 dark:text-gray-300">Artis Manager</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">Talent Agency</p>
                                </div>
                                <div class="bg-white dark:bg-gray-800 p-4 rounded-xl text-center card-hover">
                                    <div
                                        class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">event</span>
                                    </div>
                                    <p class="text-sm font-medium text-gray-700 dark:text-gray-300">Event Creator</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">Wedding / EO</p>
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
                                    Kurikulum Seni Pertunjukan berbasis proyek (Project Based Learning). 
                                    Siswa tidak hanya belajar teori, tetapi langsung memproduksi karya seni 
                                    seperti pementasan teater, konser musik, dan pagelaran tari secara rutin.
                                    Komposisi: 80% Praktik & 20% Teori.
                                </p>
                                <div class="grid md:grid-cols-3 gap-4">
                                    <div class="bg-white dark:bg-gray-700 p-4 rounded-lg">
                                        <h5 class="font-medium text-gray-900 dark:text-white mb-2">Kelas X</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Dasar seni, vokal, gerak, & ritme</p>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-4 rounded-lg">
                                        <h5 class="font-medium text-gray-900 dark:text-white mb-2">Kelas XI</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Pengembangan karakter, koreografi, & musik ensemble</p>
                                    </div>
                                    <div class="bg-white dark:bg-gray-700 p-4 rounded-lg">
                                        <h5 class="font-medium text-gray-900 dark:text-white mb-2">Kelas XII</h5>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Produksi Besar (Pentas Akhir), Manajemen Artis</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-8">
                            <h4 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white">Mata Pelajaran Produktif</h4>
                            <div class="space-y-4">
                                <div>
                                    <h5 class="font-medium text-gray-900 dark:text-white mb-2">Kelas X</h5>
                                    <div class="grid md:grid-cols-2 gap-3">
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Dasar-Dasar Seni Pertunjukan</p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Apresiasi Seni</p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Vokal Dasar</p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Tari Dasar</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="font-medium text-gray-900 dark:text-white mb-2">Kelas XI</h5>
                                    <div class="grid md:grid-cols-2 gap-3">
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Teknik Akting</p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Koreografi Tari</p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Harmoni Musik</p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Naskah & Dramaturgi</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="font-medium text-gray-900 dark:text-white mb-2">Kelas XII</h5>
                                    <div class="grid md:grid-cols-2 gap-3">
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Produksi Teater</p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Konser Musik</p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Manajemen Panggung</p>
                                        </div>
                                        <div class="bg-gray-50 dark:bg-gray-800 p-3 rounded-lg">
                                            <p class="text-sm text-gray-700 dark:text-gray-300">• Praktik Kerja Lapangan (Magang EO)</p>
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
                                        <span class="material-icons text-primary mr-2">theater_comedy</span>
                                        <h5 class="font-medium text-gray-900 dark:text-white">Teater Sekolah</h5>
                                    </div>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Kelompok teater rutin tiap bulan</p>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-4 card-hover">
                                    <div class="flex items-center mb-2">
                                        <span class="material-icons text-primary mr-2">queue_music</span>
                                        <h5 class="font-medium text-gray-900 dark:text-white">Paduan Suara</h5>
                                    </div>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Latihan vokal harmoni grup</p>
                                </div>
                                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-4 card-hover">
                                    <div class="flex items-center mb-2">
                                        <span class="material-icons text-primary mr-2">groups</span>
                                        <h5 class="font-medium text-gray-900 dark:text-white">Sanggar Tari</h5>
                                    </div>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Pengembangan tari kreasi baru</p>
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
                Galeri Pentas Seni
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://images.unsplash.com/photo-1514306191717-452428336e2f?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Pentas Seni"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://images.unsplash.com/photo-1514320291840-2e0a9bf2a9ae?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Konser Musik"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://images.unsplash.com/photo-1508700929628-666bc8bd84ea?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Tari Tradisional"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Festival"
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
                Alumni Berprestasi
            </h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-gray-50 dark:bg-gray-700 rounded-xl p-6 card-hover">
                    <div class="flex items-center mb-4">
                        <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" alt="Alumni"
                            class="w-12 h-12 rounded-full mr-4 object-cover">
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Rangga Pratama</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Alumni 2019</p>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 text-sm mb-3">Aktor & Model</p>
                    <p class="text-gray-600 dark:text-gray-400 text-sm italic">"Jurusan ini mengajarkan saya disiplin dan keberanian tampil di atas panggung."</p>
                </div>
                <div class="bg-gray-50 dark:bg-gray-700 rounded-xl p-6 card-hover">
                    <div class="flex items-center mb-4">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" alt="Alumni"
                            class="w-12 h-12 rounded-full mr-4 object-cover">
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Lestari Ayu</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Alumni 2020</p>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 text-sm mb-3">Penari Profesional</p>
                    <p class="text-gray-600 dark:text-gray-400 text-sm italic">"Fasilitas studio tari yang lengkap sangat mendukung saya mengasah skill."</p>
                </div>
                <div class="bg-gray-50 dark:bg-gray-700 rounded-xl p-6 card-hover">
                    <div class="flex items-center mb-4">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" alt="Alumni"
                            class="w-12 h-12 rounded-full mr-4 object-cover">
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Dimas Anggara</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Alumni 2021</p>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 text-sm mb-3">Music Producer</p>
                    <p class="text-gray-600 dark:text-gray-400 text-sm italic">"Pelajaran manajemen panggung sangat berguna saat saya menjadi Producer."</p>
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