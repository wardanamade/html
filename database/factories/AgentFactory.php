<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agent>
 */
class AgentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->unique()->phoneNumber,
            'avatar' => $this->faker->imageUrl(640, 480, 'people'),
            'nickname' => $this->faker->unique()->userName,
            'team_id' => $this->faker->numberBetween(1, 5),
            'level_id' => $this->faker->numberBetween(1, 5),
            'status' => $this->faker->numberBetween(0, 1),
            'created_by' => $this->faker->numberBetween(1, 5),
        ];
    }
}
