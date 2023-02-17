<?php

namespace App\Http\Controllers;

use App\Models\notes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotesController extends Controller
{
    //add new notes
    
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

    //get all notes from db
    
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

    //get specific note from db


    public function getSpecificNote($id){
        if(Auth::check()){
            
            
            $notes = notes::find($id);

            
            return response([
                'success'=>true,
                'note'=>$notes
            ],200);  
        }else{
            return response([
                'success' =>false,
                'message'=>'failed to fetch notes'
            ],201);
        }
    }

    

    //delete specific note from db

    public function deletenote($id){
        // if(Auth::check()){
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
        // }
    }

    //update specific note in db

    

    public function updateNotes(Request $request, $id)
    {
        // Find the record you want to update
        $record = notes::find($id);

        // Update the record with new data
        $record->id;
        $record->title = $request->title;
        $record->body = $request->body;
        $res = $record->save();

        if($res){
            return response([
                'success'=>true,
                'message' => 'note updated successfully',
            ], 200);
        }else{
            return response([
                'success'=>false,
                'message' => 'note failed to update',
            ], 201);
        }
        
    }
}