<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-100">
    <div class="min-h-screen flex">
        {{-- Sidebar --}}
        <aside class="w-64 bg-green-700 dark:bg-green-800 text-white hidden sm:block">
            <div class="p-6 text-xl font-bold border-b border-green-600">🌿 Ma Ferme</div>
            <nav class="p-4 space-y-3">
                <a href="{{ route('home') }}" class="block hover:bg-green-600 p-2 rounded">🏠 Accueil</a> <!-- Lien vers l'accueil -->
                <a href="{{ route('dashboard') }}" class="block hover:bg-green-600 p-2 rounded">Dashboard</a>
                <a href="{{ route('animaux.index') }}" class="block hover:bg-green-600 p-2 rounded">🐾 Animaux</a>
                <a href="{{ route('employes.index') }}" class="block hover:bg-green-600 p-2 rounded">👨‍🌾 Employés</a>
                <a href="{{ route('suivis.index') }}" class="block hover:bg-green-600 p-2 rounded">🩺 Suivis Sanitaires</a>
                <a href="{{ route('profile.edit') }}" class="block hover:bg-green-600 p-2 rounded">👤 Profil</a>
            </nav>
        </aside>

        {{-- Main Content --}}
        <main class="flex-1 p-6 space-y-8">
            {{-- Header --}}
            <header class="flex items-center justify-between">
                <h1 class="text-3xl font-bold">📊 Tableau de bord</h1>
                <span class="text-sm text-gray-500 dark:text-gray-300">Bienvenue, {{ Auth::user()->name }}</span>
                <a href="{{ route('home') }}" class="text-green-600 hover:underline">🏠 Retour à l'Accueil</a> <!-- Lien vers l'accueil -->
            </header>

            {{-- Dashboard Cards --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                {{-- Card 1 --}}
                <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow hover:shadow-md transition">
                    <h3 class="text-xl font-semibold mb-2">🐄 Nombre d’animaux</h3>
                    <p class="text-3xl font-bold text-green-600">42</p>
                </div>
                {{-- Card 2 --}}
                <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow hover:shadow-md transition">
                    <h3 class="text-xl font-semibold mb-2">👷 Employés actifs</h3>
                    <p class="text-3xl font-bold text-blue-500">10</p>
                </div>
                {{-- Card 3 --}}
                <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow hover:shadow-md transition">
                    <h3 class="text-xl font-semibold mb-2">📅 Suivis récents</h3>
                    <p class="text-3xl font-bold text-yellow-500">8</p>
                </div>
            </div>

            {{-- Tableau des Animaux --}}
            <section class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-2xl font-semibold">🐾 Gestion des Animaux</h2>
                    <a href="{{ route('animaux.create') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">➕ Ajouter</a>
                </div>
                <x-table :items="[1,2,3]" routeName="animaux" />
            </section>

            {{-- Tableau des Employés --}}
            <section class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-2xl font-semibold">👨‍🌾 Gestion des Employés</h2>
                    <a href="{{ route('employes.create') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">➕ Ajouter</a>
                </div>
                <x-table :items="[1,2,3]" routeName="employes" />
            </section>

            {{-- Tableau des Suivis --}}
            <section class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-2xl font-semibold">🩺 Suivis Sanitaires</h2>
                    <a href="{{ route('suivis.create') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">➕ Ajouter</a>
                </div>
                <x-table :items="[1,2,3]" routeName="suivis" />
            </section>

            {{-- Profil --}}
            <section class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow text-right">
                <a href="{{ route('profile.edit') }}" class="text-blue-500 hover:underline">✏️ Modifier mon profil</a>
            </section>

            @yield('content')
        </main>
    </div>
</body>
</html>
