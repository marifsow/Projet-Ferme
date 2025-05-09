@extends('layouts.app')

@section('title', 'Liste des Employés')

@section('content')
    <h1>Liste des Employés</h1>
    <a href="{{ route('employes.create') }}" class="btn btn-primary">Ajouter un employé</a>

    <table class="table mt-4">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Rôle</th>
                <th>Date d'Embauche</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employes as $employe)
                <tr>
                    <td>{{ $employe->nom }}</td>
                    <td>{{ $employe->prenom }}</td>
                    <td>{{ $employe->role }}</td>
                    <td>{{ $employe->date_embauche->format('d/m/Y') }}</td>
                    <td>
                        <a href="{{ route('employes.edit', $employe->id) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('employes.destroy', $employe->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
