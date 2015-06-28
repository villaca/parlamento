<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpcoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opcoes', function (Blueprint $table) {
            $table->increments('idopcao');
            $table->string('opcao',255);
            $table->integer('idpergunta')->unsigned();
            $table->foreign('idpergunta')->references('idpergunta')->on('perguntas');
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
        Schema::drop('opcoes');
    }
}
