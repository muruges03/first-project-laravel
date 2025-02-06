<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vendor>
 */
class VendorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => $this->faker->company(),
            "type" => $this->faker->randomElement(['Retail', 'Wholesale', 'Distributor']),
            "contact" => $this->faker->phoneNumber(),
            "status" => $this->faker->randomElement(['Active', 'Inactive', 'Pending']), 
        ];
    }
}
