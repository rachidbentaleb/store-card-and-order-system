<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de la carte du client</title>
    <style>
    body {
        background-color: #f4f4f4;
    }
    .card-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
        padding: 20px;
        background-color: #f4f4f4;
    }

    .card {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 400px;
        padding: 20px;
        text-align: left;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 12px rgba(0, 0, 0, 0.15);
    }

    .card-title {
        font-size: 1.5rem;
        margin-bottom: 10px;
        color: #7643B6; /* Couleur personnalisée */
        text-transform: uppercase;
        font-weight: bold;
    }

    .card-body p {
        font-size: 1rem;
        color: #333;
        margin: 5px 0;
    }

    .card-body p strong {
        color: #7643B6;
    }

    @media (max-width: 768px) {
        .card-container {
            flex-direction: column;
            gap: 15px;
        }
    }

    </style>
</head>
<body>
    <div class="card-container">
        <div class="card">
            <h2 class="card-title">Détails du Client</h2>
            <div class="card-body">
                <h3>Client: {{ $client->nom }} {{ $client->prenom }}</h3>
                <p><strong>Sexe:</strong> {{ $client->sexe }}</p>
                <p><strong>Ville:</strong> {{ $client->ville }}</p>
            </div>
        </div>
        <div class="card">
            <h2 class="card-title">Détails de la Carte</h2>
            <div class="card-body">
                <p><strong>Id de carte:</strong> {{ $client->carte->id }}</p>
                <p><strong>Date de création:</strong> {{ $client->carte->dateCreation }}</p>
                <p><strong>Solde:</strong> {{ $client->carte->points }} points</p>
            </div>
        </div>
    </div>
</body>
</html>
