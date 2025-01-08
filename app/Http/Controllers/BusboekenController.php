<?php

namespace App\Http\Controllers;

use App\Models\busboeken;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BusboekenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        busboeken::create([
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
        ]);


        return redirect()->route('overzichtbeheerder');
    }

    /**
     * Display the specified resource.
     */
    public function show(busboeken $busboeken)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(busboeken $busboeken)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, busboeken $busboeken)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(busboeken $busboeken)
    {
        //
    }
}
