<?php

use Illuminate\Database\Seeder;
use \App\Office;

class OfficeTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $offices = [
            [
                'name' => 'OPE',
                'description' => 'planificacion',
                'logo' => 'img/OPE.jpg'
            ],

            [
                'name' => 'finanzas',
                'description' => 'planificacion',
                'logo' => 'img/finance.jpg'
            ],

            [
                'name' => 'CTI',
                'description' => 'tecnologia',
                'logo' => 'img/CTI.jpg'
            ],
        ];

        foreach ($offices as $office){
            Office::create($office);
        }

    }
}
