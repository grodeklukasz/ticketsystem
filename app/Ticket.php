<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Ticket extends Model
{
    public function getTickets(){
      return DB::table('tickets')->paginate(10);
    }
    public function getFullInfoAboutTicket(){
      return DB::table('tickets')
        -> join('users','tickets.user_id','=','users.id')
        -> select('tickets.*','users.name')
        -> paginate(10);
    }
    public function getTicketById($id){
      return DB::table('tickets')->where('id',$id)->first();
    }
}
