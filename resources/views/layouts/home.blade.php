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
                        'fade-in': 'fadeIn 0.8s ease-out',
                        'slide-up': 'slideUp 0.8s ease-out',
                        'counter': 'counter 2s ease-out',
                        'float': 'float 3s ease-in-out infinite',
                        'pulse-slow': 'pulse 3s infinite',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        slideUp: {
                            '0%': { opacity: '0', transform: 'translateY(30px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        counter: {
                            '0%': { transform: 'scale(0.8)', opacity: '0' },
                            '50%': { transform: 'scale(1.1)', opacity: '1' },
                            '100%': { transform: 'scale(1)', opacity: '1' },
                        },
                        float: {
                            '0%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-10px)' },
                            '100%': { transform: 'translateY(0px)' },
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
        
        /* Animasi scroll reveal */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }
        
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Animasi untuk statistik counter */
        .counter {
            display: inline-block;
        }
        
        /* Animasi untuk card */
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-5px);
        }
        
        /* Animasi untuk tombol */
        .btn-animate {
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .btn-animate::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }
        
        .btn-animate:hover::before {
            width: 300px;
            height: 300px;
        }
        
        /* Animasi untuk gambar */
        .img-hover {
            transition: all 0.5s ease;
        }
        
        /* Animasi untuk judul section */
        .section-title {
            position: relative;
            display: inline-block;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #6b7280;
            transition: width 0.5s ease;
        }
        
        .section-title.active::after {
            width: 100%;
        }
        
        /* Animasi untuk link */
        .link-underline {
            position: relative;
            display: inline-block;
        }
        
        .link-underline::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 1px;
            background-color: currentColor;
            transition: width 0.3s ease;
        }
        
        .link-underline:hover::after {
            width: 100%;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-200 transition-colors duration-300">

    <!-- Main Content Wrapper -->
    <div id="mainContent">
        @include('layouts.navbar')

        @yield('content')

        @include('layouts.footer')
    </div>
    
    <script>
        // Scroll reveal animation
        function reveal() {
            const reveals = document.querySelectorAll('.reveal');
            const sectionTitles = document.querySelectorAll('.section-title');
            
            for (let i = 0; i < reveals.length; i++) {
                const windowHeight = window.innerHeight;
                const elementTop = reveals[i].getBoundingClientRect().top;
                const elementVisible = 150;
                
                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add('active');
                } else {
                    reveals[i].classList.remove('active');
                }
            }
            
            for (let i = 0; i < sectionTitles.length; i++) {
                const windowHeight = window.innerHeight;
                const elementTop = sectionTitles[i].getBoundingClientRect().top;
                const elementVisible = 150;
                
                if (elementTop < windowHeight - elementVisible) {
                    sectionTitles[i].classList.add('active');
                }
            }
        }
        
        window.addEventListener('scroll', reveal);
        
        // To check the scroll position on page load
        reveal();
        
        // Counter animation
        function animateCounters() {
            const counters = document.querySelectorAll('.counter');
            const speed = 200;
            
            counters.forEach(counter => {
                const updateCount = () => {
                    const target = +counter.getAttribute('data-target');
                    const count = +counter.innerText;
                    const inc = target / speed;
                    
                    if (count < target) {
                        counter.innerText = Math.ceil(count + inc);
                        setTimeout(updateCount, 1);
                    } else {
                        counter.innerText = target;
                    }
                };
                
                // Start animation when element is in viewport
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            updateCount();
                            observer.unobserve(entry.target);
                        }
                    });
                });
                
                observer.observe(counter);
            });
        }
        
        // Initialize counter animation
        animateCounters();
        
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