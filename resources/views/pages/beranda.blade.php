@extends('layouts.home')

@section('content')

 <section class="relative bg-gray-200 dark:bg-gray-800 h-[500px] flex items-center justify-center overflow-hidden">
    <!-- Slider Container -->
    <div class="relative w-full h-full">
        <!-- Slides -->
        <div class="slider-wrapper relative w-full h-full">
            <!-- Slide 1 -->
            <div class="slide absolute inset-0 w-full h-full transition-opacity duration-1000 opacity-100">
                <img alt="School Atmosphere" class="absolute inset-0 w-full h-full object-cover opacity-30 dark:opacity-20 img-hover"
                    src="{{ asset('beranda/Foto SMKN 1.jpeg') }}" />
                <div class="relative z-10 flex flex-col items-center justify-center h-full w-full px-6">
                    <div class="text-center max-w-4xl reveal">
                        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-6">Mewujudkan Generasi Unggul dan Berkarakter</h2>
                        <p class="text-lg text-gray-700 dark:text-gray-300">Selamat datang di website resmi SMK Negeri 1 Kawali. Pusat informasi dan layanan digital sekolah.</p>
                    </div>
                </div>
            </div>
            
            <!-- Slide 2 -->
            <div class="slide absolute inset-0 w-full h-full transition-opacity duration-1000 opacity-0">
                <img alt="Students Learning" class="absolute inset-0 w-full h-full object-cover opacity-30 dark:opacity-20 img-hover"
                    src="{{ asset('beranda/Foto SMKN 2.jpeg') }}" />
                <div class="relative z-10 flex flex-col items-center justify-center h-full w-full px-6">
                    <div class="text-center max-w-4xl reveal">
                        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-6">Pembelajaran Inovatif dan Berbasis Teknologi</h2>
                        <p class="text-lg text-gray-700 dark:text-gray-300">Kami menyediakan lingkungan belajar yang modern dengan fasilitas lengkap untuk mendukung pengembangan skill siswa.</p>
                    </div>
                </div>
            </div>
            
            <!-- Slide 3 -->
            <div class="slide absolute inset-0 w-full h-full transition-opacity duration-1000 opacity-0">
                <img alt="School Facilities" class="absolute inset-0 w-full h-full object-cover opacity-30 dark:opacity-20 img-hover"
                    src="{{ asset('beranda/Foto SMKN 3.jpeg') }}" />
                <div class="relative z-10 flex flex-col items-center justify-center h-full w-full px-6">
                    <div class="text-center max-w-4xl reveal">
                        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-6">Fasilitas Lengkap untuk Mendukung Prestasi</h2>
                        <p class="text-lg text-gray-700 dark:text-gray-300">Dari lab komputer hingga bengkel modern, kami menyediakan semua yang siswa butuhkan untuk unggul dalam bidangnya.</p>
                    </div>
                </div>
            </div>
            
             
             <div class="slide absolute inset-0 w-full h-full transition-opacity duration-1000 opacity-0">
                <img alt="Student Activities" class="absolute inset-0 w-full h-full object-cover opacity-30 dark:opacity-20"
                    src="https://picsum.photos/seed/smkn1kawali-activities/1920/1080.jpg" />
                <div class="relative z-10 flex flex-col items-center justify-center h-full w-full px-6">
                    <div class="text-center max-w-4xl">
                        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-6">Ekstrakurikuler untuk Pengembangan Diri</h2>
                        <p class="text-lg text-gray-700 dark:text-gray-400">Berbagai kegiatan ekstrakurikuler yang menarik untuk mengembangkan bakat dan minat siswa di luar jam pelajaran.</p>
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
            
            // Trigger reveal animation for current slide
            const revealElements = slides[index].querySelectorAll('.reveal');
            revealElements.forEach(el => {
                el.classList.add('active');
            });
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
        
        // Trigger initial reveal animation
        const initialRevealElements = slides[currentSlide].querySelectorAll('.reveal');
        initialRevealElements.forEach(el => {
            el.classList.add('active');
        });
    });
</script>
    <div class="container mx-auto px-4 -mt-24 relative z-20 mb-20">
        <div class="bg-white dark:bg-surface-dark rounded-xl shadow-xl p-8 flex flex-col lg:flex-row gap-8 lg:gap-12 reveal">
            <div
                class="lg:w-1/2 flex flex-col sm:flex-row items-center sm:items-start gap-6 border-b lg:border-b-0 lg:border-r border-gray-200 dark:border-gray-700 pb-8 lg:pb-0 lg:pr-8">
                <div class="shrink-0">
                    <div class="w-24 h-24 rounded-full bg-gray-300 dark:bg-gray-600 overflow-hidden shadow-inner img-hover">
                        <img alt="Kepala Sekolah" class="w-full h-full object-cover"
                            src="{{ asset('beranda/Foto Kepsek Kawali.jpg') }}">
                    </div>
                </div>
                <div class="w-full max-w-full">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2 break-words section-title">
                        {{ $beranda->judul ?? 'Sambutan Kepala Sekolah' }}
                    </h3>

                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed break-words whitespace-normal">
                        {{ $beranda->deskripsi ?? 'Belum ada sambutan.' }}
                    </p>
                </div>
            </div>
          <div class="grid grid-cols-3 text-center pl-6 lg:pl-8">
    <div class="px-6">
        <span class="block text-3xl font-bold text-primary counter" data-target="{{ $beranda->jumlah_siswa ?? 0 }}">
            0
        </span>
        <span class="text-xs text-gray-500 uppercase tracking-wide">Siswa</span>
    </div>

    <div class="px-6 border-l border-gray-200 dark:border-gray-700">
        <span class="block text-3xl font-bold text-primary counter" data-target="{{ $beranda->jumlah_guru ?? 0 }}">
            0
        </span>
        <span class="text-xs text-gray-500 uppercase tracking-wide">Guru</span>
    </div>

    <div class="px-6 border-l border-gray-200 dark:border-gray-700">
        <span class="block text-3xl font-bold text-primary counter" data-target="{{ $beranda->jumlah_jurusan ?? 0 }}">
            0
        </span>
        <span class="text-xs text-gray-500 uppercase tracking-wide">Jurusan</span>
    </div>
