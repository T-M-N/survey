<?php

namespace App\Http\Controllers;
use App\Question;
use App\Answer;
use App\User;
use DB;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    // Fonction pour récupérer les informations d'une question : PIE CHART
    public function getChartDataType($id_question,$type){
         /*
            Template
            "data":{
                "labels":["Red","Blue","Yellow"],
                "datasets":[{
                    // "label":"My First Dataset",
                    "data":[300,50,100],
                    "backgroundColor":["rgb(255, 99, 132)","rgb(54, 162, 235)","rgb(255, 205, 86)"]
                }]
            }
         */
        

        /* Tableau de couleur */
        $colorPicker                            = ['#003049','#d62828','#f77f00','#fcbf49','#eae2b7','#006d77','#ffb5a7','#78290f','#001f54'];
        $questions                              = Question::with(['answers'])->where('id', $id_question)->first()->toArray();
        $chartDataInformation = [];
        $chartDataInformation['labels']                         = [];
        $chartDataInformation['datasets']                       = [];
            $datasetArray                                       = [];
            $datasetArray['data']                               = [];
            $datasetArray['backgroundColor']                    = [];
            $datasetArray['label']                              = $questions['question_label'] ;
        foreach($questions['answers'] as $answer){
            $thisOption                         = $answer['option'];
            $idThisOption                       = $answer['id'];
            // Boucle qui permet de compter combien de fois $thisOption a été utilisé
            $countThisOption = User::whereHas('answers', function ($searchTheAnswerInPivot) use ($idThisOption) {
            $searchTheAnswerInPivot->where('answer_id', $idThisOption);
            })->count();
            // Attribuer la couleur à cette option : on choisit la couleur au hasard
            $bgColor                            = $colorPicker[rand(0,(sizeof($colorPicker)-1))];
            // Pour éviter que la couleur revienne 2 fois, on le supprime de la table
            $colorPicker                        = array_values(array_diff( $colorPicker, array($bgColor) ));
            array_push( $chartDataInformation['labels'], $thisOption);
            array_push( $datasetArray['data'] , $countThisOption);
            array_push( $datasetArray['backgroundColor'] , $bgColor);
        }
        array_push( $chartDataInformation['datasets'], $datasetArray);
        $finalResult            = [];
        $finalResult['type']    = $type;
        $finalResult['data']    = $chartDataInformation;
        return $finalResult;
    }

    // Fonction qui permet de récupérer les informations des graphes 
    // REtourner sous former de JSON
    public function getJSONChartData(){
        $globalData = [];
        /* Question avec leur type respectif */
        $questionList = [
            [
                'idQuestion'    => 6,
                'type'          => 'pie'
            ],
            [
                'idQuestion'    => 7,
                'type'          => 'pie'
            ],
            [
                'idQuestion'    => 10,
                'type'          => 'pie'
            ],
            [
                'idQuestion'    => 11,
                'type'          => 'radar'
            ],
            [
                'idQuestion'    => 12,
                'type'          => 'radar'
            ],
            [
                'idQuestion'    => 13,
                'type'          => 'radar'
            ],
            [
                'idQuestion'    => 14,
                'type'          => 'radar'
            ],
            [
                'idQuestion'    => 15,
                'type'          => 'radar'
            ]
        ];
        foreach($questionList as $question){
            array_push($globalData, $this->getChartDataType($question['idQuestion'],$question['type']));
        }
        return response()->json([
            'globalData'=>$globalData,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        return view('back.survey.statistic');
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
