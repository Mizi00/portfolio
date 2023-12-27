<?php

namespace Database\Seeders;

use App\Models\SousCompetence;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SousCompetenceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SousCompetence::factory()->count(15)->create();
    }
}
