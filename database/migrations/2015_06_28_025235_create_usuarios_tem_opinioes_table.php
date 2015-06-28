<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTemOpinioesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_tem_opinioes', function (Blueprint $table) {
            $table->integer('idusuario')->unsigned()->index();
            $table->integer('idopiniao')->unsigned()->index();
            $table->foreign('idusuario')->references('idusuario')->on('usuarios');
            $table->foreign('idopiniao')->references('idopiniao')->on('opinioes');
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
        Schema::drop('usuarios_tem_opinioes');
    }
}
