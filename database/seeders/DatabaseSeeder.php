<?php

namespace Database\Seeders;

use App\Models\Mine;
use App\Models\stoneType;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        User::factory()->create([
            'name' => 'murugesan',
            'email' => 'muruges@example.com',
        ]);
        Mine::factory(5)->create();
        stoneType::factory(10)->create();
    }
}
