<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create Admin User
        User::factory()->create([
            'name' => 'Madame DOUCOURÉ',
            'email' => 'info@villa-plein-sud-saly.com',
            'password' => bcrypt('Villapleinsud2025'),
        ]);

        // Call ReservationSeeder
        $this->call(ReservationSeeder::class);
    }
}
