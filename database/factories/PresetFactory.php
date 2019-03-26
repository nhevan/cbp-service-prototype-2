<?php

use App\Campaign;
use Faker\Generator as Faker;

$factory->define(App\Preset::class, function (Faker $faker) {
    $campaigns = Campaign::pluck('id');
    return [
        'name' => $faker->name,
        'campaign_id' => $faker->randomElement($campaigns->toArray())
    ];
});
