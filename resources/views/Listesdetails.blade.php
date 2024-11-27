<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de la commande</title>
    <style>
        body {
            background-color: #f4f4f4;
        }
    .container {
        width: 80%;
        margin: 0 auto;
        padding: 20px;
        background-color: #f4f4f4;
        border-radius: 8px;
    }

    .title {
        font-size: 2rem;
        text-align: center;
        color: #7643B6;
        margin-bottom: 20px;
    }

    .details-table {
        width: 100%;
        border-collapse: collapse;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
    }

    .details-table th, .details-table td {
        padding: 15px;
        text-align: left;
        border: 1px solid #ddd;
    }

    .details-table th {
        background-color: #7643B6;
        color: #fff;
        font-weight: bold;
        text-transform: uppercase;
    }

    .details-table tr:hover {
        background-color: #f1f1f1;
    }

    .details-table tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .details-table td:last-child {
        font-weight: bold;
        color: #59DBBF;
    }

    @media (max-width: 768px) {
        .container {
            width: 95%;
        }
        .details-table th, .details-table td {
            padding: 10px;
        }
    }

    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">Détails de la commande</h1>
        
        <table class="details-table">
            <thead>
                <tr>
                    <th>Produit ID</th>
                    <th>Nom du Produit</th>
                    <th>Prix</th>
                    <th>Quantité</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($produits as $produit)
                    <tr>
                        <td>{{ $produit->id }}</td>
                        <td>{{ $produit->designation }}</td>
                        <td>{{ $produit->prix }} DH</td>
                        <td>{{ $produit->pivot->quantite }}</td>
                        <td>{{ $produit->prix * $produit->pivot->quantite }} DH</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
