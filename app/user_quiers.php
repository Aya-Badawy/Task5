<?php
namespace App;
use Illuminate\Http\Reques;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class user_quiers{
     public static function insert($inputs){
       $user=[
         'name'=>$inputs['name'],
         'email'=>$inputs['email'],
         'phone'=>$inputs['phone'],
         'address'=>$inputs['address'],
         'hashed_password'=>Hash::make($inputs['password']),
         'role_id'=>$inputs['role_id']
       ];
       DB::table('users')->insert($user);
     }
     public static function getMangerById($id){
       $manger = DB::table('users')
                       ->select(DB::raw('count(*) as count'))
                       ->where([
                         ['id','=',$id],
                         ['role_id','=','20']
                       ])->get();
          if($manger[0]->count != 0){
            return true;
          }
          return false;
 }
     }
