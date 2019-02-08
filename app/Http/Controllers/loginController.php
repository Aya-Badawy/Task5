<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
  /**
   * Handle an authentication attempt.
   *
   * @param  \Illuminate\Http\Request $request
   *
   * @return Response
   */
  public function authenticate(Request $request)
  {
      //$credentials = $request->only('email', 'password');
       $email=$_POST['email'];
       $password=$_POST['password'];


      if (Auth::attempt(['email' => $email, 'password' => $password, 'role_id' => 10])) {
          // Authentication passed...
          return redirect()->intended('ad_dashboard');
      }else if(Auth::attempt(['email' => $email, 'password' => $password, 'role_id' => 20])){
        return redirect()->intended('user_dashboard');
      }else{
        return redirect()->intended('login');
      }
  }

  public function login(){
    return view('login');
  }
}
