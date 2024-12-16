<x-app-layout>

    <div class="flex flex-col  border-black">

        <div>
            <div class="flex flex-col p-1 ">
                <input value="We Love Green" class="w-full">
            </div>

        </div>


        <div class="flex flex-col md:flex-row ">

            <div class=" md:flex-row">

                <div class="flex flex-col">

                    <div class="flex flex-col p-1 ">
                        <input value="Nederland" class="w-full">
                    </div>

                    <div class="flex flex-col p-1">
                        <input value="Utrecht" class="w-full">
                    </div>

                    <div class="flex flex-col  p-1">
                        <input value="Utrecht centraal" class="full">
                    </div>

                    <div class="flex flex-row">

                        <div>

                            <div class="flex flex-col p-1">
                                <label>Vertrekdatum heenreis</label>
                                <input type="date" value="2025-03-16" class="w-full">
                            </div>

                            <div class="flex flex-col p-1">
                                <label>Aamkomstdatum</label>
                                <input type="date" value="2025-03-16">
                            </div>


                            <div class="flex flex-col p-1">
                                <label>Duur busrit</label>
                                <input type="time" value="06:00" class="w-full">
                            </div>

                        </div>


                        <div>



                            <div class="flex flex-col p-1">
                                <label>Vertrektijd heenreis</label>
                                <input type="time" value="04:00" class="w-full">
                            </div>

                            <div class="flex flex-col p-1">
                                <label>Aamkomstijd</label>
                                <input type="time" value="10:00">
                            </div>

                        </div>

                    </div>



                    <div class="flex flex-col  p-1">
                        <textarea  class="w-full h-36 ">De opstaplocatie bevindt zich aan de Jaarbeurszijde van Utrecht Centraal, bij perron 4C. Vanaf de stationshal volg je de borden naar de Jaarbeurszijde. Zodra je buiten bent, vind je perron 4C direct bij de bushaltes. Hier staat de bus voor je klaar.</textarea>
                    </div>

                    <div class="flex flex-col p-1">
                        <textarea placeholder="Beschrijving van de aankomstlocatie" class="w-full h-36">De bus komt aan op We Love Green P4, een parkeerplaats nabij het festivalterrein. Vanaf hier is het ongeveer 10 minuten lopen naar de ingang van het festival.</textarea>
                    </div>
                </div>

            </div>





            <div class="flex flex-row">

                <div class="flex flex-col">

                    <div class="flex flex-col p-1 ">
                        <input value="Parijs" class="w-full">
                    </div>

                    <div class="flex flex-col p-1">
                        <input value="Frankrijk" class="w-full">
                    </div>

                    <div class="flex flex-col  p-1">
                        <input value="We Love Green P1" class="full">
                    </div>

                    <div class="flex flex-row">

                        <div>

                            <div class="flex flex-col p-1">
                                <label>Vertrekdatum terugreis</label>
                                <input type="date" value="2025-03-20" class="w-full">
                            </div>

                            <div class="flex flex-col p-1">
                                <label>Aamkomstdatum</label>
                                <input type="date" value="2025-03-20">
                            </div>



                            <div class="flex flex-col p-1">
                                <label>Duur busrit</label>
                                <input type="time" value="06:00" class="w-full">
                            </div>

                        </div>


                        <div>




                            <div class="flex flex-col p-1">
                                <label>Vertrektijd terugreis</label>
                                <input type="time" value="10:00" class="w-full">
                            </div>

                            <div class="flex flex-col p-1">
                                <label>Aamkomstijd</label>
                                <input type="time" value="16:00">
                            </div>

                        </div>

                    </div>



                    <div class="flex flex-col  p-1">
                        <textarea  class="w-full h-36">Voor de terugreis vertrek je vanaf We Love Green P1, de parkeerplaats dicht bij de hoofdingang van het festival. Het is ongeveer 20 minuten lopen van de ingang naar de opstaplocatie. Houd rekening met de vertrektijd van de bus, zodat je ontspannen kunt reizen.</textarea>
                    </div>

                    <div class="flex flex-col p-1">
                        <textarea  class="w-full h-36">De bus komt aan op perron 2A utrecht centraal jaarbeurszijde. Vanaf hier kun je de borden "Utrecht Centraal" volgen en ben je binnen 5 minuten op het station</textarea>
                    </div>
                </div>

            </div>

            <div>

                <div class="flex flex-col m-2 w-2/5 md:w-2/3">

                    <input value="40">

                    <x-nav-link :href="route('overzichtbeheerder')" :active="request()->routeIs('overzichtbeheerder')">
                        {{ __('Opslaan') }}
                    </x-nav-link>

                    <x-nav-link :href="route('overzichtbeheerder')" :active="request()->routeIs('overzichtbeheerder')">
                        {{ __('Delete') }}
                    </x-nav-link>

                </div>

            </div>

        </div>

    </div>

</x-app-layout>
