<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark" class="dark">
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
    <meta name="description" content="Nxtransfert envoyez jusqu'a 50 Go - Gratuit et sans inscrition - Gardez vos transfert pendant 30 jours">

    <meta property="og:title" content="{{ trim($__env->yieldContent('title')) ? trim($__env->yieldContent('title')) . ' - ' : '' }}Nxtransfert">
    <meta property="og:description" content="Nxtransfert envoyez jusqu'a 50 Go - Gratuit et sans inscrition - Gardez vos transfert pendant 30 jours">
    <meta property="og:image" content="/asset/img/logo.png">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Nxtransfert">
    <meta name="og:autor" content="Nxtransfert">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@NexHostFR">
    <meta name="twitter:creator" content="@NexHostFR">
    <meta name="twitter:title" content="@yield('title', "") - Nxtransfert">
    <meta name="twitter:description" content="Nxtransfert envoyez jusqu'a 50 Go - Gratuit et sans inscrition - Gardez vos transfert pendant 30 jours">
    <meta name="twitter:image" content="/asset/img/logo.png">

    <link rel="stylesheet" href="/asset/lib/bootstrap.css">
</head>
<body>
    @include('partials.header')

    @yield('body')

    @include('partials.footer')
</body>
</html>