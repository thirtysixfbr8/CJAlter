<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Solicitacao;
use Faker\Generator as Faker;

$factory->define(Solicitacao::class, function (Faker $faker) {
    $randomState = ['pendente','atendido'];
    return [
        'mediadorId' => '1',
        'clienteId' => rand(),
        'estado' => $randomState[rand(0,1)]
    ];
});
