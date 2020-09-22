<?php

use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('questions')->insert([
            [
                'question_label' => 'Votre adresse mail',
                'type' => 'B',
            ],
            [
                'question_label' => 'Votre âge',
                'type' => 'B',
            ],
            [
                'question_label' => 'Votre sexe',
                'type' => 'A',
            ],
            [
                'question_label' => 'Nombre de personne dans votre foyer (adulte & enfants)',
                'type' => 'C',
            ],
             [
                'question_label' => 'Votre profession',
                'type' => 'B',
            ],
             [
                'question_label' => 'Quel marque de casque VR utilisez vous ?',
                'type' => 'A',
            ],
            [
                'question_label' => 'Sur quel magasin d’application achetez vous des contenus VR ?',
                'type' => 'A',
                
            ],
             [
                'question_label' => 'Quel casque envisagez vous d’acheter dans un futur proche ?',
                'type' => 'A',
            ],
            [
                'question_label' => 'Au sein de votre foyer, combien de personne utilisent votre casque VR pour regarder Bigscreen ?',
                'type' => 'C',
            ],
            [
                'question_label' => 'Vous utilisez principalement Bigscreen pour :',
                'type' => 'A',
            ],
            [
                'question_label' => 'Combien donnez vous de point pour la qualité de l’image sur Bigscreen ?',
                'type' => 'C',
            ],
            [
                'question_label' => 'Combien donnez vous de point pour le confort d’utilisation de l’interface Bigscreen ?',
                'type' => 'C',
            ],
            [
                'question_label' => 'Combien donnez vous de point pour la connection réseau de Bigscreen ?',
                'type' => 'C',
            ],
            [
                'question_label' => 'Combien donnez vous de point pour la qualité des graphismes 3D dans Bigscreen ?',
                'type' => 'C',
            ],
            [
                'question_label' => 'Combien donnez vous de point pour la qualité audio dans Bigscreen ?',
                'type' => 'C',
            ],
            [
                'question_label' => 'Aimeriez vous avoir des notifications plus précises au cours de vos sessions Bigscreen ?',
                'type' => 'A',
            ],
            [
                'question_label' => 'Aimeriez vous pouvoir inviter un ami à rejoindre votre session via son smartphone ?',
                'type' => 'A',
            ],
            [
                'question_label' => 'Aimeriez vous pouvoir enregistrer des émissions TV pour pouvoir les regarder ultérieurement ?',
                'type' => 'A',
            ],
            [
                'question_label' => 'Aimeriez vous jouer à des jeux exclusifs sur votre Bigscreen ?',
                'type' => 'A',
            ],
            [
                'question_label' => 'Quelle nouvelle fonctionnalité de vos rêve devrait exister sur Bigscreen ?',
                'type' => 'B',
            ],
           
        ]);
    }
}
