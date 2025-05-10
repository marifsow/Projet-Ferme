<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
/* Conteneur principal */
.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

/* Titre principal */
h1 {
    font-size: 28px;
    font-weight: bold;
    color: #dc3545;
    text-align: center;
    margin-bottom: 30px;
}

/* Alerte de confirmation */
.alert-warning {
    background-color: #fff3cd;
    color: #856404;
    border-color: #ffeeba;
    padding: 15px;
    border-radius: 5px;
    font-size: 16px;
    margin-bottom: 20px;
}

.alert-warning strong {
    font-weight: bold;
}

/* Carte de l'employé à supprimer */
.card {
    border: 1px solid #f0f0f0;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 20px;
    background-color: #ffffff;
}

.card-body {
    font-size: 16px;
}

.card h4 {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 10px;
}

.card p {
    margin-bottom: 8px;
}

/* Boutons */
.btn-danger {
    background-color: #dc3545;
    border-color: #dc3545;
    color: white;
    font-size: 16px;
    font-weight: 600;
    padding: 12px 20px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
    margin-right: 10px;
}

.btn-danger:hover {
    background-color: #c82333;
    border-color: #bd2130;
}

.btn-secondary {
    background-color: #6c757d;
    border-color: #6c757d;
    color: white;
    font-size: 16px;
    font-weight: 600;
    padding: 12px 20px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.btn-secondary:hover {
    background-color: #5a6268;
    border-color: #545b62;
}

/* Espacement entre les éléments */
.mb-4 {
    margin-bottom: 30px;
}

.mb-2 {
    margin-bottom: 20px;
}

    </style>
</head>
<body>
@extends('layouts.app')

@section('title', 'Supprimer un employé')

@section('content')
<div class="container">
    <h1 class="mb-4 text-danger">🗑️ Supprimer l'employé</h1>

    <div class="alert alert-warning">
        <strong>Attention !</strong> Vous êtes sur le point de supprimer l’employé suivant :
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <h4>{{ $employe->prenom }} {{ $employe->nom }}</h4>
            <p><strong>Rôle :</strong> {{ $employe->role }}</p>
            <p><strong>Date d'embauche :</strong> {{ $employe->date_embauche }}</p>
        </div>
    </div>

    <form action="{{ route('employes.destroy', $employe->id) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Oui, supprimer</button>
        <a href="{{ route('employes.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection

</body>
</html>
