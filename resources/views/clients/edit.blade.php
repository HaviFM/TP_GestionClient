@extends('layouts.app')

@section('content')
    <h1>Modifier le client</h1>

    <form action="{{ route('clients.update', $client->id) }}" method="POST">
        @csrf
        @method('PUT')

        Civilité : 
        <select name="civilite_id">
            @foreach ($civilites as $civilite)
                <option value="{{ $civilite->id }}" {{ $client->civilite_id == $civilite->id ? 'selected' : '' }}>
                    {{ $civilite->libelle }}
                </option>
            @endforeach
        </select><br>

        Nom : <input type="text" name="nom" value="{{ old('nom', $client->nom) }}"><br>
        Prénom : <input type="text" name="prenom" value="{{ old('prenom', $client->prenom) }}"><br>
        Téléphone : <input type="text" name="tel" value="{{ old('tel', $client->tel) }}"><br>
        Email : <input type="email" name="email" value="{{ old('email', $client->email) }}"><br>

        <button type="submit">Enregistrer</button>
    </form>

    <a href="{{ route('clients.index') }}">Annuler</a>
@endsection
