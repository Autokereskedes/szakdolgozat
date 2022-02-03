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
            $table->integer('rendExtrId')->unsigned(); 
            $table->foreign('rendExtrId')->references('rendExtrId')->on('rendelt_extras'); 
            $table->integer('fazon')->unsigned(); 
            $table->foreign('fazon')->references('fazon')->on('felhasznalos'); 
            $table->integer('fényId')->unsigned();
            $table->foreign('fényId')->references('fényId')->on('fenyezes');
            $table->integer('beltérId')->unsigned(); 
            $table->foreign('beltérId')->references('beltérId')->on('belters'); 
            $table->integer('összár'); 
            $table->integer('hazon')->unsigned(); 
            $table->foreign('hazon')->references('hazon')->on('hitels'); 
            $table->date('ajánlatDátum'); 
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
