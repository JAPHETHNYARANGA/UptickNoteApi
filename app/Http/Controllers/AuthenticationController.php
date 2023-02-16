<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
    public function register(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required'
        ]);
        
        $user= new User();
        $user ->name = $request->name;
        $user ->email = $request->email;
        $user ->password = Hash::make($request->password);
        $res = $user->save();

        if($res){
            return response([
               'success' =>true,
               'message' =>'user registered successfully',
               'user'=>$user 
            ],200);
        }else{
            return response([
                'success'=>false,
                'message'=>'user register failed',
            ],201);
        }
    }
}