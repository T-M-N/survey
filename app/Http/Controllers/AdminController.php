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
    $colorPicker = ['#1DB8EB','#406E7D','#19E3A7','#E65D53','#B0022F','#006d77','#ffb5a7','#78290f','#001f54'];
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
    $colorPicker = array_values(array_diff($colorPicker, array($bgColor)));
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
    public function getJSONChartData(){
        $globalData = [];
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
        ];
        foreach($questionList as $question){
            array_push($globalData, $this->getChartDataType($question['idQuestion'],$question['type']));
        }
        return response()->json([
            'globalData'=>$globalData,
        ]);
    }

//Fonction qui permet de mettre en place le Radar
    public function getJSONRadarData(){
        $questionData_elt = [];
        $questionData_elt['data'] = [];
        // Datasets
        $questionData_elt['data']['datasets'] = [];
        $questionData_elt['data']['datasets']['data'] = [];
        // Obtenez le nombre d'utilisateurs qui ont répondu à l'enquête
        $countUserAnswer = User::whereNotNull('url')->count();
        // Questions Radar
        $questions = [11,12,13,14,15];
        foreach($questions as $idQuestion){
        // Info question
        $questionInfo = Question::with(['answers'])->where('id', $idQuestion)->first()->toArray();
        $colorPicker = ['#003049','#d62828','#f77f00','#fcbf49','#eae2b7','#006d77','#ffb5a7','#78290f','#001f54'];
        // Je récupère les options de la table answers
        $answers = Answer::pluck('option');
        $idThisOption = $idQuestion['id'];
        // Avant la moyenne
        $sum = 0;
        foreach($answers as $answer){
            //Obtenez le nombre de chaque option par idQuestion
            $countEachOption = Answer::with(['question'])->where([['option',$answer],['question_id',$idQuestion]])->count();
            $answer_int = (int) $answer;
            $sum += $answer_int*$countEachOption;
            }
            $countAverage = round($sum / $countUserAnswer, 2);
            array_push($questionData_elt['data']['datasets']['data'], $countAverage);
        }
        
        return response()->json([
            'questionData_elt'=>$questionData_elt
        ]);
    }

//List question page
    public function questionTypeList(){
        $questions = Question::all();
        return view('back.survey.question', [
        'questions' => $questions
        ]);
    }


//List answers each users
    public function userAnswerList(){
        $userAnswers = User::with(['answers','answers.question'])->get();
        return view('back.survey.answer', [
        'userAnswers' => $userAnswers
        ]);
    }
}
