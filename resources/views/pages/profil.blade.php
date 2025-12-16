<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Profil Sekolah - SMK Negeri 1 Kawali</title>
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
                        primary: "#1e3a8a", // Deep blue typical for education/institutions
                        "background-light": "#f8f9fa",
                        "background-dark": "#111827",
                        "surface-light": "#ffffff",
                        "surface-dark": "#1f2937",
                        "gray-light": "#e5e7eb",
                        "gray-dark": "#374151",
                    },
                    fontFamily: {
                        display: ["Inter", "sans-serif"],
                        body: ["Inter", "sans-serif"],
                    },
                    borderRadius: {
                        DEFAULT: "0.5rem",
                        'xl': '1rem',
                        '2xl': '1.5rem',
                    },
                },
            },
        };
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-100 transition-colors duration-200">
    @include('layouts.navbar')
    <main class="container mx-auto px-4 py-10 max-w-6xl">
        <div class="mb-8">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white">Profil Sekolah</h2>
            <div class="w-20 h-1 bg-primary mt-2 rounded-full"></div>
        </div>
        <div
            class="w-full h-[400px] bg-gray-200 dark:bg-gray-700 rounded-2xl flex items-center justify-center mb-12 shadow-sm overflow-hidden relative group">
            <div class="text-center z-10">
                <i class="fas fa-image text-6xl text-gray-400 dark:text-gray-500 mb-4"></i>
                <p class="text-2xl font-medium text-gray-500 dark:text-gray-400">Foto Utama Sekolah</p>
            </div>
            <img alt="Gedung Sekolah"
                class="absolute inset-0 w-full h-full object-cover opacity-50 dark:opacity-40 group-hover:opacity-60 transition-opacity duration-300"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBhGGaJSBXrVbjjuJh9rvNf2_Sw8wxAbpF1SRgVnoDmiYiJ1OD20ePBWR1IH5zUhTpkSzvlSyaq1HUhhL9z7iRrmarzGjNyfctJQ1zEFxE0QECKAn5KI36eABDUQC7dMWkilCS0FDWWasQnlDt3791ucW4S8jQ8A-xWIsTpoAZhrueDMFzFfWIVidv8BJS52hmbzd7KoovvePN-cPkZlYHeE70DEfvwcqZrntJ5-4jUPDxt0PktfUZ4xRrHODhG9oWJEG8a_j2x1v0X" />
        </div>
        <div class="max-w-4xl mx-auto text-center mb-16">
            <h3 class="text-2xl font-semibold mb-6 text-gray-800 dark:text-gray-100">Deskripsi</h3>
            <div class="prose prose-lg dark:prose-invert mx-auto text-gray-600 dark:text-gray-300">
                <p>
                    SMK Negeri 1 Kawali adalah lembaga pendidikan kejuruan yang berdedikasi untuk mencetak generasi muda
                    yang kompeten, berkarakter, dan siap bersaing di dunia kerja maupun industri global. Berdiri sejak
                    tahun 2004, sekolah kami terus berkembang dengan fasilitas modern dan kurikulum yang relevan dengan
                    kebutuhan industri masa kini.
                </p>
                <p class="mt-4">
                    Kami berkomitmen menyediakan lingkungan belajar yang inklusif, inovatif, dan berpusat pada siswa,
                    didukung oleh tenaga pengajar profesional di bidangnya masing-masing.
                </p>
            </div>
        </div>
        <div class="grid md:grid-cols-2 gap-8 mb-16">
            <div
                class="bg-gray-200 dark:bg-surface-dark p-10 rounded-2xl shadow-sm text-center flex flex-col items-center justify-center min-h-[400px]">
                <div
                    class="w-16 h-16 bg-white dark:bg-gray-700 rounded-full flex items-center justify-center mb-6 shadow-md">
                    <i class="fas fa-eye text-2xl text-primary"></i>
                </div>
                <h3 class="text-3xl font-bold mb-6 text-gray-900 dark:text-white uppercase tracking-wider">Visi</h3>
                <p class="text-gray-600 dark:text-gray-300 max-w-sm">
                    "Terwujudnya SMK Negeri 1 Kawali sebagai pusat pendidikan dan pelatihan kejuruan yang unggul,
                    berkarakter, dan berdaya saing global pada tahun 2030."
                </p>
            </div>
            <div
                class="bg-gray-200 dark:bg-surface-dark p-10 rounded-2xl shadow-sm text-center flex flex-col items-center justify-center min-h-[400px]">
                <div
                    class="w-16 h-16 bg-white dark:bg-gray-700 rounded-full flex items-center justify-center mb-6 shadow-md">
                    <i class="fas fa-rocket text-2xl text-primary"></i>
                </div>
                <h3 class="text-3xl font-bold mb-6 text-gray-900 dark:text-white uppercase tracking-wider">Misi</h3>
                <ul class="text-gray-600 dark:text-gray-300 text-left list-disc pl-5 space-y-2 max-w-sm mx-auto">
                    <li>Menyelenggarakan pendidikan berkualitas berbasis teknologi.</li>
                    <li>Membangun karakter peserta didik yang beriman dan bertakwa.</li>
                    <li>Meningkatkan kerjasama dengan dunia usaha dan industri.</li>
                    <li>Mengembangkan potensi kewirausahaan siswa.</li>
                </ul>
            </div>
        </div>
        <div class="bg-gray-200 dark:bg-surface-dark rounded-3xl p-8 md:p-12 mb-16">
            <h3 class="text-center text-xl font-bold mb-10 text-gray-800 dark:text-gray-100 uppercase tracking-widest">
                Agenda Mendatang</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="flex flex-col items-center text-center">
                    <div
                        class="w-32 h-32 bg-white dark:bg-gray-700 rounded-full mb-4 flex items-center justify-center shadow-md overflow-hidden hover:scale-105 transition-transform duration-300">
                        <img alt="Event Placeholder" class="w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDoXyOIC9pgcwNfWqefPgh34xyFtCbw-pFa120ET-kl1S3_cf2fdbKVEfLATZMtBwpz2I1Fq0XqxoYDF4sqNPJDFRgCUEhahx15ebldI1qMH2QLe75xwaOwVS3K2gtTi5rwu0nGeOG_0eXD4tEMNZ3Yo7dnC3HjiYy_BggHPNUIl7GUNw5CqQmD-gLB-dVTOfcOZeZn3lL3E268YWNgT-1hm-qa9GoViegnGEFdOqM-Z7YVOslqPhQEmETHLCg4ejramurxGJCOU7cc" />
                    </div>
                    <p class="text-sm font-semibold text-primary dark:text-blue-400">2 Januari 2025</p>
                    <p class="text-gray-800 dark:text-gray-200 font-medium">Pembukaan SMK</p>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div
                        class="w-32 h-32 bg-white dark:bg-gray-700 rounded-full mb-4 flex items-center justify-center shadow-md overflow-hidden hover:scale-105 transition-transform duration-300">
                        <img alt="Event Placeholder" class="w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDSkbj0714cr-e11QVpxLwyTHQFhEhiSV4zFoV0i1LaSqJPBSZFYoo7UCnNGyCC-p8G90NXLWIcXQMeGf6Lc9A3YCyb03pjHkwxhslYYCJR8-HmV2wUTtkiTYrh4wa4E2F2eVpTfOnJ4TM6wO9y_u8MUaW6PekgmqRyb1iJiM2oqA2ziRo_-oSDQay_4F4egM3ijJh5eXibCJZr8obH5Y7f-Fkd5tVrz2L1bFKZdEjLG2mTzrd3GgaeGjV34goBJ-XcziUoFJKebuFc" />
                    </div>
                    <p class="text-sm font-semibold text-primary dark:text-blue-400">15 Februari 2025</p>
                    <p class="text-gray-800 dark:text-gray-200 font-medium">Uji Kompetensi</p>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div
                        class="w-32 h-32 bg-white dark:bg-gray-700 rounded-full mb-4 flex items-center justify-center shadow-md overflow-hidden hover:scale-105 transition-transform duration-300">
                        <img alt="Event Placeholder" class="w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuANRdXHhfjoC3zhR8MNkfBygTFfl4DLFavfikZWZXrbrJVoxIHumfYI1ldskWjVwYDIwlEJpTt7F6njdjU_lfc5oniX_8zgIaT1dtC8XTAOm-G5sUGuhWi0FYbR_jM0cU7vQMMrQ6t-brmv1uyNrY0D8NMW-XUcyFJuRqgsZDKYRFVWvZzDNR9_XLhsma_hqsfG4gJtB0wJkp2hw_p0DsWfTnJ4vaTVvQCpln8mCQ4ipY00_MYVGuMfM3bNWlk6i9_0qr47aAD0U_ry" />
                    </div>
                    <p class="text-sm font-semibold text-primary dark:text-blue-400">20 Maret 2025</p>
                    <p class="text-gray-800 dark:text-gray-200 font-medium">Kunjungan Industri</p>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div
                        class="w-32 h-32 bg-white dark:bg-gray-700 rounded-full mb-4 flex items-center justify-center shadow-md overflow-hidden hover:scale-105 transition-transform duration-300">
                        <img alt="Event Placeholder" class="w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDZBc91L1-zHdg1B_X8qOf4uEHaycz2M8X0xTH3RUT734PRQnkE51o9tz6T-iLva3Wdq67J2N6DxdfTgbAhrlxTp_CO9LHkTlP5PsPYRHweVCMlnGKwMqivaRkLj0gpm1wrHS4to5e3EM6-xlRqXnrgIQ_DQDziAZYQEObeMMZDHbNGlr608CV1mSWrQxEP4yEwVnDjmd1OquJ5AXyZXQ97EbsOeTqokqra7X5zKGC2uuzAhwzioDIj5NGzpkhoGHRsZ3Iy-VEitvxA" />
                    </div>
                    <p class="text-sm font-semibold text-primary dark:text-blue-400">10 April 2025</p>
                    <p class="text-gray-800 dark:text-gray-200 font-medium">Pentas Seni</p>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div
                        class="w-32 h-32 bg-white dark:bg-gray-700 rounded-full mb-4 flex items-center justify-center shadow-md overflow-hidden hover:scale-105 transition-transform duration-300">
                        <img alt="Event Placeholder" class="w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDmuET6bqEWPiaUMLwlh7ausuV67B09sFqlgKKQKA27TX0VfdlCkycKgR6Nk7XjhwI9lzqxjGMCM19UMiTtYJytqdAt0RNod13ApMr4kLQHOMd6kQTkAOSQPgIkHyP1jYB_5pO2V3HUCtnjch4oma84gUndnvajQhROgiEWhloeONZh4CHGUQ5U_LHFAiwe_MPUnZ0CStHuIzM6HW9ww1_Wtn5vnm7LuxjT8r26cgjOxJxx5kRxo5SBbGFH8yRwDx9pud-RArvDKv9c" />
                    </div>
                    <p class="text-sm font-semibold text-primary dark:text-blue-400">2 Mei 2025</p>
                    <p class="text-gray-800 dark:text-gray-200 font-medium">Hari Pendidikan</p>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div
                        class="w-32 h-32 bg-white dark:bg-gray-700 rounded-full mb-4 flex items-center justify-center shadow-md overflow-hidden hover:scale-105 transition-transform duration-300">
                        <img alt="Event Placeholder" class="w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCuDM9FuZI0Vbi3jTiFUSlgEbxo_FAJySAwvdLNTpbmcuXSPCSqu6jx-Du24cKs3a-TIxhK50PtUIYJeu55LmsfKVp92HfhsyJp3lt_LM71CVzY7lUTKRGkdtiVMo2uDNcyy8NPXHFtcIO3VwiL1JHLwKkG7mhKjYXhB6UpMITn-5UXoO2mlepg0M-a89P0H4AgL2BIv_vePDAIrzxUOYzuXG4Y3FzaubiNVe6kHU24-xHp42WWxZB0oA3xsenj8uEPtz7TsDV9k6Kt" />
                    </div>
                    <p class="text-sm font-semibold text-primary dark:text-blue-400">17 Juni 2025</p>
                    <p class="text-gray-800 dark:text-gray-200 font-medium">Wisuda Angkatan 20</p>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div
                        class="w-32 h-32 bg-white dark:bg-gray-700 rounded-full mb-4 flex items-center justify-center shadow-md overflow-hidden hover:scale-105 transition-transform duration-300">
                        <img alt="Event Placeholder" class="w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuArUcNQEO1dpUe593u1jxuwkar6H5cLZAViJWkK5AYcXAg4DZ0c_uc23RKnH3mDaV2OY9-UNzzbkVqYdQsBG9cJrUXiqCf3gG8Ckks5wUgdUXEzmOMQkU9ZJQdygsqxhkgORVMItlJPjXTCBvHdxwDpGIL25J0vhZz0BWW2lrTC748KlieZ2sJ-ep8L1tgfhxZlLq6EkTIcekl9B5u3Y3OCZyxctmYzuwx6Pq9auowpBztxZAqzAXHBbicBb0ijNHXmUeep81N3MksK" />
                    </div>
                    <p class="text-sm font-semibold text-primary dark:text-blue-400">15 Juli 2025</p>
                    <p class="text-gray-800 dark:text-gray-200 font-medium">MPLS Siswa Baru</p>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div
                        class="w-32 h-32 bg-white dark:bg-gray-700 rounded-full mb-4 flex items-center justify-center shadow-md overflow-hidden hover:scale-105 transition-transform duration-300">
                        <img alt="Event Placeholder" class="w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBLYPO4M_zINovZ2DKCsXR6seCIaHwx-6T_jLVJbZqR0Ao-OhtjSPPlBfRr2hTF6USaZQZwhNOVP17vhNPkY4cFqESvSM82VqyCtNN3Fbn2FFRRpnIzgeOxebNskeM7mbO-3VWQqdKE3nu_jlaEpXNiGVRyd_GPDVnPBGHR2bQGV8PjsqJ895Q2lXtCAzWbe-vnTQJ8umkcUZmX_FtPXy92yB_TzRIzduvIYY2_CdDQgwAD5lfPlHwc2m2GVGysnvknp44t8WLwL9hn" />
                    </div>
                    <p class="text-sm font-semibold text-primary dark:text-blue-400">17 Agustus 2025</p>
                    <p class="text-gray-800 dark:text-gray-200 font-medium">Upacara Kemerdekaan</p>
                </div>
            </div>
        </div>
    </main>
</body>
@include('layouts.footer')
</html>