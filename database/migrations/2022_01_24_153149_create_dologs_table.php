<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDologsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dologs', function (Blueprint $table) {
            $table->string('dolog',30); 
            $table->string('tipus',30); 
            $table->string('leírás',30); 
            $table->int('ár'); 
            $table->string('kép',30); 
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
        Schema::dropIfExists('dologs');
    }
}
