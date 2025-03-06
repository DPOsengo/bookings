@props(['property'])
<div class="bg-white rounded-lg shadow-md overflow-hidden p-4 w-full max-w-full flex flex-col h-full">
    <img src="{{ asset('storage/' . $property->image) }}" alt="{{ $property->name }}" class="w-full h-52 object-cover rounded-t-lg">

    <h2 class="text-lg font-bold text-primary">{{ $property->name }}</h2>

    <div class="relative flex-grow" x-data="{ expanded: false }">
        <p class="text-gray-600 text-sm">
            <span x-show="!expanded" class="line-clamp-3">{{ $property->description}}</span>
            <span x-show="expanded" class="block">{{ $property->description}}</span>
        </p>
        <button @click="expanded = !expanded" class="text-indigo-600 text-xs font-semibold mt-1">
            <span x-show="!expanded">Lire plus</span>
            <span x-show="expanded">Réduire</span>
        </button>
    </div>


    <div class="flex justify-between items-center mt-4">
        <p class="text-secondary font-semibold text-lg">{{ $property->price_per_night }} € / nuit</p>
        @livewire('booking-manager', ['propertyName' => $property->name, 'pricePerNight' => $property->price_per_night])
    </div>
</div>