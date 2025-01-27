<x-app-layout>

    <div class="flex flex-col">

        <form method="POST" action="{{ route('bus-ticket.store') }}">
            @csrf

        <div>
                <div class="flex flex-col p-1 mt-4">
                    <input name="Festival_naam"  placeholder="Naam festival" class="w-full" required>
                </div>

        </div>


        <div class="flex flex-col md:flex-row ">

                <div class=" flex md:flex-row">

                    <div class="flex flex-col">

                                    <div class="flex flex-col p-1 ">
                                        <input name="Land_van_vertrek_heen" placeholder="Land van vertrek" class="w-full" required>
                                    </div>

                                    <div class="flex flex-col p-1">
                                        <input name="Stad_van_vertrek_heen" placeholder="Stad van vertrek" class="w-full" required>
                                    </div>

                                    <div class="flex flex-col  p-1">
                                        <input name="Adres_opstaplocatie_heen" placeholder="Adres Opstaplocatie" class="full" required>
                                    </div>

                        <div class="flex flex-row">

                            <div>

                                    <div class="flex flex-col p-1">
                                        <label>Vertrekdatum heenreis</label>
                                        <input name="Vertrekdatum_heenreis" type="date" class="w-full" required>
                                    </div>

                                    <div class="flex flex-col p-1">
                                        <label>Aamkomstdatum</label>
                                        <input name="Aankomstdatum_heenreis" type="date" required>
                                    </div>


                                    <div class="flex flex-col p-1">
                                    <label>Duur busrit</label>
                                    <input name="Duur_busrit_heen" type="time" class="w-full" required>
                                </div>

                            </div>


                            <div>


                                <div class="flex flex-col p-1">
                                    <label>Vertrektijd heenreis</label>
                                    <input name="Vertrektijd_heenreis" type="time" class="w-full" required>
                                </div>

                                    <div class="flex flex-col p-1">
                                        <label>Aamkomstijd</label>
                                        <input name="Aankomsttijd_heenreis" type="time" required>
                                    </div>

                            </div>

                        </div>



                        <div class="flex flex-col  p-1">
                            <textarea name="Beschrijving_opstaplocatie_heen" placeholder="Beschrijving van de Opstaplocatie" class="w-full h-32 " required></textarea>
                        </div>

                        <div class="flex flex-col p-1">
                            <textarea name="Beschrijving_aankomstlocatie_heen" placeholder="Beschrijving van de aankomstlocatie" class="w-full h-32" required></textarea>
                        </div>
                    </div>

            </div>





            <div class="flex flex-row">

                <div class="flex flex-col">

                    <div class="flex flex-col p-1 ">
                        <input name="Stad_van_vertrek_terug" placeholder="Stad waar festival is" class="w-full" required>
                    </div>

                    <div class="flex flex-col p-1">
                        <input name="Land_van_vertrek_terug" placeholder="Land van festival" class="w-full" required>
                    </div>

                    <div class="flex flex-col  p-1">
                        <input name="Adres_opstaplocatie_terug" placeholder="Adres Opstaplocatie" class="full" required>
                    </div>

                    <div class="flex flex-row">

                        <div>

                            <div class="flex flex-col p-1">
                                <label>Vertrekdatum terugreis</label>
                                <input name="Vertrekdatum_terugreis" type="date" class="w-full" required>
                            </div>

                            <div class="flex flex-col p-1">
                                <label>Aamkomstdatum</label>
                                <input  name="Aankomstdatum_terugreis" type="date" required>
                            </div>



                            <div class="flex flex-col p-1">
                                <label>Duur busrit</label>
                                <input name="Duur_busrit_terug" type="time" class="w-full" required>
                            </div>

                        </div>


                        <div>



                            <div class="flex flex-col p-1">
                                <label>Vertrektijd terugreis</label>
                                <input name="Vertrektijd_terugreis" type="time" class="w-full" required>
                            </div>

                            <div class="flex flex-col p-1">
                                <label>Aamkomstijd</label>
                                <input name="Aankomsttijd_terugreis" type="time" required>
                            </div>

                        </div>

                    </div>



                    <div class="flex flex-col  p-1">
                        <textarea name="Beschrijving_opstaplocatie_terug" placeholder="Beschrijving van de Opstaplocatie" class="w-full h-32 " required></textarea>
                    </div>

                    <div class="flex flex-col p-1">
                        <textarea name="Beschrijving_aankomstlocatie_terug" placeholder="Beschrijving van de aankomstlocatie" class="w-full h-32" required></textarea>
                    </div>
                </div>

            </div>

            <div>

                <div class="flex flex-col m-2 w-2/5 md:w-2/3">

                    <input name="Punten" placeholder="Aantal punten" required>

                    <input class="mt-4" name="Prijs" placeholder="Prijs" required>

                    <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">
                        Opslaan
                    </button>


                </div>

            </div>

        </div>

        </form>

    </div>

</x-app-layout>
