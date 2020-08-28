<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;
use App\User;

class AnswerController extends Controller
{
    private $user = null;

        public function __constructor()
        {
            $this->user = User::find(1);
        }

        public function store(Request $request)
        {
            // Vérifier si l'email est enregistré dans la table "user"
            // Si l'utilisateur l'es pas là
            // Insérer l'utilisateur

            $usermail = $request->input('question_1');

            $email_exist = User::where('email', $usermail)->count();

            if($email_exist == 0)
            {
                $data = [
                'username' => $usermail,
                'user_role' => 'visitor',
                'email'=> $usermail ,
                'password' => 'test'
                ];

                // User::create($data);
            }
            $user_id = User::where('email', $usermail)->get('id');

            dump($user_id);


            $questions = Question::all();

            foreach($questions as $question)
            {
                $name = "question_".$question->id;
                $answer_given = $request->input($name);

                $answer_exist = Answer::where('option', $answer_given)->count();

                if($answer_exist == 0){
                $answer_exist = Answer::where('option', $answer_given)->get('id');

                $data = 
                [
                'option'=> $answer_given,
                'status'=> 'inactif',
                'question_id'=> $question->id
                ];
                Answer::create($data);
            }

            $answer_id = Answer::where('option', $answer_given)->get('id');

            // $data = [
            //     'user_id' => $user_id,
            //     'answer_id' => $answer_id,
            // ];

            // Answer::create($data);

            $user = User::where('email')->get('id');
            dump($user);
            return;
            $answer = Answer::where('option', $answer_given)->get('id');

            $user->answers()->attach($answer);

            }
            return view('front.validate');
    }
}
