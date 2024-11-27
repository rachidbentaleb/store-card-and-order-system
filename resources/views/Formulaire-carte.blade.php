<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire - Carte</title>
    <style>
    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(135deg, #7643B6, #59DBBF);
        color: #fff;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
    }
    .form-container {
        background: rgba(255, 255, 255, 0.1);
        padding: 25px 30px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        width: 90%;
        max-width: 500px;
        margin: auto;
        text-align: left;
    }

    .form-container h1 {
        font-size: 2rem;
        font-weight: bold;
        text-align: center;
        margin-bottom: 20px;
        color: #fff;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        font-size: 1rem;
        margin-bottom: 5px;
        color: #fff;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: none;
        outline: none;
        font-size: 1rem;
        background-color: #f7f7f7;
        box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .form-group input::placeholder {
        color: #aaa;
        font-style: italic;
    }

    .btn-primary {
        display: block;
        width: 100%;
        padding: 12px;
        background-color: #7643B6;
        color: #fff;
        font-size: 1.2rem;
        border: none;
        border-radius: 5px;
        text-align: center;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .btn-primary:hover {
        background-color: #5b3294;
    }

    </style>
</head>
<body>
    <div class="form-container">
        <h1>Formulaire de Carte</h1>
        <form action="traitementcarte" method="post">
            @csrf
            <!-- Date de création -->
            <div class="form-group">
                <label for="dateCreation">Date de création :</label>
                <input type="date" name="dateCreation" id="dateCreation">
            </div>

            <!-- Points -->
            <div class="form-group">
                <label for="points">Les points :</label>
                <input type="text" name="points" id="points" placeholder="Entrez les points">
            </div>

            <!-- Sélection du client -->
            <div class="form-group">
                <label for="client_id">Le client qui a commandé :</label>
                <select name="client_id" id="client_id">
                    <option value="" disabled selected>-- Sélectionnez un client --</option>
                    @foreach ($carte as $c)
                        <option value="{{$c->id}}">{{$c->id}} - {{$c->nom}} {{$c->prenom}}</option>
                    @endforeach
                </select>
            </div>

            <!-- Bouton de soumission -->
            <button type="submit" class="btn-primary">Ajouter une carte</button>
        </form>
    </div>
</body>
</html>
