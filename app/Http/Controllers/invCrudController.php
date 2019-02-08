<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\inventories;
use \App\inven_quires;
use \App\inven_valid;
class invCrudController extends Controller
{
  public function view(inventories $inv){
    return view('admins.CRUD_inven.viewIN',compact('inv'));
  }

  public function edit(inventories $inv){
  return view('admins.CRUD_inven.editIN',compact('inv'));
  }

  public function delete(inventories $inv){
      inven_quires::deleteinv($inv);
      return view('admins.CRUD_inven.showMsg',['msg'=>'inventory Deleted Successfully']);

  }

  public function update(inventories $inv,Request $request){
    $validation=inven_valid::validate_inven($request);
    if (!$validation->fails() ) {
    inven_quires::updateinv(inven_valid::$inputs,$inv->id);
    //dd('done');
    return view('admins.CRUD_inven.showMsg',['msg'=>'inventory Updated Successfully']);


    }else{
      $err=$validation->errors()->all();
      //dd(validate_user::$inp_up);
       //dd($err);
       return view('admins.CRUD_inven.showMsg',['err'=>$err]);

    }

     }
}
