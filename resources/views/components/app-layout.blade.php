<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite('resources/css/app.css')
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        html {
            scroll-behavior: smooth
        }

        .rotate {
            transform: rotate(180deg);
        }
    </style>
    @livewireStyles
</head>

<body>
    <x-navigation />
    {{ $slot }}
    <x-success-message />

    <livewire:in-stock-error />
    @livewireScripts
</body>
<script src={{ asset('js/navbarCollapse.js') }}></script>

</html>
