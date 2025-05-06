<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinations au Cameroun - AKM Voyage</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <!-- Header (Same as your other pages) -->
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
    <!-- Hero Section -->
    <section class="relative h-[500px] overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('build/assets/image/kribi.jpg') }}" 
                 alt="Destinations Cameroun" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-[#0C4069]/80 to-[#0C4069]/40"></div>
        </div>
        <div class="relative container mx-auto px-4 h-full flex items-center">
            <div class="max-w-3xl" data-aos="fade-up">
                <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">
                    Découvrez le Cameroun
                </h1>
                <p class="text-xl text-gray-200 mb-8">
                    L'Afrique en miniature : Des plages aux montagnes, en passant par la savane et la forêt
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#littoral" class="bg-[#D88F42] text-white px-6 py-3 rounded-full hover:bg-white hover:text-[#D88F42] transition-all duration-300">
                        Littoral
                    </a>
                    <a href="#nord" class="bg-white/20 text-white px-6 py-3 rounded-full hover:bg-white hover:text-[#D88F42] transition-all duration-300">
                        Nord
                    </a>
                    <a href="#ouest" class="bg-white/20 text-white px-6 py-3 rounded-full hover:bg-white hover:text-[#D88F42] transition-all duration-300">
                        Ouest
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Search Section -->
    <section class="py-8">
        <div class="max-w-6xl mx-auto px-4">
            <div class="bg-white rounded-xl shadow-lg p-6 -mt-20 relative z-10">
                <form class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Région</label>
                        <select class="w-full px-4 py-2 rounded-lg bg-gray-50 border border-gray-200 focus:border-[#D88F42] focus:ring-0">
                            <option>Toutes les régions</option>
                            <option>Littoral</option>
                            <option>Nord</option>
                            <option>Ouest</option>
                            <option>Sud</option>
                            <option>Centre</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Type de voyage</label>
                        <select class="w-full px-4 py-2 rounded-lg bg-gray-50 border border-gray-200 focus:border-[#D88F42] focus:ring-0">
                            <option>Tous les types</option>
                            <option>Plage</option>
                            <option>Montagne</option>
                            <option>Culture</option>
                            <option>Safari</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Budget</label>
                        <select class="w-full px-4 py-2 rounded-lg bg-gray-50 border border-gray-200 focus:border-[#D88F42] focus:ring-0">
                            <option>Tous les budgets</option>
                            <option>< 50 000 FCFA</option>
                            <option>50 000 - 100 000 FCFA</option>
                            <option>> 100 000 FCFA</option>
                        </select>
                    </div>
                    <div class="flex items-end">
                        <button class="w-full bg-[#D88F42] text-white py-2 px-4 rounded-lg hover:bg-[#0C4069] transition-colors duration-300">
                            Rechercher
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Featured Destinations -->
    <section class="py-16" id="littoral">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-[#0C4069] mb-2">Destinations Populaires</h2>
            <p class="text-gray-600 mb-8">Les lieux les plus prisés du Cameroun</p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Kribi -->
                <div class="group relative rounded-xl overflow-hidden shadow-lg" data-aos="fade-up">
                    <img src="{{ asset('build/assets/image/kribi-beach.jpg') }}" alt="Kribi" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/75 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <h3 class="text-2xl font-bold text-white mb-2">Kribi</h3>
                        <p class="text-gray-200 mb-4">À partir de 50 000 FCFA</p>
                        <a href="#" class="inline-flex items-center text-white hover:text-[#D88F42] transition-colors">
                            Découvrir <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Limbe -->
                <div class="group relative rounded-xl overflow-hidden shadow-lg" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('build/assets/image/limbe.jpg') }}" alt="Limbe" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/75 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <h3 class="text-2xl font-bold text-white mb-2">Limbe</h3>
                        <p class="text-gray-200 mb-4">À partir de 45 000 FCFA</p>
                        <a href="#" class="inline-flex items-center text-white hover:text-[#D88F42] transition-colors">
                            Découvrir <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Mont Cameroun -->
                <div class="group relative rounded-xl overflow-hidden shadow-lg" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('build/assets/image/mont-cameroun.jpg') }}" alt="Mont Cameroun" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/75 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <h3 class="text-2xl font-bold text-white mb-2">Mont Cameroun</h3>
                        <p class="text-gray-200 mb-4">À partir de 75 000 FCFA</p>
                        <a href="#" class="inline-flex items-center text-white hover:text-[#D88F42] transition-colors">
                            Découvrir <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Promotional Banner -->
    <section class="py-16 bg-[#0C4069]">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div class="text-white">
                    <h2 class="text-3xl font-bold mb-4">Découvrez Kribi</h2>
                    <p class="text-gray-300 mb-6">Profitez de nos offres spéciales pour découvrir les magnifiques plages de Kribi. Hébergement + Activités inclus.</p>
                    <div class="flex items-center space-x-4 mb-8">
                        <div>
                            <div class="text-4xl font-bold text-[#D88F42]">-20%</div>
                            <div class="text-sm text-gray-300">de réduction</div>
                        </div>
                        <div class="h-12 w-px bg-gray-600"></div>
                        <div>
                            <div class="text-2xl font-bold">45 000 FCFA</div>
                            <div class="text-sm text-gray-300">par personne</div>
                        </div>
                    </div>
                    <a href="#" class="inline-block bg-[#D88F42] text-white px-8 py-3 rounded-full hover:bg-white hover:text-[#D88F42] transition-all duration-300">
                        Réserver maintenant
                    </a>
                </div>
                <div class="relative">
                    <img src="{{ asset('build/assets/image/kribi-promo.jpg') }}" alt="Kribi Promo" class="rounded-lg shadow-2xl">
                    <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-[#D88F42] rounded-lg -z-10"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- More Destinations -->
    <section class="py-16" id="autres-destinations">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-[#0C4069] mb-8">Autres destinations au Cameroun</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <!-- Add more Cameroonian destination cards here -->
            </div>
        </div>
    </section>

    <!-- Add your footer here -->

    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>
    // ... existing code ...
    @include('components.chat-widget')




    <!-- Ajoutez ceci juste avant la fermeture du body -->
<!-- Modal d'inscription -->
<div id="registrationModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-2xl p-8 max-w-md w-full mx-4 relative">
        <!-- Bouton de fermeture -->
        <button onclick="closeRegistrationModal()" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Zone de photo de profil -->
        <div class="flex justify-center mb-6">
            <div class="w-24 h-24 bg-gray-200 rounded-full flex items-center justify-center">
                <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                </svg>
            </div>
        </div>
        
        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf
            <!-- Nom -->
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"/>
                    </svg>
                </div>
                <input type="text" name="nom" required placeholder="Nom" 
                       class="pl-10 w-full rounded-lg border-gray-300 focus:border-[#D88F42] focus:ring focus:ring-[#D88F42] focus:ring-opacity-50">
            </div>

            <!-- Prénom -->
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"/>
                    </svg>
                </div>
                <input type="text" name="prenom" required placeholder="Prénom" 
                       class="pl-10 w-full rounded-lg border-gray-300 focus:border-[#D88F42] focus:ring focus:ring-[#D88F42] focus:ring-opacity-50">
            </div>

            <!-- Email -->
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                    </svg>
                </div>
                <input type="email" name="email" required placeholder="Email" 
                       class="pl-10 w-full rounded-lg border-gray-300 focus:border-[#D88F42] focus:ring focus:ring-[#D88F42] focus:ring-opacity-50">
            </div>

            <!-- Mot de passe -->
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <input type="password" name="password" required placeholder="Mot de passe" 
                       class="pl-10 w-full rounded-lg border-gray-300 focus:border-[#D88F42] focus:ring focus:ring-[#D88F42] focus:ring-opacity-50">
            </div>

            <!-- Confirmer mot de passe -->
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <input type="password" name="password_confirmation" required placeholder="Confirmer mot de passe" 
                       class="pl-10 w-full rounded-lg border-gray-300 focus:border-[#D88F42] focus:ring focus:ring-[#D88F42] focus:ring-opacity-50">
            </div>

            <!-- Conditions d'utilisation -->
            <div class="flex items-center">
                <input type="checkbox" name="terms" id="terms" required class="rounded border-gray-300 text-[#D88F42] focus:ring-[#D88F42]">
                <label for="terms" class="ml-2 text-sm text-gray-600">
                    Accepter toutes les conditions
                </label>
            </div>

            <button type="submit" class="w-full bg-[#D88F42] hover:bg-[#0C4069] text-white font-bold py-3 px-4 rounded-lg transition duration-300">
                S'inscrire
            </button>

            <p class="text-center text-sm text-gray-600 mt-4">
                Vous avez déjà un compte ? 
                <button type="button" onclick="switchToLogin()" class="text-[#D88F42] hover:text-[#0C4069] font-medium">
                    Connexion
                </button>
            </p>
        </form>
    </div>
</div>

<script>
function openRegistrationModal() {
    document.getElementById('registrationModal').classList.remove('hidden');
    document.getElementById('registrationModal').classList.add('flex');
    document.body.style.overflow = 'hidden';
}

function closeRegistrationModal() {
    document.getElementById('registrationModal').classList.add('hidden');
    document.getElementById('registrationModal').classList.remove('flex');
    document.body.style.overflow = 'auto';
}

// Fermer le modal en cliquant en dehors
document.getElementById('registrationModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeRegistrationModal();
    }
});
</script>

