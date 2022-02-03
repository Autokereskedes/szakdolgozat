<?php

use App\Models\Models\modell;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFenyezesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fenyezes', function (Blueprint $table) {
            $table->increments('fényId');
            $table->char('modell',30);
            $table->foreign('modell')->references('modell')->on('modells');
            $table->char('szin',30);
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
        Schema::dropIfExists('fenyezes');
    }
}
