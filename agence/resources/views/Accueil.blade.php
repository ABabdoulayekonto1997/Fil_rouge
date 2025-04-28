<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-white px-6 py-4 shadow-md">
        <div class="container mx-auto ">
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
   <!--baniere  -->

    <section class=" relative w-full h-[450px]  overflow-hidden">
  <img src="{{ asset('build/assets/image/img_baniere.png') }}" alt="Bannière" class="absolute w-full h-full object-cover">

  <div class="absolute inset-0 flex items-center justify-center px-6 py-4">
    <div class="grid  grid-cols-[50%_45%] md:flex-row items-center  w-full max-w-6xl mx-auto text-white">

      <!-- Texte à gauche -->
      <div class="text-center md:text-left mb-8 md:mb-0">
    <h1 class="text-4xl text-center md:text-5xl text-[#0C4069] animate-bounce font-bold mb-4">Trouvez, Réservez, Partez </h1>
    <p class="text-lg text-center text-black md:text-2xl">Réservez vos voyages et activités en quelques <br>clics, où que vous soyez. Simplifiez vos <br>réservations avec </p>
    <div class="text-center md:text-left mb-8 md:mb-0">
        </h1><h1 id="typing-text" class="text-2xl text-center md:text-5xl text-[#D88F42] font-bold mb-4"></h1>
    </div>
    <a href="#">
        <div class="text-center bg-[#D88F42] hover:bg-[#0C4069] rounded-lg w-64 transition mx-auto mt-4">
            <b>Réservez maintenant</b>
        </div>
    </a>
</div>

      <!-- Image à droite -->
      <div class="">
        <img src="{{ asset('build/assets/image/imageBanierer.png') }}" alt="Logo" 
        class=" h-auto transform transition-transform duration-700 hover:-translate-x-32">
      </div>

    </div>
  </div>
    </section>

<!--inout rehecher  -->

    <div class="container mx-auto -mt-8 relative z-10">
    <div class="bg-white rounded-lg shadow-lg p-6 max-w-4xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fas fa-map-marker-alt text-gray-400"></i>
                </div>
                <input type="text" 
                    placeholder="Destination" 
                    class="w-full pl-10 pr-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#D88F42]">
            </div>
            
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fas fa-calendar text-gray-400"></i>
                </div>
                <input type="text" 
                    placeholder="Dates" 
                    class="w-full pl-10 pr-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#D88F42]">
            </div>

            <button class="bg-[#0C4069] hover:bg-[#D88F42] text-white font-bold py-3 px-6 rounded-lg transition duration-300">
                Rechercher
            </button>
        </div>
    </div>
    </div>

    <!-- Destination -->
<section class="container mx-auto py-16">