<!-- Ajoutez ceci juste avant la fermeture du body, après le modal d'inscription -->
<!-- Modal de connexion -->
<div id="loginModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-2xl p-8 max-w-md w-full mx-4 relative">
        <!-- Bouton de fermeture -->
        <button onclick="closeLoginModal()" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Logo -->
        <div class="flex justify-center mb-6">
            <img src="{{ asset('build/assets/image/logo.png') }}" alt="AKM VOYAGE" class="h-20">
        </div>
        
        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf
            <div>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"/>
                        </svg>
                    </div>
                    <input type="email" name="email" id="email" required 
                           class="pl-10 w-full rounded-lg border-gray-300 focus:border-[#D88F42] focus:ring focus:ring-[#D88F42] focus:ring-opacity-50"
                           placeholder="Username">
                </div>
            </div>

            <div>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <input type="password" name="password" id="password" required 
                           class="pl-10 w-full rounded-lg border-gray-300 focus:border-[#D88F42] focus:ring focus:ring-[#D88F42] focus:ring-opacity-50"
                           placeholder="••••••••••••••••">
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                        <button type="button" onclick="togglePassword()" class="text-gray-400 hover:text-gray-500">
                            <svg class="h-5 w-5" id="showPasswordIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-between text-sm">
                <div class="flex items-center">
                    <input type="checkbox" name="remember" id="remember" class="rounded border-gray-300 text-[#D88F42] focus:ring-[#D88F42]">
                    <label for="remember" class="ml-2 text-gray-600">Se souvenir de moi</label>
                </div>
                <a href="{{ route('password.request') }}" class="text-[#D88F42] hover:text-[#0C4069]">
                    Mot de passe oublié ?
                </a>
            </div>

            <button type="submit" class="w-full bg-[#D88F42] hover:bg-[#0C4069] text-white font-bold py-3 px-4 rounded-lg transition duration-300">
                Connexion
            </button>

            <div class="relative flex items-center justify-center mt-6">
                <div class="border-t border-gray-300 absolute w-full"></div>
                <div class="bg-white px-4 relative text-sm text-gray-500">Ou connectez-vous avec</div>
            </div>

            <div class="grid grid-cols-2 gap-4 mt-6">
                <a href="#" class="flex items-center justify-center px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-300">
                    <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="h-5 w-5 mr-2" alt="Google">
                    <span class="text-sm font-medium">Google</span>
                </a>
                <a href="#" class="flex items-center justify-center px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-300">
                    <img src="https://www.svgrepo.com/show/475647/facebook-color.svg" class="h-5 w-5 mr-2" alt="Facebook">
                    <span class="text-sm font-medium">Facebook</span>
                </a>
            </div>

            <p class="text-center text-sm text-gray-600 mt-6">
                Vous n'avez pas de compte ? 
                <button type="button" onclick="switchToRegister()" class="text-[#D88F42] hover:text-[#0C4069] font-medium">
                    Inscription
                </button>
            </p>
        </form>
    </div>
