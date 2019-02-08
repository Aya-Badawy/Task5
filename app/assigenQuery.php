<?php
namespace App;
use Illuminate\Support\Facades\DB;
use \App\user_quiers;
use \App\inven_quires;

class assigenQuery{


public static function assigenDB($id,$code){
  if (user_quiers::getMangerById($id) &&
      inven_quires::getInvenByCode($code)){
     DB::table('inventories')
         ->where('serial_code', $code)
         ->update(['assigned_by' => $id]);
         return true;
  }
}
}
