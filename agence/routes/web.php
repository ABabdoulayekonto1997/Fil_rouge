<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VoyageController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::view('/','Accueil' );
Route::view('/contact','contact');
Route::view('/Apropos','Apropos');
Route::view('/destinations','destinations');
Route::get('/dashboardGestionUser',[UserController::class, 'index'])->name('GestionUser');
Route::get('/dashboardGestionVoyage',[VoyageController::class, 'index'])->name('dashboardGestionVoyage');
// Remove these duplicate routes
Route::get('/gestion-reservation', function () {
    return view('gestion-reservation');
})->name('GestionReservation');
Route::get('/gestion-reservation', function () {
    return view('gestion-reservation');
})->name('GestionReservation');

// Keep only this one
Route::get('/gestion-reservation', [ReservationController::class, 'gestionReservation'])->name('GestionReservation');
Route::get('/dashboard', function () {
    $user = Auth::user();

    if ($user->role === 'admin') {
        return view('dashboard'); // admin
    } else {
        return view('dashboardUser'); // utilisateur
    }
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Routes pour la gestion des utilisateurs
Route::middleware(['auth'])->group(function () {
    // User routes
    Route::resource('users', UserController::class);
    Route::get('/users/search', [UserController::class, 'search'])->name('users.search');
    
    // Voyage routes
    Route::resource('voyages', VoyageController::class);
    Route::get('/voyages/search', [VoyageController::class, 'search'])->name('voyages.search');
    Route::delete('/reservations/{id}', [ReservationController::class, 'annuler'])->name('reservations.annuler');
    // Routes pour les réservations
    Route::get('/mes-reservations', [ReservationController::class, 'mesReservations'])->name('mes-reservations');
    Route::get('/reservationgestion', [ReservationController::class, 'showReservations'])->name('ReservationGestion');
    Route::get('/reservations/search', [ReservationController::class, 'search'])->name('reservations.search');
    Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');
    
    // Routes pour l'admin
    Route::middleware(['admin'])->group(function () {
        Route::patch('/reservations/{reservation}/confirm', [ReservationController::class, 'confirm'])->name('reservations.confirm');
        Route::patch('/reservations/{reservation}/annuler', [ReservationController::class, 'annuler'])->name('reservations.annuler');
    });
});

require __DIR__.'/auth.php';
Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation');
Route::get('/reservationgestion', [ReservationController::class, 'index'])->name('ReservationGestion');
Route::get('/voyages/search', [VoyageController::class, 'search'])->name('voyages.search');
Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');

Route::delete('/reservations/{reservation}', 'ReservationController@destroy')->name('reservations.destroy');