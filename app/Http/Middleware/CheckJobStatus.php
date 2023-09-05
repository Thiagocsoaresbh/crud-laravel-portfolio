<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Job;

class CheckJobStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $jobId = $request->route('jobId');  // Obtendo o jobId do request
        $job = Job::find($jobId);

        if (!$job) {
            return redirect()->back()->with('error', 'Vaga não encontrada.');
        }

        if ($job->status == 'Pausada' && auth()->user()->access_level == 'user') {
            return redirect()->back()->with('error', 'Vaga está pausada e não pode receber candidaturas.');
        }

        return $next($request);
    }
}
