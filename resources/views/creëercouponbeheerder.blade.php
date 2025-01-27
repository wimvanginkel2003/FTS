<x-app-layout>
    <div class="w-full sm:w-1/2 mt-10 mx-auto">
        <div class="m-2 mt-4 sm:w-1/2">
            <h1 class="font-bold text-indigo-900 text-center sm:text-left">Nieuwe Coupon Toevoegen</h1>
        </div>

        <form action="{{ route('coupons.store') }}" method="POST">
            @csrf
            <div class="m-2">
                <label for="soort_eten" class="block text-sm font-medium text-gray-700">Soort Eten</label>
                <input type="text" name="soort_eten" class="w-full sm:w-1/2 form-input" required>
            </div>

            <div class="m-2">
                <label for="bedrijf" class="block text-sm font-medium text-gray-700">Bedrijf</label>
                <input type="text" name="bedrijf" class="w-full sm:w-1/2 form-input" required>
            </div>

            <div class="m-2">
                <label for="punten" class="block text-sm font-medium text-gray-700">Punten</label>
                <input type="number" name="punten" class="w-full sm:w-1/2 form-input" required>
            </div>

            <div class="m-2 mt-4 sm:text-left">
                <button type="submit" class="bg-blue-500 text-white pl-4 pr-4 py-2 rounded mt-4">Opslaan</button>
            </div>
        </form>
    </div>
</x-app-layout>

