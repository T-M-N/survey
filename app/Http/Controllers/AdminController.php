<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;
use App\User;
use DB;

class AdminController extends Controller
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
    public function index(){
        return view('back.survey.statistic');
    }

    // Fonction pour récupérer les informations d'une question : PIE CHART
    public function getChartDataType($id_question,$type){
    /* Tableau de couleur */
    $colorPicker = ['#003049','#d62828','#f77f00','#fcbf49','#eae2b7','#006d77','#ffb5a7','#78290f','#001f54'];
    $questions = Question::with(['answers'])->where('id', $id_question)->first()->toArray();
    $chartDataInformation = [];
    $chartDataInformation['labels'] = [];
    $chartDataInformation['datasets'] = [];
    $datasetArray = [];
    $datasetArray['data'] = [];
    $datasetArray['backgroundColor'] = [];
    $datasetArray['label'] = $questions['question_label'] ;
    foreach($questions['answers'] as $answer){
    $thisOption = $answer['option'];
    $idThisOption = $answer['id'];
    // Boucle qui permet de compter combien de fois $thisOption a été utilisé
    $countThisOption = User::whereHas('answers', function ($searchTheAnswerInPivot) use ($idThisOption) {
    $searchTheAnswerInPivot->where('answer_id', $idThisOption);
    })->count();
    // Attribuer la couleur à cette option : on choisit la couleur au hasard
    $bgColor = $colorPicker[rand(0,(sizeof($colorPicker)-1))];
    // Pour éviter que la couleur revienne 2 fois, on le supprime de la table
    $colorPicker = array_values(array_diff( $colorPicker, array($bgColor) ));
    array_push( $chartDataInformation['labels'], $thisOption);
    array_push( $datasetArray['data'] , $countThisOption);
    array_push( $datasetArray['backgroundColor'] , $bgColor);
    }
    array_push( $chartDataInformation['datasets'], $datasetArray);
    $finalResult = [];
    $finalResult['type'] = $type;
    $finalResult['data'] = $chartDataInformation;
    return $finalResult;
    }

    // Fonction qui permet de récupérer les informations des graphes
    // REtourner sous former de JSON
    public function getJSONChartData(){
    $globalData = [];
    /* Question avec leur type respectif */
    $questionList = [
    [
    'idQuestion' => 6,
    'type' => 'pie'
    ],
    [
    'idQuestion' => 7,
    'type' => 'pie'
    ],
    [
    'idQuestion' => 10,
    'type' => 'pie'
    ],
    [
    'idQuestion' => 11,
    'type' => 'radar'
    ],
    [
    'idQuestion' => 12,
    'type' => 'radar'
    ],
    [
    'idQuestion' => 13,
    'type' => 'radar'
    ],
    [
    'idQuestion' => 14,
    'type' => 'radar'
    ],
    [
    'idQuestion' => 15,
    'type' => 'radar'
    ]
    ];
    foreach($questionList as $question){
    array_push($globalData, $this->getChartDataType($question['idQuestion'],$question['type']));
    }
    return response()->json([
    'globalData'=>$globalData,
    ]);
    }


    public function questionTypeList(){
    $questions = Question::all();

    return view('back.survey.question', [
    'questions' => $questions
    ]);
    }


    public function userAnswerList(){
    $userAnswers = User::with(['answers','answers.question'])->get();

    return view('back.survey.answer', [
    'userAnswers' => $userAnswers
    ]);
    }


}


