<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Organisasi - SMK Negeri 1 Kawali</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>

    <!-- Fonts & Icons -->
    <!-- Menggunakan font 'Plus Jakarta Sans' untuk tampilan yang lebih modern dan geometris -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />

    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        // Palet warna yang lebih segar dan modern (Modern Blue & Slate)
                        primary: "#4f46e5", // Indigo-600
                        "primary-light": "#e0e7ff",
                        "primary-dark": "#3730a3",
                        
                        "background-light": "#f8fafc", // Slate-50
                        "background-dark": "#020617", // Slate-950
                        
                        "card-light": "#ffffff",
                        "card-dark": "#0f172a", // Slate-900
                        
                        "border-light": "#e2e8f0", // Slate-200
                        "border-dark": "#1e293b", // Slate-800
                    },
                    fontFamily: {
                        body: ["'Plus Jakarta Sans'", "sans-serif"],
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.6s ease-out',
                        'float': 'float 3s ease-in-out infinite',
                        'zoom-in': 'zoomIn 0.3s ease-out',
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-10px)' },
                        },
                        zoomIn: {
                            '0%': { opacity: '0', transform: 'scale(0.9)' },
                            '100%': { opacity: '1', transform: 'scale(1)' },
                        },
                        blob: {
                            '0%': { transform: 'translate(0px, 0px) scale(1)' },
                            '33%': { transform: 'translate(30px, -50px) scale(1.1)' },
                            '66%': { transform: 'translate(-20px, 20px) scale(0.9)' },
                            '100%': { transform: 'translate(0px, 0px) scale(1)' },
                        }
                    }
                },
            },
        };
    </script>
    <style>
        /* Modern Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: transparent;
        }
        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }
        .dark ::-webkit-scrollbar-thumb {
            background: #334155;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }

        /* Header Pattern Subtle */
        .header-pattern {
            background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.15) 1px, transparent 0);
            background-size: 40px 40px;
        }

        /* Glassmorphism Card Effect */
        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.5);
        }
        .dark .glass-card {
            background: rgba(30, 41, 59, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        /* Modern Card Hover */
        .org-card {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .org-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px -5px rgba(79, 70, 229, 0.15); /* Colored shadow */
        }
        .dark .org-card:hover {
            box-shadow: 0 20px 40px -5px rgba(0, 0, 0, 0.4);
        }

        /* Profile Hover */
        .profile-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        .profile-card:hover {
            transform: translateY(-5px);
        }
        .profile-card:hover .profile-overlay {
            opacity: 1;
        }
        .profile-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(37, 99, 235, 0.1) 0%, rgba(37, 99, 235, 0) 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .profile-card:hover::before {
            opacity: 1;
        }

        /* Organization section separator */
        .section-separator {
            position: relative;
            height: 2px;
            background: linear-gradient(90deg, transparent, #e5e7eb, transparent);
            margin: 4rem 0;
        }
        .dark .section-separator {
            background: linear-gradient(90deg, transparent, #374151, transparent);
        }

        /* Organization badge */
        .org-badge {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 0.5rem 1.5rem;
            background-color: #2563eb;
            color: white;
            border-radius: 9999px;
            font-weight: 600;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        /* Connection lines for structure */
        .structure-connection {
            position: relative;
        }
        .structure-connection::after {
            content: '';
            position: absolute;
            bottom: -2rem;
            left: 50%;
            width: 2px;
            height: 2rem;
            background-color: #e5e7eb;
            z-index: 0;
        }
        .dark .structure-connection::after {
            background-color: #374151;
        }

        /* Gradient Text Utility */
        .text-gradient {
            background: linear-gradient(to right, #4f46e5, #8b5cf6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-slate-600 dark:text-slate-300 font-body transition-colors duration-500 selection:bg-primary selection:text-white">

    @include('layouts.navbar')

    <!-- HEADER SECTION -->
    <!-- Menggunakan gradient yang lebih dalam dan modern -->
    <div class="relative bg-gradient-to-r from-primary to-primary-dark dark:from-slate-900 dark:to-slate-800 overflow-hidden">
        <!-- Background Decorations -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-30 pointer-events-none">
            <div class="absolute top-0 left-1/4 w-96 h-96 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
            <div class="absolute top-0 right-1/4 w-96 h-96 bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000"></div>
        </div>
        
        <div class="absolute inset-0 header-pattern"></div>
        
        <div class="relative container mx-auto px-4 py-24 md:py-32 text-center">
            <span class="inline-block py-1 px-3 rounded-full bg-white/20 text-white text-sm font-medium mb-4 backdrop-blur-sm border border-white/10 animate-fade-in">
                <i class="fa-solid fa-users mr-2"></i>Student Organization
            </span>
            <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6 tracking-tight animate-fade-in" style="animation-delay: 0.1s">
                Organisasi <span class="text-indigo-200">Siswa</span>
            </h1>
            <p class="text-lg md:text-xl text-indigo-100 max-w-2xl mx-auto font-light animate-fade-in" style="animation-delay: 0.2s">
                Wadah aspirasi dan kreativitas siswa SMK Negeri 1 Kawali untuk membangun karakter dan prestasi.
            </p>
        </div>
        
        <!-- Wave Separator -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg class="fill-current text-background-light dark:text-background-dark h-16 w-full" viewBox="0 0 1440 320" xmlns="http://www.w3.org/2000/svg">
                <path fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,112C672,96,768,96,864,112C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div>
    </div>

    <!-- CONTENT -->
    <main class="container mx-auto px-4 py-12 lg:py-16 min-h-screen">

        <!-- ================= MPK ================= -->
        <section class="space-y-16 animate-fade-in" style="animation-delay: 0.3s">

            <!-- DESKRIPSI -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 items-center">
                <div class="flex justify-center">
                    <div class="w-64 h-64 bg-card-light dark:bg-card-dark rounded-2xl border border-border-light dark:border-border-dark flex items-center justify-center org-card relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-primary/20 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="relative z-10 text-center">
                            <i class="fas fa-users text-4xl text-primary mb-2"></i>
                            <span class="text-gray-600 dark:text-gray-300 font-semibold">MPK</span>
                        </div>
                    </div>
                </div>
                <div class="md:col-span-2">
                    <h2 class="text-3xl font-bold mb-4 text-gray-900 dark:text-white">Majelis Perwakilan Kelas (MPK)</h2>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        Majelis Perwakilan Kelas (MPK) bertugas mengawasi kinerja OSIS serta menampung aspirasi siswa. Sebagai wadah demokrasi di sekolah, MPK memastikan suara setiap siswa didengar dan diwakili dalam pengambilan keputusan.
                    </p>
                </div>
            </div>

            <!-- VISI MISI -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="org-card bg-card-light dark:bg-card-dark rounded-2xl border border-border-light dark:border-border-dark p-8 text-center">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-primary/10 dark:bg-primary/20 flex items-center justify-center animate-pulse-slow">
                        <i class="fas fa-eye text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-900 dark:text-white">Visi</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Menjadikan MPK sebagai organisasi yang aspiratif dan bertanggung jawab dalam menampung dan menyalurkan aspirasi siswa.
                    </p>
                </div>
                <div class="org-card bg-card-light dark:bg-card-dark rounded-2xl border border-border-light dark:border-border-dark p-8 text-center">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-primary/10 dark:bg-primary/20 flex items-center justify-center animate-pulse-slow">
                        <i class="fas fa-rocket text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-900 dark:text-white">Misi</h3>
                    <ul class="text-gray-600 dark:text-gray-300 space-y-2">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-primary mt-1 mr-2"></i>
                            <span>Mengawasi kinerja OSIS</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-primary mt-1 mr-2"></i>
                            <span>Menampung aspirasi siswa</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-primary mt-1 mr-2"></i>
                            <span>Menjadi mediator antara siswa dan pihak sekolah</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- STRUKTUR -->
            <div class="space-y-8">
                <h3 class="text-3xl font-bold text-center text-gray-900 dark:text-white">Struktur MPK</h3>

                <div class="flex justify-center">
                    <div class="text-center structure-connection">
                        <div class="w-40 h-40 rounded-full bg-card-light dark:bg-card-dark border-4 border-primary/20 dark:border-primary/30 flex items-center justify-center mb-4 profile-card">
                            <div class="text-center">
                                <i class="fas fa-user-tie text-3xl text-primary mb-2"></i>
                                <span class="text-sm text-gray-500 dark:text-gray-400">Foto</span>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-slate-900 dark:text-white">Visi</h3>
                        <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                            Mewujudkan OSIS yang progresif, inovatif, dan berjiwa kepemimpinan serta mampu menjunjung tinggi nama baik sekolah.
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 justify-items-center">
                    @foreach(['Ketua','Wakil','Sekretaris 1','Sekretaris 2','Bendahara'] as $jabatan)
                    <div class="text-center animate-fade-in" style="animation-delay: {{ $loop->iteration * 0.1 + 0.7 }}s">
                        <div class="w-32 h-32 rounded-full bg-card-light dark:bg-card-dark border border-border-light dark:border-border-dark flex items-center justify-center mb-3 profile-card">
                            <div class="text-center">
                                <i class="fas fa-user text-2xl text-gray-400 mb-1"></i>
                                <span class="text-xs text-gray-400">Foto</span>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-slate-900 dark:text-white">Misi</h3>
                        <ul class="text-slate-600 dark:text-slate-400 space-y-3">
                            <li class="flex items-center gap-3"><i class="fas fa-check-circle text-emerald-500"></i> Meningkatkan keimanan dan ketaqwaan</li>
                            <li class="flex items-center gap-3"><i class="fas fa-check-circle text-emerald-500"></i> Mengembangkan potensi akademik & non-akademik</li>
                        </ul>
                    </div>
                    @endforeach
                </div>
            </div>

        </section>

        <!-- SECTION SEPARATOR -->
        <div class="section-separator">
            <div class="org-badge">ORGANISASI</div>
        </div>

        <!-- ================= OSIS ================= -->
        <section class="space-y-16 animate-fade-in" style="animation-delay: 0.8s">

            <!-- DESKRIPSI -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 items-center">
                <div class="flex justify-center order-2 md:order-1">
                    <div class="w-64 h-64 bg-card-light dark:bg-card-dark rounded-2xl border border-border-light dark:border-border-dark flex items-center justify-center org-card relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-primary/20 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="relative z-10 text-center">
                            <i class="fas fa-graduation-cap text-4xl text-primary mb-2"></i>
                            <span class="text-gray-600 dark:text-gray-300 font-semibold">OSIS</span>
                        </div>
                    </div>
                </div>
                <div class="md:col-span-2 order-1 md:order-2">
                    <h2 class="text-3xl font-bold mb-4 text-gray-900 dark:text-white">Organisasi Siswa Intra Sekolah (OSIS)</h2>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        Organisasi Siswa Intra Sekolah (OSIS) sebagai wadah kegiatan dan pengembangan siswa. OSIS bertanggung jawab atas berbagai kegiatan ekstrakurikuler, pengembangan minat dan bakat siswa, serta menjadi perwakilan siswa dalam berbagai acara sekolah.
                    </p>
                </div>
            </div>

            <!-- VISI MISI -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="org-card bg-card-light dark:bg-card-dark rounded-2xl border border-border-light dark:border-border-dark p-8 text-center">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-primary/10 dark:bg-primary/20 flex items-center justify-center animate-pulse-slow">
                        <i class="fas fa-eye text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-900 dark:text-white">Visi</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Mewujudkan siswa berkarakter, berprestasi, dan berwawasan global melalui berbagai kegiatan positif.
                    </p>
                </div>
                <div class="org-card bg-card-light dark:bg-card-dark rounded-2xl border border-border-light dark:border-border-dark p-8 text-center">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-primary/10 dark:bg-primary/20 flex items-center justify-center animate-pulse-slow">
                        <i class="fas fa-rocket text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-900 dark:text-white">Misi</h3>
                    <ul class="text-gray-600 dark:text-gray-300 space-y-2">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-primary mt-1 mr-2"></i>
                            <span>Meningkatkan keimanan dan ketaqwaan</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-primary mt-1 mr-2"></i>
                            <span>Mengembangkan bakat dan minat siswa</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-primary mt-1 mr-2"></i>
                            <span>Menyelenggarakan kegiatan positif</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- STRUKTUR -->
            <div class="space-y-8">
                <h3 class="text-3xl font-bold text-center text-gray-900 dark:text-white">Struktur OSIS</h3>

                <div class="flex justify-center">
                    <div class="text-center structure-connection">
                        <div class="w-40 h-40 rounded-full bg-card-light dark:bg-card-dark border-4 border-primary/20 dark:border-primary/30 flex items-center justify-center mb-4 profile-card">
                            <div class="text-center">
                                <i class="fas fa-user-tie text-3xl text-primary mb-2"></i>
                                <span class="text-sm text-gray-500 dark:text-gray-400">Foto</span>
                            </div>
                        </div>
                        <h4 class="font-bold text-gray-900 dark:text-white">Nama Pembina</h4>
                        <span class="text-sm text-primary">Pembina OSIS</span>
                    </div>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 justify-items-center">
                    @foreach(['Ketua','Wakil Ketua','Sekretaris 1','Sekretaris 2','Bendahara'] as $jabatan)
                    <div class="text-center animate-fade-in" style="animation-delay: {{ $loop->iteration * 0.1 + 1.1 }}s">
                        <div class="w-32 h-32 rounded-full bg-card-light dark:bg-card-dark border border-border-light dark:border-border-dark flex items-center justify-center mb-3 profile-card">
                            <div class="text-center">
                                <i class="fas fa-user text-2xl text-gray-400 mb-1"></i>
                                <span class="text-xs text-gray-400">Foto</span>
                            </div>
                        </div>
                        <div class="font-semibold text-sm text-gray-900 dark:text-white">{{ $jabatan }}</div>
                        <div class="text-xs text-gray-500 dark:text-gray-400">Nama Siswa</div>
                    </div>
                    @endforeach
                </div>

                <!-- Sekbid Section -->
                <div class="mt-12">
                    <h4 class="text-2xl font-bold text-center text-gray-900 dark:text-white mb-8">Seksi Bidang (Sekbid)</h4>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                        @foreach([
                            ['Sekbid 1', 'Kepercayaan Ketuhanan'],
                            ['Sekbid 2', 'Pendidikan Politik'],
                            ['Sekbid 3', 'Pendidikan Pengetahuan'],
                            ['Sekbid 4', 'Pendidikan Keterampilan'],
                            ['Sekbid 5', 'Olahraga'],
                            ['Sekbid 6', 'Kesenian'],
                            ['Sekbid 7', 'Kepribadian'],
                            ['Sekbid 8', 'Sosial']
                        ] as $sekbid)
                        <div class="text-center animate-fade-in" style="animation-delay: {{ $loop->iteration * 0.05 + 1.6 }}s">
                            <div class="h-24 rounded-xl bg-card-light dark:bg-card-dark border border-border-light dark:border-border-dark flex items-center justify-center mb-3 profile-card">
                                <div class="text-center px-2">
                                    <i class="fas fa-users text-xl text-primary mb-1"></i>
                                    <div class="text-xs font-semibold text-gray-700 dark:text-gray-300">{{ $sekbid[0] }}</div>
                                </div>
                            </div>
                            <div class="text-xs text-gray-500 dark:text-gray-400">{{ $sekbid[1] }}</div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </section>

    </main>

    @include('layouts.footer')

    <!-- DARK MODE BUTTON -->
    <!-- Tampilan tombol lebih modern dengan pill shape -->
    <button
        id="darkToggle"
        class="fixed bottom-8 right-8 bg-slate-900 dark:bg-white text-white dark:text-slate-900 p-4 rounded-full shadow-2xl z-50 transition-all duration-300 hover:scale-110 flex items-center justify-center border border-slate-200 dark:border-slate-900 group">
        <i class="fa-solid fa-moon text-lg dark:hidden"></i>
        <i class="fa-solid fa-sun text-lg hidden dark:block animate-spin-slow"></i>
        <span class="absolute right-full mr-4 px-3 py-1 bg-slate-800 text-white text-xs rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap pointer-events-none">Ganti Tema</span>
    </button>

    <script>
        // Logic tetap sama 100%
        const toggle = document.getElementById('darkToggle');
        const html = document.documentElement;

        if (localStorage.getItem('theme') === 'dark') {
            html.classList.add('dark');
        }

        toggle.addEventListener('click', () => {
            html.classList.toggle('dark');
            localStorage.setItem('theme',
                html.classList.contains('dark') ? 'dark' : 'light'
            );
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe all elements with animation
        document.querySelectorAll('.animate-fade-in').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
            observer.observe(el);
        });
    </script>

</body>
</html>