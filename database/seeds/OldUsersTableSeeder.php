<?php

use App\User;
use Illuminate\Database\Seeder;

class OldUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $old_users = DB::connection('pagri_old')->table('users')->get();

        foreach ($old_users as $user) {
            $new = new User();
            $new->id = $user->userID;
            $new->title_id = $user->titleID;
            $new->programmatic_unit_id = $user->programmaticUnitID;
            $new->first_name = $user->userFirstName;
            $new->surname = $user->userLastName;
            $new->phone = $user->userPhone;
            $new->email = $user->email;
            $new->password = $user->userPassword;
//            $new->created_at = $user->created_at;
//            $new->updated_at = $user->updated_at;
            $new->remember_token = $user->remember_token;
            $new->save();
        }
    }
}
