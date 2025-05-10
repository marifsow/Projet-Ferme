<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container {
    max-width: 700px;
    margin: 0 auto;
    padding: 20px;
}

h1 {
    text-align: center;
    margin-bottom: 30px;
    font-weight: bold;
    color: #2c3e50;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: 600;
    margin-bottom: 5px;
    color: #34495e;
}

input.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 6px;
    transition: border-color 0.3s, box-shadow 0.3s;
}

input.form-control:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
}

.btn-primary {
    background-color: #007bff;
    border: none;
    padding: 10px 20px;
    color: #fff;
    font-weight: 600;
    border-radius: 6px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    width: 100%;
}

.btn-primary:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
@extends('layouts.app')

@section('title', 'Modifier l\'Animal')

@section('content')
<div class="container mt-4">
    <h1>Modifier l'animal : {{ $animal->nom }}</h1>

    <form method="POST" action="{{ route('animaux.update', $animal->id) }}">
        @csrf
        @method('PUT')

        @include('animaux.partials.form', ['animal' => $animal])

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
@endsection

</body>
</html>
