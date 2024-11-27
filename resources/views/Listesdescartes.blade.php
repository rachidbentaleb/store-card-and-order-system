<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listes des cartes</title>
    <style>
    body {
        background-color:  #f4f4f4;;
    }
    .container {
        width: 80%;
        margin: 0 auto;
        padding: 20px;
        background-color: #f4f4f4;
    }

    .card-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .card-table th, .card-table td {
        padding: 12px;
        text-align: left;
        border: 1px solid #ddd;
    }

    .card-table th {
        background-color: #7643B6;
        color: #fff;
        font-weight: bold;
    }

    .card-table tr:hover {
        background-color: #f1f1f1;
    }

    .card-table tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .card-table td {
        color: #333;
    }

    @media (max-width: 768px) {
        .container {
            width: 95%;
        }
        .card-table th, .card-table td {
            padding: 8px;
        }
    }

    </style>
</head>
<body>
    <div class="container">
        <h1>Listes des cartes</h1>
        <table class="card-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Date de création</th>
                    <th>Points</th>
                    <th>Le client</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($carte as $c)
                <tr>
                    <td>{{$c->id}}</td>
                    <td>{{$c->dateCreation}}</td>
                    <td>{{$c->points}}</td>
                    <td>{{$c->client->nom}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
