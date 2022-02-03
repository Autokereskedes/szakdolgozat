<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modells', function (Blueprint $table) {
            $table->char('modell', 30) -> primary();
            $table->Integer('kivId')->unsigned();
            $table->foreign('kivId')->references('kivId')->on('kivitels');
            $table->char('motor',30);
            $table->foreign('motor')->references('motor')->on('motors');
            $table->integer('alapár'); 
            $table->integer('hazon')->unsigned();
            $table->foreign('hazon')->references('hazon')->on('hitels');
            $table->string('kép', 30); 
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
        Schema::dropIfExists('modells');
    }
}
