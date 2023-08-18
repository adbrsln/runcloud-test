<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Workspace;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startTime = $this->faker->dateTimeBetween('-1 week', '+1 week');
        $endTime = $this->faker->dateTimeBetween($startTime, strtotime('+1 month'));
        $status = ['completed', 'pending', 'in progress'];

        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->text(200),
            'start' =>$startTime,
            'end' => $endTime,
            'status' => $this->faker->randomElement($status),
            'workspace_id' => rand(1,Workspace::count()),
            'user_id' => rand(1,User::count())
        ];
    }
}
