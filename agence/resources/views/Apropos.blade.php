<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos - AKM Voyage</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'akm-orange': '#D88F42',
                        'akm-blue': '#0C4069',
                    }
                }
            }
        }
    </script>
    <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Add this in the head section, just before closing </head> -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        .parallax-bg {
            transform: translateZ(-1px) scale(2);
            z-index: -1;
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
<header class="fixed w-full px-8 py-4 top-0 left-0 right-0 bg-white shadow-md z-50">
        <div class="mx-auto">
            <div class="flex items-center">
                <!-- Logo à gauche -->
                <div class="mr-4">
                    <img src="{{ asset('build/assets/image/logo.png') }}" alt="Logo" class="h-12 w-auto">
                </div>
                <!-- Menu Desktop Centré -->
                <nav class="hidden md:flex flex-grow justify-center space-x-4">
                    <a href="{{ url('/') }}" class="text-[#0C4069]">
                        <div class="text-center rounded-full w-24 bg-[#E7ECF0] hover:bg-[#D88F42] hover:text-white">
                            Accueil
                        </div>
                    </a>
                    <a href="{{ url('/destinations') }}" class="text-[#0C4069] "> <div class="text-center rounded-full w-24 bg-[#E7ECF0] hover:bg-[#D88F42] hover:text-white">Destination</div></a>
                    <a href="{{ url('/Apropos') }}" class="text-[#0C4069] "> <div class="text-center rounded-full w-24 bg-[#E7ECF0] hover:bg-[#D88F42] hover:text-white">A propos</div></a>
                    <a href="{{ url('/contact') }}" class="text-[#0C4069] ">  <div class="text-center rounded-full w-24 bg-[#E7ECF0] hover:bg-[#D88F42] hover:text-white">Contact</div></a>
                </nav>
                <!-- Boutons à droite -->
                @guest
                <div class="hidden md:flex items-center space-x-6">
                    <button onclick="openRegistrationModal()" class="text-[#D88F42] hover:text-[#0C4069] transition px-4 py-2">Inscription</button>
                    <button onclick="openLoginModal()" class="bg-[#D88F42] hover:bg-[#0C4069] text-white rounded-lg px-6 py-2 transition">
                        <b>Se connecter</b>
                    </button>
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
    <div class="h-8 w-8 rounded-full bg-blue-100 flex items-center justify-center">
                    <span class="text-blue-600 font-medium">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</span>
                </div>
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
    </header><br><br>
    <section class="relative h-[600px] overflow-hidden">
    <!-- Background Image Container -->
    <div class="absolute inset-0">
        <img 
            src="{{ asset('build/assets/image/contact_bani.jpeg') }}" 
            alt="À propos Hero"
            class="w-full h-full object-cover scale-105 transform transition-transform duration-[2s] hover:scale-110"
        >
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-[#0C4069]/75 via-[#0C4069]/50 to-transparent"></div>
    </div>

    <!-- Content Container -->
    <div class="relative h-full max-w-7xl mx-auto px-6">
        <div class="flex items-center h-full">
            <div class="max-w-3xl" data-aos="fade-right" data-aos-duration="1200">
                <!-- Hero Title -->
                <h1 class="text-5xl md:text-7xl font-bold text-white mb-8 leading-tight"
                    data-aos="fade-up" 
                    data-aos-delay="200">
                    À propos <span class="text-[#D88F42]">de nous</span>
                </h1>

                <!-- Hero Description -->
                <p class="text-xl md:text-2xl text-gray-200 mb-12 leading-relaxed"
                   data-aos="fade-up" 
                   data-aos-delay="400">
                    Découvrez l'histoire et les valeurs qui font d'AKM Voyage votre partenaire de confiance pour tous vos voyages.
                </p>

                <!-- CTA Button -->
                <div data-aos="fade-up" data-aos-delay="600">
                    <a href="#histoire" 
                       class="group inline-flex items-center bg-[#D88F42] text-white px-8 py-4 rounded-full 
                              hover:bg-white hover:text-[#D88F42] transition-all duration-300 shadow-lg 
                              hover:shadow-[#D88F42]/20 hover:shadow-2xl">
                        <span class="font-semibold">Découvrir notre histoire</span>
                        <i class="fas fa-arrow-right ml-3 transform group-hover:translate-x-2 transition-transform"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Wave Separator -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg class="w-full h-20 text-gray-50 translate-y-1" preserveAspectRatio="none" viewBox="0 0 1440 100">
            <path 
                fill="currentColor" 
                d="M0,32L48,37.3C96,43,192,53,288,58.7C384,64,480,64,576,58.7C672,53,768,43,864,42.7C960,43,1056,53,1152,53.3C1248,53,1344,43,1392,37.3L1440,32L1440,100L1392,100C1344,100,1248,100,1152,100C1056,100,960,100,864,100C768,100,672,100,576,100C480,100,384,100,288,100C192,100,96,100,48,100L0,100Z"
            ></path>
        </svg>
    </div>
</section>
    <!-- Notre Histoire -->
    <section class="py-16 px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-[#0C4069] mb-6">Notre Histoire</h2>
                    <p class="text-gray-600 mb-4">
                        Fondée avec la vision de rendre les voyages plus accessibles et agréables, AKM Voyage s'est établie comme une référence dans le secteur du tourisme au Cameroun et en Afrique centrale.
                    </p>
                    <p class="text-gray-600">
                        Depuis notre création, nous nous efforçons d'offrir des expériences de voyage exceptionnelles, combinant technologie moderne et service personnalisé pour répondre aux besoins de nos clients.
                    </p>
                </div>
                <div class="relative">
                    <img src="{{ asset('build/assets/image/imgcontact.jpg') }}" alt="Notre Histoire" class="rounded-lg shadow-lg">
                    <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-[#D88F42] rounded-lg -z-10"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Nos Valeurs -->
    <section class="py-16 bg-gray-100">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-[#0C4069] mb-12">Nos Valeurs</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                    <div class="w-16 h-16 bg-[#D88F42]/20 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <i class="fas fa-heart text-2xl text-[#D88F42]"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-[#0C4069] mb-4 text-center">Excellence</h3>
                    <p class="text-gray-600 text-center">
                        Nous nous engageons à fournir un service de la plus haute qualité à chacun de nos clients.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                    <div class="w-16 h-16 bg-[#D88F42]/20 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <i class="fas fa-handshake text-2xl text-[#D88F42]"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-[#0C4069] mb-4 text-center">Confiance</h3>
                    <p class="text-gray-600 text-center">
                        La transparence et l'honnêteté sont au cœur de toutes nos interactions avec nos clients.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                    <div class="w-16 h-16 bg-[#D88F42]/20 rounded-full flex items-center justify-center mb-6 mx-auto">
                        <i class="fas fa-globe text-2xl text-[#D88F42]"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-[#0C4069] mb-4 text-center">Innovation</h3>
                    <p class="text-gray-600 text-center">
                        Nous adoptons les dernières technologies pour améliorer constamment notre service.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Notre Équipe -->
    <section class="py-16 px-4 bg-gradient-to-b from-white to-gray-50">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-3xl font-bold text-center text-[#0C4069] mb-4">Notre Équipe</h2>
        <p class="text-center text-gray-600 max-w-2xl mx-auto mb-12">Découvrez les talents qui font la force de notre entreprise</p>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <!-- Membre 1 -->
            <div class="text-center group">
                <div class="relative w-48 h-48 mx-auto mb-6 transition-all duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-[#D88F42] rounded-full opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
                    <img 
                        src="{{ asset('build/assets/image/team1.jpg') }}" 
                        alt="ABDOULAYE KONTO" 
                        class="w-full h-full object-cover rounded-full border-4 border-[#D88F42] transition-transform duration-500 ease-out group-hover:border-[#0C4069]"
                        loading="lazy"
                    >
                    <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 flex space-x-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <a href="#" class="bg-[#0C4069] text-white p-2 rounded-full hover:bg-[#D88F42] transition-colors duration-300">
                            <i class="fab fa-linkedin-in text-sm"></i>
                        </a>
                        <a href="#" class="bg-[#0C4069] text-white p-2 rounded-full hover:bg-[#D88F42] transition-colors duration-300">
                            <i class="fas fa-envelope text-sm"></i>
                        </a>
                    </div>
                </div>
                <h3 class="text-xl font-semibold text-[#0C4069] mb-1 transition-colors duration-300 group-hover:text-[#D88F42]">ABDOULAYE KONTO</h3>
                <p class="text-[#D88F42] font-medium mb-2">Directeur Générale</p>
                <p class="text-gray-600 text-sm max-w-xs mx-auto transition-all duration-300 group-hover:text-gray-800">
                    Passionnée par le leadership et l'innovation avec 15 ans d'expérience.
                </p>
            </div>

            <!-- Membre 2 -->
            <div class="text-center group">
                <div class="relative w-48 h-48 mx-auto mb-6 transition-all duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-[#D88F42] rounded-full opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
                    <img 
                        src="{{ asset('build/assets/image/team2.jpg') }}" 
                        alt="ABDOULAYE KONTO" 
                        class="w-full h-full object-cover rounded-full border-4 border-[#D88F42] transition-transform duration-500 ease-out group-hover:border-[#0C4069]"
                        loading="lazy"
                    >
                    <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 flex space-x-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <a href="#" class="bg-[#0C4069] text-white p-2 rounded-full hover:bg-[#D88F42] transition-colors duration-300">
                            <i class="fab fa-linkedin-in text-sm"></i>
                        </a>
                        <a href="#" class="bg-[#0C4069] text-white p-2 rounded-full hover:bg-[#D88F42] transition-colors duration-300">
                            <i class="fas fa-envelope text-sm"></i>
                        </a>
                    </div>
                </div>
                <h3 class="text-xl font-semibold text-[#0C4069] mb-1 transition-colors duration-300 group-hover:text-[#D88F42]">Marc André</h3>
                <p class="text-[#D88F42] font-medium mb-2">Responsable Commercial</p>
                <p class="text-gray-600 text-sm max-w-xs mx-auto transition-all duration-300 group-hover:text-gray-800">
                    Expert en stratégies commerciales et développement des affaires.
                </p>
            </div>

            <!-- Membre 3 -->
            <div class="text-center group">
                <div class="relative w-48 h-48 mx-auto mb-6 transition-all duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-[#D88F42] rounded-full opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
                    <img 
                        src="{{ asset('build/assets/image/team3.jpg') }}" 
                        alt="Sophie Martin" 
                        class="w-full h-full object-cover rounded-full border-4 border-[#D88F42] transition-transform duration-500 ease-out group-hover:border-[#0C4069]"
                        loading="lazy"
                    >
                    <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 flex space-x-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <a href="#" class="bg-[#0C4069] text-white p-2 rounded-full hover:bg-[#D88F42] transition-colors duration-300">
                            <i class="fab fa-linkedin-in text-sm"></i>
                        </a>
                        <a href="#" class="bg-[#0C4069] text-white p-2 rounded-full hover:bg-[#D88F42] transition-colors duration-300">
                            <i class="fas fa-envelope text-sm"></i>
                        </a>
                    </div>
                </div>
                <h3 class="text-xl font-semibold text-[#0C4069] mb-1 transition-colors duration-300 group-hover:text-[#D88F42]">Sophie Martin</h3>
                <p class="text-[#D88F42] font-medium mb-2">Responsable Service Client</p>
                <p class="text-gray-600 text-sm max-w-xs mx-auto transition-all duration-300 group-hover:text-gray-800">
                    Dévouée à l'excellence du service client et à la satisfaction des clients.
                </p>
            </div>
        </div>
    </div>
</section>

    <!-- Statistiques -->
    <section class="py-16 bg-[#0C4069] text-white">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-4xl font-bold text-[#D88F42] mb-2">5000+</div>
                    <p>Clients Satisfaits</p>
                </div>
                <div>
                    <div class="text-4xl font-bold text-[#D88F42] mb-2">50+</div>
                    <p>Destinations</p>
                </div>
                <div>
                    <div class="text-4xl font-bold text-[#D88F42] mb-2">10+</div>
                    <p>Années d'Expérience</p>
                </div>
                <div>
                    <div class="text-4xl font-bold text-[#D88F42] mb-2">24/7</div>
                    <p>Support Client</p>
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


        <!-- Add this script at the end of body -->
        <script>
        // Initialize AOS
        AOS.init();
    
        // Parallax effect on scroll
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallaxBg = document.querySelector('.parallax-bg');
            if (parallaxBg) {
                parallaxBg.style.transform = `translateY(${scrolled * 0.5}px) translateZ(-1px) scale(2)`;
            }
        });
    
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
// ... existing code ...
    @include('components.chat-widget')
</body>
</html>
</body>
</html>