<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CompetenceTableSeeder::class);
        $this->call(RealisationTableSeeder::class);
        $this->call(SousCompetenceTableSeeder::class);
        $this->call(UserTableSeeder::class);
    }
}
