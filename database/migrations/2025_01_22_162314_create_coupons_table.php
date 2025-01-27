<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('soort_eten'); // Bijvoorbeeld: 'Koude drank'
            $table->string('bedrijf'); // Bijvoorbeeld: 'Shell'
            $table->integer('punten'); // Bijvoorbeeld: 75
            $table->text('beschrijving')->nullable(); // Beschrijving van de coupon (optioneel)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupons');
    }
}


