@extends('layouts.app')

@section('content')
    <h1>Liste des clients</h1>
    <a href="{{ route('clients.create') }}">Ajouter un nouveau client</a>

    <ul>
        @foreach ($clients as $client)
            <li>{{ $client->civilite->libelle }} {{ $client->nom }} {{ $client->prenom }} - {{ $client->email }}
                <a href="{{ route('clients.edit', $client->id) }}">Modifier</a>

                <!-- Formulaire de suppression avec confirmation -->
                <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce client ?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
