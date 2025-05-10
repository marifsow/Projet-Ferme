<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Ferme Moderne</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #e0f7fa, #b2dfdb);
            color: #004d40;
            line-height: 1.7;
        }

        h1, h2, h3 {
            font-family: 'Playfair Display', serif;
            color: #00796b;
            margin-bottom: 0.5em;
        }

        h1 {
            font-size: clamp(2.5rem, 5vw, 4rem);
        }

        h2 {
            font-size: clamp(1.75rem, 4vw, 2.5rem);
        }

        h3 {
            font-size: 1.25rem;
            margin-top: 1rem;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 1.5rem;
        }

        .lead {
            font-size: 1.25rem;
            color: #004d40;
            margin-bottom: 2rem;
            max-width: 700px;
        }

        .card {
            background: #ffffff;
            border-radius: 18px;
            padding: 2rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
        }

        .card img {
            width: 100%;
            height: auto;
            border-radius: 12px;
            margin-bottom: 1rem;
        }

        .btn {
            display: inline-block;
            padding: 0.85rem 1.5rem;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s;
            font-size: 1rem;
        }

        .btn:hover {
            transform: translateY(-2px);
        }

        .btn-success {
            background-color: #00796b;
            color: #fff;
        }

        .btn-success:hover {
            background-color: #004d40;
        }

        .btn-outline-success {
            background-color: transparent;
            border: 2px solid #00796b;
            color: #00796b;
        }

        .btn-outline-success:hover {
            background-color: #b2dfdb;
        }

        .btn-primary {
            background-color: #004d40;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #00796b;
        }

        ul {
            padding-left: 1.25rem;
            list-style: none;
        }

        ul li::before {
            content: '✔️';
            margin-right: 0.5rem;
            color: #00796b;
        }

        li {
            margin-bottom: 0.75rem;
            font-size: 1.05rem;
        }

        .section-group {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        hr {
            border: none;
            height: 2px;
            background-color: #b2dfdb;
            margin: 4rem 0;
        }

        footer {
            text-align: center;
            padding: 2rem 0;
            font-size: 0.95rem;
            color: #607d8b;
        }

        @media (max-width: 768px) {
            .container {
                padding: 2rem;
            }

            .lead {
                font-size: 1.1rem;
            }

            .section-group {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Bienvenue à notre Ferme Moderne 🐄🐑🐓</h1>
        <p class="lead">Découvrez une agriculture durable, des animaux heureux et des produits de qualité supérieure, cultivés avec passion et respect de la nature.</p>
        <a class="btn btn-success" href="{{ route('animaux.index') }}">Voir nos animaux</a>
        <a class="btn btn-outline-success" href="{{ route('contact') }}">Nous contacter</a>

        <hr>

        <section class="section-group">
            <div class="card">

                <h3>Élevage de Vaches</h3>
                <p>Nos vaches sont nourries à l’herbe et élevées en plein air pour garantir une viande de qualité supérieure.</p>
            </div>
            <div class="card">

                <h3>Élevage de Moutons</h3>
                <p>Nous produisons une laine douce et naturelle, grâce à un élevage doux et responsable.</p>
            </div>
            <div class="card">

                <h3>Élevage de Volailles</h3>
                <p>Des œufs frais chaque jour, provenant de nos poules élevées en liberté dans un environnement sain.</p>
            </div>
        </section>

        <hr>

        <section>
            <h2>Pourquoi nous choisir ?</h2>
            <ul>
                <li>Élevage respectueux de l’environnement et du bien-être animal</li>
                <li>Produits fermiers 100% naturels et sans OGM</li>
                <li>Vente directe à la ferme et circuits courts</li>
                <li>Visites pédagogiques et ateliers pour les familles</li>
            </ul>
        </section>

        <hr>

        <section>
            <h2 style="text-align:center;">📩 Vous souhaitez en savoir plus ?</h2>
            <p style="max-width: 700px; margin: 0 auto; text-align: center; font-size: 1.1rem;">
                Parlez avec notre équipe passionnée, visitez la ferme ou participez à nos événements mensuels pour vivre une expérience authentique.
            </p>
            <div style="text-align: center; margin-top: 30px;">
                <a href="{{ route('contact') }}" class="btn btn-primary">Nous contacter</a>
            </div>
        </section>

        <hr>

        <footer>
            &copy; {{ date('Y') }} Ferme Moderne — Tous droits réservés. Conçu avec ❤️ pour la nature.
        </footer>
    </div>
</body>
</html>
