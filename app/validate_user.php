<?php
namespace App;
use Illuminate\Http\Request;
class validate_user{
   public static $inputs;
   public static $inp_up;
  public static function validate_user(){
    self::$inputs=[
        'name'=>request('name'),
        'email'=>request('email'),
        'phone'=>request('phone'),
        'address'=>request('address'),
        'password'=>request('password1'),
        'confirm_passowrd'=>request('password1'),
       'role_id'=>request('role')
      ];
      //dd($inputs);
     // dd($inputs);
     $rules=[
       'name'=> [
       "required",
       "regex:/^([a-zA-Z' ]+)$/"
     ],
     'email'=>[
       "required",
        "email",
        "unique:users",
        "regex:/\A[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}\Z/i"
     ],
     'phone'=>[
       "required",
       "unique:users",
       "regex:/^[0-9\-\(\)\/\+\s]*$/"
     ],
     'address'=>[
       "required"
     ],
     'password'=>[
       "required",
       "regex:/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/"
     ],
     'confirm_passowrd'=>[
       "required",
       "regex:/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/",
        "same:password"
     ],
     'role_id'=>"required"
   ];

   $messages=[
     'password.regex'=>'Password must be at least 8 characters and must contain at least one lower case letter,
   & one upper case letter and one digit'
 ];
 $validation = \Validator::make( self::$inputs, $rules ,$messages);

 return $validation;
  }


  public static function update_validate(){
        self::$inp_up=[
          'name'=>request('name'),
          'email'=>request('email'),
          'phone'=>request('phone'),
          'address'=>request('address'),
          'role_id'=>request('role')
        ];
          $rules=[
            'name'=> [
            "regex:/^([a-zA-Z' ]+)$/"
          ],
          'email'=>[
             "email",
             "regex:/\A[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}\Z/i"
          ],
          'phone'=>[
            "regex:/^[0-9\-\(\)\/\+\s]*$/"
          ],
          'role_id'=>"required"

        ];

        $validation = \Validator::make( self::$inp_up, $rules);
     return  $validation;

  }

}
