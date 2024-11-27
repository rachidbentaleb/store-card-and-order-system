<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire - Produit</title>
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
        color: #fff;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        font-size: 1rem;
        display: block;
        margin-bottom: 8px;
        color: #fff;
    }

    .form-group input,
    .form-group select {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: none;
        background-color: #f7f7f7;
        font-size: 1rem;
        color: #333;
        box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .btn-primary {
        display: block;
        width: 100%;
        padding: 10px 20px;
        background-color: #59DBBF;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 1rem;
        text-align: center;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .btn-primary:hover {
        background-color: #46b799;
    }

    </style>
</head>
<body>
    <div class="form-container">
        <h1>Formulaire de Produit</h1>
        <form action="traitementproduit" method="post">
            @csrf
            <div class="form-group">
                <label for="designation">Désignation de produit :</label>
                <input type="text" name="designation" id="designation" placeholder="Entrez le nom du produit" required>
            </div>
            <div class="form-group">
                <label for="prix">Prix du produit :</label>
                <input type="text" name="prix" id="prix" placeholder="Entrez le prix" required>
            </div>
            <div class="form-group">
                <label for="categorie">Catégorie de produit :</label>
                <select name="categorie" id="categorie" required>
                    <option value="" disabled selected>-- Sélectionnez une catégorie --</option>
                    <option value="Boissons">Boissons</option>
                    <option value="Jouets">Jouets</option>
                    <option value="Produit de beauté">Produit de beauté</option>
                    <option value="Vêtements">Vêtements</option>
                    <option value="Laitier">Laitier</option>
                </select>
            </div>
            <button type="submit" class="btn-primary">Ajouter le produit</button>
        </form>
    </div>
</body>
</html>
