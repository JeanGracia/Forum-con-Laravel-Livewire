<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Forum') }}</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- JG -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gradient-to-r from-slate-800 to-slate-900"> <!-- JG -->
            <div class="bg-gradient-to-r from-slate-900 to-slate-800 h-2"></div> <!-- JG -->
            @include('components.layouts.navigation') <!-- JG -->

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <!-- JG -->
        @livewireScripts
    </body>
</html>
