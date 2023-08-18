<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($number = 1 ; $number < 5; $number++){
            $emailPrefix = 'user'; // Your constant email prefix
            $email = $emailPrefix . $number . '@example.com'; // Create email address with the prefix and number

            User::factory()->create([
                'email' => $email
            ]);
        }

    }
}
