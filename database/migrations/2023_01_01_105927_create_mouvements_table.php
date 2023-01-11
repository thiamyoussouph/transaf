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
            $table->double('quantitecharger');
            $table->double('quantitedecharger')->nullable();
            $table->unsignedBigInteger('lieuchargement_id');
            $table->unsignedBigInteger('lieudechargement_id')->nullable();
            $table->unsignedBigInteger('categorie_id');
            $table->unsignedBigInteger('camion_id');
            $table->unsignedBigInteger('user_idchargement');
            $table->unsignedBigInteger('user_iddechargement')->nullable();
            $table->foreign('categorie_id')->references('id')->on('categories');
            $table->foreign('camion_id')->references('id')->on('camions');
            $table->foreign('user_idchargement')->references('id')->on('users');
            $table->foreign('user_iddechargement')->references('id')->on('users');
            $table->foreign('lieuchargement_id')->references('id')->on('lieus');
            $table->foreign('lieudechargement_id')->references('id')->on('lieus');
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
