Projet de gestion de cartes, clients et commandes

Ce projet est une application web de gestion des cartes de fidélité, des clients et des commandes. Il permet d'ajouter et de gérer des clients, d'attribuer des cartes de fidélité, de suivre les commandes, ainsi que de gérer les produits disponibles dans le système. L'application permet également d'afficher des détails complets sur les commandes effectuées par chaque client, ainsi que les produits associés à chaque commande.

Fonctionnalités :
Gestion des clients : Ajouter, modifier et afficher les informations des clients (nom, prénom, sexe, ville, etc.).
Cartes de fidélité : Attribuer des cartes aux clients, gérer le solde des points et afficher les détails des cartes.
Gestion des produits : Ajouter, modifier et lister les produits disponibles avec leur désignation, prix et catégorie.
Commandes : Créer des commandes pour les clients, visualiser les détails des commandes, y compris les produits commandés, leur quantité et leur prix total.
Ce projet utilise Laravel pour la gestion des routes et des modèles, et utilise une base de données pour stocker toutes les informations liées aux clients, cartes, produits et commandes.

Technologies utilisées :
Laravel (PHP)
Installation :
Clonez le projet :
git clone https://github.com/votre-utilisateur/nom-du-projet.git
Installez les dépendances avec Composer :
composer install
Configurez votre fichier .env avec les informations de connexion à la base de données.
Exécutez les migrations pour créer les tables nécessaires :
php artisan migrate
Lancez le serveur de développement :
php artisan serve
