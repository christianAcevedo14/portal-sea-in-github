<?php

use App\App;
use Illuminate\Database\Seeder;

class AppsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regions = [
            ['name' => 'SISE', 'url' => 'sise'],
            ['name' => 'pagriWeb', 'url' => 'pagri'],
            ['name' => '4-H', 'url' => '4h'],
            ['name' => 'CFC', 'url' => 'cfc'],
            ['name' => 'DRC', 'url' => 'drc'],
        ];

        foreach ($regions as $region)
        {
            App::create($region);
        }
    }
}
