<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>School Extracurricular Page - SMK Negeri 1 Kawali</title>
    <!-- Fonts -->
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
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Theme Configuration -->
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#135bec",
                        "background-light": "#f6f6f8",
                        "background-dark": "#101622",
                    },
                    fontFamily: {
                        "display": ["Public Sans", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
</head>

<body
    class="bg-background-light dark:bg-background-dark font-display text-[#111318] antialiased flex min-h-screen flex-col">
    <!-- Header Section -->
   @include('layouts.navbar')
    <!-- Main Content -->
    <main class="flex-1 py-10">
        <div class="mx-auto flex w-full max-w-[960px] flex-col gap-10 px-4 md:px-10">
            <!-- Page Title & Intro -->
            <div class="flex flex-col gap-8">
                <!-- Main Heading -->
                <div>
                    <h1 class="text-4xl font-black tracking-[-0.033em] text-[#111318] lg:text-5xl">Ekstrakulikuler</h1>
                </div>
                <!-- Sub-section Header -->
                <div class="flex flex-wrap items-end justify-between gap-4 border-b border-[#f0f2f4] pb-6">
                    <div class="flex min-w-[280px] flex-col gap-2">
                        <h2 class="text-2xl font-bold leading-tight text-[#111318]">Ekstrakulikuler &amp; Informasi</h2>
                        <p class="text-base font-normal leading-normal text-[#616f89]">Informasi struktur di
                            ekstrakulikuler</p>
                    </div>
                    <button
                        class="group flex h-10 cursor-pointer items-center justify-center gap-2 overflow-hidden rounded-lg bg-[#f0f2f4] px-4 text-sm font-bold leading-normal text-[#111318] transition-colors hover:bg-[#e1e3e5]">
                        <span class="truncate">Selengkapnya</span>
                        <span
                            class="material-symbols-outlined text-lg transition-transform group-hover:translate-x-1">arrow_forward</span>
                    </button>
                </div>
            </div>
            <!-- Activity Grid -->
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Card 1 -->
                <div
                    class="group flex flex-col gap-4 overflow-hidden rounded-xl bg-white p-4 shadow-[0_2px_8px_rgba(0,0,0,0.04)] transition-all hover:shadow-[0_4px_16px_rgba(0,0,0,0.08)]">
                    <div class="aspect-[4/3] w-full overflow-hidden rounded-lg bg-gray-100">
                        <div class="h-full w-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                            data-alt="Scout activity uniform and equipment"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBHGGicmXHhugl4ODSNjUJ-ZNEpZBYfWGeBx02K5BfhqJBo1o-QWWfYnP2HN8LQraK4NRRsk_Txbr77qQ2DzYZjFk7-_YI8LpVwkQSLN8uROdTKFCHkPrjYNLn6WEVRsquEvtaBjKeHYXGBAuVOzM3Z_m215C8py6xBjG-V8TnJQaHVeSDEg8c2uIL15zEZX-6gPF7llpl2jVhwnBDe0mPZ8mo31PmCQCYEM_4e1JOKXlNHkJedxCWgExyJ9LFUZCowS3YWOYas6JL5");'>
                        </div>
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="text-lg font-bold text-[#111318]">Pramuka</p>
                        <p class="text-sm text-[#616f89]">Wajib bagi kelas X</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div
                    class="group flex flex-col gap-4 overflow-hidden rounded-xl bg-white p-4 shadow-[0_2px_8px_rgba(0,0,0,0.04)] transition-all hover:shadow-[0_4px_16px_rgba(0,0,0,0.08)]">
                    <div class="aspect-[4/3] w-full overflow-hidden rounded-lg bg-gray-100">
                        <div class="h-full w-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                            data-alt="Students playing basketball"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCiLyxKQh49EJFQ9BMsJngjEj9Fcx193pjyON3j8ojvW3r-03c08lr5CYzszhHd9-qrdvnT7td9jKULJu0PWkFuD-8trP0vzpII3IuleS3oq6Z0xMuQZQNgfS7GU9uc58kBGyTLhaTZVHpYZ9Cf7FxeI7o4mH7voqhO1HN1xls5W0IzIB2XhjixkWIgUDUB2Qdw2Lf_ZkxaEvgOG4ffCiK5Sx3iTYETBAE4-14lTnn4UfyaG0e8G0hd89j2ObM06vhYatT7Eao1tZlA");'>
                        </div>
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="text-lg font-bold text-[#111318]">Basket</p>
                        <p class="text-sm text-[#616f89]">Tim Putra &amp; Putri</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div
                    class="group flex flex-col gap-4 overflow-hidden rounded-xl bg-white p-4 shadow-[0_2px_8px_rgba(0,0,0,0.04)] transition-all hover:shadow-[0_4px_16px_rgba(0,0,0,0.08)]">
                    <div class="aspect-[4/3] w-full overflow-hidden rounded-lg bg-gray-100">
                        <div class="h-full w-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                            data-alt="Flag raising ceremony practice"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBZeSol81CxhE--hLHrxSR3q91IC29aQwkp3idXwTJNv6nNxutjnEV4EwK3bv709gxHE2LS-FG6d1FO3RaagBy0Ke1fXP75sTjB15VzFNteXmtw80GcZ69RCMa3i01wlWjZ4qd9Ygyl0Sz44hU2d2RU1HM3RGhBsQYNbLqKuSzQTUTrGbHtYgG5-VTdenVi1iBp7D1jInXq4FUXZGx35Ujtp3sTp5aXuQsa2ESrins-x6BhKWF_LGf9HCM1L76wveKNRL5ouB0w_KDD");'>
                        </div>
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="text-lg font-bold text-[#111318]">Paskibra</p>
                        <p class="text-sm text-[#616f89]">Latihan Disiplin Baris Berbaris</p>
                    </div>
                </div>
                <!-- Card 4 -->
                <div
                    class="group flex flex-col gap-4 overflow-hidden rounded-xl bg-white p-4 shadow-[0_2px_8px_rgba(0,0,0,0.04)] transition-all hover:shadow-[0_4px_16px_rgba(0,0,0,0.08)]">
                    <div class="aspect-[4/3] w-full overflow-hidden rounded-lg bg-gray-100">
                        <div class="h-full w-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                            data-alt="First aid training session"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCpIbxgQORTf4_dUZBy2YUOOuVVKppKgKnRDca0UFBqN0RLuZa7aaYOFba6zR4BwPCQZOkBEP4NzOULB98EcueO6J7yqCJMUpGcAZrtlFOvF016mqLcciLTfOl7q_MpjtEY4EQWoa4-Beg8uwAoW1tqqnrpD-08GyYcrrq6JECcWvd0uM55mxJRmmXuE5txBq2VhA8lBBl5LE-Cl2ktqZ-EloOTe8o3tbxspRfwM-nhjWMjv4OCWTPn5R5tBU5HzSiO75lQN_Md0oyy");'>
                        </div>
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="text-lg font-bold text-[#111318]">PMR</p>
                        <p class="text-sm text-[#616f89]">Palang Merah Remaja</p>
                    </div>
                </div>
                <!-- Card 5 -->
                <div
                    class="group flex flex-col gap-4 overflow-hidden rounded-xl bg-white p-4 shadow-[0_2px_8px_rgba(0,0,0,0.04)] transition-all hover:shadow-[0_4px_16px_rgba(0,0,0,0.08)]">
                    <div class="aspect-[4/3] w-full overflow-hidden rounded-lg bg-gray-100">
                        <div class="h-full w-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                            data-alt="Indoor soccer game"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuASp9fR9t5ue89KiIFawpEUoeotJT2RjQc34FRJA0hH5zMeI5kQkS5URTlIw0MnOxoogXaNkEurfeNhx8P0H-8HO9wkzXIEVIwXOZSKN4BI2aIH7fUHOWfwHCKGP65EzRJsbja7mfMcXm-SdTcYI1bwZHg17CoKqOPWAQvC8PhSIG_48ZpxmAmipqoDHv-Q0QdPT3E0bK-qkCnZ_48Da6x2Cp5dx9uqiZQJhdKpL5l0JrhlIlj1_ScUnmO-6nqd8cLH5p9VvQZfr-pp");'>
                        </div>
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="text-lg font-bold text-[#111318]">Futsal</p>
                        <p class="text-sm text-[#616f89]">Kompetisi tingkat daerah</p>
                    </div>
                </div>
                <!-- Card 6 -->
                <div
                    class="group flex flex-col gap-4 overflow-hidden rounded-xl bg-white p-4 shadow-[0_2px_8px_rgba(0,0,0,0.04)] transition-all hover:shadow-[0_4px_16px_rgba(0,0,0,0.08)]">
                    <div class="aspect-[4/3] w-full overflow-hidden rounded-lg bg-gray-100">
                        <div class="h-full w-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                            data-alt="Traditional dance performance"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCFt97btt-xwWCJGL9dD5sYzJR2ATCSzhBHV9_EHDeapoeo6gpjIAcdMiyBo7KOFOdmVGAhj69QH9KfDo2XJRm0z8zxACFGQPvJcu7a2fCTNplSMPzU-C6oPxbzjulEMlTEw2VALruKo2MTZJCh8_3cyN5P1OKuLUp6CNAfXliyKOgishBDcT0Lekk43HhclMBNtYv9KUSqFJidnBbN57UdJEt2AH-K8_ttDMbt3tDqCv0MpgzoPuGi7uhFjaynz15lF-fU2dZxEd5G");'>
                        </div>
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="text-lg font-bold text-[#111318]">Seni Tari</p>
                        <p class="text-sm text-[#616f89]">Pelestarian Budaya Sunda</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer Section -->
      @include('layouts.footer')
</body>

</html>
