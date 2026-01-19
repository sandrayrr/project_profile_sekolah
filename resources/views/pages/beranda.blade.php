<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>SMK Negeri 1 Kawali - Homepage</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
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
                        "text-light": "#111318",
                        "text-dark": "#f9fafb",
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
        body {
            font-family: 'Inter', sans-serif;
        }

        .material-icons {
            font-size: 1.25rem;
            vertical-align: middle;
        }

        /* Custom scrollbar for carousel */
        .carousel-container {
            scrollbar-width: thin;
            scrollbar-color: #cbd5e1 #f1f5f9;
        }

        .carousel-container::-webkit-scrollbar {
            height: 8px;
        }

        .carousel-container::-webkit-scrollbar-track {
            background: #f1f5f9;
            border-radius: 4px;
        }

        .carousel-container::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }

        .carousel-container::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }

        .dark .carousel-container::-webkit-scrollbar-track {
            background: #374151;
        }

        .dark .carousel-container::-webkit-scrollbar-thumb {
            background: #6b7280;
        }

        .dark .carousel-container::-webkit-scrollbar-thumb:hover {
            background: #9ca3af;
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-200 transition-colors duration-300">

    @include('layouts.navbar')
 <section class="relative bg-gray-200 dark:bg-gray-800 h-[500px] flex items-center justify-center overflow-hidden">
    <!-- Slider Container -->
    <div class="relative w-full h-full">
        <!-- Slides -->
        <div class="slider-wrapper relative w-full h-full">
            <!-- Slide 1 -->
            <div class="slide absolute inset-0 w-full h-full transition-opacity duration-1000 opacity-100">
                <img alt="School Atmosphere" class="absolute inset-0 w-full h-full object-cover opacity-30 dark:opacity-20"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBqMZggap8sbrsWBeQRfEvM54vjG5NBbXa8RcSD9jOIoxPciY89gu4wfihHnBB7TAbrpaVbjDaEpvaBkajffOrrfSKv2-zUk3r9bAWCFGomQdjs6QibJS1wKdMmZWJTQNwOs_95HsHOPEBQwUbFwL0UmXVbh9yXc-5CVH-lSwPFjtvj6wOkrKBcE6BBhg1Amwh9MvBKptuPaAGr_Awv-OBbN0Jc_-0BNKwXLd4zTZ9npg2oewr7zAyskK1ToubBTF46I7qDnzl4zKOG" />
                <div class="relative z-10 flex flex-col items-center justify-center h-full w-full px-6">
                    <div class="text-center max-w-4xl">
                        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-6">Mewujudkan Generasi Unggul dan Berkarakter</h2>
                        <p class="text-lg text-gray-700 dark:text-gray-300">Selamat datang di website resmi SMK Negeri 1 Kawali. Pusat informasi dan layanan digital sekolah.</p>
                        <div class="flex justify-center space-x-4 mt-8">
                            <button class="bg-white dark:bg-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 text-gray-800 dark:text-white px-6 py-2 rounded-full shadow-lg transition flex items-center gap-2">
                                Selengkapnya <span class="material-icons text-sm">arrow_forward</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Slide 2 -->
            <div class="slide absolute inset-0 w-full h-full transition-opacity duration-1000 opacity-0">
                <img alt="Students Learning" class="absolute inset-0 w-full h-full object-cover opacity-30 dark:opacity-20"
                    src="https://picsum.photos/seed/smkn1kawali-students/1920/1080.jpg" />
                <div class="relative z-10 flex flex-col items-center justify-center h-full w-full px-6">
                    <div class="text-center max-w-4xl">
                        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-6">Pembelajaran Inovatif dan Berbasis Teknologi</h2>
                        <p class="text-lg text-gray-700 dark:text-gray-300">Kami menyediakan lingkungan belajar yang modern dengan fasilitas lengkap untuk mendukung pengembangan skill siswa.</p>
                        <div class="flex justify-center space-x-4 mt-8">
                            <button class="bg-white dark:bg-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 text-gray-800 dark:text-white px-6 py-2 rounded-full shadow-lg transition flex items-center gap-2">
                                Jelajahi Jurusan <span class="material-icons text-sm">arrow_forward</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Slide 3 -->
            <div class="slide absolute inset-0 w-full h-full transition-opacity duration-1000 opacity-0">
                <img alt="School Facilities" class="absolute inset-0 w-full h-full object-cover opacity-30 dark:opacity-20"
                    src="https://picsum.photos/seed/smkn1kawali-facilities/1920/1080.jpg" />
                <div class="relative z-10 flex flex-col items-center justify-center h-full w-full px-6">
                    <div class="text-center max-w-4xl">
                        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-6">Fasilitas Lengkap untuk Mendukung Prestasi</h2>
                        <p class="text-lg text-gray-700 dark:text-gray-300">Dari lab komputer hingga bengkel modern, kami menyediakan semua yang siswa butuhkan untuk unggul dalam bidangnya.</p>
                        <div class="flex justify-center space-x-4 mt-8">
                            <button class="bg-white dark:bg-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 text-gray-800 dark:text-white px-6 py-2 rounded-full shadow-lg transition flex items-center gap-2">
                                Lihat Fasilitas <span class="material-icons text-sm">arrow_forward</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Slide 4 -->
            <div class="slide absolute inset-0 w-full h-full transition-opacity duration-1000 opacity-0">
                <img alt="Student Activities" class="absolute inset-0 w-full h-full object-cover opacity-30 dark:opacity-20"
                    src="https://picsum.photos/seed/smkn1kawali-activities/1920/1080.jpg" />
                <div class="relative z-10 flex flex-col items-center justify-center h-full w-full px-6">
                    <div class="text-center max-w-4xl">
                        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-6">Ekstrakurikuler untuk Pengembangan Diri</h2>
                        <p class="text-lg text-gray-700 dark:text-gray-300">Berbagai kegiatan ekstrakurikuler yang menarik untuk mengembangkan bakat dan minat siswa di luar jam pelajaran.</p>
                        <div class="flex justify-center space-x-4 mt-8">
                            <button class="bg-white dark:bg-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 text-gray-800 dark:text-white px-6 py-2 rounded-full shadow-lg transition flex items-center gap-2">
                                Lihat Kegiatan <span class="material-icons text-sm">arrow_forward</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Navigation Controls -->
        <button id="prevBtn" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white/80 dark:bg-gray-700/80 hover:bg-white dark:hover:bg-gray-700 text-gray-800 dark:text-white rounded-full p-3 transition-all z-20 shadow-lg">
            <span class="material-icons">west</span>
        </button>
        <button id="nextBtn" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white/80 dark:bg-gray-700/80 hover:bg-white dark:hover:bg-gray-700 text-gray-800 dark:text-white rounded-full p-3 transition-all z-20 shadow-lg">
            <span class="material-icons">east</span>
        </button>
        
        <!-- Slide Indicators -->
        <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex space-x-2 z-20">
            <button class="indicator w-3 h-3 rounded-full bg-white/80 dark:bg-white/70 transition-all" data-slide="0"></button>
            <button class="indicator w-3 h-3 rounded-full bg-white/40 dark:bg-white/30 transition-all" data-slide="1"></button>
            <button class="indicator w-3 h-3 rounded-full bg-white/40 dark:bg-white/30 transition-all" data-slide="2"></button>
            <button class="indicator w-3 h-3 rounded-full bg-white/40 dark:bg-white/30 transition-all" data-slide="3"></button>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const slides = document.querySelectorAll('.slide');
        const indicators = document.querySelectorAll('.indicator');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        let currentSlide = 0;
        let slideInterval;
        
        // Function to show a specific slide
        function showSlide(index) {
            // Hide all slides
            slides.forEach(slide => {
                slide.classList.remove('opacity-100');
                slide.classList.add('opacity-0');
            });
            
            // Update indicators
            indicators.forEach(indicator => {
                indicator.classList.remove('bg-white/80', 'dark:bg-white/70');
                indicator.classList.add('bg-white/40', 'dark:bg-white/30');
            });
            
            // Show current slide
            slides[index].classList.remove('opacity-0');
            slides[index].classList.add('opacity-100');
            
            // Update current indicator
            indicators[index].classList.remove('bg-white/40', 'dark:bg-white/30');
            indicators[index].classList.add('bg-white/80', 'dark:bg-white/70');
            
            currentSlide = index;
        }
        
        // Function to show next slide
        function nextSlide() {
            const newSlide = (currentSlide + 1) % slides.length;
            showSlide(newSlide);
        }
        
        // Function to show previous slide
        function prevSlide() {
            const newSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(newSlide);
        }
        
        // Start automatic slideshow
        function startSlideshow() {
            slideInterval = setInterval(nextSlide, 5000); // Change slide every 5 seconds
        }
        
        // Stop automatic slideshow
        function stopSlideshow() {
            clearInterval(slideInterval);
        }
        
        // Event listeners for navigation buttons
        nextBtn.addEventListener('click', () => {
            nextSlide();
            stopSlideshow();
            startSlideshow();
        });
        
        prevBtn.addEventListener('click', () => {
            prevSlide();
            stopSlideshow();
            startSlideshow();
        });
        
        // Event listeners for indicators
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                showSlide(index);
                stopSlideshow();
                startSlideshow();
            });
        });
        
        // Start the slideshow
        startSlideshow();
        
        // Pause slideshow when page is not visible
        document.addEventListener('visibilitychange', () => {
            if (document.hidden) {
                stopSlideshow();
            } else {
                startSlideshow();
            }
        });
    });
