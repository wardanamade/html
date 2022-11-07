<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SubcategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word,
            'description' => $this->faker->sentence,
            'slug' => $this->faker->unique()->slug,
            'category_id' => $this->faker->numberBetween(1, 5),
            'status' => $this->faker->numberBetween(0, 1),
            'created_by' => $this->faker->numberBetween(1, 5),
        ];
    }
}