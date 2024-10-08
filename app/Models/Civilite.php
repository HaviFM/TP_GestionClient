<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Civilite extends Model
{
    protected $fillable = ['libelle'];

    public function clients()
    {
        return $this->hasMany(Client::class);
    }
}
