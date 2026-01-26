<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Organisasi - SMK Negeri 1 Kawali</title>

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
                    },
                    fontFamily: {
                        body: ["Inter", "sans-serif"],
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.6s ease-out',
                        'float': 'float 3s ease-in-out infinite',
                        'zoom-in': 'zoomIn 0.3s ease-out',
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
                        },
                        zoomIn: {
                            '0%': { opacity: '0', transform: 'scale(0.8)' },
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

        /* Card hover effect */
        .org-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        .org-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        /* Profile hover effect */
        .profile-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        .profile-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
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
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-100 font-body transition-colors duration-300">

    @include('layouts.navbar')

    <!-- HEADER -->
    <div class="relative bg-gradient-to-br from-primary to-primary-dark dark:from-blue-800 dark:to-blue-900 py-20 header-pattern">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="relative container mx-auto px-4">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-3 animate-fade-in">
                Organisasi
            </h1>
            <p class="text-gray-100 text-lg md:text-xl max-w-2xl animate-fade-in" style="animation-delay: 0.2s">
                Struktur dan kegiatan organisasi siswa SMK Negeri 1 Kawali.
            </p>
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
                        <h4 class="font-bold text-gray-900 dark:text-white">Nama Pembina</h4>
                        <span class="text-sm text-primary">Pembina MPK</span>
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
                        <div class="font-semibold text-sm text-gray-900 dark:text-white">{{ $jabatan }}</div>
                        <div class="text-xs text-gray-500 dark:text-gray-400">Nama Siswa</div>
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