<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrepotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrepots', function (Blueprint $table) {
            $table->id('entId');
            $table->string('entLib');
            $table->string('entImg')->nullable();
            $table->string('entLat');
            $table->string('entLong');
            $table->string('entJourDispo')->nullable();
            $table->string('entHeureDispo')->nullable();
            $table->string('manualDispoActiv')->nullable()->comment('Si le proprio decide de changer manuellement la disponibilité de sont entrepot');
            $table->string('entDispoActiv')->nullable()->comment('Le systeme se charge de changer automatiquement la disponibilité d\'un entrepot');;
            $table->unsignedInteger('validAdmin')->default(0);
            $table->string('entSlug');
            $table->string('entDescripPlace');
            $table->string('entContact')->nullable();
            $table->string('entMdp')->nullable();
            $table->unsignedBigInteger('id');
            $table->foreign('id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->unsignedBigInteger('comId');
            $table->foreign('comId')
                ->references('comId')
                ->on('communes')
                ->onDelete('cascade');
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
        Schema::dropIfExists('entrepots');
    }
}
