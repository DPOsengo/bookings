<div x-data="{
        showModal: @entangle('showModal'),
        showToast: false,
        toastMessage: '',
        toastType: 'success'
    }"
    x-on:show-toast.window="
        toastMessage = $event.detail[0].message;
        toastType = $event.detail[0].type;
        showToast = true;
        setTimeout(() => showToast = false, 3000);
    ">

    <x-button wire:click="openModal('{{ $propertyName }}', '{{ $pricePerNight }}')" class="bg-blue-500 text-white rounded">Réserver</x-button>

    <!-- Modale de réservation -->
    <div x-show="showModal" x-cloak class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-20">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96">
            <h2 class="text-xl font-bold mb-4">Réserver une propriété</h2>

            <form wire:submit.prevent="book">
                <div class="mb-4">
                    <label class="block text-sm font-bold text-indigo-600">Compte associé à cette réservation :</label>
                    <p>{{ $userName }}</p>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-bold text-indigo-600">Vous réservez la propriété suivante :</label>
                    <p>{{ $propertyName }}</p>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-bold text-indigo-600">Tarif à la nuit :</label>
                    <p>{{ $pricePerNight }} € / nuit</p>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-bold text-indigo-600">Date de début :</label>
                    <input type="date" wire:model="startDate" class="w-full p-2 border rounded">
                    @error('startDate') <p class="text-red-500 text-xs">{{ $message }}</p> @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-bold text-indigo-600">Date de fin :</label>
                    <input type="date" wire:model="endDate" class="w-full p-2 border rounded">
                    @error('endDate') <p class="text-red-500 text-xs">{{ $message }}</p> @enderror
                </div>

                <div class="flex flex-col space-y-2">
                    <x-button type="button" @click="showModal = false" class="bg-gray-500 text-white rounded mr-2  w-full hover:bg-gray-800">
                        Annuler
                    </x-button>
                    <x-button type="submit" class="bg-blue-500 text-white rounded">
                        Valider
                    </x-button>
                </div>
            </form>
        </div>
    </div>

    <!-- Toast de confirmation -->
    <div x-show="showToast" x-cloak
        class="fixed flex  top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 px-6 py-3 rounded-lg shadow-lg  transition-all duration-300"
        x-bind:class="toastType === 'error' ? 'bg-red-500 text-white' : 'bg-green-600 text-white'">
        <p x-text="toastMessage"></p>
    </div>
</div>