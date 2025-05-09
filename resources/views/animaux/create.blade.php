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
