<?php

use Illuminate\Database\Seeder;
use App\Serviceman as Serman;
use Faker\Factory as Faker;

class ServicemenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();

        $limit = 8;

        for( $i = 0 ; $i < $limit ; $i++){
          $serman = new Serman();
          $serman -> name = $faker->name;
          $serman -> points = 0;
          $serman -> save();
        }


    }
}