</script>
    <div class="container mx-auto px-4 -mt-24 relative z-20 mb-20">
        <div class="bg-white dark:bg-surface-dark rounded-xl shadow-xl p-8 flex flex-col lg:flex-row gap-8 lg:gap-12">
            <div
                class="lg:w-1/2 flex flex-col sm:flex-row items-center sm:items-start gap-6 border-b lg:border-b-0 lg:border-r border-gray-200 dark:border-gray-700 pb-8 lg:pb-0 lg:pr-8">
                <div class="shrink-0">
                    <div class="w-24 h-24 rounded-full bg-gray-300 dark:bg-gray-600 overflow-hidden shadow-inner">
                        <img alt="Kepala Sekolah" class="w-full h-full object-cover"
                            src="{{ asset('storage/artikel/dede.jpg') }}">
                    </div>
                </div>
                <div class="w-full max-w-full">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2 break-words">
                        {{ $beranda->judul ?? 'Sambutan Kepala Sekolah' }}
                    </h3>

                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed break-words whitespace-normal">
                        {{ $beranda->deskripsi ?? 'Belum ada sambutan.' }}
                    </p>
                </div>



            </div>
            <div class="grid grid-cols-3 gap-4 text-center divide-x divide-gray-200 dark:divide-gray-700">
                <div class="px-2">
                    <span class="block text-3xl font-bold text-primary">
                        {{ $beranda->jumlah_siswa ?? 0 }}
                    </span>
                    <span class="text-xs text-gray-500 uppercase tracking-wide">Siswa</span>
                </div>

                <div class="px-2">
                    <span class="block text-3xl font-bold text-primary">
                        {{ $beranda->jumlah_guru ?? 0 }}
                    </span>
                    <span class="text-xs text-gray-500 uppercase tracking-wide">Guru</span>
                </div>

                <div class="px-2">
                    <span class="block text-3xl font-bold text-primary">
                        {{ $beranda->jumlah_jurusan ?? 0 }}
                    </span>
                    <span class="text-xs text-gray-500 uppercase tracking-wide">Jurusan</span>
                </div>
            </div>

        </div>
    </div>
    <section class="container mx-auto px-4 mb-20">
        <div class="flex justify-between items-end mb-8">
            <div>
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Agenda</h2>
                <p class="text-gray-600 dark:text-gray-400">Agenda kegiatan dan aktivitas sekolah yang akan datang</p>
            </div>
            <a class="hidden sm:inline-flex items-center px-4 py-2 bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 rounded-full text-xs font-semibold text-gray-700 dark:text-gray-200 transition"
                href="#">
                Selengkapnya <span class="material-icons text-sm ml-1">arrow_forward</span>
            </a>
        </div>
        <div class="grid md:grid-cols-2 gap-6">
            <div
                class="bg-white dark:bg-surface-dark rounded-lg shadow-md overflow-hidden border border-gray-100 dark:border-gray-700 hover:shadow-lg transition">
                <div class="bg-gray-100 dark:bg-gray-800 p-8 flex items-center justify-center">
                    <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200 text-center">Rapat Koordinasi Guru
                    </h4>
                </div>
                <div
                    class="p-4 border-t border-gray-200 dark:border-gray-700 flex items-center text-sm text-gray-500 dark:text-gray-400 bg-gray-50 dark:bg-gray-900/50">
                    <span class="material-icons text-base mr-2 text-primary">event</span>
                    <span>Senin, 12 Oktober 2023 - 08:00 WIB</span>
                </div>
            </div>
            <div
                class="bg-white dark:bg-surface-dark rounded-lg shadow-md overflow-hidden border border-gray-100 dark:border-gray-700 hover:shadow-lg transition">
                <div class="bg-gray-100 dark:bg-gray-800 p-8 flex items-center justify-center">
                    <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200 text-center">Ujian Tengah Semester
                    </h4>
                </div>
                <div
                    class="p-4 border-t border-gray-200 dark:border-gray-700 flex items-center text-sm text-gray-500 dark:text-gray-400 bg-gray-50 dark:bg-gray-900/50">
                    <span class="material-icons text-base mr-2 text-primary">event</span>
                    <span>Senin, 19 Oktober 2023 - 07:00 WIB</span>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white dark:bg-surface-dark py-16 mb-20">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-end mb-10">
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Berita, Artikel &amp; Informasi
                    </h2>
                    <p class="text-gray-600 dark:text-gray-400">Berita, Artikel &amp; Informasi sekolah kami</p>
                </div>
                <a class="hidden sm:inline-flex items-center px-4 py-2 bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 rounded-full text-xs font-semibold text-gray-700 dark:text-gray-200 transition"
                    href="#">
                    Selengkapnya <span class="material-icons text-sm ml-1">arrow_forward</span>
                </a>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="group cursor-pointer">
                    <div class="h-64 bg-gray-300 dark:bg-gray-700 rounded-lg overflow-hidden mb-4 relative">
                        <img alt="Kegiatan Siswa"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDU1EQ3wz8YsV31GyNFWbPlL27NMnjyfoh9ei1_xhToiA6vPoEsQC_Q1VsgQHJHOcKaeczLk8olARwGCGL_UwvZhn_1Cm1CDiOocHEq41VvxGGbqeg_7BCwuz_bTC_tvGps1MR8daO_Qq6rJb14JuAgzctvGi2RKDaAiHybcRVGj6eCBqFJd_3hms8RA05u1Jxh4J70gM1iiIyGQHODfOYlR4CYzF6xUsqBBblfy9J-BDcUD8yoU-przuOzG-CSg7dSSd7JTvy_QnUK" />
                    </div>
                    <div class="flex flex-col">
                        <span class="text-sm text-primary font-semibold mb-1">10 Oktober 2023</span>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white group-hover:text-primary transition">
                            Siswa SMK Negeri 1 Kawali Juara LKS Provinsi</h3>
                        <p class="text-gray-600 dark:text-gray-400 mt-2 line-clamp-2">Prestasi membanggakan kembali
                            diraih oleh siswa jurusan TKJ dalam ajang Lomba Kompetensi Siswa...</p>
                    </div>
                </div>
                <div class="group cursor-pointer">
                    <div class="h-64 bg-gray-300 dark:bg-gray-700 rounded-lg overflow-hidden mb-4 relative">
                        <img alt="Kegiatan Belajar"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBMu9tAxcl84Y9IGQTRIgxa3Kmg-FeY8dWLb-IEXNf6qeIBBpD4zAWgoVhSn0Jw8Hc8naswWORscExDIi5eehwK0EJ0zkYQ3FngG1dYMbyErChe_WKs0seIsSliNqwxPX7FsVIegFbpsWQsoKnRVEUJL1ZwQI-YlRhgYpT6lxQiZdCG6X1wWbyoy4WGNmh0__zbwae3iejjDTW1YxZmcnPcw_FDWJKzHZcg7JrjwKuZPNNPekCXl4ristHe5LLiV-GI7GaZZebFJTZI" />
                    </div>
                    <div class="flex flex-col">
                        <span class="text-sm text-primary font-semibold mb-1">08 Oktober 2023</span>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white group-hover:text-primary transition">
                            Kunjungan Industri ke PT Telkom Indonesia</h3>
                        <p class="text-gray-600 dark:text-gray-400 mt-2 line-clamp-2">Untuk meningkatkan wawasan
                            industri, siswa kelas XI melakukan kunjungan industri ke kantor pusat...</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container mx-auto px-4 mb-20">
        <div class="flex justify-between items-end mb-8">
            <div>
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Guru</h2>
                <p class="text-gray-600 dark:text-gray-400">Guru Di SMK Negeri 1 Kawali</p>
            </div>
            <a class="hidden sm:inline-flex items-center px-4 py-2 bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 rounded-full text-xs font-semibold text-gray-700 dark:text-gray-200 transition"
                href="#">
                Selengkapnya <span class="material-icons text-sm ml-1">arrow_forward</span>
            </a>
        </div>
        
        <!-- Teacher Carousel -->
        <div class="relative">
            <div class="overflow-hidden">
                <div id="teacherCarousel" class="flex transition-transform duration-300 ease-in-out gap-6">
                    <!-- Teacher Card 1 -->
                    <div class="flex-none w-72">
                        <div class="bg-white dark:bg-surface-dark rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                            <div class="h-64 bg-gray-200 dark:bg-gray-700 overflow-hidden">
                                <img alt="Teacher" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuARq0UDPZmw7Hkpsb-c3yGXzuA4NFBb7plWBiBHLKSikY15wQuUa0jEXCS30FSwJCx9cLDRr1y0Ocko7P0-tVZUBli5EcmB47HdZzEFM98zYe_7zztp2Q-BS-HMyAjnugQe89p0iuMkhQJpkJ95YIENo6cnDHdAhsQRki99ucrEclw4XVDY5PlnAS5MtyjQ9V1jB05Jn1SIHIglAfixkIV2qOMvSoYAHOUhnQg1ywehzvPwTHPGDcRacWlt-YyrLw0VHV9l3SMiUpyz" />
                            </div>
                            <div class="p-6 text-center">
                                <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-1">Dra. Siti Aminah</h4>
                                <p class="text-primary text-sm">Bahasa Indonesia</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Teacher Card 2 -->
                    <div class="flex-none w-72">
                        <div class="bg-white dark:bg-surface-dark rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                            <div class="h-64 bg-gray-200 dark:bg-gray-700 overflow-hidden">
                                <img alt="Teacher" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBZ7GN7MRkzkskSWEdRs-cBMtsqUF9yz_Nv0zOBKnuqCix9vDtzGH97Sp6xzJOc18Xk5Q-61ZZOEzR4pUvtIThfFSSggnmxSU-iazeg07IPLCW0KMBdfBjddXks9YbG0EB9xQZJBUvQ6TWpOW72Hy5dGridIsr0H8cF3NqHFqc30vipTdfZsqPY0g3bAsZu8-f5XiAEfu7179XJkerqHB5HJfzDvdifiJBBpcta2WEpy114-Xqy2-78XcxVWjvG-kUxSeve5k-DFyYZ" />
                            </div>
                            <div class="p-6 text-center">
                                <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-1">Budi Santoso, S.Pd</h4>
                                <p class="text-primary text-sm">Matematika</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Teacher Card 3 -->
                    <div class="flex-none w-72">
                        <div class="bg-white dark:bg-surface-dark rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                            <div class="h-64 bg-gray-200 dark:bg-gray-700 overflow-hidden">
                                <img alt="Teacher" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAK5fQTAKP8PPqeOuKm4RJDBVx83M6O1nOnY8l68WDBjFfFSdZkKwQ1WrnQt0eNcRQmecWL2AHJHl8WF3QALvTpsZySRWC1KdHwO3Iee5IaVX6ipEidz6Kliu3iKor1IfqXIeoHPgbg4qiAuoGY7ZvzeajDlqn4Y2C2AiKP-XZY-osgjh3GUMkAjW6VHyUCAeKkgPFZG2wpZ96oIhur3AyXZ6-vpyvNkIwsqw2d-fu2yDkO2MtU__9ymQIIChIuycle1G4c0xT4jOor" />
                            </div>
                            <div class="p-6 text-center">
                                <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-1">Rina Wati, M.Kom</h4>
                                <p class="text-primary text-sm">Teknik Komputer</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Teacher Card 4 -->
                    <div class="flex-none w-72">
                        <div class="bg-white dark:bg-surface-dark rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                            <div class="h-64 bg-gray-200 dark:bg-gray-700 overflow-hidden">
                                <img alt="Teacher" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
                                    src="https://picsum.photos/seed/teacher4/400/500.jpg" />
                            </div>
                            <div class="p-6 text-center">
                                <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-1">Ahmad Fauzi, S.T</h4>
                                <p class="text-primary text-sm">Teknik Elektro</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Teacher Card 5 -->
                    <div class="flex-none w-72">
                        <div class="bg-white dark:bg-surface-dark rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                            <div class="h-64 bg-gray-200 dark:bg-gray-700 overflow-hidden">
                                <img alt="Teacher" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
                                    src="https://picsum.photos/seed/teacher5/400/500.jpg" />
                            </div>
                            <div class="p-6 text-center">
                                <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-1">Dewi Lestari, S.Pd</h4>
                                <p class="text-primary text-sm">Bahasa Inggris</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Navigation Buttons -->
            <button id="teacherPrev" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 bg-white dark:bg-gray-800 rounded-full p-2 shadow-lg hover:shadow-xl transition-shadow z-10">
                <span class="material-icons text-gray-700 dark:text-gray-300">chevron_left</span>
            </button>
            <button id="teacherNext" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 bg-white dark:bg-gray-800 rounded-full p-2 shadow-lg hover:shadow-xl transition-shadow z-10">
                <span class="material-icons text-gray-700 dark:text-gray-300">chevron_right</span>
            </button>
        </div>
    </section>
    <section class="bg-white dark:bg-surface-dark py-16 mb-20">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-end mb-8">
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Staff Tenaga Kependidikan</h2>
                    <p class="text-gray-600 dark:text-gray-400">Staff Tenaga Kependidikan Di SMK Negeri 1 Kawali</p>
                </div>
                <a class="hidden sm:inline-flex items-center px-4 py-2 bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 rounded-full text-xs font-semibold text-gray-700 dark:text-gray-200 transition"
                    href="#">
                    Selengkapnya <span class="material-icons text-sm ml-1">arrow_forward</span>
                </a>
            </div>
           <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

    @forelse ($tenagakependidikan as $item)
        <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-4 text-center
                    hover:-translate-y-1 transition duration-300">

            {{-- FOTO --}}
            <div class="w-full aspect-square bg-gray-200 dark:bg-gray-700 rounded-lg
                        mb-4 overflow-hidden">
                <img
                    src="{{ $item->foto
                        ? asset('storage/' . $item->foto)
                        : 'https://ui-avatars.com/api/?name=' . urlencode($item->nama) . '&background=0D8ABC&color=fff'
                    }}"
                    alt="{{ $item->nama }}"
                    class="w-full h-full object-cover opacity-90">
            </div>

            {{-- NAMA --}}
            <h4 class="text-lg font-bold text-gray-900 dark:text-white">
                {{ $item->nama }}
            </h4>

            {{-- JABATAN --}}
            <p class="text-gray-500 dark:text-gray-400 text-sm">
                {{ $item->jabatan }}
            </p>
        </div>

    @empty
        <div class="col-span-full text-center text-gray-500 py-10">
            Belum ada data tenaga kependidikan
        </div>
    @endforelse

