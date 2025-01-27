<x-app-layout>

    <div>

        <div class="font-bold mt-2 mb-4 text-indigo-900 sm:text-4xl">
            <h1>Wijzig busboeking voor: {{ $busboeking->Festival_naam }}</h1>
        </div>

                    <form method="POST" action="{{ route('updatebeheerder', $busboeking->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="flex flex-col p-1">
                            <input name="Festival_naam" placeholder="Naam festival" value="{{ old('Festival_naam', $busboeking->Festival_naam) }}" class="w-full" required>
                        </div>

                                <div class="flex flex-row">

                                                    <div class="flex flex-col">

                                                        <h2 class="p-1">Heenreis informatie</h2>



                                                        <div class="flex flex-col md:flex-row">
                                                            <div class="flex flex-col w-full p-1">
                                                                <input name="Land_van_vertrek_heen" placeholder="Land van vertrek" value="{{ old('Land_van_vertrek_heen', $busboeking->Land_van_vertrek_heen) }}" class="w-full" required>
                                                            </div>
                                                            <div class="flex flex-col w-full p-1">
                                                                <input name="Stad_van_vertrek_heen" placeholder="Stad van vertrek" value="{{ old('Stad_van_vertrek_heen', $busboeking->Stad_van_vertrek_heen) }}" class="w-full" required>
                                                            </div>
                                                        </div>

                                                        <div class="flex flex-col p-1">
                                                            <input name="Adres_opstaplocatie_heen" placeholder="Adres opstaplocatie" value="{{ old('Adres_opstaplocatie_heen', $busboeking->Adres_opstaplocatie_heen) }}" class="w-full" required>
                                                        </div>

                                                        <div class="flex flex-row">
                                                            <div class="flex flex-col w-full p-1">
                                                                <label>Vertrekdatum heenreis</label>
                                                                <input name="Vertrekdatum_heenreis" type="date" value="{{ old('Vertrekdatum_heenreis', $busboeking->Vertrekdatum_heenreis) }}" class="w-full" required>
                                                            </div>
                                                            <div class="flex flex-col w-full p-1">
                                                                <label>Vertrektijd heenreis</label>
                                                                <input name="Vertrektijd_heenreis" type="time" value="{{ old('Vertrektijd_heenreis', $busboeking->Vertrektijd_heenreis) }}" class="w-full" required>
                                                            </div>
                                                        </div>

                                                        <div class="flex flex-col w-full p-1">
                                                            <label>Aankomsttijd heenreis</label>
                                                            <input name="Aankomsttijd_heenreis" type="time" value="{{ old('Aankomsttijd_heenreis', $busboeking->Aankomsttijd_heenreis) }}" class="w-full" required>
                                                        </div>

                                                        <div class="flex flex-col w-full p-1">
                                                            <label>Aankomstdatum heenreis</label>
                                                            <input name="Aankomstdatum_heenreis" type="date" value="{{ old('Aankomstdatum_heenreis', $busboeking->Aankomstdatum_heenreis) }}" class="w-full" required>
                                                        </div>

                                                        <div class="flex flex-col w-full p-1">
                                                            <label>Duur busrit heenreis</label>
                                                            <input name="Duur_busrit_heen" type="time" value="{{ old('Duur_busrit_heen', $busboeking->Duur_busrit_heen) }}" class="w-full" required>
                                                        </div>

                                                        <div class="flex flex-col p-1">
                                                            <textarea name="Beschrijving_opstaplocatie_heen" placeholder="Beschrijving van de opstaplocatie" class="w-full h-32">{{ old('Beschrijving_opstaplocatie_heen', $busboeking->Beschrijving_opstaplocatie_heen) }} required</textarea>
                                                        </div>

                                                        <div class="flex flex-col p-1">
                                                            <textarea name="Beschrijving_aankomstlocatie_heen" placeholder="Beschrijving van de aankomstlocatie" class="w-full h-32">{{ old('Beschrijving_aankomstlocatie_heen', $busboeking->Beschrijving_aankomstlocatie_heen) }} required</textarea>
                                                        </div>
                                                    </div>

                                            <div class="flex flex-col">
                                                    <div class="p-1">
                                                            <h2>Terugreis informatie</h2>
                                                        </div>

                                                        <div class="flex flex-col md:flex-row">
                                                            <div class="flex flex-col w-full p-1">
                                                                <input name="Land_van_vertrek_terug" placeholder="Land van vertrek" value="{{ old('Land_van_vertrek_terug', $busboeking->Land_van_vertrek_terug) }}" class="w-full" required>
                                                            </div>
                                                            <div class="flex flex-col w-full p-1">
                                                                <input name="Stad_van_vertrek_terug" placeholder="Stad van vertrek" value="{{ old('Stad_van_vertrek_terug', $busboeking->Stad_van_vertrek_terug) }}" class="w-full" required>
                                                            </div>
                                                        </div>

                                                        <div class="flex flex-col p-1">
                                                            <input name="Adres_opstaplocatie_terug" placeholder="Adres opstaplocatie" value="{{ old('Adres_opstaplocatie_terug', $busboeking->Adres_opstaplocatie_terug) }}" class="w-full" required>
                                                        </div>

                                                        <div class="flex flex-row">
                                                            <div class="flex flex-col w-full p-1">
                                                                <label>Vertrekdatum terugreis</label>
                                                                <input name="Vertrekdatum_terugreis" type="date" value="{{ old('Vertrekdatum_terugreis', $busboeking->Vertrekdatum_terugreis) }}" class="w-full" required>
                                                            </div>
                                                            <div class="flex flex-col w-full p-1">
                                                                <label>Vertrektijd terugreis</label>
                                                                <input name="Vertrektijd_terugreis" type="time" value="{{ old('Vertrektijd_terugreis', $busboeking->Vertrektijd_terugreis) }}" class="w-full" required>
                                                            </div>
                                                        </div>

                                                        <div class="flex flex-col w-full p-1">
                                                            <label>Aankomsttijd terugreis</label>
                                                            <input name="Aankomsttijd_terugreis" type="time" value="{{ old('Aankomsttijd_terugreis', $busboeking->Aankomsttijd_terugreis) }}" class="w-full" required>
                                                        </div>

                                                        <div class="flex flex-col w-full p-1">
                                                            <label>Aankomstdatum terugreis</label>
                                                            <input name="Aankomstdatum_terugreis" type="date" value="{{ old('Aankomstdatum_terugreis', $busboeking->Aankomstdatum_terugreis) }}" class="w-full" required>
                                                        </div>

                                                        <div class="flex flex-col w-full p-1">
                                                            <label>Duur busrit terugreis</label>
                                                            <input name="Duur_busrit_terug" type="time" value="{{ old('Duur_busrit_terug', $busboeking->Duur_busrit_terug) }}" class="w-full" required>
                                                        </div>

                                                        <div class="flex flex-col p-1">
                                                            <textarea name="Beschrijving_opstaplocatie_terug" placeholder="Beschrijving van de opstaplocatie" class="w-full h-32">{{ old('Beschrijving_opstaplocatie_terug', $busboeking->Beschrijving_opstaplocatie_terug) }} required</textarea>
                                                        </div>

                                                        <div class="flex flex-col p-1">
                                                            <textarea name="Beschrijving_aankomstlocatie_terug" placeholder="Beschrijving van de aankomstlocatie" class="w-full h-32">{{ old('Beschrijving_aankomstlocatie_terug', $busboeking->Beschrijving_aankomstlocatie_terug) }} required</textarea>
                                                        </div>


                                            </div>



                                        <div class="mt-6">

                                                    <div class="flex flex-col p-1 mt-2">
                                                        <input name="Punten" placeholder="Aantal punten" value="{{ old('Punten', $busboeking->Punten) }}" class="w-full" required>
                                                    </div>

                                                    <div class="flex flex-col p-1">
                                                        <input name="Prijs" placeholder="Prijs" value="{{ old('Prijs', $busboeking->prijs) }}" class="w-full" required>
                                                    </div>



                                        </div>

                                </div>

                        <button type="submit" class="bg-blue-500 text-white pl-2 mx-1 pr-2 py-2 rounded mt-4">
                            Update Boeking
                        </button>

                    </form>


        <form class="p-1" method="POST" action="{{ route('deletebeheerder', $busboeking->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 text-white px-4 py-2 mt-3 rounded">
                Verwijderen
            </button>
        </form>

    </div>

    <div class="font-bold m-4 mt-2 sm:w-2/3 flex justify-start">




    </div>


</x-app-layout>
