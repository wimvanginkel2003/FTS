<x-app-layout>


    <!-- Alleen zichtbaar voor admins: CRUD-functionaliteit -->
    @can('is-admin')
        <div class="mt-4 m-2 p-6 mb-6 bg-white shadow-md rounded-2xl sm:w-1/2">
            <a href="{{ route('creëercouponbeheerder') }}" class="btn btn-primary">Nieuwe Coupon Toevoegen</a>
        </div>
    @endcan

    @can('is-customer')
        <div class="mt-4 m-2 px-6 rounded-2xl sm:w-1/2">
            <h1 class="font-bold text-indigo-900">Beschikbare Coupons</h1>
            <p class="text-indigo-900">Bekijk hier je beschikbare coupons en wissel je punten in.</p>
            <!-- Voeg het aantal punten van de ingelogde gebruiker toe -->
            <p class="text-indigo-900">Je hebt momenteel {{ auth()->user()->punten }} punten.</p>
        </div>
    @endcan

        @can('is-customer')
            <!-- Actieve Coupons (al ontgrendeld) -->
            <div class="mt-2 p-6    rounded-2xl sm:w-1/2">
                <h2 class="font-semibold text-indigo-900">Actieve Coupons</h2>
                @foreach ($userCoupons as $coupon)
                    <div class="mt-4 p-6 mb-6 border-2 bg-white rounded-2xl">
                        <h3 class="font-semibold text-lg">{{ $coupon->soort_eten }}</h3>
                        <p>{{ $coupon->bedrijf }}</p>
                        <p>Punten: {{ $coupon->punten }}</p>
                        <p>Code: <strong>{{ $coupon->pivot->code }}</strong></p>
                        <p>Vervalt op: {{ \Carbon\Carbon::parse($coupon->pivot->code_verval)->format('d-m-Y H:i') }}</p>
                    </div>
                @endforeach

                <!-- Als er geen actieve coupons zijn -->
                @if ($userCoupons->isEmpty())
                    <p class="text-gray-500">Je hebt op dit moment geen actieve coupons.</p>
                @endif
            </div>
        @endcan

    @can('is-customer')
        <div class=" px-6 mb-6 rounded-2xl sm:w-1/2 ">
            <h2 class="font-semibold text-indigo-900">Beschikbare Coupons om te Ontgrendelen</h2>
            @foreach ($coupons as $coupon)
                <div class="mt-4 p-6 mb-6 border-2 bg-white
                    {{ auth()->user()->punten >= $coupon->punten ? 'border-green-700' : 'border-red-600' }} rounded-2xl">
                    <h3 class="font-semibold text-lg">{{ $coupon->soort_eten }}</h3>
                    <p>{{ $coupon->bedrijf }}</p>
                    <p>Punten: {{ $coupon->punten }}</p>

                    <!-- Controleer of de gebruiker genoeg punten heeft -->
                    @if (auth()->user()->punten >= $coupon->punten)
                        <!-- Toon de knop als de gebruiker genoeg punten heeft -->
                        <form action="{{ route('ontgrendelCoupon', $coupon->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="w-full bg-green-700 p-2 font-bold text-white rounded-xl px-5 flex justify-center">
                                Activeer Coupon
                            </button>
                        </form>
                    @else
                        <!-- Toon een melding als de gebruiker niet genoeg punten heeft -->
                        <p class="text-gray-500 mt-2">Niet genoeg punten om deze coupon te ontgrendelen.</p>
                    @endif
                </div>
            @endforeach
        </div>
    @endcan

    <!-- CRUD-functionaliteit voor Admins -->
    @can('is-admin')
        <div class="bg-white mt-4 m-2 p-6 mb-6 shadow-md rounded-2xl sm:w-1/2">
            <h2 class="font-semibold text-indigo-700">Beheer Coupons</h2>
            @foreach ($coupons as $coupon)
                <div class="mt-4 border-b border-gray-200 pb-4">
                    <h3>{{ $coupon->soort_eten }}</h3>
                    <p>{{ $coupon->bedrijf }}</p>
                    <p>Punten: {{ $coupon->punten }}</p>
                    <a href="{{ route('coupons.edit', $coupon->id) }}" class="btn btn-warning">Bewerken</a>
                    <form action="{{ route('coupons.destroy', $coupon->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Weet je zeker dat je deze coupon wilt verwijderen?')">Verwijderen</button>
                    </form>
                </div>
            @endforeach
        </div>
    @endcan

</x-app-layout>










