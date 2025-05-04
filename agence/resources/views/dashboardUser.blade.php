<x-app-layout>
<x-slot name="header" class="">
        <h2 class="font-semibold text-xl text-gray-800 ">
        </h2>
    </x-slot>
<div class="grid grid-cols-[20%_80%] min-h-screen bg-gray-50">
        <!-- Sidebar (15%) - Version améliorée -->
        <div class="bg-[#0C4069] h-full w-[188px] sticky top-0">
            <ul class="text-white p-4 space-y-3">
                <!-- Tableau de bord -->
                <li>
                    <a href="{{ route('dashboard') }}" class="flex items-center p-3 rounded-lg hover:bg-white hover:bg-opacity-20 transition-all duration-300 group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 group-hover:scale-110 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                        </svg>
                        <span class="group-hover:font-medium">Dashboard</span>
                    </a>
                </li>
            <!-- Accueil -->
                <li>
                    <a href="{{url('/')}}" class="flex items-center p-3 rounded-lg hover:bg-white hover:bg-opacity-20 transition-all duration-300 group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 group-hover:scale-110 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <span class="group-hover:font-medium">Accueil</span>
                    </a>
                </li>

                <!-- Réservation -->
                <li>
                    <a href="{{ route('reservation') }}" class="flex items-center p-3 rounded-lg hover:bg-white hover:bg-opacity-20 transition-all duration-300 group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 group-hover:scale-110 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span class="group-hover:font-medium">Réservation</span>
                    </a>
                </li>

                <!-- Historiques -->
                <li>
                    <a href="{{ route('mes-reservations') }}" class="flex items-center p-3 rounded-lg hover:bg-white hover:bg-opacity-20 transition-all duration-300 group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 group-hover:scale-110 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="group-hover:font-medium">Mes Réservations</span>
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

        <!-- Main Content (85%) - Version améliorée -->
        <div class="p-6">
            <!-- Header Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 items-center p-6 bg-gradient-to-r from-[#0C4069] to-[#D88F42] rounded-xl shadow-lg mb-6">
                <div>
                    <h1 class="text-2xl text-white font-bold">Bonjour <span class="text-white">{{ Auth::user()->name }}</span> !</h1>
                    <p class="text-white/90 mt-2">Prêt pour votre prochaine aventure ? Consultez vos réservations ou découvrez nos nouvelles offres.</p> 
                </div>
                
                <!-- Button aligned to the right -->
                <div class="flex justify-end mt-4 md:mt-0">
                    <button class="flex items-center gap-2 bg-white text-[#D88F42] font-medium py-3 px-6 rounded-lg shadow-md transition-all duration-300 hover:bg-[#0C4069] hover:text-white hover:shadow-xl active:scale-95 transform hover:-translate-y-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                        Nouvelle reservation
                    </button>
                </div>
            </div>

            <!-- Content Area -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-4">
                <!-- Carte Réservations en attente -->
                <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-xl hover:-translate-y-1 border-l-4 border-yellow-500">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-lg font-semibold text-gray-800">Réservations en attente</h3>
                        <span class="bg-yellow-500 text-white text-sm font-medium px-2.5 py-1 rounded-full">
                            {{ Auth::user()->reservations()->where('statut', 'en_attente')->count() }}
                        </span>
                    </div>
                    
                    <div class="space-y-4">
                        <div class="border-b pb-4">
                            <p class="text-sm text-gray-600 mb-1">Dernière réservation en attente</p>
                            @php
                                $lastPending = Auth::user()->reservations()
                                    ->where('statut', 'en_attente')
                                    ->latest('date_reservation')
                                    ->first();
                            @endphp
                            @if($lastPending)
                                <div class="flex items-center space-x-3">
                                    <span class="text-yellow-500 font-medium">
                                        {{ \Carbon\Carbon::parse($lastPending->date_reservation)->format('d M Y') }}
                                    </span>
                                    <span class="text-gray-800">{{ $lastPending->voyage->destination ?? 'N/A' }}</span>
                                </div>
                            @else
                                <p class="text-gray-500">Aucune réservation en attente</p>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Carte Réservations annulées -->
                <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-xl hover:-translate-y-1 border-l-4 border-red-500">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-lg font-semibold text-gray-800">Réservations annulées</h3>
                        <span class="bg-red-500 text-white text-sm font-medium px-2.5 py-1 rounded-full">
                            {{ Auth::user()->reservations()->where('statut', 'annulée')->count() }}
                        </span>
                    </div>
                    
                    <div class="space-y-4">
                        <div class="border-b pb-4">
                            <p class="text-sm text-gray-600 mb-1">Dernière annulation</p>
                            @php
                                $lastCanceled = Auth::user()->reservations()
                                    ->where('statut', 'annulée')
                                    ->latest('date_reservation')
                                    ->first();
                            @endphp
                            @if($lastCanceled)
                                <div class="flex items-center space-x-3">
                                    <span class="text-red-500 font-medium">
                                        {{ \Carbon\Carbon::parse($lastCanceled->date_reservation)->format('d M Y') }}
                                    </span>
                                    <span class="text-gray-800">{{ $lastCanceled->voyage->destination ?? 'N/A' }}</span>
                                </div>
                            @else
                                <p class="text-gray-500">Aucune réservation annulée</p>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Carte Réservations en cours - Version améliorée -->


                
                <!-- Carte Statistiques - Version améliorée -->
                <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-xl hover:-translate-y-1 border-l-4 border-[#0C4069]">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Statistiques</h3>
                    
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-sm text-gray-600">Voyages cette année</span>
                                <span class="text-sm font-medium text-[#0C4069]">8/12</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-[#D88F42] h-2 rounded-full" style="width: 67%"></div>
                            </div>
                        </div>
                        
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-sm text-gray-600">Taux de ponctualité</span>
                                <span class="text-sm font-medium text-[#0C4069]">92%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-[#0C4069] h-2 rounded-full" style="width: 92%"></div>
                            </div>
                        </div>
                        
                        <div class="pt-2">
                            <p class="text-sm text-gray-600">Kilomètres parcourus</p>
                            <p class="text-xl font-bold text-[#D88F42]">24,568 km</p>
                        </div>
                    </div>
                </div>

                <!-- Carte Offres spéciales - Version améliorée -->
                <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Offres spéciales</h3>
                    
                    <div class="bg-[#0C4069] bg-opacity-10 rounded-lg p-4 mb-3 transition-all hover:bg-opacity-20">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="font-medium text-[#0C4069]">Bali</p>
                                <p class="text-sm text-gray-600">-20% cette semaine</p>
                            </div>
                            <span class="bg-[#D88F42] text-white text-xs font-bold px-2 py-1 rounded">Nouveau</span>
                        </div>
                    </div>
                    
                    <div class="bg-[#D88F42] bg-opacity-10 rounded-lg p-4 transition-all hover:bg-opacity-20">
                        <div class="flex justify-between">
                            <div>
                                <p class="font-medium text-[#D88F42]">Tokyo</p>
                                <p class="text-sm text-gray-600">Vol + Hôtel offert</p>
                            </div>
                            <span class="text-xs font-bold text-[#D88F42] self-center">🔥</span>
                        </div>
                    </div>
                    
                    <button class="mt-4 w-full py-2 text-sm font-medium text-[#0C4069] border border-[#0C4069] rounded-lg hover:bg-[#0C4069] hover:text-white transition duration-200 focus:outline-none focus:ring-2 focus:ring-[#0C4069] focus:ring-opacity-50">
                        Voir toutes les offres
                    </button>
                </div>

                <!-- Carte Documents - Version améliorée -->
                <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Documents</h3>
                    
                    <div class="space-y-3">
                        <a href="#" class="flex items-center p-3 rounded-lg hover:bg-gray-50 transition-all duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#0C4069] mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <span class="text-gray-700">Passeport.pdf</span>
                        </a>
                        
                        <a href="#" class="flex items-center p-3 rounded-lg hover:bg-gray-50 transition-all duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#0C4069] mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <span class="text-gray-700">Billet_15juin.pdf</span>
                        </a>
                        
                        <a href="#" class="flex items-center p-3 rounded-lg hover:bg-gray-50 transition-all duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#0C4069] mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <span class="text-gray-700">Assurance.pdf</span>
                        </a>
                    </div>
                    
                    <button class="mt-4 w-full py-2 text-sm font-medium text-[#D88F42] border border-[#D88F42] rounded-lg hover:bg-[#D88F42] hover:text-white transition duration-200 flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-[#D88F42] focus:ring-opacity-50">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        Ajouter un document
                    </button>
                </div>

                <!-- Carte Assistance - Version améliorée -->
                <div class="bg-[#0C4069] rounded-xl shadow-md p-6 text-white transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                    <h3 class="text-lg font-semibold mb-4">Assistance voyage</h3>
                    
                    <!-- Chat Widget -->
                    <div class="bg-white rounded-lg p-4 text-gray-800">
                        <div id="chat-messages" class="h-48 overflow-y-auto mb-4 space-y-2">
                            <!-- Messages will be displayed here -->
                            <div class="bg-gray-100 p-2 rounded-lg">
                                <p class="text-sm">👋 Bonjour ! Comment puis-je vous aider aujourd'hui ?</p>
                            </div>
                        </div>
                        
                        <div class="flex gap-2">
                            <input type="text" id="chat-input" 
                                class="flex-1 rounded-lg border border-gray-300 p-2 text-sm focus:outline-none focus:border-[#D88F42]" 
                                placeholder="Écrivez votre message...">
                            <button onclick="sendMessage()" 
                                class="bg-[#D88F42] text-white px-4 py-2 rounded-lg hover:bg-[#0C4069] transition-colors duration-300">
                                Envoyer
                            </button>
                        </div>
                    </div>

                    <div class="space-y-3 mt-4">
                        <!-- Existing contact options -->
                        <a href="#" class="flex items-center p-3 rounded-lg hover:bg-white hover:bg-opacity-20 transition-all duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span>Contact urgent</span>
                        </a>
                    </div>
                </div>

                <!-- Add this script at the end of your file -->
                <script>
                function sendMessage() {
                    const input = document.getElementById('chat-input');
                    const messages = document.getElementById('chat-messages');
                    
                    if (input.value.trim() !== '') {
                        // Ajouter le message de l'utilisateur
                        const userMessage = document.createElement('div');
                        userMessage.className = 'bg-[#0C4069] text-white p-2 rounded-lg ml-8';
                        userMessage.innerHTML = `<p class="text-sm">${input.value}</p>`;
                        messages.appendChild(userMessage);
                        
                        // Simuler une réponse automatique
                        setTimeout(() => {
                            const botMessage = document.createElement('div');
                            botMessage.className = 'bg-gray-100 text-gray-800 p-2 rounded-lg';
                            botMessage.innerHTML = `<p class="text-sm">Je vais vous aider avec votre demande concernant "${input.value}"</p>`;
                            messages.appendChild(botMessage);
                            
                            // Scroll to bottom
                            messages.scrollTop = messages.scrollHeight;
                        }, 1000);
                        
                        // Clear input
                        input.value = '';
                        
                        // Scroll to bottom
                        messages.scrollTop = messages.scrollHeight;
                    }
                }

                // Permettre l'envoi avec la touche Entrée
                document.getElementById('chat-input').addEventListener('keypress', function(e) {
                    if (e.key === 'Enter') {
                        sendMessage();
                    }
                });
                </script>
            </div>
        </div>
</div>
</x-app-layout>