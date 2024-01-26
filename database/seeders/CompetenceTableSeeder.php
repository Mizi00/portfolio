<?php

namespace Database\Seeders;

use App\Models\Competence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompetenceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Competence::create([
            'nom' => 'Gérer le patrimoine informatique'
        ]);

        Competence::create([
            'nom' => 'Répondre aux incidents et aux demandes d’ assistance et d’ évolution'
        ]);

        Competence::create([
            'nom' => 'Développer la présence en ligne de l’organisation'
        ]);

        Competence::create([
            'nom' => 'Travailler en mode projet'
        ]);

        Competence::create([
            'nom' => 'Mettre à disposition des utilisateurs un service informatique'
        ]);

        Competence::create([
            'nom' => 'Organiser son développement professionnel'
        ]);

    }
}
