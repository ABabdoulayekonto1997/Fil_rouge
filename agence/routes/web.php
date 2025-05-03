<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VoyageController;  // Add this line
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::view('/','Accueil' );
Route::view('/contact','contact');
Route::view('/Apropos','Apropos');
Route::view('/destinations','destinations');
Route::get('/dashboardGestionUser',[UserController::class, 'index'])->name('GestionUser');
// Current incorrect route
Route::get('/dashboardGestionVoyage',[UserController::class, 'index'])->name('dashboardGestionVoyage');

// Should be changed to
Route::get('/dashboardGestionVoyage',[VoyageController::class, 'index'])->name('dashboardGestionVoyage');



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
});

require __DIR__.'/auth.php';
