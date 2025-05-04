<?php

namespace App\Http\Controllers;

use App\Models\Voyage;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function index()
    {
        $voyages = Voyage::all();
        return view('Reservation', compact('voyages'));
    }

    public function showReservations()
    {
        $reservations = Reservation::with(['utilisateur', 'voyage'])->get();
        return view('ReservationGestion', compact('reservations'));
    }

    public function mesReservations()
    {
        $reservations = Reservation::with('voyage')
            ->where('utilisateur_id', Auth::id())
            ->orderBy('date_reservation', 'desc')
            ->get();
        
        return view('mes-reservations', compact('reservations'));
    }

    public function confirm(Reservation $reservation)
    {
        $reservation->update(['statut' => 'confirmée']);
        return redirect()->back()->with('success', 'Réservation confirmée avec succès');
    }

    public function destroy(Reservation $reservation)
    {
        // Vérifier si l'utilisateur est autorisé à annuler cette réservation
        if ($reservation->utilisateur_id !== Auth::id()) {
            return redirect()->back()->with('error', 'Vous n\'êtes pas autorisé à annuler cette réservation.');
        }

        // Mettre à jour le statut de la réservation
        $reservation->update(['statut' => 'annulée']);
        
        return redirect()->back()->with('success', 'Votre réservation a été annulée avec succès.');
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

    public function store(Request $request)
    {
        $request->validate([
            'voyage_id' => 'required|exists:voyages,id'
        ]);

        $reservation = Reservation::create([
            'utilisateur_id' => Auth::id(),
            'voyage_id' => $request->voyage_id,
            'statut' => 'en_attente',
            'date_reservation' => now()
        ]);

        return redirect()->back()->with('success', 'Votre réservation a été enregistrée avec succès');
    }
}