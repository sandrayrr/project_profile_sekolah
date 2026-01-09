<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Program AKL - SMKN 1 Kawali</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#6b7280",
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
                },
            },
        };
    </script>
</head>

<body class="bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-100 font-body">

    @include('layouts.navbar')

    <!-- HERO -->
    <section class="container mx-auto px-4 py-20 flex flex-col lg:flex-row items-center gap-12">

        <!-- LEFT -->
        <div class="lg:w-1/2">
            <span class="text-gray-500 font-semibold text-base mb-3 block">
                Kompetensi Keahlian
            </span>

            <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6 text-gray-900 dark:text-white">
                Akuntansi <br> Keuangan dan Lembaga
            </h1>

            <p class="text-gray-600 dark:text-gray-400 text-lg leading-relaxed mb-8 max-w-xl">
                Program keahlian yang membekali siswa dengan keterampilan pencatatan transaksi,
                pengelolaan keuangan, serta penyusunan laporan keuangan.
            </p>

            <div class="flex flex-wrap gap-4">
                <a href="#"
                    class="bg-gray-700 hover:bg-gray-800 text-white px-8 py-4 rounded-xl font-medium transition">
                    Daftar Sekarang
                </a>
                <a href="#"
                    class="border border-gray-300 dark:border-gray-600 px-8 py-4 rounded-xl font-medium hover:text-gray-700 transition">
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </div>

        <!-- RIGHT -->
        <div class="lg:w-1/2 flex justify-center">
            <img
                src="https://sfile.chatglm.cn/images-ppt/03c07d81854f.jpg"
                alt="Siswa AKL"
                class="w-full max-w-xl h-[420px] object-cover rounded-2xl shadow-lg">
        </div>

    </section>

    @include('layouts.footer')

</body>
</html>