</div>
        </div>
    </div>
    <section class="container mx-auto px-4 mb-20 reveal">
        <div class="flex justify-between items-end mb-8">
            <div>
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-2 section-title">Agenda</h2>
                <p class="text-gray-600 dark:text-gray-400">Agenda kegiatan dan aktivitas sekolah yang akan datang</p>
            </div>
            <a class="hidden sm:inline-flex items-center px-4 py-2 bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 rounded-full text-xs font-semibold text-gray-700 dark:text-gray-200 transition link-underline"
                href="{{ route('agenda') }}">
                Selengkapnya <span class="material-icons text-sm ml-1">arrow_forward</span>
            </a>
        </div>
        <div class="grid md:grid-cols-2 gap-6">
            <div
                class="bg-white dark:bg-surface-dark rounded-lg shadow-md overflow-hidden border border-gray-100 dark:border-gray-700 hover:shadow-lg transition card-hover">
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
                class="bg-white dark:bg-surface-dark rounded-lg shadow-md overflow-hidden border border-gray-100 dark:border-gray-700 hover:shadow-lg transition card-hover">
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
    <section class="bg-white dark:bg-surface-dark py-16 mb-20 reveal">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-end mb-10">
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-2 section-title">Berita, Artikel &amp; Informasi
                    </h2>
                    <p class="text-gray-600 dark:text-gray-400">Berita, Artikel &amp; Informasi sekolah kami</p>
                </div>
                <a class="hidden sm:inline-flex items-center px-4 py-2 bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 rounded-full text-xs font-semibold text-gray-700 dark:text-gray-200 transition link-underline"
                    href="{{ route('artikel.index') }}">
                    Selengkapnya <span class="material-icons text-sm ml-1">arrow_forward</span>
                </a>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="group cursor-pointer card-hover" onclick="showDetailModal('berita', {
                    title: 'SMK Negeri 1 Kawali Membuka Acara Job Fair & Open House',
                    date: '10 Oktober 2023',
                    image: '{{ asset('beranda/Foto Berita 1.jpeg') }}',
                    content: 'SMK Negeri 1 Kawali sukses menyelenggarakan kegiatan Job Fair dan Open House sebagai wadah mempertemukan siswa dengan dunia industri. Acara ini dihadiri oleh lebih dari 20 perusahaan dari berbagai sektor industri yang menawarkan lowongan pekerjaan dan kesempatan magang bagi siswa kelas XII. Kegiatan ini juga menampilkan berbagai karya inovatif siswa dari berbagai jurusan yang menjadi daya tarik tersendiri bagi para pengunjung.'
                })">
                    <div class="h-64 bg-gray-300 dark:bg-gray-700 rounded-lg overflow-hidden mb-4 relative">
                        <img alt="Kegiatan Siswa"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-500 img-hover"
                            src="{{ asset('beranda/Foto Berita 1.jpeg') }}" />
                    </div>
                    <div class="flex flex-col">
                        <span class="text-sm text-primary font-semibold mb-1">10 Oktober 2023</span>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white group-hover:text-primary transition">
                            SMK Negeri 1 Kawali Membuka Acara Job Fair & Open House</h3>
                    <p class="text-gray-600 dark:text-gray-400 mt-2 line-clamp-2">
                        SMK Negeri 1 Kawali sukses menyelenggarakan kegiatan Job Fair dan Open House sebagai wadah mempertemukan siswa dengan dunia industri.
                    </p>

                    </div>
                </div>
                <div class="group cursor-pointer card-hover" onclick="showDetailModal('berita', {
                    title: 'Bulan Bahasa & Sastra Ajang Mencari Bakat',
                    date: '08 Oktober 2024',
                    image: '{{ asset('beranda/Foto Artikel 4.jpeg') }}',
                    content: 'Kegiatan Bulan Bahasa dan Sastra menjadi ajang pengembangan kreativitas serta pencarian bakat siswa dalam bidang bahasa, seni, dan sastra. Berbagai lomba diadakan seperti pidato, debat, puisi, cerpen, dan teater. Kegiatan ini bertujuan untuk meningkatkan kemampuan berbahasa siswa serta menumbuhkan rasa cinta terhadap bahasa dan sastra Indonesia. Acara ditutup dengan pentas seni yang menampilkan karya terbaik dari para pemenang lomba.'
                })">
                    <div class="h-64 bg-gray-300 dark:bg-gray-700 rounded-lg overflow-hidden mb-4 relative">
                        <img alt="Kegiatan Belajar"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-500 img-hover"
                            src="{{ asset('beranda/Foto Artikel 4.jpeg') }}" />
                    </div>
                    <div class="flex flex-col">
                        <span class="text-sm text-primary font-semibold mb-1">08 Oktober 2024</span>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white group-hover:text-primary transition">
                            Bulan Bahasa & Sastra Ajang Mencari Bakat</h3>
                    <p class="text-gray-600 dark:text-gray-400 mt-2 line-clamp-2">
                       Kegiatan Bulan Bahasa dan Sastra menjadi ajang pengembangan kreativitas serta pencarian bakat siswa dalam bidang bahasa, seni, dan sastra.
                    </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container mx-auto px-4 mb-20 reveal">
        <div class="flex justify-between items-end mb-8">
            <div>
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-2 section-title">Tenaga Pengajar</h2>
                <p class="text-gray-600 dark:text-gray-400">Guru Di SMK Negeri 1 Kawali</p>
            </div>
            <a class="hidden sm:inline-flex items-center px-4 py-2 bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 rounded-full text-xs font-semibold text-gray-700 dark:text-gray-200 transition link-underline"
                href="{{ route('tenagapengajar') }}">
                Selengkapnya <span class="material-icons text-sm ml-1">arrow_forward</span>
            </a>
        </div>
        
        <!-- Teacher Section -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

    <!-- Teacher Card 1 -->
    <div class="bg-white dark:bg-surface-dark rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 card-hover">
        <div class="h-64 bg-gray-200 dark:bg-gray-700 overflow-hidden">
            <img alt="Teacher"
                class="w-full h-full object-cover"
                src="{{ asset('beranda/Guru 1.jpeg') }}" />
        </div>
        <div class="p-6 text-center">
            <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-1">
                Teti Novianti,S.Pd.
            </h4>
            <p class="text-primary text-sm">Bahasa Inggris</p>
        </div>
    </div>

    <!-- Teacher Card 2 -->
    <div class="bg-white dark:bg-surface-dark rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 card-hover">
        <div class="h-64 bg-gray-200 dark:bg-gray-700 overflow-hidden">
            <img alt="Teacher"
                class="w-full h-full object-cover"
                src="{{ asset('beranda/Guru 2.jpeg') }}" />
        </div>
        <div class="p-6 text-center">
            <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-1">
                Abu Bakar,S.T.
            </h4>
            <p class="text-primary text-sm">DDPK</p>
        </div>
    </div>

    <!-- Teacher Card 3 -->
    <div class="bg-white dark:bg-surface-dark rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 card-hover">
        <div class="h-64 bg-gray-200 dark:bg-gray-700 overflow-hidden">
            <img alt="Teacher"
                class="w-full h-full object-cover"
                src="{{ asset('beranda/Guru 3.jpeg') }}" />
        </div>
        <div class="p-6 text-center">
            <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-1">
                Irma Sri Suryantini,S.Pd.
            </h4>
            <p class="text-primary text-sm">
                Projek Ilmu Pengetahuan Alam & Sosial
            </p>
        </div>
    </div>

    <!-- Teacher Card 4 -->
    <div class="bg-white dark:bg-surface-dark rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 card-hover">
        <div class="h-64 bg-gray-200 dark:bg-gray-700 overflow-hidden">
            <img alt="Teacher"
                class="w-full h-full object-cover"
                src="{{ asset('beranda/Guru 4.jpeg') }}" />
        </div>
        <div class="p-6 text-center">
            <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-1">
                Farid Ma'ruf,M.Pd.
            </h4>
            <p class="text-primary text-sm">Bahasa Indonesia</p>
        </div>
    </div>

