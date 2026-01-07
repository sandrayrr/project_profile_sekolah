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

<body class="bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-100 font-body transition-colors duration-300">

    @include('layouts.navbar')

    <!-- HEADER -->
    <div class="relative bg-gradient-to-br from-primary to-gray-600 dark:from-gray-700 dark:to-gray-900 py-20">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="relative container mx-auto px-4">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-3">
                Organisasi
            </h1>
            <p class="text-gray-100 text-lg md:text-xl max-w-2xl">
                Struktur dan kegiatan organisasi siswa SMK Negeri 1 Kawali.
            </p>
        </div>
    </div>

    <!-- CONTENT -->
    <main class="container mx-auto px-4 py-12 lg:py-16 space-y-24 min-h-screen">

        <!-- ================= MPK ================= -->
        <section class="space-y-16">

            <!-- DESKRIPSI -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 items-center">
                <div class="flex justify-center">
                    <div class="w-64 h-64 bg-card-light dark:bg-card-dark rounded-2xl shadow border border-border-light dark:border-border-dark flex items-center justify-center">
                        <span class="text-gray-400 font-semibold">Logo MPK</span>
                    </div>
                </div>
                <div class="md:col-span-2">
                    <h2 class="text-3xl font-bold mb-4">MPK</h2>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        Majelis Perwakilan Kelas (MPK) bertugas mengawasi kinerja OSIS serta menampung aspirasi siswa.
                    </p>
                </div>
            </div>

            <!-- VISI MISI -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-card-light dark:bg-card-dark rounded-2xl shadow border border-border-light dark:border-border-dark p-8 text-center">
                    <h3 class="text-2xl font-bold mb-4">Visi</h3>
                    <p class="text-gray-500 dark:text-gray-400">
                        Menjadikan MPK sebagai organisasi yang aspiratif dan bertanggung jawab.
                    </p>
                </div>
                <div class="bg-card-light dark:bg-card-dark rounded-2xl shadow border border-border-light dark:border-border-dark p-8 text-center">
                    <h3 class="text-2xl font-bold mb-4">Misi</h3>
                    <ul class="text-gray-500 dark:text-gray-400 space-y-2">
                        <li>Mengawasi kinerja OSIS</li>
                        <li>Menampung aspirasi siswa</li>
                    </ul>
                </div>
            </div>

            <!-- STRUKTUR -->
            <div class="space-y-8">
                <h3 class="text-3xl font-bold text-center">Struktur MPK</h3>

                <div class="flex justify-center">
                    <div class="text-center">
                        <div class="w-40 h-40 rounded-full bg-card-light dark:bg-card-dark border border-border-light dark:border-border-dark shadow flex items-center justify-center mb-4">
                            <span class="text-gray-400">Foto</span>
                        </div>
                        <h4 class="font-bold">Nama Pembina</h4>
                        <span class="text-sm text-primary">Pembina MPK</span>
                    </div>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 justify-items-center">
                    @foreach(['Ketua','Wakil','Sekretaris 1','Sekretaris 2','Bendahara'] as $jabatan)
                    <div class="text-center">
                        <div class="w-32 h-32 rounded-full bg-card-light dark:bg-card-dark border border-border-light dark:border-border-dark shadow flex items-center justify-center mb-3">
                            <span class="text-xs text-gray-400">Foto</span>
                        </div>
                        <div class="font-semibold text-sm">{{ $jabatan }}</div>
                        <div class="text-xs text-gray-500 dark:text-gray-400">Nama Siswa</div>
                    </div>
                    @endforeach
                </div>
            </div>

        </section>

        <!-- ================= OSIS ================= -->
        <section class="space-y-16">

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 items-center">
                <div class="flex justify-center">
                    <div class="w-64 h-64 bg-card-light dark:bg-card-dark rounded-2xl shadow border border-border-light dark:border-border-dark flex items-center justify-center">
                        <span class="text-gray-400 font-semibold">Logo OSIS</span>
                    </div>
                </div>
                <div class="md:col-span-2">
                    <h2 class="text-3xl font-bold mb-4">OSIS</h2>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        Organisasi Siswa Intra Sekolah sebagai wadah kegiatan dan pengembangan siswa.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-card-light dark:bg-card-dark rounded-2xl shadow border border-border-light dark:border-border-dark p-8 text-center">
                    <h3 class="text-2xl font-bold mb-4">Visi</h3>
                    <p class="text-gray-500 dark:text-gray-400">
                        Mewujudkan siswa berkarakter dan berprestasi.
                    </p>
                </div>
                <div class="bg-card-light dark:bg-card-dark rounded-2xl shadow border border-border-light dark:border-border-dark p-8 text-center">
                    <h3 class="text-2xl font-bold mb-4">Misi</h3>
                    <ul class="text-gray-500 dark:text-gray-400 space-y-2">
                        <li>Meningkatkan keimanan</li>
                        <li>Mengembangkan bakat siswa</li>
                    </ul>
                </div>
            </div>

        </section>

    </main>

    @include('layouts.footer')

</body>
</html>
