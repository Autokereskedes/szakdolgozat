<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRendeltAutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rendelt_autos', function (Blueprint $table) {
            $table->increments('rendazon');
            $table->char('modell',30);
            $table->foreign('modell')->references('modell')->on('modells');
            $table->char('felszerelesCsomag',30);
            $table->foreign('felszerelesCsomag')->references('felszerelesCsomag')->on('felszereles');
            $table->biginteger('userId')->unsigned();
            $table->foreign('userId')->references('id')->on('users');
            $table->integer('fenyezes')->unsigned();
            $table->foreign('fenyezes')->references('fényId')->on('fenyezes');
            $table->integer('belter')->unsigned();
            $table->foreign('belter')->references('beltérId')->on('belters');
            $table->integer('összár');
            $table->integer('hazon')->unsigned();
            $table->foreign('hazon')->references('hazon')->on('hitels');
            $table->char('státusz', 20);
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
        Schema::dropIfExists('rendelt_autos');
    }
}
