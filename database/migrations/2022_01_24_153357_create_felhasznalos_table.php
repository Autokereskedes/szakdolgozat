<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFelhasznalosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('felhasznalos', function (Blueprint $table) {
            $table->int('fazon'); 
            $table->string('fnev',30); 
            $table->string('jelszo',30); 
            $table->string('email',30); 
            $table->string('tel',30); 
            $table->string('jogkör',30); 
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
        Schema::dropIfExists('felhasznalos');
    }
}
