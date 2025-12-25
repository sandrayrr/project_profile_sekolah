<!DOCTYPE html>
<html class="scroll-smooth" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Akreditasi - SMK Negeri 1 Kawali</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <script>
        tailwind.config = {<!DOCTYPE html>
<html class="scroll-smooth" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Akreditasi - SMK Negeri 1 Kawali</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#6b7280", // Warna abu-abu
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
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(10px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        }
                    }
                },
            },
        };
    </script>
    <style>
        /* Custom styles for visual enhancement */
        .akreditasi-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .akreditasi-card:hover {
            transform: translateY(-8px);
        }
        
        /* Pagination styling */
        .pagination {
            @apply flex list-none -space-x-px;
        }
        
        .page-link {
            @apply relative block py-2 px-3 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white;
        }
        
        .page-item.active .page-link {
            @apply z-10 text-primary-600 bg-primary-50 border-primary-500 dark:text-primary-300 dark:bg-primary-900 dark:border-primary-400;
        }
        
        .page-item.disabled .page-link {
            @apply opacity-50 cursor-not-allowed bg-gray-100 dark:bg-gray-800;
        }
        
        .page-item:first-child .page-link {
            @apply rounded-l-lg;
        }

        .page-item:last-child .page-link {
            @apply rounded-r-lg;
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-100 font-body transition-colors duration-300">

    @include('layouts.navbar')

    <!-- HEADER -->
    <div class="relative bg-gradient-to-br from-primary to-gray-600 dark:from-gray-700 dark:to-gray-900 py-20">
        <!-- Optional: Add a subtle pattern overlay -->
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="relative container mx-auto px-4">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-3">
                Akreditasi
            </h1>
            <p class="text-gray-100 text-lg md:text-xl max-w-2xl">
                Informasi lengkap mengenai akreditasi dan penilaian kualitas pendidikan di SMK Negeri 1 Kawali.
            </p>
        </div>
    </div>

    <!-- SEARCH -->
    

    <!-- CONTENT -->
    <main class="container mx-auto px-4 py-12 lg:py-16 min-h-screen">

        <!-- NOTIFIKASI HASIL PENCARIAN -->
        @if(request('cari'))
        <div class="mb-6 bg-gray-50 dark:bg-gray-900/20 border-l-4 border-gray-500 p-4 rounded">
            <p class="text-sm">
                Menampilkan hasil pencarian untuk: <strong>{{ request('cari') }}</strong>
            </p>
        </div>
        @endif

        <!-- AKREDITASI CARDS -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">

            <!-- PENGERTIAN AKREDITASI -->
            <div
                class="akreditasi-card bg-card-light dark:bg-card-dark 
                       rounded-2xl shadow-lg border border-border-light dark:border-border-dark 
                       overflow-hidden animate-fade-in group lg:col-span-2">

                <!-- HEADER -->
                <div class="bg-gray-100 dark:bg-gray-800 p-6 border-b border-border-light dark:border-border-dark">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-primary/20 dark:bg-primary/30 rounded-full flex items-center justify-center mr-4">
                            <i class="material-icons text-primary text-2xl">info</i>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white">
                            Pengertian Akreditasi
                        </h2>
                    </div>
                </div>

                <!-- CONTENT -->
                <div class="p-6">
                    <div class="prose dark:prose-invert max-w-none text-gray-600 dark:text-gray-300">
                        <p>
                            Akreditasi adalah kegiatan penilaian kelayakan program dalam satuan pendidikan berdasarkan
                            kriteria yang telah ditetapkan. Akreditasi sekolah adalah proses penilaian secara komprehensif
                            terhadap kelayakan satuan atau program pendidikan, yang hasilnya diwujudkan dalam bentuk
                            pengakuan dan peringkat kelayakan yang dikeluarkan oleh suatu lembaga yang mandiri dan
                            profesional.
                        </p>
                        <p class="mt-4">
                            Bagi SMK Negeri 1 Kawali, akreditasi merupakan bentuk akuntabilitas publik yang dilakukan secara
                            objektif, adil, transparan, dan komprehensif dengan menggunakan instrumen dan kriteria yang
                            mengacu pada Standar Nasional Pendidikan.
                        </p>
                    </div>
                </div>
            </div>

            <!-- SERTIFIKAT AKREDITASI -->
            <div
                class="akreditasi-card bg-card-light dark:bg-card-dark 
                       rounded-2xl shadow-lg border border-border-light dark:border-border-dark 
                       overflow-hidden animate-fade-in group">

                <!-- FOTO -->
                <div class="aspect-[4/3] bg-gray-200 dark:bg-gray-700 relative overflow-hidden">
                    <img src="https://via.placeholder.com/400x300.png?text=Sertifikat+Akreditasi"
                        alt="Sertifikat Akreditasi"
                        class="w-full h-full object-cover">
                </div>

                <!-- BODY -->
                <div class="p-6 flex flex-col">
                    <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white">
                        Sertifikat Akreditasi
                    </h3>
                    <div class="flex items-center text-sm text-gray-500 dark:text-gray-400 mb-4">
                        <i class="fas fa-certificate mr-2"></i>
                        <span>Berlaku hingga 2025</span>
                    </div>
                    <a href="#"
                        class="inline-flex items-center gap-2 bg-slate-100 dark:bg-slate-700 hover:bg-primary hover:text-white text-gray-700 dark:text-gray-300 text-sm font-semibold py-2 px-4 rounded-full transition-colors mt-auto">
                        Lihat Sertifikat <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- TUJUAN AKREDITASI -->
            <div
                class="akreditasi-card bg-card-light dark:bg-card-dark 
                       rounded-2xl shadow-lg border border-border-light dark:border-border-dark 
                       overflow-hidden animate-fade-in group">

                <!-- HEADER -->
                <div class="bg-gray-100 dark:bg-gray-800 p-6 border-b border-border-light dark:border-border-dark">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-primary/20 dark:bg-primary/30 rounded-full flex items-center justify-center mr-4">
                            <i class="material-icons text-primary text-2xl">flag</i>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white">
                            Tujuan Akreditasi
                        </h2>
                    </div>
                </div>

                <!-- CONTENT -->
                <div class="p-6">
                    <div class="prose dark:prose-invert max-w-none text-gray-600 dark:text-gray-300">
                        <p>
                            Tujuan utama akreditasi sekolah adalah untuk memperoleh gambaran kinerja sekolah yang dapat
                            digunakan sebagai alat pembinaan, pengembangan, dan peningkatan mutu.
                        </p>
                        <ul class="list-disc pl-5 mt-4">
                            <li>Memberikan informasi tentang kelayakan sekolah/madrasah.</li>
                            <li>Memberikan pengakuan peringkat kelayakan.</li>
                            <li>Memetakan mutu pendidikan berdasarkan Standar Nasional Pendidikan.</li>
                            <li>Memberikan pertanggungjawaban kepada pemangku kepentingan (stakeholder).</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- MANFAAT AKREDITASI -->
            <div
                class="akreditasi-card bg-card-light dark:bg-card-dark 
                       rounded-2xl shadow-lg border border-border-light dark:border-border-dark 
                       overflow-hidden animate-fade-in group lg:col-span-2">

                <!-- HEADER -->
                <div class="bg-gray-100 dark:bg-gray-800 p-6 border-b border-border-light dark:border-border-dark">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-primary/20 dark:bg-primary/30 rounded-full flex items-center justify-center mr-4">
                            <i class="material-icons text-primary text-2xl">stars</i>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white">
                            Manfaat Akreditasi
                        </h2>
                    </div>
                </div>

                <!-- CONTENT -->
                <div class="p-6">
                    <div class="prose dark:prose-invert max-w-none text-gray-600 dark:text-gray-300">
                        <p>
                            Hasil akreditasi sekolah bermanfaat sebagai dasar bagi sekolah untuk melakukan peningkatan mutu
                            pendidikan, serta pengembangan rencana anggaran pendapatan dan belanja sekolah.
                        </p>
                        <p class="mt-4">
                            Manfaat lainnya meliputi umpan balik dalam usaha pemberdayaan dan pengembangan kinerja warga
                            sekolah dalam rangka menerapkan visi, misi, tujuan, sasaran, strategi, dan program sekolah.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </main>

    @include('layouts.footer')

    <!-- DARK MODE BUTTON -->
    <button
        id="darkToggle"
        class="fixed bottom-6 right-6 bg-primary text-white p-3 rounded-full shadow-lg z-50 hover:bg-gray-600 transition-colors">
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

        // Search functionality
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            
            // Auto-submit form on Enter key
            searchInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    this.form.submit();
                }
            });
        });
    </script>

