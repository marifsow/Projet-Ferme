<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
/* Style pour le tableau des employés */
.table {
    width: 100%;
    margin-bottom: 1.5rem;
    border-collapse: collapse;
}

.table th,
.table td {
    padding: 12px 15px;
    text-align: left;
    vertical-align: middle;
}

.table th {
    background-color: #28a745;
    color: white;
    font-weight: bold;
}

.table td {
    background-color: #f9f9f9;
    border-top: 1px solid #ddd;
}

.table-striped tbody tr:nth-child(odd) {
    background-color: #f1f1f1;
}

.table-hover tbody tr:hover {
    background-color: #f1f1f1;
    cursor: pointer;
}

.table-bordered {
    border: 1px solid #ddd;
}

.table-responsive {
    overflow-x: auto;
}

/* Bouton Ajouter un employé */
.btn-success {
    background-color: #28a745;
    border-color: #28a745;
    color: white;
    font-size: 16px;
    font-weight: 600;
    padding: 10px 20px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.btn-success:hover {
    background-color: #218838;
    border-color: #1e7e34;
    color: white;
}

/* Boutons Modifier et Supprimer */
.btn-warning,
.btn-danger {
    font-size: 14px;
    padding: 6px 12px;
    border-radius: 4px;
    text-align: center;
}

.btn-warning {
    background-color: #ffc107;
    border-color: #ffc107;
    color: white;
}

.btn-warning:hover {
    background-color: #e0a800;
    border-color: #d39e00;
}

.btn-danger {
    background-color: #dc3545;
    border-color: #dc3545;
    color: white;
}

.btn-danger:hover {
    background-color: #c82333;
    border-color: #bd2130;
}

.d-flex {
    display: flex;
    align-items: center;
}

.mr-2 {
    margin-right: 10px;
}

.alert-warning {
    background-color: #fff3cd;
    color: #856404;
    border-color: #ffeeba;
    padding: 10px;
    border-radius: 5px;
}

    </style>


</head>
<body>
@extends('layouts.app')

@section('title', 'Liste des Employés')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4 ">Liste des Employés</h1>

        <!-- Bouton Ajouter un employé -->
        <a href="{{ route('employes.create') }}" class="btn btn-success mb-4">
            <i class="bi bi-person-plus"></i> Ajouter un employé
        </a>

        <!-- Vérification si la liste est vide -->
        @if($employes->isEmpty())
            <div class="alert alert-warning">
                Aucun employé trouvé.
            </div>
        @else
            <!-- Tableau des employés -->
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
                    <thead class="thead-dark">
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
                                <td class="d-flex">
                                    <a href="{{ route('employes.edit', $employe->id) }}" class="btn btn-warning btn-sm mr-2">
                                        <i class="bi bi-pencil"></i> Modifier
                                    </a>
                                    <form action="{{ route('employes.destroy', $employe->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i> Supprimer
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center">
                {{ $employes->links() }}
            </div>
        @endif
    </div>
@endsection

</body>
</html>
