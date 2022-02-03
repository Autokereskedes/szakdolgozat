<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLehetsegesExtrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lehetseges_extras', function (Blueprint $table) {
            $table->char('modell',30)->primary();
            $table->foreign('modell')->references('modell')->on('modells');
            $table->string('dolog',30);
            $table->foreign('dolog')->references('dolog')->on('dologs');
            $table->integer('ár'); 
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
        Schema::dropIfExists('lehetseges_extras');
    }
}
