<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- <script src="{{asset('js/vendor/index.global.min.js')}}"></script> --}}
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    {{-- <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script> --}}
    @vite(['resources/css/app.css','resources/css/frontend/home.css', 'resources/js/app.js','resources/js/calendar.js'])
    <!-- Styles -->
    @livewireStyles

    @yield('head')
</head>

<body>
    @auth
    @livewire('navigation-menu')
    @endauth
    @yield('section')
</body>

</html>