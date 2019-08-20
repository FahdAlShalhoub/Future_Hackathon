<?php

use Faker\Generator as Faker;
use App\Group;
$factory->define(Group::class, function (Faker $faker) {
    return [
        'leadName'=> $faker->firstname.' '.$faker->lastname,
        'leadEmail'=> $faker->email,
        'leadUniID'=> $faker->randomNumber($nbDigits=5,$strict=false),
        'groupName'=>$faker->word(),
        'track'=>$faker->randomElement($array=array('صحي','تقني','هندسي','تمويلي','بيئي')),
        'status'=>$faker->randomElement($array=array('accepted','new','rejected')),
        'groupMembersJson'=> '{ "'.$faker->firstname.'" :'.'"'.$faker->randomNumber($nbDigits=5,$strict=false).'"'.',"'.$faker->firstname.'" :'.'"'.$faker->randomNumber($nbDigits=5,$strict=false).'"'.'}',
    ];
});
