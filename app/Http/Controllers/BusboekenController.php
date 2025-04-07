<?php

namespace App\Http\Controllers;

use App\Models\Busboeken;
use App\Providers\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BusboekenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Haal alle busboekingen op die de ingelogde gebruiker nog niet heeft geboekt
        $busboekingen = Busboeken::whereDoesntHave('users', function ($query) {
            $query->where('user_id', Auth::id());
        })->get();

        return view('overzichtbeheer', compact('busboekingen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Vervang de komma door een punt en cast naar float
        $prijs = floatval(str_replace(",", ".", $request->input('Prijs')));

        // Maak de nieuwe busboeking aan
        Busboeken::create([
            'Festival_naam' => $request->input('Festival_naam'),
            'Land_van_vertrek_heen' => $request->input('Land_van_vertrek_heen'),
            'Stad_van_vertrek_heen' => $request->input('Stad_van_vertrek_heen'),
            'Adres_opstaplocatie_heen' => $request->input('Adres_opstaplocatie_heen'),
            'Vertrekdatum_heenreis' => $request->input('Vertrekdatum_heenreis'),
            'Vertrektijd_heenreis' => $request->input('Vertrektijd_heenreis'),
            'Aankomstdatum_heenreis' => $request->input('Aankomstdatum_heenreis'),
            'Duur_busrit_heen' => $request->input('Duur_busrit_heen'),
            'Aankomsttijd_heenreis' => $request->input('Aankomsttijd_heenreis'),
            'Beschrijving_opstaplocatie_heen' => $request->input('Beschrijving_opstaplocatie_heen'),
            'Beschrijving_aankomstlocatie_heen' => $request->input('Beschrijving_aankomstlocatie_heen'),
            'Land_van_vertrek_terug' => $request->input('Land_van_vertrek_terug'),
            'Stad_van_vertrek_terug' => $request->input('Stad_van_vertrek_terug'),
            'Adres_opstaplocatie_terug' => $request->input('Adres_opstaplocatie_terug'),
            'Vertrekdatum_terugreis' => $request->input('Vertrekdatum_terugreis'),
            'Vertrektijd_terugreis' => $request->input('Vertrektijd_terugreis'),
            'Aankomstdatum_terugreis' => $request->input('Aankomstdatum_terugreis'),
            'Aankomsttijd_terugreis' => $request->input('Aankomsttijd_terugreis'),
            'Duur_busrit_terug' => $request->input('Duur_busrit_terug'),
            'Beschrijving_opstaplocatie_terug' => $request->input('Beschrijving_opstaplocatie_terug'),
            'Beschrijving_aankomstlocatie_terug' => $request->input('Beschrijving_aankomstlocatie_terug'),
            'Punten' => $request->input('Punten'),
            'Prijs' => $prijs,  // Hier gebruiken we de geformatteerde numerieke prijs
        ]);

        return redirect()->route('overzichtbeheerder');
    }

    /**
     * Display the specified resource.
     */
    public function show($bus_id)
    {
        // Haal de busboeking op, inclusief de prijs
        $busboeking = Busboeken::findOrFail($bus_id);

        // Debug de prijs
        ($busboeking->prijs); // Dit zou de prijs moeten tonen

        // Geef de busboeking mee naar de view
        return view('detailpaginaticketboeken', compact('busboeking'));
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $busboeking = Busboeken::findOrFail($id);
        return view('editbeheerder', compact('busboeking'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Haal de busboeking op
        $busboeking = Busboeken::findOrFail($id);

        // Vervang de komma door een punt en cast naar float
        $prijs = floatval(str_replace(",", ".", $request->input('Prijs')));

        // Werk de busboeking bij met de nieuwe gegevens
        $busboeking->update([
            'Festival_naam' => $request->input('Festival_naam'),
            'Land_van_vertrek_heen' => $request->input('Land_van_vertrek_heen'),
            'Stad_van_vertrek_heen' => $request->input('Stad_van_vertrek_heen'),
            'Adres_opstaplocatie_heen' => $request->input('Adres_opstaplocatie_heen'),
            'Vertrekdatum_heenreis' => $request->input('Vertrekdatum_heenreis'),
            'Vertrektijd_heenreis' => $request->input('Vertrektijd_heenreis'),
            'Aankomstdatum_heenreis' => $request->input('Aankomstdatum_heenreis'),
            'Duur_busrit_heen' => $request->input('Duur_busrit_heen'),
            'Aankomsttijd_heenreis' => $request->input('Aankomsttijd_heenreis'),
            'Beschrijving_opstaplocatie_heen' => $request->input('Beschrijving_opstaplocatie_heen'),
            'Beschrijving_aankomstlocatie_heen' => $request->input('Beschrijving_aankomstlocatie_heen'),
            'Land_van_vertrek_terug' => $request->input('Land_van_vertrek_terug'),
            'Stad_van_vertrek_terug' => $request->input('Stad_van_vertrek_terug'),
            'Adres_opstaplocatie_terug' => $request->input('Adres_opstaplocatie_terug'),
            'Vertrekdatum_terugreis' => $request->input('Vertrekdatum_terugreis'),
            'Vertrektijd_terugreis' => $request->input('Vertrektijd_terugreis'),
            'Aankomstdatum_terugreis' => $request->input('Aankomstdatum_terugreis'),
            'Aankomsttijd_terugreis' => $request->input('Aankomsttijd_terugreis'),
            'Duur_busrit_terug' => $request->input('Duur_busrit_terug'),
            'Beschrijving_opstaplocatie_terug' => $request->input('Beschrijving_opstaplocatie_terug'),
            'Beschrijving_aankomstlocatie_terug' => $request->input('Beschrijving_aankomstlocatie_terug'),
            'Punten' => $request->input('Punten'),
            'Prijs' => $prijs,  // Update met de geformatteerde numerieke prijs
        ]);

        return redirect()->route('overzichtbeheerder');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $busboeking = Busboeken::findOrFail($id);
        $busboeking->delete();
        return redirect()->route('overzichtbeheerder');
    }
}
