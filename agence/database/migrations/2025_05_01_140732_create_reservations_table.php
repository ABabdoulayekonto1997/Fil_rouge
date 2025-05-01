<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('utilisateur_id')
                  ->constrained('users')
                  ->onDelete('cascade')
                  ->name('fk_reservations_users');
            $table->foreignId('voyage_id')
                  ->constrained('voyages')
                  ->onDelete('cascade')
                  ->name('fk_reservations_voyages');
            $table->enum('statut', ['en_attente', 'confirmée', 'annulée'])->default('en_attente');
            $table->timestamp('date_reservation')->useCurrent();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
