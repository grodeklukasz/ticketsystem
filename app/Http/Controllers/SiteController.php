<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
      $data = [];
      $data['name'] = 'myName';
      
      return view('home.index')->withData($data);
    }
}
