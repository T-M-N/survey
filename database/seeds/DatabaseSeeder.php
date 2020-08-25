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
            ],
            [
                'question' => 'Nombre de personne dans votre foyer (adulte & enfants)',
                'type' => 'C',
                'option' => json_encode([0, 1, 2, 3, 4, 5])
            ],
             [
                'question' => 'Votre profession',
                'type' => 'B',
                'option' => 'null'
            ],
             [
                'question' => 'Quel marque de casque VR utilisez vous ?',
                'type' => 'A',
                'option' => json_encode(['Occulus Rift/s', 'HTC Vive', 'Windows Mixed Reality', 'PSVR'])
            ],
            [
                'question' => 'Sur quel magasin d’application achetez vous des contenus VR ?',
                'type' => 'A',
                'option' => json_encode(['SteamVR', 'Occulus store', 'Viveport', 'Playstation VR', 'Google Play', 'Windows store'])
            ],
             [
                'question' => 'Quel casque envisagez vous d’acheter dans un futur proche ?',
                'type' => 'A',
                'option' => json_encode(["Occulus Quest", "Occulus Go", "HTC Vive Pro", "Autre", "Aucun"])
            ],
            [
                'question' => 'Au sein de votre foyer, combien de personne utilisent votre casque VR pour regarder Bigscreen ?',
                'type' => 'C',
                'option' => json_encode([1, 2, 3, 4, 5])
            ],
            [
                'question' => 'Vous utilisez principalement Bigscreen pour :',
                'type' => 'A',
                'option' => json_encode([
                    "regarder des émissions TV en direct", "regarder des films",
                    "jouer en solo", "jouer en team"
                ])
            ],
            [
                'question' => 'Combien donnez vous de point pour la qualité de l’image sur Bigscreen ?',
                'type' => 'C',
                'option' => json_encode([1, 2, 3, 4, 5])
            ],
            [
                'question' => 'Combien donnez vous de point pour le confort d’utilisation de l’interface Bigscreen ?',
                'type' => 'C',
                'option' => json_encode([1, 2, 3, 4, 5])
            ],
            [
                'question' => 'Combien donnez vous de point pour la connection réseau de Bigscreen ?',
                'type' => 'C',
                'option' => json_encode([1, 2, 3, 4, 5])
            ],
            [
                'question' => 'Combien donnez vous de point pour la qualité des graphismes 3D dans Bigscreen ?',
                'type' => 'C',
                'option' => json_encode([1, 2, 3, 4, 5])
            ],
            [
                'question' => 'Combien donnez vous de point pour la qualité audio dans Bigscreen ?',
                'type' => 'C',
                'option' => json_encode([1, 2, 3, 4, 5])
            ],
            [
                'question' => 'Aimeriez vous avoir des notifications plus précises au cours de vos sessions Bigscreen ?',
                'type' => 'A',
                'option' => json_encode(['Oui', 'Non'])
            ],
            [
                'question' => 'Aimeriez vous pouvoir inviter un ami à rejoindre votre session via son smartphone ?',
                'type' => 'A',
                'option' => json_encode(['Oui', 'Non'])
            ],
            [
                'question' => 'Aimeriez vous pouvoir enregistrer des émissions TV pour pouvoir les regarder ultérieurement ?',
                'type' => 'C',
                'option' => json_encode([1, 2, 3, 4, 5])
            ],
            [
                'question' => 'Aimeriez vous jouer à des jeux exclusifs sur votre Bigscreen ?',
                'type' => 'C',
                'option' => json_encode([1, 2, 3, 4, 5])
            ],
            [
                'question' => 'Quelle nouvelle fonctionnalité de vos rêve devrait exister sur Bigscreen ?',
                'type' => 'B',
                'option'=>'null'
            ],
           
        ]);

         //$this->call(QuestionSeeder::class);
    }
}
