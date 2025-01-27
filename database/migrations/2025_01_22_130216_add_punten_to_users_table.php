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
        Schema::table('users', function (Blueprint $table) {
            // Voeg de 'punten' kolom toe aan de 'users' tabel
            $table->integer('punten')->default(0);  // Standaard 0 punten
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Verwijder de 'punten' kolom als we de migratie terugdraaien
            $table->dropColumn('punten');
        });
    }
};

