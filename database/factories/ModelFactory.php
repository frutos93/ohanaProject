<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Evento::class, function (Faker\Generator $faker) {
    return [
        'nombre' => $faker->name,
        'fecha' => $faker->dateTime,
        'lugar' => $faker->streetName,
        'creado_por' => function(){
            return \App\Director::inRandomOrder()->first()["id"];
        }
    ];
});

$factory->define(App\Participacion::class, function (Faker\Generator $faker) {
    return [
        'evento_id' => function(){
            return \App\Evento::inRandomOrder()->first()["id"];
        },
        'participante_id' => function(){
            return \App\Participante::inRandomOrder()->first()["id"];
        },
        'equipo' => $faker->colorName,
    ];
});

$factory->define(App\CasaHogar::class, function (Faker\Generator $faker) {
    return [
        'nombre' => $faker->name,
        'direccion' => $faker->address,
        'persona_contacto' => $faker->name . $faker->lastName,
        'telefono' => $faker->phoneNumber,
    ];
});

$factory->define(App\ParticipacionVoluntariado::class, function (Faker\Generator $faker) {
    return [
        'equipo' => $faker->colorName,
        'puesto' => $faker->domainName,
        'evento_id' => function(){
            return \App\Evento::inRandomOrder()->first()["id"];
        },
        'voluntario_id' => function(){
            return \App\Voluntario::inRandomOrder()->first()["id"];
        }
    ];
});

$factory->define(App\Participante::class, function (Faker\Generator $faker) {
    return [
        'curp' => str_random(18),
        'nombre' => $faker->firstName,
        'apellido_paterno' => $faker->firstName,
        'apellido_materno' => $faker->lastName,
        'casahogar_id' => function(){
            return \App\CasaHogar::inRandomOrder()->first()["id"];
        },
    ];
});

$factory->define(App\Voluntario::class, function (Faker\Generator $faker) {
    return [
        'escuela' => $faker->name,
        'nombre' => $faker->firstName,
        'apellido_paterno' => $faker->firstName,
        'apellido_materno' => $faker->lastName,
    ];
});


$factory->define(App\Coordinador::class, function (Faker\Generator $faker) {
    return [
        'nombre' => $faker->firstName,
        'apellido_paterno' => $faker->firstName,
        'apellido_materno' => $faker->lastName,
        'escuela' => $faker->name,
        'telefono' => $faker->phoneNumber,
        'email' => $faker->companyEmail,
    ];
});

$factory->define(App\Director::class, function (Faker\Generator $faker) {
    return [
        'nombre' => $faker->firstName,
        'apellido_paterno' => $faker->firstName,
        'apellido_materno' => $faker->lastName,
        'telefono' => $faker->phoneNumber,
        'email' => $faker->companyEmail,
    ];
});

$factory->define(App\CoordinaEvento::class, function (Faker\Generator $faker) {
    return [
        'evento_id' => function(){
            return \App\Evento::inRandomOrder()->first()["id"];
        },
        'coordinador_id' => function(){
            return \App\Coordinador::inRandomOrder()->first()["id"];
        }
    ];
});