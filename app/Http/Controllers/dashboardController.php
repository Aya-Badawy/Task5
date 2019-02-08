<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\counters;
class dashboardController extends Controller
{

   public function info(){
     $counters=counters::counters();
    // dd($x[0]->name);
          //dd($counters);
     return view('ad_dashboard',['count'=>$counters]);

   }





}
