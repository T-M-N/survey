<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;
use App\User;

class FrontController extends Controller
{
   
   public function index(){ 
      $questions = Question::all(); 
      $options= Answer::all();  
      
      return view('front.index', ['questions' => $questions, 'options' => $options]); 
   }

}