</div>

        </div>
    </section>
    <section class="container mx-auto px-4 mb-20">
        <div class="flex justify-between items-end mb-8">
            <div>
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Program Keahlian</h2>
                <p class="text-gray-600 dark:text-gray-400">Program Keahlian yang terdapat di sekolah kami</p>
            </div>
            <a class="hidden sm:inline-flex items-center px-4 py-2 bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 rounded-full text-xs font-semibold text-gray-700 dark:text-gray-200 transition"
                href="#">
                Selengkapnya <span class="material-icons text-sm ml-1">arrow_forward</span>
            </a>
        </div>
        <div class="grid md:grid-cols-2 gap-8">
            <div
                class="flex bg-white dark:bg-surface-dark rounded-xl overflow-hidden shadow hover:shadow-lg transition h-48">
                <div class="w-1/2 p-6 flex flex-col justify-center bg-gray-100 dark:bg-gray-800">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">Teknik Komputer &amp; Jaringan</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">Mempelajari infrastruktur jaringan dan
                        hardware...</p>
                </div>
                <div class="w-1/2 bg-gray-300 dark:bg-gray-700 relative">
                    <img alt="TKJ" class="absolute inset-0 w-full h-full object-cover"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDn2NcQI-jcH2CH5E5oFHyXOXfs4Fc8FDclMSjDBqy0gMW5GV-0b_Ls-IehJrD21jHM4qcbDIjUAERl7Lr-YMG2qwILybbQ8dUw2jFsZ8Gt-izSH5VMSZBC3rRqxEfRIIT13qs-5R6s-p0TE2T2Cd6q4Jatp73lojdjuwfem868yW-9jddPmyyoOXubwO81YGo0ntPtw84nWuAXv3nqHOZwOszhlaEdlXxxdaGuIIOdDn0TVZNYku6V3ypoDw27b1OTgfV0wWp1f6Sw" />
                </div>
            </div>
            <div
                class="flex bg-white dark:bg-surface-dark rounded-xl overflow-hidden shadow hover:shadow-lg transition h-48">
                <div class="w-1/2 p-6 flex flex-col justify-center bg-gray-100 dark:bg-gray-800">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">Otomatisasi Tata Kelola Perkantoran
                    </h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">Keahlian administrasi dan manajemen
                        perkantoran...</p>
                </div>
                <div class="w-1/2 bg-gray-300 dark:bg-gray-700 relative">
                    <img alt="OTKP" class="absolute inset-0 w-full h-full object-cover"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuB_jNarI90shseD2uF6hBp6uy496XLeOpRVTtziBi1u1eRXp6cDXbTp8tuq1pQD4zu7Xt6u1lb16OCNpCzdo44PaKw02PFvAeujoDWyDCEYtTMPaJxfosfyUG7niZxLkVGQX-NGlcB5cSA5X_cibtQoOOBklhqQVvUm3pB8nfyDdYptCrdjNrxo3PLoHvt2UwVxBDMeJtY-xeKhyemdklMjp4CoPVCQU68gul20AELOBHcyoo0xM1ycbjZSHhBZ0YDs84TZaAouHsw9" />
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white dark:bg-surface-dark py-16 mb-20">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-end mb-8">
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Fasilitas Sekolah</h2>
                    <p class="text-gray-600 dark:text-gray-400">Fasilitas sekolah yang kami miliki</p>
                </div>
                <a class="hidden sm:inline-flex items-center px-4 py-2 bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 rounded-full text-xs font-semibold text-gray-700 dark:text-gray-200 transition"
                    href="{{ route('fasilitas') }}">
                    Selengkapnya
                    <span class="material-icons text-sm ml-1">arrow_forward</span>
                </a>

            </div>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="flex bg-gray-50 dark:bg-gray-800 rounded-xl overflow-hidden h-48">
                    <div class="w-1/2 bg-gray-200 dark:bg-gray-700 relative">
                        <img alt="Lab Komputer" class="absolute inset-0 w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAkOvwsua9flYBC8zG-4gv1RUNazW_zyPR9nTBPk4iWPGuWnnIkdmOFSLKPmsTeuoSqIhd7WXzXZiiWJMTGsCHBHVgVW4wQpYh8zH4zWBvNm7knzduS_aPRULq6ndAVAIZ-NV1zG9CD-7EG4lk6SNuJc350eHCy94tA-NjuxSWc7gN15HxTOamh1_6CXwE4Ke255VvE7_xhbw6jO_UcV8v_eH65JViQjpm1Y6NKoXVUcvvzV-iLY7rmHTPMiTTJzT2hQ7ZL9cmCBFzM" />
                    </div>
                    <div class="w-1/2 p-6 flex items-center justify-center bg-gray-300 dark:bg-gray-600">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white text-center">Laboratorium Komputer
                        </h3>
                    </div>
                </div>
                <div class="flex bg-gray-50 dark:bg-gray-800 rounded-xl overflow-hidden h-48">
                    <div class="w-1/2 bg-gray-200 dark:bg-gray-700 relative">
                        <img alt="Perpustakaan" class="absolute inset-0 w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDaHr3WrgRzeE1SlsYgH2JOxni8qbWeW9bbmxmhudSBIYK2gqD8FQy67kY3VEGJBXFBE70wmALMqDBiyAbeIyh5vphmsFvgr2WI84ojwJZbqWm8TwudY6NcNvcqwrejI-riNjeoBEHVUdvVEzu7KN4m7vMU8I4nUsk9XLSdrtLHgOco9RvwXzoBnkXiVRU4V3m82NNH18EjiSYkiYM3uqImH_t7JJPFon8UHX-7sm0DYNRxOS_HTDzqm6I6ccJ7xfQXjRCUFjmKRnrF" />
                    </div>
                    <div class="w-1/2 p-6 flex items-center justify-center bg-gray-300 dark:bg-gray-600">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white text-center">Perpustakaan Digital
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <section class="container mx-auto px-4 mb-20">
        <div class="flex justify-between items-end mb-8">
            <div>
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Ekstrakulikuler</h2>
                <p class="text-gray-600 dark:text-gray-400">Ektrakulikuler yang ada di sekolah kami</p>
            </div>
           <a class="hidden sm:inline-flex items-center px-4 py-2 bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 rounded-full text-xs font-semibold text-gray-700 dark:text-gray-200 transition"
                    href="{{ route('ekstrakulikuler') }}">
                    Selengkapnya
                    <span class="material-icons text-sm ml-1">arrow_forward</span>
                </a>
        </div>
        <div class="grid md:grid-cols-2 gap-8">
            <div class="rounded-xl overflow-hidden shadow">
                <div class="h-48 bg-gray-100 dark:bg-gray-800 flex items-center justify-center relative">
                    <img alt="Basket" class="absolute inset-0 w-full h-full object-cover"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAkaXxZHFmeQ6TeZu17XUGxLoX9Kwt7VXpjMRgTz-L3rR8N_S2TPzeY-To-Sr7GnkUQs6QuSeZnYj3fqI62SUwL8fF3j73JHeGMD505CQnQFMkuGb9nKsXfZKiinoSyswDl0VN6yU-NqfxdzUO2UUZ63uvNGhhg84a88f9sipOJ6OrPnhOKaX4hVquNtu3F1WpT9Mng5cXPU9iTO0ls1cPeHEndAomkZLvTX2Tl5RcoKRRPID8GDeojU2oxXHxz-d_MhA8X8QMszxFW" />
                </div>
                <div class="bg-gray-200 dark:bg-gray-700 p-4 text-center">
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white">Basket</h3>
                </div>
            </div>
            <div class="rounded-xl overflow-hidden shadow">
                <div class="h-48 bg-gray-100 dark:bg-gray-800 flex items-center justify-center relative">
                    <img alt="Pramuka" class="absolute inset-0 w-full h-full object-cover"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCKzPVStPA0vtH1JFMbDbcyunXyaTVdDyhkvgJ7a_cjpD1ajqHOf06wjSGfSgmCWiYRQHNO-ll64DcWnVDeb8JwsHxpOpVqeFG-ihbvb9zXpE_1cyduykl-K1gi1fYaNTV8bkhWbHAjV-i99W2Pjf_lIHaNnPuyVTFkWrp761rkx_6ML4GUWfgaXmZUKJXkqZd3q1jCqhLUg-4N01yuGC2h2EaIjH76vX0XCJZTi5D8QuWDOtlHnmK6VCWvW4I7AOaNnlDEK2MMzUrN" />
                </div>
                <div class="bg-gray-200 dark:bg-gray-700 p-4 text-center">
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white">Pramuka</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white dark:bg-surface-dark py-16 mb-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Testimoni</h2>
                <p class="text-gray-600 dark:text-gray-400">Tesimoni Alumni mengenai sekolah kami</p>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-8 relative">
                    <span
                        class="material-icons text-6xl text-gray-200 dark:text-gray-700 absolute top-4 right-4">format_quote</span>
                    <div class="relative z-10">
                        <p class="text-gray-700 dark:text-gray-300 italic mb-8 min-h-[80px]">"Sekolah ini memberikan
                            fondasi yang sangat kuat bagi karir saya di dunia teknologi. Guru-gurunya sangat kompeten
                            dan fasilitasnya lengkap."</p>
                        <div class="border-t border-gray-200 dark:border-gray-700 pt-4 flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-gray-300 overflow-hidden">
                                <img alt="Alumni" class="w-full h-full object-cover"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDNXM1vhZWtIJy-oekTaE-HwZ8q1YNIVqwingTLJRuyJ_jm8VT2EC9TenGCsNytjZLYvR1nc--EaA0HsbLmauU2-BKPze9rnLIvpBRNiIfla4yyvWhAd9gwGi-uRnXDsigDBsmP8-eGmil3lYAaroGw-bgxMryJJeueQ4EAZKHY8uoT_lJWXDtsswddlQea1R-Lz1QFG_bSRY0V-5wYuJQGD0zExLhsBQfsAPkFaJSWyeRwd1X51l6swaK6ZODgRDtubY9p9Ynt0LG" />
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 dark:text-white">Rizky Ramadhan</h4>
                                <span class="text-xs text-gray-500 dark:text-gray-400">Angkatan 2020</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-8 relative">
                    <span
                        class="material-icons text-6xl text-gray-200 dark:text-gray-700 absolute top-4 right-4">format_quote</span>
                    <div class="relative z-10">
                        <p class="text-gray-700 dark:text-gray-300 italic mb-8 min-h-[80px]">"Pengalaman belajar yang
                            menyenangkan dan disiplin yang diterapkan membentuk karakter saya menjadi lebih baik."</p>
                        <div class="border-t border-gray-200 dark:border-gray-700 pt-4 flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-gray-300 overflow-hidden">
                                <img alt="Alumni" class="w-full h-full object-cover"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuD9yqJplvnPF02a_kibFYRO994h_gv34c0zOuKb1HWwDnqyyDUsWGRUs06plkzHb8S4HlRRFzR_B3AWbvsqgWQuqS3G2zGQf43bmV8_r7nHUqiga6s600L5qAf9kYUUIbj2PR-bQL6jdCffeec8w5i8YwDXrVVf4ZeOuzVpWUSuFjIiynB9QUMOehrED7i0wUhEMCvqM8I3uH4p8F5yaRs4KQxIC0JQcsjUyUJVcvHqsEs-YT4Zy5zQP0ELONy6pNCiAasWNxOhtgIl" />
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 dark:text-white">Siti Nurhaliza</h4>
                                <span class="text-xs text-gray-500 dark:text-gray-400">Angkatan 2019</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')
    
    <script>
        // Teacher Carousel
        document.addEventListener('DOMContentLoaded', function() {
            const teacherCarousel = document.getElementById('teacherCarousel');
            const teacherPrev = document.getElementById('teacherPrev');
            const teacherNext = document.getElementById('teacherNext');
            let teacherPosition = 0;
            const cardWidth = 288; // w-72 = 18rem = 288px
            const gap = 24; // gap-6 = 1.5rem = 24px
            
            teacherPrev.addEventListener('click', function() {
                const maxScroll = -(teacherCarousel.children.length - 1) * (cardWidth + gap);
                teacherPosition = Math.min(teacherPosition + cardWidth + gap, 0);
                teacherCarousel.style.transform = `translateX(${teacherPosition}px)`;
            });
            
            teacherNext.addEventListener('click', function() {
                const maxScroll = -(teacherCarousel.children.length - 1) * (cardWidth + gap);
                teacherPosition = Math.max(teacherPosition - cardWidth - gap, maxScroll);
                teacherCarousel.style.transform = `translateX(${teacherPosition}px)`;
            });
            
            // Staff Carousel
            const staffCarousel = document.getElementById('staffCarousel');
            const staffPrev = document.getElementById('staffPrev');
            const staffNext = document.getElementById('staffNext');
            let staffPosition = 0;
            
            staffPrev.addEventListener('click', function() {
                const maxScroll = -(staffCarousel.children.length - 1) * (cardWidth + gap);
                staffPosition = Math.min(staffPosition + cardWidth + gap, 0);
                staffCarousel.style.transform = `translateX(${staffPosition}px)`;
            });
            
            staffNext.addEventListener('click', function() {
                const maxScroll = -(staffCarousel.children.length - 1) * (cardWidth + gap);
                staffPosition = Math.max(staffPosition - cardWidth - gap, maxScroll);
                staffCarousel.style.transform = `translateX(${staffPosition}px)`;
            });
        });
    </script>
</body>

</html>