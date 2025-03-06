<?php

namespace App\Livewire;

use App\Models\Booking;
use App\Models\Property;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class BookingManager extends Component
{
    public $propertyName;
    public $pricePerNight;
    public $showModal = false;
    public $userName;
    public $startDate;
    public $endDate;

    public function mount()
    {
        $this->userName = Auth::user()->name ?? 'Invité';
    }

    public function openModal($propertyName, $pricePerNight)
    {
        $this->propertyName = $propertyName;
        $this->pricePerNight = $pricePerNight;
        $this->showModal = true;
    }

    public function book()
    {
        // Vérification de connexion
        if (!Auth::check()) {
            // Affichage d'un message d'erreur si l'utilisateur n'est pas connecté
            $this->dispatch('show-toast', [
                'message' => 'Veuillez vous connecter pour pouvoir réserver.',
                'type' => 'error',
            ]);
            $this->showModal = false;
            return;
        }

        // Validation des dates
        $this->validate([
            'startDate' => 'required|date|after_or_equal:today',
            'endDate' => 'required|date|after:startDate',
        ]);

        // Récupération de la propriété en fonction du nom
        $property = Property::where('name', $this->propertyName)->first();

        if (!$property) {
            $this->dispatch('show-toast', ['message' => 'Propriété non trouvée.', 'type' => 'error']);
            return;
        }

        // Création de la réservation
        Booking::create([
            'user_id' => Auth::id(),
            'property_id' => $property->id,
            'start_date' => $this->startDate,
            'end_date' => $this->endDate,
        ]);

        // Fermeture de la modale
        $this->showModal = false;

        // Message de confirmation
        $this->dispatch('show-toast', [
            'message' => 'Votre réservation a été effectuée avec succès.',
            'type' => 'success',
        ]);
    }

    public function render()
    {
        return view('livewire.booking-manager');
    }
}
