<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=1;$i<5;$i++){
            User::create([
            'user_name' => fake()->userName(),
            'user_first_name' => fake()->firstName($gender = 'null'|'male'|'female'),
            'user_last_name' => fake()->lastName(),
            'user_email' => fake()->unique()->email(),
            'user_gender' => fake()->randomElement(['male', 'female']),
            'user_role' => 'user',
            'password' => '12345',

        ]);
        }
    }
}
