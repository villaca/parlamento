<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDebatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debates', function (Blueprint $table) {
            $table->increments('iddebate');
            $table->string('assunto',255);
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
        Schema::drop('debates');
    }
}
