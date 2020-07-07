<?php

use App\TutorialApp;
use Illuminate\Database\Seeder;

class TutorialAppsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $apps = [
            ['name' => 'Portal-Sea'],
            ['name' => 'SISE'],
        ];

        foreach ($apps as $app)
        {
            TutorialApp::create($app);
        }
    }
}
