<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::paginate(10);
        return response()->json($jobs); // Retorna os jobs como JSON
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'type' => 'required|in:CLT,Pessoa Jurídica,Freelancer',
            'status' => 'required|in:Ativa,Pausada'
        ]);

        $data['user_id'] = auth()->id();

        $job = Job::create($data);

        return response()->json($job, 201); // Retorna o job criado como JSON com código de status 201
    }

    public function show(Job $job)
    {
        return response()->json($job); // Retorna o job como JSON
    }

    public function update(Request $request, Job $job)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'type' => 'required|in:CLT,Pessoa Jurídica,Freelancer',
            'status' => 'required|in:open,paused,closed'
        ]);

        $job->update($data);

        return response()->json($job); // Retorna o job atualizado como JSON
    }

    public function destroy(Job $job)
    {
        $job->delete();

        return response()->json(['message' => 'Job deletado com sucesso']); // Retorna uma mensagem como JSON
    }
}
