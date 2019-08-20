<?php

use Faker\Generator as Faker;
use App\Single;
$factory->define(Single::class, function (Faker $faker) {
    return [
        'email'=>$faker->email,
        'name'=>$faker->firstname.' '.$faker->lastname,
        'gender'=>$faker->randomElement($array = array ('female','male',)),
        'traits'=>$faker->randomElement($array = array ('مبدع','مختلف','عبقري','مصمم','مبرمج','طموح','مفكر','باحث','خبير')).' '.$faker->randomElement($array = array ('مبدع','مختلف','عبقري','مصمم','مبرمج','طموح','مفكر','باحث','خبير')),
        'track'=>$faker->randomElement($array=array('صحي','تقني','هندسي','تمويلي','بيئي')),
        'skills'=>$faker->sentence($nbWords = 6, $variableNbWords = true),
        'major'=>$faker->word(),
        'status'=>$faker->randomElement($array=array('accepted','new','rejected')),
        'uniID'=>$faker->randomNumber($nbDigits=5,$strict=false),
    ];
});
