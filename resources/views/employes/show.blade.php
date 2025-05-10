<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Détails de l'Employé</title>
    <style>
        /* Conteneur principal */
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Titre principal */
        h1 {
            font-size: 24px;
            font-weight: 600;
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }

        /* Tableau des informations de l'employé */
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        .table th, .table td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        .table th {
            background-color: #f8f9fa;
            font-weight: 600;
        }

        /* Bouton Retour */
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
            color: white;
            font-size: 16px;
            font-weight: 600;
            padding: 12px 20px;
            border-radius: 5px;
            width: auto;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #4e555b;
        }

        /* Espacements et alignements */
        .mt-4 {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Détails de l'Employé : {{ $employe->nom }} {{ $employe->prenom }}</h1>

        <!-- Tableau des informations de l'employé -->
        <div class="table-responsive">
            <table class="table table-bordered mt-4">
                <tr>
                    <th>Nom</th>
                    <td>{{ $employe->nom }}</td>
                </tr>
                <tr>
                    <th>Prénom</th>
                    <td>{{ $employe->prenom }}</td>
                </tr>
                <tr>
                    <th>Rôle</th>
                    <td>{{ $employe->role }}</td>
                </tr>
                <tr>
                    <th>Date d'Embauche</th>
                    <td>{{ $employe->date_embauche->format('d/m/Y') }}</td>
                </tr>
            </table>
        </div>

        <!-- Bouton retour à la liste -->
        <div class="text-center">
            <a href="{{ route('employes.index') }}" class="btn btn-secondary">Retour à la liste</a>
        </div>
    </div>
</body>
</html>
