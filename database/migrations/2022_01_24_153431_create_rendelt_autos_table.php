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
            $table->int('rendazon'); 
            $table->string('modell',30); 
            $table->int('felhasználó'); 
            $table->string('fényezésSzín',30); 
            $table->string('beltérSzínAnyag',30); 
            $table->int('összár'); 
            $table->int('hitel'); 
            $table->date('ajánlatDátum'); 
            $table->string('státusz', 20); 
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
