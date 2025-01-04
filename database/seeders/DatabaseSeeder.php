<?php

namespace Database\Seeders;

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

        User::factory()->create([
            'first_name' => 'Rahul',
            'last_name' => 'Rajput',
            'email' => 'test@example.com',
        ]);


        // If we want to also give the Job seeder over here
        // We creates its outside of this directory for just good formatting
        $this->call(JobSeeder::class);
    }
}
