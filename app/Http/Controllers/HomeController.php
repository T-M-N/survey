<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Charts\StatisticChart;
// use App\Question;
// use App\Answer;
// use App\User;
// use App\Chart;
// use DB;

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
        
    }
}


