<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        {{ trim($__env->yieldContent('title')) ? trim($__env->yieldContent('title')) . ' - ' : '' }}Fulgure
    </title>

    <link rel="shortcut icon" href="/asset/img/logo.png" type="image/x-icon">

    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <!-- SEO -->
    <meta name="robots" content="index, follow"> 
    <meta name="description" content="Un moteur pour vous, pas pour vos données.">

    <meta property="og:title" content="{{ trim($__env->yieldContent('title')) ? trim($__env->yieldContent('title')) . ' - ' : '' }}Fulgure">
    <meta property="og:description" content="Un moteur pour vous, pas pour vos données.">
    <meta property="og:image" content="/asset/img/logo.png">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Fulgure">
    <meta name="og:autor" content="Fulgure">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@Fulgure">
    <meta name="twitter:creator" content="@Fulgure">
    <meta name="twitter:title" content="{{ trim($__env->yieldContent('title')) ? trim($__env->yieldContent('title')) . ' - ' : '' }}Fulgure">
    <meta name="twitter:description" content="Un moteur pour vous, pas pour vos données.">
    <meta name="twitter:image" content="/asset/img/logo.png">

    {{-- <link rel="stylesheet" href="/asset/lib/bootstrap.css"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="bg-light dark:bg-[#1e1e1e] dark:text-[#f5f5f5]">
    @include('partials.header')

    @yield('body')

    @include('partials.footer')
    <script src="/asset/lib/jquery.js"></script>
</body>
</html>