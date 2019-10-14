<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Game;
use Faker\Generator as Faker;

$factory->define(Game::class, function (Faker $faker) {
    return [
        'type'=>'singles 501 single in double out',
        'goal'=>'bestof',
        'legs'=>3
    ];
});
