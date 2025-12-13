<!DOCTYPE html>
<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Link - SMK Negeri 1 Kawali</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
<script>
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              primary: "#1d4ed8", // Using a trusty blue for primary actions
              "background-light": "#ffffff",
              "background-dark": "#111827",
              "surface-light": "#f3f4f6", // Light gray for sections/cards
              "surface-dark": "#1f2937",  // Dark gray for sections/cards
            },
            fontFamily: {
              display: ["Inter", "sans-serif"],
              sans: ["Inter", "sans-serif"],
            },
            borderRadius: {
              DEFAULT: "0.5rem",
            },
          },
        },
      };
    </script>
</head>
<body class="bg-background-light dark:bg-background-dark text-gray-900 dark:text-gray-100 font-sans antialiased transition-colors duration-200">
@include('layouts.navbar')
<section class="bg-surface-light dark:bg-surface-dark py-12 md:py-16">
<div class="container mx-auto px-4">
<h1 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white">Link</h1>
</div>
</section>
<main class="container mx-auto px-4 py-12 min-h-[600px]">
<div class="flex justify-center mb-12 border-b border-gray-200 dark:border-gray-700">
<div class="flex gap-8">
<a class="pb-2 border-b-2 border-black dark:border-white text-lg font-bold text-gray-900 dark:text-white px-2" href="#">
                    Produk
                </a>
<a class="pb-2 border-b-2 border-transparent text-lg font-medium text-gray-500 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 transition-colors px-2" href="#">
                    Tautan
                </a>
</div>
</div>
<div class="mb-8">
<h2 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white">
                Telusuri SMKN 1 Kawali <br class="md:hidden"/> Lebih Jauh
            </h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
<a class="group relative block w-full h-64 md:h-72 rounded-xl overflow-hidden bg-surface-light dark:bg-surface-dark shadow-sm hover:shadow-md transition-shadow" href="#">
<div class="absolute inset-0 bg-gray-200 dark:bg-gray-800 transition-colors group-hover:bg-gray-300 dark:group-hover:bg-gray-700"></div>
<div class="absolute bottom-0 left-0 p-6 w-full">
<h3 class="text-xl font-medium text-gray-900 dark:text-white group-hover:text-primary transition-colors">
                        LMS SMK Negeri 1 Kawali
                    </h3>
</div>
</a>
<a class="group relative block w-full h-64 md:h-72 rounded-xl overflow-hidden bg-surface-light dark:bg-surface-dark shadow-sm hover:shadow-md transition-shadow" href="#">
<div class="absolute inset-0 bg-gray-200 dark:bg-gray-800 transition-colors group-hover:bg-gray-300 dark:group-hover:bg-gray-700"></div>
<div class="absolute bottom-0 left-0 p-6 w-full">
<h3 class="text-xl font-medium text-gray-900 dark:text-white group-hover:text-primary transition-colors">
                        E-Rapor SMK Negeri 1 Kawali
                    </h3>
</div>
</a>
</div>
</main>
@include('layouts.footer')

</body></html>