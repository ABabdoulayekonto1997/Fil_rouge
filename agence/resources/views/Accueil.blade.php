<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
<!-- Add Alpine.js for animations -->
<script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'akm-orange': '#D88F42',
                        'akm-blue': '#0C4069',
                    },
                    backgroundImage: {
                        'footer-texture': "url('https://images.unsplash.com/photo-1483729558449-99ef09a8c325?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80')",
                    }
                }
            }
        }
    </script>
</head>
<body>

    <header class="fixed px-8 py-2 top-0 left-0 right-0 bg-white px-1 py-4 shadow-md z-50">
        <div class=" mx-auto">
            <div class="flex items-center">
                <!-- Logo à gauche -->
                <div class="mr-4">
                    <img src="{{ asset('build/assets/image/logo.png') }}" alt="Logo" class="h-12 w-auto">
                </div>
                <!-- Menu Desktop Centré -->
                <nav class="hidden md:flex flex-grow justify-center space-x-4">
                    <a href="{{ url('/') }}" class="text-[#0C4069] "> <div class="text-center rounded-full w-24 bg-[#E7ECF0] hover:bg-[#D88F42] hover:text-white">Accueil</div></a>
                    <a href="{{ url('/destinations') }}" class="text-[#0C4069] "> <div class="text-center rounded-full w-24 bg-[#E7ECF0] hover:bg-[#D88F42] hover:text-white">Destination</div></a>
                    <a href="{{ url('/Apropos') }}" class="text-[#0C4069] "> <div class="text-center rounded-full w-24 bg-[#E7ECF0] hover:bg-[#D88F42] hover:text-white">A propos</div></a>
                    <a href="{{ url('/contact') }}" class="text-[#0C4069] ">  <div class="text-center rounded-full w-24 bg-[#E7ECF0] hover:bg-[#D88F42] hover:text-white">Contact</div></a>
                </nav>
                <!-- Boutons à droite -->
                @guest
                <div class="hidden md:flex items-center space-x-6">
                    <a href="{{ route('register') }}" class="text-[#D88F42] hover:text-[#0C4069] transition px-4 py-2">Inscription</a>
                    <a href="{{ route('login') }}" class="bg-[#D88F42] hover:bg-[#0C4069] text-white rounded-lg px-6 py-2 transition">
                        <b>Se connecter</b>
                    </a>
                </div>
                @endguest
            @auth
            <div class="relative ml-3" x-data="{ open: false }">
  <!-- Bouton déclencheur -->
  <button 
    @click="open = !open"
    type="button"
    class="flex items-center max-w-xs text-sm rounded-full focus:outline-none "
    id="user-menu-button"
    aria-expanded="false"
    aria-haspopup="true"
  >
    <span class="sr-only">Ouvrir le menu utilisateur</span>
    <span class="mr-2 text-sm font-medium text-[#0C4069]">{{ Auth::user()->name }}</span>
    <svg 
      class="h-5 w-5 text-[#0C4069] transform transition-transform duration-200" 
      :class="{ 'rotate-180': open }"
      xmlns="http://www.w3.org/2000/svg" 
      viewBox="0 0 20 20" 
      fill="currentColor"
    >
      <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
    </svg>
  </button>

  <!-- Menu déroulant -->
  <div 
    x-show="open"
    @click.away="open = false"
    x-transition:enter="transition ease-out duration-100"
    x-transition:enter-start="transform opacity-0 scale-95"
    x-transition:enter-end="transform opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-75"
    x-transition:leave-start="transform opacity-100 scale-100"
    x-transition:leave-end="transform opacity-0 scale-95"
    class="absolute right-0 w-48 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
    role="menu"
    aria-orientation="vertical"
    aria-labelledby="user-menu-button"
    tabindex="-1"
  >
    <!-- Infos utilisateur -->
    <div class="px-4 py-2 border-b">
      <p class="text-sm font-medium text-gray-900 truncate">Bonjour, {{ Auth::user()->name }}</p>
      <p class="text-xs text-gray-500 truncate">{{ Auth::user()->email }}</p>
    </div>
