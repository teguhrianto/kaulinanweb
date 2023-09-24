<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        @yield('title')
    </title>
    <meta name="description"
        content="Dunia Montessori dalam Permainan Berkualitas. Produk-mainan terbaik untuk pendidikan anak-anak melalui konsep Montessori di situs resmi Kaulinan. Pengalaman belajar luar biasa!">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="theme-color" content="#ffffff">
    @vite('resources/scss/app.scss')
    @stack('styles')
</head>

<body>
    <!-- Header block -->
    @include('layouts.includes.header')
    <!-- / Header block -->

    {{-- Main --}}
    <main class="main">
        @yield('content')
    </main>
    <!-- Footer block -->
    @include('layouts.includes.footer')
    <!-- / Footer block -->
    
    <button id="backToTopButton" type="button" class="btn-top"><i class="fa-solid fa-arrow-up"></i></button>

    <!-- Scripts -->
    @vite('resources/js/app.js')

    @stack('scripts')
    <!-- / Scripts -->

</body>

</html>
