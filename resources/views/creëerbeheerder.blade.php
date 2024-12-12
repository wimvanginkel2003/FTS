<x-app-layout>


    <div class="flex flex-col p-1">
        <label>Land van vertrek</label>
        <input class="w-1/2">
    </div>


    <div class="flex flex-col  p-1">
        <label>Locatie van vertrek</label>
        <input class="w-1/2">
    </div>

    <div class="flex flex-col p-1">
        <label>Tijd van vertrek</label>
        <input class="w-1/2">
    </div>

    <div class="flex flex-col p-1">
        <label>Tijd van aankomst</label>
        <input class="w-1/2">
    </div>

    <div class="flex flex-col p-1">
        <label>Naam festival</label>
        <input class="w-1/2">
    </div>

    <div class="flex flex-col p-1">
        <label>Stad waar festival is</label>
        <input  class="w-1/2">
    </div>

    <div class="flex flex-col p-1">
        <label>Tijd van vertrek</label>
        <input class="w-1/2">
    </div>

    <div class="flex flex-col p-1">
        <label>Tijd van aankomst</label>
        <input  class="w-1/2">
    </div>

    <x-nav-link :href="route('overzichtbeheerder')" :active="request()->routeIs('overzichtbeheerder')">
        {{ __('Opslaan') }}
    </x-nav-link>

</x-app-layout>
