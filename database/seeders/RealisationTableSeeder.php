<?php

namespace Database\Seeders;

use App\Models\Realisation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RealisationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Realisation::factory()->count(15)->create();
    }
}
