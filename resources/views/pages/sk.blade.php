<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Program Tata Boga - SMKN 1 Kawali</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#dc2626", // Warna merah untuk tema kuliner/makanan
                        secondary: "#b91c1c",
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
            border-bottom: 3px solid #dc2626;
            color: #dc2626;
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
                        Tata Boga
                    </h1>

                    <p class="text-gray-100 text-lg leading-relaxed mb-8 max-w-xl">
                        Jurusan kreatif yang memadukan seni dan ilmu dalam mengolah makanan, dari bahan baku
                        hingga hidangan siap saji dengan standar kebersihan dan kualitas tinggi.
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
                        src="https://sfile.chatglm.cn/images-ppt/c1d2e3f4g5h6.jpg" <!-- Gambar placeholder chef/masak -->
                        alt="Siswa SK"
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
                    <div class="text-4xl font-bold text-primary mb-2">140+</div>
                    <div class="text-gray-600 dark:text-gray-400">Siswa Aktif</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-primary mb-2">8</div>
                    <div class="text-gray-600 dark:text-gray-400">Guru Profesional</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-primary mb-2">97%</div>
                    <div class="text-gray-600 dark:text-gray-400">Tingkat Kelulusan</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-primary mb-2">93%</div>
                    <div class="text-gray-600 dark:text-gray-400">Terserab Kerja</div>
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
                                        <span class="material-icons text-primary mr-3 mt-1">restaurant</span>
                                        <div>
                                            <h4 class="font-semibold text-gray-900 dark:text-white">Nama Jurusan</h4>
                                            <p class="text-gray-600 dark:text-gray-400">Tata Boga</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">tag</span>
                                        <div>
                                            <h4 class="font-semibold text-gray-900 dark:text-white">Kode Jurusan</h4>
                                            <p class="text-gray-600 dark:text-gray-400">SK (Sanitasi / Kuliner)</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">history</span>
                                        <div>
                                            <h4 class="font-semibold text-gray-900 dark:text-white">Tahun Berdiri</h4>
                                            <p class="text-gray-600 dark:text-gray-400">2013</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">description</span>
                                        <div>
                                            <h4 class="font-semibold text-gray-900 dark:text-white">Deskripsi</h4>
                                            <p class="text-gray-600 dark:text-gray-400">Jurusan SK (Tata Boga) membekali siswa dengan keterampilan mengolah berbagai jenis makanan, pengetahuan gizi, manajemen sanitasi, dan kewirausahaan di bidang kuliner.</p>
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
                                            <p class="text-gray-600 dark:text-gray-400">140 siswa (35 siswa per kelas)</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">person</span>
                                        <div>
                                            <h4 class="font-semibold text-gray-900 dark:text-white">Jumlah Guru</h4>
                                            <p class="text-gray-600 dark:text-gray-400">8 guru profesional dengan sertifikasi chef dan sanitasi</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">business</span>
                                        <div>
                                            <h4 class="font-semibold text-gray-900 dark:text-white">Mitra Industri</h4>
                                            <p class="text-gray-600 dark:text-gray-400">Hotel bintang, restoran, jasa boga, dan industri makanan</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1">work</span>
                                        <div>
                                            <h4 class="font-semibold text-gray-900 dark:text-white">Prospek Kerja</h4>
                                            <p class="text-gray-600 dark:text-gray-400">Chef, Pastry Chef, Kitchen Manager, Food Entrepreneur, dll.</p>
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
                                    <span class="material-icons text-primary">kitchen</span>
                                </div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Lab Tata Boga / Dapur Praktik</h4>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Dapur lengkap standar hotel dengan peralatan modern untuk praktikum memasak.</p>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 hover:shadow-lg transition">
                                <div class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                    <span class="material-icons text-primary">bakery_dining</span>
                                </div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Lab Pastry & Bakery</h4>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Khusus untuk pembuatan roti, kue, dan dessert dengan oven dan mixer profesional.</p>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 hover:shadow-lg transition">
                                <div class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                    <span class="material-icons text-primary">storefront</span>
                                </div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Restoran Mini / Dapur Latihan</h4>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Area untuk praktikum pelayanan dan manajemen restoran.</p>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 hover:shadow-lg transition">
                                <div class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                    <span class="material-icons text-primary">cleaning_services</span>
                                </div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Lab Sanitasi & Gizi</h4>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Untuk praktikum keamanan pangan (HACCP) dan analisis gizi makanan.</p>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 hover:shadow-lg transition">
                                <div class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                    <span class="material-icons text-primary">deck</span>
                                </div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Gazebo / Cafe Area</h4>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Area outdoor untuk menyajikan dan menikmati hasil kreasi kuliner siswa.</p>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6 hover:shadow-lg transition">
                                <div class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                                    <span class="material-icons text-primary">inventory_2</span>
                                </div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-2">Cold Storage & Gudang</h4>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Penyimpanan bahan makanan dengan sistem pendingin dan pengelolaan stok.</p>
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
                                            <span class="material-icons text-3xl">restaurant</span>
                                        </div>
                                        <h4 class="font-bold text-lg">Kepala Jurusan</h4>
                                        <p class="text-sm opacity-90">Bapak Jajang Sudrajat, S.Pd., M.Par.</p>
                                    </div>
                                </div>
                                
                                <!-- Guru Produktif -->
                                <div class="org-chart flex justify-center mb-8">
                                    <div class="flex gap-4">
                                        <div class="org-chart-item bg-gray-100 dark:bg-gray-800 rounded-xl p-4 text-center max-w-xs">
                                            <div class="w-16 h-16 bg-primary bg-opacity-10 rounded-full flex items-center justify-center mx-auto mb-3">
                                                <span class="material-icons text-primary">set_meal</span>
                                            </div>
                                            <h4 class="font-semibold text-gray-900 dark:text-white">Guru Produktif Masakan</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">5 Guru</p>
                                        </div>
                                        <div class="org-chart-item bg-gray-100 dark:bg-gray-800 rounded-xl p-4 text-center max-w-xs">
                                            <div class="w-16 h-16 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-3">
                                                <span class="material-icons text-primary">cake</span>
                                            </div>
                                            <h4 class="font-semibold text-gray-900 dark:text-white">Guru Produktif Kue & Sanitasi</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">3 Guru</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Struktur Kelas -->
                                <div class="grid md:grid-cols-2 gap-6">
                                    <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                                        <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Struktur Kelas X SK</h4>
                                        <div class="space-y-3">
                                            <div class="flex items-center">
                                                <span class="material-icons text-primary mr-3 text-sm">person</span>
                                                <span class="text-gray-700 dark:text-gray-300">Wali Kelas: Ibu Nani Maryani, S.Pd.</span>
                                            </div>
                                            <div class="flex items-center">
                                                <span class="material-icons text-primary mr-3 text-sm">groups</span>
                                                <span class="text-gray-700 dark:text-gray-300">Ketua Kelas: Ahmad Fadillah</span>
                                            </div>
                                            <div class="flex items-center">
                                                <span class="material-icons text-primary mr-3 text-sm">groups</span>
                                                <span class="text-gray-700 dark:text-gray-300">Wakil Ketua: Rizki Amelia</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                                        <h4 class="font-semibold text-gray-900 dark:text-white mb-4">Struktur Kelas XI SK</h4>
                                        <div class="space-y-3">
                                            <div class="flex items-center">
                                                <span class="material-icons text-primary mr-3 text-sm">person</span>
                                                <span class="text-gray-700 dark:text-gray-300">Wali Kelas: Bapak Usep Kurnia, S.Pd.</span>
                                            </div>
                                            <div class="flex items-center">
                                                <span class="material-icons text-primary mr-3 text-sm">groups</span>
                                                <span class="text-gray-700 dark:text-gray-300">Ketua Kelas: Dedi Setiawan</span>
                                            </div>
                                            <div class="flex items-center">
                                                <span class="material-icons text-primary mr-3 text-sm">groups</span>
                                                <span class="text-gray-700 dark:text-gray-300">Wakil Ketua: Siti Nurjanah</span>
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
                                        <span class="text-gray-700 dark:text-gray-300">Teknik Pengolahan Makanan (Cold & Hot Kitchen)</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1 text-sm">check_circle</span>
                                        <span class="text-gray-700 dark:text-gray-300">Seni Penyajian Makanan (Plating & Garnish)</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1 text-sm">check_circle</span>
                                        <span class="text-gray-700 dark:text-gray-300">Dasar-Dasar Pastry & Bakery</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1 text-sm">check_circle</span>
                                        <span class="text-gray-700 dark:text-gray-300">Manajemen Sanitasi & Keamanan Pangan (HACCP)</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1 text-sm">check_circle</span>
                                        <span class="text-gray-700 dark:text-gray-300">Pengelolaan Bahan Makanan & Gudang</span>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Kompetensi Pendukung</h4>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1 text-sm">check_circle</span>
                                        <span class="text-gray-700 dark:text-gray-300">Perencanaan Menu & Gizi</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1 text-sm">check_circle</span>
                                        <span class="text-gray-700 dark:text-gray-300">Manajemen Dapur & Cost Control</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1 text-sm">check_circle</span>
                                        <span class="text-gray-700 dark:text-gray-300">Etika & Pelayanan Restoran (Service Excellence)</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1 text-sm">check_circle</span>
                                        <span class="text-gray-700 dark:text-gray-300">Fotografi Makanan (Food Styling)</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="material-icons text-primary mr-3 mt-1 text-sm">check_circle</span>
                                        <span class="text-gray-700 dark:text-gray-300">Kewirausahaan Bidang Kuliner</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="mt-8 p-6 bg-red-50 dark:bg-red-900 dark:bg-opacity-20 rounded-xl">
                            <h4 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">Peluang Karir</h4>
                            <p class="text-gray-700 dark:text-gray-300 mb-4">Lulusan SK memiliki jiwa wirausaha dan keterampilan yang siap kerja di industri hospitality dan kuliner:</p>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                <div class="text-center">
                                    <div class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">restaurant</span>
                                    </div>
                                    <p class="text-sm text-gray-700 dark:text-gray-300">Chef</p>
                                </div>
                                <div class="text-center">
                                    <div class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">bakery_dining</span>
                                    </div>
                                    <p class="text-sm text-gray-700 dark:text-gray-300">Pastry Chef</p>
                                </div>
                                <div class="text-center">
                                    <div class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">room_service</span>
                                    </div>
                                    <p class="text-sm text-gray-700 dark:text-gray-300">F&B Manager</p>
                                </div>
                                <div class="text-center">
                                    <div class="w-12 h-12 bg-primary bg-opacity-10 rounded-lg flex items-center justify-center mx-auto mb-2">
                                        <span class="material-icons text-primary">store</span>
                                    </div>
                                    <p class="text-sm text-gray-700 dark:text-gray-300">Wirausaha Kuliner</p>
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
                    <img src="https://picsum.photos/seed/sk1/400/300.jpg" alt="Kegiatan SK" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/sk2/400/300.jpg" alt="Kegiatan SK" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/sk3/400/300.jpg" alt="Kegiatan SK" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/sk4/400/300.jpg" alt="Kegiatan SK" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/sk5/400/300.jpg" alt="Kegiatan SK" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/sk6/400/300.jpg" alt="Kegiatan SK" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/sk7/400/300.jpg" alt="Kegiatan SK" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="https://picsum.photos/seed/sk8/400/300.jpg" alt="Kegiatan SK" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
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
                        <img src="https://picsum.photos/seed/alumni-sk1/100/100.jpg" alt="Alumni" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Asep Supriatna</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Alumni 2020 - Chef de Partie</p>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 italic">"Dapur praktik di sekolah sangat mirip dengan dapur hotel. Ini membuat saya tidak kesulitan beradaptasi saat mulai bekerja. Fondasinya sangat kuat!"</p>
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
                        <img src="https://picsum.photos/seed/alumni-sk2/100/100.jpg" alt="Alumni" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Rina Susanti</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Alumni 2021 - Owner Cafe & Bakery</p>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 italic">"Pelajaran kewirausahaan di jurusan SK memotivasi saya untuk buka usaha sendiri. Sekarang cafe saya sudah punya 2 cabang. Terima kasih!"</p>
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
                        <img src="https://picsum.photos/seed/alumni-sk3/100/100.jpg" alt="Alumni" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Budi Santoso</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Alumni 2022 - F&B Supervisor</p>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 italic">"Tidak hanya masak, saya juga belajar manajemen dan pelayanan. Ini membuat saya lebih percaya diri mengambil posisi supervisori di perusahaan."</p>
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
                Tertarik Menjadi Chef Profesional?
            </h2>
            <p class="text-xl text-gray-100 mb-8 max-w-2xl mx-auto">
                Ciptakan cita rasa dan wujudkan mimpi kuliner Anda. Daftar sekarang dan mulai perjalanan Anda di dunia Tata Boga!
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