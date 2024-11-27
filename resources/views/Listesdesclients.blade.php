<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listes des clients</title>
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

    .client-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .client-table th, .client-table td {
        padding: 12px;
        text-align: left;
        border: 1px solid #ddd;
    }

    .client-table th {
        background-color: #7643B6;
        color: #fff;
        font-weight: bold;
    }

    .client-table tr:hover {
        background-color: #f1f1f1;
    }

    .client-table tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .btn-view, .btn-add {
        padding: 6px 12px;
        color: white;
        text-decoration: none;
        border-radius: 5px;
    }

    .btn-view {
        background-color: #59DBBF;
    }

    .btn-add {
        background-color: #FF6347;
    }

    .btn-view:hover, .btn-add:hover {
        opacity: 0.8;
    }

    @media (max-width: 768px) {
        .container {
            width: 95%;
        }
        .client-table th, .client-table td {
            padding: 8px;
        }
    }

    </style>
</head>
<body>
    <div class="container">
        <h1>Listes des clients</h1>
        <table class="client-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Sexe</th>
                    <th>Ville</th>
                    <th>Carte</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $c)
                <tr>
                    <td>{{$c->id}}</td>
                    <td>{{$c->nom}}</td>
                    <td>{{$c->prenom}}</td>
                    <td>{{$c->sexe}}</td>
                    <td>{{$c->ville}}</td>
                    <td>
                        @isset($c->carte)
                            <a href="Carteclient?id={{$c->id}}" class="btn-view">OUI</a>
                        @else
                            <a href="Formulaire-carte" class="btn-add">AJOUTER</a>
                        @endisset
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
