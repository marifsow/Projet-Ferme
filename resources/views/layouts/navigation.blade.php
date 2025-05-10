<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
}

.navbar {
    background-color: #2e7d32; /* Vert foncé */
    color: white;
    padding: 15px 30px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
}

.navbar-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
}

.navbar-brand a {
    font-size: 24px;
    font-weight: bold;
    text-decoration: none;
    color: white;
}

.navbar-menu {
    display: flex;
    gap: 25px;
    list-style: none;
    padding: 0;
    margin: 0;
}

.navbar-menu li {
    display: flex;
    align-items: center;
}

.navbar-menu a,
.navbar-menu button {
    color: white;
    text-decoration: none;
    background: none;
    border: none;
    cursor: pointer;
    font-size: 16px;
}

.navbar-menu a:hover,
.navbar-menu button:hover {
    text-decoration: underline;
    color: #d4edda;
}

.admin-link {
    color: gold;
}

    </style>
</head>
<body>
<nav class="navbar">
    <div class="navbar-container">
        <div class="navbar-brand">
            <a href="{{ url('/') }}">Ferme Moderne de Samba</a>
        </div>

        <ul class="navbar-menu">
            <li><a href="{{ route('animaux.index') }}">Animaux</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>

            @auth
                <li>Bonjour, {{ Auth::user()->name }}</li>

                @if (Auth::user()->role === 1)
                    <li><a href="{{ route('admin.dashboard') }}" class="admin-link">Admin</a></li>
                @endif

                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">Se déconnecter</button>
                    </form>
                </li>
            @endauth

            @guest
                <li><a href="{{ route('login') }}">Connexion</a></li>
                <li><a href="{{ route('register') }}">Inscription</a></li>
            @endguest
        </ul>
    </div>
</nav>


</body>
</html>
