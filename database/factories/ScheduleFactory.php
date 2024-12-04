<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->sentence(10),
            'location' => $this->faker->city,
            'date' => $this->faker->dateTimeBetween('-1 day', '+1 week')->format('Y-m-d'),
            'time_start' => $this->faker->time('H:i'),
            'time_finish' => $this->faker->boolean(75) ? $this->faker->time('H:i') : null,
        ];
    }
}
