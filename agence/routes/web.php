<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VoyageController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Basic routes
Route::view('/', 'Accueil');
Route::view('/contact', 'contact');
Route::view('/Apropos', 'Apropos');
Route::view('/destinations', 'destinations');

// Dashboard routes
Route::get('/dashboard', function () {
    $user = Auth::user();
    return $user->role === 'admin' ? view('dashboard') : view('dashboardUser');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboardGestionUser', [UserController::class, 'index'])->name('GestionUser');
Route::get('/dashboardGestionVoyage', [VoyageController::class, 'index'])->name('dashboardGestionVoyage');
Route::get('/gestion-reservation', [ReservationController::class, 'gestionReservation'])->name('GestionReservation');

// Protected routes
Route::middleware('auth')->group(function () {
    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // User routes
    Route::resource('users', UserController::class);
    Route::get('/users/search', [UserController::class, 'search'])->name('users.search');
    
    // Voyage routes
    Route::resource('voyages', VoyageController::class);
    Route::get('/voyages/search', [VoyageController::class, 'search'])->name('voyages.search');
    
    // Reservation routes
    Route::get('/mes-reservations', [ReservationController::class, 'mesReservations'])->name('mes-reservations');
    Route::get('/reservationgestion', [ReservationController::class, 'showReservations'])->name('ReservationGestion');
    Route::get('/reservations/search', [ReservationController::class, 'search'])->name('reservations.search');
    Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');
    Route::delete('/reservations/{id}', [ReservationController::class, 'annuler'])->name('reservations.annuler');

    // Admin routes
    Route::middleware('admin')->group(function () {
        Route::patch('/reservations/{reservation}/confirm', [ReservationController::class, 'confirm'])->name('reservations.confirm');
        Route::patch('/reservations/{reservation}/annuler', [ReservationController::class, 'annuler'])->name('reservations.annuler');
    });
});

// Public reservation routes
Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation');

// Authentication routes
require __DIR__.'/auth.php';
Route::get('/reservationgestion', [ReservationController::class, 'index'])->name('ReservationGestion');
Route::get('/voyages/search', [VoyageController::class, 'search'])->name('voyages.search');
Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');

Route::delete('/reservations/{reservation}', 'ReservationController@destroy')->name('reservations.destroy');
