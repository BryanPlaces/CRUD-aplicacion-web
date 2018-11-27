<?php

use Faker\Generator as Faker;


$factory->define(App\CbCurrency::class, function (Faker $faker) {
    return [
        'currency'=>$faker->sentence(2),
        'description' => $faker->sentence(2),
        'isactive' => 'Y',
        'cursymbol' => $faker->randomLetter,
        'isocode'=>$faker->currencyCode,
        'precisioncost' => 2.00, // secret
        'precisionstd'=>4.00,
        'precisionprize'=>4.00,

    ];
});

