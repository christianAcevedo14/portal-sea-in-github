<?php

use App\Race;
use Illuminate\Database\Seeder;

class RacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $races = [
            ['id' => 1, 'description' => 'Caucásico'],
            ['id' => 2, 'description' => 'Afrodescendiente'],
            ['id' => 3, 'description' => 'Hispano'],
        ];

        foreach($races as $race)
        {
            Race::create($race);
        }

    }
}
