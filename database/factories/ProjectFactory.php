<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
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
            'video' => $this->faker->url(),
        ];
    }
}
