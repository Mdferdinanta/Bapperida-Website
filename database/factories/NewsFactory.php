<?php

namespace Database\Factories;

use Exception;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $source = public_path('assets/placeholder/');

        $files = File::glob($source . 'gallery-*.jpg');

        if (empty($files)) {
            throw new Exception("No placeholder images found in: $source");
        }

        $randomFile = $files[array_rand($files)];

        $destination = storage_path('app/public/images/news/');

        File::ensureDirectoryExists($destination);

        $filename = basename($randomFile);

        File::copy($randomFile, $destination . $filename);

        return [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraphs(3, true),
            'image' => 'images/news/' . $filename,
        ];
    }
}
