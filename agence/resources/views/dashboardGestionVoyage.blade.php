
<x-app-layout>
    <x-slot name="adminheader" class="">
        <h2 class="font-semibold text-xl text-gray-800">
        </h2>
    </x-slot>
    <div class="grid grid-cols-[15%_85%] min-h-screen bg-gray-50">
        <!-- Sidebar (15%) -->
        <div class="bg-[#0C4069] h-full w-[188px] sticky top-0">
            <ul class="text-white p-4 space-y-3">
                <!-- Accueil -->
                <li>
                    <a href="{{ route('dashboard') }}" class="flex items-center p-3 rounded-lg hover:bg-white hover:bg-opacity-20 transition-all duration-300 group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 group-hover:scale-110 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <span class="group-hover:font-medium">Accueil</span>
                    </a>
                </li>

                <!-- Gestion Utilisateurs -->
                <li>
                    <a href="{{ route('GestionUser') }}" class="flex items-center p-3 rounded-lg hover:bg-white hover:bg-opacity-20 transition-all duration-300 group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 group-hover:scale-110 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        <span class="group-hover:font-medium">Utilisateurs</span>
                    </a>
                </li>

                <!-- Gestion Voyages -->
                <li>
                    <a href="{{ route('dashboardGestionVoyage') }}" class="flex items-center p-3 rounded-lg bg-white bg-opacity-20 transition-all duration-300 group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 group-hover:scale-110 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064" />
                        </svg>
                        <span class="group-hover:font-medium">Voyages</span>
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

                <!-- Profil -->
                <li>
                    <a href="{{ route('profile.edit') }}" class="flex items-center p-3 rounded-lg hover:bg-white hover:bg-opacity-20 transition-all duration-300 group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 group-hover:scale-110 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <span class="group-hover:font-medium">Profil</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Le reste de votre contenu ici -->
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <!-- En-tête -->
                        <div class="grid grid-cols-1 md:grid-cols-2 items-center p-6 bg-gradient-to-r from-[#0C4069] to-[#D88F42] rounded-xl shadow-lg mb-6">
                <div>
                    <h1 class="text-2xl text-white font-bold">Gestion des Voyages</h1>
                    <p class="text-white/90 mt-2">Gérez les destinations, les circuits et les offres spéciales.</p>
                </div>
                <div class="flex justify-end mt-4 md:mt-0">
                    
                    <button onclick="openAddModal()" class="flex items-center gap-2 bg-white text-[#D88F42] font-medium py-3 px-6 rounded-lg shadow-md transition-all duration-300 hover:bg-[#0C4069] hover:text-white hover:shadow-xl active:scale-95 transform hover:-translate-y-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                        Ajouter un voyage
                
                    </button>
                
                </div>
            </div>
                        <div class="flex justify-between items-center mb-6">

                           
                        </div>

                        <!-- Tableau des voyages -->
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Image</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Destination</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Ville de départ</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Description</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Prix</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Date de départ</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach($voyages as $voyage)
                                    <tr>
                                        <!-- Dans le tableau -->
                                        <td class="px-6 py-4">
                                            <img 
                                                src="{{ asset('storage/' . $voyage->image) }}" 
                                                alt="{{ $voyage->destination }}" 
                                                class="h-20 w-20 object-cover rounded"
                                                onerror="this.onerror=null; this.src='/images/default.jpg';"
                                            >
                                        </td>
                                        <td class="px-6 py-4">{{ $voyage->destination }}</td>
                                        <td class="px-6 py-4">{{ $voyage->ville_depart }}</td>
                                        <td class="px-6 py-4">{{ Str::limit($voyage->description, 50) }}</td>
                                        <td class="px-6 py-4">{{ $voyage->prix_formate }}</td>
                                        <td class="px-6 py-4">{{ \Carbon\Carbon::parse($voyage->date_depart)->format('d/m/Y') }}</td>
                                        <td class="px-6 py-4 text-sm">
                                            <button onclick="openEditModal({{ $voyage->id }})" class="text-blue-600 hover:text-blue-900 mr-2">
                                                <i class="fas fa-edit"></i> Modifier
                                            </button>
                                            <form action="{{ route('voyages.destroy', $voyage->id) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce voyage ?')">
                                                    <i class="fas fa-trash"></i> Supprimer
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        <div class="mt-4">
                            {{ $voyages->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal d'ajout -->
    <div id="addModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden overflow-y-auto h-full w-full z-50">
        <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
            <div class="mt-3">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Ajouter un nouveau voyage</h3>
                <form action="{{ route('voyages.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Image</label>
                        <input type="file" name="image" class="w-full" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Destination</label>
                        <input type="text" name="destination" class="w-full px-3 py-2 border rounded-lg" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Ville de départ</label>
                        <input type="text" name="ville_depart" class="w-full px-3 py-2 border rounded-lg" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                        <textarea name="description" class="w-full px-3 py-2 border rounded-lg"></textarea>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Prix (FCFA)</label>
                        <input type="number" name="prix" class="w-full px-3 py-2 border rounded-lg" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Date de départ</label>
                        <input type="date" name="date_depart" class="w-full px-3 py-2 border rounded-lg" required>
                    </div>
                    <div class="flex justify-end space-x-3">
                        <button type="button" onclick="closeAddModal()" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-lg">Annuler</button>
                        <button type="submit" class="px-4 py-2 bg-[#0C4069] text-white rounded-lg hover:bg-[#D88F42]">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal de modification -->
    <div id="editModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden overflow-y-auto h-full w-full z-50">
        <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
            <div class="mt-3">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Modifier le voyage</h3>
                <form id="editForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Image actuelle</label>
                        <img id="currentImage" src="" alt="Image actuelle" class="w-32 h-32 object-cover rounded mb-2">
                        <input type="file" name="image" class="w-full">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Destination</label>
                        <input type="text" id="editDestination" name="destination" class="w-full px-3 py-2 border rounded-lg" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Ville de départ</label>
                        <input type="text" id="editVilleDepart" name="ville_depart" class="w-full px-3 py-2 border rounded-lg" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                        <textarea id="editDescription" name="description" class="w-full px-3 py-2 border rounded-lg"></textarea>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Prix (FCFA)</label>
                        <input type="number" id="editPrix" name="prix" class="w-full px-3 py-2 border rounded-lg" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Date de départ</label>
                        <input type="date" id="editDateDepart" name="date_depart" class="w-full px-3 py-2 border rounded-lg" required>
                    </div>
                    <div class="flex justify-end space-x-3">
                        <button type="button" onclick="closeEditModal()" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-lg">Annuler</button>
                        <button type="submit" class="px-4 py-2 bg-[#0C4069] text-white rounded-lg hover:bg-[#D88F42]">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function openAddModal() {
            document.getElementById('addModal').classList.remove('hidden');
        }

        function closeAddModal() {
            document.getElementById('addModal').classList.add('hidden');
        }

        function openEditModal(id) {
            fetch(`/voyages/${id}/edit`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Erreur lors de la récupération des données');
                    }
                    return response.json();
                })
                .then(voyage => {
                    // Mise à jour du formulaire avec les données du voyage
                    document.getElementById('editForm').action = `/voyages/${voyage.id}`;
                    document.getElementById('editDestination').value = voyage.destination;
                    document.getElementById('editVilleDepart').value = voyage.ville_depart;
                    document.getElementById('editDescription').value = voyage.description;
                    document.getElementById('editPrix').value = voyage.prix;
                    
                    const dateDepart = new Date(voyage.date_depart);
                    const formattedDate = dateDepart.toISOString().split('T')[0];
                    document.getElementById('editDateDepart').value = formattedDate;
                    
                    if (voyage.image) {
                        document.getElementById('currentImage').src = `${window.location.origin}/storage/${voyage.image}`;
                    }
                    
                    document.getElementById('editModal').classList.remove('hidden');
                });
        }

        // Ajoutez cette nouvelle fonction pour gérer la soumission du formulaire
        document.getElementById('editForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const voyageId = this.action.split('/').pop();
            
            fetch(`/voyages/${voyageId}`, {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Erreur lors de la modification');
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    closeEditModal();
                    // Rafraîchir la page pour voir les modifications
                    window.location.reload();
                } else {
                    alert('Une erreur est survenue lors de la modification');
                }
            })
            .catch(error => {
                console.error('Erreur:', error);
                alert('Une erreur est survenue lors de la modification');
            });
        });

        function closeEditModal() {
            document.getElementById('editModal').classList.add('hidden');
        }
    </script>
</x-app-layout>