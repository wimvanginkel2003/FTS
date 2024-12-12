<x-app-layout>

    <div class="mt-4 mb-6">
        <x-nav-link  :href="route('creëerbeheerder')" :active="request()->routeIs('creëerbeheerder')">
            {{ __('Create') }}
        </x-nav-link>
    </div>

    <div class="font-bold m-2 mt-8">
        <h1>De te boeken busreisen</h1>

    </div>

    <div class="mt-4 border-4 border-black m-2 p-2">

        <div class="flex justify-center font-bold">
            <h2>Utrecht, Nederland &nbsp; -> &nbsp; We Love Green </h2>
        </div>


        {{--        <div class="mb-2 mt-8">--}}
        {{--        <a href="boeken" class="border-black border-2 p-2">Boeken</a>--}}
        {{--        </div>--}}

        <div class="flex justify-end">
        <x-nav-link  :href="route('editbeheerder')" :active="request()->routeIs('editbeheerder')">
            {{ __('Edit') }}
        </x-nav-link>
        </div>

    </div>


    <div class="mt-4 border-4 border-black m-2 p-2">

        <div class="flex justify-center font-bold">
            <h2>Berlijn &nbsp; -> &nbsp; Field Day</h2>
        </div>


        {{--        <div class="mb-2 mt-8">--}}
        {{--        <a href="boeken" class="border-black border-2 p-2">Boeken</a>--}}
        {{--        </div>--}}

        <div class="flex justify-end">
            <x-nav-link  :href="route('editbeheerder')" :active="request()->routeIs('editbeheerder')">
                {{ __('Edit') }}
            </x-nav-link>
        </div>

    </div>



</x-app-layout>
