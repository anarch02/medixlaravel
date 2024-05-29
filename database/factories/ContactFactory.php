<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_phone' => $this->faker->phoneNumber,
            'second_phone' => $this->faker->phoneNumber,
            'footer_phone' => $this->faker->phoneNumber,
            'person_name' => $this->faker->name,
            'tg_for_contact' => $this->faker->userName,
            'tg_chanel' => $this->faker->userName,
            'instagram' => $this->faker->userName,
            'instagram_qr' => $this->faker->imageUrl(200, 200, 'instagram QR', true),
            'facebook' => $this->faker->userName,
            'facebook_qr' => $this->faker->imageUrl(200, 200, 'facebook QR', true),
            'location' => $this->faker->address,
            'address_en' => $this->faker->address,
            'address_ru' => $this->faker->address,
            'address_uz' => $this->faker->address,
        ];
    }
}
