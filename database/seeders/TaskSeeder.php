<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;
use App\Models\User;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

        foreach ($users as $user) {
            for ($i = 0; $i < 4; $i++) {
                Task::create([
                    'title' => fake()->sentence(),
                    'description' => fake()->paragraph(),
                    'status' => fake()->randomElement(['pending', 'completed']),
                    'priority' => fake()->randomElement(['low', 'medium', 'high']),
                    'due_date' => fake()->date(),
                    'user_id' => $user->id,
                ]);
            }
        }
    }
}
