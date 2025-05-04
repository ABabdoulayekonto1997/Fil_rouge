<?php

namespace App\Http\Controllers;

use App\Models\Voyage;
use App\Models\Reservation;
use Illuminate\Http\Request;

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

    public function confirm(Reservation $reservation)
    {
        $reservation->update(['statut' => 'confirmée']);
        return redirect()->back()->with('success', 'Réservation confirmée avec succès');
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
}