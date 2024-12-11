<x-app-layout>
  <x-weergaven-punten>
  </x-weergaven-punten>

    <div class="font-bold m-2 mt-8">
        <h1>De te boeken busreisen</h1>

    </div>

    <div class="mt-4 border-4 border-black m-2 p-2">

        <div class="flex justify-center font-bold">
        <h2>Utrecht, Nederland &nbsp;&nbsp; -> &nbsp;&nbsp; We Love Green, Parijs </h2>
        </div>

            <div class=" mt-4">
                <h3 class="font-bold">Heenreis</h3>
                Locatie: Utrecht centraal jaarbeurszijde <br>
                Vertrekijd: 17:00 <br>
                Aankomstijd: 1:00
            </div>

        <div class=" mt-4">
            <h3 class="font-bold">Terugreis</h3>
            Locatie: We Love Green, Parijs <br>
            Vertrekijd: 17:00 <br>
            Aankomstijd: 1:00
        </div>

        <h2 class="font-bold mt-2">Prijs:&nbsp; €55,00</h2>

{{--        <div class="mb-2 mt-8">--}}
{{--        <a href="boeken" class="border-black border-2 p-2">Boeken</a>--}}
{{--        </div>--}}

        <x-nav-link @class("mb-2 mt-8") :href="route('eigenticketsoverzichtklant')" :active="request()->routeIs('eigenticketsoverzichtklant')">
            {{ __('Boeken') }}
        </x-nav-link>

    </div>

    <div class="mt-4 border-4 border-black m-2 p-2">

        <div class="flex justify-center font-bold">
            <h2>Berlijn, Duitsland &nbsp;&nbsp; -> &nbsp;&nbsp; Field Day, Londen</h2>
        </div>

        <div class=" mt-4">
            <h3 class="font-bold">Heenreis</h3>
            Locatie: Hauptbahnhof <br>
            Vertrekijd: 05:00 <br>
            Aankomstijd: 22:00
        </div>

        <div class=" mt-4">
            <h3 class="font-bold">Terugreis</h3>
            Locatie: Field Day, Londen <br>
            Vertrekijd: 10:00 <br>
            Aankomstijd: 15:00
        </div>

        <h2 class="font-bold mt-2">Prijs:&nbsp; €92,50</h2>

{{--        <div class="mb-2 mt-8">--}}
{{--            <aclass="border-black border-2 p-2">Boeken</a>--}}
{{--        </div>--}}

        <x-nav-link @class("mb-2 mt-8") :href="route('eigenticketsoverzichtklant')" :active="request()->routeIs('eigenticketsoverzichtklant')">
            {{ __('Boeken') }}
        </x-nav-link>

    </div>



</x-app-layout>
