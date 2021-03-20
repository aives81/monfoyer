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
