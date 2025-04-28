<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AKM VOYAGE</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center">
                <!-- Logo à gauche -->
                <div class=" mr-4">
                    <img src="{{ asset('build/assets/image/logo.png') }}" alt="Logo" class="h-12 w-auto">
                </div>
                <!-- Menu Desktop Centré -->
                <nav class="hidden md:flex flex-grow justify-center space-x-4">
                    <div class="text-center rounded-full w-24 bg-[#E7ECF0]"><a href="#" class="text-gray-700 hover:text-blue-600 transition">Accueil</a></div>
                    <div class="text-center rounded-full w-24 bg-[#E7ECF0]"><a href="#" class="text-gray-700 hover:text-blue-600 transition">Destination</a></div>
                    <div class="text-center rounded-full w-24 bg-[#E7ECF0]"><a href="#" class="text-gray-700 hover:text-blue-600 transition">A propos</a></div>
                    <div class="text-center rounded-full w-24 bg-[#E7ECF0]"><a href="#" class="text-gray-700 hover:text-blue-600 transition">Contact</a></div>
                </nav>
                
                <!-- Boutons à droite -->
                <div class="hidden md:flex ml-auto space-x-4">
                    <a href="#" class="text-gray-700 hover:text-blue-600 transition">Inscription</a>
                    <a href="#" class="text-gray-700 hover:text-blue-600 transition">Se connecter</a>
                </div>
                
                <!-- Bouton Mobile -->
                <button class="md:hidden ml-auto text-gray-700 focus:outline-none" id="menu-toggle">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
            
            <!-- Menu Mobile -->
            <div class="md:hidden hidden mt-4 py-2 border-t" id="mobile-menu">
                <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Accueil</a>
                <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Destinations</a>
                <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">A propos</a>
                <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Contact</a>
                <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Inscription</a>
                <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Se connecter</a>
            </div>
        </div>
    </header>

    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>