<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HacerTablaParticipacionVoluntariado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participacion_voluntariado', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('evento_id');
            $table->integer('voluntario_id');
            $table->string('equipo');
            $table->string('puesto');
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
        Schema::drop('participacion_voluntariado');
    }
}
