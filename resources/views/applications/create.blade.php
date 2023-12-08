@extends('layouts.app')

@section('content')

<div class="container bg-dark text-light p-4">
    <h2 class="mb-4">Criar nova inscrição</h2>
    <div class="container">
        <main>
            <form action="{{ route('applications.store') }}" method="POST">
                @csrf

                @if(Auth::user()->access_level == 'admin')
                    <div class="form-group">
                        <label for="candidate_id">Candidato</label>
                        <select class="form-control" id="candidate_id" name="candidate_id" required>
                            @foreach($candidates as $candidate)
                                <option value="{{ $candidate->id }}">{{ $candidate->name }}</option>
                            @endforeach
                        </select>
                    </div>
                @else
                    <input type="hidden" name="candidate_id" value="{{ Auth::id() }}">
                @endif

                <div class="form-group">
                    <label for="job_id">Vaga</label>
                    <select class="form-control" id="job_id" name="job_id" required>
                        @foreach($jobs as $job)
                            <option value="{{ $job->id }}">{{ $job->title }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="cover_letter">Carta de Apresentação</label>
                    <textarea class="form-control" id="cover_letter" name="cover_letter" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar Inscrição</button>
            </form>
        </main>
    </div>
</div>

@endsection
