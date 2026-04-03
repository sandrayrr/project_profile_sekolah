<!DOCTYPE html>
<html class="light" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Jurusan - SMK Negeri 1 Kawali</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
                    animation: {
                        'fade-in': 'fadeIn 0.6s ease-out',
                        'float': 'float 3s ease-in-out infinite',
                        'slide-up': 'slideUp 0.5s ease-out',
                        'bounce-in': 'bounceIn 0.6s ease-out',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(10px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-10px)' }
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
    <!-- Custom CSS -->
    <style>
        /* Efek hover untuk kartu jurusan */
        .card-hover-effect {
            transition: all 0.3s ease;
        }

        .card-hover-effect:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        /* Styling untuk ikon di tengah kartu */
        .activity-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(8px);
            color: white;
            font-size: 1.5rem;
        }

        /* Posisi konten (judul & deskripsi) di bagian bawah gambar */
        .card-content {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 10;
            padding: 1.5rem;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0) 100%);
        }

        /* Animasi badge "pulse" */
        .badge-pulse {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(59, 130, 246, 0.7);
            }

            70% {
                box-shadow: 0 0 0 10px rgba(59, 130, 246, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(59, 130, 246, 0);
            }
        }

        /* Efek teks dengan gradien */
        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        /* Badge animation */
        .badge-pulse {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(59, 130, 246, 0.7);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(59, 130, 246, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(59, 130, 246, 0);
            }
        }
        
        /* Gradient text */
        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>
@include('layouts.navbar')

