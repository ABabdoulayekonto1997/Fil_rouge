<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - AKM Voyage</title>
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
</head>

<body class="bg-gray-50">
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
    <section class="relative h-[400px] overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0">
            <img src="{{ asset('build/assets/image/hero.jpg') }}" alt="Contact Hero" class="w-full h-full object-cover">
            <!-- Dark Overlay -->
            <div class="absolute inset-0 bg-[#000059]/80"></div>
        </div>

        <!-- Content -->
        <div class="relative container mx-auto px-4 h-full flex items-center">
            <div class="max-w-3xl mx-auto text-center text-white">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Contactez-nous</h1>
                <p class="text-xl text-gray-300">Nous sommes là pour vous aider à planifier votre prochain voyage</p>
            </div>
        </div>

        <!-- Decorative elements -->
        <div class="absolute top-0 left-0 w-32 h-32 bg-[#D88F42]/20 rounded-full -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-40 h-40 bg-[#D88F42]/20 rounded-full translate-x-1/2 translate-y-1/2"></div>
    </section>

    <!-- Contact Section -->
    <section class="py-16 px-4 -mt-10">
        <div class="max-w-5xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Contact Information -->
                <div class="bg-[#0C4069] text-white p-6 rounded-2xl">
                    <h2 class="text-2xl font-bold mb-4">Contact informations</h2>
                    <p class="text-gray-200 mb-8 text-base">
                        "Une question ? Une réservation spéciale ? Rendez-vous dans notre section contact – nous sommes là pour vous répondre rapidement !"
                    </p>
                    
                    <div class="space-y-6">
                        <div class="flex items-center">
                            <div class="w-10 h-10 rounded-full bg-[#D88F42]/20 flex items-center justify-center mr-4">
                                <i class="fas fa-phone text-[#D88F42]"></i>
                            </div>
                            <span>+237 668 99 99 46</span>
                        </div>
                        
                        <div class="flex items-center">
                            <div class="w-10 h-10 rounded-full bg-[#D88F42]/20 flex items-center justify-center mr-4">
                                <i class="fas fa-envelope text-[#D88F42]"></i>
                            </div>
                            <span>Mahamatkonto24@gmail.com</span>
                        </div>
                        
                        <div class="flex items-center">
                            <div class="w-10 h-10 rounded-full bg-[#D88F42]/20 flex items-center justify-center mr-4">
                                <i class="fas fa-map-marker-alt text-[#D88F42]"></i>
                            </div>
                            <span>Douala - Cameroun</span>
                        </div>
                    </div>

                    <div class="flex space-x-4 mt-12">
                        <a href="#" class="w-10 h-10 rounded-full bg-[#D88F42]/20 flex items-center justify-center hover:bg-[#D88F42]/40 transition-colors">
                            <i class="fab fa-whatsapp text-[#D88F42]"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-[#D88F42]/20 flex items-center justify-center hover:bg-[#D88F42]/40 transition-colors">
                            <i class="fab fa-facebook-f text-[#D88F42]"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-[#D88F42]/20 flex items-center justify-center hover:bg-[#D88F42]/40 transition-colors">
                            <i class="fab fa-linkedin-in text-[#D88F42]"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-[#D88F42]/20 flex items-center justify-center hover:bg-[#D88F42]/40 transition-colors">
                            <i class="fab fa-instagram text-[#D88F42]"></i>
                        </a>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-white p-6 rounded-2xl shadow-lg">
                    <h2 class="text-xl font-bold text-[#0C4069] mb-6">Envoyer nos un message</h2>
                    <form class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <input type="text" placeholder="Nom" class="w-full px-3 py-2 rounded-lg bg-gray-100 border-transparent focus:border-[#D88F42] focus:bg-white focus:ring-0">
                            </div>
                            <div>
                                <input type="text" placeholder="Prénom" class="w-full px-3 py-2 rounded-lg bg-gray-100 border-transparent focus:border-[#D88F42] focus:bg-white focus:ring-0">
                            </div>
                        </div>
                        
                        <input type="tel" placeholder="Téléphone" class="w-full px-3 py-2 rounded-lg bg-gray-100 border-transparent focus:border-[#D88F42] focus:bg-white focus:ring-0">
                        
                        <input type="text" placeholder="Objet" class="w-full px-3 py-2 rounded-lg bg-gray-100 border-transparent focus:border-[#D88F42] focus:bg-white focus:ring-0">
                        
                        <input type="email" placeholder="Mail" class="w-full px-3 py-2 rounded-lg bg-gray-100 border-transparent focus:border-[#D88F42] focus:bg-white focus:ring-0">
                        
                        <textarea placeholder="Message" rows="3" class="w-full px-3 py-2 rounded-lg bg-gray-100 border-transparent focus:border-[#D88F42] focus:bg-white focus:ring-0"></textarea>
                        
                        <button type="submit" class="w-full bg-[#D88F42] text-white py-2 px-4 rounded-lg hover:bg-[#0C4069] transition-colors duration-300">
                            Envoyer
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="w-full">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127357.57308962097!2d9.659401364396793!3d4.035899589773342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1061128be2e1fe6d%3A0x92daa1444781c48b!2sDouala!5e0!3m2!1sfr!2scm!4v1745911184397!5m2!1sfr!2scm" 
            class="w-full h-screen"
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
    <footer class="bg-gray-900 text-white relative overflow-hidden">
        <!-- Fond texturé -->
        <div class="absolute inset-0 bg-footer-texture bg-cover opacity-10"></div>
        
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

</body>
</html>