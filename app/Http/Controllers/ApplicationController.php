<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Job;
use App\Models\Candidate; // Inclua isto apenas se você tiver um modelo Candidate

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::all();
        return view('applications.index', compact('applications'));
    }

    public function create()
    {
        $jobs = Job::all();
        $candidates = Candidate::all();
        return view('applications.create', compact('jobs', 'candidates'));
    }

    public function store(Request $request)
    {
        $application = Application::create($request->all());
        return redirect()->route('applications.index')->with('status', 'Inscrição criada com sucesso!');
    }

    public function show(Application $application)
    {
        return view('applications.show', compact('application'));
    }

    public function edit(Application $application)
    {
        $jobs = Job::all();
        $candidates = Candidate::all(); // Inclua isto apenas se você tiver um modelo Candidate
        return view('applications.edit', compact('application', 'jobs', 'candidates'));
    }

    public function update(Request $request, Application $application)
    {
        $application->update($request->all());
        return redirect()->route('applications.index')->with('status', 'Inscrição atualizada com sucesso!');
    }

    public function destroy(Application $application)
    {
        $application->delete();
        return redirect()->route('applications.index')->with('status', 'Inscrição excluída com sucesso!');
    }
}
