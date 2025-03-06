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
- **Page web**
  
Voici à quoi ressemble la page listant les propriétés :

![liste_des_proprietes](https://github.com/user-attachments/assets/f5dc48fe-0d87-445c-946c-ac0257334f9b)

Voici le formulaire de réservation :  

![reserver](https://github.com/user-attachments/assets/afdcd6a7-c403-40eb-8b66-b222e282b8f1)

Ici nous pouvons voir le message qui s'affiche en cas de réservation validée :  

![success](https://github.com/user-attachments/assets/e426dcef-6572-48f5-8e84-44ce141835d2)

ou le message indiquant à l'utilisateur qu'il doit d'abord se connecter :  

![guest](https://github.com/user-attachments/assets/2458db5e-8c35-49e1-8c44-a887269f2198)

- **Tableau de bord**
  
Liste des propriétés dans le dashboard Filament :

![properties_list](https://github.com/user-attachments/assets/1fcf1c0c-3c49-4bdd-b92c-270ce2e980c5)

Liste des réservations :  

![bookings_list](https://github.com/user-attachments/assets/f251586d-7cfa-48d1-ad35-5f0fa5c43635)

Tableau de création d'une propriété :  

![create_property](https://github.com/user-attachments/assets/4467e29d-2938-4998-9980-47168f101796)

Tableau de création d'une réservation :  

![create_booking](https://github.com/user-attachments/assets/c993e4ec-9869-47b7-80f8-3fd429a24d98)

- **Base de données**
  
Cette application est fonctionnelle et voici une vue de la base de données à l'aide de phpMyAdmin :

![phpMyAdmin](https://github.com/user-attachments/assets/fcb30b32-afb6-4355-a69f-ba4d394e0521)

## 📜 License
Il n'y en a pas encore mais j'y songerai.

