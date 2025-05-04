
<x-app-layout>
<x-slot name="header" class="">
        <h2 class="font-semibold text-xl text-gray-800 ">
        </h2>
    </x-slot>    
    
<div class="grid grid-cols-[15%_85%] min-h-screen bg-gray-50">
        <!-- Sidebar (15%) -->
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

        <!-- Main Content (85%) -->
        <div class="p-6">
            <!-- Header Section -->
            Illuminate\Contracts\Container\BindingResolutionException
Target class [admin] does not exist.
            <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-[#0C4069] mb-6">Mes Réservations</h2>
                        
                        @if($reservations->isEmpty())
                            <p class="text-gray-500 text-center py-8">Vous n'avez pas encore de réservations.</p>
                        @else
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Destination</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date de départ</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Prix</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach($reservations as $reservation)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">{{ $reservation->voyage ? $reservation->voyage->destination : 'N/A' }}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">{{ $reservation->voyage ? \Carbon\Carbon::parse($reservation->voyage->date_depart)->format('d/m/Y') : 'N/A' }}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">{{ $reservation->voyage ? number_format($reservation->voyage->prix, 2) . ' €' : 'N/A' }}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                                    @if($reservation->statut === 'confirmée')
                                                        bg-green-100 text-green-800
                                                    @elseif($reservation->statut === 'en_attente')
                                                        bg-yellow-100 text-yellow-800
                                                    @else
                                                        bg-red-100 text-red-800
                                                    @endif">
                                                        {{ ucfirst($reservation->statut) }}
                                                    </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                @if($reservation->statut !== 'annulée')
                                                <form method="POST" action="{{ route('reservations.destroy', $reservation->id) }}" class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Êtes-vous sûr de vouloir annuler cette réservation ?')">
                                                        Annuler la réservation
                                                    </button>
                                                </form>
                                                    @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
    </div>
        </div>
    </div>
</x-app-layout>