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
                      
                    $insertData = Answer::create(array(
                        'option'=>$answer_given
                    ));

                    $insertData->question()->associate($question->id);
                    $insertData->save();
                }     
         
            array_push($answers, [
                'insertData'=>$insertData,
                'answer_given'=>$answer_given,
                'question'=>$name,
                'type'=>$question->type
                ]);

                $user->answers()->attach($insertData);
            }

            $user->URL = Str::random(20);
            $user->save();
       
        return view('front.validate', [
            'url'=>$user->URL
        ]);
               
    }

    public function show($url){

        $userAnswer = User::with(['answers','answers.question'])->where([['url', $url,]])->first();
        // $answers = $user->answers()->get();

        // return response()->json([
        // 'userAnswer'=>$userAnswer
        // ]);

        return view('front.show', [ 'userAnswer'=>$userAnswer]);

    }
}
