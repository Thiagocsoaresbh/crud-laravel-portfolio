<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Application;
use App\Models\Job;
use App\Models\Candidate;
use App\Models\User; // Importe o modelo User
use Illuminate\Foundation\Testing\RefreshDatabase;

class ApplicationUnitTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_create_an_application()
    {
        // Crie um usuário e um job para garantir que existam no banco de dados
        $user = User::factory()->create();
        $job = Job::factory()->create();

        $candidate = Candidate::factory()->create();

        // Criação de uma aplicação associada ao usuário e job
        $application = Application::create([
            'job_id' => $job->id,
            'candidate_id' => $candidate->id,
            'application_date' => now(),
        ]);

        // Verificações do teste
        $this->assertInstanceOf(Application::class, $application);
        $this->assertEquals($job->id, $application->job_id);
        $this->assertEquals($candidate->id, $application->candidate_id);
    }
}
