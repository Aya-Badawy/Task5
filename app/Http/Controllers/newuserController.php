<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\validate_user;
use \App\user_quiers;
class newuserController extends Controller
{
    public function valid(Request $request){
     $validation=validate_user::validate_user($request);
     $err=$validation->errors()->all();
   if ( $validation->fails() ) {
     return view('messages',['err'=>$err]);
   }else{
      user_quiers::insert(validate_user::$inputs);
      return view('messages',['msg'=>'added successfully']);
   }

    }

}
