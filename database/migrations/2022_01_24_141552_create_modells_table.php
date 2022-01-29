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
            $table->string('modell', 30) -> primary();
            $table->int('kivitel');
            $table->string('motor',30); 
            $table->int('alapár'); 
            $table->int('hitel'); 
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
