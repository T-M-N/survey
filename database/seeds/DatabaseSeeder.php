<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('questions')->insert([
            [
                'question_label' => 'Votre adresse mail',
                'type' => 'B',
                'option' => 'null'
            ],
            [
                'question_label' => 'Votre âge',
                'type' => 'B',
                'option' => 'null'
            ],
            [
                'question_label' => 'Votre sexe',
                'type' => 'A',
                'option' => json_encode(['Homme', 'Femme', 'Préfère ne pas répondre'])
            ]
           
        ]);

         //$this->call(QuestionSeeder::class);
    }
}
