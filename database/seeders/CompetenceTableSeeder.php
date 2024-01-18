<?php

namespace Database\Seeders;

use App\Models\Competence;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CompetenceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $competences = [
            ['nom' => "Gérer le patrimoine informatique"],
            ['nom' => "Répondre aux incidents et aux demandes d’assistance et d’évolution"],
            ['nom' => "Développer la présence en ligne de l’organisation"],
            ['nom' => "Travailler en mode projet"],
            ['nom' => "Mettre à disposition des utilisateurs un service informatique"],
            ['nom' => "Organiser son développement professionnel"]
        ];

        Competence::insert($competences);
    }
}
