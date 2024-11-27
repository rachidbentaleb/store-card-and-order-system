<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listes des commandes</title>
    <style>
        body {
            background-color: #f4f4f4;
        }
    .container {
        width: 80%;
        margin: 0 auto;
        padding: 20px;
        background-color: #f4f4f4;
    }

    .commandes-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .commandes-table th, .commandes-table td {
        padding: 12px;
        text-align: left;
        border: 1px solid #ddd;
    }

    .commandes-table th {
        background-color: #7643B6;
        color: #fff;
        font-weight: bold;
    }

    .commandes-table tr:hover {
        background-color: #f1f1f1;
    }

    .commandes-table tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .btn-details {
        padding: 6px 12px;
        background-color: #59DBBF;
        color: white;
        text-decoration: none;
        border-radius: 5px;
    }

    .btn-details:hover {
        opacity: 0.8;
    }

    @media (max-width: 768px) {
        .container {
            width: 95%;
        }
        .commandes-table th, .commandes-table td {
            padding: 8px;
        }
    }

    </style>
</head>
<body>
    <div class="container">
        <h1>Listes des commandes</h1>
        <table class="commandes-table">
            <thead>
                <tr>
                    <th>ID Commande</th>
                    <th>Date de création</th>
                    <th>Client</th>
                    <th>Détails</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($commandes as $commande)
                    <tr>
                        <td>{{$commande->id}}</td>
                        <td>{{$commande->dateCommande}}</td>
                        <td>{{$commande->client->nom}}</td>
                        <td><a href="details?id={{$commande->id}}" class="btn-details">Détails</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
