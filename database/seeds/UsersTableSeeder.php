<?php

use App\Http\Repositories\CsvSeeder;
use App\User;

class UsersTableSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->connection = 'portal';
        $this->table = 'users';
        $this->filename = __DIR__ . '/csvs/users.csv';
    }
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
                'phone' => '(787) 241-0507',
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
            [
                'title_id' => 1,
                'programmatic_unit_id' => 680,
                'first_name' => 'Mabeline',
                'initial' => '',
                'surname' => 'Ramos',
                'second_surname' => 'Vélez',
                'phone' => '',
                'email' => 'madeline.ramos4@upr.edu',
                'password' => Hash::make('123456'),
                'avatar' => 'assets/images/avatars/ope6.jpg'
            ],
        ];

        foreach ($users as $user)
        {
            $new = User::create($user);
            $new->apps()->attach([2, 1, 3, 4, 5, 6]);
        }

        parent::run();
    }
}
