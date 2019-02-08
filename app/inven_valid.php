<?php
namespace App;
use Illuminate\Http\Request;

class inven_valid{
   public static $inputs;
  public static function validate_inven(){
    self::$inputs=[
        'serial_code'=>request('serial_code'),
        'storage'=>request('storage'),
        'country'=>request('country'),
        'city'=>request('city'),
        'street'=>request('street')
      ];
      //dd($inputs);
     // dd($inputs);
     $rules=[
       'serial_code'=> [
       "required",
       "numeric"
     ],
     'storage'=>[
       "required",
       "numeric"
     ],
     'country'=>"required",
     'city'=>"required",
     'street'=> "required"

   ];

 $validation = \Validator::make( self::$inputs, $rules);

 return $validation;
  }

}
