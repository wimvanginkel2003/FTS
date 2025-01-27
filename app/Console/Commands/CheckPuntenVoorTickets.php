<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Models\Busboeken;
use Carbon\Carbon;

class CheckPuntenVoorTickets extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:check-punten-voor-tickets';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Voegt punten toe aan gebruikers als hun busreis binnen 2 dagen plaatsvindt en reset de punten te goed';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Haal alle busboekingen op die binnen 2 dagen plaatsvinden
        $busboekingen = Busboeken::where('Vertrekdatum_heenreis', '<=', now()->addDays(2))
            ->where('Vertrekdatum_heenreis', '>=', now())
            ->get();

        // Voeg punten toe aan de gebruikers die deze boekingen hebben
        foreach ($busboekingen as $busboeking) {
            $user = $busboeking->user; // Haal de gebruiker van deze busboeking

            // Controleer of de gebruiker punten te goed heeft
            if ($user->punten_te_goed > 0) {
                // Voeg de punten toe aan de gebruiker
                $user->punten += $user->punten_te_goed;

                // Zet de punten te goed kolom naar 0 nadat de punten zijn toegevoegd
                $user->punten_te_goed = 0;

                // Sla de gebruiker op
                $user->save();

                // Informatie weergeven in de console
                $this->info("Punten toegevoegd voor gebruiker {$user->id}. Nieuwe punten: {$user->punten}");
            }
        }

        $this->info('Punten zijn succesvol toegevoegd voor gebruikers met busboekingen binnen 2 dagen.');
    }
}




