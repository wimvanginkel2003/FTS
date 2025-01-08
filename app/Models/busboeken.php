<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class busboeken extends Model
{
    use HasFactory;

    protected $fillable = [
        'Festival_naam',
        'Land_van_vertrek_heen',
        'Stad_van_vertrek_heen',
        'Adres_opstaplocatie_heen',
        'Vertrekdatum_heenreis',
        'Vertrektijd_heenreis',
        'Aankomstdatum_heenreis',
        'Duur_busrit_heen',
        'Aankomsttijd_heenreis',
        'Beschrijving_opstaplocatie_heen',
        'Beschrijving_aankomstlocatie_heen',
        'Land_van_vertrek_terug',
        'Stad_van_vertrek_terug',
        'Adres_opstaplocatie_terug',
        'Vertrekdatum_terugreis',
        'Vertrektijd_terugreis',
        'Aankomstdatum_terugreis',
        'Aankomsttijd_terugreis',
        'Duur_busrit_terug',
        'Beschrijving_opstaplocatie_terug',
        'Beschrijving_aankomstlocatie_terug',
        'Punten',
    ];
}
