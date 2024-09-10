<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Civilite;

class CivilitesTableSeeder extends Seeder
{
    public function run()
    {
        Civilite::create(['libelle' => 'Monsieur']);
        Civilite::create(['libelle' => 'Madame']);
    }
}