<div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-[#0C4069] mb-4">Destinations Populaires</h2>
        <p class="text-gray-600">Découvrez nos meilleures destinations pour vos prochaines vacances</p>
    </div>
    <h1 class="pb-4" >Voir toute les destinations</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Destination Card -->
       
        <div class="rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 group">
            <div class="relative overflow-hidden">
                <img src="{{ asset('build/assets/image/douala.jpeg') }}" alt="Paris" 
                     class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500 ease-in-out">
                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                    <h3 class="text-white text-xl font-bold">Paris</h3>
                    <p class="text-white/90">France</p>
                </div>
            </div>
            <div class="p-4 bg-white">
                <div class="flex justify-between items-center">
                    <span class="text-[#D88F42] font-bold">À partir de 599€</span>
                    <button class="bg-[#0C4069] hover:bg-[#D88F42] text-white px-4 py-2 rounded-lg transition duration-300">
                        Réserver
                    </button>
                </div>
            </div>
        </div>

        <!-- Destination Card 2 -->
        <div class="rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 group">
            <div class="relative overflow-hidden">
                <img src="{{ asset('build/assets/image/kribi.jpg') }}" alt="Rome" 
                     class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500 ease-in-out">
                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                    <h3 class="text-white text-xl font-bold">Rome</h3>
                    <p class="text-white/90">Italie</p>
                </div>
            </div>
            <div class="p-4 bg-white">
                <div class="flex justify-between items-center">
                    <span class="text-[#D88F42] font-bold">À partir de 499€</span>
                    <button class="bg-[#0C4069] hover:bg-[#D88F42] text-white px-4 py-2 rounded-lg transition duration-300">
                        Réserver
                    </button>
                </div>
            </div>
        </div>

        <!-- Destination Card 3 -->
        <div class="rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 group">
            <div class="relative overflow-hidden">
                <img src="{{ asset('build/assets/image/yaounde.jpg') }}" alt="Barcelone" 
                     class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500 ease-in-out">
                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                    <h3 class="text-white text-xl font-bold">Barcelone</h3>
                    <p class="text-white/90">Espagne</p>
                </div>
            </div>
            <div class="p-4 bg-white">
                <div class="flex justify-between items-center">
                    <span class="text-[#D88F42] font-bold">À partir de 449€</span>
                    <button class="bg-[#0C4069] hover:bg-[#D88F42] text-white px-4 py-2 rounded-lg transition duration-300">
                        Réserver
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Grand div avec fond orange -->

<div class="bg-[#D88F42] w-full h-[650px] flex items-center justify-center">
  
  <!-- Petite div centrée plus grande -->
  <div class="bg-white p-12 rounded-lg shadow-lg max-w-5xl w-full">
    
    <!-- Deux divs côte à côte alignées -->
    <div class="flex items-center space-x-12 h-full">
      
      <!-- Première div : Textes alignés verticalement -->
      <div class="flex-1 flex flex-col justify-center h-full text-left">
        <h2 class="text-2xl text-center font-bold text-[#0C4069] mb-4">À propos de nous</h2>
        <p class="text-justify text-gray-700 text-lg mb-6">
          Grâce à notre plateforme innovante, nous facilitons vos réservations avec un service fiable et un accompagnement personnalisé pour un voyage en toute sérénité.
        </p>
        <h2 class="text-center text-2xl font-bold text-[#0C4069] mb-4">Notre Mission</h2>
        <p class="text-center text-justify text-gray-700 text-lg">
          Offrir des expériences de voyage inoubliables en combinant expertise locale et technologie de pointe pour simplifier votre aventure.
        </p>
      </div>

      <!-- Deuxième div : Image centrée verticalement -->
      <div class="flex-1 flex justify-center h-full">
        <img src="{{ asset('build/assets/image/logo.png') }}" alt="Logo" class="h-60 w-auto object-contain">
      </div>

    </div>

    <!-- Centrer le bouton "Se connecter" -->
    <div class="flex justify-center mt-6">
      <a href="#" class="bg-[#D88F42] hover:bg-[#0C4069] text-white rounded-lg px-6 py-2 transition">
        <b>Se connecter</b>
      </a>
    </div>

  </div>

</div>



    <script>
       // le menu
       document.getElementById('menu-toggle').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
        // effet akm
        const text = "AKM VOYAGE";
    let index = 0;
    let isDeleting = false;
    const typingSpeed = 300; // Vitesse d'écriture
    const deletingSpeed = 150; // Vitesse de suppression
    const pauseBetween = 1000; // Pause entre écrire/supprimer

    function typeWriter() {
        const typingElement = document.getElementById("typing-text");

        if (!isDeleting) {
            typingElement.innerText = text.slice(0, index);
            index++;

            if (index > text.length) {
                // Quand tout est écrit, attendre et commencer à supprimer
                setTimeout(() => {
                    isDeleting = true;
                    typeWriter();
                }, pauseBetween);
                return;
            }
        } else {
            typingElement.innerText = text.slice(0, index);
            index--;

            if (index === 0) {
                // Quand tout est effacé, attendre et recommencer à écrire
                setTimeout(() => {
                    isDeleting = false;
                    typeWriter();
                }, pauseBetween);
                return;
            }
        }

        setTimeout(typeWriter, isDeleting ? deletingSpeed : typingSpeed);
    }

    window.onload = typeWriter;
    </script>

</body>
</html>

