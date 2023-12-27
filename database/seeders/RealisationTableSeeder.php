<?php

namespace Database\Seeders;

use App\Models\Realisation;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RealisationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Realisation::factory()->count(5)->create();
    }
}
