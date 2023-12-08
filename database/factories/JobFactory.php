<?php

namespace Database\Factories;

use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    protected $model = Job::class;

    public function definition()
    {
        // Cria um usuário usando a factory de usuário
        $user = User::factory()->create();

        return [
            'user_id' => $user->id,
            'title' => $this->faker->jobTitle,
            'description' => $this->faker->paragraph,
            'type' => $this->faker->randomElement(['CLT', 'Pessoa Jurídica', 'Freelancer']),
            'status' => $this->faker->randomElement(['open', 'closed', 'paused'])
        ];
    }
}
