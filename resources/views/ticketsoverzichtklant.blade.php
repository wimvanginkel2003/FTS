<x-app-layout>
  <x-weergaven-punten>
  </x-weergaven-punten>

    <div class="font-bold m-2 mt-8">
        <h1>De te boeken busreisen</h1>

    </div>

    <div class="mt-4 m-2 p-6 mb-6 bg-white shadow-md rounded-2xl ">

        <div class="flex justify-between flex-col">

            <div class="flex justify-row justify-center">
                <h2 class="font-bold text-2xl"> Utrecht, Nederland</h2>
            </div>

            <div class="flex items-center justify-between w-full">
                <!-- Links: 16-03-2025 -->
                <div class="flex flex-col items-center">
                    <h2 class="text-xs mb-1">16-03-2025</h2>
                    <h2 class="text-xs">04:00  <i class="fa-solid fa-bus"></i>  09:00</h2>
                </div>

                <!-- Cirkeltje met pijlen -->
                <div class="flex items-center justify-center relative w-20 h-20">
                    <i class="fa-regular fa-circle text-black text-6xl absolute"></i>
                    <div class="flex items-center justify-center">
                        <i class="fa-solid fa-arrow-down text-black mx-1"></i>
                        <i class="fa-solid fa-arrow-up text-black mx-1"></i>
                    </div>
                </div>

                <!-- Rechts: 12-03-2025 -->
                <div class="flex flex-col items-center">
                    <h2 class="text-xs mb-1">20-03-2025</h2>
                    <h2 class="text-xs">10:00 <i class="fa-solid fa-bus"></i> 15:00</h2>
                </div>
            </div>




            <div class="flex justify-row justify-center">
                <h2 class="font-bold text-2xl"> We Love Green, Parijs</h2>
            </div>

        </div>

        <div class="flex justify-between">
        <h2 class="mt-6">€55,00</h2>
            <x-nav-link @class("mb-2 mt-6") :href="route('eigenticketsoverzichtklant')" :active="request()->routeIs('eigenticketsoverzichtklant')">
                {{ __('Meer informatie') }}
            </x-nav-link>

        </div>


    </div>

    <div class="mt-4 m-2 p-6 mb-6 bg-white shadow-md rounded-2xl ">

        <div class="flex justify-between flex-col">

            <div class="flex justify-row justify-center">
                <h2 class="font-bold text-2xl"> Berlijn, Duitsland</h2>
            </div>

            <div class="flex items-center justify-between w-full">
                <!-- Links: 16-03-2025 -->
                <div class="flex flex-col items-center">
                    <h2 class="text-xs mb-1">04-06-2025</h2>
                    <h2 class="text-xs">04:00  <i class="fa-solid fa-bus"></i>  19:00</h2>
                </div>

                <!-- Cirkeltje met pijlen -->
                <div class="flex items-center justify-center relative w-20 h-20">
                    <i class="fa-regular fa-circle text-black text-6xl absolute"></i>
                    <div class="flex items-center justify-center">
                        <i class="fa-solid fa-arrow-down text-black mx-1"></i>
                        <i class="fa-solid fa-arrow-up text-black mx-1"></i>
                    </div>
                </div>

                <!-- Rechts: 12-03-2025 -->
                <div class="flex flex-col items-center">
                    <h2 class="text-xs mb-1">09-06-2025</h2>
                    <h2 class="text-xs">05:00 <i class="fa-solid fa-bus"></i> 22:00</h2>
                </div>
            </div>




            <div class="flex justify-row justify-center">
                <h2 class="font-bold text-2xl"> Field Day, Londen</h2>
            </div>

        </div>

        <div class="flex justify-between">
            <h2 class="mt-6">€70,00</h2>
            <x-nav-link @class("mb-2 mt-6") :href="route('eigenticketsoverzichtklant')" :active="request()->routeIs('eigenticketsoverzichtklant')">
                {{ __('Meer informatie') }}
            </x-nav-link>

        </div>









</x-app-layout>
