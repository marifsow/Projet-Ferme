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
