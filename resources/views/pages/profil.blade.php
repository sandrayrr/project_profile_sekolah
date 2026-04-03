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
                        slideInLeft: {
                            '0%': { opacity: '0', transform: 'translateX(-30px)' },
                            '100%': { opacity: '1', transform: 'translateX(0)' },
                        },
                        slideInRight: {
                            '0%': { opacity: '0', transform: 'translateX(30px)' },
                            '100%': { opacity: '1', transform: 'translateX(0)' },
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

<body class="bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-100 font-body transition-colors duration-300">

    @include('layouts.navbar')

   <div class="relative bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-gray-900 dark:to-gray-800 border-b border-blue-100 dark:border-gray-700 pb-20 pt-20 overflow-hidden">
    <!-- Background Decor (Blue blobs) -->
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0 pointer-events-none">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-blue-100/50 dark:bg-blue-900/20 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 -left-24 w-72 h-72 bg-cyan-100/50 dark:bg-cyan-900/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-1/4 w-64 h-64 bg-purple-100/30 dark:bg-purple-900/20 rounded-full blur-3xl"></div>
    </div>

    <div class="relative container mx-auto px-4 z-10 text-center">
        <!-- Badge -->
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white dark:bg-gray-800 text-primary text-xs font-bold mb-6 border border-blue-200 dark:border-blue-800 badge-pulse">
            <i class="fa-solid fa-graduation-cap"></i> Profil Sekolah
        </div>

        <!-- Heading -->
        <h1 class="text-4xl md:text-6xl font-extrabold text-slate-900 dark:text-white mb-6 tracking-tight">
            <span class="gradient-text">Profil</span> Sekolah
        </h1>

        <!-- Paragraph -->
        <p class="text-slate-600 dark:text-slate-300 text-lg max-w-2xl mx-auto">
            Mengenal lebih dekat SMK Negeri 1 Kawali sebagai pusat pendidikan kejuruan unggulan.
        </p>
    </div>
</div>

    <!-- CONTENT -->
    <main class="container mx-auto px-4 py-12 lg:py-16 min-h-screen">

       <!-- HERO IMAGE & PROFIL SIDE BY SIDE -->
<div class="grid lg:grid-cols-3 gap-8 mb-16">
    
    <!-- FOTO (Diperkecil ke 1/3 layar) -->
    <div class="lg:col-span-1 animate-fade-in" style="animation-delay: 0.3s">
        <div class="hero-image-container w-full h-full min-h-[350px] rounded-2xl overflow-hidden shadow-lg bg-gray-200 dark:bg-gray-700">
            <img
                src="sekolah.jpeg"
                alt="Gedung Sekolah"
                class="w-full h-full object-cover">
        </div>
    </div>
    
    <!-- PROFIL (Dipindahkan ke samping foto) -->
    <div class="lg:col-span-2 animate-fade-in" style="animation-delay: 0.5s">
        <div class="bg-card-light dark:bg-card-dark rounded-2xl border border-border-light dark:border-border-dark p-8 md:p-10 h-full">
            <h2 class="text-3xl font-bold mb-6 text-gray-900 dark:text-white flex items-center">
                <div class="w-10 h-10 bg-primary/10 dark:bg-primary/20 rounded-full flex items-center justify-center mr-3">
                    <i class="fas fa-history text-primary"></i>
                </div>
                Profil
            </h2>
            <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-4">
                SMKN 1 Kawali adalah salah satu Sekolah Menengah Kejuruan Negeri yang berlokasi di wilayah Ciamis Utara dan berdiri sejak tahun 2004. Pada awal berdirinya, sekolah ini hanya memiliki satu Kompetensi Keahlian, yaitu Teknik Mesin Otomotif (TMO). Seiring berjalannya waktu, SMKN 1 Kawali terus berkembang hingga kini memiliki tujuh Kompetensi Keahlian, yaitu Teknik Otomotif (Teknik Otomotif), Teknik Jaringan Komputer dan Telekomunikasi (TJKT), Pengembangan Perangkat Lunak dan GIM (PPLG), Desain Pemodelan dan Informasi Bangunan (DPIB), Manajemen Perkantoran dan Layanan Bisnis(MP), Akuntansi Keuangan dan Lembaga (AKL), serta Seni Pertunjukan (SP).
            </p>
            <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                Jumlah peserta didik yang pada awalnya hanya 18 siswa kini telah meningkat pesat menjadi lebih dari 1.600 lebih siswa dan siswi SMKN 1 Kawali, yang berasal dari wilayah Ciamis Utara dan daerah lainnya.
            </p>
        </div>
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
                    Terwujudnya lulusan yang berakhlak mulia, unggul, profesional, mandiri dan berdaya saig global pada tahun 2026.
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
                    <li>Membentuk insan yang beriman dan bertaqwa kepada Tuhan Yang Maha Esa, berkarakter pancasila dan berbudaya industri. </li>
                    <li>Meningkatkan kualitas tata kelola kelembagaan sekolah, sumber daya manusia, dan akuntabilitas. </li>
                    <li>Meningkatkan layanan pendidikan melalui pembelajaran berbasis industri dan teknologi informasi. </li>
                    <li>Meningkatkan kerjasama kemitraan, penyerapan lulusan dengan IDUKA, Perguruan Tinggi, dan Lembaga Pemerintahan serta membangun jiwa wirausaha yang tangguh dan mandiri. </li>
                    <li>Meningkatkan kualitas SDM, Menyediakan sarana dan prasarana yang berkualitas, dan menyajikan proses pembelajaran bermutu, menuju link and match dengan IDUKA. </li>
                </ul>
            </div>
        </div>

        <!-- PROGRAM KEAHLIAN -->
        <!-- PROGRAM KEAHLIAN -->
<div class="mb-16 animate-fade-in" style="animation-delay: 0.8s">
    <h2 class="text-3xl font-bold mb-8 text-gray-900 dark:text-white text-center">
        Sejarah Program Keahlian
    </h2>
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Kartu 1: TO -->
        <div class="feature-card bg-card-light dark:bg-card-dark rounded-xl border border-border-light dark:border-border-dark p-6">
            <div class="w-14 h-14 bg-primary/10 dark:bg-primary/20 rounded-lg flex items-center justify-center mb-4">
                <i class="fas fa-car text-primary text-xl"></i>
            </div>
            <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white">Pembukaan Jurusan TO</h3>
            <p class="text-gray-600 dark:text-gray-300 text-sm">Dibuka pada 14 Oktober 2003</p>
        </div>
        
        <!-- Kartu 2: TJKT -->
        <div class="feature-card bg-card-light dark:bg-card-dark rounded-xl border border-border-light dark:border-border-dark p-6">
            <div class="w-14 h-14 bg-primary/10 dark:bg-primary/20 rounded-lg flex items-center justify-center mb-4">
                <i class="fas fa-network-wired text-primary text-xl"></i>
            </div>
            <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white">Pembukaan Jurusan TJKT</h3>
            <p class="text-gray-600 dark:text-gray-300 text-sm">Dibuka pada 31 Desember 2003</p>
        </div>
        
        <!-- Kartu 3: Pembukaan SMK -->
        <div class="feature-card bg-card-light dark:bg-card-dark rounded-xl border border-border-light dark:border-border-dark p-6">
            <div class="w-14 h-14 bg-primary/10 dark:bg-primary/20 rounded-lg flex items-center justify-center mb-4">
                <i class="fas fa-school text-primary text-xl"></i>
            </div>
            <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white">Pembukaan SMK</h3>
            <p class="text-gray-600 dark:text-gray-300 text-sm">Dibuka pada 2 Oktober 2004</p>
        </div>
        
        <!-- Kartu 4: PPLG -->
        <div class="feature-card bg-card-light dark:bg-card-dark rounded-xl border border-border-light dark:border-border-dark p-6">
            <div class="w-14 h-14 bg-primary/10 dark:bg-primary/20 rounded-lg flex items-center justify-center mb-4">
                <i class="fas fa-laptop-code text-primary text-xl"></i>
            </div>
            <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white">Pembukaan Jurusan PPLG</h3>
            <p class="text-gray-600 dark:text-gray-300 text-sm">Dibuka pada 13 Oktober 2009</p>
        </div>
        
        <!-- Kartu 5: MPLB -->
        <div class="feature-card bg-card-light dark:bg-card-dark rounded-xl border border-border-light dark:border-border-dark p-6">
            <div class="w-14 h-14 bg-primary/10 dark:bg-primary/20 rounded-lg flex items-center justify-center mb-4">
                <i class="fas fa-briefcase text-primary text-xl"></i>
            </div>
            <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white">Pembukaan Jurusan MPLB</h3>
            <p class="text-gray-600 dark:text-gray-300 text-sm">Dibuka pada 15 Oktober 2013</p>
        </div>
        
        <!-- Kartu 6: AKL -->
        <div class="feature-card bg-card-light dark:bg-card-dark rounded-xl border border-border-light dark:border-border-dark p-6">
            <div class="w-14 h-14 bg-primary/10 dark:bg-primary/20 rounded-lg flex items-center justify-center mb-4">
                <i class="fas fa-calculator text-primary text-xl"></i>
            </div>
            <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white">Pembukaan Jurusan AKL</h3>
            <p class="text-gray-600 dark:text-gray-300 text-sm">Dibuka pada 13 Oktober 2015</p>
        </div>
        
        <!-- Kartu 7: DPIB -->
        <div class="feature-card bg-card-light dark:bg-card-dark rounded-xl border border-border-light dark:border-border-dark p-6">
            <div class="w-14 h-14 bg-primary/10 dark:bg-primary/20 rounded-lg flex items-center justify-center mb-4">
                <i class="fas fa-drafting-compass text-primary text-xl"></i>
            </div>
            <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white">Pembukaan Jurusan DPIB</h3>
            <p class="text-gray-600 dark:text-gray-300 text-sm">Dibuka pada 13 Oktober 2015</p>
        </div>
        
        <!-- Kartu 8: SP -->
        <div class="feature-card bg-card-light dark:bg-card-dark rounded-xl border border-border-light dark:border-border-dark p-6">
            <div class="w-14 h-14 bg-primary/10 dark:bg-primary/20 rounded-lg flex items-center justify-center mb-4">
                <i class="fas fa-bolt text-primary text-xl"></i>
            </div>
            <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white">Pembukaan Jurusan SP</h3>
            <p class="text-gray-600 dark:text-gray-300 text-sm">Dibuka pada 17 Oktober 2017</p>
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