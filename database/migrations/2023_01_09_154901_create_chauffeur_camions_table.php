<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chauffeur_camions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('chauffeur_id');
            $table->unsignedBigInteger('camion_id')->unique();
            $table->foreign('chauffeur_id')->references('id')->on('chauffeurs');
            $table->foreign('camion_id')->references('id')->on('camions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chauffeur_camions');
    }
};
