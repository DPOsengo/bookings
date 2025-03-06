# Projet de Réservation de Propriétés 🏡

Une application Laravel permettant aux utilisateurs de réserver des propriétés pour un certain nombre de nuits comprenant un frontend et un backoffice.

Retrouvez la documentation ici : [Bookings Documentation](https://DPOsengo.github.io/bookings)

## 📌 Fonctionnalités

- 📋 **Liste des propriétés** avec titre, description, photo et prix à la nuit.
- 🛎 **Réservation** (formulaire simple).
- 🔐 **Authentification** gérée avec Laravel Breeze.
- 💻 **Backoffice** pour gérer les propriétés et les réservations.
- 📸 **Upload d’images** pour les propriétés.

## 🛠 Technologies employées

Ce projet a été réalisé avec les technologies suivantes :

- **Langages** : PHP, JavaScript, HTML, CSS
- **Frameworks et bibliothèques** :
  - Laravel (Backend)
  - Livewire (Composants dynamiques)
  - Filament (Dashboard Admin)
  - TailwindCSS (Styles)
  - Alpine.js (Interactions front-end)
- **Base de données** : MySQL & phpMyAdmin
- **Outils et environnement** :
  - Laragon (Serveur de développement)
  - Git et GitHub (Gestion de version)

## 🚀 Installation

### 1️⃣ Cloner le projet
```sh
git clone https://github.com/DPOsengo/bookings.git
cd bookings
```

### 2️⃣ Installer les dépendances
```sh
composer install
npm install
```

### 3️⃣ Configurer l'environnement
```sh
cp .env.example .env
php artisan key:generate
```
Configurer la base de données dans .env puis :
```sh
php artisan migrate --seed
```

### 4️⃣ Lancer l'application
```sh
php artisan serve
npm run dev
```
L'application est maintenant accessible sur http://127.0.0.1:8000/properties

## 📷 Captures d’écran

## 📜 License
Il n'y en a pas encore mais j'y songerai.

