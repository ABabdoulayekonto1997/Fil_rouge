<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

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

    public function update(Request $request, User $user)
    {
        try {
            $validated = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)],
                'role' => ['required', Rule::in(['utilisateur', 'admin', 'super_admin'])],
                'is_active' => ['sometimes', 'boolean'],
                'password' => ['nullable', 'string', 'min:8', 'confirmed'],
            ]);

            $userData = [
                'name' => $validated['name'],
                'email' => $validated['email'],
                'role' => $validated['role'],
                'is_active' => $request->has('is_active'),
            ];

            if (!empty($validated['password'])) {
                $userData['password'] = Hash::make($validated['password']);
            }

            $user->update($userData);

            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Utilisateur mis à jour avec succès'
                ]);
            }

            return redirect()->route('users.index')
                ->with('success', 'Utilisateur mis à jour avec succès');
        } catch (\Exception $e) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Une erreur est survenue lors de la mise à jour : ' . $e->getMessage()
                ], 422);
            }

            return back()->withErrors(['error' => 'Une erreur est survenue lors de la mise à jour : ' . $e->getMessage()])->withInput();
        }
    }
}