<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\NotesController;
use App\Models\notes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



//authentication

Route::post('register', [AuthenticationController::class, 'register']);

Route::post('login', [AuthenticationController::class, 'login']);


//notes

Route::post('addnote', [NotesController::class, 'addnote'])->middleware('auth:api');


Route::get('getnote', [NotesController::class, 'getnote'])->middleware('auth:api');


Route::get('deletenote/{id}', [NotesController::class, 'deletenote'])->middleware('auth:api');