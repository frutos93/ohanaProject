<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatosDummy extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\CasaHogar::class, 5)->create();
        factory(App\Participante::class, 30)->create();
        factory(App\Director::class, 5)->create();
        factory(App\Coordinador::class, 5)->create();
        factory(App\Voluntario::class, 30)->create();
        factory(App\Evento::class, 10)->create();
        factory(App\Participacion::class, 20)->create();
        factory(App\ParticipacionVoluntariado::class, 20)->create();
        factory(App\CoordinaEvento::class, 20)->create();
    }
}
