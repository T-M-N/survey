<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;
use App\User;

class FrontController extends Controller
{
   //c'est lier au formulaire
   public function index(){ 
      $questions = Question::all(); 
      $options= Answer::all();  
      
      return view('front.index', [
         'questions' => $questions, 
         'options' => $options
      ]); 
   }

   public function getJsonUser(){
       $users = User::pluck('email')->toArray();

       return response()->json([
         'users'=>$users,
       ]);
   }

}
