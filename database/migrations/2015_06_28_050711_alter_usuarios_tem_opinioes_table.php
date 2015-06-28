<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsuariosTemOpinioesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('usuarios_tem_opinioes', function (Blueprint $table) {
            $table->dropColumn(['created_at','updated_at','deleted_at']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usuarios_tem_opinioes', function (Blueprint $table) {
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
