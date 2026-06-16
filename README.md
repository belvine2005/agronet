# SYSMAC — Système de Mise en relation entre Acteurs agricoles et Consommateurs

> Plateforme web de mise en relation entre **producteurs**, **fabricants** et **acheteurs/consommateurs** du secteur agricole au Bénin.

**SYSMAC** (Système de Mise en relation entre Acteurs agricoles et Consommateurs) a pour objectif de concevoir une **plateforme d'accès aux marchés agricoles**. Le système vise à améliorer l'accès au marché, la transparence de la chaîne d'approvisionnement et l'inclusion numérique des acteurs agricoles ouest-africains, avec un ancrage local fort (marchés régionaux, tarification en FCFA, géographie béninoise).

> Le projet est implémenté sous le nom **AgroNet**.

![Laravel](https://img.shields.io/badge/Laravel-13-FF2D20?logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-8.x-4479A1?logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5-7952B3?logo=bootstrap&logoColor=white)

---

## Sommaire

- [Contexte](#contexte)
- [Spécifications fonctionnelles](#spécifications-fonctionnelles)
- [Spécifications techniques](#spécifications-techniques)
- [Architecture applicative](#architecture-applicative)
- [Modèle de données](#modèle-de-données)
- [Prérequis](#prérequis)
- [Installation](#installation)
- [Structure du projet](#structure-du-projet)
- [Organisation des branches](#organisation-des-branches)
- [Feuille de route](#feuille-de-route)
- [Auteur](#auteur)

---

## Contexte

L'accès au marché reste un frein majeur pour les producteurs agricoles au Bénin : intermédiaires multiples, manque de visibilité sur les prix, difficultés à atteindre fabricants et acheteurs. SYSMAC a pour but de concevoir une **plateforme d'accès aux marchés agricoles** : un espace unique où :

- les **producteurs** publient leurs récoltes et consultent les prix de référence ;
- les **fabricants** sourcent leurs matières premières et proposent leur catalogue (engrais, semences, intrants) ;
- les **acheteurs** trouvent des produits agricoles et passent commande.

Le projet est développé dans un cadre académique en vue d'une soutenance.

---

## Spécifications fonctionnelles

La plateforme s'organise autour de **7 modules** définis dans le cahier des charges.

### 1. Authentification et gestion des comptes
- Inscription avec sélection de rôle (Producteur, Fabricant, Acheteur).
- Création conditionnelle des enregistrements métier selon le rôle, encapsulée dans une **transaction de base de données**.
- Validation des formulaires avec **messages d'erreur en français**.
- Connexion / déconnexion, profil utilisateur éditable (régions du Bénin, coordonnées).

### 2. Annonces et listings
- Publication d'annonces de vente par les producteurs et fabricants.
- Recherche et filtrage par catégorie, région et prix.
- Cartes d'opportunités (listing) et fiches détaillées.

### 3. Prix du marché
- Affichage des prix de référence par produit et par marché régional, en **FCFA**.
- Aide à la décision pour fixer un prix de vente cohérent.

### 4. Messagerie
- Échanges directs entre acteurs (producteur ↔ fabricant ↔ acheteur).
- Suivi des conversations liées à une annonce ou une commande.

### 5. Catalogue produits
- Gestion du catalogue par les fabricants (engrais, semences, produits agricoles).
- Formulaire de création de produit avec **validation dédiée** et **upload de fichiers** (images).

### 6. Notations et avis
- Système d'évaluation des acteurs après transaction.
- Renforcement de la confiance et de la transparence.

### 7. Administration
- Tableau de bord d'administration.
- Gestion des utilisateurs, des annonces et modération du contenu.

---

## Spécifications techniques

| Couche | Technologie |
|---|---|
| Framework backend | Laravel 13 (PHP 8.x) |
| ORM | Eloquent |
| Base de données | MySQL |
| Moteur de templates | Blade |
| Frontend | HTML5, CSS3, JavaScript, Bootstrap 5 |
| Environnement de dev | Laragon - WAMP (Windows) |
| Administration BDD | phpMyAdmin |
| Gestion de version | Git / GitHub |

**Conventions appliquées :**
- Architecture **MVC** stricte (modèles, contrôleurs, vues Blade).
- **Resource Controllers** pour les ressources CRUD.
- **Form Requests** (ex. `StoreProductRequest`) pour isoler la validation.
- Transactions de base de données pour les opérations multi-tables.

---

## Architecture applicative

AgroNet suit le modèle MVC de Laravel.

```
Requête HTTP
    │
    ▼
Routes (routes/web.php)
    │
    ▼
Controllers ──► Form Requests (validation, messages FR)
    │
    ▼
Models (Eloquent) ──► Base de données MySQL
    │
    ▼
Vues Blade ──► Rendu HTML + Bootstrap
```

### Héritage des rôles

Les rôles métier héritent du modèle `User` :

```
User (SoftDeletes)
 ├── Producer
 └── Manufacturer
```

Un même utilisateur peut, selon les besoins, cumuler plusieurs rôles (par exemple acheteur **et** producteur) — un point de modélisation suivi de près au niveau de l'héritage.

---

## Modèle de données

Principales entités et relations :

| Table | Description |
|---|---|
| `users` | Comptes utilisateurs (base commune, SoftDeletes) |
| `producers` | Données spécifiques aux producteurs |
| `manufacturers` | Données spécifiques aux fabricants |
| `products` | Catalogue (engrais, semences, produits agricoles) |
| `listings` / `annonces` | Annonces de vente |
| `market_prices` | Prix de référence par produit et marché |
| `messages` | Messagerie entre utilisateurs |
| `ratings` | Avis et notations |

Le schéma relationnel respecte la cohérence des clés étrangères et l'usage de types **ENUM** pour les valeurs contraintes (rôles, statuts, catégories).

---

## Prérequis

- PHP **8.x**
- Composer
- MySQL **8.x**
- Node.js et npm (pour la compilation des assets)
- Laragon (recommandé sous Windows)

---

## Installation

```bash
# 1. Cloner le dépôt
git clone https://github.com/<utilisateur>/agronet.git
cd agronet

# 2. Installer les dépendances PHP
composer install

# 3. Installer les dépendances front et compiler les assets
npm install
npm run dev

# 4. Configurer l'environnement
cp .env.example .env
php artisan key:generate
```

Renseigner ensuite la connexion à la base dans `.env` :

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=inari
DB_USERNAME=root
DB_PASSWORD=
```

```bash
# 5. Lancer les migrations (et les seeders si disponibles)
php artisan migrate --seed

# 6. Démarrer le serveur de développement
php artisan serve
```

L'application est accessible sur `http://127.0.0.1:8000`.

---

## Structure du projet

```
agronet/
├── app/
│   ├── Http/
│   │   ├── Controllers/      # Logique applicative
│   │   └── Requests/         # Validation (Form Requests)
│   └── Models/               # User, Producer, Manufacturer, Product...
├── database/
│   ├── migrations/           # Schéma de la base
│   └── seeders/
├── resources/
│   └── views/                # Templates Blade
├── routes/
│   └── web.php               # Routes web
└── public/                   # Point d'entrée et assets
```

---

## Organisation des branches

| Branche | Rôle |
|---|---|
| `main` | Version stable |
| `backend-manu` | Développement backend (système d'inscription, rôles, transactions) |

---

## Feuille de route

- [ ] Finaliser le système d'inscription multi-rôles.
- [ ] Aligner les tables `producers` et `manufacturers` avec le `SoftDeletes` du modèle `User` (colonne `deleted_at`).
- [ ] Compléter une redirection vers une messagerie temps réel.
- [ ] Enrichir les interfaces.
---

## Auteur

Projet **SYSMAC** en cours de développement par **Belvine** et **Emmanuel** dans un cadre académique.
