<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Transfer;
use Faker\Generator as Faker;

$factory->define(Transfer::class, function (Faker $faker) {
    return [
        'description' => $faker->text(200),
        'amount'      => $faker->numberBetween(10, 90),
        'wallet_id'   => $faker->randomDigitNotNull,
    ];
});
