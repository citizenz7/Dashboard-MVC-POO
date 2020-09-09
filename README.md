# Dashboard-MVC-POO

Base d'un projet de blog en php orienté objet avec la structure MVC

### 1 - Créer une structure de fichier comme ci-dessous

#### App : dossier contenant toutes les class spécifique de l'application. C'est le corps de l'application qui permet de tout gérer.

1. Dossier Controller : Dossier contenant toute la logique de l'application
- Dossier Admin : contient les class qui gèrent l'affichage du front end
- class PostController : class qui gère l'affichage des articles dans le back-end
- class CategoriesController : class qui gère l'affichage des catégories dans le back-end
- class AppController : class spécifique à l'application dans le back-end
  - class AppController : class spécifique à l'application
  - class PostController : class qui gère l'affichage des articles
  - class UsersController : class spécifique à la connexion au back-end

2. Dossier Entity : contient tous les enregistrements

3. Dossier Table : permet de faire des requètes par rapport à différents types de contenus - Post : contient les méthodes spécifiques à l'affichage des articles
  - Category : contient les méthodes spécifiques à l'affichage des catégories
  - user : contient les méthodes globales relatives au utilisateurs

4. Views : dossier contenant l'affichage de chaques pages
  - Dossier posts : contient le contenu dynamique des pages de l'application
  - Dossier templates : contient les templates de pages
  - Dossier users : page de connexion au back-end
  - Dossier admin : contient toutes les pages du back-end
    - Dossier posts : concerne les articles
    - index.php : page qui liste tous les articles
    - edit.php : page de modification et d'ajout des articles
  - Dossier categories : concerne les catégories
    - index.php : page qui liste tous les catégories
    - edit.php : page de modification et d'ajout des catégories

5. class App : contient les méthodes globales à l'ensemble de l'application

6. class Autoloader : autoloading des class spécifiques au dossier app

#### Config : dossier contenant les éléments de configuration de la base de données

#### Core : dossier contenant toutes les class génériques
  - Dossier Database : contient les méthodes permettant de se connecter à la base de données et de définir les types de requètes
  - Dossier Auth : contient les méthodes qui permettent aux utilisateurs de se connecter au back-end
  - Dossier Controller : Class parente à tous les controller de l'application
  - Dossier Entity : contient la class parente à toutes les entités
  - Dossier Table : contient les fonctions pour effectuer les requètes sur la base de données
  - Dossier HTML : contient les class liées aux formulaires
  - class Autoloader : autoloading des class spécifiques au dossier core
  - class Config : contient les fonctions en rapport avec la configuration de la base de données

#### public : dossier contenant tous les fichiers publics
  - Dossier css
  - Dossier js
  - index.php : racine du site (routeur)

### 2 - code de connexion au back end :

- pseudo : demo
- mot de passe : demo
