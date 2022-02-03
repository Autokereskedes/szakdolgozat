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
            $table->char('dolog',30)->primary(); 
            $table->char('tipus',10); 
            $table->text('leírás'); 
            $table->integer('ár'); 
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
