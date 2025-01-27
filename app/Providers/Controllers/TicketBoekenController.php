<?php

namespace App\Providers\Controllers;

use App\Models\Busboeken;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class TicketBoekenController extends Controller
{
    /**
     * Toon alle geboekte tickets van de ingelogde gebruiker.
     */
    public function eigentickets()
    {
        // Haal de ingelogde gebruiker op
        $user = Auth::user();

        // Haal de geboekte tickets van de ingelogde gebruiker op
        $tickets = $user->busboekens;

        // Geef de tickets weer in de view
        return view('eigenticketsoverzichtklant', compact('tickets'));
    }

    /**
     * Boek een ticket voor de ingelogde gebruiker.
     */
    public function boekTicket($busboekingId)
    {
        $user = auth()->user();
        $busboeking = Busboeken::findOrFail($busboekingId);

        // Haal de vertrekdatum van de reis en het huidige moment op
        $reisDatum = Carbon::parse($busboeking->Vertrekdatum_heenreis);
        $huidigeDatum = now();

        // Debugging (optioneel): Log de datums en tijden voor controle
        \Log::info("Reisdatum: {$reisDatum}");
        \Log::info("Huidige datum + 48 uur: {$huidigeDatum->copy()->addHours(48)}");

        // Controleer of de reisdatum verder dan 48 uur in de toekomst ligt
        if ($reisDatum->greaterThan($huidigeDatum->addHours(48))) {
            // Voeg punten toe aan punten_te_goed
            $user->punten_te_goed += $busboeking->Punten;
        } else {
            // Voeg punten direct toe als de reis binnen 48 uur plaatsvindt
            $user->punten += $busboeking->Punten;
        }

        // Sla de wijzigingen in de gebruiker op
        $user->save();

        // Koppel de busboeking aan de gebruiker
        $user->busboekens()->attach($busboeking);

        return redirect()->route('eigenticketsoverzichtklant');
    }

    public function verwijderTicket($busboekingId)
    {
        $user = Auth::user();
        $busboeking = Busboeken::findOrFail($busboekingId);

        // Verkrijg de vertrekdatum van de busreis
        $reisDatum = Carbon::parse($busboeking->Vertrekdatum_heenreis);
        $nu = now();
        $tweeDagenVanafNu = $nu->copy()->addHours(48);

        // Controleer of de reisdatum binnen 48 uur plaatsvindt
        if ($reisDatum->lte($tweeDagenVanafNu)) {
            // Als de reis binnen 48 uur valt, geef dan een foutmelding
            return redirect()->route('eigenticketsoverzichtklant')
                ->with('error', 'Je kunt dit ticket niet annuleren, omdat de busreis al binnen 48 uur plaatsvindt.')
                ->with('ticket_id', $busboekingId); // Geef de ticket ID mee zodat we weten voor welk ticket de foutmelding is
        }

        // Verwijder de busboeking uit de relatie van de gebruiker
        $user->busboekens()->detach($busboekingId);

        // Pas het aantal punten dat de gebruiker te goed heeft aan
        $user->punten_te_goed -= $busboeking->Punten;
        $user->save();

        // Redirect naar de overzichtspagina met een succesbericht
        return redirect()->route('eigenticketsoverzichtklant')
            ->with('success', 'Ticket succesvol geannuleerd!');
    }


    /**
     * Controleer of punten_te_goed moeten worden overgeschreven naar punten.
     * Aan te roepen bij login.
     */
    public function checkPuntenOverdracht()
    {
        $user = Auth::user();
        $nu = now();

        foreach ($user->busboekens as $busboeking) {
            $reisDatum = Carbon::parse($busboeking->Vertrekdatum_heenreis);

            // Controleer of de reis binnen 48 uur plaatsvindt
            if ($reisDatum->lte($nu->copy()->addHours(48)) && $busboeking->puntenOvergedragen == false) {
                // Verplaats punten_te_goed naar punten
                $user->punten += $busboeking->Punten;
                $user->punten_te_goed -= $busboeking->Punten;

                // Markeer de punten als overgedragen
                $busboeking->update(['puntenOvergedragen' => true]);
            }
        }

        $user->save();
    }
}

