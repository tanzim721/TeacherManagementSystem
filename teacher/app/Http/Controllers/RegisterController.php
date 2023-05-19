<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Hash;


class RegisterController extends Controller
{
    public function create(){
        return view('auth.create');
    }
    public function store(Request $request){
        $input = $request->all();
        User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password'])
        ]);
        return view('welcome');
    }
}
  