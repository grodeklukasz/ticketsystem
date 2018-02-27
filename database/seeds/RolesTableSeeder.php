<?php

use Illuminate\Database\Seeder;
use App\Role as Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role -> role = 'employee';
        $role -> save();

        $role = new Role();
        $role -> role = 'head of dept';
        $role -> save();

        

    }
}
