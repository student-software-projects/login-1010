<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;

class LoginController extends Controller
{
    //GET -> view
    public function form_login(){
        return view('modules.auth.form_login');
    }

    // POST
    public function auth(Request $request){

        $user=User::where('email','=',$request->input('email'))->first();
        if($user){
             if($user->password==$request->input('password')){
                 //FECADE

                 session(['USER'=>$user]);
                 return redirect()->route('dashboard.index');
             }else{
                 return redirect()->route('auth.form_login');
             }
        }else{
            return redirect()->route('auth.form_login');
        }


    }
}
