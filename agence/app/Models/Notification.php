<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = ['utilisateur_id', 'message', 'type', 'lu'];

    // Relations
    public function utilisateur()
    {
        return $this->belongsTo(User::class);
    }
}
