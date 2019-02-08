<?php

namespace App\Http\Controllers;
use \App\inven_quires;
use \App\inven_valid;

use Illuminate\Http\Request;

class inventoryController extends Controller
{
  public function valid(Request $request){
   $validation=inven_valid::validate_inven($request);
   $err=$validation->errors()->all();
 if ( $validation->fails() ) {
   return view('messages',['err'=>$err]);
 }else{
    inven_quires::insert(inven_valid::$inputs);
    return view('messages',['msg'=>'added successfully']);
 }
}

}
