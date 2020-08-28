<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;
use App\User;


class SurveyController extends Controller
{
    // private $user = null;
    // public function __construct(){
    // $this->user = User::find(1);
    // }
    // public function store(request $req){

    // print_r($req->input());

    // $userId = User::pluck('id');
    // $answers = Answer::pluck('id');

    // return 'envoyer';
    // }

    // public function store(){
    //     $userId = User::pluck('id');
    //     $answers = Answer::pluck('id');

    //     $user = User::find($userId)->answers->attach($answers->$userId);

    //     return 'envoyer';
    // }
    public function store(Request $request){

     // Vérifier si l'email est enregistré dans la table "user"
     // Si l'utilisateur l'es pas là
     // Insérer l'utilisateur

     $usermail = $request->input('question_1');

     $email_exist = User::where('email', $usermail)->count();

     if($email_exist == 0){
     $data = [
     'username' => $usermail,
     'user_role' => 'visitor',
     'email'=> $usermail ,
     'password' => 'test'
     ];

     User::create($data);
     }
     $id_user = User::where('email', $usermail)->get('id');

     // dump($id_user);


     $questions = Question::all();

     foreach($questions as $question){

     $name = "question_".$question->id;
     $answer_given = $request->input($name);

     $answer_exist = Answer::where('option', $answer_given)->count();

     if($answer_exist == 0){
     $answer_exist = Answer::where('option', $answer_given)->get('id');

     $data = [
     'option'=> $answer_given,
     'status'=> 'inactif',
     'question_id'=> $question->id
     ];

     Answer::create($data);
     }

     $id_answer = Answer::where('option', $answer_given)->get('id');

     $data = [
     'user_id' => $id_user,
     'answer_id' => $id_answer,
     ];

     AnswerUser::create($data);
     }
}

}