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
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center">
                <!-- Logo à gauche -->
                <div class="mr-4">
                    <img src="{{ asset('build/assets/image/logo.png') }}" alt="Logo" class="h-12 w-auto">
                </div>
                <!-- Menu Desktop Centré -->
                <nav class="hidden md:flex flex-grow justify-center space-x-4">
                    <a href="#" class="text-[#0C4069] "> <div class="text-center rounded-full w-24 bg-[#E7ECF0] hover:bg-[#D88F42] hover:text-white">Accueil</div></a>
                    <a href="#" class="text-[#0C4069] "> <div class="text-center rounded-full w-24 bg-[#E7ECF0] hover:bg-[#D88F42] hover:text-white">Destination</div></a>
                    <a href="#" class="text-[#0C4069] "> <div class="text-center rounded-full w-24 bg-[#E7ECF0] hover:bg-[#D88F42] hover:text-white">A propos</div></a>
                    <a href="#" class="text-[#0C4069] "> <div class="text-center rounded-full w-24 bg-[#E7ECF0] hover:bg-[#D88F42] hover:text-white">Contact</div></a>
                </nav>
                
                <!-- Boutons à droite -->
                <div class="hidden md:flex items-center space-x-6">
                    <a href="#" class="text-[#D88F42] hover:text-[#0C4069] transition px-4 py-2">Inscription</a>
                    <a href="#" class="bg-[#D88F42] hover:bg-[#0C4069] text-white rounded-lg px-6 py-2 transition">
                        <b>Se connecter</b>
                    </a>
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
   

    <section class="relative w-full h-[450px]  overflow-hidden">
  <img src="{{ asset('build/assets/image/img_baniere.png') }}" alt="Bannière" class="absolute w-full h-full object-cover">

  <div class="absolute inset-0 flex items-center justify-center px-4">
    <div class="grid  grid-cols-[50%_45%] md:flex-row items-center  w-full max-w-6xl mx-auto text-white">

      <!-- Texte à gauche -->
        <div class="justify-stretch text-center md:text-left mb-8 md:mb-0">
            <h1 class="text-4xl text-center md:text-5xl text-[#0C4069] animate-bounce font-bold mb-4">"Trouvez, Réservez, Partez !</h1>
            <p class="text-lg text-center text-black md:text-2xl">Réservez vos voyages et activités en quelques <br>clics, où que vous soyez. Simplifiez vos <br>réservations avec </p>
            <a href="#" ><div class=" text-center bg-[#D88F42] hover:bg-[#0C4069] rounded-lg  w-32 transition"><b> Réservez maintenant</b></div></a>
        </div>
      <!-- Image à droite -->
      <div class="">
        <img src="{{ asset('build/assets/image/imageBanierer.png') }}" alt="Logo" 
        class=" h-auto transform transition-transform duration-700 hover:-translate-x-32">
      </div>

    </div>
  </div>
    </section>


    

    

    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>