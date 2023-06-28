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
    // public function store(Request $request){
    //     $input = $request->all();
    //     User::create([
    //         'name' => $input['name'],
    //         'email' => $input['email'],
    //         'password' => Hash::make($input['password'])
    //     ]);
    //     return view('welcome');
    // }
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'password' => 'required',
            'email' => 'required|unique:users, email',
        ]);
        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->save();
        return redirect()->route('welcome')->with('success', 'Data Inserted Successfully');
    }
}
  