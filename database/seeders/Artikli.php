<?php

namespace Database\Seeders;

use App\Models\Artikal;
use Illuminate\Database\Seeder;

class Artikli extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 25; $i++){
            Artikal::create([
                'sifra' => $faker->numerify('#########'),
                'proizvodjacID' => $faker->numberBetween(1,5),
                'polID' => $faker->numberBetween(1,2),
                'cena' => $faker->numberBetween(5000,30000)
            ]);
        }
    }
}
