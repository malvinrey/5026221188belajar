<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <meta name="description" content="@yield('meta_description', 'Default Description')">
    <meta name="keywords" content="@yield('meta_keywords', 'Default Keywords')">

    <!-- Favicons -->
    <link href="{{ asset('images/favicon.png') }}" rel="icon">
    <link href="{{ asset('images/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Buat Logo -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=EB+Garamond:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('asset/css/main.css') }}" rel="stylesheet">
</head>
<body class="@yield('body_class', 'default-page')">
    <!-- Header -->
    @include('partials.header')

    <!-- Main Content -->
    @yield('content')

    <!-- Footer -->
    @include('partials.footer')

    <!-- Vendor JS Files -->
    <script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('asset/js/validate.js') }}"></script>
    <script src="{{ asset('asset/js/aos.js') }}"></script>
    <script src="{{ asset('asset/js/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('asset/js/main.js') }}"></script>

    <!-- Custom JS -->
    <script>
        AOS.init(); // Initialize AOS for animations
    </script>
</body>
</html>