<!-- Dashboard Link -->
<a 
      href="{{ route('dashboard') }}" 
      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
      role="menuitem"
      tabindex="-1"
    >
      <div class="flex items-center">
        <svg class="w-5 h-5 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
        </svg>
        Dashboard
      </div>
    </a>
    <!-- Lien Profil -->
    <a 
      href="{{ route('profile.edit') }}" 
      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
      role="menuitem"
      tabindex="-1"
    >
      <div class="flex items-center">
        <svg class="w-5 h-5 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
        </svg>
        Mon profil
      </div>
    </a>

    <!-- Déconnexion -->
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button 
        type="submit"
        class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50"
        role="menuitem"
        tabindex="-1"
      >
        <div class="flex items-center">
          <svg class="w-5 h-5 mr-2 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
          </svg>
          Déconnexion
        </div>
      </button>
    </form>
  </div>
</div>
            @endauth
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

    <section class="px-1 py-4 relative w-full h-[450px]  overflow-hidden">
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


    <section class="py-16 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
        <!-- Titre principal -->
        <h1 class="text-3xl md:text-4xl font-bold text-center text-[#0C4069] mb-12">
            Pourquoi choisir AKM Voyages ?
        </h1>
        
        <p class="text-lg text-gray-600 text-center mb-12 max-w-3xl mx-auto">
            Ce qui fait de nous votre meilleur choix pour réserver et voyager en toute sérénité :
        </p>
        
        <!-- Grille d'avantages -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Carte Paiement Sécurisé -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 hover:scale-105 group border border-transparent hover:border-akm-orange/30">
                <div class="mb-4 flex justify-center">
                    <div class="bg-akm-orange/10 p-4 rounded-full group-hover:bg-akm-orange/20 transition-colors duration-300">
                        <i class="fas fa-lock text-3xl text-[#D88F42]"></i>
                    </div>
                </div>
                <h2 class="text-xl font-semibold text-akm-orange mb-3 text-center">Paiement Sécurisé</h2>
                <p class="text-gray-600 text-center">
                    Toutes vos transactions sont cryptées pour garantir une sécurité maximale.
                </p>
            </div>
            
            <!-- Carte Meilleurs Prix -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 hover:scale-105 group border border-transparent hover:border-akm-orange/30">
                <div class="mb-4 flex justify-center">
                    <div class="bg-akm-orange/10 p-4 rounded-full group-hover:bg-akm-orange/20 transition-colors duration-300">
                        <i class="fas fa-tag text-3xl text-[#D88F42]"></i>
                    </div>
                </div>
                <h2 class="text-xl font-semibold text-akm-orange mb-3 text-center">Meilleurs Prix</h2>
                <p class="text-gray-600 text-center">
                    Profitez des offres exclusives négociées auprès de nos partenaires sans frais cachés.
                </p>
            </div>
            
            <!-- Carte Satisfaction Garantie -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 hover:scale-105 group border border-transparent hover:border-akm-orange/30">
                <div class="mb-4 flex justify-center">
                    <div class="bg-akm-orange/10 p-4 rounded-full group-hover:bg-akm-orange/20 transition-colors duration-300">
                        <i class="fas fa-thumbs-up text-3xl text-[#D88F42]"></i>
                    </div>
                </div>
                <h2 class="text-xl font-semibold text-akm-orange mb-3 text-center">Satisfaction Garantie</h2>
                <p class="text-gray-600 text-center">
                    Nos clients nous recommandent pour notre professionnalisme et notre écoute.
                </p>
            </div>
            
            <!-- Carte Assistance 24/7 -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 hover:scale-105 group border border-transparent hover:border-akm-orange/30">
                <div class="mb-4 flex justify-center">
                    <div class="bg-akm-orange/10 p-4 rounded-full group-hover:bg-akm-orange/20 transition-colors duration-300">
                        <i class="fas fa-headset text-3xl text-[#D88F42]"></i>
                    </div>
                </div>
                <h2 class="text-xl font-semibold text-akm-orange mb-3 text-center">Assistance 24/7</h2>
                <p class="text-gray-600 text-center">
                    Une équipe disponible à tout moment pour répondre à vos besoins.
                </p>
            </div>
        </div>
    </section>

