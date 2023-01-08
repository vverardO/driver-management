<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(10)
            ->hasDrivers(5)
            ->hasVehicles(5)
            ->hasAddresses(5)
            ->hasFinancialReleases(5)
            ->create();
        

    }
}
