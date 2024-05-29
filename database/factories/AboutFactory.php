<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\About>
 */
class AboutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'years_in_market' => $this->faker->numberBetween(1, 50),
            'paragraph_ru' => $this->faker->paragraph,
            'paragraph_uz' => $this->faker->paragraph,
            'paragraph_en' => $this->faker->paragraph,
            'indicator1_name_ru' => $this->faker->word,
            'indicator1_name_uz' => $this->faker->word,
            'indicator1_name_en' => $this->faker->word,
            'indicator1_value' => $this->faker->numberBetween(1, 100),
            'indicator2_name_ru' => $this->faker->word,
            'indicator2_name_uz' => $this->faker->word,
            'indicator2_name_en' => $this->faker->word,
            'indicator2_value' => $this->faker->numberBetween(1, 100),
            'title_ru' => $this->faker->word,
            'title_uz' => $this->faker->word,
            'title_en' => $this->faker->word,
            'icon' => $this->faker->imageUrl(),
            'photo' => $this->faker->imageUrl(),
            'short_description_ru' => $this->faker->sentence,
            'short_description_uz' => $this->faker->sentence,
            'short_description_en' => $this->faker->sentence,
        ];
    }
}
