<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;
use App\Models\Civilite;

class ClientsTableSeeder extends Seeder
{
    public function run()
    {
        // On récupère les civilités depuis la table 'civilites'
        $monsieur = Civilite::where('libelle', 'Monsieur')->first();
        $madame = Civilite::where('libelle', 'Madame')->first();

        // Créer ou récupérer le client avec la civilité 'Monsieur'
        Client::firstOrCreate([
            'email' => 'jean.dupont@example.com'
        ], [
            'civilite_id' => $monsieur->id,  // Utilise l'ID de la civilité
            'nom' => 'Dupont',
            'prenom' => 'Jean',
            'tel' => '0123456789',
        ]);

        // Créer ou récupérer le client avec la civilité 'Madame'
        Client::firstOrCreate([
            'email' => 'marie.durand@example.com'
        ], [
            'civilite_id' => $madame->id,  // Utilise l'ID de la civilité
            'nom' => 'Durand',
            'prenom' => 'Marie',
            'tel' => '0987654321',
        ]);

        // Utiliser la factory pour générer 10 clients aléatoires
        \App\Models\Client::factory()->count(10)->create();
    }
}
