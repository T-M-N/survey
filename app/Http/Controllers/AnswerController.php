<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;
use App\User;

class AnswerController extends Controller
{
    // private $user = null;

        // public function __constructor()
        // {
        //     $this->user = User::find(1);
        // }

        public function store(Request $request)
        {
            $questions = Question::all();
            $email = $request->input('question_1');
            $user = User::where('email', $email)->first();
            $answers = []; 

            foreach($questions as $question){

            $name = "question_".$question->id;
            $answer_given = $request->input($name);

            if($question->type === 'A'){
                $answer = Answer::where('id', $answer_given)->get('id');
            }else{
                //question de type B et C
                $answer = Answer::create([
                    'option'=>$answer_given
                ]);
            }

            array_push($answers, [
                'answer'=>$answer,
                'answer_given'=>$answer_given,
                'question'=>$name,
                'type'=>$question->type
                ]);

        $user->answers()->attach($answer);

            }

             return response()->json([
            'inputs' => $request->all(),
             "user" => $user,
             "answers" => $answers,
             ]);
            // return view('back.survey.index');     
    }
}
