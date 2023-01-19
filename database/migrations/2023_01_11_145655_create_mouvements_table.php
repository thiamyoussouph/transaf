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
        Schema::create('mouvements', function (Blueprint $table) {
            $table->id();
            $table->string('numeromouvement');
            $table->string('description');
            $table->boolean('decharger')->default(false);
            
            $table->unsignedBigInteger('categorie_id');
           
            $table->unsignedBigInteger('camion_id');
   
            $table->unsignedBigInteger('lieu_id');
          
            $table->unsignedBigInteger('chargement_id');
         
            $table->unsignedBigInteger('dechargement_id')->nullable();
          
            $table->foreign('categorie_id')->references('id')->on('categories');
           
            $table->foreign('camion_id')->references('id')->on('camions');
            $table->foreign('lieu_id')->references('id')->on('lieus');
            $table->foreign('chargement_id')->references('id')->on('chargements');
            $table->foreign('dechargement_id')->references('id')->on('dechargements');
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
        Schema::dropIfExists('mouvements');
    }
};
