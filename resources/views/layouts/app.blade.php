<!DOCTYPE html>
<html>
<head>
    <title>Élevage - @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Élevage</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('animaux.index') }}">Animaux</a></li>

                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('connexion') }}">connexion</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>
        <!-- Footer -->
    <footer class="bg-dark text-white mt-5 pt-4 pb-3">
        <div class="container">
            <div class="row">
                <!-- Localisation -->
                <div class="col-md-4">
                    <h5>📍 Localisation</h5>
                    <p>Ferme du Soleil<br>
                    123 Route de la Campagne<br>
                    75000 Paris, France</p>
                </div>

                <!-- Site / Liens utiles -->
                <div class="col-md-4">
                    <h5>🌐 Liens utiles</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('home') }}" class="text-white text-decoration-none">Accueil</a></li>
                        <li><a href="{{ route('animaux.index') }}" class="text-white text-decoration-none">Animaux</a></li>
                        <li><a href="{{ route('contact') }}" class="text-white text-decoration-none">Contact</a></li>
                        <li><a href="{{ route('connexion') }}" class="text-white text-decoration-none">Connexion</a></li>
                    </ul>
                </div>

                <!-- Sponsors -->
                <div class="col-md-4">
                    <h5>🤝 Partenaires & Sponsors</h5>
                    <ul class="list-unstyled">
                        <li><a href="https://www.agriculture.gouv.fr" target="_blank" class="text-white text-decoration-none">Ministère de l’Agriculture</a></li>
                        <li><a href="https://www.fermiersdefrance.fr" target="_blank" class="text-white text-decoration-none">Fermiers de France</a></li>
                        <li><a href="https://www.bioetlocal.org" target="_blank" class="text-white text-decoration-none">Bio & Local</a></li>
                    </ul>
                </div>
            </div>
            <hr class="bg-secondary">
            <div class="text-center">
                &copy; {{ date('Y') }} Ferme du Soleil — Tous droits réservés.
            </div>
        </div>
    </footer>

</body>
</html>
