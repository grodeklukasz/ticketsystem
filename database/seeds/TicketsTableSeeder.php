<?php

use Illuminate\Database\Seeder;
use App\Ticket;
use Faker\Factory as Faker;

class TicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $limit = 37;
        for( $i = 0 ; $i < $limit ; $i++){

          $ticket = new Ticket();
          $ticket -> code = "#" . $faker->numberBetween(100,10000);
          $ticket -> title = "Problem with Device nr.: " . $faker->numberBetween(1,100);
          $ticket -> description = $faker -> realText(80);
          $ticket -> status = 'first call';
          $ticket -> user_id = $faker->numberBetween(1,10);
          $ticket -> serviceman_id = $faker->numberBetween(1,8);
          $ticket -> device_id = $faker->numberBetween(1,100);
          $ticket -> save();

        }



    }
}
