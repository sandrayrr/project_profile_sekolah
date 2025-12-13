<!DOCTYPE html>
<html lang="id">

<head>
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
                        // Mengubah primary ke biru agar terlihat di latar putih
                        primary: "#3B82F6",
                        
                        // Semua background dibuat putih
                        "background-light": "#FFFFFF",
                        "background-dark": "#FFFFFF",
                        
                        // Semua card jadi putih
                        "card-light": "#FFFFFF",
                        "card-dark": "#FFFFFF",
                        
                        // Warna teks gelap dibuat abu tua supaya tidak hitam
                        "text-light": "#1F2937",
                        "text-dark": "#1F2937",
                        
                        // Warna muted (abu) – tetap abu, bukan hitam
                        "muted-light": "#6B7280",
                        "muted-dark": "#6B7280",
                    },
                    fontFamily: {
                        sans: ["Inter", "sans-serif"],
                        display: ["Playfair Display", "serif"],
                    },
                    borderRadius: {
                        DEFAULT: "0.5rem",
                    },
                },
            },
        };
    </script>
    <style>
        ::-webkit-scrollbar {
            width: 8px;
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
            background: #f1f1f1;
        }

        .dark ::-webkit-scrollbar-thumb {
            background: #888;
        }
    </style>
</head>

<body
    class="bg-white dark:bg-background-dark text-text-light dark:text-text-dark font-sans transition-colors duration-300">
    @include('layouts.navbar')
    <section class="relative bg-white h-[500px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0">
            <img alt="School Building" class="w-full h-full object-cover opacity-40"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDKsD0iWHwP7lyuF6dte1SHPLSWg5FrWNESwqS0yqnUMMdRcjA3b6l9F41sDXJiqOPlYyLp9WuP_4G5U1ap17glnLv3uqyo069a9hQrle65MciKSnu9nZ-nd3dMoZOnC2tnGtl9fEmyNVkFLBu74HmIYdRvh-xaREUU3ortPMpTZuGdvRkz52cTYMEdYzCO-YdibDJabDwTedSC1EYMDS5p83V6KcmsdFBceclQR1mBUfmol2tHdamxG93AUv8KJWgLwPghS1Ae1UhA" />
            <div class="absolute inset-0 bg-gradient-to-t from-white to-transparent">
            </div>
        </div>
        <div class="container mx-auto px-4 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl font-display font-bold mb-4">Membangun Generasi Unggul</h1>
            <p class="text-lg md:text-xl text-muted-light max-w-2xl mx-auto mb-8">Selamat datang di
                website resmi SMK Negeri 1 Kawali. Pusat keunggulan pendidikan vokasi.</p>
            <div class="flex justify-center gap-4">
                <a class="px-6 py-2 rounded-full bg-primary text-white hover:bg-blue-600 transition flex items-center gap-2"
                    href="#">
                    Selengkapnya <span class="material-icons text-sm">arrow_forward</span>
                </a>
            </div>
            <div class="mt-8 flex justify-center gap-4">
                <button
                    class="p-2 rounded-full border border-gray-400 hover:bg-gray-100 transition">
                    <span class="material-icons">arrow_back</span>
                </button>
                <button
                    class="p-2 rounded-full border border-gray-400 hover:bg-gray-100 transition">
                    <span class="material-icons">arrow_forward</span>
                </button>
            </div>
        </div>
    </section>
    <section class="py-12 -mt-24 relative z-20">
        <div class="container mx-auto px-4">
            <div
                class="bg-white rounded-xl shadow-lg p-8 grid grid-cols-1 md:grid-cols-12 gap-8 items-center">
                <div class="md:col-span-3 flex justify-center md:justify-start">
                    <div
                        class="w-48 h-48 rounded-full overflow-hidden border-4 border-gray-100 shadow-md">
                        <img alt="Kepala Sekolah" class="w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAzO25NEdgIt_C2vZGT31xlhkkocx601JicQnE2JU2hMESC8qTW96POvdPC-rqeWB6oUJq_or-i-a-TdFpuA5v0N1WxmyWhS6M7xGsN-gB1lDRi_JNQuWu8ABFj4iRgCw_RCMsHIZ3E-dQ4_W13huhJK0UfR2iqe4rWqAnBd5yiJzBbw5QJPpKrnQLIo0wzRCxoj5ZRZcG5MvGDEPAF6ORq8KPDzSmntUWKvolwuZ98ZoGVyxhW5QwEjxL3sd3qU_m-rVOAqfBAzOyj" />
                    </div>
                </div>
                <div class="md:col-span-5 text-center md:text-left">
                    <h2 class="text-2xl font-bold mb-2">Sambutan Kepala Sekolah</h2>
                    <p class="text-muted-light mb-6">
                        Assalamu'alaikum Wr. Wb. Selamat datang di website resmi kami. Kami berkomitmen untuk memberikan
                        pendidikan terbaik bagi putra-putri bangsa.
                    </p>
                    <a class="inline-flex items-center gap-2 text-sm px-5 py-2 rounded-full bg-gray-100 hover:bg-primary hover:text-white transition-colors"
                        href="#">
                        Selengkapnya <span class="material-icons text-sm">arrow_forward</span>
                    </a>
                </div>
                <div class="md:col-span-4 border-l-0 md:border-l border-gray-200 pl-0 md:pl-8">
                    <h3 class="text-lg font-semibold mb-6 text-center md:text-left">Data Statistik Sekolah</h3>
                    <div class="flex justify-between text-center">
                        <div>
                            <span class="block text-3xl font-bold text-primary">1200</span>
                            <span class="text-xs text-muted-light uppercase tracking-wider">Siswa</span>
                        </div>
                        <div class="w-px bg-gray-200 h-12"></div>
                        <div>
                            <span class="block text-3xl font-bold text-primary">85</span>
                            <span class="text-xs text-muted-light uppercase tracking-wider">Guru</span>
                        </div>
                        <div class="w-px bg-gray-200 h-12"></div>
                        <div>
                            <span class="block text-3xl font-bold text-primary">6</span>
                            <span class="text-xs text-muted-light uppercase tracking-wider">Jurusan</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-end mb-8">
                <div>
                    <h2 class="text-3xl font-bold mb-2">Agenda</h2>
                    <p class="text-muted-light">Agenda kegiatan dan Aktivitas sekolah yang akan datang</p>
                </div>
                <a class="hidden sm:inline-flex items-center gap-2 text-sm px-4 py-2 rounded-full bg-gray-100 hover:bg-primary hover:text-white transition-colors"
                    href="#">
                    Selengkapnya <span class="material-icons text-sm">arrow_forward</span>
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div
                    class="bg-white rounded-xl shadow-sm overflow-hidden group hover:shadow-md transition-shadow border border-gray-100">
                    <div class="p-6 h-40 flex items-center justify-center bg-gray-50">
                        <h3 class="text-xl font-semibold text-center group-hover:text-primary transition-colors">Rapat
                            Komite Sekolah</h3>
                    </div>
                    <div
                        class="bg-gray-50 px-6 py-3 border-t border-gray-100 flex justify-between items-center text-sm text-muted-light">
                        <div class="flex items-center gap-2">
                            <span class="material-icons text-base">event</span>
                            <span>20 Oktober 2023, 08:00 WIB</span>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-white rounded-xl shadow-sm overflow-hidden group hover:shadow-md transition-shadow border border-gray-100">
                    <div class="p-6 h-40 flex items-center justify-center bg-gray-50">
                        <h3 class="text-xl font-semibold text-center group-hover:text-primary transition-colors">Ujian
                            Tengah Semester Ganjil</h3>
                    </div>
                    <div
                        class="bg-gray-50 px-6 py-3 border-t border-gray-100 flex justify-between items-center text-sm text-muted-light">
                        <div class="flex items-center gap-2">
                            <span class="material-icons text-base">event</span>
                            <span>25 Oktober 2023, 07:00 WIB</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-6 text-center sm:hidden">
                <a class="inline-flex items-center gap-2 text-sm px-4 py-2 rounded-full bg-gray-100 hover:bg-primary hover:text-white transition-colors"
                    href="#">
                    Selengkapnya <span class="material-icons text-sm">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-end mb-8">
                <div>
                    <h2 class="text-3xl font-bold mb-2">Berita, Artikel &amp; Informasi</h2>
                    <p class="text-muted-light">Berita, Artikel &amp; Informasi sekolah kami</p>
                </div>
                <a class="hidden sm:inline-flex items-center gap-2 text-sm px-4 py-2 rounded-full bg-gray-100 hover:bg-primary hover:text-white transition-colors"
                    href="#">
                    Selengkapnya <span class="material-icons text-sm">arrow_forward</span>
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="group cursor-pointer">
                    <div class="rounded-xl overflow-hidden h-64 bg-gray-100 relative mb-4">
                        <img alt="News Image"
                            class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDKe2bytjlZZeVN16wNV6gKn3gPSurQWy_tlNPP55OifFnAieizTe2_iQQltsgFVmS2g_xruIZz9hc0oVF8ZOHALiPq1wDNx2s6CqoeftjufhcvkdY5NnZdUe1EpKk3UKo5FXPCT3Zptau7cgpZojI5FH5A04WwLhhF45j1reUlsWwVTM-JxJrfO8pb-0LTrkAkvn6gUfJLTmcD6xQNNiHx-5nljFUMZh_HJO2eVBGaNxPF8QW05oeKIQr8ISd6-D6CScQNykMe-VCS" />
                    </div>
                    <div>
                        <span class="text-sm text-primary font-medium mb-1 block">15 Oktober 2023</span>
                        <h3 class="text-xl font-bold group-hover:text-primary transition-colors">Prestasi Siswa SMK
                            Negeri 1 Kawali di Tingkat Nasional</h3>
                        <p class="text-muted-light mt-2 line-clamp-2">Siswa-siswi berprestasi
                            kembali mengharumkan nama sekolah dengan memenangkan lomba kompetensi siswa...</p>
                    </div>
                </div>
                <div class="group cursor-pointer">
                    <div class="rounded-xl overflow-hidden h-64 bg-gray-100 relative mb-4">
                        <img alt="News Image"
                            class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuD0NmnEmo0afvGaHJLXk21420pbhAvqmbZtUjrVxGJqkq-XwzQLm6dRG9DlWk_EggHFYjptlju-P4Bqk9utAgvF2m6UP1ifDWp3ayXsl6nwfJwC7BwxKLIDQXHGhzkqc-4yPcXL2WRS5PcBc34axvbVnUBi39yiLxWFu65Sxq6RRbI4ye_H0MdPJ2vVWobITrceGD3Ae4Wiz-o-worl0Q_2Ebh4tmur1emZVuO8N7sBPXHwTTRN2LRG_-QZNcRVO8SnsEF4q5GC-1qU" />
                    </div>
                    <div>
                        <span class="text-sm text-primary font-medium mb-1 block">12 Oktober 2023</span>
                        <h3 class="text-xl font-bold group-hover:text-primary transition-colors">Kunjungan Industri ke
                            Perusahaan Teknologi Terkemuka</h3>
                        <p class="text-muted-light mt-2 line-clamp-2">Dalam rangka meningkatkan
                            wawasan siswa, program keahlian TKJ melakukan kunjungan industri...</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-end mb-8">
                <div>
                    <h2 class="text-3xl font-bold mb-2">Guru</h2>
                    <p class="text-muted-light">Guru Di SMK Negeri 1 Kawali</p>
                </div>
                <a class="hidden sm:inline-flex items-center gap-2 text-sm px-4 py-2 rounded-full bg-gray-100 hover:bg-primary hover:text-white transition-colors"
                    href="#">
                    Selengkapnya <span class="material-icons text-sm">arrow_forward</span>
                </a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div
                    class="bg-white rounded-xl p-4 shadow-sm hover:shadow-lg transition-all text-center border border-gray-100">
                    <div class="w-full h-64 bg-gray-100 rounded-lg overflow-hidden mb-4">
                        <img alt="Guru" class="w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCVJwt0AmhdjOlhjUPmBEWcd8HU9Brsv1aX37sW2mV5g7F6mLaMGUs6nknGY7APx9i9TscA2h4UAq3wo10U5QAh0qdvyVg5W_ZRBZGM_V-Eo3KEqc7G0z_WTaF6QKkR4d6dvLEqfDvIhGdMhgYgbxzabfA1PULTnB7U1rKSI0McT7AsoWoxXvTLkMeHZmFgFQh20lbYpNym-aNGeBLg4fNZS6LNao3pGDQcNpTup-BMly5yDHLMM-wRJM_QUgBDOBqEeuRONZqDCVPz" />
                    </div>
                    <h3 class="text-lg font-bold">Dra. Siti Aminah</h3>
                    <p class="text-primary text-sm">Matematika</p>
                </div>
                <div
                    class="bg-white rounded-xl p-4 shadow-sm hover:shadow-lg transition-all text-center border border-gray-100">
                    <div class="w-full h-64 bg-gray-100 rounded-lg overflow-hidden mb-4">
                        <img alt="Guru" class="w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuArmL8enjex2tncSnWqAR1INd3JWxrGqS3VghPqAQShmbA4DMvVXHwHGd0__NDJlMte2r4wo34tLU3A5OHl50Xpp1y18Cw609MVxeQXXDMeEndapUoroKjbuXQzj08xR3Lw2cf1rSGvMPkgMwNnZRJno-lIsh1iefcPGDSpwrT3d8JQucR-clQFRK69UYgo-7ViBw_oR2Ooa2aZOXbPs1sxdnL8WE3VDa04sDfI3T_-5YlRir6Y-XBBbXV1XpTP8ej0NSmkVubxL49O" />
                    </div>
                    <h3 class="text-lg font-bold">Budi Santoso, S.Pd</h3>
                    <p class="text-primary text-sm">Bahasa Inggris</p>
                </div>
                <div
                    class="bg-white rounded-xl p-4 shadow-sm hover:shadow-lg transition-all text-center border border-gray-100">
                    <div class="w-full h-64 bg-gray-100 rounded-lg overflow-hidden mb-4">
                        <img alt="Guru" class="w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDT9pAuEdrBGrv19honeKPPk32mten4J5JGyD23Fuvj4japcH5ySoEEg_HsgAjI3NP4S52v-jwqfe44VmrsDXfdNzvi2Pu3qk-n-dKH-vL5sQPYYfvenMr1AiSbQY8-ya22bqNDcPBBDAMA-kZu_XozsYoOghRF5E3djbKer85i35V__LQpDtGkrQo_6eTkgYmU27FnwSJLmIW3DXicVkVvFNE05LKDzhg0YalMfWDpi_sxcS2f9m1CKiXBOlwN38k2V6fPlLellnYY" />
                    </div>
                    <h3 class="text-lg font-bold">Rina Wati, M.Kom</h3>
                    <p class="text-primary text-sm">Teknik Komputer</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-end mb-8">
                <div>
                    <h2 class="text-3xl font-bold mb-2">Staff Tenaga Kependidikan</h2>
                    <p class="text-muted-light">Staff Tenaga Kependidikan Di SMK Negeri 1 Kawali</p>
                </div>
                <a class="hidden sm:inline-flex items-center gap-2 text-sm px-4 py-2 rounded-full bg-gray-100 hover:bg-primary hover:text-white transition-colors"
                    href="#">
                    Selengkapnya <span class="material-icons text-sm">arrow_forward</span>
                </a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div
                    class="bg-white rounded-xl p-4 shadow-sm hover:shadow-lg transition-all text-center border border-gray-100">
                    <div class="w-full h-56 bg-gray-100 rounded-lg overflow-hidden mb-4">
                        <img alt="Staff" class="w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDwdipWhOWEgL_4GnanIEgZjqf4EWIObInhTZ3y3LJKMZ6eMJeBw9mqNZlKhz6nQtcccc8T5lBeCxj2OaD_1wFEPxD0C3IUgziAD8NbsJfwHHTWA0fhP0JZXTyXJ_OD4MiyDIi9nxy1wroIp7tgK_WKwGqTqREVn3p-jPFbG4WAhN3RVUjBvSWEc3tR-ZcyxC-G8knjnzUHtB5EPdZwqVFFpR6Lvc6U6OJxtByzZSBq_AfoemROP1ghzz_Lt8vCy5vshYzZMMYfWsD8" />
                    </div>
                    <h3 class="text-lg font-bold">Ahmad Fauzi</h3>
                    <p class="text-muted-light text-sm">Kepala Tata Usaha</p>
                </div>
                <div
                    class="bg-white rounded-xl p-4 shadow-sm hover:shadow-lg transition-all text-center border border-gray-100">
                    <div class="w-full h-56 bg-gray-100 rounded-lg overflow-hidden mb-4">
                        <img alt="Staff" class="w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBjjXj-9t8kBd9X6DHluW-NnKePWaShI7ml0hpH0SEU8gS61ugo23w6_wp9IhvBcD-D0a334bjBWV0pD5LNJuQpuWK3B1_PvQ_1hiyXTVSbvH3BR5FvLxysipBdkOLEzmUVAfhjgCzLLc7ugkjjNkGLx43Gu4CAOFTl00s1mLxzkEI8SPNBEzpf3wq-cXyGnfZqbjxBu91gV5-eS79KtOe1cy-GS3uR7F6F41qDokTCfaa4CAFKB1PLwUIGcMmclsoU4RQFbkFMiw7f" />
                    </div>
                    <h3 class="text-lg font-bold">Dewi Sartika</h3>
                    <p class="text-muted-light text-sm">Bendahara</p>
                </div>
                <div
                    class="bg-white rounded-xl p-4 shadow-sm hover:shadow-lg transition-all text-center border border-gray-100">
                    <div class="w-full h-56 bg-gray-100 rounded-lg overflow-hidden mb-4">
                        <img alt="Staff" class="w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBWAdNTYcIvo4jKDsB4MUX_AnflT85f5b68q-64Fw0OZHQ2whd7dAhK1m4VB3Nv7LJCPxykvuSpvFb8kWgAuwTgVQKW4qpc-cEYnfTM7tQwDl35Uht8srJZjXMQglmQDrX116iMUKDIzKW_kQ8wJENUJpJMwbVnuttmHkBcdot8NSa2C_67cACifJXdKxeEI38PjQZYanoSNnkqr2lL9JQ136TdtCkw11aCVIdVK2UpkcFXyjGqp-yY52uUYIaNtR_R7jYeKcqTqbGg" />
                    </div>
                    <h3 class="text-lg font-bold">Rudi Hartono</h3>
                    <p class="text-muted-light text-sm">Administrasi</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-end mb-8">
                <div>
                    <h2 class="text-3xl font-bold mb-2">Program Keahlian</h2>
                    <p class="text-muted-light">Program Keahlian yang terdapat di sekolah kami</p>
                </div>
                <a class="hidden sm:inline-flex items-center gap-2 text-sm px-4 py-2 rounded-full bg-gray-100 hover:bg-primary hover:text-white transition-colors"
                    href="#">
                    Selengkapnya <span class="material-icons text-sm">arrow_forward</span>
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div
                    class="flex flex-col md:flex-row bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all border border-gray-100">
                    <div
                        class="p-8 flex items-center justify-center md:justify-start md:w-1/2 bg-gray-50">
                        <h3 class="text-xl font-bold text-center md:text-left">Teknik Komputer &amp; Jaringan</h3>
                    </div>
                    <div class="md:w-1/2 h-48 md:h-auto relative">
                        <img alt="TKJ" class="w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBbhUIC0eKgPWY0GQSscVxrNVUUo0JPmzAe-x_qizM1bSpfr5Cj2r7kU38APUaLsCSrUEJ1bjF460WkzIewk2OoDF78WMl8uRLrIGHVVUxdWFmozJ_QjOVXx1fEGQYNLFJyzwZK8f1x8mm0_RaL92MHAM46fl-UcKI65EKcfearKe3-EEhXIPh-owbwkuuTjE1LAEixjOVHCL1ZUCMnCAO_8E8bo1hC8y3VWjCa8ev4j9JWe_oAdrHKD9YI9whJ25NaSZV3cAfE8X9k" />
                    </div>
                </div>
                <div
                    class="flex flex-col md:flex-row bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all border border-gray-100">
                    <div
                        class="p-8 flex items-center justify-center md:justify-start md:w-1/2 bg-gray-50">
                        <h3 class="text-xl font-bold text-center md:text-left">Otomatisasi Tata Kelola Perkantoran</h3>
                    </div>
                    <div class="md:w-1/2 h-48 md:h-auto relative">
                        <img alt="OTKP" class="w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAsXwglT5DghlGbxzGzJ_zU03nh4LblG7XK-gxBilN_WZbPEuUcIRUqqk1SCSMS03rytfV2hjstrOwdHIl7lQtdTl1TutumU_P2fEmPvpXqENE_6GqNamx4Dlglr4knZ55JXq5mFAH7Wd-QuWeD9o_RQaWry1sXWsOpyziYkUJypgfmwWCCPKJsYVqo8IjkRtCQE2Fp0FpcRILtuZbEuYIGFDiUknFtfvKogwlMfv9t8WILujedu2efloDfr7mHms27dJfK2dIDW-t0" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-end mb-8">
                <div>
                    <h2 class="text-3xl font-bold mb-2">Fasilitas Sekolah</h2>
                    <p class="text-muted-light">Fasilitas sekolah yang kami miliki</p>
                </div>
                <a class="hidden sm:inline-flex items-center gap-2 text-sm px-4 py-2 rounded-full bg-gray-100 hover:bg-primary hover:text-white transition-colors"
                    href="#">
                    Selengkapnya <span class="material-icons text-sm">arrow_forward</span>
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="flex flex-col md:flex-row rounded-xl overflow-hidden shadow-sm h-48 border border-gray-100">
                    <div class="md:w-1/2 bg-white h-full relative">
                        <img alt="Lab Komputer" class="w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCHbWHZ_qTFw5h7DP9AA_rUdqzUzSGNo3TVezBuH7j2lV_xsgELtLoYKTfskGFNCsI_NIazyHqKqJH9UTOA4g_9icf26qCO8JaQOaCjfVHmEa7AlGaaG36B9NaMNC1E-FRp5MGwCGG5Md6y6c2Nnnkn3BC2Vis6VT2Iw-u5wx4czPBUsjnxW6P4HTyxeJxXx0eSo3GU6Twht-Fa6rnwIrkEUkITZpCgLaVub5Pzho5FMo6Fxf113AXEcL3HZwZnjqRE50QPs5vPhlb-" />
                    </div>
                    <div class="md:w-1/2 h-full flex items-center justify-center bg-gray-50">
                        <h3 class="text-xl font-bold">Laboratorium Komputer</h3>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row rounded-xl overflow-hidden shadow-sm h-48 border border-gray-100">
                    <div class="md:w-1/2 bg-white h-full relative">
                        <img alt="Perpustakaan" class="w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBMTXhHeh5DWWaRKAwM1_x_-3izQz7nn1Euk4NlB6jBERhhgwxA-PSK_djXlzAQQdQmcMyt1Ntg5m8J1rMxFq3wVd49XZ6jdGsi9Wyll1IMvVQW5jUQkeh1YbNoW3U6vFYyi5BafBnQJ9zRFXRX35-p_vLAlyTk_2-y3OGaBmv2X84pNpcve8UfHRb4pmOSrZ_gYDbnHEiv6z2BgT4WdHK790H_bBG5_gHLa1spjC1a75kTdEgmCjtgvQSxqxnkRwNpJb6xfCAVdFas" />
                    </div>
                    <div class="md:w-1/2 h-full flex items-center justify-center bg-gray-50">
                        <h3 class="text-xl font-bold">Perpustakaan Digital</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-end mb-8">
                <div>
                    <h2 class="text-3xl font-bold mb-2">Ekstrakulikuler</h2>
                    <p class="text-muted-light">Ekstrakulikuler yang ada di sekolah kami</p>
                </div>
                <a class="hidden sm:inline-flex items-center gap-2 text-sm px-4 py-2 rounded-full bg-gray-100 hover:bg-primary hover:text-white transition-colors"
                    href="#">
                    Selengkapnya <span class="material-icons text-sm">arrow_forward</span>
                </a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                <div class="rounded-xl overflow-hidden shadow-sm group border border-gray-100">
                    <div class="h-56 bg-gray-100 relative">
                        <img alt="Pramuka"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAI6OLBQ5tnDWmp3fT2eZ8G3CQic7acMlrAzUqlyzCmEmzE4l1Ss0K4_SLmP8SswWGMWJ7QZBvof_1R5hvr44xe8oDCmhg1F-NMst2_erVV-I2QI2SU_v_I1YQ-age-04d1W2TfbJBaCpvcDrbNEu_XKpuc2p5Wzchjm-nqQFvUdZex0WGhUqvHvbKTn2spO85WKlmk14e56BXy1h0VRXm_v0qa_Lek-jfgNZ8iZt0hxVJCvX_2QJcaM6DRIPBSBv9dZwuy-Z9fXPdj" />
                    </div>
                    <div class="bg-gray-50 p-4 text-center">
                        <h3 class="text-lg font-bold">Pramuka</h3>
                    </div>
                </div>
                <div class="rounded-xl overflow-hidden shadow-sm group border border-gray-100">
                    <div class="h-56 bg-gray-100 relative">
                        <img alt="Futsal"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAq4WAVNDT8wwdQ8StYY1XOC8vxx8TfTq2hda-IASmMjwcxR4Wr3RUuQkj9j9FfnkY_yhuIi-Wuo99enryuz5PNpZ6XkDoFzNRWqJj1dF9Xjedt86dM8cYBUD3PaidieDCUN1Gt5fyYpgWOfTo8nvXNIA_OkvLMHJPJlajsi6VzCSxCkcZOpxpkL6uuPuLdeIcIa_1Bwcx7pMLEQ5r0WPXFeYWOTUZdmeCm25T5E6LuEnewVs5YXq1772AtMtJ-bSKpRa5wCCUqCWXw" />
                    </div>
                    <div class="bg-gray-50 p-4 text-center">
                        <h3 class="text-lg font-bold">Futsal</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-2">Testimoni</h2>
                <p class="text-muted-light">Tesimoni Alumni mengenai sekolah kami</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-sm relative pt-12 border border-gray-100">
                    <span
                        class="absolute top-8 right-8 text-6xl text-gray-200 font-serif leading-none">“</span>
                    <p class="text-lg italic text-muted-light mb-8 relative z-10">
                        "Sekolah ini memberikan fondasi yang sangat kuat bagi karir saya. Guru-gurunya sangat kompeten
                        dan fasilitasnya sangat mendukung pembelajaran praktek."
                    </p>
                    <div class="flex items-center gap-4 border-t border-gray-100 pt-6">
                        <div class="w-14 h-14 bg-gray-100 rounded-full overflow-hidden">
                            <img alt="Alumni" class="w-full h-full object-cover"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuA4XvFAI8a1woEKszYZSLi-VZ29rDauLXu6Ht-Fj-TKoFkOCcegKuSNqafn0sWaFuSttgoZ-ztskXSdOEzFKGtTtrcHKB6HfTtstDjPLKCsivzcTPAUlwLh4ovCoybBmChtL-yATyOYDJel59hinamnFVbE2Gs2ymTTyBQyk7zIYHriP4Maf_wJGc0oB-a8Axsx-i6igIonj8yC73qdLrVI7SjFzZO0G1QYKiOTy9pJc3mnVL9WjuXB39ydmoeJqmbuqZ87eYecXGNh" />
                        </div>
                        <div>
                            <h4 class="font-bold">Andi Pratama</h4>
                            <p class="text-sm text-primary">Angkatan 2018</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm relative pt-12 border border-gray-100">
                    <span
                        class="absolute top-8 right-8 text-6xl text-gray-200 font-serif leading-none">“</span>
                    <p class="text-lg italic text-muted-light mb-8 relative z-10">
                        "Saya sangat bangga menjadi alumni SMK Negeri 1 Kawali. Banyak skill yang saya dapatkan disini
                        yang sangat berguna di dunia kerja saat ini."
                    </p>
                    <div class="flex items-center gap-4 border-t border-gray-100 pt-6">
                        <div class="w-14 h-14 bg-gray-100 rounded-full overflow-hidden">
                            <img alt="Alumni" class="w-full h-full object-cover"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDVPDPwxc4AOtuu9SFgEkuNuErvXLHcjHkFDgohuU1iCZOmRMGD04114XqZjsSljufUYyeUO7XGAHsvlUeQLyThf5IbkfjbfeJARpeYbT1wgu6MccEtPSRqA0tRaRNLR9HkE9YANxQDQwdZNWohrF2atKpoR8-9sddjwEPub_BhkikhfnsKluksAWzsmeXp4qMVAztPyEKsrZHg4WE5p4WJpsAxmaGSbhHxksdewxKbuk8UNk4T8hLlOa-rFcruM0gJt-F1nCrE5L-u" />
                        </div>
                        <div>
                            <h4 class="font-bold">Sari Indah</h4>
                            <p class="text-sm text-primary">Angkatan 2020</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')
    <script>
        // Simple dark mode toggle for demonstration (optional, not requested but good for testing)
        // Check system preference on load
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            document.documentElement.classList.add('dark');
        }
    </script>

</body>

</html>