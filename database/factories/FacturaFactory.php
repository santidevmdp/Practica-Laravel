<?php

use Faker\Generator as Faker;

$factory->define(App\Factura::class, function (Faker $faker) {
    return [
        'user_id' => rand(1,20),
        'tipo' => $faker->word(8),
        'entidad' => $faker->word(4),
        'alcances' => $faker->randomElement(['NACIONAL', 'PROVINCIAL', 'MUNICIPAL']),
        'partida' => $faker->randomNumber(),
        'fIngreso' => $faker->date(),
        'fSalida' => $faker->date(),
        'observaciones' => $faker->paragraph(),
        'deuda' => $faker->randomNumber(),
        'pagado' => $faker->randomNumber(),
        'balance' => $faker->randomNumber(),
        'estados' => $faker->randomElement(['SUCCESS', 'WARNING', 'DANGER']),
        'periodos' => $faker->randomElement(['MENSUAL', 'BIMESTRAL', 'TRIMESTRAL','CUATRIMESTRAL','SEMESTRAL', 'ANUAL']),
    ];
});
