<?php

namespace Database\Factories;

use App\Models\Hotel;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $hotelid = Hotel::inRandomOrder()->first();
      
        return [
            "hotel_id" => $hotelid,
            "room_number" => fake()->unique()->numberBetween(100,999),
            "type" => fake()->randomElement(["single","double","vip"]),
            "per_night_price" =>fake()->numberBetween(100,1000),
            "is_available" => fake()->boolean(50),

        ];
    }
}
