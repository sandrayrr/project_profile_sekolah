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
        .vision-mission-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        .vision-mission-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
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
                Profil Sekolah
            </h1>
            <p class="text-gray-100 text-lg md:text-xl max-w-2xl animate-fade-in" style="animation-delay: 0.2s">
                Mengenal lebih dekat SMK Negeri 1 Kawali sebagai pusat pendidikan kejuruan unggulan.
            </p>
        </div>
    </div>

    <!-- CONTENT -->
    <main class="container mx-auto px-4 py-12 lg:py-16 min-h-screen">

        <!-- HERO IMAGE -->
        <div class="hero-image-container w-full h-[420px] rounded-2xl overflow-hidden shadow-lg mb-16 bg-gray-200 dark:bg-gray-700 animate-fade-in" style="animation-delay: 0.3s">
            <img
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBhGGaJSBXrVbjjuJh9rvNf2_Sw8wxAbpF1SRgVnoDmiYiJ1OD20ePBWR1IH5zUhTpkSzvlSyaq1HUhhL9z7iRrmarzGjNyfctJQ1zEFxE0QECKAn5KI36eABDUQC7dMWkilCS0FDWWasQnlDt3791ucW4S8jQ8A-xWIsTpoAZhrueDMFzFfWIVidv8BJS52hmbzd7KoovvePN-cPkZlYHeE70DEfvwcqZrntJ5-4jUPDxt0PktfUZ4xRrHODhG9oWJEG8a_j2x1v0X"
                alt="Gedung Sekolah"
                class="w-full h-full object-cover">
        </div>

        <!-- DESKRIPSI -->
        <div class="max-w-4xl mx-auto text-center mb-20 animate-fade-in" style="animation-delay: 0.4s">
            <h2 class="text-3xl font-bold mb-6 text-gray-900 dark:text-white">
                Tentang Sekolah
            </h2>
            <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                SMK Negeri 1 Kawali adalah lembaga pendidikan kejuruan yang berkomitmen mencetak
                generasi muda yang kompeten, berkarakter, dan siap bersaing di dunia kerja maupun industri.
            </p>
            <p class="mt-4 text-gray-600 dark:text-gray-300 leading-relaxed">
                Dengan kurikulum berbasis kebutuhan industri dan tenaga pendidik profesional,
                kami terus berinovasi menciptakan lingkungan belajar yang berkualitas.
            </p>
        </div>

        <!-- VISI & MISI -->
        <div class="grid md:grid-cols-2 gap-8 mb-20">

            <div class="vision-mission-card bg-card-light dark:bg-card-dark rounded-2xl border border-border-light dark:border-border-dark p-10 text-center animate-fade-in" style="animation-delay: 0.5s">
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

            <div class="vision-mission-card bg-card-light dark:bg-card-dark rounded-2xl border border-border-light dark:border-border-dark p-10 text-center animate-fade-in" style="animation-delay: 0.6s">
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