<x-app-layout class="bg-[#0C4069]">
    <x-slot name="header" class="">
        <h2 class="font-semibold text-xl text-gray-800 ">
        </h2>
    </x-slot>

    <div class="grid grid-cols-[15%_90%]">
  <!-- Div de gauche (10%) -->
  <div class="bg-[#0C4069] h-[100%]">
    Contenu gauche (10%)
  </div>
  
  <!-- Div de droite (90%) -->
  <div class="bg-white p-2 rounded">
    Contenu principal (90%)
  </div>
</div>
</x-app-layout>
