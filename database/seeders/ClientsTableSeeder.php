<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientsTableSeeder extends Seeder
{
    public function run()
    {
        // Vider la table clients avant d'insérer les nouveaux clients
        Client::truncate();

        // Créer manuellement deux clients
        Client::create([
            'civilite' => 'Monsieur',
            'nom' => 'Dupont',
            'prenom' => 'Jean',
            'tel' => '0123456789',
            'email' => 'jean.dupont@example.com',
        ]);

        Client::create([
            'civilite' => 'Madame',
            'nom' => 'Durand',
            'prenom' => 'Marie',
            'tel' => '0987654321',
            'email' => 'marie.durand@example.com',
        ]);

        // Utiliser la factory pour générer 10 clients aléatoires
        \App\Models\Client::factory()->count(10)->create();
    }
}
