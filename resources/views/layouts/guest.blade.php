<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        @livewireStyles
    </head>
    <body>
        <div class="font-sans text-white bg-gray-800 min-h-screen antialiased">
            <picture class="absolute top-12 left-16 w-64">
                <source srcset="{{ asset('img/logo-inr-webp.webp') }}">
                <source srcset="{{ asset('img/logo-inr.jpeg') }}">
                <img src="{{ asset('img/logo-inr.jpeg') }}" alt="Logo INR">
            </picture>

            {{ $slot }}

            <div class="w-full">
                <div class="flex justify-center">
                    <picture class="mr-4">
                        <source srcset="{{ asset('img/agence.webp') }}">
                        <source srcset="{{ asset('img/agence.jpeg') }}">
                        <img src="{{ asset('img/agence.jpeg') }}" class="h-24" alt="Logo Agence">
                    </picture>
                    <picture>
                        <source srcset="{{ asset('img/med.webp') }}">
                        <source srcset="{{ asset('img/med.jpeg') }}">
                        <img src="{{ asset('img/med.jpeg') }}" class="h-24" alt="Logo Med">
                    </picture>
                </div>
            </div>
        </div>

        @livewireScripts
    </body>
</html>
