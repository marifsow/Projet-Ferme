<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Animaux</title>
    <style>
        body {
            background-color: #f9f9f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            margin-top: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        thead {
            background-color: #343a40;
            color: white;
        }

        tbody tr:hover {
            background-color: #f1f1f1;
        }

        /* Style du bouton retour */
        .btn-back {
            display: inline-block;
            padding: 12px 25px;
            background-color: #00796b;
            color: white;
            font-weight: bold;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 30px;
            text-align: center;
            transition: background-color 0.3s, transform 0.2s;
        }

        .btn-back:hover {
            background-color: #004d40;
            transform: translateY(-2px);
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Nos Animaux</h1>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Espèce</th>
                <th>Date de Naissance</th>
                <th>État de Santé</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($animaux as $animal)
                <tr>
                    <td>{{ $animal->nom }}</td>
                    <td>{{ $animal->espece }}</td>
                    <td>{{ \Carbon\Carbon::parse($animal->date_naissance)->format('d/m/Y') }}</td>
                    <td>{{ $animal->etat_sante }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Aucun animal trouvé.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Bouton de retour à l'accueil -->
    <div class="text-center">
        <a href="{{ url('/') }}" class="btn-back">Retour à l'Accueil</a>
    </div>
</body>
</html>
