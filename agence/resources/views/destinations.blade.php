<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinations au Cameroun - AKM Voyage</title>
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <!-- Header (Same as your other pages) -->
    <header class="fixed top-0 left-0 right-0 bg-white px-1 py-4 shadow-md z-50">
        <div class="container mx-auto">
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
</body>
</html>