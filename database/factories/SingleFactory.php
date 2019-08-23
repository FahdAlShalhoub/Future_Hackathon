<?php

use Faker\Generator as Faker;
use App\Single;
$factory->define(Single::class, function (Faker $faker) {
    return [
        'email'=>$faker->email,
        'name'=>$faker->firstname.' '.$faker->lastname,
        'gender'=>$faker->randomElement($array = array ('female','male',)),
        'major'=>$faker->word(),
        'status'=>$faker->randomElement($array=array('accepted','new','rejected')),
    ];
});
