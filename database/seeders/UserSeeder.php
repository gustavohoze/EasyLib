<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create a specific admin user
        User::factory()->admin()->create([
            'email' => 'admin@example.com',
            'password' => Hash::make('adminpassword')
        ]);

        // Create a specific regular user
        User::factory()->regularUser()->create([
            'email' => 'user@example.com',
            'password' => Hash::make('userpassword')
        ]);

        // Create additional random users
        User::factory()->count(10)->create();
    }
}
