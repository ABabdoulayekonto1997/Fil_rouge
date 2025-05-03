<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(10); // This will return a paginator instance instead of a collection
        return view('dashboardGestionUser', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Utilisateur supprimé avec succès');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'role' => ['required', 'string', 'in:utilisateur,admin,super_admin'], // Correction ici
            'is_active' => ['boolean']
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => $validated['role'],
            'is_active' => $validated['is_active'] ?? true
        ]);

        return redirect()->route('users.index')
            ->with('success', 'Utilisateur créé avec succès');
    }

    public function update(Request $request, User $user)
    {
        try {
            $validated = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $user->id],
                'role' => ['required', 'string', 'in:utilisateur,admin,super_admin'],
                'is_active' => ['nullable', 'boolean']
            ]);

            $updateData = [
                'name' => $validated['name'],
                'email' => $validated['email'],
                'role' => $validated['role']
            ];

            if ($request->has('is_active')) {
                $updateData['is_active'] = $request->boolean('is_active');
            }

            $user->update($updateData);

            return response()->json([
                'success' => true,
                'message' => 'Utilisateur modifié avec succès'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erreur lors de la modification : ' . $e->getMessage()
            ], 422);
        }
    }

    public function search(Request $request)
    {
        try {
            $term = $request->query('term');
            
            if (empty($term)) {
                return response()->json([
                    'success' => true,
                    'users' => User::paginate(10)
                ]);
            }
    
            $users = User::where(function($query) use ($term) {
                $query->where('name', 'LIKE', "%{$term}%")
                      ->orWhere('email', 'LIKE', "%{$term}%")
                      ->orWhere('role', 'LIKE', "%{$term}%");
            })->get();
    
            return response()->json([
                'success' => true,
                'users' => $users
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erreur lors de la recherche : ' . $e->getMessage()
            ], 422);
        }
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));  // Changed from 'user.show' to 'users.show'
    }
}
