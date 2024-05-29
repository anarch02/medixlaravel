<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_en' => $this->faker->words(3, true),
            'name_ru' => $this->faker->words(3, true),
            'name_uz' => $this->faker->words(3, true),
            'image' => $this->faker->imageUrl(),
            'preview_en' => $this->faker->text(),
            'preview_ru' => $this->faker->text(),
            'preview_uz' => $this->faker->text(),
            'description_en' => $this->faker->text(),
            'description_ru' => $this->faker->text(),
            'description_uz' => $this->faker->text(),
            'model' => $this->faker->name(),
            'prod' => $this->faker->name(),
        ];
    }
}
