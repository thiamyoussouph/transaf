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
        Schema::create('mouvement_lieus', function (Blueprint $table) {
            $table->id();
            $table->dateTime('datecreation');
            $table->unsignedBigInteger('lieu_id');
            $table->unsignedBigInteger('mouvement_id');
            $table->foreign('mouvement_id')->references('id')->on('mouvements');
            $table->foreign('lieu_id')->references('id')->on('lieus');
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
        Schema::dropIfExists('mouvement_lieus');
    }
};
