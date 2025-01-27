<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserCouponTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_coupons', function (Blueprint $table) {
            $table->id(); // Dit is optioneel, maar handig voor het volgen van records
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Verwijzing naar de gebruiker
            $table->foreignId('coupon_id')->constrained()->onDelete('cascade'); // Verwijzing naar de coupon
            $table->date('gebruik_datum')->nullable(); // Datum waarop de coupon is gebruikt
            $table->string('extra_informatie')->nullable(); // Eventuele extra gegevens over de coupon
            $table->timestamps(); // Timestamps voor tracking
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_coupons');
    }
}
