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
            ['name' => 'pagriWeb', 'url' => 'pagri', 'icon' => 'fa fa-tree'],
            ['name' => 'SISE', 'url' => 'sise', 'icon' => 'fa fa-file-text'],
            ['name' => '4-H', 'url' => '4h', 'icon' => 'fa fa-odnoklassniki'],
            ['name' => 'CFC', 'url' => 'cfc', 'icon' => 'fa fa-group'],
            ['name' => 'DRC', 'url' => 'drc', 'icon' => 'fa fa-home'],
            ['name' => 'Voluntarios', 'url' => 'volunteer', 'icon' => 'fa fa-handshake-o'],
            ['name' => 'Usuarios', 'url' => 'users', 'icon' => 'fa fa-user'],
            ['name' => 'CTI', 'url' => 'http://ctisea.uprm.edu', 'icon' => 'fa fa-desktop'],
            ['name' => 'Offices', 'url' => 'offices', 'icon' => 'fa fa-building']
        ];

        foreach ($regions as $region)
        {
            App::create($region);
        }
    }
}
