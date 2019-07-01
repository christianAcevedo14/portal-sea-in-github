<?php

use App\ProgrammaticArea;
use Illuminate\Database\Seeder;

class ProgrammaticAreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $programmaticAreas = [
            ['id' => 1, 'name' => 'AMRN'],
            ['id' => 2, 'name' => 'CFC'],
            ['id' => 3, 'name' => 'DRC'],
            ['id' => 4, 'name' => '4H'],

        ];

        foreach ($programmaticAreas as $programmaticArea)
        {
            ProgrammaticArea::create($programmaticArea);
        }
    }
}
