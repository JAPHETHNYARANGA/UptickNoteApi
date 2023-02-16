<?php

namespace App\Http\Controllers;

use App\Models\notes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotesController extends Controller
{
    public function addnote(Request $request){
        if(Auth::check()){
            $notes = new notes();
            $notes->title =$request->title;
            $notes->body = $request->body;

            $res = $notes ->save();

            if($res){
                return response([
                    'success'=>true,
                    'message'=>'note added successfully'
                ],200);
            }else{
                return response([
                    'success'=>false,
                    'message'=>'adding notes failed'
                ],201);
            }
        }
    }

    public function getnote(){
        if(Auth::check()){
            $notes = notes::all();

            
            return response([
                'success'=>true,
                'notes'=>$notes
            ],200);  
        }else{
            return response([
                'success' =>false,
                'message'=>'failed to fetch notes'
            ],201);
        }
    }

    public function deletenote($id){
        if(Auth::check()){
            $notes = notes::find($id);
            
            $res = $notes->delete();


            if($res){
                return response(
                    [
                        'success'=>true,
                        'message'=>'note deleted successfully'
                    ],200);
            }else{
                return response(
                    [
                        'success'=>false,
                        'message'=>'note delete failed'
                    ],201
                );
        }
    }

    
}