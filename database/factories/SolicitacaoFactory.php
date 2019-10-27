<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Solicitacao;
use Faker\Generator as Faker;

$factory->define(Solicitacao::class, function (Faker $faker) {
    $randomState = ['pendente','atendido'];
    return [
        //'mediadorId' => '2',
        'clienteId' => '3',
        'estado' => rand(0,3)
    ];
});
