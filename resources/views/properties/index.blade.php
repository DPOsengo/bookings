   <x-app-layout>
       <x-slot name="header">
           <h2 class="font-semibold text-xl leading-tight">
               Liste des propriétés
           </h2>
       </x-slot>
       <div class="container mx-auto px-4 max-w-7xl">
           <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
               @foreach ($properties as $property)
               <x-property-card :property="$property" />
               @endforeach
           </div>
       </div>
   </x-app-layout>