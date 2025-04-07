<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use App\Providers\Controllers\Controller;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    // Toon alle coupons
    public function index()
    {
        // Haal alle beschikbare coupons op (die nog ontgrendeld kunnen worden)
        $coupons = Coupon::all();

        // Haal de actieve coupons op voor de ingelogde gebruiker
        $userCoupons = auth()->user()->coupons()
            ->wherePivot('code_verval', '>', now()) // Alleen niet-vervallen codes
            ->withPivot('code', 'gebruik_datum', 'code_verval') // Haal benodigde pivot data mee
            ->orderBy('user_coupons.code_verval', 'desc') // Sorteer op vervaldatum, nieuwste eerst
            ->get(); // Haal alle actieve coupons op, zonder filtering op unieke ID's

        return view('puntenklant', compact('coupons', 'userCoupons'));
    }



    // Toon formulier om een nieuwe coupon te maken
    public function create()
    {
        return view('creëercouponbeheerder'); // Toon de formulier view voor het maken van een nieuwe coupon
    }

    // Sla de nieuwe coupon op in de database
    public function store(Request $request)
    {
        // Valideer de inkomende gegevens
        $request->validate([
            'soort_eten' => 'required|string|max:255',
            'bedrijf' => 'required|string|max:255',
            'punten' => 'required|integer',
        ]);

        // Maak een nieuwe coupon aan
        Coupon::create($request->all());

        // Redirect naar de index van coupons met een succesbericht
        return redirect()->route('coupons.index')->with('success', 'Coupon succesvol toegevoegd');
    }

    // Toon formulier om een bestaande coupon te bewerken
    public function edit(Coupon $coupon)
    {
        return view('editcouponbeheerder', compact('coupon')); // Toon de formulier view om een coupon bij te werken
    }

    // Werk de coupon bij in de database
    public function update(Request $request, Coupon $coupon)
    {
        // Valideer de inkomende gegevens
        $request->validate([
            'soort_eten' => 'required|string|max:255',
            'bedrijf' => 'required|string|max:255',
            'punten' => 'required|integer',
        ]);

        // Werk de coupon bij
        $coupon->update($request->all());

        // Redirect naar de index van coupons met een succesbericht
        return redirect()->route('coupons.index')->with('success', 'Coupon succesvol bijgewerkt');
    }

    // Verwijder een coupon
    public function destroy(Coupon $coupon)
    {
        // Verwijder de coupon
        $coupon->delete();

        // Redirect naar de index van coupons met een succesbericht
        return redirect()->route('coupons.index')->with('success', 'Coupon succesvol verwijderd');
    }

    public function ontgrendelCoupon(Request $request, $couponId)
    {
        $user = auth()->user(); // Haal de huidige gebruiker op
        $coupon = Coupon::findOrFail($couponId); // Haal de coupon op

        // Controleer of de gebruiker genoeg punten heeft
        if ($user->punten < $coupon->punten) {
            return back()->with('error', 'Je hebt niet genoeg punten om deze coupon te ontgrendelen.');
        }

        // Verlaag het aantal punten van de gebruiker
        $user->punten -= $coupon->punten; // Trek de punten af
        $user->save(); // Sla de gewijzigde punten op

        // Genereer een unieke 4-cijferige code voor de coupon
        $code = sprintf('%04d', random_int(0, 9999)); // Willekeurige 4-cijferige code

        // Stel de vervaldatum in op 15 minuten na het ontgrendelen
        $vervaltOp = now()->addMinutes(15); // Vervaldatum: 15 minuten na nu

        // Voeg de ontgrendelde coupon toe aan de database (pivot tabel)
        $user->coupons()->attach($couponId, [
            'code' => $code,
            'code_verval' => $vervaltOp, // 15 minuten na nu
            'gebruik_datum' => now(),   // De datum waarop de coupon werd gebruikt
        ]);

        // Redirect naar de vorige pagina met succesbericht
        return back()->with('success', 'Coupon succesvol ontgrendeld!');
    }

}
