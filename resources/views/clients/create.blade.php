@extends('layouts.app')

@section('content')
    <h1>Ajouter un nouveau client</h1>

    <form action="{{ route('clients.store') }}" method="POST">
        @csrf
        Civilité : 
        <select name="civilite_id">
            @foreach ($civilites as $civilite)
                <option value="{{ $civilite->id }}">{{ $civilite->libelle }}</option>
            @endforeach
        </select><br>

        Nom : <input type="text" name="nom" value="{{ old('nom') }}"><br>
        Prénom : <input type="text" name="prenom" value="{{ old('prenom') }}"><br>
        Téléphone : <input type="text" name="tel" value="{{ old('tel') }}"><br>
        Email : <input type="email" name="email" value="{{ old('email') }}"><br>

        <button type="submit">Enregistrer</button>
    </form>

    @if ($errors->any())
        <div>
            <strong>Attention !</strong> Il y a des erreurs dans votre formulaire :
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
