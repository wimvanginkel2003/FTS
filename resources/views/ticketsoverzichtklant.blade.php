<x-app-layout>
    <x-weergaven-punten>
    </x-weergaven-punten>

    <div class="font-bold m-4 mt-2 text-indigo-900 sm:w-2/3  sm:text-4xl">
        <h1>De te boeken busreisen</h1>
    </div>

    <div class="mt-4 m-4 p-6 mb-6 bg-white shadow-md rounded-2xl text-indigo-900 sm:w-2/3 ">

        <div class="flex justify-between flex-col">

            <div class="flex justify-row justify-center">
                <h2 class="font-bold text-2xl text-indigo-900"> Utrecht, Nederland</h2>
            </div>

            <div class="flex items-center justify-between w-full">
                <div class="flex flex-col items-center">
                    <h2 class="text-xs mb-1 text-indigo-900 md:text-xl">16-03-2025</h2>
                    <h2 class="text-xs text-indigo-900 md:text-xl">04:00  <i class="fa-solid fa-bus md:text-xl"></i>  09:00</h2>
                </div>

                <div class="flex items-center justify-center relative w-20 h-20">
                    <i class="fa-regular fa-circle text-indigo-900 text-6xl absolute"></i>
                    <div class="flex items-center justify-center">
                        <i class="fa-solid fa-arrow-down text-indigo-900 mx-1"></i>
                        <i class="fa-solid fa-arrow-up text-indigo-900 mx-1"></i>
                    </div>
                </div>

                <div class="flex flex-col items-center">
                    <h2 class="text-xs mb-1 text-indigo-900 md:text-xl">20-03-2025</h2>
                    <h2 class="text-xs text-indigo-900 md:text-xl">10:00 <i class="fa-solid fa-bus md:text-xl"></i> 15:00</h2>
                </div>
            </div>




            <div class="flex justify-row justify-center">
                <h2 class="font-bold text-2xl text-indigo-900"> We Love Green, Parijs</h2>
            </div>

        </div>

        <div class="flex justify-between">
            <h2 class="mt-6 text-indigo-900 font-bold">€55,00</h2>
            <x-nav-link @class("mb-2 mt-6") :href="route('detailpaginaticketboeken')" :active="request()->routeIs('detailpaginaticketboeken')">
                {{ __('Details') }}
            </x-nav-link>

        </div>


    </div>

    <div class="mt-4 m-4 p-6 mb-6 bg-white shadow-md rounded-2xl sm:w-2/3">

        <div class="flex justify-between flex-col">

            <div class="flex justify-row justify-center">
                <h2 class="font-bold text-2xl text-indigo-900"> Berlijn, Duitsland</h2>
            </div>

            <div class="flex items-center justify-between w-full">
                <!-- Links: 16-03-2025 -->
                <div class="flex flex-col items-center ">
                    <h2 class="text-xs mb-1 text-indigo-900 md:text-xl">04-06-2025</h2>
                    <h2 class="text-xs text-indigo-900 md:text-xl">04:00  <i class="fa-solid fa-bus text-indigo-900 md:text-xl"></i>  19:00</h2>
                </div>

                <div class="flex items-center justify-center relative w-20 h-20">
                    <i class="fa-regular fa-circle text-indigo-900 text-6xl absolute"></i>
                    <div class="flex items-center justify-center">
                        <i class="fa-solid fa-arrow-down text-indigo-900 mx-1"></i>
                        <i class="fa-solid fa-arrow-up text-indigo-900 mx-1"></i>
                    </div>
                </div>

                <div class="flex flex-col items-center">
                    <h2 class="text-xs mb-1 text-indigo-900 md:text-xl">09-06-2025</h2>
                    <h2 class="text-xs text-indigo-900 md:text-xl">05:00 <i class="fa-solid fa-bus text-indigo-900 md:text-xl"></i> 22:00</h2>
                </div>
            </div>




            <div class="flex justify-row justify-center">
                <h2 class="font-bold text-2xl text-indigo-900"> Field Day, Londen</h2>
            </div>

        </div>

        <div class="flex justify-between">


        </div>

    </div>









</x-app-layout>