</div>

<script>
// Ajoutez ces fonctions à votre script existant
function openLoginModal() {
    document.getElementById('loginModal').classList.remove('hidden');
    document.getElementById('loginModal').classList.add('flex');
    document.body.style.overflow = 'hidden';
}

function closeLoginModal() {
    document.getElementById('loginModal').classList.add('hidden');
    document.getElementById('loginModal').classList.remove('flex');
    document.body.style.overflow = 'auto';
}

// Fermer le modal en cliquant en dehors
document.getElementById('loginModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeLoginModal();
    }
});

function switchToLogin() {
    closeRegistrationModal();
    openLoginModal();
}

function switchToRegister() {
    closeLoginModal();
    openRegistrationModal();
}

function togglePassword() {
    const passwordInput = document.getElementById('password');
    const showPasswordIcon = document.getElementById('showPasswordIcon');
    
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        showPasswordIcon.innerHTML = `
            <path d="M3.707 2.293a1 1 0 00-1.414 1.414l14 14a1 1 0 001.414-1.414l-1.473-1.473A10.014 10.014 0 0019.542 10C18.268 5.943 14.478 3 10 3a9.958 9.958 0 00-4.512 1.074l-1.78-1.781zm4.261 4.26l1.514 1.515a2.003 2.003 0 012.45 2.45l1.514 1.514a4 4 0 00-5.478-5.478z"/>
            <path d="M12.454 16.697L9.75 13.992a4 4 0 01-3.742-3.741L2.335 6.578A9.98 9.98 0 00.458 10c1.274 4.057 5.065 7 9.542 7 .847 0 1.669-.105 2.454-.303z"/>
        `;
    } else {
        passwordInput.type = 'password';
        showPasswordIcon.innerHTML = `
            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
        `;
    }
}
</script>

</body>
</html>