</div>

    <!-- Teacher Card 5 (jika diperlukan) -->
    {{-- <div class="bg-white dark:bg-surface-dark rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
        <div class="h-64 bg-gray-200 dark:bg-gray-700 overflow-hidden">
            <img alt="Teacher" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
                src="https://picsum.photos/seed/teacher5/400/500.jpg" />
        </div>
        <div class="p-6 text-center">
            <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-1">Dewi Lestari, S.Pd</h4>
            <p class="text-primary text-sm">Bahasa Inggris</p>
        </div>
    </div> --}}
</div>
    </section>
    <section class="bg-white dark:bg-surface-dark py-16 mb-20 reveal">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-end mb-8">
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-2 section-title">Staff Kependidikan</h2>
                    <p class="text-gray-600 dark:text-gray-400">Staff Kependidikan Di SMK Negeri 1 Kawali</p>
                </div>
                <a class="hidden sm:inline-flex items-center px-4 py-2 bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 rounded-full text-xs font-semibold text-gray-700 dark:text-gray-200 transition link-underline"
                    href="{{ route('staffkependidikan') }}">
                    Selengkapnya
                    <span class="material-icons text-sm ml-1">arrow_forward</span>
            </a>
            </div>
           <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
    <!-- Teacher Card 1 -->
      <div class="bg-white dark:bg-surface-dark rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 card-hover">
        <div class="h-64 bg-gray-200 dark:bg-gray-700 overflow-hidden">
            <img alt="Teacher" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300 img-hover"
                src="{{ asset('beranda/Staff TU 1.jpeg') }}" />
        </div>
        <div class="p-6 text-center">
            <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-1">Elin Herlina,S.Sos.</h4>
            <p class="text-primary text-sm">Tata Usaha</p>
        </div>
    </div>
    
    <!-- Teacher Card 2 -->
    <div class="bg-white dark:bg-surface-dark rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 card-hover">
        <div class="h-64 bg-gray-200 dark:bg-gray-700 overflow-hidden">
            <img alt="Teacher" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300 img-hover"
                src="{{ asset('beranda/Staff TU 3.jpeg') }}" />
        </div>
        <div class="p-6 text-center">
            <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-1">Sayidina Ali Ade Mahendra,A.Md.</h4>
            <p class="text-primary text-sm">Tool Man</p>
        </div>
    </div>
    
    <!-- Teacher Card 3 -->
   <div class="bg-white dark:bg-surface-dark rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 card-hover">
        <div class="h-64 bg-gray-200 dark:bg-gray-700 overflow-hidden">
            <img alt="Teacher" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300 img-hover"
                src="{{ asset('beranda/Staff TU 2.jpeg') }}" />
        </div>
        <div class="p-6 text-center">
            <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-1">Ani Karlina,S.I.Pust.</h4>
            <p class="text-primary text-sm">Pustakawan</p>
        </div>
    </div>
    
    <!-- Teacher Card 4 -->
    <div class="bg-white dark:bg-surface-dark rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 card-hover">
        <div class="h-64 bg-gray-200 dark:bg-gray-700 overflow-hidden">
            <img alt="Teacher" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300 img-hover"
                src="{{ asset('beranda/Staff TU 4.jpeg') }}" />
        </div>
        <div class="p-6 text-center">
            <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-1">Maman Hilman</h4>
            <p class="text-primary text-sm">Tata Usaha</p>
        </div>
    </div>
