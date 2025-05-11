<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferme de Samba</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #3e4e50;
            line-height: 1.7;
            overflow-x: hidden;
        }

        header {
            background-color: #4CAF50;
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        nav {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 1.5rem;
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            color: #fff;
            font-weight: bold;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .logo img {
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }

        .nav-links a {
            color: #ffffff;
            text-decoration: none;
            margin-left: 2rem;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: #b2dfdb;
        }

        .search-bar {
            text-align: right;
        }

        .search-bar input[type="text"] {
            padding: 0.5rem;
            border-radius: 5px;
            border: 1px solid #00796b;
            width: 250px;
        }

        h1, h2, h3 {
            font-family: 'Playfair Display', serif;
            color: #004d40;
            margin-bottom: 0.5em;
        }

        h1 {
            font-size: clamp(2.5rem, 5vw, 4rem);
            animation: fadeIn 1.5s ease-out;
        }

        h2 {
            font-size: clamp(1.75rem, 4vw, 2.5rem);
            color: #092323;
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
            background: #fff;
            border-radius: 18px;
            padding: 2rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        }

        .card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 12px;
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

        .btn-success {
            background-color: #f1b694;
            color: #fff;

        }

        .btn-success:hover {
            background-color: #004d40;
        }

        .section-group {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        footer {
            text-align: center;
            padding: 2rem 0;
            font-size: 0.95rem;
            color: #141515;
            background-color: #f0f0f0;
        }

        .investir-section {
    background-image: url('8.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    color: #0a0a0a; /* Couleur plus foncée pour le texte */
    padding: 6rem 2rem;
    text-align: center;
    position: relative;
}

.investir-section::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background-color: rgba(255, 255, 255, 0.7); /* voile blanc pour améliorer contraste */
    z-index: 0;
}

.investir-section h2,
.investir-section p,
.investir-section a {
    position: relative;
    z-index: 1;
}


        .sponsor-section {
            background-color: #e0f7fa;
            padding: 4rem 1.5rem;
        }

        .event-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
        }

        .sponsor-card, .event-card {
            background-color: #fff;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .event-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
        }

        .event-card h3, .sponsor-card h3 {
            margin-top: 1rem;
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

            .nav-links {
                flex-direction: column;
                align-items: flex-start;
            }

            .nav-links a {
                margin-left: 0;
                margin-top: 0.5rem;
            }

            .search-bar {
                text-align: left;
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(-30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

<header>
    <nav>
        <a href="/" class="logo">
            <img src="i.jpg" alt="Logo"> Ferme de Samba
        </a>
        <div class="nav-links">
            <a href="/">Accueil</a>
             <a href="{{ route('animaux.public') }}">Nos Animaux</a>
             <a href="{{ route('contact') }}">Contact</a>
             <a href="{{ route('register') }}" class="" style="margin-left: 1rem;">Inscription</a>
            <a href="{{ route('login') }}">Connexion</a>


            {{-- Ajout du bouton de déconnexion --}}
            @auth
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-success">Déconnexion</button>
                </form>
            @endauth
        </div>
    </nav>
</header>


<div class="container">
    <h1>Bienvenue à notre Ferme Moderne </h1>
    <p class="lead">Découvrez une agriculture durable, des animaux heureux et des produits de qualité supérieure, cultivés avec passion et respect de la nature.</p>

    <hr>

    <section class="section-group">
        <div class="card">
            <img src="vacche.jpg" alt="Vaches">
            <h3>Élevage de Vaches</h3>
            <p>Nos vaches sont nourries à l’herbe et élevées en plein air pour garantir une viande de qualité supérieure.</p>
        </div>
        <div class="card">
            <img src="images.jpg" alt="Moutons">
            <h3>Élevage de Moutons</h3>
            <p>Nous produisons une laine douce et naturelle, grâce à un élevage doux et responsable.</p>
        </div>
        <div class="card">
            <img src="volay.jpg" alt="Volailles">
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

    <!-- Section Investir -->
    <section class="investir-section">
        <h2>Venez investir dans notre ferme !</h2>
        <p>Nous offrons une opportunité unique d'investir dans un modèle d'agriculture durable et responsable. Ensemble, nous construirons un avenir meilleur pour nos animaux et la planète.</p>
        <a href="{{ route('contact') }}" class="btn btn-success">Investir</a>
    </section>

    <hr>

    <!-- Section Sponsors -->
    <section class="sponsor-section">
        <h2 style="text-align:center;">Nos Partenaires & Sponsors</h2>
        <div class="section-group">
            <div class="sponsor-card">
                <h3>Partenaire 1 = Sow-Elevage</h3>
                <p>Merci à notre sponsor pour leur soutien à l’agriculture durable.</p>
            </div>
            <div class="sponsor-card">
                <h3>Partenaire 2 = sn-Ferme</h3>
                <p>Nous sommes fiers de collaborer avec ce sponsor engagé dans la nature.</p>
            </div>
        </div>
    </section>

    <hr>

    <!-- Section Événements -->
    <section>
        <h2 style="text-align:center;">Nos Événements à Venir</h2>
        <div class="event-cards">
            <div class="event-card">
                <img src="even.jpg" alt="Événement 1">
                <h3>Visite de la Ferme</h3>
                <p>Venez découvrir notre ferme et en apprendre davantage sur notre approche de l’agriculture durable.</p>
            </div>
            <div class="event-card">
                <img src="som.jpg" alt="Événement 2">
                <h3>Atelier de Pêche</h3>
                <p>Apprenez à pêcher de manière éthique et responsable lors de notre atelier éducatif.</p>
            </div>
        </div>
    </section>

    <hr>

    <section>
        <h2 style="text-align:center;">📩 Vous souhaitez en savoir plus ?</h2>
        <p style="max-width: 700px; margin: 0 auto; text-align: center; font-size: 1.1rem;">
            Parlez avec notre équipe passionnée, visitez la ferme ou participez à nos événements mensuels pour vivre une expérience authentique.
        </p>
        <div style="text-align: center; margin-top: 30px;">
            <a href="{{ route('contact') }}" class="btn btn-success">Nous contacter</a>
        </div>
    </section>

    <hr>

    <footer>
        &copy; {{ date('Y') }} Ferme de Samba — Tous droits réservés. Conçu avec ❤️ pour la nature.
    </footer>
</div>

</body>
</html>
