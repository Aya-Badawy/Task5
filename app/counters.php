<?php
namespace App;
use Illuminate\Support\Facades\DB;

class counters{


     public static function counters(){
      $counters=['num_admins'=>self::countAdmins(),
                 'num_magers'=>self::countInventoryManger(),
                 'num_inven'=>self::countInventories(),
                  'users'=>self::getUsers(),
                  'inven'=>self::getinven()];
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

    private  static function getUsers($start=1,$end=5){
      $results = DB::table('users')
           ->whereBetween('id', [$start,$end])
           ->get();
           return $results;
        }

        private  static function getinven($start=1,$end=5){
          $results = DB::table('inventories')
               ->whereBetween('id', [$start,$end])
               ->get();
               return $results;
            }

}
