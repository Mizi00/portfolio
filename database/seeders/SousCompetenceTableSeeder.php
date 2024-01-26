<?php

namespace Database\Seeders;

use App\Models\SousCompetence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SousCompetenceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   

        // 1er Competence
        SousCompetence::create([
            'nom' => 'Recenser et identifier les ressources numériques',
            'idCompetence' => '1'
        ]);

        SousCompetence::create([
            'nom' => 'Exploiter des référentiels, normes et standards adoptés par le prestataire informatique',
            'idCompetence' => '1'
        ]);

        SousCompetence::create([
            'nom' => 'Mettre en place et vérifier les niveaux d’habilitation associés à un service',
            'idCompetence' => '1'
        ]);

        SousCompetence::create([
            'nom' => 'Vérifier les conditions de la continuité d’un service informatique',
            'idCompetence' => '1'
        ]);

        SousCompetence::create([
            'nom' => 'Gérer des sauvegardes',
            'idCompetence' => '1'
        ]);

        SousCompetence::create([
            'nom' => 'Vérifier le respect des règles d’utilisation des ressources numériques',
            'idCompetence' => '1'
        ]);

        //2eme Competence
        SousCompetence::create([
            'nom' => 'Collecter, suivre et orienter des demandes',
            'idCompetence' => '2'
        ]);

        SousCompetence::create([
            'nom' => 'Traiter des demandes concernant les services réseau et système, applicatifs',
            'idCompetence' => '2'
        ]);

        SousCompetence::create([
            'nom' => 'Traiter des demandes concernant les applications',
            'idCompetence' => '2'
        ]);

        //3eme competence
        SousCompetence::create([
            'nom' => 'Participer à la valorisation de l’image de l’organisation sur les médias numériques en tenant compte du cadre juridique et des enjeux économiques',
            'idCompetence' => '3'
        ]);

        SousCompetence::create([
            'nom' => 'Référencer les services en ligne de l’organisation et mesurer leur visibilité',
            'idCompetence' => '3'
        ]);

        SousCompetence::create([
            'nom' => 'Participer à l’évolution d’un site Web exploitant les données de l’organisation.',
            'idCompetence' => '3'
        ]);

        //4eme Competence
        SousCompetence::create([
            'nom' => 'Analyser les objectifs et les modalités d’organisation d’un projet',
            'idCompetence' => '4'
        ]);

        SousCompetence::create([
            'nom' => 'Planifier les activités',
            'idCompetence' => '4'
        ]);

        SousCompetence::create([
            'nom' => 'Évaluer les indicateurs de suivi d’un projet et analyser les écarts',
            'idCompetence' => '4'
        ]);

        //5eme Competence
        SousCompetence::create([
            'nom' => 'Réaliser les tests d’intégration et d’acceptation d’un service',
            'idCompetence' => '5'
        ]);

        SousCompetence::create([
            'nom' => 'Déployer un service',
            'idCompetence' => '5'
        ]);

        SousCompetence::create([
            'nom' => 'Accompagner les utilisateurs dans la mise en place d’un service',
            'idCompetence' => '5'
        ]);

        //6eme Competence
        SousCompetence::create([
            'nom' => 'Mettre en place son environnement d’apprentissage personnel',
            'idCompetence' => '6'
        ]);

        SousCompetence::create([
            'nom' => 'Mettre en œuvre des outils et stratégies de veille informationnelle',
            'idCompetence' => '6'
        ]);

        SousCompetence::create([
            'nom' => 'Gérer son identité professionnelle',
            'idCompetence' => '6'
        ]);

        SousCompetence::create([
            'nom' => 'Développer son projet professionnel',
            'idCompetence' => '6'
        ]);

    }
}