<section class="py-16 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto">
        <!-- Titre principal -->
        <div class="text-center mb-12">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Comment ça marche ?</h1>
            <p class="text-lg text-gray-600">
                Planifiez votre prochain voyage en toute simplicité avec AKM Voyage.<br>
                Voici comment faire en 4 étapes simples et rapides
            </p>
        </div>

        <!-- Étapes - Ligne 1 -->
        <div class="flex flex-col md:flex-row gap-6 mb-6">
            <!-- Étape 1 -->
            <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100 w-full md:w-1/2 hover:border-[#D88F42] transition-colors duration-300">
                <div class="flex items-center mb-4">
                    <div class="bg-akm-orange text-white rounded-full w-10 h-10 flex items-center justify-center font-bold text-lg mr-4">1</div>
                    <h2 class="text-xl font-semibold text-gray-800">Recherchez votre destination</h2>
                </div>
                <p class="text-gray-600">
                    Entrez votre ville de départ, votre destination, les dates de voyage et le nombre de passagers. Notre moteur intelligent vous propose les meilleures options disponibles en temps réel.
                </p>
            </div>

            <!-- Étape 2 -->
            <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100 w-full md:w-1/2 hover:border-[#D88F42] transition-colors duration-300">
                <div class="flex items-center mb-4">
                    <div class="bg-akm-orange text-white rounded-full w-10 h-10 flex items-center justify-center font-bold text-lg mr-4">2</div>
                    <h2 class="text-xl font-semibold text-gray-800">Comparez les offres</h2>
                </div>
                <p class="text-gray-600">
                    Consultez une liste d'options avec les détails de prix, de durée et de services inclus. Comparez facilement les vols, les hôtels ou les packs complets pour choisir ce qui vous convient.
                </p>
            </div>
        </div>

        <!-- Étapes - Ligne 2 -->
        <div class="flex flex-col md:flex-row gap-6">
            <!-- Étape 3 -->
            <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100 w-full md:w-1/2 hover:border-[#D88F42] transition-colors duration-300">
                <div class="flex items-center mb-4">
                    <div class="bg-akm-orange text-white rounded-full w-10 h-10 flex items-center justify-center font-bold text-lg mr-4">3</div>
                    <h2 class="text-xl font-semibold text-gray-800">Réservez en toute sécurité</h2>
                </div>
                <p class="text-gray-600">
                    Une fois votre choix fait, remplissez les informations nécessaires (nom, contact, etc.) et effectuez votre paiement via notre plateforme 100% sécurisée. Vous recevrez une confirmation instantanée.
                </p>
            </div>

            <!-- Étape 4 -->
            <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100 w-full md:w-1/2 hover:border-[#D88F42] transition-colors duration-300">
                <div class="flex items-center mb-4">
                    <div class="bg-akm-orange text-white rounded-full w-10 h-10 flex items-center justify-center font-bold text-lg mr-4">4</div>
                    <h2 class="text-xl font-semibold text-gray-800">Voyagez l'esprit tranquille</h2>
                </div>
                <p class="text-gray-600">
                    Recevez votre billet ou votre bon de réservation par email ou WhatsApp. Il ne vous reste plus qu'à faire vos valises ! Notre service client est disponible à tout moment en cas de besoin.
                </p>
            </div>
        </div>
</section>
  

<!-- Testimonials Section -->
<section class="bg-[#0C4069] py-16">
        <div class="container mx-auto px-4 relative">
            <!-- Titre section -->
            <h2 class="text-3xl md:text-4xl font-bold text-white text-center mb-12">Ils nous ont fait confiance</h2>
            
            <!-- Conteneur témoignages -->
            <div class="max-w-4xl mx-auto relative">
                <!-- Témoignage -->
                <div class="bg-white rounded-3xl p-8 md:p-12 shadow-lg relative">
                    <!-- Photo + Nom -->
                    <div class="flex flex-col md:flex-row items-center gap-6 mb-8">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&h=200&q=80" 
                             alt="Fatima" 
                             class="w-20 h-20 md:w-24 md:h-24 rounded-full object-cover border-4 border-[#D88F42]">
                        <div class="text-center md:text-left">
                            <h3 class="text-xl md:text-2xl font-semibold text-[#0C4069]">Fatima D.</h3>
                            <p class="text-gray-500">N'Djamena, Tchad</p>
                        </div>
                    </div>
                    
                    <!-- Citation -->
                    <div class="relative">
                        <i class="fas fa-quote-left text-[#D88F42] text-4xl opacity-20 absolute -top-4 -left-2"></i>
                        <p class="text-gray-700 text-base md:text-lg leading-relaxed italic pl-8">
                            "Un service rapide, professionnel et très à l'écoute. Mon voyage a été parfaitement organisé du début à la fin. Je recommande vivement !"
                        </p>
                        <i class="fas fa-quote-right text-[#D88F42] text-4xl opacity-20 absolute -bottom-4 -right-2"></i>
                    </div>
                    
                    <!-- Indicateurs -->
                    <div class="flex justify-center gap-2 mt-8">
                        <span class="w-3 h-3 rounded-full bg-[#D88F42]"></span>
                        <span class="w-3 h-3 rounded-full bg-gray-300"></span>
                        <span class="w-3 h-3 rounded-full bg-gray-300"></span>
                    </div>
                </div>
                
                <!-- Flèches de navigation -->
                <button class="hidden md:block absolute -left-16 top-1/2 -translate-y-1/2 bg-[#D88F42] text-white rounded-full w-12 h-12 flex items-center justify-center hover:bg-[#0C4069] transition-colors">
                    <i class="fas fa-arrow-left"></i>
                </button>
                <button class="hidden md:block absolute -right-16 top-1/2 -translate-y-1/2 bg-[#D88F42] text-white rounded-full w-12 h-12 flex items-center justify-center hover:bg-[#0C4069] transition-colors">
                    <i class="fas fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </section>

    
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-[#0C4069] mb-4 flex items-center justify-center">
                    <i class="fas fa-question-circle text-[#D88F42] mr-3"></i>
                    FAQ - Questions Fréquemment Posées
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- FAQ Content -->
                <div class="space-y-4">
                    <!-- Question 1 -->
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden" x-data="{ open: false }">
                        <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50" @click="open = !open">
                            <span class="font-semibold text-[#0C4069]">Quels types de voyages proposez-vous ?</span>
                            <i class="fas fa-plus text-[#D88F42] transform transition-transform" :class="{ 'rotate-45': open }"></i>
                        </button>
                        <div class="px-6 py-4 bg-gray-50 " x-show="open" x-collapse>
                            <p class="text-gray-600 ">Nous proposons une large gamme de voyages : vols, hôtels, packages tout compris, circuits touristiques, et séjours sur mesure pour répondre à tous vos besoins.</p>
                        </div>
                    </div>

                    <!-- Question 2 -->
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden" x-data="{ open: false }">
                        <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50" @click="open = !open">
                            <span class="font-semibold text-[#0C4069]">Comment puis-je modifier ou annuler ma réservation ?</span>
                            <i class="fas fa-plus text-[#D88F42] transform transition-transform" :class="{ 'rotate-45': open }"></i>
                        </button>
                        <div class="px-6 py-4 bg-gray-50" x-show="open" x-collapse>
                            <p class="text-gray-600">Connectez-vous à votre compte et accédez à la section "Mes réservations". Vous pourrez y gérer vos modifications ou annulations selon nos conditions générales.</p>
                        </div>
                    </div>

                    <!-- Question 3 -->
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden" x-data="{ open: false }">
                        <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50" @click="open = !open">
                            <span class="font-semibold text-[#0C4069]">Puis-je réserver pour une autre personne ?</span>
                            <i class="fas fa-plus text-[#D88F42] transform transition-transform" :class="{ 'rotate-45': open }"></i>
                        </button>
                        <div class="px-6 py-4 bg-gray-50" x-show="open" x-collapse>
                            <p class="text-gray-600">Oui, vous pouvez réserver pour d'autres personnes. Assurez-vous simplement de fournir les informations correctes des voyageurs lors de la réservation.</p>
                        </div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="hidden md:block">
                    <img src="{{ asset('build/assets/image/imgfqa.jpg') }}" alt="Support Client" class="rounded-lg shadow-lg w-full h-auto object-cover">
                </div>
            </div>
        </div>
    </div>
</section>
    
    <footer class=" bg-gray-900 text-white relative overflow-hidden">
            <!-- Fond texturé -->
            <div class=" absolute inset-0 bg-footer-texture bg-cover opacity-10"></div>
            
            <div class="relative z-10 pt-16 pb-12 px-4 sm:px-6 lg:px-8">
                <div class="max-w-7xl mx-auto">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
                        <!-- Logo et description -->
                        <div class="md:col-span-2">
                            <div class="flex items-center mb-6">
                                <img src="{{ asset('build/assets/image/logo_blanc.png') }}" alt="Logo" class="h-24 w-auto">
                
                        </div>
                            <p class="text-gray-300 text-lg leading-relaxed mb-6">
                                Votre partenaire de confiance pour réserver vos voyages en toute sécurité et simplicité, où que vous soyez.
                            </p>
                            <div class="flex space-x-4">
                                <a href="#" class="bg-akm-orange text-white p-3 rounded-full hover:bg-white hover:text-akm-orange transition-all duration-300">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="bg-akm-orange text-white p-3 rounded-full hover:bg-white hover:text-akm-orange transition-all duration-300">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="bg-akm-orange text-white p-3 rounded-full hover:bg-white hover:text-akm-orange transition-all duration-300">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#" class="bg-akm-orange text-white p-3 rounded-full hover:bg-white hover:text-akm-orange transition-all duration-300">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Navigation -->
                        <div>
                            <h2 class="text-xl font-bold text-akm-orange mb-6 relative pb-2 after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-16 after:h-1 after:bg-akm-orange">
                                Navigation
                            </h2>
                            <ul class="space-y-3">
                                <li><a href="#" class="text-gray-300 hover:text-white hover:pl-2 transition-all duration-300 flex items-center">
                                    <i class="fas fa-chevron-right text-akm-orange mr-2 text-xs"></i> Accueil</a></li>
                                <li><a href="#" class="text-gray-300 hover:text-white hover:pl-2 transition-all duration-300 flex items-center">
                                    <i class="fas fa-chevron-right text-akm-orange mr-2 text-xs"></i> Destinations</a></li>
                                <li><a href="#" class="text-gray-300 hover:text-white hover:pl-2 transition-all duration-300 flex items-center">
                                    <i class="fas fa-chevron-right text-akm-orange mr-2 text-xs"></i> Promotions</a></li>
                                <li><a href="#" class="text-gray-300 hover:text-white hover:pl-2 transition-all duration-300 flex items-center">
                                    <i class="fas fa-chevron-right text-akm-orange mr-2 text-xs"></i> FAQ</a></li>
                                <li><a href="#" class="text-gray-300 hover:text-white hover:pl-2 transition-all duration-300 flex items-center">
                                    <i class="fas fa-chevron-right text-akm-orange mr-2 text-xs"></i> Conditions générales</a></li>
                                <li><a href="#" class="text-gray-300 hover:text-white hover:pl-2 transition-all duration-300 flex items-center">
                                    <i class="fas fa-chevron-right text-akm-orange mr-2 text-xs"></i> Politique de confidentialité</a></li>
                            </ul>
                        </div>

                        <!-- Contact -->
                        <div>
                            <h2 class="text-xl font-bold text-akm-orange mb-6 relative pb-2 after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-16 after:h-1 after:bg-akm-orange">
                                Nous contacter
                            </h2>
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <div class="bg-akm-orange/10 p-2 rounded-full mr-4">
                                        <svg class="w-5 h-5 text-akm-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-gray-300 font-medium">Téléphone</p>
                                        <p class="text-white">+237 668 99 99 46</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <div class="bg-akm-orange/10 p-2 rounded-full mr-4">
                                        <svg class="w-5 h-5 text-akm-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-gray-300 font-medium">Email</p>
                                        <p class="text-white">Mahamatkonto24@gmail.com</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <div class="bg-akm-orange/10 p-2 rounded-full mr-4">
                                        <svg class="w-5 h-5 text-akm-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-gray-300 font-medium">Adresse</p>
                                        <p class="text-white">Douala - Cameroun</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Copyright et paiement -->
                    <div class="border-t border-gray-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
                        <p class="text-gray-400 mb-4 md:mb-0">© 2025 AKM Voyage. Tous droits réservés.</p>
                        <div class="flex space-x-4">
                            <img src="https://via.placeholder.com/40x25?text=VISA" alt="Visa" class="h-8 w-auto opacity-80 hover:opacity-100 transition">
                            <img src="https://via.placeholder.com/40x25?text=MC" alt="Mastercard" class="h-8 w-auto opacity-80 hover:opacity-100 transition">
                            <img src="https://via.placeholder.com/40x25?text=PP" alt="PayPal" class="h-8 w-auto opacity-80 hover:opacity-100 transition">
                        </div>
                    </div>
                </div>
            </div>
    </footer>
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
        const testimonials = [
        {
            name: "Fatima D.",
            location: "N'Djamena, Tchad",
            quote: "Un service rapide, professionnel et très à l'écoute...",
            image: "url_image1.jpg"
        },
        // Ajouter d'autres témoignages ici
        ];
        
        let currentIndex = 0;
        
        function showTestimonial(index) {
            // Implémentez la logique pour afficher le témoignage correspondant
        }
        
        // Écouteurs d'événements pour les flèches
        document.querySelectorAll('.arrow-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                currentIndex = btn.classList.contains('prev') ? 
                    Math.max(0, currentIndex - 1) : 
                    Math.min(testimonials.length - 1, currentIndex + 1);
                showTestimonial(currentIndex);
            });
        });
    </script>
// ... existing code ...
    @include('components.chat-widget')
</body>
</html>
</body>
</html>

