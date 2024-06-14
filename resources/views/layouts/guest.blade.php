<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
       
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

        <!-- Styles -->
        {{-- @livewireStyles --}}
    </head>
    <body  dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
        <div class="min-h-screen flex flex-col">
            
            <main class="flex-1">
                <div class="font-sanss text-gray-900 dark:text-gray-100 antialiased">
                    {{ $slot }}
                </div>

            </main>
            {{-- <x-footer/> --}}
            <div
            class="pointer-events-none fixed z-[-1] flex min-h-screen w-screen justify-center p-[120px_24px_160px_24px] before:absolute before:top-0 before:z-[2] before:h-full before:w-full before:bg-landing-gradient after:absolute after:top-0 after:z-[-1] after:h-full after:w-full after-bg  after:opacity-[.2] after:invert-[1]">
            <div
                class="absolute top-[80px] z-[3]  h-full w-full max-w-2xl bg-landing-gradient-2 opacity-[0.15] blur-[100px] saturate-[150%]">
            </div>
        </div>

        </div>
       

        {{-- @livewireScripts --}}
    </body>
</html>
