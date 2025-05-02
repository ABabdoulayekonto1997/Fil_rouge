<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::view('/','Accueil' );
Route::view('/contact','contact');
Route::view('/Apropos','Apropos');
Route::view('/destinations','destinations');
Route::get('/dashboardGestionUser',[UserController::class, 'index'])->name('GestionUser');


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
    Route::resource('users', UserController::class);
});

require __DIR__.'/auth.php';
