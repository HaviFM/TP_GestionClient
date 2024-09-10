<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // Import du trait
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory; // Utilisation du trait

    protected $fillable = ['civilite', 'nom', 'prenom', 'tel', 'email'];
}
