<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HacerTablaCasasHogar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casahogar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('direccion');
            $table->string('persona_contacto');
            $table->string('telefono');
            $table->string('nombre');
            $table->softDeletes();
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
        Schema::drop('casahogar');
    }
}
