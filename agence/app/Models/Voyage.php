<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'destination',
        'ville_depart',
        'description',
        'prix',
        'date_depart'
    ];

    // Accesseur pour formater le prix en FCFA
    public function getPrixFormateAttribute()
    {
        return number_format((float)$this->prix, 0, ',', ' ') . ' FCFA';
    }

    // Relations
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}