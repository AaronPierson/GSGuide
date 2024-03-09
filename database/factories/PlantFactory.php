<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plant>
 */
class PlantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => $this->faker->word,
            'family' => $this->faker->word,
            'species' => $this->faker->word,
            'variety' => $this->faker->word,
            'origin' => $this->faker->word,
            'growth_rate' => $this->faker->word,
            'watering' => $this->faker->word,
            'light' => $this->faker->word,
            'soil_type' => $this->faker->word,
            'fertilizer_requirements' => $this->faker->word,
            'temperature' => $this->faker->word,
            'pest_resistance' => $this->faker->word,
            'pest' => $this->faker->word,
            'care_instructions' => $this->faker->text,
            'propagation_methods' => $this->faker->text,
            'notes' => $this->faker->text,
            'description' => $this->faker->text,
            'quantity' => $this->faker->randomNumber(),
            'is_fruiting' => $this->faker->boolean,
            'is_edible' => $this->faker->boolean,
            'flower_color' => $this->faker->word,
            'leaf_color' => $this->faker->word,
            'seasonality' => $this->faker->word,
            'is_indoor' => $this->faker->boolean,
            'is_perennial' => $this->faker->boolean,
        ];
    }
}
