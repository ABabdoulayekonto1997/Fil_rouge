<x-app-layout>
<x-slot name="adminheader" class="">
        <h2 class="font-semibold text-xl text-gray-800 ">
        </h2>
    </x-slot>    
<div class="grid grid-cols-[15%_85%] min-h-screen bg-gray-50">
        <!-- Sidebar (15%) -->
        <div class="bg-[#0C4069] h-full w-[188px] sticky top-0">
            <ul class="text-white p-4 space-y-3">
                <!-- Accueil -->
                <li>
                    <a href="" class="flex items-center p-3 rounded-lg hover:bg-white hover:bg-opacity-20 transition-all duration-300 group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 group-hover:scale-110 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <span class="group-hover:font-medium">Accueil</span>
                    </a>
                </li>

                <!-- Réservation -->
                <li>
                    <a href="" class="flex items-center p-3 rounded-lg hover:bg-white hover:bg-opacity-20 transition-all duration-300 group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 group-hover:scale-110 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span class="group-hover:font-medium">Réservation</span>
                    </a>
                </li>

                <!-- Historiques -->
                <li>
                    <a href="" class="flex items-center p-3 rounded-lg hover:bg-white hover:bg-opacity-20 transition-all duration-300 group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 group-hover:scale-110 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="group-hover:font-medium">Historiques</span>
                    </a>
                </li>

                <!-- Notifications -->
                <li>
                    <a href="" class="flex items-center p-3 rounded-lg hover:bg-white hover:bg-opacity-20 transition-all duration-300 group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 group-hover:scale-110 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                        <span class="group-hover:font-medium">Notifications</span>
                    </a>
                </li>

                <!-- Profil -->
                <li>
                    <a href="{{ route('profile.edit') }}" class="flex items-center p-3 rounded-lg hover:bg-white hover:bg-opacity-20 transition-all duration-300 group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 group-hover:scale-110 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <span class="group-hover:font-medium">Profil</span>
                    </a>
                </li>
                
                <!-- Déconnexion -->
                <li class="mt-6 pt-4 border-t border-[#0C4069]/30">
                    <form action="{{ route('logout') }}" method="post" class="w-full">
                        @csrf
                        <button type="submit" class="flex items-center w-full p-3 rounded-lg hover:bg-white hover:bg-opacity-20 transition-all duration-300 group">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 group-hover:scale-110 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                            <span class="group-hover:font-medium">Déconnexion</span>
                        </button>
                    </form>
                </li>
            </ul>  
        </div>

        <!-- Main Content (85%) -->
        <div class="p-6">
            <!-- Header Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 items-center p-6 bg-gradient-to-r from-[#0C4069] to-[#D88F42] rounded-xl shadow-lg mb-6">
                <div>
                    <h1 class="text-2xl text-white font-bold">Bonjour <span class="text-white">{{ Auth::user()->name }}</span> !</h1>
                    <p class="text-white/90 mt-2">Gérez les réservations, les utilisateurs et les statistiques de votre plateforme.</p> 
                </div>
                
                <!-- Button aligned to the right -->
                <div class="flex justify-end mt-4 md:mt-0">
                    <button class="flex items-center gap-2 bg-white text-[#D88F42] font-medium py-3 px-6 rounded-lg shadow-md transition-all duration-300 hover:bg-[#0C4069] hover:text-white hover:shadow-xl active:scale-95 transform hover:-translate-y-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                        Nouveau voyage
                    </button>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <!-- Réservations en attente -->
                <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-xl hover:-translate-y-1 border-l-4 border-[#0C4069]">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-[#0C4069]/10 text-[#0C4069] mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-gray-500 font-medium">Réservations en attente</h3>
                            <p class="text-3xl font-bold text-[#0C4069]">24</p>
                        </div>
                    </div>
                </div>
                
                <!-- Utilisateurs actifs -->
                <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-xl hover:-translate-y-1 border-l-4 border-[#D88F42]">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-[#D88F42]/10 text-[#D88F42] mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-gray-500 font-medium">Utilisateurs actifs</h3>
                            <p class="text-3xl font-bold text-[#D88F42]">156</p>
                        </div>
                    </div>
                </div>
                
                <!-- Revenus mensuels -->
                <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-xl hover:-translate-y-1 border-l-4 border-[#0C4069]">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-[#0C4069]/10 text-[#0C4069] mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-gray-500 font-medium">Revenus mensuels</h3>
                            <p class="text-3xl font-bold text-[#0C4069]">458,750 F CFA</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Area -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Réservations récentes -->
                <div class="lg:col-span-2 bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-xl">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-bold text-gray-800">Réservations récentes</h2>
                        <a href="#" class="text-sm text-[#0C4069] hover:underline">Voir tout</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Client</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Destination</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4 whitespace-nowrap">Habibatou D.</td>
                                    <td class="px-6 py-4 whitespace-nowrap">Kribi</td>
                                    <td class="px-6 py-4 whitespace-nowrap">24/04/2025</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">En attente</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <button class="text-[#0C4069] hover:text-[#D88F42] font-medium">Traiter</button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4 whitespace-nowrap">Fatimata B.</td>
                                    <td class="px-6 py-4 whitespace-nowrap">Paris</td>
                                    <td class="px-6 py-4 whitespace-nowrap">15/05/2025</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Confirmé</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <button class="text-[#0C4069] hover:text-[#D88F42] font-medium">Détails</button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4 whitespace-nowrap">Jean K.</td>
                                    <td class="px-6 py-4 whitespace-nowrap">New York</td>
                                    <td class="px-6 py-4 whitespace-nowrap">10/06/2025</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">Payé</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <button class="text-[#0C4069] hover:text-[#D88F42] font-medium">Détails</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Activité récente -->
                <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-xl">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Activité récente</h2>
                    <div class="space-y-4">
                        <div class="flex items-start pb-3 border-b border-gray-100">
                            <div class="bg-[#0C4069]/10 p-2 rounded-full mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#0C4069]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-medium">Nouvel utilisateur</p>
                                <p class="text-sm text-gray-600">Fatimata B. a créé un compte</p>
                                <p class="text-xs text-gray-400 mt-1">Il y a 15 minutes</p>
                            </div>
                        </div>
                        <div class="flex items-start pb-3 border-b border-gray-100">
                            <div class="bg-[#D88F42]/10 p-2 rounded-full mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#D88F42]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-medium">Nouvelle réservation</p>
                                <p class="text-sm text-gray-600">Habibatou D. a réservé pour Kribi</p>
                                <p class="text-xs text-gray-400 mt-1">Il y a 2 heures</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-[#0C4069]/10 p-2 rounded-full mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#0C4069]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-medium">Paiement confirmé</p>
                                <p class="text-sm text-gray-600">Jean K. a payé son voyage</p>
                                <p class="text-xs text-gray-400 mt-1">Il y a 5 heures</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Voyages populaires -->
                <div class="lg:col-span-2 bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-xl">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Destinations populaires</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <div class="border rounded-lg p-4 hover:shadow-md transition-shadow">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h3 class="font-bold text-[#0C4069]">Kribi</h3>
                                    <p class="text-sm text-gray-600">32 réservations</p>
                                </div>
                                <span class="bg-[#0C4069]/10 text-[#0C4069] text-xs font-bold px-2 py-1 rounded-full">+12%</span>
                            </div>
                            <div class="mt-3 h-2 bg-gray-200 rounded-full">
                                <div class="h-2 bg-[#0C4069] rounded-full" style="width: 80%"></div>
                            </div>
                        </div>
                        <div class="border rounded-lg p-4 hover:shadow-md transition-shadow">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h3 class="font-bold text-[#0C4069]">Paris</h3>
                                    <p class="text-sm text-gray-600">28 réservations</p>
                                </div>
                                <span class="bg-[#0C4069]/10 text-[#0C4069] text-xs font-bold px-2 py-1 rounded-full">+8%</span>
                            </div>
                            <div class="mt-3 h-2 bg-gray-200 rounded-full">
                                <div class="h-2 bg-[#0C4069] rounded-full" style="width: 70%"></div>
                            </div>
                        </div>
                        <div class="border rounded-lg p-4 hover:shadow-md transition-shadow">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h3 class="font-bold text-[#0C4069]">New York</h3>
                                    <p class="text-sm text-gray-600">25 réservations</p>
                                </div>
                                <span class="bg-[#0C4069]/10 text-[#0C4069] text-xs font-bold px-2 py-1 rounded-full">+15%</span>
                            </div>
                            <div class="mt-3 h-2 bg-gray-200 rounded-full">
                                <div class="h-2 bg-[#0C4069] rounded-full" style="width: 65%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Actions rapides -->
                <div class="space-y-4">
                    <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-xl">
                        <h2 class="text-xl font-bold text-gray-800 mb-4">Gérer les utilisateurs</h2>
                        <button class="w-full py-3 bg-gradient-to-r from-[#0C4069] to-[#0C4069]/90 text-white rounded-lg hover:from-[#0C4069]/90 hover:to-[#0C4069] transition-all duration-300 shadow-md hover:shadow-lg flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                            Voir tous les utilisateurs
                        </button>
                    </div>
                    <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-xl">
                        <h2 class="text-xl font-bold text-gray-800 mb-4">Ajouter un voyage</h2>
                        <button class="w-full py-3 bg-gradient-to-r from-[#D88F42] to-[#D88F42]/90 text-white rounded-lg hover:from-[#D88F42]/90 hover:to-[#D88F42] transition-all duration-300 shadow-md hover:shadow-lg flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                            Créer un nouveau voyage
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>