<?php

namespace Database\Factories;

use App\Models\Agenda;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agenda>
 */
class AgendaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Agenda::class;
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'description' => fake()->sentence(10),
            'location' => fake()->city(),
            'date' => fake()->dateTimeBetween('-1 month', '+12 month')->format('Y-m-d'),
            'time_start' => fake()->time('H:i'),
            'time_finish' => fake()->boolean(70) ? fake()->time('H:i') : null,
        ];
    }
}
