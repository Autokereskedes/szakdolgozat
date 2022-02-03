<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKivitelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kivitels', function (Blueprint $table) {
            $table->increments('kivId'); 
            $table->char('kivNev',30); 
            $table->tinyInteger('ajtóSzáma'); 
            $table->tinyInteger('ülésSzáma'); 
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
        Schema::dropIfExists('kivitels');
    }
}
