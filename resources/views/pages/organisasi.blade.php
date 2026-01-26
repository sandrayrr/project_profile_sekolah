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
                        'fade-in': 'fadeIn 0.8s cubic-bezier(0.4, 0, 0.2, 1)',
                        'float': 'float 6s ease-in-out infinite',
                        'zoom-in': 'zoomIn 0.5s cubic-bezier(0.4, 0, 0.2, 1)',
                        'blob': 'blob 7s infinite',
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
            transition: all 0.3s ease;
        }
        .profile-card:hover {
            transform: translateY(-5px);
        }
        .profile-card:hover .profile-overlay {
            opacity: 1;
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
    <main class="container mx-auto px-4 py-12 lg:py-20 space-y-32">

        <!-- ================= MPK SECTION ================= -->
        <section class="space-y-16 relative">
            <div class="absolute -top-20 -left-20 w-64 h-64 bg-blue-400/10 rounded-full blur-3xl -z-10"></div>

            <!-- DESKRIPSI & LOGO -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center animate-fade-in" style="animation-delay: 0.3s">
                <!-- Logo Placeholder dengan styling modern -->
                <div class="flex justify-center order-1 lg:order-2">
                    <div class="relative w-72 h-72 group">
                        <div class="absolute inset-0 bg-gradient-to-tr from-primary to-purple-500 rounded-full blur opacity-20 group-hover:opacity-40 transition-opacity duration-500"></div>
                        <div class="relative w-full h-full bg-card-light dark:bg-card-dark rounded-3xl border border-border-light dark:border-border-dark shadow-2xl org-card flex items-center justify-center overflow-hidden glass-card">
                            <div class="text-center">
                                <div class="w-20 h-20 mx-auto bg-primary/10 rounded-2xl flex items-center justify-center mb-4 text-primary">
                                    <i class="fa-solid fa-landmark text-4xl"></i>
                                </div>
                                <span class="text-gray-400 dark:text-gray-500 font-bold tracking-widest uppercase text-sm">Logo MPK</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="order-2 lg:order-1 space-y-6">
                    <div>
                        <span class="text-primary font-bold tracking-wider uppercase text-sm">Majelis Perwakilan Kelas</span>
                        <h2 class="text-4xl md:text-5xl font-extrabold mt-2 text-slate-900 dark:text-white">MPK</h2>
                        <div class="h-1.5 w-20 bg-gradient-to-r from-primary to-purple-500 rounded-full mt-4"></div>
                    </div>
                    <p class="text-lg leading-relaxed text-slate-600 dark:text-slate-400">
                        Lembaga legislatif di tingkat sekolah yang bertugas mengawasi kinerja OSIS serta menampung dan menindaklanjuti aspirasi seluruh siswa demi terciptanya lingkungan sekolah yang demokratis.
                    </p>
                    <div class="flex gap-4">
                        <button class="px-6 py-3 bg-primary hover:bg-primary-dark text-white rounded-xl font-medium transition-all shadow-lg shadow-blue-500/25 hover:shadow-blue-500/40">
                            Selengkapnya
                        </button>
                        <button class="px-6 py-3 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-700 text-slate-700 dark:text-slate-200 rounded-xl font-medium transition-all">
                            Program Kerja
                        </button>
                    </div>
                </div>
            </div>

            <!-- VISI MISI CARDS -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <!-- Visi -->
                <div class="glass-card rounded-3xl p-8 md:p-10 relative overflow-hidden group animate-fade-in" style="animation-delay: 0.4s">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-primary/5 rounded-bl-full transition-transform group-hover:scale-110"></div>
                    <div class="relative z-10">
                        <div class="w-14 h-14 mb-6 rounded-2xl bg-gradient-to-br from-primary/20 to-primary/5 flex items-center justify-center text-primary">
                            <i class="fas fa-eye text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-slate-900 dark:text-white">Visi</h3>
                        <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                            Menjadikan MPK SMK Negeri 1 Kawali sebagai organisasi yang aspiratif, transparan, dan bertanggung jawab dalam menjembatani komunikasi antara siswa dan sekolah.
                        </p>
                    </div>
                </div>
                <!-- Misi -->
                <div class="glass-card rounded-3xl p-8 md:p-10 relative overflow-hidden group animate-fade-in" style="animation-delay: 0.5s">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-purple-500/5 rounded-bl-full transition-transform group-hover:scale-110"></div>
                    <div class="relative z-10">
                        <div class="w-14 h-14 mb-6 rounded-2xl bg-gradient-to-br from-purple-500/20 to-purple-500/5 flex items-center justify-center text-purple-500">
                            <i class="fas fa-rocket text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-slate-900 dark:text-white">Misi</h3>
                        <ul class="text-slate-600 dark:text-slate-400 space-y-3">
                            <li class="flex items-center gap-3"><i class="fas fa-check-circle text-green-500"></i> Mengawasi kinerja OSIS secara objektif</li>
                            <li class="flex items-center gap-3"><i class="fas fa-check-circle text-green-500"></i> Menampung aspirasi siswa melalui formulir resmi</li>
                            <li class="flex items-center gap-3"><i class="fas fa-check-circle text-green-500"></i> Membangun sinergi dengan organisasi lain</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- STRUKTUR ORGANISASI -->
            <div class="space-y-12 pt-8 animate-fade-in" style="animation-delay: 0.6s">
                <div class="text-center space-y-4">
                    <h3 class="text-3xl md:text-4xl font-bold text-slate-900 dark:text-white">Struktur Organisasi</h3>
                    <div class="w-24 h-1 bg-slate-200 dark:bg-slate-700 mx-auto rounded-full"></div>
                </div>

                <!-- Pembina -->
                <div class="flex justify-center pt-4">
                    <div class="text-center relative">
                        <!-- Connector Line -->
                        <div class="absolute -bottom-12 left-1/2 transform -translate-x-1/2 w-0.5 h-12 bg-slate-300 dark:bg-slate-700"></div>
                        
                        <div class="w-48 h-48 mx-auto relative profile-card group cursor-pointer">
                            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-slate-900/50 rounded-full opacity-0 group-hover:opacity-100 transition-opacity z-10"></div>
                            <div class="w-full h-full rounded-full border-4 border-white dark:border-slate-700 shadow-xl overflow-hidden bg-slate-200 dark:bg-slate-800 flex items-center justify-center">
                                <span class="text-slate-400 font-medium">Foto Pembina</span>
                            </div>
                        </div>
                        <div class="mt-6 bg-white dark:bg-slate-800 px-6 py-3 rounded-2xl shadow-lg inline-block border border-slate-100 dark:border-slate-700">
                            <h4 class="font-bold text-slate-900 dark:text-white text-lg">Nama Pembina</h4>
                            <span class="text-sm text-primary font-medium">Pembina MPK</span>
                        </div>
                    </div>
                </div>

                <!-- Grid Anggota -->
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 md:gap-8 justify-items-center pt-16">
                    @foreach(['Ketua','Wakil','Sekretaris 1','Sekretaris 2','Bendahara'] as $jabatan)
                    <div class="text-center animate-fade-in group w-full" style="animation-delay: {{ $loop->iteration * 0.1 + 0.7 }}s">
                        <div class="relative w-32 h-32 md:w-36 md:h-36 mx-auto mb-4 profile-card">
                            <!-- Garis konektor kecil (hanya visual) -->
                            <div class="absolute -top-4 left-1/2 w-0.5 h-4 bg-slate-300 dark:bg-slate-700 transform -translate-x-1/2"></div>
                            
                            <div class="w-full h-full rounded-full bg-white dark:bg-slate-800 p-1 shadow-lg border border-slate-100 dark:border-slate-700">
                                <div class="w-full h-full rounded-full bg-slate-100 dark:bg-slate-700 flex items-center justify-center overflow-hidden">
                                    <i class="fas fa-user text-slate-400 text-2xl"></i>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white/50 dark:bg-slate-800/50 backdrop-blur-sm px-4 py-2 rounded-xl border border-slate-200 dark:border-slate-700">
                            <div class="font-bold text-slate-800 dark:text-slate-100 text-sm truncate">{{ $jabatan }}</div>
                            <div class="text-xs text-slate-500 dark:text-slate-400 mt-1">Nama Siswa</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Divider -->
        <div class="h-px bg-gradient-to-r from-transparent via-slate-300 dark:via-slate-700 to-transparent w-full"></div>

        <!-- ================= OSIS SECTION ================= -->
        <section class="space-y-16">
            <!-- DESKRIPSI -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center animate-fade-in" style="animation-delay: 0.8s">
                <div class="flex justify-center">
                    <div class="relative w-72 h-72 group">
                        <div class="absolute inset-0 bg-gradient-to-tr from-emerald-500 to-teal-400 rounded-full blur opacity-20 group-hover:opacity-40 transition-opacity duration-500"></div>
                        <div class="relative w-full h-full bg-card-light dark:bg-card-dark rounded-3xl border border-border-light dark:border-border-dark shadow-2xl org-card flex items-center justify-center overflow-hidden glass-card">
                            <div class="text-center">
                                <div class="w-20 h-20 mx-auto bg-emerald-500/10 rounded-2xl flex items-center justify-center mb-4 text-emerald-500">
                                    <i class="fa-solid fa-hand-holding-heart text-4xl"></i>
                                </div>
                                <span class="text-gray-400 dark:text-gray-500 font-bold tracking-widest uppercase text-sm">Logo OSIS</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space-y-6">
                    <div>
                        <span class="text-emerald-500 font-bold tracking-wider uppercase text-sm">Organisasi Siswa Intra Sekolah</span>
                        <h2 class="text-4xl md:text-5xl font-extrabold mt-2 text-slate-900 dark:text-white">OSIS</h2>
                        <div class="h-1.5 w-20 bg-gradient-to-r from-emerald-500 to-teal-400 rounded-full mt-4"></div>
                    </div>
                    <p class="text-lg leading-relaxed text-slate-600 dark:text-slate-400">
                        Eksekutif tertinggi di tingkat sekolah yang berperan sebagai motor penggerak kegiatan siswa, pengembangan minat bakat, serta pembentuk karakter kepemimpinan.
                    </p>
                </div>
            </div>

            <!-- VISI MISI -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <div class="glass-card rounded-3xl p-8 md:p-10 relative overflow-hidden group animate-fade-in" style="animation-delay: 0.9s">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-emerald-500/5 rounded-bl-full transition-transform group-hover:scale-110"></div>
                    <div class="relative z-10">
                        <div class="w-14 h-14 mb-6 rounded-2xl bg-gradient-to-br from-emerald-500/20 to-emerald-500/5 flex items-center justify-center text-emerald-500">
                            <i class="fas fa-eye text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-slate-900 dark:text-white">Visi</h3>
                        <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                            Mewujudkan OSIS yang progresif, inovatif, dan berjiwa kepemimpinan serta mampu menjunjung tinggi nama baik sekolah.
                        </p>
                    </div>
                </div>
                <div class="glass-card rounded-3xl p-8 md:p-10 relative overflow-hidden group animate-fade-in" style="animation-delay: 1.0s">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-teal-500/5 rounded-bl-full transition-transform group-hover:scale-110"></div>
                    <div class="relative z-10">
                        <div class="w-14 h-14 mb-6 rounded-2xl bg-gradient-to-br from-teal-500/20 to-teal-500/5 flex items-center justify-center text-teal-500">
                            <i class="fas fa-rocket text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-slate-900 dark:text-white">Misi</h3>
                        <ul class="text-slate-600 dark:text-slate-400 space-y-3">
                            <li class="flex items-center gap-3"><i class="fas fa-check-circle text-emerald-500"></i> Meningkatkan keimanan dan ketaqwaan</li>
                            <li class="flex items-center gap-3"><i class="fas fa-check-circle text-emerald-500"></i> Mengembangkan potensi akademik & non-akademik</li>
                        </ul>
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
    </script>

</body>
</html>