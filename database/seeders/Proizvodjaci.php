<?php

namespace Database\Seeders;

use App\Models\Proizvodjac;
use Illuminate\Database\Seeder;

class Proizvodjaci extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Proizvodjac::create([
            'proizvodjac' => 'Zara'
        ]);

        Proizvodjac::create([
            'proizvodjac' => 'Mona'
        ]);

        Proizvodjac::create([
            'proizvodjac' => 'Bershka'
        ]);

        Proizvodjac::create([
            'proizvodjac' => 'Pull&Bear'
        ]);

        Proizvodjac::create([
            'proizvodjac' => 'PS'
        ]);


    }
}
