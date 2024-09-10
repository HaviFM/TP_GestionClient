@extends('layouts.app')

@section('content')
    <h1>Modifier le client</h1>

    <form action="{{ route('clients.update', $client->id) }}" method="POST">
        @csrf
        @method('PUT')

        Civilité : 
        <select name="civilite">
            <option value="Monsieur" {{ $client->civilite == 'Monsieur' ? 'selected' : '' }}>Monsieur</option>
            <option value="Madame" {{ $client->civilite == 'Madame' ? 'selected' : '' }}>Madame</option>
        </select><br>

        Nom : <input type="text" name="nom" value="{{ $client->nom }}"><br>
        Prénom : <input type="text" name="prenom" value="{{ $client->prenom }}"><br>
        Téléphone : <input type="text" name="tel" value="{{ $client->tel }}"><br>
        Email : <input type="email" name="email" value="{{ $client->email }}"><br>

        <button type="submit">Enregistrer</button>
    </form>

    <a href="{{ route('clients.index') }}">Annuler</a>
@endsection
