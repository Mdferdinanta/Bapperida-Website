<?php

namespace Database\Factories;

use App\Models\Berita;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Berita>
 */
class BeritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Berita::class;
    public function definition(): array
    {
        return [
            'judul' => fake()->sentence(),
            'artikel' => fake()->paragraphs(3, true),
            'thumbnail' => 'thumbnail/' . $this->faker->image('public/storage/thumbnail', 1280, 720, null, false),
        ];
    }
}
