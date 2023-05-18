<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginIndex(){
        return view('auth.Login');
    }
    public function onLoginIndex(){
        
    }
}