</body>

</html>
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#1e3a8a", // Dark Blue to match logo feel, though mostly monochrome
                        "background-light": "#ffffff",
                        "background-dark": "#111827",
                        "surface-light": "#f3f4f6", // Light grey for header/footer
                        "surface-dark": "#1f2937", // Dark grey for header/footer in dark mode
                    },
                    fontFamily: {
                        display: ["Inter", "sans-serif"],
                        sans: ["Inter", "sans-serif"],
                    },
                    borderRadius: {
                        DEFAULT: "0.375rem",
                    },
                },
            },
        };
    </script>
</head>

<body
    class="bg-background-light bg-background-dark text-gray-900 text-gray-100 font-sans antialiased flex flex-col min-h-screen transition-colors duration-300">
   @include('layouts.navbar')
    <section class="bg-gray-200 bg-gray-800 py-12 md:py-16 transition-colors duration-300">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 text-white pl-4 border-l-4 border-transparent">
                Akreditas
            </h1>
        </div>
    </section>
    <main class="flex-grow bg-background-light bg-background-dark transition-colors duration-300">
        <div class="container mx-auto px-4 py-16 max-w-4xl space-y-24">
            <article class="text-center md:text-left">
                <h2 class="text-2xl font-medium text-gray-900 text-white mb-6">Pengertian Akreditasi</h2>
                <div class="prose prose-invert max-w-none text-gray-600 text-gray-300">
                    <p>
                        Akreditasi adalah kegiatan penilaian kelayakan program dalam satuan pendidikan berdasarkan
                        kriteria yang telah ditetapkan. Akreditasi sekolah adalah proses penilaian secara komprehensif
                        terhadap kelayakan satuan atau program pendidikan, yang hasilnya diwujudkan dalam bentuk
                        pengakuan dan peringkat kelayakan yang dikeluarkan oleh suatu lembaga yang mandiri dan
                        profesional.
                    </p>
                    <p class="mt-4">
                        Bagi SMK Negeri 1 Kawali, akreditasi merupakan bentuk akuntabilitas publik yang dilakukan secara
                        objektif, adil, transparan, dan komprehensif dengan menggunakan instrumen dan kriteria yang
                        mengacu pada Standar Nasional Pendidikan.
                    </p>
                </div>
            </article>
            <article class="text-center md:text-left">
                <h2 class="text-2xl font-medium text-gray-900 text-white mb-6">Tujuan Akreditasi</h2>
                <div class="prose prose-invert max-w-none text-gray-600 text-gray-300">
                    <p>
                        Tujuan utama akreditasi sekolah adalah untuk memperoleh gambaran kinerja sekolah yang dapat
                        digunakan sebagai alat pembinaan, pengembangan, dan peningkatan mutu; serta menentukan tingkat
                        kelayakan suatu sekolah dalam penyelenggaraan pelayanan pendidikan.
                    </p>
                    <ul class="list-disc pl-5 mt-4 text-left inline-block">
                        <li>Memberikan informasi tentang kelayakan sekolah/madrasah.</li>
                        <li>Memberikan pengakuan peringkat kelayakan.</li>
                        <li>Memetakan mutu pendidikan berdasarkan Standar Nasional Pendidikan.</li>
                        <li>Memberikan pertanggungjawaban kepada pemangku kepentingan (stakeholder).</li>
                    </ul>
                </div>
            </article>
            <article class="text-center md:text-left">
                <h2 class="text-2xl font-medium text-gray-900 text-white mb-6">Manfaat Akreditasi</h2>
                <div class="prose prose-invert max-w-none text-gray-600 text-gray-300">
                    <p>
                        Hasil akreditasi sekolah bermanfaat sebagai dasar bagi sekolah untuk melakukan peningkatan mutu
                        pendidikan, serta pengembangan rencana anggaran pendapatan dan belanja sekolah. Selain itu,
                        akreditasi juga bermanfaat bagi masyarakat dan orang tua murid sebagai informasi tentang layanan
                        pendidikan yang akan diterima anak-anak mereka.
                    </p>
                    <p class="mt-4">
                        Manfaat lainnya meliputi umpan balik dalam usaha pemberdayaan dan pengembangan kinerja warga
                        sekolah dalam rangka menerapkan visi, misi, tujuan, sasaran, strategi, dan program sekolah.
                    </p>
                </div>
            </article>
        </div>
    </main>
    
    @include('layouts.footer')

</body>

</html>
