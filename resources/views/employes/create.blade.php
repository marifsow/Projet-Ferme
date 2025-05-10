<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
/* Formulaire d'ajout d'un employé */
form {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

/* Titre */
h1 {
    font-size: 24px;
    font-weight: 600;
    color: #333;
    margin-bottom: 30px;
}

/* Champs de formulaire */
.form-group {
    margin-bottom: 15px;
}

label {
    font-size: 16px;
    font-weight: 500;
    color: #333;
    margin-bottom: 8px;
    display: block;
}

input.form-control {
    padding: 10px;
    font-size: 14px;
    border-radius: 5px;
    border: 1px solid #ccc;
    width: 100%;
    box-sizing: border-box;
}

input.form-control:focus {
    border-color: #28a745;
    box-shadow: 0 0 5px rgba(40, 167, 69, 0.5);
}

/* Bouton de soumission */
.btn-success {
    background-color: #28a745;
    border-color: #28a745;
    color: white;
    font-size: 16px;
    font-weight: 600;
    padding: 12px 20px;
    border-radius: 5px;
    width: 100%;
    transition: background-color 0.3s ease;
}

.btn-success:hover {
    background-color: #218838;
    border-color: #1e7e34;
}

/* Messages d'erreur */
.is-invalid {
    border-color: #dc3545;
    box-shadow: 0 0 5px rgba(220, 53, 69, 0.5);
}

.invalid-feedback {
    color: #dc3545;
    font-size: 14px;
    margin-top: 5px;
}

/* Espacements et alignements */
.mt-3 {
    margin-top: 20px;
}

    </style>
</head>
<body>
@extends('layouts.app')

@section('title', 'Ajouter un Employé')

@section('content')
    <h1 class="text-center">Ajouter un Nouvel Employé</h1>

    <form method="POST" action="{{ route('employes.store') }}">
        @csrf

        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>

        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" required>
        </div>

        <div class="form-group">
            <label for="role">Rôle</label>
            <input type="text" class="form-control" id="role" name="role" required>
        </div>

        <div class="form-group">
            <label for="date_embauche">Date d'Embauche</label>
            <input type="date" class="form-control" id="date_embauche" name="date_embauche" required>
        </div>

        <button type="submit" class="btn btn-success mt-3">Ajouter l'employé</button>
    </form>
@endsection

</body>
</html>
