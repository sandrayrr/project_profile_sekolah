<!DOCTYPE html>
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
        /* Custom styles for visual enhancement */
        .akreditasi-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        .akreditasi-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        /* Modal styles */
        .modal-backdrop {
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
        }

        /* Header pattern overlay */
        .header-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
        
        /* Pagination styling */
        .pagination {
            @apply flex list-none -space-x-px;
        }
        
        .page-link {
            @apply relative block py-2 px-3 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white;
        }
        
        .page-item.active .page-link {
            @apply z-10 text-white bg-primary border-primary dark:bg-primary-dark dark:border-primary-dark;
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
        <!-- Optional: Add a subtle pattern overlay -->
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="relative container mx-auto px-4">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-3 animate-fade-in">
                Akreditasi
            </h1>
            <p class="text-gray-100 text-lg md:text-xl max-w-2xl animate-fade-in" style="animation-delay: 0.2s">
                Informasi lengkap mengenai akreditasi dan penilaian kualitas pendidikan di SMK Negeri 1 Kawali.
            </p>
        </div>
    </div>

    <!-- CONTENT -->
    <main class="container mx-auto px-4 py-12 lg:py-16 min-h-screen">

        <!-- AKREDITASI CARDS -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">

            <!-- PENGERTIAN AKREDITASI -->
            <div
                class="akreditasi-card bg-card-light dark:bg-card-dark 
                       rounded-2xl overflow-hidden animate-fade-in group lg:col-span-2">

                <!-- HEADER -->
                <div class="bg-primary/10 dark:bg-primary/20 p-6 border-b border-border-light dark:border-border-dark">
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
                       rounded-2xl overflow-hidden animate-fade-in group">

                <!-- FOTO -->
                <div class="aspect-[4/3] bg-gray-200 dark:bg-gray-700 relative overflow-hidden cursor-pointer" onclick="openCertificateModal()">
                    <img src="https://via.placeholder.com/400x300.png?text=Sertifikat+Akreditasi"
                        alt="Sertifikat Akreditasi"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <div class="bg-white/90 dark:bg-gray-800/90 rounded-full p-3">
                            <i class="fas fa-search-plus text-primary text-xl"></i>
                        </div>
                    </div>
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
                    <button onclick="openCertificateModal()"
                        class="inline-flex items-center gap-2 bg-primary/10 hover:bg-primary hover:text-white text-primary dark:text-primary-300 dark:hover:text-white text-sm font-semibold py-2 px-4 rounded-full transition-colors mt-auto">
                        Lihat Sertifikat <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- TUJUAN AKREDITASI -->
            <div
                class="akreditasi-card bg-card-light dark:bg-card-dark 
                       rounded-2xl overflow-hidden animate-fade-in group">

                <!-- HEADER -->
                <div class="bg-primary/10 dark:bg-primary/20 p-6 border-b border-border-light dark:border-border-dark">
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
                       rounded-2xl overflow-hidden animate-fade-in group lg:col-span-2">

                <!-- HEADER -->
                <div class="bg-primary/10 dark:bg-primary/20 p-6 border-b border-border-light dark:border-border-dark">
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

    <!-- CERTIFICATE MODAL -->
    <div id="certificateModal" class="fixed inset-0 z-50 hidden">
        <div class="modal-backdrop absolute inset-0 bg-black/80" onclick="closeCertificateModal()"></div>
        <div class="relative h-full flex items-center justify-center p-4">
            <button onclick="closeCertificateModal()" class="absolute top-4 right-4 text-white hover:text-gray-300 transition-colors z-10">
                <i class="fas fa-times text-3xl"></i>
            </button>
            
            <div class="relative max-w-4xl w-full bg-white dark:bg-gray-800 rounded-2xl shadow-2xl overflow-hidden animate-zoom-in">
                <!-- Modal Header -->
                <div class="bg-gradient-to-r from-primary to-primary-dark p-6">
                    <div class="flex items-center">
                        <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mr-4">
                            <i class="material-icons text-white text-3xl">verified</i>
                        </div>
                        <h2 class="text-2xl font-bold text-white">Sertifikat Akreditasi</h2>
                    </div>
                </div>
                
                <!-- Modal Body -->
                <div class="p-6">
                    <div class="mb-6">
                        <img src="https://via.placeholder.com/800x600.png?text=Sertifikat+Akreditasi+SMK+Negeri+1+Kawali"
                             alt="Sertifikat Akreditasi"
                             class="w-full rounded-lg shadow-md">
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                            <div class="flex items-center mb-2">
                                <i class="fa-solid fa-school text-primary mr-2"></i>
                                <h4 class="font-semibold text-gray-900 dark:text-white">Nama Sekolah</h4>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300">SMK Negeri 1 Kawali</p>
                        </div>
                        
                        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                            <div class="flex items-center mb-2">
                                <i class="fa-solid fa-award text-primary mr-2"></i>
                                <h4 class="font-semibold text-gray-900 dark:text-white">Peringkat</h4>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300">A (Sangat Baik)</p>
                        </div>
                        
                        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                            <div class="flex items-center mb-2">
                                <i class="fa-regular fa-calendar text-primary mr-2"></i>
                                <h4 class="font-semibold text-gray-900 dark:text-white">Tanggal Terbit</h4>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300">15 Oktober 2020</p>
                        </div>
                        
                        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                            <div class="flex items-center mb-2">
                                <i class="fa-regular fa-clock text-primary mr-2"></i>
                                <h4 class="font-semibold text-gray-900 dark:text-white">Masa Berlaku</h4>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300">Hingga 15 Oktober 2025</p>
                        </div>
                    </div>
                    
                    <div class="mt-6 flex justify-end">
                        <button onclick="closeCertificateModal()" class="bg-primary hover:bg-primary-dark text-white font-medium py-2 px-6 rounded-lg transition-colors">
                            Tutup
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- DARK MODE BUTTON -->
    <button
        id="darkToggle"
        class="fixed bottom-6 right-6 bg-primary hover:bg-primary-dark text-white p-3 rounded-full shadow-lg z-40 transition-all duration-300 hover:scale-110">
        <i class="fa-solid fa-moon dark:hidden"></i>
        <i class="fa-solid fa-sun hidden dark:block"></i>
    </button>

    <script>
        // Certificate modal functions
        function openCertificateModal() {
            const modal = document.getElementById('certificateModal');
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeCertificateModal() {
            const modal = document.getElementById('certificateModal');
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Keyboard navigation
        document.addEventListener('keydown', function(e) {
            const modal = document.getElementById('certificateModal');
            if (!modal.classList.contains('hidden')) {
                if (e.key === 'Escape') {
                    closeCertificateModal();
                }
            }
        });

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
    </script>

</body>

</html>