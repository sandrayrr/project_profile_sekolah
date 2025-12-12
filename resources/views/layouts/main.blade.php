<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Website SMK')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body>
    <!-- Memanggil file navbar yang baru kita buat -->
    @include('layouts.navbar')

    <!-- Konten Halaman -->
    <main>
        @yield('content')
    </main>

    <!-- @include('layouts.footer')  --> <!-- Footer Anda di sini -->
</body>
</html>