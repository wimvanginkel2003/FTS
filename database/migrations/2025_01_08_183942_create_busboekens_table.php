<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('busboekens', function (Blueprint $table) {
            $table->id();
            $table->string('Festival_naam');
            $table->string('Land_van_vertrek_heen');
            $table->string('Stad_van_vertrek_heen');
            $table->string('Adres_opstaplocatie_heen');
            $table->date('Vertrekdatum_heenreis');
            $table->time('Vertrektijd_heenreis');
            $table->date('Aankomstdatum_heenreis');
            $table->time('Duur_busrit_heen');
            $table->time('Aankomsttijd_heenreis');
            $table->string('Beschrijving_opstaplocatie_heen');
            $table->string('Beschrijving_aankomstlocatie_heen');
            $table->string('Land_van_vertrek_terug');
            $table->string('Stad_van_vertrek_terug');
            $table->string('Adres_opstaplocatie_terug');
            $table->date('Vertrekdatum_terugreis');
            $table->time('Vertrektijd_terugreis');
            $table->date('Aankomstdatum_terugreis');
            $table->time('Aankomsttijd_terugreis');
            $table->time('Duur_busrit_terug');
            $table->string('Beschrijving_opstaplocatie_terug');
            $table->string('Beschrijving_aankomstlocatie_terug');
            $table->integer('Punten');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('busboekens');
    }
};
