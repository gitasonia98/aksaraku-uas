<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

use DB;
use Session;

class LoginController extends Controller
{
  // public function getLogin()
  // {
  //   return view ('login');
  // }

  // public function postLogin(Request $request)
  // {
  //   # code...
  // }
  
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

   public function index()
   {
       return view('login');
   }

   public function login(Request $request)
   {
       $login = DB::table('data_user')->where([
            'email_user'=> $request->email,
            'password_user'=> $request->password
       ]);

       // return dd($login->exists());
       if ($login->exists()) {
         Session::put('login', true);
         Session::put('user', $login->get());

         return redirect('homeuser');
         // return dd(Session::get('user')[0]->nama_user);
       } else {
          $admin = DB::table('admin')->where([
            'username'=> $request->email,
            'password'=> $request->password
          ]);

          if ($admin->exists()) {
             Session::put('login', true);
             Session::put('user', $admin->get());
             return redirect('home');
             
          }
       }

       return redirect()->back();
   }

    public function getRegister()
  {
    return view ('register');
  }

  public function postRegister(Request $request)
  {
    return dd('Register Oke');
  }

  public function logout()
  {
    Session::flush();

    return redirect('login');
  }
}
