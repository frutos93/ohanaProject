<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablasCoordinadorDirectorCoordinaEvento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('director', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno')->nullable();
            $table->string('telefono');
            $table->string('email');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('coordinador', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno')->nullable();
            $table->string('escuela');
            $table->string('telefono');
            $table->string('email');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('coordina_evento', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('evento_id');
            $table->integer('coordinador_id');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::table('evento', function (Blueprint $table) {
            $table->integer('creado_por');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('coordinador');
        Schema::drop('director');
        Schema::drop('coordina_evento');
        Schema::table('evento', function ($table) {
            $table->dropColumn('creado_por');
        });
    }
}
