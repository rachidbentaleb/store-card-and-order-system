<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire - Commande</title>
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
    .produit-container {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 15px;
    }

    .form-container {
        background: rgba(255, 255, 255, 0.1);
        padding: 25px 30px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        width: 90%;
        max-width: 600px;
        margin: auto;
        color: #fff;
        text-align: left;
    }

    .form-container h1 {
        text-align: center;
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label,
    .produit-container label {
        font-size: 1rem;
        color: #fff;
    }

    .form-group input,
    .form-group select,
    .produit-container select,
    .produit-container input {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: none;
        background-color: #f7f7f7;
        font-size: 1rem;
        color: #333;
        box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .btn-primary,
    .btn-secondary {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 1rem;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .btn-primary {
        background-color: #7643B6;
        color: #fff;
    }

    .btn-primary:hover {
        background-color: #5b3294;
    }

    .btn-secondary {
        background-color: #59DBBF;
        color: #fff;
    }

    .btn-secondary:hover {
        background-color: #46b799;
    }

    </style>
    <script>
        function ajouterProduit() {
            const container = document.createElement('div');
            container.className = 'produit-container';

            const labelProduit = document.createElement('label');
            labelProduit.innerText = "Produit commandé :";
            const selectProduit = document.createElement('select');
            selectProduit.name = "produit_id[]";
            selectProduit.innerHTML = `
                @foreach ($affichageProduit as $p)
                    <option value="{{$p->id}}">{{$p->id}} - {{$p->designation}}</option>
                @endforeach
            `;

            const labelQuantite = document.createElement('label');
            labelQuantite.innerText = " Quantité :";
            const inputQuantite = document.createElement('input');
            inputQuantite.type = "text";
            inputQuantite.name = "quantite[]";

            const supprimerBtn = document.createElement('button');
            supprimerBtn.type = "button";
            supprimerBtn.innerText = "Supprimer";
            supprimerBtn.className = 'btn-secondary';
            supprimerBtn.onclick = function () {
                container.remove();
            };

            container.appendChild(labelProduit);
            container.appendChild(selectProduit);
            container.appendChild(labelQuantite);
            container.appendChild(inputQuantite);
            container.appendChild(supprimerBtn);

            document.getElementById('produits-container').appendChild(container);
        }
    </script>
</head>
<body>
    <div class="form-container">
        <h1>Formulaire de Commande</h1>
        <form action="traitementcommande" method="post">
            @csrf
            <div class="form-group">
                <label for="dateCommande">Date de commande :</label>
                <input type="date" name="dateCommande" id="dateCommande">
            </div>
            <div class="form-group">
                <label for="typeCommande">Confirmation de date :</label>
                <input type="date" name="typeCommande" id="typeCommande">
            </div>
            <div class="form-group">
                <label for="client_id">Le client qui a commandé :</label>
                <select name="client_id" id="client_id">
                    <option value="" disabled selected>-- Sélectionnez un client --</option>
                    @foreach ($affichageClient as $c)
                        <option value="{{$c->id}}">{{$c->id}} - {{$c->nom}} {{$c->prenom}}</option>
                    @endforeach
                </select>
            </div>
            <div id="produits-container">
                <h3>Produits commandés</h3>
                <div class="produit-container">
                    <label for="produit_id">Produit commandé :</label>
                    <select name="produit_id[]">
                        <option value="" disabled selected>-- Sélectionnez un produit --</option>
                        @foreach ($affichageProduit as $p)
                            <option value="{{$p->id}}">{{$p->id}} - {{$p->designation}}</option>
                        @endforeach
                    </select>
                    <label for="quantite">Quantité :</label>
                    <input type="text" name="quantite[]" placeholder="Entrez la quantité">
                </div>
            </div>
            <button type="button" class="btn-secondary" onclick="ajouterProduit()">Ajouter un produit</button>
            <button type="submit" class="btn-primary">Ajouter une commande</button>
        </form>
    </div>
</body>
</html>
