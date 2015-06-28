<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParedoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paredoes', function (Blueprint $table) {
            $table->increments('idparedao');
            $table->string('emparedado',255);
            $table->dateTime('data');
            $table->integer('idtema')->unsigned();
            $table->foreign('idtema')->references('idtema')->on('temas');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('paredoes');
    }
}
