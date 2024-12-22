# RestauTP
## Démarrer le projet

### Prérequis
- Symfony CLI

### Commande à lancer
```bash
symfony serve
```

### Charger les fixtures
```bash
php bin/console hautelook:fixtures:load
```

## Fonctionnalités

- **CRUD** : User, Tables, Restaurants, Menus, Reservations
- **Contact** : Envoi d'un email de contact
- **Authentification complète** : login, logout, register, reset password

## Relations

- **Tables et Reservations** 
- **Menu et Restaurants** 
- **Tables et Restaurants** 

## Utilisation

> **Note** : Il faut être connecté pour avoir accès aux pages hormis accueil, login et register. Toutes les routes sont protégées.

### Connexion avec le rôle admin (Accès au dashboard admin - CRUD)
- **Email** : admin@gmail.com
- **Mot de passe** : test
- **Username affiché** : Baptiste Vasseur

### Connexion avec le rôle user (Lecture seule)
- **Email** : user@gmail.com
- **Mot de passe** : test
- **Username affiché** : User User

### Connexion avec un compte banni (Page banni)
- **Email** : banned@gmail.com
- **Mot de passe** : test
- **Username affiché** : Banned Banned
