<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
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
    padding: 5px 10px;
    font-size: 14px;
    border-radius: 4px;
}

.btn-info {
    background-color: #17a2b8;
    border: none;
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
}
.btn-danger:hover {
    background-color: #c82333;
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

    </style>
</head>
<body>
@extends('layouts.app')

@section('title', 'Ajouter un Animal')

@section('content')
    <h1 class="text-center">Ajouter un Nouvel Animal</h1>

    <form method="POST" action="{{ route('animaux.store') }}">
        @csrf

        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>

        <div class="form-group">
            <label for="espece">Espèce</label>
            <input type="text" class="form-control" id="espece" name="espece" required>
        </div>

        <div class="form-group">
            <label for="date_naissance">Date de naissance</label>
            <input type="date" class="form-control" id="date_naissance" name="date_naissance" required>
        </div>

        <div class="form-group">
            <label for="etat_sante">État de santé</label>
            <input type="text" class="form-control" id="etat_sante" name="etat_sante" required>
        </div>

        <button type="submit" class="btn btn-success mt-3">Ajouter l'animal</button>
    </form>
@endsection

</body>
</html>
