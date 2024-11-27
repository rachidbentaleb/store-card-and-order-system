<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Navigation</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
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

    h1 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 2rem;
        text-align: center;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: #fff;
    }

    ul {
        list-style-type: none;
        padding: 0;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        width: 90%;
        max-width: 1200px;
    }

    li {
        background-color: rgba(255, 255, 255, 0.1);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        text-align: center;
    }

    li:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    }

    li h2 {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        text-transform: uppercase;
        color: #fff;
    }

    li a {
        display: block;
        margin: 10px 0;
        padding: 10px 15px;
        background-color: #7643B6;
        color: #fff;
        font-size: 1rem;
        font-weight: 500;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    li a:hover {
        background-color: #59DBBF;
    }

    @media (max-width: 768px) {
        h1 {
            font-size: 2rem;
        }

        li {
            padding: 15px;
        }

        li h2 {
            font-size: 1.2rem;
        }

        li a {
            font-size: 0.9rem;
        }
    }

    </style>
</head>
<body>
    <h1>Bienvenue dans le Gestionnaire</h1>
    <ul>
        <!-- Section Clients -->
        <li>
            <h2>Les Clients</h2>
            <a href="Formulaire-Client">Formulaire de Client</a>
            <a href="Listesdesclients">Liste des Clients</a>
        </li>
        <!-- Section Commandes -->
        <li>
            <h2>Les Commandes</h2>
            <a href="Formulaire-Commande">Formulaire de Commande</a>
            <a href="Listesdescommandes">Liste des Commandes</a>
        </li>
        <!-- Section Produits -->
        <li>
            <h2>Les Produits</h2>
            <a href="Formulaire-Produit">Formulaire de Produit</a>
            <a href="Listesdesproduits">Liste des Produits</a>
        </li>
        <!-- Section Cartes -->
        <li>
            <h2>Les Cartes</h2>
            <a href="Formulaire-carte">Formulaire de Carte</a>
            <a href="Listesdescartes">Liste des Cartes</a>
        </li>
    </ul>
</body>
</html>
