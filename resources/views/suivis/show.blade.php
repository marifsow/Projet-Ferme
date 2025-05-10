<!-- resources/views/suivis/show.blade.php -->

@extends('layouts.app')

@section('title', 'Détails du suivi sanitaire')

@section('content')
<div class="container">
    <h1 class="mb-4">Détails du suivi sanitaire</h1>

    <div class="card">
        <div class="card-body">
            <h3>{{ $suivi->animal->nom }} ({{ $suivi->animal->espece }})</h3>
            <p><strong>Date :</strong> {{ $suivi->date->format('d/m/Y') }}</p>
            <p><strong>Type de suivi :</strong> {{ $suivi->type }}</p>
            <p><strong>Description :</strong> {{ $suivi->description ? $suivi->description : 'Aucune description' }}</p>
        </div>
    </div>

    <a href="{{ route('suivis.index') }}" class="btn btn-primary mt-4">Retour à la liste</a>
</div>
@endsection
