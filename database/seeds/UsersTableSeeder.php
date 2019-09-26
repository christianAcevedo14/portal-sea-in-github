<?php

use App\Http\Repositories\CsvSeeder;
use App\User;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->connection = 'portal';
        $this->table = 'users';
        $this->filename = __DIR__ . '/csvs/imported_users_1.csv';
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
                'first_name' => 'Jorge',
                'initial' => 'E',
                'surname' => 'Rivera',
                'second_surname' => 'Sebastian',
                'phone' => '(787) 464-1826',
                'email' => 'jorge.rivera30@upr.edu',
                'password' => Hash::make('123456'),
                'avatar' => 'assets/images/avatars/no_avatar.png'
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
                'title_id' => 4,
                'programmatic_unit_id' => 680,
                'first_name' => 'Mabeline',
                'initial' => '',
                'surname' => 'Ramos',
                'second_surname' => 'Vélez',
                'phone' => '',
                'email' => 'madeline.ramos4@upr.edu',
                'password' => Hash::make('123456'),
                'avatar' => 'assets/images/avatars/3.jpg'
            ],

            [
                'title_id' => 1,
                'programmatic_unit_id' => 680,
                'first_name' => 'Erick',
                'initial' => '',
                'surname' => 'Matos',
                'second_surname' => 'Ramírez',
                'phone' => '',
                'email' => 'erick.matos@upr.edu',
                'password' => Hash::make('123456'),
                'avatar' => 'assets/images/avatars/4.jpg'
            ],


        ];


        foreach ($users as $user)
        {
            $new = User::create($user);
            $new->apps()->attach([1,3,4,5,6,7]);
        }


        parent::run();

        $createdUsers = User::all();

        foreach ($createdUsers as $createdUser) {
            $createdUser->apps()->attach([2]);
        }



            Model::unguard();


    }
}
