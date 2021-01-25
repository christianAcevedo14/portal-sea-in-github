<?php

use App\Residence;
use Illuminate\Database\Seeder;

class ResidenceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $residences = [
          ['id' => 1, 'description' => 'Rural'],
          ['id' => 2, 'description' => 'Urbano (50+ millas)'],
          ['id' => 3, 'description' => 'Finca'],
        ];

        foreach ($residences as $residence)
        {
            Residence::create($residence);
        }

    }
}
