<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'title_id' => 1,
                'programmatic_unit_id' => 680,
                'first_name' => 'Francisco',
                'initial' => 'J',
                'surname' => 'Colón',
                'second_surname' => 'Rodríguez',
                'phone' => '(787)-241-0507',
                'email' => 'francisco.colon4@upr.edu',
                'password' => Hash::make('123456'),
                'avatar' => 'assets/images/avatars/1.jpg'
            ],
            [
                'title_id' => 1,
                'programmatic_unit_id' => 680,
                'first_name' => 'Ramón',
                'initial' => 'F',
                'surname' => 'Nieves',
                'second_surname' => 'Alvarez',
                'phone' => '(787) 207-6759',
                'email' => 'ramonf.nieves@upr.edu',
                'password' => Hash::make('123456'),
                'avatar' => 'assets/images/avatars/2.jpg'
            ],
        ];

        foreach ($users as $user)
        {
            $new = User::create($user);
            $new->apps()->attach([1, 2]);
        }
    }
}
