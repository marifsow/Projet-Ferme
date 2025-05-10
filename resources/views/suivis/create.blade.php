<!-- resources/views/suivis/create.blade.php -->

@extends('layouts.app')

@section('title', 'Ajouter un suivi sanitaire')

@section('content')
<div class="container">
    <h1 class="mb-4">Ajouter un suivi sanitaire</h1>

    <form action="{{ route('suivis.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="animaux_id">Animal</label>
            <select name="animaux_id" id="animaux_id" class="form-control" required>
                <option value="">Sélectionner un animal</option>
                @foreach($animaux as $animal)
                    <option value="{{ $animal->id }}">{{ $animal->nom }} ({{ $animal->espece }})</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" name="date" id="date" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="type">Type de suivi</label>
            <input type="text" name="type" id="type" class="form-control" required placeholder="Ex: Vaccination, Vermifuge, etc.">
        </div>

        <div class="form-group">
            <label for="description">Description (facultatif)</label>
            <textarea name="description" id="description" class="form-control" rows="4"></textarea>
        </div>

        <button type="submit" class="btn btn-success mt-3">Enregistrer</button>
    </form>
</div>
@endsection
