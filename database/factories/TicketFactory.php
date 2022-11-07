<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'code' => $this->faker->unique()->randomNumber(8),
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'category_id' => $this->faker->numberBetween(1, 5),
            'subcategory_id' => $this->faker->numberBetween(1, 5),
            'classification_id' => $this->faker->numberBetween(1, 5),
            'status_id' => $this->faker->numberBetween(1, 7),
            'priority_id' => $this->faker->numberBetween(1, 3),
            'user_id' => $this->faker->numberBetween(1, 10),
            'created_by' => $this->faker->numberBetween(1, 10),
        ];
    }
}
