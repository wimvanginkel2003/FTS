<x-app-layout>

    <div class=" mt-4 m-2 p-6 mb-6 bg-white shadow-md rounded-2xl text-xl font-bold ">
        <h2>Jou busreis naar: We Love Green</h2>
    </div>


    <div class="mt-4 m-2 p-6 mb-6 bg-white shadow-md rounded-2xl ">

        <h2 class="font-bold text-2xl">Heenreis</h2>

        <h2 class="font-bold mt-2">Opstaplocatie: Utrecht centraal</h2>
        <p>De opstaplocatie bevindt zich aan de Jaarbeurszijde van Utrecht Centraal, bij perron 4C. Vanaf de stationshal volg je de borden naar de Jaarbeurszijde. Zodra je buiten bent, vind je perron 4C direct bij de bushaltes. Hier staat de bus voor je klaar.
        </p>

        <div class="flex justify-between mt-4 font-bold">
            <h2>Datum: 16-03-2025</h2>
            <h2> 04:00</h2>
        </div>

        <div class="flex items-center justify-center">
            <!-- Verticale lijn meer naar het midden -->
            <div class="w-[2px] h-32 bg-black relative mr-8">
                <!-- Bus-icoon aan de rechterkant van de lijn -->
                <div class="absolute top-1/2 -translate-y-1/2 right-[-30px]">
                    <i class="fa-solid fa-bus"></i>
                </div>
            </div>
            <!-- Witruimte tussen de lijn en tekst -->
            <h2 class="ml-12">Reisduur: 6:00</h2>
        </div>

        <div class="flex justify-between mt-2 mb-4 font-bold">
            <h2>Datum: 16-03-2025</h2>
            <h2> 10:00</h2>
        </div>

        <h2 class="font-bold mt-1">Aankomstlocatie: We Love Green P4</h2>

        <p>De bus komt aan op We Love Green P4, een parkeerplaats nabij het festivalterrein. Vanaf hier is het ongeveer 10 minuten lopen naar de ingang van het festival.
        </p>


    </div>


    <div class="mt-4 m-2 p-6 mb-6 bg-white shadow-md rounded-2xl ">

        <h2 class="font-bold text-2xl">Terugreis</h2>

        <h2 class="font-bold mt-2">Opstaplocatie: We Love Green P1</h2>
        <p>Voor de terugreis vertrek je vanaf We Love Green P1, de parkeerplaats dicht bij de hoofdingang van het festival. Het is ongeveer 20 minuten lopen van de ingang naar de opstaplocatie.
        </p>

        <div class="flex justify-between mt-4 font-bold">
            <h2>Datum: 20-03-2025</h2>
            <h2> 10:00</h2>


        </div>

        <div class="flex items-center justify-center">
            <!-- Verticale lijn meer naar het midden -->
            <div class="w-[2px] h-32 bg-black relative mr-8">
                <!-- Bus-icoon aan de rechterkant van de lijn -->
                <div class="absolute top-1/2 -translate-y-1/2 right-[-30px]">
                    <i class="fa-solid fa-bus"></i>
                </div>
            </div>
            <!-- Witruimte tussen de lijn en tekst -->
            <h2 class="ml-12">Reisduur: 6:00</h2>
        </div>

        <div class="flex justify-between mt-2 mb-4 font-bold">
            <h2>Datum: 20-03-2025</h2>
            <h2> 16:00</h2>
        </div>

        <h2 class="font-bold mt-1">Aankomstlocatie: Utrecht centraal</h2>

        <p>De bus komt aan op perron 2A utrecht centraal jaarbeurszijde. Vanaf hier kun je de borden "Utrecht Centraal" volgen en ben je binnen 5 minuten op het station.
        </p>


    </div>

    <div class="mt-4 m-2 p-6 mb-6 bg-white shadow-md rounded-2xl ">
        <h2 class="font-bold text-2xl">Punten: 40</h2>
        <p>Voor deze reis ontvang je 40 punten. Kijk op de puntenpagina voor meer uitleg en informatie over hoe je punten kunt verzamelen.</p>
    </div>

    <div class=" mt-4 m-2 p-6 mb-6 bg-white shadow-md rounded-2xl text-xl font-bold ">
        <h2>Prijs: €55,00</h2>
    </div>

    <div class=" m-2 p-6 pt-1 pb-1 bg-white shadow-md rounded-2xl flex justify-center">
        <x-nav-link :href="route('eigenticketsoverzichtklant')" :active="request()->routeIs('eigenticketsoverzichtklant')">
            {{ __('Boeken') }}
        </x-nav-link>
    </div>







</x-app-layout>
