# 📖 Documentation

## 1️⃣ Présentation
Ce projet est une plateforme de réservation de propriétés développée avec Laravel. Il est non seulement possible à une personne connectée de réserver, mais on peut aussi accéder à un tableau de bord (backoffice) pour gérer les propriétés et les réservations à partir de là (création, suppression, modification).

## 2️⃣ Technologies utilisées
- Laravel (Backend)
- Livewire (Composants dynamiques)
- Filament (Backoffice)
- TailwindCSS (Styling)
- Breeze (Authentification)

## 3️⃣ Fonctionnement

### 🎭 Frontend
- **Page principale** : Affiche les propriétés sous forme de cartes.
- **Modale de réservation** : S’ouvre lors du clic sur le bouton "Réserver".

### 🔧 Backend
- **Gestion des propriétés** via `/admin/properties`.
- **Gestion des réservations** via `/admin/bookings`.

## 4️⃣ Base de données

- **Users** : Contient les utilisateurs enregistrés.
- **Properties** : Liste des propriétés avec nom, description, prix et image.
- **Bookings** : Contient les réservations associées à un utilisateur et une propriété.