<body
    class="bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-100 font-body transition-colors duration-300">

    <!-- HERO SECTION -->
    <section
        class="relative bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-gray-900 dark:to-gray-800 border-b border-blue-100 dark:border-gray-700 pb-20 pt-20 overflow-hidden">
        <!-- Background Decor -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0 pointer-events-none">
            <div class="absolute -top-24 -right-24 w-96 h-96 bg-blue-100/50 dark:bg-blue-900/20 rounded-full blur-3xl">
            </div>
            <div class="absolute top-1/2 -left-24 w-72 h-72 bg-cyan-100/50 dark:bg-cyan-900/20 rounded-full blur-3xl">
            </div>
            <div
                class="absolute bottom-0 right-1/4 w-64 h-64 bg-purple-100/30 dark:bg-purple-900/20 rounded-full blur-3xl">
            </div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center">
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white dark:bg-gray-800 text-primary text-xs font-bold mb-6 border border-blue-200 dark:border-blue-800 badge-pulse">
                    <i class="fa-solid fa-graduation-cap"></i> Kompetensi Keahlian
                </div>
                <h1 class="text-4xl md:text-6xl font-extrabold text-slate-900 dark:text-white mb-6 tracking-tight">
                    Jurusan <span class="gradient-text">Unggulan</span>
                </h1>
                <p class="text-slate-600 dark:text-slate-300 text-lg max-w-2xl mx-auto mb-10">
                    Program keahlian yang membekali siswa dengan keterampilan praktis dan teori sesuai kebutuhan
                    industri.
                </p>
            </div>
            
            <!-- RIGHT -->
      
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

            <!-- Grid untuk 6 kartu pertama -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- PPLG Card -->
                <div class="card-hover-effect bg-card-light dark:bg-card-dark rounded-2xl shadow-lg overflow-hidden">
                    <div class="relative">
                        <div class="aspect-video relative overflow-hidden">
                            <img src="pplg7.jpg" alt="PPLG" class="absolute inset-0 w-full h-full object-cover">
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-blue-500/70 to-purple-600/70 p-8 flex items-center justify-center">
                                <div class="activity-icon">
                                    <i class="material-icons">code</i>
                                </div>
                            </div>
                            <div class="card-content">
                                <h3 class="text-xl font-bold text-white mb-2">PPLG</h3>
                                <p class="text-white/90">Pengembangan Perangkat Lunak dan Gim</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-700 dark:text-gray-300">
                            Jurusan yang fokus pada pengembangan perangkat lunak dan game dengan teknologi terkini.
                        </p>
                    </div>
                </div>

                <!-- TJKT Card -->
                <div class="card-hover-effect bg-card-light dark:bg-card-dark rounded-2xl shadow-lg overflow-hidden">
                    <div class="relative">
                        <div class="aspect-video relative overflow-hidden">
                            <img src="tkj4.jpg" alt="TJKT" class="absolute inset-0 w-full h-full object-cover">
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-cyan-500/70 to-blue-600/70 p-8 flex items-center justify-center">
                                <div class="activity-icon">
                                    <i class="material-icons">settings_ethernet</i>
                                </div>
                            </div>
                            <div class="card-content">
                                <h3 class="text-xl font-bold text-white mb-2">TJKT</h3>
                                <p class="text-white/90">Teknik Jaringan Komputer dan Telekomunikasi</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-700 dark:text-gray-300">
                            Jurusan yang mempelajari infrastruktur jaringan dan sistem telekomunikasi modern.
                        </p>
                    </div>
                </div>

                <!-- AKL Card -->
                <div class="card-hover-effect bg-card-light dark:bg-card-dark rounded-2xl shadow-lg overflow-hidden">
                    <div class="relative">
                        <div class="aspect-video relative overflow-hidden">
                            <img src="ak1.jpg" alt="AKL" class="absolute inset-0 w-full h-full object-cover">
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-emerald-500/70 to-teal-600/70 p-8 flex items-center justify-center">
                                <div class="activity-icon">
                                    <i class="material-icons">account_balance</i>
                                </div>
                            </div>
                            <div class="card-content">
                                <h3 class="text-xl font-bold text-white mb-2">AKL</h3>
                                <p class="text-white/90">Akuntansi Keuangan dan Lembaga</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-700 dark:text-gray-300">
                            Jurusan yang membekali siswa dengan keterampilan akuntansi dan keuangan lembaga.
                        </p>
                    </div>
                </div>

                <!-- TKR Card -->
                <div class="card-hover-effect bg-card-light dark:bg-card-dark rounded-2xl shadow-lg overflow-hidden">
                    <div class="relative">
                        <div class="aspect-video relative overflow-hidden">
                            <img src="tkr1.jpg" alt="TKR" class="absolute inset-0 w-full h-full object-cover">
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-orange-500/70 to-red-600/70 p-8 flex items-center justify-center">
                                <div class="activity-icon">
                                    <i class="material-icons">build</i>
                                </div>
                            </div>
                            <div class="card-content">
                                <h3 class="text-xl font-bold text-white mb-2">TKR</h3>
                                <p class="text-white/90">Teknik Kendaraan Ringan</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-700 dark:text-gray-300">
                            Jurusan yang fokus pada perbaikan dan perawatan kendaraan ringan.
                        </p>
                    </div>
                </div>

                <!-- DPIB Card -->
                <div class="card-hover-effect bg-card-light dark:bg-card-dark rounded-2xl shadow-lg overflow-hidden">
                    <div class="relative">
                        <div class="aspect-video relative overflow-hidden">
                            <img src="dpib2.jpg" alt="DPIB" class="absolute inset-0 w-full h-full object-cover">
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-purple-500/70 to-indigo-600/70 p-8 flex items-center justify-center">
                                <div class="activity-icon">
                                    <i class="material-icons">architecture</i>
                                </div>
                            </div>
                            <div class="card-content">
                                <h3 class="text-xl font-bold text-white mb-2">DPIB</h3>
                                <p class="text-white/90">Desain Permodelan dan Informasi Bangunan</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-700 dark:text-gray-300">
                            Jurusan yang fokus pada desain bangunan dan pemodelan informasi konstruksi.
                        </p>
                    </div>
                </div>

                <!-- SP Card -->
                <div class="card-hover-effect bg-card-light dark:bg-card-dark rounded-2xl shadow-lg overflow-hidden">
                    <div class="relative">
                        <div class="aspect-video relative overflow-hidden">
                            <img src="sp1.jpg" alt="SP" class="absolute inset-0 w-full h-full object-cover">
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-purple-500/70 to-pink-600/70 p-8 flex items-center justify-center">
                                <div class="activity-icon">
                                    <i class="material-icons">theater_comedy</i>
                                </div>
                            </div>
                            <div class="card-content">
                                <h3 class="text-xl font-bold text-white mb-2">SP</h3>
                                <p class="text-white/90">Seni Pertunjukan</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-700 dark:text-gray-300">
                            Jurusan yang fokus pada pengembangan bakat seni pertunjukan seperti teater, musik, dan tari.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Kontainer Flexbox untuk memusatkan kartu terakhir (MPLB) -->
            <div class="flex justify-center mt-8">
                <!-- MPLB Card -->
                <div
                    class="card-hover-effect bg-card-light dark:bg-card-dark rounded-2xl shadow-lg overflow-hidden w-full max-w-lg">
                    <div class="relative">
                        <div class="aspect-video relative overflow-hidden">
                            <!-- Ganti dengan gambar yang sesuai -->
                            <img src="mp5.jpg" alt="MPLB" class="absolute inset-0 w-full h-full object-cover">
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-purple-500/70 to-pink-600/70 p-8 flex items-center justify-center">
                                <div class="activity-icon">
                                    <i class="material-icons">business</i>
                                </div>
                            </div>
                            <div class="card-content">
                                <h3 class="text-xl font-bold text-white mb-2">MPLB</h3>
                                <p class="text-white/90">Manajemen Perkantoran dan Layanan Bisnis</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-700 dark:text-gray-300">
                            Jurusan yang fokus pada keterampilan administrasi perkantoran dan manajemen layanan bisnis.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')
    <!-- JavaScript untuk animasi scroll pada kartu jurusan -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Opsi untuk Intersection Observer
            const observerOptions = {
                root: null, // Menggunakan viewport sebagai root
                rootMargin: '0px',
                threshold: 0.1 // Memicu animasi saat 10% elemen terlihat
            };

            // Membuat observer baru
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    // Jika elemen masuk ke dalam viewport
                    if (entry.isIntersecting) {
                        // Tambahkan class animasi
                        entry.target.classList.add('animate-fade-in');
                        // Opsional: Hentikan pengamatan setelah animasi dijalankan sekali
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            // Amati semua elemen dengan class 'card-hover-effect'
            document.querySelectorAll('.card-hover-effect').forEach(card => {
                observer.observe(card);
            });
        });
    </script>
</body>

</html>