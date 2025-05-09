@extends('layouts.app')

@section('title', 'Détails de l\'animal')

@section('content')
    <h1 class="text-center">Détails de l'animal</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $animal->nom }}</h5>
            <p><strong>Espèce:</strong> {{ $animal->espece }}</p>
            <p><strong>Date de naissance:</strong> {{ $animal->date_naissance->format('d/m/Y') }}</p>
            <p><strong>État de santé:</strong> {{ $animal->etat_sante }}</p>
        </div>
    </div>

    <div class="mt-3">
        <a href="{{ route('animaux.edit', $animal->id) }}" class="btn btn-warning">Modifier</a>

        <!-- Formulaire de suppression -->
        <form action="{{ route('animaux.destroy', $animal->id) }}" method="POST" style="display: inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet animal ?')">Supprimer</button>
        </form>
    </div>

    <a href="{{ route('animaux.index') }}" class="btn btn-primary mt-3">Retour à la liste</a>
@endsection
