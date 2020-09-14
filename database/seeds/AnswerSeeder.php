<?php

use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->insert([
            [
                'option' => 'homme',
                'question_id' => 3
            ],
            [
                'option' => 'femme',
                'question_id' => 3
            ],
            [   'option'=>'Préfère ne pas répondre',
                'question_id' => 3
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
                'option' => 'regarder des émissions TV en direct',
                'question_id' => 10
            ],
            [
                'option' => 'regarder des films',
                'question_id' => 10
            ],
            [
                'option' => 'jouer en solo',
                'question_id' => 10
            ],
            [
                'option' => 'jouer en team',
                'question_id' => 10
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
]);
    }
}
