<x-app-layout>

    <div class="w-1/2 mt-10">
            <div class="m-2 mt-4 sm:w-1/2">
                <h1 class="font-bold text-indigo-900">Coupon Bewerken</h1>
            </div>

            <form action="{{ route('coupons.update', $coupon->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="m-2">
                    <label for="soort_eten" class="block text-sm font-medium text-gray-700">Soort Eten</label>
                    <input type="text" name="soort_eten" class="form-input w-1/2" value="{{ $coupon->soort_eten }}" required>
                </div>

                <div class="m-2">
                    <label for="bedrijf" class="block text-sm font-medium text-gray-700">Bedrijf</label>
                    <input type="text" name="bedrijf" class="form-input w-1/2 " value="{{ $coupon->bedrijf }}" required>
                </div>

                <div class="m-2">
                    <label for="punten" class="block text-sm font-medium text-gray-700">Punten</label>
                    <input type="number" name="punten" class="form-input w-1/2" value="{{ $coupon->punten }}" required>
                </div>

                <div class="m-2 mt-4">
                    <button type="submit" class="bg-blue-500 text-white pl-2  pr-2 py-2 rounded mt-4">Update</button>
                </div>
            </form>

    </div>
</x-app-layout>
