<?php

use App\Region;
use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regions = [
            ['id' => 100, 'description' => 'Región de Arecibo'],
            ['id' => 200, 'description' => 'Región de Caguas'],
            ['id' => 300, 'description' => 'Región de Mayagüez'],
            ['id' => 400, 'description' => 'Región de Ponce'],
            ['id' => 500, 'description' => 'Región de San Juan'],
            ['id' => 600, 'description' => 'Personal a Nivel Estatal'],
        ];

        foreach ($regions as $region)
        {
            Region::create($region);
        }
    }
}
