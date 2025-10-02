<?php namespace Database\Seeders;


use App\Models\Hotel;
use App\Models\Room;
use App\Models\Guest;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use HasFactory;
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // 1. Call other seeder classes (like City_Seeder) using $this->call()
        $this->call(
            [City_Seeder::class,]
        );

        // 2. Directly call model factories to create records.
        // The factory calls should not be wrapped in $this->call().
        Hotel::factory(50)->create();
        Room::factory(500)->create();
        Guest::factory(500)->create();
        Booking::factory(100)->create();
    }
}
