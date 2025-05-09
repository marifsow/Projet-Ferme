@extends('layouts.app')

@section('title', 'Modifier l\'Employé')

@section('content')
    <h1 class="text-center">Modifier l'Employé : {{ $employe->nom }} {{ $employe->prenom }}</h1>

    <form method="POST" action="{{ route('employes.update', $employe->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{ $employe->nom }}" required>
        </div>

        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $employe->prenom }}" required>
        </div>

        <div class="form-group">
            <label for="role">Rôle</label>
            <input type="text" class="form-control" id="role" name="role" value="{{ $employe->role }}" required>
        </div>

        <div class="form-group">
            <label for="date_embauche">Date d'Embauche</label>
            <input type="date" class="form-control" id="date_embauche" name="date_embauche" value="{{ $employe->date_embauche->format('Y-m-d') }}" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Mettre à jour l'employé</button>
    </form>
@endsection
