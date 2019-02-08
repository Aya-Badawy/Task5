<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mangerDashboardController extends Controller
{
    public function index(){
      return view('user_dashboard');
    }
}
