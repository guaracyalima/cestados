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

use CEstados\Models\States;

$factory->define(CEstados\Models\User::class, function ( Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});


$factory->define(States::class, function(Faker\Generator $faker){
   return [
       'name' => $faker->state,
       'initials' => $faker->stateAbbr,
       'historic' => $faker->sentence
   ];
});