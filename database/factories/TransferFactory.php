<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\transfer;
use Faker\Generator as Faker;

$factory->define(transfer::class, function (Faker $faker) {
    return [
        'descritcion' => $faker->text(200),
        'amount'      => $faker->numberBetween(10, 90),
        'wallet_id'   => $faker->randomDigitNotNull,
    ];
});
