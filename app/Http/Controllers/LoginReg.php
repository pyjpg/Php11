<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class LoginReg extends Controller
{
    public function login(){
        return view("auth.login");
    }
    public function registration(){
        return view("auth.registration");
    }

    public function userReg(Request $request){
        
        $request->validate([
            'username'=>'required|max:20',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:20',
            'url'=>'required',
            'dob'=>'required'
        ]);
        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->url = $request->url;
        $user->dob = $request->dob;
        $res = $user->save();
        if ($res) {
            return back()->with('success', 'You have registered successfully');
        } else {
            return back()->with('fail', 'Something wrong');
        }   
    }
}
