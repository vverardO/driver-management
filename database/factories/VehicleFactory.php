<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleFactory extends Factory
{
    public function definition(): array
    {
        $licensePlate = substr(str_shuffle(
            'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'
        ), 0, 7);

        return [
            'license_plate' => $licensePlate,
            'color' => fake()->safeColorName(),
            'model' => fake()->word(),
            'user_id' => User::inRandomOrder()->first()->id,
        ];
    }
}
