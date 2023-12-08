<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Job;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

class JobUnitTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker; // uso da trait para faker em erro do description fake paragraph em JobFactory.php

    /** @test */
    public function can_create_job()
    {
        // Cria um usuário usando a factory
        $user = User::factory()->create();

        // Criação do job associado ao usuário
        $job = Job::factory()->create([
            'user_id' => $user->id,
            'title' => 'TestJob',
            'description' => $this->faker->paragraph,
            'type' => 'CLT',
            'status' => $this->faker->randomElement(['active', 'paused', 'closed']),
        ]);

        // Verificações do teste
        $this->assertInstanceOf(Job::class, $job);
        $this->assertSame('TestJob', $job->title);
    }

    /** @test */
    public function can_update_job()
    {
        $job = Job::factory()->create();

        $newTitle = 'New Title';
        $job->title = $newTitle;
        $job->save();

        $this->assertSame($newTitle, $job->fresh()->title);
    }

    /** @test */
    public function can_delete_job()
    {
        $job = Job::factory()->create();

        $job->delete();

        $this->assertDatabaseMissing('jobs', ['id' => $job->id]);
    }

    /** @test */
    public function can_retrieve_job()
    {
        // Criação do job
        $job = Job::factory()->create();

        // Busca do job pelo ID
        $retrievedJob = Job::find($job->id);

        // Verificações do teste
        $this->assertInstanceOf(Job::class, $retrievedJob);
        $this->assertEquals($job->title, $retrievedJob->title);
    }
}
