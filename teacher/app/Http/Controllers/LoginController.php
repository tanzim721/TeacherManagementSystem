<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminModel;


class LoginController extends Controller
{
    public function loginIndex(){
        return view('auth.Login');
    }
    public function onLogin(Request $request){
        $users = $request->input('user');
        $pass = $request->input('pass');
        $countValue = AdminModel::where('username','=',$user)->where('password','=',$pass)->count();
        if($countValue==1){
            return 1;
        }
        else{
            return 0;
        }
    }
}
