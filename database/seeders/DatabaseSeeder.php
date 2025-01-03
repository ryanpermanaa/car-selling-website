<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\CarFeature;
use App\Models\CarType;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use App\Models\User;
use App\Models\CarImage;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $countries = [
            'Abyssinia (Ethiopia)',
            'Greece',
            'United States',
        ];

        foreach ($countries as $country) {
            Country::create(['name' => $country]);
        }

        $carTypes = [
            'Abyssinian' => 1,
            'Aegean' => 2,
            'American Bobtail' => 3,
            'American Curl' => 3,
            'American Longhair' => 3,
            'American Polydactyl' => 3
        ];

        foreach ($carTypes as $carType => $countryId) {
            CarType::create([
                'name' => $carType,
                'country_id' => $countryId
            ]);
        }

        State::factory(3)->has(
            City::factory(3)
        )->create();

        User::factory(3)->create();

        User::factory(2)->has(
            Car::factory(10)
                ->hasImages(5)
                ->hasFeatures(),
            'favouriteCars'
        )->create();
    }
}
