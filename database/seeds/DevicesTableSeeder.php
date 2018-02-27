<?php

use Illuminate\Database\Seeder;
use App\Device as Device;
use Faker\Factory as Faker;

class DevicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $types = ['Laptop','Printer','Computer','Workstation','Handy'];


        $faker = Faker::create();

        for( $i = 0 ; $i < 100; $i++){

        $device = new Device();
        $device -> name = 'model-' . $faker -> numberBetween(100,200) . "-str";
        $device -> type = $types[$faker->numberBetween(0,4)];
        $device -> sn = $faker->numberBetween(1000,9999);
        $device -> localization = "@" . $faker -> city();
        $device -> save();

        }

    }
}
