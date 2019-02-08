<?php
namespace App;
use Illuminate\Http\Reques;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class inven_quires{
     public static function insert($inputs){
       $inventory=[
         'serial_code'=>request('serial_code'),
         'storage'=>request('storage'),
         'country'=>request('country'),
         'city'=>request('city'),
         'street'=>request('street'),
         'user_id'=> Auth::id()
       ];
       DB::table('inventories')->insert($inventory);
     }

    public static function getInvenByCode($code){
      $inven = DB::table('inventories')
                      ->select(DB::raw('count(*) as count '))
                      ->where('serial_code' , $code)
                      -> get();
         if($inven[0]->count != 0){
           return true;
         }
         return false;
}
}
