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
        tailwind.config = {
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
    class="bg-background-light dark:bg-background-dark text-gray-900 dark:text-gray-100 font-sans antialiased flex flex-col min-h-screen transition-colors duration-300">
   @include('layouts.navbar')
    <section class="bg-gray-200 dark:bg-gray-800 py-12 md:py-16 transition-colors duration-300">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white pl-4 border-l-4 border-transparent">
                Akreditas
            </h1>
        </div>
    </section>
    <main class="flex-grow bg-background-light dark:bg-background-dark transition-colors duration-300">
        <div class="container mx-auto px-4 py-16 max-w-4xl space-y-24">
            <article class="text-center md:text-left">
                <h2 class="text-2xl font-medium text-gray-900 dark:text-white mb-6">Pengertian Akreditasi</h2>
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
            </article>
            <article class="text-center md:text-left">
                <h2 class="text-2xl font-medium text-gray-900 dark:text-white mb-6">Tujuan Akreditasi</h2>
                <div class="prose dark:prose-invert max-w-none text-gray-600 dark:text-gray-300">
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
                <h2 class="text-2xl font-medium text-gray-900 dark:text-white mb-6">Manfaat Akreditasi</h2>
                <div class="prose dark:prose-invert max-w-none text-gray-600 dark:text-gray-300">
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