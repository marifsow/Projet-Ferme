@extends('layouts.app')

@section('title', 'Suivis Sanitaires')

@section('content')
<div class="container">
    <h1 class="mb-4">Liste des suivis sanitaires</h1>
    <a href="{{ route('suivis.create') }}" class="btn btn-success mb-4">Ajouter un suivi sanitaire</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Animal</th>
                <th>Date</th>
                <th>Type</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($suivis as $suivi)
                <tr>
                    <!-- Vérifier si l'animal existe avant d'afficher son nom -->
                    <td>{{ $suivi->animal ? $suivi->animal->nom : 'Animal non trouvé' }}</td>
                    <td>{{ $suivi->date->format('d/m/Y') }}</td>
                    <td>{{ $suivi->type }}</td>
                    <td>{{ $suivi->description }}</td>
                    <td>
                        <a href="{{ route('suivis.show', $suivi->id) }}" class="btn btn-info btn-sm">Voir</a>
                        <a href="{{ route('suivis.edit', $suivi->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                        <form action="{{ route('suivis.destroy', $suivi->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
