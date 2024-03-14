<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Realisation>
 */
class RealisationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $sousTitre = ucfirst(fake()->word) . ', ' . fake()->word . ', ' . fake()->word;
        return [
            'titre' => fake()->sentence(),
            'sous-titre' => $sousTitre,
            'description' => fake()->paragraph(2, true)
        ];
    }
}
