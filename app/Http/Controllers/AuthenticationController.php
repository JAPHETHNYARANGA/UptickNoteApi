<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function login(Request $request){
        $request->validate([
           'email' =>'required|email',
           'password'=>'required' 
        ]);
        
        $email = $request->email;
        $user = User::where('email', $email)->firstOrFail();
        
        // $token = $user->createToken('Api Token')->accessToken;
        
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return response(
                [
                    'success'=>true,
                    'user'=>$user,
                    // 'token'=>$token
                ],200);
        }
        return response([
            'success'=>false,
            'message' =>'Login Failed'
        ]);
    }
}