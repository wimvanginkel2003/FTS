<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class ResetPuntenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Haal alle gebruikers op
        $users = User::all();

        // Zet de punten van elke gebruiker op 0
        foreach ($users as $user) {
            $user->punten = 0;
            $user->save(); // Sla de wijziging op
        }

        echo "Alle punten zijn succesvol gereset.\n";
    }
}
