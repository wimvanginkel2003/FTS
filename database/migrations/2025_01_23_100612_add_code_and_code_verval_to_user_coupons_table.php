<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Models\Busboeken;
use Carbon\Carbon;

class AddPuntenForUpcomingTrips extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'punten:add';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Voeg punten toe voor busboeking als de reis binnen 2 dagen plaatsvindt';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        // Haal de huidige datum op
        $huidigeDatum = Carbon::now();

        // Haal alle busboekingen op die binnen 2 dagen plaatsvinden
        $busboekingen = Busboeken::where('Vertrekdatum_heenreis', '>=', $huidigeDatum)
            ->where('Vertrekdatum_heenreis', '<=', $huidigeDatum->addDays(2))
            ->get();

        foreach ($busboekingen as $busboeking) {
            // Haal de gebruiker van deze busboeking (aangenomen dat een busboeking slechts 1 gebruiker heeft)
            $user = $busboeking->user; // Dit kan aangepast worden naar de juiste relatie

            // Controleer of de punten nog niet zijn toegevoegd
            if ($user->punten_toegevoegd == false) {
                // Voeg de punten toe aan de gebruiker
                $user->punten += $busboeking->Punten;

                // Markeer dat de punten zijn toegevoegd
                $user->punten_toegevoegd = true;
                $user->save(); // Sla de wijziging van de gebruiker op

                $this->info("Punten toegevoegd voor gebruiker {$user->id}.");
            }
        }

        $this->info('Punten zijn succesvol toegevoegd voor tickets die binnen 2 dagen plaatsvinden.');
    }
}

