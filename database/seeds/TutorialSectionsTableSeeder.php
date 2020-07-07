<?php

use App\TutorialSection;
use Illuminate\Database\Seeder;

class TutorialSectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sections = [
            ['tutorial_app_id' => '2' , 'name' => 'Planes'],
            ['tutorial_app_id' => '2' , 'name' => 'Informes'],
        ];

        foreach ($sections as $section)
        {
            TutorialSection::create($section);
        }
    }
}
