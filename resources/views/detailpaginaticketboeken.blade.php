<x-app-layout>
    <div class="w-full">
        <h2 class="mt-4 p-4 mb-6 bg-white shadow-md rounded-2xl text-indigo-900 m-2 font-bold sm:text-4xl">
            Jouw busreis naar: {{ $busboeking->Festival_naam }}
        </h2>
    </div>

    <div class="md:flex md:flex-row">
        <!-- Heenreis -->
        <div class="md:flex-row md:flex">
            <div class="mt-4 m-2 p-6 mb-6 bg-white shadow-md rounded-2xl md:w-1/2">
                <h2 class="font-bold text-2xl text-indigo-900">Heenreis</h2>

                <h2 class="font-bold mt-2 text-indigo-900">Opstaplocatie: {{ $busboeking->Stad_van_vertrek_heen }} centraal</h2>
                <p class="text-indigo-900">{{ $busboeking->Beschrijving_opstaplocatie_heen }}</p>

                <div class="flex justify-between mt-4 font-bold text-indigo-900">
                    <h2>Datum: {{ \Carbon\Carbon::parse($busboeking->Vertrekdatum_heenreis)->format('d-m-Y') }}</h2>
                    <h2>{{ \Carbon\Carbon::parse($busboeking->Vertrektijd_heenreis)->format('H:i') }}</h2>
                </div>

                <div class="flex items-center justify-center">
                    <div class="w-[2px] h-32 bg-indigo-900 relative mr-8">
                        <div class="absolute top-1/2 -translate-y-1/2 right-[-30px]">
                            <i class="fa-solid fa-bus text-indigo-900"></i>
                        </div>
                    </div>
                    <h2 class="ml-12 text-indigo-900">
                        Reisduur: 10:00
                    </h2>
                </div>

                <div class="flex justify-between mt-2 mb-4 font-bold text-indigo-900">
                    <h2>Datum: {{ \Carbon\Carbon::parse($busboeking->Aankomstdatum_heenreis)->format('d-m-Y') }}</h2>
                    <h2>{{ \Carbon\Carbon::parse($busboeking->Aankomsttijd_heenreis)->format('H:i') }}</h2>
                </div>

                <h2 class="font-bold mt-1 text-indigo-900">Aankomstlocatie: {{ $busboeking->Festival_naam }} P4</h2>
                <p class="text-indigo-900">{{ $busboeking->Beschrijving_aankomstlocatie_heen }}</p>
            </div>

            <!-- Terugreis -->
            <div class="mt-4 m-2 p-6 mb-6 bg-white shadow-md rounded-2xl md:w-1/2">
                <h2 class="font-bold text-2xl text-indigo-900">Terugreis</h2>

                <h2 class="font-bold mt-2 text-indigo-900">Opstaplocatie: {{ $busboeking->Stad_van_vertrek_terug }} centraal</h2>
                <p class="text-indigo-900">{{ $busboeking->Beschrijving_opstaplocatie_terug }}</p>

                <div class="flex justify-between mt-4 font-bold text-indigo-900">
                    <h2>Datum: {{ \Carbon\Carbon::parse($busboeking->Vertrekdatum_terugreis)->format('d-m-Y') }}</h2>
                    <h2>{{ \Carbon\Carbon::parse($busboeking->Vertrektijd_terugreis)->format('H:i') }}</h2>
                </div>

                <div class="flex items-center justify-center">
                    <div class="w-[2px] h-32 bg-indigo-900 relative mr-8">
                        <div class="absolute top-1/2 -translate-y-1/2 right-[-30px]">
                            <i class="fa-solid fa-bus text-indigo-900"></i>
                        </div>
                    </div>
                    <h2 class="ml-12 text-indigo-900">
                        Reisduur: 10:00
                    </h2>
                </div>

                <div class="flex justify-between mt-2 mb-4 font-bold text-indigo-900">
                    <h2>Datum: {{ \Carbon\Carbon::parse($busboeking->Aankomstdatum_terugreis)->format('d-m-Y') }}</h2>
                    <h2>{{ \Carbon\Carbon::parse($busboeking->Aankomsttijd_terugreis)->format('H:i') }}</h2>
                </div>

                <h2 class="font-bold mt-1 text-indigo-900">Aankomstlocatie: {{ $busboeking->Adres_opstaplocatie_terug }}</h2>
                <p class="text-indigo-900">{{ $busboeking->Beschrijving_aankomstlocatie_terug }}</p>
            </div>

            <!-- Punten en Totaalprijs -->
            <div class="flex flex-col">
                <div class="mt-4 m-2 p-6 mb-6 bg-white shadow-md rounded-2xl">
                    <h2 class="font-bold text-2xl text-indigo-900">Punten: {{ $busboeking->Punten }}</h2>
                    <p class="text-indigo-900">Voor deze reis ontvang je {{ $busboeking->Punten }} punten. Kijk op de puntenpagina voor meer uitleg en informatie over hoe je punten kunt verzamelen.</p>
                </div>

                <div class="mt-4 m-2 p-6 mb-6 bg-white shadow-md rounded-2xl text-xl text-indigo-900 flex justify-between">
                    <h2 class="font-bold text-indigo-900">Totaal:</h2>
                    <h2>€{{ number_format($busboeking->prijs, 2, ',', '.') }}</h2>  <!-- Format de prijs netjes -->
                </div>



                <form action="{{ route('boek-ticket', ['busboekingId' => $busboeking->id]) }}" method="POST">
                    @csrf
                    @if (!Auth::user()->busboekens->contains('id', $busboeking->id))
                        <!-- De gebruiker heeft nog geen ticket geboekt voor deze busreis -->
                        <button type="submit" class="m-2 pr-6 pl-6 mt-6 bg-indigo-600 text-white py-2 px-4 rounded hover:bg-indigo-700 transition">
                            Boeken
                        </button>
                    @else
                        <!-- De gebruiker heeft al een ticket geboekt voor deze busreis -->
                       <p></p>
                    @endif
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

