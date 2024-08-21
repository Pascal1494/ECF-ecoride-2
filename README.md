# EcoRide - Plateforme de Covoiturage Écologique

## À propos du projet

EcoRide est une plateforme de covoiturage écologique développée avec Symfony 7. Notre mission est de réduire l'impact environnemental des déplacements en encourageant le covoiturage, tout en offrant une solution économique pour les voyageurs.

## Fonctionnalités principales

- Recherche de covoiturage avec filtres (écologique, prix, durée, note du conducteur)
- Système de réservation et de paiement par crédits
- Espace utilisateur pour les conducteurs et les passagers
- Système de notation et d'avis
- Tableau de bord administrateur avec statistiques

## Prérequis

- PHP 8.1 ou supérieur
- Composer
- Symfony CLI
- MySQL ou PostgreSQL
- Node.js et npm (pour la gestion des assets)

## Installation

1. Clonez le dépôt :
git clone https://github.com/votre-username/ecoride.git
2. Installez les dépendances PHP :
composer install
3. Configurez votre base de données dans le fichier `.env`
4. Créez la base de données et effectuez les migrations :
php bin/console doctrine:database:create php bin/console doctrine:migrations:migrate
5. Installez les dépendances JavaScript :
npm install
7. Lancez le serveur de développement Symfony :
symfony server:start

## Tests

Pour exécuter les tests unitaires :
php bin/phpunit

## Contribution

Les contributions sont les bienvenues ! Veuillez lire notre guide de contribution avant de soumettre une pull request.

## Licence

Ce projet est sous licence MIT. Voir le fichier `LICENSE` pour plus de détails.

## Contact

Pour toute question ou suggestion, veuillez contacter l'équipe EcoRide à contact@lmcd14.fr.

---

Développé avec ❤️ par Spiderman










