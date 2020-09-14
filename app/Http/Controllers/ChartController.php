<?php

namespace App\Http\Controllers;

use App\Chart;

use App\Question;
use App\Answer;
use App\User;
use DB;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       
        $tabs = [6, 7, 10];
        
        foreach($tabs as $tab){
        $answers = DB::table('answers')
        ->where('question_id', '6')
        ->select('option', DB::raw('count(*)'))
        ->groupBy('option')
        ->pluck('option', 'option')->all();  
       
     }  

      $chart = new Chart;
      $chart->labels = (array_keys($answers));
      $chart->dataset = (array_values($answers));

          return view('back.survey.statistic', 
          [
                'tabs'=>$tabs, 
                'answers'=>$answers
         ], 
          compact('chart'));

        //   return response()->json([
        //       'tabs'=>$tabs,
        //       'answers'=>$answers
        //   ]);
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
     * @param  \App\Chart  $chart
     * @return \Illuminate\Http\Response
     */
    public function show(Chart $chart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chart  $chart
     * @return \Illuminate\Http\Response
     */
    public function edit(Chart $chart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chart  $chart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chart $chart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chart  $chart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chart $chart)
    {
        //
    }
}
