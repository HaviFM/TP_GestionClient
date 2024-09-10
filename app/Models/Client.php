<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;  // Assurez-vous que ce trait est bien présent

    protected $fillable = ['civilite_id', 'nom', 'prenom', 'tel', 'email'];

    public function civilite()
    {
        return $this->belongsTo(Civilite::class);
    }
}
