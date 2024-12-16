<x-app-layout>

    <div class="w-full">
            <h2 class="mt-4 p-4 mb-6 bg-white shadow-md rounded-2xl text-indigo-900 m-2 font-bold sm:text-4xl">
                Jouw busreis naar: We Love Green
            </h2>
    </div>

    <div class="md:flex md:flex-row">

        <div class="md:flex-row md:flex">

            <div class="mt-4 m-2 p-6 mb-6 bg-white shadow-md rounded-2xl md:w-1/2">

                <h2 class="font-bold text-2xl text-indigo-900">Heenreis</h2>

                <h2 class="font-bold mt-2 text-indigo-900">Opstaplocatie: Utrecht centraal</h2>
                <p class="text-indigo-900">De opstaplocatie bevindt zich aan de Jaarbeurszijde van Utrecht Centraal, bij perron 4C. Vanaf de stationshal volg je de borden naar de Jaarbeurszijde. Zodra je buiten bent, vind je perron 4C direct bij de bushaltes. Hier staat de bus voor je klaar.
                </p>

                <div class="flex justify-between mt-4 font-bold text-indigo-900">
                    <h2>Datum: 16-03-2025</h2>
                    <h2> 04:00</h2>
                </div>

                <div class="flex items-center justify-center">
                    <div class="w-[2px] h-32 bg-indigo-900 relative mr-8 ">
                        <div class="absolute top-1/2 -translate-y-1/2 right-[-30px]">
                            <i class="fa-solid fa-bus text-indigo-900"></i>
                        </div>
                    </div>
                    <h2 class="ml-12 text-indigo-900">Reisduur: 6:00</h2>
                </div>

                <div class="flex justify-between mt-2 mb-4 font-bold text-indigo-900">
                    <h2>Datum: 16-03-2025</h2>
                    <h2> 10:00</h2>
                </div>

                <h2 class="font-bold mt-1 text-indigo-900">Aankomstlocatie: We Love Green P4</h2>

                <p class="text-indigo-900">De bus komt aan op We Love Green P4, een parkeerplaats nabij het festivalterrein. Vanaf hier is het ongeveer 10 minuten lopen naar de ingang van het festival.
                </p>


            </div>


            <div class="mt-4 m-2 p-6 mb-6 bg-white shadow-md rounded-2xl md:w-1/2">

                <h2 class="font-bold text-2xl text-indigo-900">Terugreis</h2>

                <h2 class="font-bold mt-2 text-indigo-900">Opstaplocatie: We Love Green P1</h2>
                <p class="text-indigo-900">
                    Voor de terugreis vertrek je vanaf We Love Green P1, de parkeerplaats dicht bij de hoofdingang van het festival. Het is ongeveer 20 minuten lopen van de ingang naar de opstaplocatie. Houd rekening met de vertrektijd van de bus, zodat je ontspannen kunt reizen.







                </p>

                <div class="flex justify-between mt-4 font-bold text-indigo-900">
                    <h2>Datum: 20-03-2025</h2>
                    <h2> 10:00</h2>


                </div>

                <div class="flex items-center justify-center">
                    <div class="w-[2px] h-32 bg-indigo-900 relative mr-8">
                        <div class="absolute top-1/2 -translate-y-1/2 right-[-30px]">
                            <i class="fa-solid fa-bus text-indigo-900"></i>
                        </div>
                    </div>
                    <h2 class="ml-12 text-indigo-900">Reisduur: 6:00</h2>
                </div>

                <div class="flex justify-between mt-2 mb-4 font-bold text-indigo-900">
                    <h2>Datum: 20-03-2025</h2>
                    <h2> 16:00</h2>
                </div>

                <h2 class="font-bold mt-1 text-indigo-900">Aankomstlocatie: Utrecht centraal</h2>

                <p class="text-indigo-900">De bus komt aan op perron 2A utrecht centraal jaarbeurszijde. Vanaf hier kun je de borden "Utrecht Centraal" volgen en ben je binnen 5 minuten op het station
                </p>


            </div>

        </div>

        <div class="flex flex-col">

            <div class="mt-4 m-2 p-6 mb-6 bg-white shadow-md rounded-2xl ">
                <h2 class="font-bold text-2xl text-indigo-900">Punten: 40</h2>
                <p class="text-indigo-900">Voor deze reis ontvang je 40 punten. Kijk op de puntenpagina voor meer uitleg en informatie over hoe je punten kunt verzamelen.</p>
            </div>

            <div class=" mt-4 m-2 p-6 mb-6 bg-white shadow-md rounded-2xl text-xl text-indigo-900 flex justify-between">
                <h2 class="font-bold text-indigo-900">Totaal:</h2>
                <h2>€55,00</h2>
            </div>

            <div class="font-bold text-white m-2 p-6 pt-1 pb-1 shadow-md rounded-xl flex justify-center bg-green-700">
                <a href="{{ route('eigenticketsoverzichtklant') }}" class="text-xl bg-green-700 {{ request()->routeIs('eigenticketsoverzichtklant') ? 'active' : '' }}">
                    {{ __('Boeken') }}
                </a>
            </div>

        </div>

    </div>





</x-app-layout>
