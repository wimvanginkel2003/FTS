<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusboekenUserTable extends Migration
{
    public function up()
    {
        Schema::create('busboeken_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('busboeking_id');
            $table->timestamps();

            // Voeg de buitenlandse sleutels toe
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('busboeking_id')->references('id')->on('busboekens')->onDelete('cascade');

            // Maak de combinatie van 'user_id' en 'busboeking_id' uniek
            $table->unique(['user_id', 'busboeking_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('busboeken_user');
    }
}

