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
        public function index(){
            return redirect()->route('home');
        }

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
            $user->answers()->detach();

            // dump($request->all());
            foreach($questions as $question){
               
                $answer_given = $request->input('question_'.$question->id);
                // dump($question->type);
                // dump('question_'.$question->id);
                if($answer_given){
                    if($question->type === 'A'){
                        $answer = Answer::find($answer_given);
                    }

                    if($question->type === 'B'){
                        $answer = $question->answers()->first();
                        // dump($answer);
                        $answer->option = $answer_given;
                        $answer->save();
                    }
                   
                    if($question->type === 'C'){
                        $answer = $question->answers()->first();
                        // dump($answer);
                        $answer->option = $answer_given;
                        $answer->save();
                    }

                     $user->answers()->attach($answer);
                }
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
