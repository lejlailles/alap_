<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teszt', function (Blueprint $teszt) {
            $teszt->increments('id');
            $teszt->string('kerdes');
          
            $teszt->string('v1');
            $teszt->string('v2');
            $teszt->string('v3');
            $teszt->string('v4');
            $teszt->string('helyes')->default('v1');
            $teszt->timestamps();
            $teszt->integer('kategoria_id')->unsigned();
            $teszt->foreign('kategoria_id')->references('id')->on('kategoria');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teszt');
    }
};
