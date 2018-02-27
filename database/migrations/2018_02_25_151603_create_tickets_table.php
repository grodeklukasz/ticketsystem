<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tickets', function(Blueprint $table){
        $table -> increments('id');
        $table -> string('code');
        $table -> string('title');
        $table -> text('description');
        $table -> text('status');
        $table -> integer('user_id')->unsigned();
        $table -> integer('serviceman_id')->unsigned();
        $table -> integer('device_id')->unsigned();
        $table -> foreign('user_id')->references('id')->on('users');
        $table -> foreign('serviceman_id')->references('id')->on('servicemen');
        $table -> foreign('device_id')->references('id')->on('devices');
        $table -> timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
