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
            $table->string('kivitel',30); 
            $table->string('kivnev',30); 
            $table->int('ajtóSzáma'); 
            $table->int('ülésSzáma'); 
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
