<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#0C4069] font-sans antialiased">
        <div class="min-h-screen ">
        

            <!-- Page Heading -->
            @isset($header)
                
            <header class=" py-4 px-6">
                  <div class="flex justify-between items-center max-w-7xl mx-auto">
            <!-- Logo à gauche -->
            <div class=" flex items-center">
            <img src="{{ asset('build/assets/image/logo_blanc.png') }}" alt="Logo" class="h-12 w-auto">
                
            </div>
            
            <!-- Nom utilisateur à droite -->
            <div class="flex items-center space-x-4">
                <div class="space-x-4 flex items-center">
                    <span class="ml-2 font-medium text-white">{{ Auth::user()->name }}</span>
                    <div class="h-8 w-8 rounded-full bg-blue-100 flex items-center justify-center">
                        <span class="text-blue-600 font-medium">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</span>
                    </div>
                </div>
            </div>
        </div>
            </header>
                    
            @endisset

            <!-- Page Content -->
            <main class=" bg-[#0C4069]">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
