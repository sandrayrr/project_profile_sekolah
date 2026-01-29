<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Organisasi - SMK Negeri 1 Kawali</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <!-- AOS Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />

    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#4f46e5", "primary-light": "#e0e7ff", "primary-dark": "#3730a3",
                        secondary: "#10b981", "secondary-light": "#d1fae5", "secondary-dark": "#047857",
                        "background-light": "#f8fafc", "background-dark": "#020617",
                        "card-light": "#ffffff", "card-dark": "#0f172a",
                        "border-light": "#e2e8f0", "border-dark": "#1e293b",
                    },
                    fontFamily: { body: ["'Plus Jakarta Sans'", "sans-serif"] },
                    animation: {
                        'fade-in': 'fadeIn 0.6s ease-out',
                        'float': 'float 3s ease-in-out infinite',
                        'zoom-in': 'zoomIn 0.3s ease-out',
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    },
                    keyframes: {
                        fadeIn: { '0%': { opacity: '0', transform: 'translateY(20px)' }, '100%': { opacity: '1', transform: 'translateY(0)' } },
                        float: { '0%, 100%': { transform: 'translateY(0px)' }, '50%': { transform: 'translateY(-10px)' } },
                        zoomIn: { '0%': { opacity: '0', transform: 'scale(0.9)' }, '100%': { opacity: '1', transform: 'scale(1)' } },
                        blob: { '0%': { transform: 'translate(0px, 0px) scale(1)' }, '33%': { transform: 'translate(30px, -50px) scale(1.1)' }, '66%': { transform: 'translate(-20px, 20px) scale(0.9)' }, '100%': { transform: 'translate(0px, 0px) scale(1)' } }
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
            background-image: radial-gradient(circle at 1px 1px, rgba(255, 255, 255, 0.15) 1px, transparent 0);
            background-size: 40px 40px;
        }

        /* Glassmorphism Card Effect */
        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
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
            box-shadow: 0 20px 40px -5px rgba(79, 70, 229, 0.25);
        }

        .dark .org-card:hover {
            box-shadow: 0 20px 40px -5px rgba(0, 0, 0, 0.4);
        }

        /* Program Card Hover */
        .program-card {
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .program-card:hover {
            border-color: var(--primary);
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.9);
        }

        .dark .program-card:hover {
            background: rgba(15, 23, 42, 0.9);
        }

        /* Profile Card Hover */
        .profile-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .profile-card:hover {
            transform: scale(1.05);
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

        .profile-overlay {
            transition: opacity 0.3s ease;
        }

        /* Gradient Text Utility */
        .text-gradient {
            background: linear-gradient(to right, #4f46e5, #8b5cf6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .text-gradient-secondary {
            background: linear-gradient(to right, #10b981, #34d399);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Org Chart Lines */
        .org-chart .line-down::after {
            content: '';
            position: absolute;
            top: 100%;
            left: 50%;
            width: 2px;
            height: 40px;
            background: #cbd5e1;
            transform: translateX(-50%);
        }

        .dark .org-chart .line-down::after {
            background: #475569;
        }

        .org-chart .line-across::before {
            content: '';
            position: absolute;
            top: -40px;
            left: -50%;
            width: 100%;
            height: 2px;
            background: #cbd5e1;
        }

        .dark .org-chart .line-across::before {
            background: #475569;
        }

        .org-chart .line-across:first-child::before {
            display: none;
        }

        /* --- Gaya Galeri Dokumentasi --- */
        .doc-gallery img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 12px;
            transition: transform 0.3s ease, filter 0.3s ease;
            cursor: pointer;
        }

        .doc-gallery img:hover {
            transform: scale(1.05);
            filter: brightness(0.9);
        }

        /* --- Gaya Lightbox --- */
        .lightbox {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.85);
            justify-content: center;
            align-items: center;
            animation: fadeIn 0.3s;
        }

        .lightbox-content {
            max-width: 90%;
            max-height: 90%;
            border-radius: 12px;
            box-shadow: 0 10px 50px rgba(0, 0, 0, 0.5);
            animation: zoomIn 0.3s;
        }

        .lightbox-close {
            position: absolute;
            top: 20px;
            right: 40px;
            color: white;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
            transition: color 0.3s;
        }

        .lightbox-close:hover {
            color: #ccc;
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-slate-600 dark:text-slate-300 font-body transition-colors duration-500 selection:bg-primary selection:text-white">

    <!-- NAVBAR -->
  @include('layouts.navbar')
    <!-- HEADER SECTION -->
    <div
        class="relative bg-gradient-to-br from-primary via-primary-dark to-slate-900 dark:from-slate-900 dark:via-slate-800 dark:to-slate-900 overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-30 pointer-events-none">
            <div
                class="absolute top-0 left-1/4 w-96 h-96 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob">
            </div>
            <div
                class="absolute top-0 right-1/4 w-96 h-96 bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000">
            </div>
        </div>
        <div class="absolute inset-0 header-pattern"></div>
        <div class="relative container mx-auto px-4 py-24 md:py-32 text-center">
            <span
                class="inline-block py-1 px-3 rounded-full bg-white/20 text-white text-sm font-medium mb-4 backdrop-blur-sm border border-white/10"
                data-aos="fade-down">
                <i class="fa-solid fa-users mr-2"></i>Student Organization
            </span>
            <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6 tracking-tight" data-aos="fade-up"
                data-aos-delay="100">
                Organisasi <span class="text-indigo-200">Siswa</span>
            </h1>
            <p class="text-lg md:text-xl text-indigo-100 max-w-2xl mx-auto font-light" data-aos="fade-up"
                data-aos-delay="200">
                Wadah aspirasi dan kreativitas siswa SMK Negeri 1 Kawali untuk membangun karakter dan prestasi.
            </p>
        </div>
        <div class="absolute bottom-0 left-0 right-0">
            <svg class="fill-current text-background-light dark:text-background-dark h-16 w-full" viewBox="0 0 1440 320"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-opacity="1"
                    d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,112C672,96,768,96,864,112C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg>
        </div>
    </div>

    <!-- CONTENT -->
    <main class="container mx-auto px-4 py-12 lg:py-16 min-h-screen">

        <!-- ================= MPK ================= -->
        <section class="space-y-16 animate-fade-in" style="animation-delay: 0.3s">

<<<<<<< HEAD
            <!-- DESKRIPSI & LOGO -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-6" data-aos="fade-right">
                    <div>
                        <span class="text-primary font-bold tracking-wider uppercase text-sm">Majelis Perwakilan
                            Kelas</span>
                        <h2 class="text-4xl md:text-5xl font-extrabold mt-2 text-slate-900 dark:text-white">MPK</h2>
                        <div class="h-1.5 w-20 bg-gradient-to-r from-primary to-purple-500 rounded-full mt-4"></div>
                    </div>
                    <p class="text-lg leading-relaxed text-slate-600 dark:text-slate-400">
                        Lembaga legislatif di tingkat sekolah yang bertugas mengawasi kinerja OSIS serta menampung dan
                        menindaklanjuti aspirasi seluruh siswa demi terciptanya lingkungan sekolah yang demokratis.
                    </p>
                    <div class="flex gap-4">
                        <button
                            class="px-6 py-3 bg-primary hover:bg-primary-dark text-white rounded-xl font-medium transition-all shadow-lg shadow-blue-500/25 hover:shadow-blue-500/40">Selengkapnya</button>
                        <button
                            class="px-6 py-3 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-700 text-slate-700 dark:text-slate-200 rounded-xl font-medium transition-all">Program
                            Kerja</button>
                    </div>
                </div>
                <div class="flex justify-center" data-aos="fade-left">
                    <div class="relative w-72 h-72 group">
                        <div
                            class="absolute inset-0 bg-gradient-to-tr from-primary to-purple-500 rounded-full blur opacity-20 group-hover:opacity-40 transition-opacity duration-500">
                        </div>
                        <div
                            class="relative w-full h-full bg-card-light dark:bg-card-dark rounded-3xl border border-border-light dark:border-border-dark shadow-2xl org-card flex items-center justify-center overflow-hidden glass-card">
                            <div class="text-center">
                                <div
                                    class="w-20 h-20 mx-auto bg-primary/10 rounded-2xl flex items-center justify-center mb-4 text-primary">
                                    <i class="fa-solid fa-landmark text-4xl"></i>
                                </div>
                                <span
                                    class="text-gray-400 dark:text-gray-500 font-bold tracking-widest uppercase text-sm">Logo
                                    MPK</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- VISI MISI CARDS -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <div class="glass-card rounded-3xl p-8 md:p-10 relative overflow-hidden group" data-aos="zoom-in"
                    data-aos-delay="100">
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-primary/5 rounded-bl-full transition-transform group-hover:scale-110">
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-14 h-14 mb-6 rounded-2xl bg-gradient-to-br from-primary/20 to-primary/5 flex items-center justify-center text-primary">
                            <i class="fas fa-eye text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-slate-900 dark:text-white">Visi</h3>
                        <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                            Mewujudkan MPK yang aktif, aspiratif, dan bertanggung jawab dalam menjembatani suara siswa demi terciptanya lingkungan sekolah yang harmonis, demokratis, dan berprestasi.
                        </p>
                    </div>
                </div>
                <div class="glass-card rounded-3xl p-8 md:p-10 relative overflow-hidden group" data-aos="zoom-in"
                    data-aos-delay="200">
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-purple-500/5 rounded-bl-full transition-transform group-hover:scale-110">
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-14 h-14 mb-6 rounded-2xl bg-gradient-to-br from-purple-500/20 to-purple-500/5 flex items-center justify-center text-purple-500">
                            <i class="fas fa-rocket text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-slate-900 dark:text-white">Misi</h3>
                        <ul class="text-slate-600 dark:text-slate-400 space-y-3">
                            <li class="flex items-start gap-3"><i class="fas fa-check-circle text-green-500 mt-1"></i>
                                <span>1. Mendorong siswa untuk aktif dalam kegiatan akademik maupun non-akademik, demi peningkatan prestasi dan citra sekolah.</span></li>
                            <li class="flex items-start gap-3"><i class="fas fa-check-circle text-green-500 mt-1"></i>
                                <span>2. Menumbuhkan semangat partisipatif dan kepedulian siswa terhadap kegiatan sekolah melalui diskusi terbuka dan musyawarah kelas.</span></li>
                            <li class="flex items-start gap-3"><i class="fas fa-check-circle text-green-500 mt-1"></i>
                                <span>3. Menjalin hubungan yang harmonis antara MPK, OSIS, guru, dan seluruh warga sekolah melalui komunikasi yang efektif dan etis.</span></li>
                            <li class="flex items-start gap-3"><i class="fas fa-check-circle text-green-500 mt-1"></i>
                                <span>4. Mengembangkan sikap kepemimpinan, tanggung jawab, dan kedisiplinan anggota MPK sebagai teladan bagi seluruh siswa SMK Negeri 1 Kawali.</span></li>
                        </ul>
                    </div>
                </div>
            </div>


            <!-- STRUKTUR ORGANISASI MPK -->
            <div class="space-y-12 pt-8">
                <div class="text-center space-y-4" data-aos="fade-up">
                    <h3 class="text-3xl md:text-4xl font-bold text-slate-900 dark:text-white">Struktur Organisasi MPK
                    </h3>
                    <div class="w-24 h-1 bg-slate-200 dark:bg-slate-700 mx-auto rounded-full"></div>
                </div>
                <div class="org-chart flex flex-col items-center space-y-8" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-center relative line-down">
                        <div class="w-40 h-40 mx-auto relative profile-card group cursor-pointer">
                            <div
                                class="profile-overlay absolute inset-0 bg-black/50 rounded-full opacity-0 flex items-center justify-center z-10">
                                <i class="fas fa-search-plus text-white text-2xl"></i></div>
                            <img src="https://i.pravatar.cc/150?img=32" alt="Pembina"
                                class="w-full h-full rounded-full object-cover border-4 border-white dark:border-slate-700 shadow-xl">
                        </div>
                        <div
                            class="mt-4 bg-white dark:bg-slate-800 px-6 py-3 rounded-2xl shadow-lg inline-block border border-slate-100 dark:border-slate-700">
                            <h4 class="font-bold text-slate-900 dark:text-white">Dede Hernadi M.P.D</h4>
                            <span class="text-sm text-primary font-medium">Pembina MPK</span>
                        </div>
                    </div>
                    <div class="flex flex-wrap justify-center gap-8 w-full max-w-4xl">
                        <div class="text-center relative line-down line-across">
                            <div class="w-32 h-32 mx-auto relative profile-card group">
                                <div
                                    class="profile-overlay absolute inset-0 bg-black/50 rounded-full opacity-0 flex items-center justify-center z-10">
                                </div>
                                <img src="https://i.pravatar.cc/150?img=47" alt="Ketua"
                                    class="w-full h-full rounded-full object-cover border-4 border-white dark:border-slate-700 shadow-lg">
                            </div>
                            <div
                                class="mt-4 bg-white/80 dark:bg-slate-800/80 backdrop-blur-sm px-4 py-2 rounded-xl border border-slate-200 dark:border-slate-700">
                                <div class="font-bold text-slate-800 dark:text-slate-100 text-sm"> Fahri Nururrohman </div>
                                <div class="text-xs text-slate-500 dark:text-slate-400">Ketua</div>
                            </div>
                        </div>
                        <div class="text-center relative line-down line-across">
                            <div class="w-32 h-32 mx-auto relative profile-card group">
                                <div
                                    class="profile-overlay absolute inset-0 bg-black/50 rounded-full opacity-0 flex items-center justify-center z-10">
                                </div>
                                <img src="https://i.pravatar.cc/150?img=53" alt="Wakil"
                                    class="w-full h-full rounded-full object-cover border-4 border-white dark:border-slate-700 shadow-lg">
                            </div>
                            <div
                                class="mt-4 bg-white/80 dark:bg-slate-800/80 backdrop-blur-sm px-4 py-2 rounded-xl border border-slate-200 dark:border-slate-700">
                                <div class="font-bold text-slate-800 dark:text-slate-100 text-sm">Rahma  Zahratunisa </div>
                                <div class="text-xs text-slate-500 dark:text-slate-400">Wakil Ketua</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <!-- ================= DOKUMENTASI MPK (BARU) ================= -->
            <section class="space-y-8" data-aos="fade-up">
                <div class="text-center space-y-4">
                    <h3 class="text-2xl md:text-3xl font-bold text-slate-900 dark:text-white">Dokumentasi Kegiatan MPK
                    </h3>
                    <div class="w-16 h-1 bg-slate-200 dark:bg-slate-700 mx-auto rounded-full"></div>
                </div>
                <div class="doc-gallery grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    <img src="https://source.unsplash.com/random/400x300/?meeting,students,1" alt="Dokumentasi 1">
                    <img src="https://source.unsplash.com/random/400x300/?school,assembly,2" alt="Dokumentasi 2">
                    <img src="https://source.unsplash.com/random/400x300/?presentation,3" alt="Dokumentasi 3">
                    <img src="https://source.unsplash.com/random/400x300/?discussion,4" alt="Dokumentasi 4">
                    <img src="https://source.unsplash.com/random/400x300/?event,5" alt="Dokumentasi 5">
                    <img src="https://source.unsplash.com/random/400x300/?teamwork,6" alt="Dokumentasi 6">
                    <img src="https://source.unsplash.com/random/400x300/?competition,7" alt="Dokumentasi 7">
                    <img src="https://source.unsplash.com/random/400x300/?ceremony,8" alt="Dokumentasi 8">
                </div>
            </section>

        <!-- Divider -->
        <div class="h-px bg-gradient-to-r from-transparent via-slate-300 dark:via-slate-700 to-transparent w-full">
        </div>

        <!-- ================= OSIS SECTION ================= -->
        <section class="space-y-16">
            <!-- DESKRIPSI (LAYOUT DIBALIK) -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="flex justify-center order-1 lg:order-2" data-aos="fade-left">
                    <div class="relative w-72 h-72 group">
                        <div
                            class="absolute inset-0 bg-gradient-to-tr from-secondary to-teal-400 rounded-full blur opacity-20 group-hover:opacity-40 transition-opacity duration-500">
                        </div>
                        <div
                            class="relative w-full h-full bg-card-light dark:bg-card-dark rounded-3xl border border-border-light dark:border-border-dark shadow-2xl org-card flex items-center justify-center overflow-hidden glass-card">
                            <div class="text-center">
                                <div
                                    class="w-20 h-20 mx-auto bg-secondary/10 rounded-2xl flex items-center justify-center mb-4 text-secondary">
                                    <i class="fa-solid fa-hand-holding-heart text-4xl"></i>
                                </div>
                                <span
                                    class="text-gray-400 dark:text-gray-500 font-bold tracking-widest uppercase text-sm">Logo
                                    OSIS</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space-y-6 order-2 lg:order-1" data-aos="fade-right">
                    <div>
                        <span class="text-secondary font-bold tracking-wider uppercase text-sm">Organisasi Siswa Intra
                            Sekolah</span>
                        <h2 class="text-4xl md:text-5xl font-extrabold mt-2 text-slate-900 dark:text-white">OSIS</h2>
                        <div class="h-1.5 w-20 bg-gradient-to-r from-secondary to-teal-400 rounded-full mt-4"></div>
                    </div>
                    <p class="text-lg leading-relaxed text-slate-600 dark:text-slate-400">
                        Eksekutif tertinggi di tingkat sekolah yang berperan sebagai motor penggerak kegiatan siswa,
                        pengembangan minat bakat, serta pembentuk karakter kepemimpinan.
=======
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
<<<<<<< Updated upstream
>>>>>>> 608d2b588692002efdbfa903ec3664426efbdfdf
=======
>>>>>>> Stashed changes
                    </p>
                </div>
            </div>

            <!-- VISI MISI -->
<<<<<<< HEAD
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <div class="glass-card rounded-3xl p-8 md:p-10 relative overflow-hidden group" data-aos="zoom-in"
                    data-aos-delay="100">
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-secondary/5 rounded-bl-full transition-transform group-hover:scale-110">
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-14 h-14 mb-6 rounded-2xl bg-gradient-to-br from-secondary/20 to-secondary/5 flex items-center justify-center text-secondary">
                            <i class="fas fa-eye text-2xl"></i>
=======
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
<<<<<<< Updated upstream
>>>>>>> 608d2b588692002efdbfa903ec3664426efbdfdf
=======
>>>>>>> Stashed changes
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-slate-900 dark:text-white">Visi</h3>
                        <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                            Menjadikan murid SMKN 1 Kawali yang peduli lingkungan, menghargai budaya, kreatif dan berprestasi.
                        </p>
                    </div>
                </div>
<<<<<<< HEAD
                <div class="glass-card rounded-3xl p-8 md:p-10 relative overflow-hidden group" data-aos="zoom-in"
                    data-aos-delay="200">
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-teal-500/5 rounded-bl-full transition-transform group-hover:scale-110">
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-14 h-14 mb-6 rounded-2xl bg-gradient-to-br from-teal-500/20 to-teal-500/5 flex items-center justify-center text-teal-500">
                            <i class="fas fa-rocket text-2xl"></i>
=======

                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 justify-items-center">
                    @foreach(['Ketua','Wakil','Sekretaris 1','Sekretaris 2','Bendahara'] as $jabatan)
                    <div class="text-center animate-fade-in" style="animation-delay: {{ $loop->iteration * 0.1 + 0.7 }}s">
                        <div class="w-32 h-32 rounded-full bg-card-light dark:bg-card-dark border border-border-light dark:border-border-dark flex items-center justify-center mb-3 profile-card">
                            <div class="text-center">
                                <i class="fas fa-user text-2xl text-gray-400 mb-1"></i>
                                <span class="text-xs text-gray-400">Foto</span>
                            </div>
<<<<<<< Updated upstream
>>>>>>> 608d2b588692002efdbfa903ec3664426efbdfdf
=======
>>>>>>> Stashed changes
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-slate-900 dark:text-white">Misi</h3>
                        <ul class="text-slate-600 dark:text-slate-400 space-y-3">
                            <li class="flex items-start gap-3"><i class="fas fa-check-circle text-secondary mt-1"></i>
                                <span>Meningkatkan keimanan dan ketakwaan terhadap Tuhan Yang Maha Esa.</span></li>
                            <li class="flex items-start gap-3"><i class="fas fa-check-circle text-secondary mt-1"></i>
                                <span>Mengoptimalkan kembali kedisiplinan dan partisipasi murid di setiap kegiatan sekolah.</span></li>
                                <li class="flex items-start gap-3"><i class="fas fa-check-circle text-secondary mt-1"></i>
                                <span>Meningkatkan komunikasi anggota dalam setiap kegiatan sekolah.</span></li>
                                 <li class="flex items-start gap-3"><i class="fas fa-check-circle text-secondary mt-1"></i>
                                <span>Mendorong murid untuk lebih menghargai budaya dan sejarah.</span></li>
                        </ul>
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

<<<<<<< Updated upstream
            
            <!-- STRUKTUR ORGANISASI OSIS -->
            <div class="space-y-12 pt-8">
                <div class="text-center space-y-4" data-aos="fade-up">
                    <h3 class="text-3xl md:text-4xl font-bold text-slate-900 dark:text-white">Struktur Organisasi OSIS
                    </h3>
                    <div class="w-24 h-1 bg-slate-200 dark:bg-slate-700 mx-auto rounded-full"></div>
                </div>
                <div class="org-chart flex flex-col items-center space-y-8" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-center relative line-down">
                        <div class="w-40 h-40 mx-auto relative profile-card group cursor-pointer">
                            <div
                                class="profile-overlay absolute inset-0 bg-black/50 rounded-full opacity-0 flex items-center justify-center z-10">
                                <i class="fas fa-search-plus text-white text-2xl"></i></div>
                            <img src="https://i.pravatar.cc/150?img=69" alt="Pembina"
                                class="w-full h-full rounded-full object-cover border-4 border-white dark:border-slate-700 shadow-xl">
                        </div>
                        <div
                            class="mt-4 bg-white dark:bg-slate-800 px-6 py-3 rounded-2xl shadow-lg inline-block border border-slate-100 dark:border-slate-700">
                            <h4 class="font-bold text-slate-900 dark:text-white">Gissa Firda Hasbia, S.Pd.</h4>
                            <span class="text-sm text-secondary font-medium">Pembina OSIS</span>
                        </div>
                    </div>
                    <div class="flex flex-wrap justify-center gap-8 w-full max-w-4xl">
                        <div class="text-center relative line-down line-across">
                            <div class="w-32 h-32 mx-auto relative profile-card group">
                                <div
                                    class="profile-overlay absolute inset-0 bg-black/50 rounded-full opacity-0 flex items-center justify-center z-10">
                                </div>
                                <img src="https://i.pravatar.cc/150?img=26" alt="Ketua"
                                    class="w-full h-full rounded-full object-cover border-4 border-white dark:border-slate-700 shadow-lg">
                            </div>
                            <div
                                class="mt-4 bg-white/80 dark:bg-slate-800/80 backdrop-blur-sm px-4 py-2 rounded-xl border border-slate-200 dark:border-slate-700">
                                <div class="font-bold text-slate-800 dark:text-slate-100 text-sm"> Fakih Sabikul Hoer </div>
                                <div class="text-xs text-slate-500 dark:text-slate-400">Ketua</div>
                            </div>
                        </div>
                        <div class="text-center relative line-down line-across">
                            <div class="w-32 h-32 mx-auto relative profile-card group">
                                <div
                                    class="profile-overlay absolute inset-0 bg-black/50 rounded-full opacity-0 flex items-center justify-center z-10">
                                </div>
                                <img src="https://i.pravatar.cc/150?img=44" alt="Wakil"
                                    class="w-full h-full rounded-full object-cover border-4 border-white dark:border-slate-700 shadow-lg">
                            </div>
                            <div
                                class="mt-4 bg-white/80 dark:bg-slate-800/80 backdrop-blur-sm px-4 py-2 rounded-xl border border-slate-200 dark:border-slate-700">
                                <div class="font-bold text-slate-800 dark:text-slate-100 text-sm">Maheswari Rihadatul Aisy</div>
                                <div class="text-xs text-slate-500 dark:text-slate-400">Wakil Ketua</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
=======
>>>>>>> Stashed changes
        </section>

        <!-- ================= DOKUMENTASI OSIS (BARU) ================= -->
            <section class="space-y-8" data-aos="fade-up">
                <div class="text-center space-y-4">
                    <h3 class="text-2xl md:text-3xl font-bold text-slate-900 dark:text-white">Dokumentasi Kegiatan OSIS
                    </h3>
                    <div class="w-16 h-1 bg-slate-200 dark:bg-slate-700 mx-auto rounded-full"></div>
                </div>
                <div class="doc-gallery grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    <img src="https://source.unsplash.com/random/400x300/?sports,day,1" alt="Dokumentasi OSIS 1">
                    <img src="https://source.unsplash.com/random/400x300/?festival,2" alt="Dokumentasi OSIS 2">
                    <img src="https://source.unsplash.com/random/400x300/?art,3" alt="Dokumentasi OSIS 3">
                    <img src="https://source.unsplash.com/random/400x300/?music,4" alt="Dokumentasi OSIS 4">
                    <img src="https://source.unsplash.com/random/400x300/?volunteer,5" alt="Dokumentasi OSIS 5">
                    <img src="https://source.unsplash.com/random/400x300/?culture,6" alt="Dokumentasi OSIS 6">
                    <img src="https://source.unsplash.com/random/400x300/?technology,7" alt="Dokumentasi OSIS 7">
                    <img src="https://source.unsplash.com/random/400x300/?workshop,8" alt="Dokumentasi OSIS 8">
                </div>
            </section>

    </main>

    <!-- FOOTER -->
   @include('layouts.footer')
    <!-- LIGHTBOX DOKUMENTASI -->
    <div id="lightbox" class="lightbox">
        <span class="lightbox-close">&times;</span>
        <img class="lightbox-content" id="lightbox-img">
    </div>

    <!-- DARK MODE BUTTON -->
    <button id="darkToggle"
        class="fixed bottom-8 right-8 bg-slate-900 dark:bg-white text-white dark:text-slate-900 p-4 rounded-full shadow-2xl z-50 transition-all duration-300 hover:scale-110 flex items-center justify-center border border-slate-200 dark:border-slate-900 group">
        <i class="fa-solid fa-moon text-lg dark:hidden"></i>
        <i class="fa-solid fa-sun text-lg hidden dark:block"></i>
        <span
            class="absolute right-full mr-4 px-3 py-1 bg-slate-800 text-white text-xs rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap pointer-events-none">Ganti
            Tema</span>
    </button>

    <!-- AOS & Custom Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 1000, once: true, });

        // Dark Mode Toggle
        const toggle = document.getElementById('darkToggle');
        const html = document.documentElement;
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            html.classList.add('dark');
        }
        toggle.addEventListener('click', () => {
            html.classList.toggle('dark');
            localStorage.setItem('theme', html.classList.contains('dark') ? 'dark' : 'light');
        });
<<<<<<< HEAD
=======

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
>>>>>>> 608d2b588692002efdbfa903ec3664426efbdfdf

        // --- LOGIKA LIGHTBOX DOKUMENTASI (BARU) ---
        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightbox-img');
        const lightboxClose = document.querySelector('.lightbox-close');
        const galleryImages = document.querySelectorAll('.doc-gallery img');

        galleryImages.forEach(img => {
            img.addEventListener('click', () => {
                lightbox.style.display = 'flex';
                lightboxImg.src = img.src;
            });
        });

        const closeLightbox = () => { lightbox.style.display = 'none'; };
        lightboxClose.addEventListener('click', closeLightbox);
        lightbox.addEventListener('click', (e) => { if (e.target === lightbox) closeLightbox(); });
    </script>
</body>

</html>