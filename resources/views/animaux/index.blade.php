@extends('layouts.app')

@section('title', 'Liste des Animaux')

@section('content')
    <h1 class="text-center">Liste des Animaux</h1>

    <a href="{{ route('animaux.create') }}" class="btn btn-primary mb-3">Ajouter un nouvel animal</a>

    <div class="row">
        @foreach ($animaux as $animal)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $animal->nom }}</h5>
                        <p><strong>Espèce:</strong> {{ $animal->espece }}</p>
                        <p><strong>Date de naissance:</strong> {{ $animal->date_naissance->format('d/m/Y') }}</p>
                        <p><strong>État de santé:</strong> {{ $animal->etat_sante }}</p>
                        <a href="{{ route('animaux.show', $animal->id) }}" class="btn btn-info">Détails</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
