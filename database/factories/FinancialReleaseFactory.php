<?php

namespace Database\Factories;

use App\Models\Driver;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class FinancialReleaseFactory extends Factory
{
    public function definition(): array
    {
        return [
            'description' => fake()->paragraph(5),
            'value' => fake()->randomFloat(2, 0, 250),
            'driver_id' => Driver::inRandomOrder()->first()->id,
            'user_id' => User::inRandomOrder()->first()->id,
        ];
    }
}
