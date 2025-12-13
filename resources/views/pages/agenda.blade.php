<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Agenda Sekolah - SMK Negeri 1 Kawali</title>
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
                        primary: "#3b82f6", // Light blue for a cleaner aesthetic
                        secondary: "#f3f4f6",
                        "background-light": "#ffffff",
                        "background-dark": "#111827",
                        "surface-light": "#f9fafb",
                        "surface-dark": "#1f2937",
                        "text-light": "#1f2937",
                        "text-dark": "#e5e7eb",
                        "border-light": "#e5e7eb",
                        "border-dark": "#374151",
                    },
                    fontFamily: {
                        display: ["Inter", "sans-serif"],
                        body: ["Inter", "sans-serif"],
                    },
                    borderRadius: {
                        DEFAULT: "0.5rem",
                        'lg': '0.75rem',
                        'xl': '1rem',
                    },
                },
            },
        };
    </script>
</head>

<body
    class="font-body bg-background-light dark:bg-background-dark text-text-light dark:text-text-dark transition-colors duration-200 antialiased flex flex-col min-h-screen">
    @include('layouts.navbar')
    <div class="bg-sky-50 dark:bg-gray-800 py-12 md:py-16">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-2">Agenda Sekolah</h1>
            <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">Informasi kegiatan dan jadwal penting SMK
                Negeri 1 Kawali</p>
        </div>
    </div>
    <main class="flex-grow container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div
                class="bg-white dark:bg-surface-dark rounded-xl shadow-sm hover:shadow-lg transition-shadow duration-300 border border-gray-100 dark:border-border-dark overflow-hidden flex flex-col h-full group">
                <div class="p-6 flex-grow flex items-start gap-4">
                    <div
                        class="flex-shrink-0 bg-blue-50 dark:bg-blue-900/30 text-primary rounded-xl p-3 group-hover:bg-primary group-hover:text-white transition-all duration-300">
                        <span class="material-symbols-outlined text-2xl">meeting_room</span>
                    </div>
                    <div>
                        <h3
                            class="text-lg font-bold text-gray-900 dark:text-white mb-2 group-hover:text-primary dark:group-hover:text-blue-400 transition-colors">
                            Rapat Dewan Guru</h3>
                        <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed">Persiapan semester genap
                            tahun ajaran 2023/2024</p>
                    </div>
                </div>
                <div
                    class="bg-gray-50/50 dark:bg-gray-800/30 px-6 py-3 border-t border-gray-100 dark:border-border-dark flex items-center justify-between">
                    <div class="flex items-center text-xs text-gray-500 dark:text-gray-400 font-medium">
                        <span class="material-symbols-outlined text-base mr-1.5">calendar_month</span>
                        Senin, 12 Jan 2024
                    </div>
                    <div class="flex items-center text-xs text-gray-500 dark:text-gray-400 font-medium">
                        <span class="material-symbols-outlined text-base mr-1.5">schedule</span>
                        08:00 WIB
                    </div>
                </div>
            </div>
            <div
                class="bg-white dark:bg-surface-dark rounded-xl shadow-sm hover:shadow-lg transition-shadow duration-300 border border-gray-100 dark:border-border-dark overflow-hidden flex flex-col h-full group">
                <div class="p-6 flex-grow flex items-start gap-4">
                    <div
                        class="flex-shrink-0 bg-blue-50 dark:bg-blue-900/30 text-primary rounded-xl p-3 group-hover:bg-primary group-hover:text-white transition-all duration-300">
                        <span class="material-symbols-outlined text-2xl">school</span>
                    </div>
                    <div>
                        <h3
                            class="text-lg font-bold text-gray-900 dark:text-white mb-2 group-hover:text-primary dark:group-hover:text-blue-400 transition-colors">
                            Penerimaan Raport</h3>
                        <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed">Pembagian hasil belajar
                            siswa semester ganjil.</p>
                    </div>
                </div>
                <div
                    class="bg-gray-50/50 dark:bg-gray-800/30 px-6 py-3 border-t border-gray-100 dark:border-border-dark flex items-center justify-between">
                    <div class="flex items-center text-xs text-gray-500 dark:text-gray-400 font-medium">
                        <span class="material-symbols-outlined text-base mr-1.5">calendar_month</span>
                        Jumat, 15 Des 2023
                    </div>
                    <div class="flex items-center text-xs text-gray-500 dark:text-gray-400 font-medium">
                        <span class="material-symbols-outlined text-base mr-1.5">schedule</span>
                        09:00 WIB
                    </div>
                </div>
            </div>
            <div
                class="bg-white dark:bg-surface-dark rounded-xl shadow-sm hover:shadow-lg transition-shadow duration-300 border border-gray-100 dark:border-border-dark overflow-hidden flex flex-col h-full group">
                <div class="p-6 flex-grow flex items-start gap-4">
                    <div
                        class="flex-shrink-0 bg-blue-50 dark:bg-blue-900/30 text-primary rounded-xl p-3 group-hover:bg-primary group-hover:text-white transition-all duration-300">
                        <span class="material-symbols-outlined text-2xl">assignment</span>
                    </div>
                    <div>
                        <h3
                            class="text-lg font-bold text-gray-900 dark:text-white mb-2 group-hover:text-primary dark:group-hover:text-blue-400 transition-colors">
                            Ujian Kompetensi Keahlian</h3>
                        <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed">Pelaksanaan UKK untuk siswa
                            kelas XII semua jurusan.</p>
                    </div>
                </div>
                <div
                    class="bg-gray-50/50 dark:bg-gray-800/30 px-6 py-3 border-t border-gray-100 dark:border-border-dark flex items-center justify-between">
                    <div class="flex items-center text-xs text-gray-500 dark:text-gray-400 font-medium">
                        <span class="material-symbols-outlined text-base mr-1.5">calendar_month</span>
                        Senin, 19 Feb 2024
                    </div>
                    <div class="flex items-center text-xs text-gray-500 dark:text-gray-400 font-medium">
                        <span class="material-symbols-outlined text-base mr-1.5">schedule</span>
                        07:30 WIB
                    </div>
                </div>
            </div>
            <div
                class="bg-white dark:bg-surface-dark rounded-xl shadow-sm hover:shadow-lg transition-shadow duration-300 border border-gray-100 dark:border-border-dark overflow-hidden flex flex-col h-full group">
                <div class="p-6 flex-grow flex items-start gap-4">
                    <div
                        class="flex-shrink-0 bg-blue-50 dark:bg-blue-900/30 text-primary rounded-xl p-3 group-hover:bg-primary group-hover:text-white transition-all duration-300">
                        <span class="material-symbols-outlined text-2xl">sports_soccer</span>
                    </div>
                    <div>
                        <h3
                            class="text-lg font-bold text-gray-900 dark:text-white mb-2 group-hover:text-primary dark:group-hover:text-blue-400 transition-colors">
                            Class Meeting</h3>
                        <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed">Lomba antar kelas pasca
                            ujian akhir semester.</p>
                    </div>
                </div>
                <div
                    class="bg-gray-50/50 dark:bg-gray-800/30 px-6 py-3 border-t border-gray-100 dark:border-border-dark flex items-center justify-between">
                    <div class="flex items-center text-xs text-gray-500 dark:text-gray-400 font-medium">
                        <span class="material-symbols-outlined text-base mr-1.5">calendar_month</span>
                        Rabu, 13 Des 2023
                    </div>
                    <div class="flex items-center text-xs text-gray-500 dark:text-gray-400 font-medium">
                        <span class="material-symbols-outlined text-base mr-1.5">schedule</span>
                        08:00 WIB
                    </div>
                </div>
            </div>
            <div
                class="bg-white dark:bg-surface-dark rounded-xl shadow-sm hover:shadow-lg transition-shadow duration-300 border border-gray-100 dark:border-border-dark overflow-hidden flex flex-col h-full group">
                <div class="p-6 flex-grow flex items-start gap-4">
                    <div
                        class="flex-shrink-0 bg-blue-50 dark:bg-blue-900/30 text-primary rounded-xl p-3 group-hover:bg-primary group-hover:text-white transition-all duration-300">
                        <span class="material-symbols-outlined text-2xl">lightbulb</span>
                    </div>
                    <div>
                        <h3
                            class="text-lg font-bold text-gray-900 dark:text-white mb-2 group-hover:text-primary dark:group-hover:text-blue-400 transition-colors">
                            Workshop Kurikulum Merdeka</h3>
                        <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed">Pelatihan guru untuk
                            implementasi kurikulum merdeka belajar.</p>
                    </div>
                </div>
                <div
                    class="bg-gray-50/50 dark:bg-gray-800/30 px-6 py-3 border-t border-gray-100 dark:border-border-dark flex items-center justify-between">
                    <div class="flex items-center text-xs text-gray-500 dark:text-gray-400 font-medium">
                        <span class="material-symbols-outlined text-base mr-1.5">calendar_month</span>
                        Sabtu, 25 Nov 2023
                    </div>
                    <div class="flex items-center text-xs text-gray-500 dark:text-gray-400 font-medium">
                        <span class="material-symbols-outlined text-base mr-1.5">schedule</span>
                        08:30 WIB
                    </div>
                </div>
            </div>
            <div
                class="bg-white dark:bg-surface-dark rounded-xl shadow-sm hover:shadow-lg transition-shadow duration-300 border border-gray-100 dark:border-border-dark overflow-hidden flex flex-col h-full group">
                <div class="p-6 flex-grow flex items-start gap-4">
                    <div
                        class="flex-shrink-0 bg-blue-50 dark:bg-blue-900/30 text-primary rounded-xl p-3 group-hover:bg-primary group-hover:text-white transition-all duration-300">
                        <span class="material-symbols-outlined text-2xl">event</span>
                    </div>
                    <div>
                        <h3
                            class="text-lg font-bold text-gray-900 dark:text-white mb-2 group-hover:text-primary dark:group-hover:text-blue-400 transition-colors">
                            Perayaan Hari Guru</h3>
                        <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed">Upacara dan syukuran
                            memperingati hari guru nasional.</p>
                    </div>
                </div>
                <div
                    class="bg-gray-50/50 dark:bg-gray-800/30 px-6 py-3 border-t border-gray-100 dark:border-border-dark flex items-center justify-between">
                    <div class="flex items-center text-xs text-gray-500 dark:text-gray-400 font-medium">
                        <span class="material-symbols-outlined text-base mr-1.5">calendar_month</span>
                        Sabtu, 25 Nov 2023
                    </div>
                    <div class="flex items-center text-xs text-gray-500 dark:text-gray-400 font-medium">
                        <span class="material-symbols-outlined text-base mr-1.5">schedule</span>
                        07:00 WIB
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-16 flex justify-center">
            <nav aria-label="Pagination" class="flex items-center gap-2">
                <a class="w-10 h-10 flex items-center justify-center rounded-lg bg-primary text-white hover:bg-blue-700 transition-colors font-medium shadow-sm"
                    href="#">1</a>
                <a class="w-10 h-10 flex items-center justify-center rounded-lg bg-white dark:bg-gray-700 text-gray-600 dark:text-gray-300 border border-gray-200 dark:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-600 transition-colors font-medium"
                    href="#">2</a>
                <a class="w-10 h-10 flex items-center justify-center rounded-lg bg-white dark:bg-gray-700 text-gray-600 dark:text-gray-300 border border-gray-200 dark:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-600 transition-colors font-medium"
                    href="#">3</a>
                <a class="w-10 h-10 flex items-center justify-center rounded-lg bg-white dark:bg-gray-700 text-gray-600 dark:text-gray-300 border border-gray-200 dark:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-600 transition-colors font-medium"
                    href="#">
                    <span class="material-symbols-outlined text-lg">chevron_right</span>
                </a>
            </nav>
        </div>
    </main>
    @include('layouts.footer')

</body>

</html>