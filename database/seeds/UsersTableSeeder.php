<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for( $i=0 ; $i<10 ; $i++){
          $user = new User();
          $user->name = "user" . $i;
          $user->email = "user" . $i . "@user.com";
          $user->password = bcrypt("user");
          $user->save();
        }


    }
}
