<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kugoo</title>
    <meta name="description" content="Kugoo Самокаты">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
{{--    <link rel="manifest" href={{ asset('/build/manifest.webmanifest') }}>--}}
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#464eb6">
    <meta name="apple-mobile-web-app-title" content="Kugoo">
    <meta name="application-name" content="Kugoo">
    <meta name="msapplication-TileColor" content="#464eb6">
    <meta name="theme-color" content="#464eb6">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    @vite(['resources/sass/app.scss'])
    <!-- Service Worker Registration -->
{{--    <script src="{{ asset('/build/registerSW.js')}}"></script>--}}
@stack('styles')
</head>
<body>
<div class="wrapper" id="app">
    <x-header></x-header>
    <div class="body-content">
        @yield('content')
    </div>
    <x-footer></x-footer>
</div>
@vite('resources/js/app.js')
</body>
</html>
