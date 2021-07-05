<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commanders', function (Blueprint $table) {
            $table->id('cmdId');
            $table->string('cmdQte');
            $table->string('cmdDate');
            $table->string('cmdDateLivraison')->nullable();
            $table->string('cmdType')->comment('Rechargemnt ou nouvel achat');
            $table->string('cmdLivraison')->comment('Oui Si l\'user veut se faire livrer sinon Non');
            $table->unsignedInteger('cmdState')->default(0)->comment('0: en attente, 1: validé, 2: annulé');
            $table->unsignedBigInteger('id');
            $table->foreign('id')
                ->references('id')->on('users')
                ->onDelete('cascade');
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
        Schema::dropIfExists('commanders');
    }
}
