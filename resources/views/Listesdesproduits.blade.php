<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listes des produits</title>
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

    .produits-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .produits-table th, .produits-table td {
        padding: 12px;
        text-align: left;
        border: 1px solid #ddd;
    }

    .produits-table th {
        background-color: #7643B6;
        color: #fff;
        font-weight: bold;
    }

    .produits-table tr:hover {
        background-color: #f1f1f1;
    }

    .produits-table tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .produits-table a {
        color: #59DBBF;
        text-decoration: none;
    }

    .produits-table a:hover {
        text-decoration: underline;
    }

    @media (max-width: 768px) {
        .container {
            width: 95%;
        }
        .produits-table th, .produits-table td {
            padding: 8px;
        }
    }

    </style>
</head>
<body>
    <div class="container">
        <h1>Listes des produits</h1>
        <table class="produits-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Désignation</th>
                    <th>Prix</th>
                    <th>Catégorie</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produits as $p)
                    <tr>
                        <td>{{$p->id}}</td>
                        <td>{{$p->designation}}</td>
                        <td>{{$p->prix}}</td>
                        <td>{{$p->categorie}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
