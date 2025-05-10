<!-- resources/views/suivis/edit.blade.php -->

@extends('layouts.app')

@section('title', 'Modifier un suivi sanitaire')

@section('content')
<div class="container">
    <h1 class="mb-4">Modifier un suivi sanitaire</h1>

    <form action="{{ route('suivis.update', $suivi->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="animaux_id">Animal</label>
            <select name="animaux_id" id="animaux_id" class="form-control" required>
                <option value="">Sélectionner un animal</option>
                @foreach($animaux as $animal)
                    <option value="{{ $animal->id }}" {{ $suivi->animaux_id == $animal->id ? 'selected' : '' }}>
                        {{ $animal->nom }} ({{ $animal->espece }})
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" name="date" id="date" class="form-control" value="{{ $suivi->date->format('Y-m-d') }}" required>
        </div>

        <div class="form-group">
            <label for="type">Type de suivi</label>
            <input type="text" name="type" id="type" class="form-control" value="{{ $suivi->type }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description (facultatif)</label>
            <textarea name="description" id="description" class="form-control" rows="4">{{ $suivi->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-warning mt-3">Mettre à jour</button>
    </form>
</div>
@endsection
