<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFelszerelesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('felszereles', function (Blueprint $table) {
            $table->char('felszerelesCsomag',30)->primary(); 
            $table->char('tipus',10); 
            $table->text('leírás'); 
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
        Schema::dropIfExists('felszereles');
    }
}
