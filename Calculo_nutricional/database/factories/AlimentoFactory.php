<?php

namespace Database\Factories;

use App\Models\Alimento;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Alimento>
 */
class AlimentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     *@return array
     */
    public function definition()
    {
        return [
            'Nome' => fake()->unique()->word(),
            'Calorias' => fake()->numberBetween(55, 1200),
            'Proteinas' => fake()->numberBetween(1, 30),
            'Carboidratos' => fake()->numberBetween(1, 30),
            'Gorduras' => fake()->numberBetween(1, 30),
        ];
    }
}