<?php

use Illuminate\Database\Seeder;
use App\Answer;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataAnswer = [
        [
            'option' => null,
            'question_id' => 1
        ],
        [
            'option' => null,
            'question_id' => 2
        ],
        [   
            'option' => 'Homme',
            'question_id' => 3
        ],
        [
            'option' => 'Femme',
            'question_id' => 3
        ],
        [ 
            'option'=>'Préfère ne pas répondre',
            'question_id' => 3
        ],
        [
            'option' => null,
            'question_id' => 4
        ],
        [
            'option' => null,
            'question_id' => 5
        ],
        [
            'option' => 'Occulus Rift/s',
            'question_id' => 6
        ],
        [
            'option' => 'HTC Vive',
            'question_id' => 6
        ],
        [
            'option' => 'Windows Mixed Reality',
            'question_id' => 6
        ],
        [
            'option' => 'PSVR',
            'question_id' => 6
        ],
        [
            'option' => 'SteamVR',
            'question_id' => 7
        ],
        [
            'option' => 'Occulus store',
            'question_id' => 7
        ],
        [
            'option' => 'Viveport',
            'question_id' => 7
        ],
        [
            'option' => 'Playstation VR',
            'question_id' => 7
        ],
        [
            'option' => 'Google Play',
            'question_id' => 7
        ],
        [
            'option' => 'Windows store',
            'question_id' => 7
        ],
        [
            'option' => 'Occulus Quest',
            'question_id' => 8
        ],
        [
            'option' => 'Occulus Go',
            'question_id' => 8
        ],
        [
            'option' => 'HTC Vive Pro',
            'question_id' => 8
        ],
        [
            'option' => 'Autre',
            'question_id' => 8
        ],
        [
            'option' => 'Aucun',
            'question_id' => 8
        ],
        [
            'option' => null,
            'question_id' => 9
        ],
        [
            'option' => 'Regarder des émissions TV en direct',
            'question_id' => 10
        ],
        [
            'option' => 'Regarder des films',
            'question_id' => 10
        ],
        [
            'option' => 'Jouer en solo',
            'question_id' => 10
        ],
        [
            'option' => 'Jouer en team',
            'question_id' => 10
        ],
        [
            'option' => null,
            'question_id' => 11
        ],
        [
            'option' => null,
            'question_id' => 12
        ],
        [
            'option' => null,
            'question_id' => 13
        ],
        [
            'option' => null,
            'question_id' => 14
        ],
        [
            'option' => null,
            'question_id' => 15
        ],
        [
            'option' => 'Oui',
            'question_id' => 16
        ],
        [
            'option' => 'Non',
            'question_id' => 16
        ],
        [
            'option' => 'Oui',
            'question_id' => 17
        ],
        [
            'option' => 'Non',
            'question_id' => 17
        ],
        [
            'option' => null,
            'question_id' => 18
        ],
        [
            'option' => null,
            'question_id' => 19
        ],
        [
            'option' => null,
            'question_id' => 20
        ]
    ];

        foreach($dataAnswer as $dt){
            $insertData = Answer::create(array(
                'option'=>$dt['option']
            ));

            $insertData->question()->associate($dt['question_id']);
            $insertData->save();
        }
    }
}
