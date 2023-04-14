<?php

namespace Database\Factories;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    protected $model = Task::class;

    public function definition()
    {
        $userIds = User::all()->pluck('id')->toArray();

        return [
            'title' => $this->faker->sentence(6, true),
            'description' => $this->faker->paragraph(4),
            'status' => $this->faker->randomElement(['pending', 'in_progress', 'completed']),
            'user_id' => $this->faker->randomElement($userIds),
        ];
    }
}
