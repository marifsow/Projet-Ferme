@extends('layouts.app')

@section('title', 'Détails de l\'Employé')

@section('content')
    <h1 class="text-center">Détails de l'Employé : {{ $employe->nom }} {{ $employe->prenom }}</h1>

    <div class="table-responsive">
        <table class="table table-bordered mt-4">
            <tr>
                <th>Nom</th>
                <td>{{ $employe->nom }}</td>
            </tr>
            <tr>
                <th>Prénom</th>
                <td>{{ $employe->prenom }}</td>
            </tr>
            <tr>
                <th>Rôle</th>
                <td>{{ $employe->role }}</td>
            </tr>
            <tr>
                <th>Date d'Embauche</th>
                <td>{{ $employe->date_embauche->format('d/m/Y') }}</td>
            </tr>
        </table>
    </div>

    <div class="text-center">
        <a href="{{ route('employes.index') }}" class="btn btn-secondary">Retour à la liste</a>
    </div>
@endsection
