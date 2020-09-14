<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\StatisticChart;
use App\Question;
use App\Answer;
use App\User;
use App\Chart;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $questions = Question::where('type', 'A')->get();
        $users = User::all();
        // $answers = Answer::where('question_id', '=', '6')->get()->count();

        $answers = DB::table('answers')
        ->where('question_id',6)
        ->select('option')
        ->get();

     
        $chart = new Chart;
        $chart->labels = (array_keys($answers));
        return view('back.survey.statistic', compact('chart'));

        // return view('back.survey.statistic', [
        //     'questions'=>$questions,
        //     'answers'=>$answers
        // ]);


        //  return response()->json([
        //  'question'=>$questions,
        //  'answers'=>$answers
        //  ]);
    }
}


