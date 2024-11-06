<?php

namespace Database\Factories;

use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Video::class;
    public function definition(): array
    {
        return [
            'judul' => fake()->sentence(),
            'embed' => fake()->randomElement(),
            'deskripsi' => fake()->paragraph(),
            'thumbnail' => 'thumbnail/' . $this->faker->image('public/storage/thumbnail/video', 1280, 720, null, false),
        ];
    }
}
