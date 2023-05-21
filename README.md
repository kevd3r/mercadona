## mercadona
Mercadona
Mercadona est une application web développée avec Symfony, EasyAdmin, Twig et Bootstrap. C'est une plateforme permettant aux utilisateurs de consulter un catalogue de vente au détail(retail) et de les afficher par catégories. Elle permet aussi à tout administrateur connecté de pouvoir ajouter, modifier ou supprimer un produit, et de lui appliquer une promotion le cas échéant.
## Fonctionnalités
Inscription et connexion d'administrateurs
Recherche de produits
Authentification des administrateurs
Gestion des produits
## Installation
1 - Clonez ce dépôt sur votre machine locale.
git clone https://github.com/votre-utilisateur/mercadona.git
2 - Assurez-vous d'avoir installé Symfony
3 - Accédez au répertoire du projet: cd mercadona
4 - Installez les dépendances nécessaires via Composer: composer install
5 - Créez la base de données et configurez le fichier .env avec vos informations de connexion: php bin/console doctrine:database:create
6 - Effectuez les migrations pour créer les tables de la base de données : php bin/console doctrine:migrations:migrate
7 - Lancez le serveur de développement: php bin/console server:start
8 - Accédez à l'application dans votre navigateur à l'adresse http://localhost:8000.
## Configuration
La configuration de l'application se trouve dans le fichier .env. Vous pouvez y ajuster les paramètres tels que les informations de connexion à la base de données, l'URL du serveur de paiement en ligne, etc.

## Utilisation
Accédez à l'application dans votre navigateur à l'adresse http://localhost:8000.
Connectez-vous en utilisant votre compte ou créez-en un nouveau.
Parcourez les produits disponibles et ajoutez-les à votre panier.
Gérez votre panier et passez une commande lorsque vous êtes prêt.
Effectuez le paiement en ligne de manière sécurisée.
Consultez vos commandes passées dans la section dédiée.
Administration
L'interface d'administration est accessible aux utilisateurs disposant de rôles d'administrateur. Vous pouvez y accéder en ajoutant /admin à l'URL de l'application (http://localhost:8000/admin). Connectez-vous avec un compte d'administrateur pour accéder aux fonctionnalités d'administration, telles que la gestion des produits, des utilisateurs et des commandes.

## Contribution
Les contributions à l'application sont les bienvenues! Si vous souhaitez contribuer, veuillez suivre les étapes suivantes :

Fork ce dépôt.
Créez une nouvelle branche pour vos modifications.
Effectuez les modifications nécessaires et testez-les.
Soumettez une pull request détaillant vos modifications.

## Auteurs
kevd3r

## Licence
Ce projet n'est soumis à aucune licence et est un projet d'étude.