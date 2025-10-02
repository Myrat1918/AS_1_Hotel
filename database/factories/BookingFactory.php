<?php

namespace Database\Factories;


use App\Models\Guest;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   
        
        $roomid = Room::inRandomOrder()->first();
        $guestid = Guest::inRandomOrder()->first();
        $check_in_at = fake()->dateTimeBetween("-10 days", "-1 days");

        return [
            "room_id" => $roomid,
            "guest_id" => $guestid,
            "check_in_at" => $check_in_at,
            "check_out_at" => fake()->dateTimeBetween($check_in_at, "now") ,
        ];
         
        }
    }

