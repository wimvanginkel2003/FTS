<x-app-layout>

    <div class="font-bold m-2 mt-8 text-indigo-900 sm:w-2/3 sm:text-4xl">
        <h1>Je geboekte busreisen</h1>
    </div>

    @foreach ($tickets as $ticket)
        <div class="mt-4 m-4 p-6 mb-6 bg-white shadow-md rounded-2xl text-indigo-900 sm:w-2/3 ">


            <div class="flex justify-between flex-col">
                <div class="flex justify-row justify-center">
                    <h2 class="font-bold text-2xl text-indigo-900">{{ $ticket->Stad_van_vertrek_heen }}</h2>
                </div>

                <div class="flex items-center justify-between w-full">
                    <div class="flex flex-col items-center">
                        <h2 class="text-xs mb-1 text-indigo-900 md:text-xl">{{ \Carbon\Carbon::parse($ticket->Vertrekdatum_heenreis)->format('d-m-Y') }}</h2>
                        <h2 class="text-xs text-indigo-900 md:text-xl">
                            {{ \Carbon\Carbon::parse($ticket->Vertrektijd_heenreis)->format('H:i') }}
                            <i class="fa-solid fa-bus md:text-xl"></i>
                            {{ \Carbon\Carbon::parse($ticket->Aankomsttijd_heenreis)->format('H:i') }}
                        </h2>
                    </div>

                    <div class="flex items-center justify-center relative w-20 h-20">
                        <i class="fa-regular fa-circle text-indigo-900 text-6xl absolute"></i>
                        <div class="flex items-center justify-center">
                            <i class="fa-solid fa-arrow-down text-indigo-900 mx-1"></i>
                            <i class="fa-solid fa-arrow-up text-indigo-900 mx-1"></i>
                        </div>
                    </div>

                    <div class="flex flex-col items-center">
                        <h2 class="text-xs mb-1 text-indigo-900 md:text-xl">{{ \Carbon\Carbon::parse($ticket->Aankomstdatum_heenreis)->format('d-m-Y') }}</h2>
                        <h2 class="text-xs text-indigo-900 md:text-xl">
                            {{ \Carbon\Carbon::parse($ticket->Vertrektijd_terugreis)->format('H:i') }}
                            <i class="fa-solid fa-bus md:text-xl"></i>
                            {{ \Carbon\Carbon::parse($ticket->Aankomsttijd_terugreis)->format('H:i') }}
                        </h2>
                    </div>
                </div>

                <div class="flex justify-row justify-center">
                    <h2 class="font-bold text-2xl text-indigo-900">{{ $ticket->Festival_naam }}</h2>
                </div>
            </div>

            <div class="flex justify-between">

                <!-- Annuleer Ticket Knop -->
                <form action="{{ route('verwijder-ticket', $ticket->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-600 text-white py-2 px-4 rounded hover:bg-red-500 transition">
                        Annuleer Ticket
                    </button>
                </form>

                @if (session('error') && session('ticket_id') == $ticket->id)
                    <div class="alert alert-danger mt-2">
                        {{ session('error') }}
                    </div>
                @endif

                {{--                 Succesmelding als het ticket succesvol geannuleerd is --}}
                @if (session('success') && session('ticket_id') == $ticket->id)
                    <div class="alert alert-success mb-4">
                        {{ session('success') }}
                    </div>
                @endif


                <!-- Details Knop -->
                <div>
                    <button
                        type="button"
                        onclick="window.location.href='{{ route('detailpaginaticketboeken', ['busboeken' => $ticket->id]) }}'"
                        class="bg-indigo-600 text-white py-2 px-4 rounded hover:bg-indigo-700 transition"
                    >
                        Details
                    </button>
                </div>

{{--                 Foutmelding als het ticket binnen 48 uur valt --}}


            </div>

        </div>
    @endforeach

{{--    @if (session('success'))--}}
{{--        <div class="alert alert-success">--}}
{{--            {{ session('success') }}--}}
{{--        </div>--}}
{{--    @endif--}}

</x-app-layout>
