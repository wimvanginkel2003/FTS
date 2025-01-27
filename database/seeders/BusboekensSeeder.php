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
            'Festival_naam' => 'Tomorrowland Winter',
            'Land_van_vertrek_heen' => 'Nederland',
            'Stad_van_vertrek_heen' => 'Amsterdam',
            'Adres_opstaplocatie_heen' => 'Amsterdam Centraal, Stationsplein',
            'Vertrekdatum_heenreis' => '2025-01-31',
            'Vertrektijd_heenreis' => '08:00',
            'Aankomstdatum_heenreis' => '2025-01-31',
            'Aankomsttijd_heenreis' => '20:00',
            'Duur_busrit_heen' => '12:00',
            'Beschrijving_opstaplocatie_heen' => 'Centraal station Amsterdam',
            'Beschrijving_aankomstlocatie_heen' => 'Tomorrowland Winter ingang',
            'Land_van_vertrek_terug' => 'Frankrijk',
            'Stad_van_vertrek_terug' => 'Alpe d\'Huez',
            'Adres_opstaplocatie_terug' => 'Tomorrowland Winter Parkeerplaats',
            'Vertrekdatum_terugreis' => '2025-02-07',
            'Vertrektijd_terugreis' => '10:00',
            'Aankomstdatum_terugreis' => '2025-02-07',
            'Aankomsttijd_terugreis' => '22:00',
            'Duur_busrit_terug' => '12:00',
            'Beschrijving_opstaplocatie_terug' => 'Parkeerplaats naast het festival',
            'Beschrijving_aankomstlocatie_terug' => 'Centraal station Amsterdam',
            'Punten' => 150,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'prijs' => 30,
        ]);


        busboeken::create([
            'Festival_naam' => 'Ultra Music Festival',
            'Land_van_vertrek_heen' => 'Nederland',
            'Stad_van_vertrek_heen' => 'Rotterdam',
            'Adres_opstaplocatie_heen' => 'Rotterdam Centraal',
            'Vertrekdatum_heenreis' => '2025-02-01',
            'Vertrektijd_heenreis' => '06:30',
            'Aankomstdatum_heenreis' => '2025-02-01',
            'Aankomsttijd_heenreis' => '18:30',
            'Duur_busrit_heen' => '12:00',
            'Beschrijving_opstaplocatie_heen' => 'Bushalte voor Rotterdam Centraal',
            'Beschrijving_aankomstlocatie_heen' => 'Festival ingang Zuid',
            'Land_van_vertrek_terug' => 'Spanje',
            'Stad_van_vertrek_terug' => 'Barcelona',
            'Adres_opstaplocatie_terug' => 'Ultra Music Festival Terrein',
            'Vertrekdatum_terugreis' => '2025-02-05',
            'Vertrektijd_terugreis' => '10:00',
            'Aankomstdatum_terugreis' => '2025-02-05',
            'Aankomsttijd_terugreis' => '22:00',
            'Duur_busrit_terug' => '12:00',
            'Beschrijving_opstaplocatie_terug' => 'Parkeerplaats bij festival ingang',
            'Beschrijving_aankomstlocatie_terug' => 'Bushalte voor Rotterdam Centraal',
            'Punten' => 180,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'prijs' => 35,
        ]);

        busboeken::create([
            'Festival_naam' => 'Rock Werchter',
            'Land_van_vertrek_heen' => 'Nederland',
            'Stad_van_vertrek_heen' => 'Eindhoven',
            'Adres_opstaplocatie_heen' => 'Station Eindhoven',
            'Vertrekdatum_heenreis' => '2025-07-03',
            'Vertrektijd_heenreis' => '09:00',
            'Aankomstdatum_heenreis' => '2025-07-03',
            'Aankomsttijd_heenreis' => '12:00',
            'Duur_busrit_heen' => '3:00',
            'Beschrijving_opstaplocatie_heen' => 'Voorzijde station Eindhoven',
            'Beschrijving_aankomstlocatie_heen' => 'Hoofdingang Rock Werchter',
            'Land_van_vertrek_terug' => 'België',
            'Stad_van_vertrek_terug' => 'Werchter',
            'Adres_opstaplocatie_terug' => 'Festivalterrein Werchter',
            'Vertrekdatum_terugreis' => '2025-07-07',
            'Vertrektijd_terugreis' => '12:00',
            'Aankomstdatum_terugreis' => '2025-07-07',
            'Aankomsttijd_terugreis' => '15:00',
            'Duur_busrit_terug' => '3:00',
            'Beschrijving_opstaplocatie_terug' => 'Parkeerplaats voor festival ingang',
            'Beschrijving_aankomstlocatie_terug' => 'Voorzijde station Eindhoven',
            'Punten' => 120,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'prijs' => 25,
        ]);

        busboeken::create([
            'Festival_naam' => 'Lowlands',
            'Land_van_vertrek_heen' => 'Nederland',
            'Stad_van_vertrek_heen' => 'Den Haag',
            'Adres_opstaplocatie_heen' => 'Den Haag Centraal',
            'Vertrekdatum_heenreis' => '2025-08-14',
            'Vertrektijd_heenreis' => '10:00',
            'Aankomstdatum_heenreis' => '2025-08-14',
            'Aankomsttijd_heenreis' => '13:30',
            'Duur_busrit_heen' => '3:30',
            'Beschrijving_opstaplocatie_heen' => 'Voorzijde Den Haag Centraal',
            'Beschrijving_aankomstlocatie_heen' => 'Lowlands ingang',
            'Land_van_vertrek_terug' => 'Nederland',
            'Stad_van_vertrek_terug' => 'Biddinghuizen',
            'Adres_opstaplocatie_terug' => 'Lowlands terrein',
            'Vertrekdatum_terugreis' => '2025-08-18',
            'Vertrektijd_terugreis' => '11:00',
            'Aankomstdatum_terugreis' => '2025-08-18',
            'Aankomsttijd_terugreis' => '14:30',
            'Duur_busrit_terug' => '3:30',
            'Beschrijving_opstaplocatie_terug' => 'Festival parkeerplaats',
            'Beschrijving_aankomstlocatie_terug' => 'Voorzijde Den Haag Centraal',
            'Punten' => 150,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'prijs' => 40,
        ]);


        busboeken::create([
            'Festival_naam' => 'Pinkpop',
            'Land_van_vertrek_heen' => 'Nederland',
            'Stad_van_vertrek_heen' => 'Maastricht',
            'Adres_opstaplocatie_heen' => 'Maastricht Centraal Station',
            'Vertrekdatum_heenreis' => '2025-06-12',
            'Vertrektijd_heenreis' => '08:00',
            'Aankomstdatum_heenreis' => '2025-06-12',
            'Aankomsttijd_heenreis' => '18:00',
            'Duur_busrit_heen' => '10:00',
            'Beschrijving_opstaplocatie_heen' => 'Hoofdingang van Maastricht Centraal Station',
            'Beschrijving_aankomstlocatie_heen' => 'Pinkpop Festival Terrein',
            'Land_van_vertrek_terug' => 'Nederland',
            'Stad_van_vertrek_terug' => 'Landgraaf',
            'Adres_opstaplocatie_terug' => 'Pinkpop Terrein',
            'Vertrekdatum_terugreis' => '2025-06-14',
            'Vertrektijd_terugreis' => '12:00',
            'Aankomstdatum_terugreis' => '2025-06-14',
            'Aankomsttijd_terugreis' => '22:00',
            'Duur_busrit_terug' => '10:00',
            'Beschrijving_opstaplocatie_terug' => 'Hoofduitgang Pinkpop',
            'Beschrijving_aankomstlocatie_terug' => 'Maastricht Centraal Station',
            'Punten' => 150,
            'prijs' => 40,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        busboeken::create([
            'Festival_naam' => 'Awakenings',
            'Land_van_vertrek_heen' => 'Nederland',
            'Stad_van_vertrek_heen' => 'Amsterdam',
            'Adres_opstaplocatie_heen' => 'Amsterdam Sloterdijk Station',
            'Vertrekdatum_heenreis' => '2025-06-27',
            'Vertrektijd_heenreis' => '10:00',
            'Aankomstdatum_heenreis' => '2025-06-27',
            'Aankomsttijd_heenreis' => '18:00',
            'Duur_busrit_heen' => '8:00',
            'Beschrijving_opstaplocatie_heen' => 'Boven het station bij de parkeerplaats van Sloterdijk',
            'Beschrijving_aankomstlocatie_heen' => 'Awakenings Festival',
            'Land_van_vertrek_terug' => 'Nederland',
            'Stad_van_vertrek_terug' => 'Amsterdam',
            'Adres_opstaplocatie_terug' => 'Awakenings Festival',
            'Vertrekdatum_terugreis' => '2025-06-29',
            'Vertrektijd_terugreis' => '12:00',
            'Aankomstdatum_terugreis' => '2025-06-29',
            'Aankomsttijd_terugreis' => '20:00',
            'Duur_busrit_terug' => '8:00',
            'Beschrijving_opstaplocatie_terug' => 'Hoofduitgang Awakenings',
            'Beschrijving_aankomstlocatie_terug' => 'Amsterdam Sloterdijk Station',
            'Punten' => 140,
            'prijs' => 40,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}

