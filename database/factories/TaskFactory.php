<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Workspace;
use Carbon\Carbon;
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
        $status = ['completed', 'incomplete'];
        $statusInfo = $this->faker->randomElement($status);
        if($statusInfo =='completed'){

        }
        return [
            'name' => 'Task '.$this->faker->text('10'),
            'description' => $this->faker->text(200),
            'start' =>$startTime,
            'end' => $endTime,
            'status' => $statusInfo,
            'completed_at' => $this->checkCompleted($statusInfo),
            'workspace_id' => rand(1,Workspace::count()),
            'user_id' => rand(1,User::count())
        ];
    }

    private function checkCompleted($status){
        if($status == 'completed'){
            return Carbon::now();
        }
        return null;
    }
}
