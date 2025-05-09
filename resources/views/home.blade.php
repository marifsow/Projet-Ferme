@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <div class="text-center my-5">
        <h1 class="display-4">Bienvenue à notre ferme d’élevage ! 🐄🐑🐓</h1>
        <p class="lead">Des animaux heureux, une tradition familiale, et un savoir-faire respectueux de la nature.</p>
        <a class="btn btn-success btn-lg m-2" href="{{ route('animaux.index') }}">Voir les animaux</a>
        <a class="btn btn-outline-success btn-lg m-2" href="{{ route('contact') }}">Contact</a>
    </div>

    <hr>

    <section class="row text-center my-5">
        <div class="col-md-4">
            <img src="https://via.placeholder.com/300x200?text=Vaches" class="img-fluid rounded" alt="Vaches">
            <h3 class="mt-3">Élevage de vaches</h3>
            <p>Nos vaches sont nourries à l’herbe et élevées en plein air pour garantir une viande de qualité supérieure.</p>
        </div>
        <div class="col-md-4">
            <img src="https://via.placeholder.com/300x200?text=Moutons" class="img-fluid rounded" alt="Moutons">
            <h3 class="mt-3">Élevage de moutons</h3>
            <p>Nous produisons une laine douce et naturelle, grâce à un élevage doux et responsable.</p>
        </div>
        <div class="col-md-4">
            <img src="https://via.placeholder.com/300x200?text=Poules" class="img-fluid rounded" alt="Poules">
            <h3 class="mt-3">Élevage de volailles</h3>
            <p>Des œufs frais chaque jour, provenant de nos poules élevées en liberté dans un environnement sain.</p>
        </div>
    </section>

    <hr>

    <section class="bg-light p-5 rounded">
        <h2 class="text-center mb-4">Pourquoi nous choisir ?</h2>
        <ul class="list-unstyled">
            <li>✅ Élevage respectueux de l’environnement et du bien-être animal</li>
            <li>✅ Produits fermiers 100% naturels et sans OGM</li>
            <li>✅ Vente directe à la ferme et circuits courts</li>
            <li>✅ Visites pédagogiques et ateliers pour les familles</li>
        </ul>
    </section>

    <hr>

    <section class="text-center my-5">
        <h2>Vous souhaitez en savoir plus ?</h2>
        <p>Parlez avec nous, visitez notre ferme ou rejoignez nos événements mensuels !</p>
        <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Nous contacter</a>
    </section>
@endsection
