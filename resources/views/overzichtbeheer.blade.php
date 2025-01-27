<x-app-layout>



    <div class="font-bold m-4 mt-8 text-indigo-900 sm:w-2/3 sm:text-4xl">
        <h1>Overzicht geplande busreizen</h1>
    </div>

    @foreach($busboekingen as $busboeking)
        <div class="mt-4 m-4 p-6 mb-6 bg-white shadow-md rounded-2xl text-indigo-900 sm:w-2/3 ">
            <div class="flex justify-between flex-col">

                <div class="flex justify-row justify-center">
                    <h2 class="font-bold text-2xl text-indigo-900">{{ $busboeking->Stad_van_vertrek_heen }}, {{ $busboeking->Land_van_vertrek_heen }}</h2>
                </div>

                <div class="flex items-center justify-between w-full">
                    <div class="flex flex-col items-center">
                        <h2 class="text-xs mb-1 text-indigo-900 md:text-xl">{{ \Carbon\Carbon::parse($busboeking->Vertrekdatum_heenreis)->format('d-m-Y') }}</h2>
                        <h2 class="text-xs text-indigo-900 md:text-xl">{{ \Carbon\Carbon::parse($busboeking->Vertrektijd_heenreis)->format('H:i') }} <i class="fa-solid fa-bus md:text-xl"></i> {{ \Carbon\Carbon::parse($busboeking->Aankomsttijd_heenreis)->format('H:i') }}</h2>
                    </div>

                    <!-- Cirkeltje met pijlen -->
                    <div class="flex items-center justify-center relative w-20 h-20">
                        <i class="fa-regular fa-circle text-indigo-900 text-6xl absolute"></i>
                        <div class="flex items-center justify-center">
                            <i class="fa-solid fa-arrow-down text-indigo-900 mx-1"></i>
                            <i class="fa-solid fa-arrow-up text-indigo-900 mx-1"></i>
                        </div>
                    </div>

                    <div class="flex flex-col items-center">
                        <h2 class="text-xs mb-1 text-indigo-900 md:text-xl">{{ \Carbon\Carbon::parse($busboeking->Vertrekdatum_terugreis)->format('d-m-Y') }}</h2>
                        <h2 class="text-xs text-indigo-900 md:text-xl">{{ \Carbon\Carbon::parse($busboeking->Vertrektijd_terugreis)->format('H:i') }} <i class="fa-solid fa-bus md:text-xl"></i> {{ \Carbon\Carbon::parse($busboeking->Aankomsttijd_terugreis)->format('H:i') }}</h2>
                    </div>
                </div>

                <div class="flex justify-row justify-center">
                    <h2 class="font-bold text-2xl text-indigo-900">{{ $busboeking->Festival_naam }}</h2>
                </div>

            </div>

            <div class="flex justify-between">
                <h2 class="mt-6 text-indigo-900 font-bold">€{{ $busboeking->prijs}}</h2>

                <!-- Button voor klanten naar detailpagina -->
                @can('is-customer')
                    <a
                        class="pr-6 pl-6 mt-6 bg-indigo-600 text-white py-2 px-4 rounded hover:bg-indigo-700 transition"
                        href="{{ route('detailpaginaticketboeken', ['busboeken' => $busboeking->id]) }}"
                        {{ request()->routeIs('detailpaginaticketboeken') ? 'aria-current=page' : '' }}
                    >
                        {{ __('Detailpagina') }}
                    </a>
                @endcan

                <!-- Button voor beheerders om de busreis te bewerken -->
                @can('is-admin')
                    <x-nav-link @class("mb-2 mt-6") :href="route('editbeheerder', $busboeking->id)" :active="request()->routeIs('editbeheerder')">
                        {{ __('Edit') }}
                    </x-nav-link>
                @endcan
            </div>

        </div>
    @endforeach

</x-app-layout>



