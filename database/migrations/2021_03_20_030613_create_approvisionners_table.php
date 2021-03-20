<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprovisionnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approvisionners', function (Blueprint $table) {
            $table->id('appId');
            $table->string('oldQte');
            $table->string('newQte');
            $table->string('dateApp');
            $table->unsignedBigInteger('entId');
            $table->foreign('entId')
                ->references('entId')
                ->on('entrepots')
                ->onDelete('cascade');
            $table->unsignedBigInteger('prodId');
            $table->foreign('prodId')
                ->references('prodId')
                ->on('produits')
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
        Schema::dropIfExists('approvisionners');
    }
}
