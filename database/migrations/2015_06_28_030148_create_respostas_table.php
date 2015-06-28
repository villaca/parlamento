<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespostasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respostas', function (Blueprint $table) {
            $table->increments('idresposta');
            $table->text('resposta');
            $table->integer('idpergunta')->unsigned();
            $table->foreign('idpergunta')->references('idpergunta')->on('perguntas');
            $table->integer('idusuario')->unsigned();
            $table->foreign('idusuario')->references('idusuario')->on('usuarios');
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
        Schema::drop('respostas');
    }
}
