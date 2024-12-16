<x-app-layout>

    <div class="flex flex-col">

        <div>
                <div class="flex flex-col p-1">
                    <input placeholder="Naam festival" class="w-full">
                </div>

        </div>


        <div class="flex flex-col md:flex-row ">

                <div class=" flex md:flex-row">

                    <div class="flex flex-col">

                                    <div class="flex flex-col p-1 ">
                                        <input placeholder="Land van vertrek" class="w-full">
                                    </div>

                                    <div class="flex flex-col p-1">
                                        <input placeholder="Stad van vertrek" class="w-full">
                                    </div>

                                    <div class="flex flex-col  p-1">
                                        <input placeholder="Adres Opstaplocatie" class="full">
                                    </div>

                        <div class="flex flex-row">

                            <div>

                                    <div class="flex flex-col p-1">
                                        <label>Vertrekdatum heenreis</label>
                                        <input type="date" class="w-full">
                                    </div>

                                    <div class="flex flex-col p-1">
                                        <label>Aamkomstdatum</label>
                                        <input type="date" >
                                    </div>


                                    <div class="flex flex-col p-1">
                                    <label>Duur busrit</label>
                                    <input type="time" class="w-full">
                                </div>

                            </div>


                            <div>



                                <div class="flex flex-col p-1">
                                    <label>Vertrektijd heenreis</label>
                                    <input type="time" class="w-full">
                                </div>

                                    <div class="flex flex-col p-1">
                                        <label>Aamkomstijd</label>
                                        <input type="time">
                                    </div>

                            </div>

                        </div>



                        <div class="flex flex-col  p-1">
                            <textarea  placeholder="Beschrijving van de Opstaplocatie" class="w-full h-32 "></textarea>
                        </div>

                        <div class="flex flex-col p-1">
                            <textarea placeholder="Beschrijving van de aankomstlocatie" class="w-full h-32"></textarea>
                        </div>
                    </div>

            </div>





            <div class="flex flex-row">

                <div class="flex flex-col">

                    <div class="flex flex-col p-1 ">
                        <input placeholder="Stad waar festival is" class="w-full">
                    </div>

                    <div class="flex flex-col p-1">
                        <input placeholder="Land van festival" class="w-full">
                    </div>

                    <div class="flex flex-col  p-1">
                        <input placeholder="Adres Opstaplocatie" class="full">
                    </div>

                    <div class="flex flex-row">

                        <div>

                            <div class="flex flex-col p-1">
                                <label>Vertrekdatum terugreis</label>
                                <input type="date" class="w-full">
                            </div>

                            <div class="flex flex-col p-1">
                                <label>Aamkomstdatum</label>
                                <input type="date" >
                            </div>



                            <div class="flex flex-col p-1">
                                <label>Duur busrit</label>
                                <input type="time" class="w-full">
                            </div>

                        </div>


                        <div>




                            <div class="flex flex-col p-1">
                                <label>Vertrektijd terugreis</label>
                                <input type="time" class="w-full">
                            </div>

                            <div class="flex flex-col p-1">
                                <label>Aamkomstijd</label>
                                <input type="time">
                            </div>

                        </div>

                    </div>



                    <div class="flex flex-col  p-1">
                        <textarea  placeholder="Beschrijving van de Opstaplocatie" class="w-full h-32 "></textarea>
                    </div>

                    <div class="flex flex-col p-1">
                        <textarea placeholder="Beschrijving van de aankomstlocatie" class="w-full h-32"></textarea>
                    </div>
                </div>

            </div>

            <div>

                <div class="flex flex-col m-2 w-2/5 md:w-2/3">

                    <input placeholder="Aantal punten">

                    <x-nav-link :href="route('overzichtbeheerder')" :active="request()->routeIs('overzichtbeheerder')">
                        {{ __('Opslaan') }}
                    </x-nav-link>

                </div>

            </div>

        </div>

    </div>

</x-app-layout>
