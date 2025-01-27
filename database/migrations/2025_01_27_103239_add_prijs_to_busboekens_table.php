<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPrijsToBusboekensTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('busboekens', function (Blueprint $table) {
            $table->decimal('prijs', 8, 2)->nullable();  // Zonder 'after'
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('busboekens', function (Blueprint $table) {
            // Verwijder de 'prijs' kolom
            $table->dropColumn('prijs');
        });
    }
}
