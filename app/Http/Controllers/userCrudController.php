<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use \App\user_quiers;
use \App\validate_user;
class userCrudController extends Controller
{
    public function view(User $user){
      return view('admins.CRUD_users.view',compact('user'));
    }

    public function edit(User $user){
    return view('admins.CRUD_users.edit',compact('user'));
    }

    public function delete(User $user){
        user_quiers::deleteUser($user);
        return view('admins.CRUD_users.showMessage',['msg'=>'user Deleted Successfully']);

    }

    public function update(User $user,Request $request){
      $validation=validate_user::update_validate($request);
      if (!$validation->fails() ) {
      user_quiers::updateUser(validate_user::$inp_up,$user->id);
      //dd('done');
      return view('admins.CRUD_users.showMessage',['msg'=>'user Updated Successfully']);


      }else{
        $err=$validation->errors()->all();
        //dd(validate_user::$inp_up);
         //dd($err);
         return view('admins.CRUD_users.showMessage',['err'=>$err]);

      }

       }


    }
