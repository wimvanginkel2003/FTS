<x-app-layout>

            <div class="flex flex-col p-1">
                <label>Land van vertrek</label>
                <input placeholder="Nederland" class="w-1/2">
            </div>


            <div class="flex flex-col  p-1">
                <label>Locatie van vertrek</label>
                <input placeholder="Utrecht centraal jaarbeurszijde" class="w-1/2">
            </div>

            <div class="flex flex-col p-1">
                <label>Tijd van vertrek</label>
                <input placeholder="17:00" class="w-1/2">
            </div>

            <div class="flex flex-col p-1">
                <label>Tijd van aankomst</label>
                <input placeholder="1:00" class="w-1/2">
            </div>

            <div class="flex flex-col p-1">
                <label>Naam festival</label>
                <input placeholder="We Love Green" class="w-1/2">
            </div>

            <div class="flex flex-col p-1">
                <label>Stad waar festival is</label>
                <input placeholder="Parijs" class="w-1/2">
            </div>

            <div class="flex flex-col p-1">
                <label>Tijd van vertrek</label>
                <input placeholder="17:00" class="w-1/2">
            </div>

            <div class="flex flex-col p-1">
                <label>Tijd van aankomst</label>
                <input placeholder="1:00" class="w-1/2">
            </div>

    <x-nav-link :href="route('overzichtbeheerder')" :active="request()->routeIs('overzichtbeheerder')">
        {{ __('Wijziging oplsaan') }}
    </x-nav-link>

    <x-nav-link :href="route('overzichtbeheerder')" :active="request()->routeIs('overzichtbeheerder')">
        {{ __('Delete') }}
    </x-nav-link>

</x-app-layout>
