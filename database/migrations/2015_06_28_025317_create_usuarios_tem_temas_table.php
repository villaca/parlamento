<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTemTemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_tem_temas', function (Blueprint $table) {
            $table->integer('idusuario')->unsigned()->index();
            $table->integer('idtema')->unsigned()->index();
            $table->boolean('admin')->default(0);
            $table->foreign('idusuario')->references('idusuario')->on('usuarios');
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
        Schema::drop('usuarios_tem_temas');
    }
}