</div>

        </div>
    </section>
    <section class="container mx-auto px-4 mb-20 reveal">
        <div class="flex justify-between items-end mb-8">
            <div>
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-2 section-title">Program Keahlian</h2>
                <p class="text-gray-600 dark:text-gray-400">Program Keahlian yang terdapat di sekolah kami</p>
            </div>
            <a class="hidden sm:inline-flex items-center px-4 py-2 bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 rounded-full text-xs font-semibold text-gray-700 dark:text-gray-200 transition link-underline"
                href="{{ route('jurusan') }}">
                Selengkapnya <span class="material-icons text-sm ml-1">arrow_forward</span>
            </a>
        </div>
        <div class="grid md:grid-cols-2 gap-8">
            <div
                class="flex bg-white dark:bg-surface-dark rounded-xl overflow-hidden shadow hover:shadow-lg transition h-48 card-hover cursor-pointer" onclick="showDetailModal('jurusan', {
                    title: 'Teknik Jaringan, Komputer & Telekomunikasi',
                    description: 'Mempelajari instalasi, konfigurasi, dan pemeliharaan jaringan komputer serta sistem telekomunikasi.',
                    image: '{{ asset('beranda/Jurusan Tjkt.jpeg') }}',
                    detail: 'Program keahlian Teknik Jaringan, Komputer & Telekomunikasi (TJKT) dirancang untuk mempersiapkan siswa menjadi tenaga ahli madya di bidang jaringan komputer dan telekomunikasi. Siswa akan belajar tentang instalasi jaringan, konfigurasi router dan switch, keamanan jaringan, sistem operasi jaringan, dan teknologi telekomunikasi. Lulusan program ini memiliki prospek kerja sebagai network administrator, network engineer, technical support, dan telecommunication specialist.'
                })">
                <div class="w-1/2 p-6 flex flex-col justify-center bg-gray-100 dark:bg-gray-800">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">Teknik Jaringan, Komputer &amp; Telekomunikasi</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-2"> Mempelajari instalasi, konfigurasi, dan pemeliharaan jaringan komputer serta sistem telekomunikasi.</p>
                </div>
                <div class="w-1/2 bg-gray-300 dark:bg-gray-700 relative">
                    <img alt="TKJ" class="absolute inset-0 w-full h-full object-cover img-hover"
                        src="{{ asset('beranda/Jurusan Tjkt.jpeg') }}" />
                </div>
            </div>
            <div
                class="flex bg-white dark:bg-surface-dark rounded-xl overflow-hidden shadow hover:shadow-lg transition h-48 card-hover cursor-pointer" onclick="showDetailModal('jurusan', {
                    title: 'Pengembangan Perangkat Lunak & Gim',
                    description: 'Mempelajari pembuatan aplikasi, website, dan gim, serta pengelolaan sistem perangkat lunak berbasis teknologi digital.',
                    image: '{{ asset('beranda/Jurusan PPLG.jpeg') }}',
                    detail: 'Program keahlian Pengembangan Perangkat Lunak & Gim (PPLG) mempersiapkan siswa menjadi programmer dan developer handal. Siswa akan mempelajari bahasa pemrograman seperti HTML, CSS, JavaScript, PHP, Python, dan C++. Selain itu, siswa juga akan belajar tentang basis data, framework web, pengembangan aplikasi mobile, dan pengembangan gim. Lulusan program ini dapat berkarir sebagai web developer, mobile app developer, game developer, software engineer, dan database administrator.'
                })">
                <div class="w-1/2 p-6 flex flex-col justify-center bg-gray-100 dark:bg-gray-800">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">Pengembangan Perangkat Lunak &amp; Gim
                    </h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">Mempelajari pembuatan aplikasi, website, dan gim, serta pengelolaan sistem perangkat lunak berbasis teknologi digital.</p>
                </div>
                <div class="w-1/2 bg-gray-300 dark:bg-gray-700 relative">
                    <img alt="OTKP" class="absolute inset-0 w-full h-full object-cover img-hover"
                        src="{{ asset('beranda/Jurusan PPLG.jpeg') }}" />
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white dark:bg-surface-dark py-16 mb-20 reveal">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-end mb-8">
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-2 section-title">Fasilitas Sekolah</h2>
                    <p class="text-gray-600 dark:text-gray-400">Fasilitas sekolah yang kami miliki</p>
                </div>
                <a class="hidden sm:inline-flex items-center px-4 py-2 bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 rounded-full text-xs font-semibold text-gray-700 dark:text-gray-200 transition link-underline"
                    href="{{ route('fasilitas') }}">
                    Selengkapnya
                    <span class="material-icons text-sm ml-1">arrow_forward</span>
                </a>

            </div>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="flex bg-gray-50 dark:bg-gray-800 rounded-xl overflow-hidden h-48 card-hover cursor-pointer" onclick="showDetailModal('fasilitas', {
                    title: 'Laboratorium Jaringan & Telekomunikasi',
                    image: '{{ asset('beranda/Lab.jpeg') }}',
                    description: 'Laboratorium lengkap dengan peralatan jaringan modern untuk praktikum siswa.',
                    detail: 'Laboratorium Jaringan & Telekomunikasi dilengkapi dengan 30 unit komputer spek tinggi, router, switch, access point, dan peralatan jaringan lainnya. Laboratorium ini digunakan untuk praktikum mata pelajaran Teknik Jaringan, Komputer & Telekomunikasi. Siswa dapat melakukan simulasi jaringan, konfigurasi perangkat jaringan, dan troubleshooting masalah jaringan. Laboratorium juga terhubung dengan internet berkecepatan tinggi untuk mendukung pembelajaran.'
                })">
                    <div class="w-1/2 bg-gray-200 dark:bg-gray-700 relative">
                        <img alt="Lab Komputer" class="absolute inset-0 w-full h-full object-cover img-hover"
                            src="{{ asset('beranda/Lab.jpeg') }}" />
                    </div>
                    <div class="w-1/2 p-6 flex items-center justify-center bg-gray-300 dark:bg-gray-600">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white text-center">Laboratorium Jaringan & Telekomunikasi
                        </h3>
                    </div>
                </div>
                <div class="flex bg-gray-50 dark:bg-gray-800 rounded-xl overflow-hidden h-48 card-hover cursor-pointer" onclick="showDetailModal('fasilitas', {
                    title: 'Perpustakaan',
                    image: '{{ asset('beranda/Perpustakaan.jpeg') }}',
                    description: 'Perpustakaan modern dengan koleksi buku lengkap dan fasilitas digital.',
                    detail: 'Perpustakaan sekolah memiliki koleksi lebih dari 10.000 judul buku dari berbagai bidang ilmu. Selain buku fisik, tersedia juga e-book dan jurnal ilmiah yang dapat diakses secara online. Perpustakaan dilengkapi dengan 20 unit komputer untuk akses digital library, ruang baca yang nyaman, dan area diskusi kelompok. Jam operasional perpustakaan adalah Senin-Jumat pukul 07.30-16.00.'
                })">
                    <div class="w-1/2 bg-gray-200 dark:bg-gray-700 relative">
                        <img alt="Perpustakaan" class="absolute inset-0 w-full h-full object-cover img-hover"
                            src="{{ asset('beranda/Perpustakaan.jpeg') }}" />
                    </div>
                    <div class="w-1/2 p-6 flex items-center justify-center bg-gray-300 dark:bg-gray-600">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white text-center">Perpustakaan 
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <section class="container mx-auto px-4 mb-20 reveal">
        <div class="flex justify-between items-end mb-8">
            <div>
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-2 section-title">Ekstrakulikuler</h2>
                <p class="text-gray-600 dark:text-gray-400">Ektrakulikuler yang ada di sekolah kami</p>
            </div>
           <a class="hidden sm:inline-flex items-center px-4 py-2 bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 rounded-full text-xs font-semibold text-gray-700 dark:text-gray-200 transition link-underline"
                    href="{{ route('ekstrakulikuler') }}">
                    Selengkapnya
                    <span class="material-icons text-sm ml-1">arrow_forward</span>
                </a>
        </div>
        <div class="grid md:grid-cols-2 gap-8">
            <div class="rounded-xl overflow-hidden shadow card-hover cursor-pointer" onclick="showDetailModal('ekstrakurikuler', {
                title: 'Paskibra',
                image: '{{ asset('beranda/Ekstra 1.jpeg') }}',
                description: 'Ekstrakurikuler baris berbaris dan pengibaran bendera.',
                detail: 'Paskibra SMK Negeri 1 Kawali adalah ekstrakurikuler yang fokus pada latihan baris berbaris, pengibaran bendera, dan pembinaan karakter disiplin. Anggota Paskibra rutin mengikuti berbagai kegiatan seperti upacara bendera rutin setiap Senin, peringatan hari besar nasional, dan kompetisi Paskibra tingkat kabupaten dan provinsi. Latihan dilaksanakan setiap hari Selasa dan Kamis pukul 15.30-17.00 di lapangan sekolah.'
            })">
                <div class="h-48 bg-gray-100 dark:bg-gray-800 flex items-center justify-center relative">
                    <img alt="Paskibra" class="absolute inset-0 w-full h-full object-cover img-hover"
                        src="{{ asset('beranda/Ekstra 1.jpeg') }}" />
                </div>
                <div class="bg-gray-200 dark:bg-gray-700 p-4 text-center">
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white">Paskibra</h3>
                </div>
            </div>
            <div class="rounded-xl overflow-hidden shadow card-hover cursor-pointer" onclick="showDetailModal('ekstrakurikuler', {
                title: 'Pramuka',
                image: '{{ asset('beranda/Ekstra 2.jpeg') }}',
                description: 'Ekstrakurikuler kepramukaan dengan berbagai kegiatan menarik.',
                detail: 'Pramuka SMK Negeri 1 Kawali memiliki gugus depan yang aktif dengan berbagai kegiatan rutin seperti perkemahan Sabtu-Minggu (Persami), jambore, lomba tingkat, dan kegiatan sosial kemasyarakatan. Anggota Pramuka juga dilatih berbagai keterampilan seperti navigasi, P3K, survival, dan teknik berkemah. Pertemuan rutin dilaksanakan setiap hari Jumat pukul 15.30-17.00 di basecamp Pramuka sekolah.'
            })">
                <div class="h-48 bg-gray-100 dark:bg-gray-800 flex items-center justify-center relative">
                    <img alt="Pramuka" class="absolute inset-0 w-full h-full object-cover img-hover"
                        src="{{ asset('beranda/Ekstra 2.jpeg') }}" />
                </div>
                <div class="bg-gray-200 dark:bg-gray-700 p-4 text-center">
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white">Pramuka</h3>
                </div>
            </div>
        </div>
    </section>
   <section class="bg-white dark:bg-surface-dark py-16 mb-20 reveal">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-2 section-title">Testimoni Alumni</h2>
            <p class="text-gray-600 dark:text-gray-400">Kisah sukses dan pengalaman alumni mengenai sekolah kami</p>
        </div>

        <!-- SLIDER CONTAINER -->
        <div class="flex overflow-x-auto snap-x snap-mandatory gap-8 pb-8 scroll-smooth no-scrollbar">
            
            <!-- CARD 1: Tarisha (Asli) -->
            <div class="flex-shrink-0 w-full md:w-[calc(50%-1rem)] snap-start bg-gray-50 dark:bg-gray-800 rounded-xl p-8 relative card-hover cursor-pointer"
                onclick="showDetailModal('testimoni', {
                    name: 'Tarisha Oktaviani Hermansyah',
                    angkatan: 'Angkatan 2023',
                    image: 'ak9.jpeg',
                    testimoni: 'Selama menjalani pendidikan di SMKN 1 Kawali, saya menemukan banyak ruang untuk belajar dan bertumbuh di lingkungan yang positif. Sekolah memberi saya kesempatan untuk mencoba berbagai hal baru serta dukungan saat saya mengikuti berbagai organisasi dan perlombaan FIKSI, sehingga saya dapat mengenal potensi diri, belajar berproses, dan membangun kepercayaan diri. Melalui proses tersebut, saya juga dibekali ilmu yang praktis untuk diaplikasikan di dunia kerja, dilatih dalam pembentukan karakter, kedisiplinan, dan kepemimpinan, serta bertumbuh dalam bidang komunikasi (pageant) yang menjadi bagian penting dari perjalanan saya hingga saat ini.',
                    pekerjaan: 'Putri Hijab Influencer 2025',
                    pesan: 'Teruslah belajar dan jangan pernah berhenti berkarya. Ilmu yang didapat di SMKN 1 Kawali adalah bekal terbaik untuk masa depan.'
                })">
                <span class="material-icons text-6xl text-gray-200 dark:text-gray-700 absolute top-4 right-4">format_quote</span>
                <div class="relative z-10">
                    <p class="text-gray-700 dark:text-gray-300 italic mb-8">"Selama menjalani pendidikan di SMKN 1 Kawali, saya menemukan banyak ruang untuk belajar dan bertumbuh di lingkungan yang positif. Sekolah memberi saya kesempatan untuk mencoba berbagai hal baru serta dukungan saat saya mengikuti berbagai organisasi dan perlombaan FIKSI, sehingga saya dapat mengenal potensi diri, belajar berproses, dan membangun kepercayaan diri. Melalui proses tersebut, saya juga dibekali ilmu yang praktis untuk diaplikasikan di dunia kerja, dilatih dalam pembentukan karakter, kedisiplinan, dan kepemimpinan, serta bertumbuh dalam bidang komunikasi (pageant) yang menjadi bagian penting dari perjalanan saya hingga saat ini."</p>
                    <div class="border-t border-gray-200 dark:border-gray-700 pt-4 flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-gray-300 overflow-hidden">
                            <img alt="Alumni" class="w-full h-full object-cover img-hover" src="ak9.jpeg" />
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 dark:text-white">Tarisha Oktaviani Hermansyah</h4>
                            <span class="text-xs text-gray-500 dark:text-gray-400">Alumni Tahun 2023</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARD 2: Amri (Asli) -->
            <div class="flex-shrink-0 w-full md:w-[calc(50%-1rem)] snap-start bg-gray-50 dark:bg-gray-800 rounded-xl p-8 relative card-hover cursor-pointer"
                onclick="showDetailModal('testimoni', {
                    name: 'Amri Fadhillah Febriana',
                    angkatan: 'Angkatan 2025',
                    image: 'amri.jpeg',
                    testimoni: 'Selama menjalani pendidikan di SMK Negeri 1 Kawali, saya tak hanya diberikan pengetahuan secara teori saja, namun saya diberikan ilmu praktis untuk mengaplikasikannya di dunia kerja. Tak hanya itu, SMK Negeri 1 Kawali juga memberikan kesempatan dan ruang bagi saya untuk berorganisasi, sehingga saya dapat membentuk karakter, kedisiplinan, dan kepemimpinan yang tentunya akan sangat bermanfaat ketika lulus nanti.',
                    pekerjaan: 'Mahasiswa Universitas Terbuka',
                    pesan: 'Manfaatkan sebaik-baiknya fasilitas yang ada.'
                })">
                <span class="material-icons text-6xl text-gray-200 dark:text-gray-700 absolute top-4 right-4">format_quote</span>
                <div class="relative z-10">
                    <p class="text-gray-700 dark:text-gray-300 italic mb-8">"Selama menjalani pendidikan di SMK Negeri 1 Kawali, saya tak hanya diberikan pengetahuan secara teori saja, namun saya diberikan ilmu praktis untuk mengaplikasikannya di dunia kerja. Tak hanya itu, SMK Negeri 1 Kawali juga memberikan kesempatan dan ruang bagi saya untuk berorganisasi, sehingga saya dapat membentuk karakter, kedisiplinan, dan kepemimpinan yang tentunya akan sangat bermanfaat ketika lulus nanti."</p>
                    <div class="border-t border-gray-200 dark:border-gray-700 pt-4 flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-gray-300 overflow-hidden">
                            <img alt="Alumni" class="w-full h-full object-cover img-hover" src="amri.jpeg" />
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 dark:text-white">Amri Fadhillah Febriana</h4>
                            <span class="text-xs text-gray-500 dark:text-gray-400">Alumni Tahun 2025</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARD 3: Dummy 1 (Dengan Pop Up) -->
            <div class="flex-shrink-0 w-full md:w-[calc(50%-1rem)] snap-start bg-gray-50 dark:bg-gray-800 rounded-xl p-8 relative card-hover cursor-pointer"
                onclick="showDetailModal('testimoni', {
                    name: 'Diki Agistya',
                    angkatan: 'Alumni Tahun 2024',
                    image: 'diki.jpg',
                    testimoni: 'Belajar di SMK ini adalah keputusan terbaik saya. Di sini, saya tidak hanya dijejali teori di kelas, tapi langsung diajarkan skill yang relevan sama dunia kerja.Suasananya kekeluargaan banget, tapi tetap profesional. Guru-gurunya sabar dan up-to-date sama perkembangan industri. Mereka nggak cuma ngajar mata pelajaran, tapi juga soft skills yang krusial. Yang paling penting, mental saya ditempa jadi lebih disiplin, mandiri, dan siap menghadapi tantangan nyata setelah lulus nanti , WALAU PUN ujung nya saya bekerja tidak sesuai jurusan saya , TAPI semua hal yang telah di ajarkan terutama hal beetanggung jawab itu sangat terpakai di pekerjaan.',
                    pekerjaan: 'AKANESHIN co.ltd',
                    pesan: 'Jangan takut mencoba hal baru.'
                })">
                <span class="material-icons text-6xl text-gray-200 dark:text-gray-700 absolute top-4 right-4">format_quote</span>
                <div class="relative z-10">
                    <p class="text-gray-700 dark:text-gray-300 italic mb-8">"Belajar di SMK ini adalah keputusan terbaik saya. Di sini, saya tidak hanya dijejali teori di kelas, tapi langsung diajarkan skill yang relevan sama dunia kerja.Suasananya kekeluargaan banget, tapi tetap profesional. Guru-gurunya sabar dan up-to-date sama perkembangan industri. Mereka nggak cuma ngajar mata pelajaran, tapi juga soft skills yang krusial. Yang paling penting, mental saya ditempa jadi lebih disiplin, mandiri, dan siap menghadapi tantangan nyata setelah lulus nanti , WALAU PUN ujung nya saya bekerja tidak sesuai jurusan saya , TAPI semua hal yang telah di ajarkan terutama hal beetanggung jawab itu sangat terpakai di pekerjaan."</p>
                    <div class="border-t border-gray-200 dark:border-gray-700 pt-4 flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-gray-300 overflow-hidden">
                            <img alt="Alumni" class="w-full h-full object-cover img-hover" src="diki.jpg" />
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 dark:text-white">Diki Agistya</h4>
                            <span class="text-xs text-gray-500 dark:text-gray-400">Alumni Tahun 2024</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARD 4: Dummy 2 (Dengan Pop Up) -->
            <div class="flex-shrink-0 w-full md:w-[calc(50%-1rem)] snap-start bg-gray-50 dark:bg-gray-800 rounded-xl p-8 relative card-hover cursor-pointer"
                onclick="showDetailModal('testimoni', {
                    name: 'Lelita Puspita Sari',
                    angkatan: 'Alumni Tahun 2025',
                    image: 'lelita.jpeg,
                    testimoni: 'sebagai alumni SMKN 1 Kawali, saya merasa bangga pernah menjadi bagian dari sekolah ini. selama menempuh pendidikan, saya tidak hanya dibekali pengetahuan akademik, tetapi juga keterampilan praktis, kedisiplinan, dan etos kerja yang sangat berguna di dunia kerja.  Lingkungan belajar yang kondusif, guru yang kompeten, serta pembelajaran berbasis praktik membantu saya menjadi pribadi yang lebih mandiri, bertanggung jawab, dan profesional. Bekal yang saya peroleh dari SMKN 1 Kawali menjadi pondasi penting dalam perjalanan karis saya hingga saat ini.',
                    pekerjaan: 'PT. Yamaha Music Manufacturing Asia',
                    pesan: 'Kembangkan kreativitasmu.'
                })">
                <span class="material-icons text-6xl text-gray-200 dark:text-gray-700 absolute top-4 right-4">format_quote</span>
                <div class="relative z-10">
                    <p class="text-gray-700 dark:text-gray-300 italic mb-8">"sebagai alumni SMKN 1 Kawali, saya merasa bangga pernah menjadi bagian dari sekolah ini. selama menempuh pendidikan, saya tidak hanya dibekali pengetahuan akademik, tetapi juga keterampilan praktis, kedisiplinan, dan etos kerja yang sangat berguna di dunia kerja.  Lingkungan belajar yang kondusif, guru yang kompeten, serta pembelajaran berbasis praktik membantu saya menjadi pribadi yang lebih mandiri, bertanggung jawab, dan profesional. Bekal yang saya peroleh dari SMKN 1 Kawali menjadi pondasi penting dalam perjalanan karis saya hingga saat ini."</p>
                    <div class="border-t border-gray-200 dark:border-gray-700 pt-4 flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-gray-300 overflow-hidden">
                            <img alt="Alumni" class="w-full h-full object-cover img-hover" src="lelita.jpeg" />
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 dark:text-white">Lelita Puspita Sari</h4>
                            <span class="text-xs text-gray-500 dark:text-gray-400">Alumni Tahun 2025</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARD 5: Dummy 3 (Dengan Pop Up) -->
            <div class="flex-shrink-0 w-full md:w-[calc(50%-1rem)] snap-start bg-gray-50 dark:bg-gray-800 rounded-xl p-8 relative card-hover cursor-pointer"
                onclick="showDetailModal('testimoni', {
                    name: 'Indar Sri Royani',
                    angkatan: 'Alumni Tahun 2025',
                    image: 'indar.jpeg',
                    testimoni: 'Saya bangga menjadi alumni SMKN 1 Kawali karena sekolah ini memberikan banyak pengalaman dan pembelajaran berharga. Selama bersekolah, saya berkesempatan mengikuti lomba hingga tingkat nasional, yang menjadi pengalaman luar biasa dan mengantarkan saya mendapatkan beasiswa saat melanjutkan ke perguruan tinggi. Semua itu menjadi bekal penting untuk masa depan saya.',
                    pekerjaan: 'Mahasiswa Universitas Islam Darussalam',
                    pesan: 'Manfaatkan fasilitas sekolah sebaik mungkin.'
                })">
                <span class="material-icons text-6xl text-gray-200 dark:text-gray-700 absolute top-4 right-4">format_quote</span>
                <div class="relative z-10">
                    <p class="text-gray-700 dark:text-gray-300 italic mb-8">"Saya bangga menjadi alumni SMKN 1 Kawali karena sekolah ini memberikan banyak pengalaman dan pembelajaran berharga. Selama bersekolah, saya berkesempatan mengikuti lomba hingga tingkat nasional, yang menjadi pengalaman luar biasa dan mengantarkan saya mendapatkan beasiswa saat melanjutkan ke perguruan tinggi. Semua itu menjadi bekal penting untuk masa depan saya."</p>
                    <div class="border-t border-gray-200 dark:border-gray-700 pt-4 flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-gray-300 overflow-hidden">
                            <img alt="Alumni" class="w-full h-full object-cover img-hover" src="indar.jpeg" />
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 dark:text-white">Indar Sri Royani</h4>
                            <span class="text-xs text-gray-500 dark:text-gray-400">Alumni Tahun 2025</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }
    .no-scrollbar {
        -ms-overflow-style: none; 
        scrollbar-width: none; 
    }
