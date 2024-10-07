<?php

namespace App\Http\Controllers;

use App\Models\login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }
    public function loginPost(Request $request){
   $credentials = [
    'Username' => $request->input('Username'),
    'password' => $request->input('password'),
];


if (Auth::attempt($credentials)) {
       return view ('home');
}



    }
     public function registerPost(Request $request)
     
     {
        $request->validate([
          'Username'=>'required',
          'Email' => 'required',
          'password' => 'required'

        ]);
          $user = new login();
          $user->Email = $request->Email;
          $user->Username = $request->Username;
      $hashedPassword = Hash::make('password');
      $user->password = $hashedPassword;
            if($user->save()){
              return redirect(route('login'))->with("success","User Successfully Created");
            }   return redirect(route('login'))->with("error","Failed to Created");
        
    }
}
