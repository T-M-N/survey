<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;
use App\User;

class SurveyController extends Controller
{
   public function index(){ 
      $questions = Question::all(); 
      $options= Answer::all();  
      
      return view('front.index', [
         'questions' => $questions, 
         'options' => $options
      ]); 
   }

//Pour contôler l'utilisateur
   public function getJSONUser(){
       $users = User::pluck('email')->toArray();

       return response()->json([
         'users'=>$users,
       ]);
   }

}
