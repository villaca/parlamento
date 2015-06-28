<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpinioesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opinioes', function (Blueprint $table) {
            $table->increments('idopiniao');
            $table->text('opiniao');
            $table->integer('iddiscussao')->unsigned();
            $table->foreign('iddiscussao')->references('iddiscussao')->on('discussoes');
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
        Schema::drop('opinioes');
    }
}