</style>

    <!-- Mitra & Sponsor Section dengan Manual Drag Slider -->
<section class="bg-gray-50 dark:bg-gray-900 py-16 mb-20 reveal">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-2 section-title">Mitra & Sponsor</h2>
            <p class="text-gray-600 dark:text-gray-400">Berbagai industri dan institusi yang bekerjasama dengan kami</p>
        </div>

        <!-- Container untuk Slider -->
        <div id="sliderContainer" class="relative cursor-grab active:cursor-grabbing select-none">
            <!-- Viewport Slider (area yang terlihat) -->
            <div class="overflow-hidden">
                <!-- Track Slider (area yang bergerak) -->
                <div id="sliderTrack" class="flex transition-transform duration-300 ease-out">
                    <!-- Sponsor 1 -->
                    <div class="flex-shrink-0 w-1/2 md:w-1/4 px-3">
                        <div class="flex items-center justify-center h-24 bg-white dark:bg-surface-dark rounded-xl shadow-sm hover:shadow-md transition-all duration-300 p-4 grayscale hover:grayscale-0 opacity-70 hover:opacity-100 border border-gray-100 dark:border-gray-700">
                            <img src="ino1.png" class="h-12 object-contain" alt="Partner 1">
                        </div>
                    </div>
                    <!-- Sponsor 2 -->
                    <div class="flex-shrink-0 w-1/2 md:w-1/4 px-3">
                        <div class="flex items-center justify-center h-24 bg-white dark:bg-surface-dark rounded-xl shadow-sm hover:shadow-md transition-all duration-300 p-4 grayscale hover:grayscale-0 opacity-70 hover:opacity-100 border border-gray-100 dark:border-gray-700">
                            <img src="TKJ Skyline.png" class="h-12 object-contain" alt="Partner 2">
                        </div>
                    </div>
                    <!-- Sponsor 3 -->
                    <div class="flex-shrink-0 w-1/2 md:w-1/4 px-3">
                        <div class="flex items-center justify-center h-24 bg-white dark:bg-surface-dark rounded-xl shadow-sm hover:shadow-md transition-all duration-300 p-4 grayscale hover:grayscale-0 opacity-70 hover:opacity-100 border border-gray-100 dark:border-gray-700">
                            <img src="TKR Daihatsu.png" class="h-12 object-contain" alt="Partner 3">
                        </div>
                    </div>
                    <!-- Sponsor 4 -->
                    <div class="flex-shrink-0 w-1/2 md:w-1/4 px-3">
                        <div class="flex items-center justify-center h-24 bg-white dark:bg-surface-dark rounded-xl shadow-sm hover:shadow-md transition-all duration-300 p-4 grayscale hover:grayscale-0 opacity-70 hover:opacity-100 border border-gray-100 dark:border-gray-700">
                            <img src="AKL BTN.png" class="h-12 object-contain" alt="Partner 4">
                        </div>
                    </div>
                    <!-- Dummy Sponsor 5 -->
                    <div class="flex-shrink-0 w-1/2 md:w-1/4 px-3">
                        <div class="flex items-center justify-center h-24 bg-white dark:bg-surface-dark rounded-xl shadow-sm hover:shadow-md transition-all duration-300 p-4 grayscale hover:grayscale-0 opacity-70 hover:opacity-100 border border-gray-100 dark:border-gray-700">
                            <img src="SP Sanggar Seni.jpeg" alt="Partner 5">
                        </div>
                    </div>
                    <!-- Dummy Sponsor 6 -->
                    <div class="flex-shrink-0 w-1/2 md:w-1/4 px-3">
                        <div class="flex items-center justify-center h-24 bg-white dark:bg-surface-dark rounded-xl shadow-sm hover:shadow-md transition-all duration-300 p-4 grayscale hover:grayscale-0 opacity-70 hover:opacity-100 border border-gray-100 dark:border-gray-700">
                            <img src="MP POS.png" class="h-12 object-contain" alt="Partner 6">
                        </div>
                    </div>
                    <!-- Dummy Sponsor 7 -->
                    <div class="flex-shrink-0 w-1/2 md:w-1/4 px-3">
                        <div class="flex items-center justify-center h-24 bg-white dark:bg-surface-dark rounded-xl shadow-sm hover:shadow-md transition-all duration-300 p-4 grayscale hover:grayscale-0 opacity-70 hover:opacity-100 border border-gray-100 dark:border-gray-700">
                            <img src="DPIB Technoskill.png" class="h-12 object-contain" alt="Partner 7">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- JavaScript untuk Manual Drag Slider -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const track = document.getElementById('sliderTrack');
        const container = document.getElementById('sliderContainer');
        
        const totalCards = track.children.length;
        
        // Responsif: tentukan jumlah kartu yang terlihat
        let cardsPerSlide = 4;
        if (window.innerWidth < 768) {
            cardsPerSlide = 2;
        }

        let currentIndex = 0;
        let isDragging = false;
        let startPos = 0;
        let currentTranslate = 0;
        let prevTranslate = 0;
        let animationID;

        // Fungsi untuk memposisikan slider ke index tertentu
        function setPositionByIndex() {
            currentTranslate = currentIndex * (-100 / cardsPerSlide);
            prevTranslate = currentTranslate;
            setSliderPosition();
        }

        // Fungsi untuk mengatur transform CSS
        function setSliderPosition() {
            track.style.transform = `translateX(${currentTranslate}%)`;
        }
        
        // Fungsi untuk animasi
        function animation() {
            if (isDragging) {
                requestAnimationFrame(animation);
            }
            setSliderPosition();
        }

        // --- Event Handlers untuk Mouse dan Touch ---

        function dragStart(e) {
            isDragging = true;
            // Mendapatkan posisi awal (baik mouse atau touch)
            startPos = e.type.includes('mouse') ? e.clientX : e.touches[0].clientX;
            animationID = requestAnimationFrame(animation);
            // Nonaktifkan transisi untuk drag yang lebih halus
            track.style.transition = 'none';
        }

        function dragMove(e) {
            if (!isDragging) return;
            e.preventDefault(); // Mencegah scroll pada layar sentuh
            // Mendapatkan posisi saat ini
            const currentPosition = e.type.includes('mouse') ? e.clientX : e.touches[0].clientX;
            // Menghitung pergerakan
            const moveBy = currentPosition - startPos;
            currentTranslate = prevTranslate + (moveBy / container.offsetWidth) * 100 * cardsPerSlide;
        }

        function dragEnd() {
            if (!isDragging) return;
            isDragging = false;
            cancelAnimationFrame(animationID);
            
            // Aktifkan kembali transisi untuk efek "snap"
            track.style.transition = 'transform 0.3s ease-out';

            // Logika untuk "snap" ke kartu terdekat
            const movedBy = currentTranslate - prevTranslate;
            if (movedBy < -50 && currentIndex < totalCards - cardsPerSlide) {
                currentIndex += 1;
            } else if (movedBy > 50 && currentIndex > 0) {
                currentIndex -= 1;
            }
            
            setPositionByIndex();
        }

        // --- Menambahkan Event Listeners ---
        
        // Mouse Events
        container.addEventListener('mousedown', dragStart);
        container.addEventListener('mousemove', dragMove);
        container.addEventListener('mouseup', dragEnd);
        container.addEventListener('mouseleave', dragEnd); // Jika mouse keluar area container

        // Touch Events
        container.addEventListener('touchstart', dragStart);
        container.addEventListener('touchmove', dragMove);
        container.addEventListener('touchend', dragEnd);
        
        // Mencegah konteks menu saat klik kanan
        container.addEventListener('contextmenu', (e) => e.preventDefault());

        // (Opsional) Update saat resize
        window.addEventListener('resize', () => {
            let newCardsPerSlide = 4;
            if (window.innerWidth < 768) {
                newCardsPerSlide = 2;
            }
            if (newCardsPerSlide !== cardsPerSlide) {
                cardsPerSlide = newCardsPerSlide;
                if (currentIndex > totalCards - cardsPerSlide) {
                    currentIndex = totalCards - cardsPerSlide;
                }
                setPositionByIndex();
            }
        });
    });
