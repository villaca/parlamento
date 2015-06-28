<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscussoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discussoes', function (Blueprint $table) {
            $table->increments('iddiscussao');
            $table->text('assunto');
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
        Schema::drop('discussoes');
    }
}
