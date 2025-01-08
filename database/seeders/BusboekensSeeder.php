<?php

namespace Database\Seeders;

use App\Models\busboeken;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;




class BusboekensSeeder extends Seeder
{
    public function run(): void
    {
        busboeken::create([
            'Festival_naam' => 'Tomorrowland',
            'Land_van_vertrek_heen' => 'Nederland',
            'Stad_van_vertrek_heen' => 'Amsterdam',
            'Adres_opstaplocatie_heen' => 'Centraal Station, Amsterdam',
            'Vertrekdatum_heenreis' => '2025-07-20',
            'Vertrektijd_heenreis' => '08:00',
            'Aankomstdatum_heenreis' => '2025-07-20',
            'Aankomsttijd_heenreis' => '12:00',
            'Duur_busrit_heen' => '04:00',
            'Beschrijving_opstaplocatie_heen' => 'Hoofdingang Centraal Station Amsterdam',
            'Beschrijving_aankomstlocatie_heen' => 'Tomorrowland Ingang Noord',
            'Land_van_vertrek_terug' => 'België',
            'Stad_van_vertrek_terug' => 'Boom',
            'Adres_opstaplocatie_terug' => 'Tomorrowland Terrein Zuid',
            'Vertrekdatum_terugreis' => '2025-07-23',
            'Vertrektijd_terugreis' => '10:00',
            'Aankomstdatum_terugreis' => '2025-07-23',
            'Aankomsttijd_terugreis' => '14:00',
            'Duur_busrit_terug' => '04:00',
            'Beschrijving_opstaplocatie_terug' => 'Hoofduitgang Tomorrowland',
            'Beschrijving_aankomstlocatie_terug' => 'Centraal Station Amsterdam',
            'Punten' => 100,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        busboeken::create([
            'Festival_naam' => 'Sziget Festival',
            'Land_van_vertrek_heen' => 'Nederland',
            'Stad_van_vertrek_heen' => 'Utrecht',
            'Adres_opstaplocatie_heen' => 'Jaarbeursplein, Utrecht',
            'Vertrekdatum_heenreis' => '2025-08-10',
            'Vertrektijd_heenreis' => '07:00',
            'Aankomstdatum_heenreis' => '2025-08-10',
            'Aankomsttijd_heenreis' => '17:00',
            'Duur_busrit_heen' => '10:00',
            'Beschrijving_opstaplocatie_heen' => 'Jaarbeursplein naast station Utrecht Centraal',
            'Beschrijving_aankomstlocatie_heen' => 'Sziget Festival Hoofdingang',
            'Land_van_vertrek_terug' => 'Hongarije',
            'Stad_van_vertrek_terug' => 'Boedapest',
            'Adres_opstaplocatie_terug' => 'Sziget Festival Terrein',
            'Vertrekdatum_terugreis' => '2025-08-17',
            'Vertrektijd_terugreis' => '09:00',
            'Aankomstdatum_terugreis' => '2025-08-17',
            'Aankomsttijd_terugreis' => '19:00',
            'Duur_busrit_terug' => '10:00',
            'Beschrijving_opstaplocatie_terug' => 'Hoofduitgang Sziget Festival',
            'Beschrijving_aankomstlocatie_terug' => 'Jaarbeursplein naast station Utrecht Centraal',
            'Punten' => 150,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}