</script>
    <!-- Modal untuk Detail -->
    <div id="detailModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white dark:bg-surface-dark rounded-lg shadow-xl max-w-2xl w-full mx-4 max-h-[90vh] overflow-y-auto">
            <div class="relative">
                <button onclick="closeDetailModal()" class="absolute top-4 right-4 z-10 bg-white dark:bg-gray-800 rounded-full p-2 shadow-lg">
                    <span class="material-icons text-gray-700 dark:text-gray-300">close</span>
                </button>
                <div id="modalContent" class="p-6">
                    <!-- Konten modal akan dimuat di sini -->
                </div>
            </div>
        </div>
    </div>

    <script>
        // Fungsi untuk menampilkan modal detail
        function showDetailModal(type, data) {
            const modal = document.getElementById('detailModal');
            const modalContent = document.getElementById('modalContent');
            
            let content = '';
            
            if (type === 'guru') {
                content = `
                    <div class="flex flex-col md:flex-row gap-6">
                        <div class="md:w-1/3">
                            <img src="${data.image}" alt="${data.name}" class="w-full h-64 object-cover rounded-lg">
                        </div>
                        <div class="md:w-2/3">
                            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">${data.name}</h2>
                            <p class="text-primary font-semibold mb-4">${data.subject}</p>
                            <div class="space-y-3">
                                <div>
                                    <h3 class="font-semibold text-gray-900 dark:text-white">Pendidikan</h3>
                                    <p class="text-gray-600 dark:text-gray-400">${data.education}</p>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900 dark:text-white">Pengalaman</h3>
                                    <p class="text-gray-600 dark:text-gray-400">${data.experience}</p>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900 dark:text-white">Prestasi</h3>
                                    <p class="text-gray-600 dark:text-gray-400">${data.achievement}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
            } else if (type === 'staff') {
                content = `
                    <div class="flex flex-col md:flex-row gap-6">
                        <div class="md:w-1/3">
                            <img src="${data.image}" alt="${data.name}" class="w-full h-64 object-cover rounded-lg">
                        </div>
                        <div class="md:w-2/3">
                            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">${data.name}</h2>
                            <p class="text-primary font-semibold mb-4">${data.position}</p>
                            <div class="space-y-3">
                                <div>
                                    <h3 class="font-semibold text-gray-900 dark:text-white">Tanggung Jawab</h3>
                                    <p class="text-gray-600 dark:text-gray-400">${data.responsibility}</p>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900 dark:text-white">Pengalaman</h3>
                                    <p class="text-gray-600 dark:text-gray-400">${data.experience}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
            } else if (type === 'jurusan') {
                content = `
                    <div class="flex flex-col gap-6">
                        <div class="h-64 overflow-hidden rounded-lg">
                            <img src="${data.image}" alt="${data.title}" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">${data.title}</h2>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">${data.description}</p>
                            <div>
                                <h3 class="font-semibold text-gray-900 dark:text-white mb-2">Detail Program</h3>
                                <p class="text-gray-600 dark:text-gray-400">${data.detail}</p>
                            </div>
                        </div>
                    </div>
                `;
            } else if (type === 'fasilitas') {
                content = `
                    <div class="flex flex-col gap-6">
                        <div class="h-64 overflow-hidden rounded-lg">
                            <img src="${data.image}" alt="${data.title}" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">${data.title}</h2>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">${data.description}</p>
                            <div>
                                <h3 class="font-semibold text-gray-900 dark:text-white mb-2">Detail Fasilitas</h3>
                                <p class="text-gray-600 dark:text-gray-400">${data.detail}</p>
                            </div>
                        </div>
                    </div>
                `;
            } else if (type === 'ekstrakurikuler') {
                content = `
                    <div class="flex flex-col gap-6">
                        <div class="h-64 overflow-hidden rounded-lg">
                            <img src="${data.image}" alt="${data.title}" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">${data.title}</h2>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">${data.description}</p>
                            <div>
                                <h3 class="font-semibold text-gray-900 dark:text-white mb-2">Detail Kegiatan</h3>
                                <p class="text-gray-600 dark:text-gray-400">${data.detail}</p>
                            </div>
                        </div>
                    </div>
                `;
            } else if (type === 'berita') {
                content = `
                    <div class="flex flex-col gap-6">
                        <div class="h-64 overflow-hidden rounded-lg">
                            <img src="${data.image}" alt="${data.title}" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <span class="text-sm text-primary font-semibold mb-2">${data.date}</span>
                            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">${data.title}</h2>
                            <div>
                                <p class="text-gray-600 dark:text-gray-400">${data.content}</p>
                            </div>
                        </div>
                    </div>
                `;
            } else if (type === 'testimoni') {
                content = `
                    <div class="flex flex-col md:flex-row gap-6">
                        <div class="md:w-1/3">
                            <img src="${data.image}" alt="${data.name}" class="w-full h-64 object-cover rounded-lg">
                        </div>
                        <div class="md:w-2/3">
                            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">${data.name}</h2>
                            <p class="text-primary font-semibold mb-4">${data.angkatan}</p>
                            <div class="space-y-3">
                                <div>
                                    <h3 class="font-semibold text-gray-900 dark:text-white">Pekerjaan</h3>
                                    <p class="text-gray-600 dark:text-gray-400">${data.pekerjaan}</p>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900 dark:text-white">Testimoni</h3>
                                    <p class="text-gray-600 dark:text-gray-400 italic">"${data.testimoni}"</p>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900 dark:text-white">Pesan</h3>
                                    <p class="text-gray-600 dark:text-gray-400">${data.pesan}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
            }
            
            modalContent.innerHTML = content;
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.style.overflow = 'hidden';
        }
        
        // Fungsi untuk menutup modal detail
        function closeDetailModal() {
            const modal = document.getElementById('detailModal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.style.overflow = 'auto';
        }
        
        // Tutup modal saat klik di luar konten
        document.getElementById('detailModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeDetailModal();
            }
        });
    </script>
@endsection