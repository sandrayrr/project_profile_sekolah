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
                        primary: "#1e40af", // deep blue
                        "background-light": "#f3f4f6", // gray-100
                        "background-dark": "#111827", // gray-900
                        "surface-light": "#ffffff",
                        "surface-dark": "#1f2937", // gray-800
                    },
                    fontFamily: {
                        display: ["Inter", "sans-serif"],
                        body: ["Inter", "sans-serif"],
                    },
                    borderRadius: {
                        DEFAULT: "0.5rem",
                    },
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
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-200 transition-colors duration-300">
   
    @include('layouts.navbar')
    <section class="relative bg-gray-200 dark:bg-gray-800 h-[500px] flex items-center justify-center overflow-hidden">
        <img alt="School Atmosphere" class="absolute inset-0 w-full h-full object-cover opacity-30 dark:opacity-20"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBqMZggap8sbrsWBeQRfEvM54vjG5NBbXa8RcSD9jOIoxPciY89gu4wfihHnBB7TAbrpaVbjDaEpvaBkajffOrrfSKv2-zUk3r9bAWCFGomQdjs6QibJS1wKdMmZWJTQNwOs_95HsHOPEBQwUbFwL0UmXVbh9yXc-5CVH-lSwPFjtvj6wOkrKBcE6BBhg1Amwh9MvBKptuPaAGr_Awv-OBbN0Jc_-0BNKwXLd4zTZ9npg2oewr7zAyskK1ToubBTF46I7qDnzl4zKOG" />
        <div class="relative z-10 text-center max-w-3xl px-6">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-6">Mewujudkan Generasi Unggul dan
                Berkarakter</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 mb-8">Selamat datang di website resmi SMK Negeri 1
                Kawali. Pusat informasi dan layanan digital sekolah.</p>
            <div class="flex justify-center space-x-4">
                <button
                    class="bg-white dark:bg-surface-dark hover:bg-gray-50 dark:hover:bg-gray-700 text-gray-800 dark:text-white px-6 py-2 rounded-full shadow-lg transition flex items-center gap-2">
                    Selengkapnya <span class="material-icons text-sm">arrow_forward</span>
                </button>
            </div>
            <div class="mt-8 flex justify-center gap-4">
                <button
                    class="p-2 bg-white/50 dark:bg-black/50 hover:bg-white dark:hover:bg-black rounded-full transition">
                    <span class="material-icons">west</span>
                </button>
                <button
                    class="p-2 bg-white/50 dark:bg-black/50 hover:bg-white dark:hover:bg-black rounded-full transition">
                    <span class="material-icons">east</span>
                </button>
            </div>
        </div>
    </section>
    <div class="container mx-auto px-4 -mt-24 relative z-20 mb-20">
        <div class="bg-white dark:bg-surface-dark rounded-xl shadow-xl p-8 flex flex-col lg:flex-row gap-8 lg:gap-12">
            <div
                class="lg:w-1/2 flex flex-col sm:flex-row items-center sm:items-start gap-6 border-b lg:border-b-0 lg:border-r border-gray-200 dark:border-gray-700 pb-8 lg:pb-0 lg:pr-8">
                <div class="shrink-0">
                    <div class="w-24 h-24 rounded-full bg-gray-300 dark:bg-gray-600 overflow-hidden shadow-inner">
                        <img alt="Kepala Sekolah" class="w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDxngcCk9KX7vesppucB0OeSFhT02rOmd--W_H6cZ9c-2P2SIDRPALnS2AKxQI9lGadFvafEuHfWGBPC3FORB6mEF-MMWAfQN6OiT-LgNz-PEb8zgT4EuhQlOWjEWmmfN7ken-w67NmoRe3A3AnOQ-nIYDESWxTL8Hqn98v3cnYtL1istbX3HgZZQ7QZFb0U18hBcDVGobPwot9LSs2Bo1szfgI36cigKJ9Y0Uwg0tKJyc-g35nkVFw_eD1tnYNWy1t9w0B9M7pj5Yu" />
                    </div>
                </div>
                <div class="text-center sm:text-left">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Sambutan Kepala Sekolah</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">
                        Selamat datang di website resmi kami. Kami berkomitmen untuk memberikan layanan pendidikan
                        terbaik...
                    </p>
                    <a class="inline-flex items-center text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-primary dark:hover:text-primary bg-gray-100 dark:bg-gray-700 px-4 py-1.5 rounded-full transition"
                        href="#">
                        Selengkapnya <span class="material-icons text-xs ml-1">arrow_forward</span>
                    </a>
                </div>
            </div>
            <div class="lg:w-1/2 flex flex-col justify-center">
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-6 text-center lg:text-left">Data Statistik
                    Sekolah</h3>
                <div class="grid grid-cols-3 gap-4 text-center divide-x divide-gray-200 dark:divide-gray-700">
                    <div class="px-2">
                        <span class="block text-3xl font-bold text-primary">1.2k</span>
                        <span class="text-xs text-gray-500 dark:text-gray-400 uppercase tracking-wide">Siswa</span>
                    </div>
                    <div class="px-2">
                        <span class="block text-3xl font-bold text-primary">85</span>
                        <span class="text-xs text-gray-500 dark:text-gray-400 uppercase tracking-wide">Guru</span>
                    </div>
                    <div class="px-2">
                        <span class="block text-3xl font-bold text-primary">12</span>
                        <span class="text-xs text-gray-500 dark:text-gray-400 uppercase tracking-wide">Jurusan</span>
                    </div>
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
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBMu9tAxcl84Y9IGQTRIgxa3Kmg-FeY8dWLb-IEXNf6qeIBBpD4zAWgoVhSn0Jw8Hc8naswWORscExDIi5eehwK0EJ0zkYQ3FngM1dYMbyErChe_WKs0seIsSliNqwxPX7FsVIegFbpsWQsoKnRVEUJL1ZwQI-YlRhgYpT6lxQiZdCG6X1wWbyoy4WGNmh0__zbwae3iejjDTW1YxZmcnPcw_FDWJKzHZcg7JrjwKuZPNNPekCXl4ristHe5LLiV-GI7GaZZebFJTZI" />
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
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div
                class="bg-white dark:bg-surface-dark rounded-lg shadow p-4 text-center hover:-translate-y-1 transition duration-300">
                <div class="w-full aspect-square bg-gray-200 dark:bg-gray-700 rounded-lg mb-4 overflow-hidden">
                    <img alt="Teacher" class="w-full h-full object-cover"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuARq0UDPZmw7Hkpsb-c3yGXzuA4NFBb7plWBiBHLKSikY15wQuUa0jEXCS30FSwJCx9cLDRr1y0Ocko7P0-tVZUBli5EcmB47HdZzEFM98zYe_7zztp2Q-BS-HMyAjnugQe89p0iuMkhQJpkJ95YIENo6cnDHdAhsQRki99ucrEclw4XVDY5PlnAS5MtyjQ9V1jB05Jn1SIHIglAfixkIV2qOMvSoYAHOUhnQg1ywehzvPwTHPGDcRacWlt-YyrLw0VHV9l3SMiUpyz" />
                </div>
                <h4 class="text-lg font-bold text-gray-900 dark:text-white">Dra. Siti Aminah</h4>
                <p class="text-primary text-sm">Bahasa Indonesia</p>
            </div>
            <div
                class="bg-white dark:bg-surface-dark rounded-lg shadow p-4 text-center hover:-translate-y-1 transition duration-300">
                <div class="w-full aspect-square bg-gray-200 dark:bg-gray-700 rounded-lg mb-4 overflow-hidden">
                    <img alt="Teacher" class="w-full h-full object-cover"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBZ7GN7MRkzkskSWEdRs-cBMtsqUF9yz_Nv0zOBKnuqCix9vDtzGH97Sp6xzJOc18Xk5Q-61ZZOEzR4pUvtIThfFSSggnmxSU-iazeg07IPLCW0KMBdfBjddXks9YbG0EB9xQZJBUvQ6TWpOW72Hy5dGridIsr0H8cF3NqHFqc30vipTdfZsqPY0g3bAsZu8-f5XiAEfu7179XJkerqHB5HJfzDvdifiJBBpcta2WEpy114-Xqy2-78XcxVWjvG-kUxSeve5k-DFyYZ" />
                </div>
                <h4 class="text-lg font-bold text-gray-900 dark:text-white">Budi Santoso, S.Pd</h4>
                <p class="text-primary text-sm">Matematika</p>
            </div>
            <div
                class="bg-white dark:bg-surface-dark rounded-lg shadow p-4 text-center hover:-translate-y-1 transition duration-300">
                <div class="w-full aspect-square bg-gray-200 dark:bg-gray-700 rounded-lg mb-4 overflow-hidden">
                    <img alt="Teacher" class="w-full h-full object-cover"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAK5fQTAKP8PPqeOuKm4RJDBVx83M6O1nOnY8l68WDBjFfFSdZkKwQ1WrnQt0eNcRQmecWL2AHJHl8WF3QALvTpsZySRWC1KdHwO3Iee5IaVX6ipEidz6Kliu3iKor1IfqXIeoHPgbg4qiAuoGY7ZvzeajDlqn4Y2C2AiKP-XZY-osgjh3GUMkAjW6VHyUCAeKkgPFZG2wpZ96oIhur3AyXZ6-vpyvNkIwsqw2d-fu2yDkO2MtU__9ymQIIChIuycle1G4c0xT4jOor" />
                </div>
                <h4 class="text-lg font-bold text-gray-900 dark:text-white">Rina Wati, M.Kom</h4>
                <p class="text-primary text-sm">Teknik Komputer</p>
            </div>
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
                <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-4 text-center">
                    <div class="w-full aspect-square bg-gray-200 dark:bg-gray-700 rounded-lg mb-4 overflow-hidden">
                        <img alt="Staff" class="w-full h-full object-cover opacity-90"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCL_bH2iMzrxfDta2DSpZrZaJ6VAKUpblqahE6cZlUM4ocHdLb2wQfiibEwuEhpTC8Tl7PC1_3Sc3qyQFU8mARZhLehESB0u9CC7CxHmGUGW91Dh7A5-6QGATGfdeUsDe0Np6jbTq-9iQvqVFZrTy1gCl5_dP_kEkD-zKzTxKnF6QdMYKMMZRRQhMuplrx4i2mKZjwNlpVUARbSwKzDuvozmuGNwdbkPo4DjLcrQ7plyHmd-f9Ctg26e8Yow5G0Hh1sL66qdZ1yLA-5" />
                    </div>
                    <h4 class="text-lg font-bold text-gray-900 dark:text-white">Asep Suherman</h4>
                    <p class="text-gray-500 dark:text-gray-400 text-sm">Kepala Tata Usaha</p>
                </div>
                <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-4 text-center">
                    <div class="w-full aspect-square bg-gray-200 dark:bg-gray-700 rounded-lg mb-4 overflow-hidden">
                        <img alt="Staff" class="w-full h-full object-cover opacity-90"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAxkuRaKPnLDW6vITtE0XxBrM7XnHngrKhYaRsR6YyNLTXsmKB3dhMg5ICvAYIjNZ_93oLQB8i-xwXD4smEyzRBWSuOVdD00CTuZyPAKG3LdpYZ4P2eEVxT4X4ctUh2RzTlEcV-z67WAZ9GZamw-vhbr7SjIWVkEIN11tfM9Wh_JQ4nAyf9XHyJC_DNaDWzeOHpkm9m2GSIQ3hz_xfhX8cH5ZS4C1dVt4tvgTYj84NFIdj5_apYjbKX4nrHIUnPfLQZjBojUV4y0_US" />
                    </div>
                    <h4 class="text-lg font-bold text-gray-900 dark:text-white">Nurul Hidayah</h4>
                    <p class="text-gray-500 dark:text-gray-400 text-sm">Staff Administrasi</p>
                </div>
                <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-4 text-center">
                    <div class="w-full aspect-square bg-gray-200 dark:bg-gray-700 rounded-lg mb-4 overflow-hidden">
                        <img alt="Staff" class="w-full h-full object-cover opacity-90"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuC8FxTITpCWOTaOQBFu19S0wtAOBCLen5OczK5LvlA1y-_avOPkVVe56LHOJQkPGbly4JsQ79ebjrB8afk30bMDSAIv7sDoDDHYJPPr8rZa-m7tYh8Fku6UwORyMHlzI3qPo497xwaGZBim4KhStT7wPrmyMA2ZRbjqTLZxARcEMQ0pqeVkN605F7MEi0z_OA-8gx7Umu8lZkkfR9DkBMRBWfnCqDTKPsFgEaWvpoSnocvifYO20jZXE1UDGRudrRFZTAz80agdpy0m" />
                    </div>
                    <h4 class="text-lg font-bold text-gray-900 dark:text-white">Bambang Irawan</h4>
                    <p class="text-gray-500 dark:text-gray-400 text-sm">Staff Keuangan</p>
                </div>
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
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">Otomatisasi Tata Kelola Perkantoran</h3>
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
                    href="#">
                    Selengkapnya <span class="material-icons text-sm ml-1">arrow_forward</span>
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
                href="#">
                Selengkapnya <span class="material-icons text-sm ml-1">arrow_forward</span>
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
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDNXM1vhZWtIJy-oekTaE-Hw3Z8q1YNIVqwingTLJRuyJ_jm8VT2EC9TenGCsNytjZLYvR1nc--EaA0HsbLmauU2-BKPze9rnLIvpBRNiIfla4yyvWhAd9gwGi-uRnXDsigDBsmP8-eGmil3lYAaroGw-bgxMryJJeueQ4EAZKHY8uoT_lJWXDtsswddlQea1R-Lz1QFG_bSRY0V-5wYuJQGD0zExLhsBQfsAPkFaJSWyeRwd1X51l6swaK6ZODgRDtubY9p9Ynt0LG" />
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
</body>

</html>