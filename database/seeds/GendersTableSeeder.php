<?php

use App\Gender;
use Illuminate\Database\Seeder;

class GendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genders = [
            ['id' => 1, 'description' => 'Masculino'],
            ['id' => 2, 'description' => 'Femenino'],
            ['id' => 3, 'description' => 'Otro'],
        ];

        foreach ($genders as $gender)
        {
            Gender::create($gender);
        }

    }
}
