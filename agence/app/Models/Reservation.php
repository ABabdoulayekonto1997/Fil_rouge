<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = ['utilisateur_id', 'voyage_id', 'statut', 'date_reservation'];

    // Relations
    public function utilisateur()
    {
        return $this->belongsTo(User::class);
    }

    public function voyage()
    {
        return $this->belongsTo(Voyage::class);
    }

    public function paiements()
    {
        return $this->hasMany(Paiement::class);
    }
}

