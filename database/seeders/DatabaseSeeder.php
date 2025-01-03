<?php

namespace Database\Seeders;

use App\Models\CarType;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Country::factory(3)->has(
            CarType::factory(2)
        )->create();

        State::factory(3)->has(
            City::factory(3)
        )->create();
    }
}
