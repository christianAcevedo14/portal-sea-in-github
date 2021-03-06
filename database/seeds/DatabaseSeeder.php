<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(AppsTableSeeder::class);
         $this->call(TitlesTableSeeder::class);
         $this->call(RegionsTableSeeder::class);
         $this->call(ProgrammaticUnitsTableSeeder::class);
         $this->call(CitiesTableSeeder::class);
         $this->call(ZipcodesTableSeeder::class);
         $this->call(UsersTableSeeder::class);
         $this->call(ProgrammaticAreasTableSeeder::class);
         $this->call(TutorialAppsTableSeeder::class);
         $this->call(TutorialSectionsTableSeeder::class);
//         $this->call(OldUsersTableSeeder::class);
    }
}
