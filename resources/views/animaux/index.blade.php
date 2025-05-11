<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des Animaux</title>
    <style>
/* Style général */
body {
    background-color: #f9f9f9;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* Container */
.container {
    padding: 20px;
}

/* Titre */
h1 {
    font-size: 28px;
    font-weight: bold;
    color: #2c3e50;
    margin-bottom: 30px;
}

/* Bouton d’ajout */
a.btn-primary {
    background-color: #28a745;
    border: none;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    font-weight: bold;
    border-radius: 5px;
}
a.btn-primary:hover {
    background-color: #218838;
}

/* Tableau */
.table {
    border-collapse: collapse;
    width: 100%;
    background-color: white;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.table thead {
    background-color: #343a40;
    color: white;
}

.table th,
.table td {
    padding: 12px 15px;
    border: 1px solid #ddd;
    text-align: center;
    vertical-align: middle;
}

.table tbody tr:hover {
    background-color: #f1f1f1;
}

/* Boutons d'action */
.btn-sm {
    padding: 6px 12px;
    font-size: 14px;
    border-radius: 4px;
    margin-right: 8px; /* Espacement entre les boutons */
    display: inline-flex;
    align-items: center;
    text-decoration: none;
}

.btn-info {
    background-color: #17a2b8;
    border: none;
    color: white;
}
.btn-info:hover {
    background-color: #138496;
}

.btn-warning {
    background-color: #ffc107;
    border: none;
    color: black;
}
.btn-warning:hover {
    background-color: #e0a800;
}

.btn-danger {
    background-color: #dc3545;
    border: none;
    color: white;
}
.btn-danger:hover {
    background-color: #c82333;
}

/* Icônes */
.btn i {
    margin-right: 5px; /* Espacement entre l'icône et le texte */
}

/* Alertes */
.alert-success {
    background-color: #28a745;
    color: white;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 20px;
    font-weight: bold;
}

/* Responsive */
@media (max-width: 768px) {
    .table thead {
        display: none;
    }

    .table, .table tbody, .table tr, .table td {
        display: block;
        width: 100%;
    }

    .table tr {
        margin-bottom: 15px;
    }

    .table td {
        text-align: right;
        padding-left: 50%;
        position: relative;
    }

    .table td::before {
        content: attr(data-label);
        position: absolute;
        left: 15px;
        width: 50%;
        padding-left: 15px;
        font-weight: bold;
        text-align: left;
    }
}
</style>

</head>
<body>

@extends('layouts.app')

@section('title', 'Liste des Animaux')

@section('content')
    <h1 class="text-center mb-4">Liste des Animaux</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="text-end mb-3">
        <a href="{{ route('animaux.create') }}" class="btn btn-primary">➕ Ajouter un Animal</a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped text-center">
            <thead class="table-dark">
                <tr>
                    <th>Nom</th>
                    <th>Espèce</th>
                    <th>Date de Naissance</th>
                    <th>État de Santé</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($animaux as $animal)
                    <tr>
                        <td>{{ $animal->nom }}</td>
                        <td>{{ $animal->espece }}</td>
                        <td>{{ \Carbon\Carbon::parse($animal->date_naissance)->format('d/m/Y') }}</td>
                        <td>{{ $animal->etat_sante }}</td>
                        <td>

    <!-- Disposition horizontale des boutons avec espacement -->
    <div class="btn-group" role="group" aria-label="Actions">
        <!-- Bouton Voir -->
        <a href="{{ route('animaux.show', $animal->id) }}" class="btn btn-info btn-sm">
            <i class="fas fa-eye"></i> Voir
        </a>
        <!-- Bouton Modifier -->
        <a href="{{ route('animaux.edit', $animal->id) }}" class="btn btn-warning btn-sm">
            <i class="fas fa-edit"></i> Modifier
        </a>
        <!-- Formulaire Supprimer -->
        <form action="{{ route('animaux.destroy', $animal->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Supprimer cet animal ?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">
                <i class="fas fa-trash-alt"></i> Supprimer
            </button>
        </form>
    </div>
</td>

                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Aucun animal enregistré.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection

</body>
</html>
