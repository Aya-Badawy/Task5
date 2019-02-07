<?php
namespace App;
use Illuminate\Support\Facades\DB;

class counters{


     public static function counters(){
      $counters=['num_admins'=>self::countAdmins(),
                 'num_magers'=>self::countInventoryManger(),
                 'num_inven'=>self::countInventories()];
        return  $counters;
     }

     private static function countAdmins(){
       $num=DB::table('users')->select(DB::raw('count(*) as count'))
                       ->where('role_id', 10)->get();

                       return $num[0]->count;
     }

     private static function countInventoryManger(){
       $num=DB::table('users')->select(DB::raw('count(*) as count'))
                       ->where('role_id', 20)->get();

                       return $num[0]->count;
     }

    private  static function countInventories(){
      return DB::table('inventories')->count();
    }

}
