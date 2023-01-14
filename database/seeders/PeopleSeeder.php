<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\People;

class PeopleSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker::create();

       for($i = 0; $i< 50; $i++){
        People::create([
            'name' => $faker->firstName,
            'surname' => $faker->lastName,
            'phone_number' => $faker->phoneNumber,
            'street' => $faker->streetName,
            'city' => $faker->city,
        ]);
       }
    }
}
