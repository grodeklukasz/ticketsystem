<?php

use Illuminate\Database\Seeder;

use App\Status as Status;


class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $status = new Status();
        $status ->  name = "new";
        $status -> save();

        $status = new Status();
        $status ->  name = "in progress";
        $status -> save();

        $status = new Status();
        $status ->  name = "suspended";
        $status -> save();

        $status = new Status();
        $status ->  name = "finished";
        $status -> save();



    }
}
