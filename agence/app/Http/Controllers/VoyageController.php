<?php

namespace App\Http\Controllers;

use App\Models\Voyage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VoyageController extends Controller
{
    public function index()
    {
        $voyages = Voyage::paginate(10);
        return view('dashboardGestionVoyage', compact('voyages'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'destination' => 'required|string|max:255',
            'ville_depart' => 'required|string|max:255', // Ajoutez cette ligne
            'description' => 'nullable|string',
            'prix' => 'required|numeric|min:0',
            'date_depart' => 'required|date'
        ]);

        $imagePath = $request->file('image')->store('voyages', 'public');

        $voyage = Voyage::create([
            'image' => $imagePath,
            'destination' => $validatedData['destination'],
            'ville_depart' => $validatedData['ville_depart'], // Assurez-vous que cette ligne est présente
            'description' => $validatedData['description'],
            'prix' => $validatedData['prix'],
            'date_depart' => $validatedData['date_depart']
        ]);

        return redirect()->back()->with('success', 'Voyage ajouté avec succès');
    }

    public function update(Request $request, Voyage $voyage)
    {
        try {
            $validated = $request->validate([
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'destination' => 'required|string|max:255',
                'description' => 'nullable|string',
                'prix' => 'required|numeric|min:0',
                'date_depart' => 'required|date'
            ]);

            if ($request->hasFile('image')) {
                // Supprimer l'ancienne image
                if ($voyage->image) {
                    Storage::disk('public')->delete($voyage->image);
                }
                $imagePath = $request->file('image')->store('voyages', 'public');
                $validated['image'] = $imagePath;
            }

            $voyage->update($validated);

            return response()->json([
                'success' => true,
                'message' => 'Voyage modifié avec succès'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erreur lors de la modification : ' . $e->getMessage()
            ], 422);
        }
    }

    public function destroy(Voyage $voyage)
    {
        if ($voyage->image) {
            Storage::disk('public')->delete($voyage->image);
        }
        
        $voyage->delete();
        return redirect()->route('voyages.index')
            ->with('success', 'Voyage supprimé avec succès');
    }

    public function search(Request $request)
    {
        $query = Voyage::query();

        if ($request->filled('destination')) {
            $query->where('destination', 'like', '%' . $request->destination . '%');
        }

        if ($request->filled('date_depart')) {
            $query->whereDate('date_depart', $request->date_depart);
        }

        $voyages = $query->get();

        return view('Reservation', compact('voyages'));
    }

    public function edit($id) 
    { 
        try { 
            $voyage = Voyage::findOrFail($id); 
            return response()->json($voyage); 
        } catch (\Exception $e) { 
            return response()->json(['error' => 'Voyage non trouvé'], 404); 
        } 
    }

    public function show($id)
    {
        $voyage = Voyage::findOrFail($id);
        return view('voyages.show', compact('voyage'));
    }
}