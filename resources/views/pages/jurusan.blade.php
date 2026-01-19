<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Jurusan - SMK Negeri 1 Kawali</title>
    <!-- Fonts -->
     <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <!-- Theme Configuration -->
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#3b82f6",
                        secondary: "#6366f1",
                        accent: "#f59e0b",
                        "background-light": "#f9fafb",
                        "background-dark": "#111827",
                        "card-light": "#ffffff",
                        "card-dark": "#1f2937",
                        "border-light": "#e5e7eb",
                        "border-dark": "#374151",
                        "text-light": "#111318",
                        "text-dark": "#f9fafb",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"],
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.6s ease-out',
                        'float': 'float 3s ease-in-out infinite',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(10px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-10px)' }
                        }
                    }
                },
            },
        };
    </script>
    <style>
        .card-hover-effect {
            transition: all 0.3s ease;
        }
        .card-hover-effect:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        .activity-icon {
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin: 0 auto 1rem;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            font-size: 1.5rem;
        }
        .card-content {
            position: relative;
            z-index: 10;
        }
        .card-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 70%;
            background: linear-gradient(to top, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0) 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .card-hover-effect:hover .card-overlay {
            opacity: 1;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-100 font-body transition-colors duration-300">
    @include('layouts.navbar')

    <!-- HERO SECTION -->
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
                        Jurusan Unggulan
                    </h1>

                    <p class="text-gray-100 text-lg leading-relaxed mb-8 max-w-xl">
                        Program keahlian yang membekali siswa dengan keterampilan praktis dan teori sesuai kebutuhan industri.
                    </p>

                    <div class="flex flex-wrap gap-4">
                        <a href="#jurusan-grid" class="bg-white text-primary px-8 py-3 rounded-xl font-medium hover:bg-gray-100 transition shadow-lg">
                            Lihat Semua Jurusan
                        </a>
                        <a href="#" class="border border-white text-white px-8 py-3 rounded-xl font-medium hover:bg-white hover:text-primary transition">
                            Unduh Brosur
                        </a>
                    </div>
                </div>

                <!-- RIGHT -->
                <div class="lg:w-1/2 flex justify-center">
                    <img
                        src="https://sfile.chatglm.cn/images-ppt/03c07d81854f.jpg"
                        alt="Jurusan SMKN 1 Kawali"
                        class="w-full max-w-xl h-[420px] object-cover rounded-2xl shadow-2xl">
                </div>
            </div>
        </div>
    </section>

    <!-- JURUSAN GRID -->
    <section id="jurusan-grid" class="py-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">Program Keahlian Kami</h2>
                <p class="text-lg text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
                    Pilih jurusan yang sesuai dengan minat dan bakat Anda untuk masa depan yang cerah
                </p>
            </div>
            
            <div class="grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- PPLG Card -->
                <div class="card-hover-effect bg-card-light dark:bg-card-dark rounded-2xl shadow-lg overflow-hidden">
                    <div class="relative">
                        <div class="aspect-video bg-gradient-to-br from-blue-500 to-purple-600 p-8 flex items-center justify-center">
                            <div class="activity-icon">
                                <i class="material-icons">code</i>
                            </div>
                        </div>
                        <div class="card-content">
                            <h3 class="text-xl font-bold text-white mb-2">PPLG</h3>
                            <p class="text-white/90">Pengembangan Perangkat Lunak dan Gim</p>
                        </div>
                        <div class="card-overlay"></div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-700 dark:text-gray-300">
                            Jurusan yang fokus pada pengembangan perangkat lunak dan game dengan teknologi terkini.
                        </p>
                        <div class="mt-4 flex justify-between items-center">
                            <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                <i class="material-icons text-sm mr-1">group</i>
                                <span>10-12 Kelas</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                <i class="material-icons text-sm mr-1">person</i>
                                <span>5 Guru</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TJKT Card -->
                <div class="card-hover-effect bg-card-light dark:bg-card-dark rounded-2xl shadow-lg overflow-hidden">
                    <div class="relative">
                        <div class="aspect-video bg-gradient-to-br from-cyan-500 to-blue-600 p-8 flex items-center justify-center">
                            <div class="activity-icon">
                                <i class="material-icons">settings_ethernet</i>
                            </div>
                        </div>
                        <div class="card-content">
                            <h3 class="text-xl font-bold text-white mb-2">TJKT</h3>
                            <p class="text-white/90">Teknik Jaringan Komputer dan Telekomunikasi</p>
                        </div>
                        <div class="card-overlay"></div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-700 dark:text-gray-300">
                            Jurusan yang mempelajari infrastruktur jaringan dan sistem telekomunikasi modern.
                        </p>
                        <div class="mt-4 flex justify-between items-center">
                            <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                <i class="material-icons text-sm mr-1">group</i>
                                <span>10-12 Kelas</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                <i class="material-icons text-sm mr-1">person</i>
                                <span>6 Guru</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- AKL Card -->
                <div class="card-hover-effect bg-card-light dark:bg-card-dark rounded-2xl shadow-lg overflow-hidden">
                    <div class="relative">
                        <div class="aspect-video bg-gradient-to-br from-emerald-500 to-teal-600 p-8 flex items-center justify-center">
                            <div class="activity-icon">
                                <i class="material-icons">account_balance</i>
                            </div>
                        </div>
                        <div class="card-content">
                            <h3 class="text-xl font-bold text-white mb-2">AKL</h3>
                            <p class="text-white/90">Akuntansi Keuangan dan Lembaga</p>
                        </div>
                        <div class="card-overlay"></div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-700 dark:text-gray-300">
                            Jurusan yang membekali siswa dengan keterampilan akuntansi dan keuangan lembaga.
                        </p>
                        <div class="mt-4 flex justify-between items-center">
                            <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                <i class="material-icons text-sm mr-1">group</i>
                                <span>10-12 Kelas</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                <i class="material-icons text-sm mr-1">person</i>
                                <span>4 Guru</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TKR Card -->
                <div class="card-hover-effect bg-card-light dark:bg-card-dark rounded-2xl shadow-lg overflow-hidden">
                    <div class="relative">
                        <div class="aspect-video bg-gradient-to-br from-orange-500 to-red-600 p-8 flex items-center justify-center">
                            <div class="activity-icon">
                                <i class="material-icons">build</i>
                            </div>
                        </div>
                        <div class="card-content">
                            <h3 class="text-xl font-bold text-white mb-2">TKR</h3>
                            <p class="text-white/90">Teknik Kendaraan Ringan</p>
                        </div>
                        <div class="card-overlay"></div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-700 dark:text-gray-300">
                            Jurusan yang fokus pada perbaikan dan perawatan kendaraan ringan.
                        </p>
                        <div class="mt-4 flex justify-between items-center">
                            <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                <i class="material-icons text-sm mr-1">group</i>
                                <span>10-12 Kelas</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                <i class="material-icons text-sm mr-1">person</i>
                                <span>8 Guru</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- DPIB Card -->
                <div class="card-hover-effect bg-card-light dark:bg-card-dark rounded-2xl shadow-lg overflow-hidden">
                    <div class="relative">
                        <div class="aspect-video bg-gradient-to-br from-purple-500 to-indigo-600 p-8 flex items-center justify-center">
                            <div class="activity-icon">
                                <i class="material-icons">architecture</i>
                            </div>
                        </div>
                        <div class="card-content">
                            <h3 class="text-xl font-bold text-white mb-2">DPIB</h3>
                            <p class="text-white/90">Desain Permodelan dan Informasi Bangunan</p>
                        </div>
                        <div class="card-overlay"></div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-700 dark:text-gray-300">
                            Jurusan yang fokus pada desain bangunan dan pemodelan informasi konstruksi.
                        </p>
                        <div class="mt-4 flex justify-between items-center">
                            <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                <i class="material-icons text-sm mr-1">group</i>
                                <span>10-12 Kelas</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                <i class="material-icons text-sm mr-1">person</i>
                                <span>3 Guru</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SK Card -->
                <div class="card-hover-effect bg-card-light dark:bg-card-dark rounded-2xl shadow-lg overflow-hidden">
                    <div class="relative">
                        <div class="aspect-video bg-gradient-to-br from-red-500 to-pink-600 p-8 flex items-center justify-center">
                            <div class="activity-icon">
                                <i class="material-icons">restaurant</i>
                            </div>
                        </div>
                        <div class="card-content">
                            <h3 class="text-xl font-bold text-white mb-2">SK</h3>
                            <p class="text-white/90">Tata Boga</p>
                        </div>
                        <div class="card-overlay"></div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-700 dark:text-gray-300">
                            Jurusan yang fokus pada seni memasak dan pengelolaan makanan.
                        </p>
                        <div class="mt-4 flex justify-between items-center">
                            <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                <i class="material-icons text-sm mr-1">group</i>
                                <span>10-12 Kelas</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                <i class="material-icons text-sm mr-1">person</i>
                                <span>4 Guru</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- STATISTICS SECTION -->
    <section class="py-16 bg-gray-50 dark:bg-gray-900">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">Statistik Jurusan</h2>
                <p class="text-lg text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
                    Angka siswa dan guru di setiap jurusan untuk tahun ajaran ini
                </p>
            </div>
            
            <div class="grid grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
                <!-- PPLG Stats -->
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 text-center">
                    <div class="flex justify-center mb-4">
                        <div class="w-16 h-16 bg-blue-100 dark:bg-blue-900 rounded-full flex items-center justify-center mb-4">
                            <i class="material-icons text-blue-600">code</i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">PPLG</h3>
                    <div class="grid grid grid-cols-2 gap-4">
                        <div>
                            <div class="text-3xl font-bold text-blue-600">120+</div>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Siswa</p>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-blue-600">5</div>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Guru</p>
                        </div>
                    </div>
                </div>

                <!-- TJKT Stats -->
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 text-center">
                    <div class="flex justify-center mb-4">
                        <div class="w-16 h-16 bg-cyan-100 dark:bg-cyan-900 rounded-full flex items-center justify-center mb-4">
                            <i class="material-icons text-cyan-600">settings_ethernet</i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">TJKT</h3>
                    <div class="grid grid grid-cols-2 gap-4">
                        <div>
                            <div class="text-3xl font-bold text-cyan-600">135+</div>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Siswa</p>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-cyan-600">6</div>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Guru</p>
                        </div>
                    </div>
                </div>

                <!-- AKL Stats -->
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 text-center">
                    <div class="flex justify-center mb-4">
                        <div class="w-16 h-16 bg-emerald-100 dark:bg-emerald-900 rounded-full flex items-center justify-center mb-4">
                            <i class="material-icons text-emerald-600">account_balance</i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">AKL</h3>
                    <div class="grid grid grid-cols-2 gap-4">
                        <div>
                            <div class="text-3xl font-bold text-emerald-600">95</div>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Siswa</p>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-emerald-600">4</div>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Guru</p>
                        </div>
                    </div>
                </div>

                <!-- TKR Stats -->
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 text-center">
                    <div class="flex justify-center mb-4">
                        <div class="w-16 h-16 bg-orange-100 dark:bg-orange-900 rounded-full flex items-center justify-center mb-4">
                            <i class="material-icons text-orange-600">build</i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">TKR</h3>
                    <div class="grid grid grid-cols-2 gap-4">
                        <div>
                            <div class="text-3xl font-bold text-orange-600">110+</div>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Siswa</p>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-orange-600">8</div>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Guru</p>
                        </div>
                    </div>
                </div>

                <!-- DPIB Stats -->
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 text-center">
                    <div class="flex justify-center mb-4">
                        <div class="w-16 h-16 bg-purple-100 dark:bg-purple-900 rounded-full flex items-center justify-center mb-4">
                            <i class="material-icons text-purple-600">architecture</i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">DPIB</h3>
                    <div class="grid grid grid-cols-2 gap-4">
                        <div>
                            <div class="text-3xl font-bold text-purple-600">80+</div>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Siswa</p>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-purple-600">3</div>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Guru</p>
                        </div>
                    </div>
                </div>

                <!-- SK Stats -->
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 text-center">
                    <div class="flex justify-center mb-4">
                        <div class="w-16 h-16 bg-pink-100 dark:bg-pink-900 rounded-full flex items-center justify-center mb-4">
                            <i class="material-icons text-pink-600">restaurant</i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">SK</h3>
                    <div class="grid grid grid-cols-2 gap-4">
                        <div>
                            <div class="text-3xl font-bold text-pink-600">90+</div>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Siswa</p>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-pink-600">4</div>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Guru</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CALL TO ACTION -->
    <section class="py-16 bg-gradient-to-r from-primary to-secondary dark:from-gray-700 dark:to-gray-900">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Pilih Jurusan Favoritmu</h2>
            <p class="text-xl text-white/90 max-w-2xl mx-auto mb-8">
                Setiap jurusan memiliki keunggulan dan keunggulan masing-masing. Temukan yang paling sesuai dengan minat dan bakat Anda.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="#" class="bg-white text-primary px-8 py-3 rounded-lg font-medium hover:bg-gray-100 transition-all shadow-lg">
                    Lihat Semua Jurusan
                </a>
                <a href="#" class="border border-white text-white px-8 py-3 rounded-lg font-medium hover:bg-white hover:text-primary transition-all">
                    Unduh Brosur
                </a>
            </div>
        </section>

    @include('layouts.footer')

    <script>
        // JavaScript untuk interaktivitas tambahan
        document.addEventListener('DOMContentLoaded', function() {
            // Animasi untuk kartu jurusan saat scroll
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1,
                triggerOnce: true
            };
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-fade-in');
                    }
                });
            }, observerOptions);
            
            document.querySelectorAll('.card-hover-effect').forEach(card => {
                observer.observe(card);
            });
        });
    </script>
</body>
</html>