<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier l'Employé</title>
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

        /* Champs de formulaire */
        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-size: 16px;
            font-weight: 500;
            color: #333;
            margin-bottom: 8px;
            display: block;
        }

        input.form-control {
            padding: 10px;
            font-size: 14px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 100%;
            box-sizing: border-box;
        }

        input.form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        /* Bouton de soumission */
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            color: white;
            font-size: 16px;
            font-weight: 600;
            padding: 12px 20px;
            border-radius: 5px;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        /* Messages d'erreur */
        .is-invalid {
            border-color: #dc3545;
            box-shadow: 0 0 5px rgba(220, 53, 69, 0.5);
        }

        .invalid-feedback {
            color: #dc3545;
            font-size: 14px;
            margin-top: 5px;
        }

        /* Espacements et alignements */
        .mt-3 {
            margin-top: 20px;
        }

        .mb-4 {
            margin-bottom: 30px;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Modifier l'Employé : {{ $employe->nom }} {{ $employe->prenom }}</h1>

        <!-- Tableau des informations de l'employé -->
        <table class="table">
            <thead>
                <tr>
                    <th>Champ</th>
                    <th>Valeur</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Nom</strong></td>
                    <td>{{ $employe->nom }}</td>
                </tr>
                <tr>
                    <td><strong>Prénom</strong></td>
                    <td>{{ $employe->prenom }}</td>
                </tr>
                <tr>
                    <td><strong>Rôle</strong></td>
                    <td>{{ $employe->role }}</td>
                </tr>
                <tr>
                    <td><strong>Date d'Embauche</strong></td>
                    <td>{{ $employe->date_embauche->format('d/m/Y') }}</td>
                </tr>
            </tbody>
        </table>

        <!-- Formulaire pour modifier l'employé -->
        <form method="POST" action="{{ route('employes.update', $employe->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ $employe->nom }}" required>
            </div>

            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $employe->prenom }}" required>
            </div>

            <div class="form-group">
                <label for="role">Rôle</label>
                <input type="text" class="form-control" id="role" name="role" value="{{ $employe->role }}" required>
            </div>

            <div class="form-group">
                <label for="date_embauche">Date d'Embauche</label>
                <input type="date" class="form-control" id="date_embauche" name="date_embauche" value="{{ $employe->date_embauche->format('Y-m-d') }}" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Mettre à jour l'employé</button>
        </form>
    </div>
</body>
</html>
