<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\Course;
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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Student::factory(100)->create([
        //     'fname' => 'Genevieve',
        //     'lname' => 'Awa',
        //     'email' => 'awavieve@gmail.com',
        // ]);

        Student::factory(100)->create();

        Course::factory(5)->create();
    }
}
