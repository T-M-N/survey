<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
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
             $data = $request->validate([
             'question_1' => 'required|max:255',
             'question_2' => 'required|max:255',
             'question_5' => 'required|max:255',
             'question_20' => 'required|max:255'
             ]);


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
                        'option'=>$answer_given,
                        'question_id'=>$question->id
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

            $user->URL = Str::random(20);
            $user->save();
       
        return view('front.validate', [
            'url'=>$user->URL
        ]);
               
    }

    public function show($url){
        $questions = Question::all();
        $answers = Answer::all();

        $user = User::where([['url', $url,]])->first();
        $answers = $user->answers()->get();
        return view('front.show', [ 'questions'=>$questions, 'answers'=>$answers ]);

    }
}
