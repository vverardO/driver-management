<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class DriverFactory extends Factory
{
    public function definition(): array
    {
        $document = $this->faker->randomNumber(3, true).'.'.$this->faker->randomNumber(3, true).'.'.$this->faker->randomNumber(3, true).'-'.$this->faker->randomNumber(2, true);
        $identificationCard = $this->faker->randomNumber(5, true).$this->faker->randomNumber(5, true);

        return [
            'name' => fake()->name(),
            'document' => $document,
            'identification_card' => $identificationCard,
            'birth_date' => fake()->date(),
            'user_id' => User::inRandomOrder()->first()->id,
        ];
    }
}
