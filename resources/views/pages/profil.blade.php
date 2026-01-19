<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profil Sekolah - SMK Negeri 1 Kawali</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />

    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#2563eb", // Warna biru
                        "primary-light": "#dbeafe",
                        "primary-dark": "#1e40af",
                        "background-light": "#f9fafb",
                        "background-dark": "#111827",
                        "card-light": "#ffffff",
                        "card-dark": "#1f2937",
                        "border-light": "#e5e7eb",
                        "border-dark": "#374151",
                        "secondary": "#6366f1", // Warna ungu untuk aksen
                        "accent": "#f59e0b", // Warna emas untuk highlight
                    },
                    fontFamily: {
                        body: ["Inter", "sans-serif"],
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.6s ease-out',
                        'float': 'float 3s ease-in-out infinite',
                        'zoom-in': 'zoomIn 0.3s ease-out',
                        'slide-in-left': 'slideInLeft 0.6s ease-out',
                        'slide-in-right': 'slideInRight 0.6s ease-out',
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
                        slideInLeft: {
                            '0%': { opacity: '0', transform: 'translateX(-30px)' },
                            '100%': { opacity: '1', transform: 'translateX(0)' },
                        },
                        slideInRight: {
                            '0%': { opacity: '0', transform: 'translateX(30px)' },
                            '100%': { opacity: '1', transform: 'translateX(0)' },
                        }
                    }
                },
            },
        };
    </script>
    <style>
        /* Header pattern overlay */
        .header-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        /* Hero image hover effect */
        .hero-image-container {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .hero-image-container:hover {
            transform: scale(1.02);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        /* Card hover effect */
        .feature-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        /* Achievement badge animation */
        .achievement-badge {
            transition: all 0.3s ease;
        }
        .achievement-badge:hover {
            transform: scale(1.05);
        }

        /* Smooth scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
        .dark ::-webkit-scrollbar-track {
            background: #374151;
        }
        .dark ::-webkit-scrollbar-thumb {
            background: #6b7280;
        }

        /* Timeline styling */
        .timeline-line {
            background: linear-gradient(to bottom, #2563eb, #6366f1);
        }
        .timeline-dot {
            background-color: #2563eb;
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1);
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-100 font-body transition-colors duration-300">

    @include('layouts.navbar')

    <!-- HEADER -->
    <div class="relative bg-gradient-to-br from-primary to-primary-dark dark:from-blue-800 dark:to-blue-900 py-20 header-pattern">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="relative container mx-auto px-4">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-3 animate-fade-in">
                Profil Sekolah
            </h1>
            <p class="text-gray-100 text-lg md:text-xl max-w-2xl animate-fade-in" style="animation-delay: 0.2s">
                Mengenal lebih dekat SMK Negeri 1 Kawali sebagai pusat pendidikan kejuruan unggulan.
            </p>
        </div>
    </div>

    <!-- CONTENT -->
    <main class="container mx-auto px-4 py-12 lg:py-16 min-h-screen">

        <!-- HERO IMAGE & STATISTICS -->
        <div class="grid lg:grid-cols-3 gap-8 mb-16">
            <div class="lg:col-span-2">
                <div class="hero-image-container w-full h-[420px] rounded-2xl overflow-hidden shadow-lg bg-gray-200 dark:bg-gray-700 animate-fade-in" style="animation-delay: 0.3s">
                    <img
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBhGGaJSBXrVbjjuJh9rvNf2_Sw8wxAbpF1SRgVnoDmiYiJ1OD20ePBWR1IH5zUhTpkSzvlSyaq1HUhhL9z7iRrmarzGjNyfctJQ1zEFxE0QECKAn5KI36eABDUQC7dMWkilCS0FDWWasQnlDt3791ucW4S8jQ8A-xWIsTpoAZhrueDMFzFfWIVidv8BJS52hmbzd7KoovvePN-cPkZlYHeE70DEfvwcqZrntJ5-4jUPDxt0PktfUZ4xRrHODhG9oWJEG8a_j2x1v0X"
                        alt="Gedung Sekolah"
                        class="w-full h-full object-cover">
                </div>
            </div>
            
            <!-- STATISTICS -->
            <div class="space-y-4 animate-fade-in" style="animation-delay: 0.4s">
                <div class="bg-card-light dark:bg-card-dark rounded-xl p-6 border border-border-light dark:border-border-dark feature-card">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 dark:text-gray-400 text-sm">Total Siswa</p>
                            <p class="text-3xl font-bold text-gray-900 dark:text-white">1.250+</p>
                        </div>
                        <div class="w-12 h-12 bg-primary/10 dark:bg-primary/20 rounded-full flex items-center justify-center">
                            <i class="fas fa-graduation-cap text-primary"></i>
                        </div>
                    </div>
                </div>
                
                <div class="bg-card-light dark:bg-card-dark rounded-xl p-6 border border-border-light dark:border-border-dark feature-card">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 dark:text-gray-400 text-sm">Guru & Staff</p>
                            <p class="text-3xl font-bold text-gray-900 dark:text-white">85+</p>
                        </div>
                        <div class="w-12 h-12 bg-primary/10 dark:bg-primary/20 rounded-full flex items-center justify-center">
                            <i class="fas fa-chalkboard-teacher text-primary"></i>
                        </div>
                    </div>
                </div>
                
                <div class="bg-card-light dark:bg-card-dark rounded-xl p-6 border border-border-light dark:border-border-dark feature-card">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 dark:text-gray-400 text-sm">Program Keahlian</p>
                            <p class="text-3xl font-bold text-gray-900 dark:text-white">6</p>
                        </div>
                        <div class="w-12 h-12 bg-primary/10 dark:bg-primary/20 rounded-full flex items-center justify-center">
                            <i class="fas fa-code text-primary"></i>
                        </div>
                    </div>
                </div>
                
                <div class="bg-card-light dark:bg-card-dark rounded-xl p-6 border border-border-light dark:border-border-dark feature-card">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 dark:text-gray-400 text-sm">Tahun Berdiri</p>
                            <p class="text-3xl font-bold text-gray-900 dark:text-white">2005</p>
                        </div>
                        <div class="w-12 h-12 bg-primary/10 dark:bg-primary/20 rounded-full flex items-center justify-center">
                            <i class="fas fa-calendar-alt text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SEJARAH SINGKAT -->
        <div class="bg-card-light dark:bg-card-dark rounded-2xl border border-border-light dark:border-border-dark p-8 md:p-12 mb-16 animate-fade-in" style="animation-delay: 0.5s">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold mb-6 text-gray-900 dark:text-white flex items-center">
                    <div class="w-10 h-10 bg-primary/10 dark:bg-primary/20 rounded-full flex items-center justify-center mr-3">
                        <i class="fas fa-history text-primary"></i>
                    </div>
                    Sejarah Singkat
                </h2>
                <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-4">
                    SMK Negeri 1 Kawali didirikan pada tahun 2005 sebagai respons terhadap kebutuhan akan tenaga kerja terampil di Kabupaten Ciamis dan sekitarnya. Sekolah ini memulai perjalanannya dengan hanya 3 program keahlian dan 150 siswa.
                </p>
                <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-4">
                    Seiring berjalannya waktu, SMK Negeri 1 Kawali terus berkembang dan menambah berbagai program keahlian yang relevan dengan kebutuhan industri. Pada tahun 2010, sekolah ini meraih akreditasi A dan menjadi salah satu SMK favorit di Jawa Barat.
                </p>
                <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                    Hingga kini, SMK Negeri 1 Kawali terus berkomitmen untuk menghasilkan lulusan yang siap kerja, berkarakter, dan mampu bersaing di era globalisasi dengan didukung oleh fasilitas modern dan tenaga pendidik yang profesional.
                </p>
            </div>
        </div>

        <!-- VISI & MISI -->
        <div class="grid md:grid-cols-2 gap-8 mb-16">
            <div class="feature-card bg-card-light dark:bg-card-dark rounded-2xl border border-border-light dark:border-border-dark p-10 text-center animate-slide-in-left" style="animation-delay: 0.6s">
                <div class="w-16 h-16 mx-auto mb-6 rounded-full bg-primary/10 dark:bg-primary/20 flex items-center justify-center">
                    <i class="fas fa-eye text-primary text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-900 dark:text-white uppercase">
                    Visi
                </h3>
                <p class="text-gray-600 dark:text-gray-300">
                    Terwujudnya SMK Negeri 1 Kawali sebagai sekolah kejuruan unggulan
                    yang berdaya saing nasional dan global.
                </p>
            </div>

            <div class="feature-card bg-card-light dark:bg-card-dark rounded-2xl border border-border-light dark:border-border-dark p-10 text-center animate-slide-in-right" style="animation-delay: 0.7s">
                <div class="w-16 h-16 mx-auto mb-6 rounded-full bg-primary/10 dark:bg-primary/20 flex items-center justify-center">
                    <i class="fas fa-rocket text-primary text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-900 dark:text-white uppercase">
                    Misi
                </h3>
                <ul class="text-gray-600 dark:text-gray-300 list-disc list-inside space-y-2 text-left max-w-sm mx-auto">
                    <li>Menyelenggarakan pendidikan berbasis teknologi</li>
                    <li>Membentuk karakter siswa yang unggul</li>
                    <li>Memperkuat kerja sama industri</li>
                    <li>Mendorong jiwa kewirausahaan</li>
                </ul>
            </div>
        </div>

        <!-- PROGRAM KEAHLIAN -->
        <div class="mb-16 animate-fade-in" style="animation-delay: 0.8s">
            <h2 class="text-3xl font-bold mb-8 text-gray-900 dark:text-white text-center">
                Program Keahlian
            </h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="feature-card bg-card-light dark:bg-card-dark rounded-xl border border-border-light dark:border-border-dark p-6">
                    <div class="w-14 h-14 bg-primary/10 dark:bg-primary/20 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-laptop-code text-primary text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white">Rekayasa Perangkat Lunak</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-sm">Mempelajari pemrograman, pengembangan aplikasi, dan sistem informasi.</p>
                </div>
                
                <div class="feature-card bg-card-light dark:bg-card-dark rounded-xl border border-border-light dark:border-border-dark p-6">
                    <div class="w-14 h-14 bg-primary/10 dark:bg-primary/20 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-network-wired text-primary text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white">Teknik Komputer dan Jaringan</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-sm">Fokus pada instalasi jaringan, troubleshooting, dan administrasi sistem.</p>
                </div>
                
                <div class="feature-card bg-card-light dark:bg-card-dark rounded-xl border border-border-light dark:border-border-dark p-6">
                    <div class="w-14 h-14 bg-primary/10 dark:bg-primary/20 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-bullhorn text-primary text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white">Multimedia</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-sm">Mempelajari desain grafis, animasi, video editing, dan pengembangan konten digital.</p>
                </div>
                
                <div class="feature-card bg-card-light dark:bg-card-dark rounded-xl border border-border-light dark:border-border-dark p-6">
                    <div class="w-14 h-14 bg-primary/10 dark:bg-primary/20 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-cogs text-primary text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white">Teknik Mesin</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-sm">Mempelajari permesinan, perawatan, dan perbaikan berbagai jenis mesin industri.</p>
                </div>
                
                <div class="feature-card bg-card-light dark:bg-card-dark rounded-xl border border-border-light dark:border-border-dark p-6">
                    <div class="w-14 h-14 bg-primary/10 dark:bg-primary/20 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-bolt text-primary text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white">Teknik Instalasi Tenaga Listrik</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-sm">Fokus pada instalasi, perawatan, dan perbaikan sistem tenaga listrik.</p>
                </div>
                
                <div class="feature-card bg-card-light dark:bg-card-dark rounded-xl border border-border-light dark:border-border-dark p-6">
                    <div class="w-14 h-14 bg-primary/10 dark:bg-primary/20 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-car text-primary text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white">Teknik Kendaraan Ringan</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-sm">Mempelajari perawatan dan perbaikan sistem kelistrikan dan mesin kendaraan.</p>
                </div>
            </div>
        </div>

        <!-- FASILITAS -->
        <div class="mb-16 animate-fade-in" style="animation-delay: 0.9s">
            <h2 class="text-3xl font-bold mb-8 text-gray-900 dark:text-white text-center">
                Fasilitas Sekolah
            </h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="feature-card bg-card-light dark:bg-card-dark rounded-xl border border-border-light dark:border-border-dark p-6 text-center">
                    <div class="w-14 h-14 bg-primary/10 dark:bg-primary/20 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-laptop text-primary text-xl"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-2 text-gray-900 dark:text-white">Lab Komputer</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-sm">4 lab dengan 40 unit komputer modern</p>
                </div>
                
                <div class="feature-card bg-card-light dark:bg-card-dark rounded-xl border border-border-light dark:border-border-dark p-6 text-center">
                    <div class="w-14 h-14 bg-primary/10 dark:bg-primary/20 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-book text-primary text-xl"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-2 text-gray-900 dark:text-white">Perpustakaan</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-sm">Koleksi 10.000+ buku dan e-book</p>
                </div>
                
                <div class="feature-card bg-card-light dark:bg-card-dark rounded-xl border border-border-light dark:border-border-dark p-6 text-center">
                    <div class="w-14 h-14 bg-primary/10 dark:bg-primary/20 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-dumbbell text-primary text-xl"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-2 text-gray-900 dark:text-white">Lapangan Olahraga</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-sm">Lapangan basket, voli, dan futsal</p>
                </div>
                
                <div class="feature-card bg-card-light dark:bg-card-dark rounded-xl border border-border-light dark:border-border-dark p-6 text-center">
                    <div class="w-14 h-14 bg-primary/10 dark:bg-primary/20 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-mosque text-primary text-xl"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-2 text-gray-900 dark:text-white">Masjid</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-sm">Tempat ibadah yang nyaman dan luas</p>
                </div>
            </div>
        </div>

        <!-- PRESTASI -->
        <div class="mb-16 animate-fade-in" style="animation-delay: 1.0s">
            <h2 class="text-3xl font-bold mb-8 text-gray-900 dark:text-white text-center">
                Prestasi Sekolah
            </h2>
            <div class="bg-card-light dark:bg-card-dark rounded-2xl border border-border-light dark:border-border-dark p-8">
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="flex items-start space-x-4">
                        <div class="achievement-badge w-12 h-12 bg-accent/10 dark:bg-accent/20 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-trophy text-accent"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold mb-1 text-gray-900 dark:text-white">Juara 1 LKS Tingkat Provinsi</h3>
                            <p class="text-gray-600 dark:text-gray-300 text-sm">Bidang IT Network System Administration 2022</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="achievement-badge w-12 h-12 bg-accent/10 dark:bg-accent/20 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-medal text-accent"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold mb-1 text-gray-900 dark:text-white">Juara 2 Olimpiade Sains</h3>
                            <p class="text-gray-600 dark:text-gray-300 text-sm">Bidang Komputer Tingkat Jawa Barat 2021</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="achievement-badge w-12 h-12 bg-accent/10 dark:bg-accent/20 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-award text-accent"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold mb-1 text-gray-900 dark:text-white">Sekolah Adiwiyata Nasional</h3>
                            <p class="text-gray-600 dark:text-gray-300 text-sm">Penghargaan lingkungan hidup 2020</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="achievement-badge w-12 h-12 bg-accent/10 dark:bg-accent/20 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-star text-accent"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold mb-1 text-gray-900 dark:text-white">Sekolah Sehat</h3>
                            <p class="text-gray-600 dark:text-gray-300 text-sm">Kategori Sekolah Menengah Kejuruan 2019</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- KONTAK -->
        <div class="bg-gradient-to-r from-primary to-secondary rounded-2xl p-8 md:p-12 text-white animate-fade-in" style="animation-delay: 1.1s">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold mb-6 text-center">Hubungi Kami</h2>
                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-xl font-semibold mb-4">Informasi Kontak</h3>
                        <div class="space-y-3">
                            <div class="flex items-center space-x-3">
                                <i class="fas fa-map-marker-alt w-5"></i>
                                <p>Jl. Pendidikan No. 12, Kawali, Kabupaten Ciamis, Jawa Barat 46253</p>
                            </div>
                            <div class="flex items-center space-x-3">
                                <i class="fas fa-phone w-5"></i>
                                <p>(0265) 123456</p>
                            </div>
                            <div class="flex items-center space-x-3">
                                <i class="fas fa-envelope w-5"></i>
                                <p>info@smkn1kawali.sch.id</p>
                            </div>
                            <div class="flex items-center space-x-3">
                                <i class="fas fa-globe w-5"></i>
                                <p>www.smkn1kawali.sch.id</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold mb-4">Jam Operasional</h3>
                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span>Senin - Kamis</span>
                                <span>07:00 - 16:00</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Jumat</span>
                                <span>07:00 - 11:30</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Sabtu</span>
                                <span>07:00 - 13:00</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Minggu</span>
                                <span>Tutup</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 flex justify-center space-x-4">
                    <a href="#" class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition-colors">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition-colors">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition-colors">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition-colors">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>
        </div>

    </main>

    @include('layouts.footer')

    <!-- DARK MODE BUTTON -->
    <button
        id="darkToggle"
        class="fixed bottom-6 right-6 bg-primary hover:bg-primary-dark text-white p-3 rounded-full shadow-lg z-40 transition-all duration-300 hover:scale-110">
        <i class="fa-solid fa-moon dark:hidden"></i>
        <i class="fa-solid fa-sun hidden dark:block"></i>
    </button>

    <script>
        // Dark mode toggle
        const toggle = document.getElementById('darkToggle');
        const html = document.documentElement;

        if (localStorage.getItem('theme') === 'dark') {
            html.classList.add('dark');
        }

        toggle.addEventListener('click', () => {
            html.classList.toggle('dark');
            localStorage.setItem(
                'theme',
                html.classList.contains('dark') ? 'dark' : 'light'
            );
        });
    </script>

</body>
</html>