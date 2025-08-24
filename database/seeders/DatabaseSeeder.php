<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sample;
use App\Models\News;

class DatabaseSeeder extends Seeder
{
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



        //  call to UserSeeder class to run seeding


        // $this->call([
        //     UserSeeder::class,
        // ]);


        Sample::factory(10)->create();
        News::factory(100)->create();

    }
}
