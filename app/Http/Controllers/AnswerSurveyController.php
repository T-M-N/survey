<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;
use App\User;

class AnswerSurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = User::all();        
        // $answers = Answer::all()->where('question_id', `IS`, NULL);      
        
        // $users = User::pluck('email', 'id');
        // $answers = Answer::pluck('question_id', 'id');

        // $options= Answer::all();

        // $users = User::all();
        // return $users->email;

        // $questions = Question::all();       
        // $answers = Answer::all();

        // $user = User::with(['answers'])->get();

        $first_list = Answer::with(['question'])->get()->toArray();
        $array = [];
        foreach($first_list as $first){
            array_push($array,$first);
        }

        // return view('back.survey.answer', [
        // 'users' => $user
        // ]);

        // return response()->json([
        //  'array' => $first_list
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
