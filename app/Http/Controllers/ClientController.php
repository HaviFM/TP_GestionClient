<?php
namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Civilite;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    // Afficher la liste des clients
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    // Afficher le formulaire de création de client
    public function create()
    {
        // Récupérer toutes les civilités
        $civilites = Civilite::all();
    
        // Passer les civilités à la vue
        return view('clients.create', compact('civilites'));
    }

    // Enregistrer un nouveau client
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'civilite_id' => 'required|exists:civilites,id',  // Valider que l'ID de civilité existe
            'nom' => 'required|string|max:100',
            'prenom' => 'required|string|max:100',
            'email' => 'required|email|unique:clients,email',
        ]);
    
        // Créer un nouveau client avec l'ID de civilité
        Client::create($request->all());
    
        return redirect()->route('clients.index');
    }
    // Afficher un client spécifique (facultatif)
    public function show(Client $client)
    {
        return view('clients.show', compact('client'));
    }

    // Afficher le formulaire d'édition d'un client
    public function edit(Client $client)
    {
    // Récupérer toutes les civilités
    $civilites = Civilite::all();

    // Passer les clients et les civilités à la vue
    return view('clients.edit', compact('client', 'civilites'));

    }

    // Mettre à jour un client
    public function update(Request $request, Client $client)
    {
        $request->validate([
            'civilite_id' => 'required|exists:civilites,id',
            'nom' => 'required|string|max:100',
            'prenom' => 'required|string|max:100',
            'email' => 'required|email|unique:clients,email,' . $client->id,
        ]);

        $client->update($request->all());
        return redirect()->route('clients.index');
    }

    // Supprimer un client
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index');
    }
}

