<?php

namespace Database\Factories;

use App\Models\Hotel;
use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $cityid = City::inRandomOrder()->first();
    
        return [
            "city_id" => $cityid,
            "name" => fake()->company(),
            "address" => fake()->address(). ' ' . fake()->country(),
            "phone_number" => fake()->phoneNumber(),
            "email" => fake()->unique()->safeEmail(),
            "star" => fake()-> numberBetween(1,5),
        ];
    }
}
