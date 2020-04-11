<?php

use Faker\Generator as Faker;
use LaravelEnso\Addresses\App\Enums\BuildingTypes;
use LaravelEnso\Addresses\App\Enums\StreetTypes;
use LaravelEnso\Countries\App\Models\Country;
use LaravelEnso\RoAddresses\App\Models\Address;
use LaravelEnso\RoAddresses\App\Models\County;
use LaravelEnso\RoAddresses\App\Models\Locality;

$factory->define(Address::class, function (Faker $faker, $attributes) {
    $factory = [
        'addressable_id' => $attributes['addressable_id'],
        'addressable_type' => $attributes['addressable_type'],
        'country_id' => Country::whereName('Romania')->first()->id,
        'county_id' => County::first()->id,
        'neighbourhood' => $faker->word,
        'apartment' => $faker->randomNumber(2),
        'floor' => $faker->randomNumber(1),
        'entry' => $faker->randomLetter,
        'building' => $faker->word,
        'building_type' => BuildingTypes::keys()->random(),
        'number' => $faker->randomNumber(2),
        'street' => $faker->word,
        'street_type' => StreetTypes::keys()->random(),
        'postal_area' => $faker->randomNumber(5),
        'obs' => $faker->realText(),
        'lat' => $faker->latitude,
        'long' => $faker->longitude,
    ];

    if (isset($attributes['locality_id'])) {
        $factory['locality_id'] = $attributes['locality_id'];
    } else {
        $countyId = isset($attributes['county_id']) ? $attributes['county_id'] : $factory['county_id'];
        $factory['locality_id'] = Locality::where('county_id', $countyId)->pluck('id')->random();
    }

    return $factory;
});
