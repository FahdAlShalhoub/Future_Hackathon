<?php

use Faker\Generator as Faker;
use App\Group;
$factory->define(Group::class, function (Faker $faker) {
    $groupMembersJson=[];
    for($i=1;$i<=$faker->numberBetween($min = 1 , $max = 3);$i++){
        $groupMembersJson+=[$i+1 => $faker->firstname.' '.$faker->lastname];
    }
    return [
        'leadName'=> $faker->firstname.' '.$faker->lastname,
        'leadEmail'=> $faker->email,
        'groupName'=>$faker->word(),
        'status'=>$faker->randomElement($array=array('accepted','new','rejected')),
        'groupMembersJson'=> json_encode($groupMembersJson),
    ];
});
