@extends('layouts.app')

@section('content')
    <link href="{{ asset('css/output.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <div class="container mt-5">
        <h3>Atalhos Rápidos</h3>
        <div class="row mb-5">
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Total de Vagas</h5>
                        <p class="card-text display-4">{{ $totalJobs }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('jobs.index') }}" class="btn btn-primary">Ver Todas as Vagas</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Total de Candidatos</h5>
                        <p class="card-text display-4">{{ $totalCandidates }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('candidates.index') }}" class="btn btn-primary">Ver Todos os Candidatos</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3>Atalhos Rápidos</h3>
                <div class="list-group">
                    <a href="{{ route('profile.show') }}" class="list-group-item list-group-item-action">Meu Perfil</a>
                    <a href="{{ route('applications.index') }}" class="list-group-item list-group-item-action">Minhas Inscrições</a>
                    <a href="{{ route('profile.settings') }}" class="list-group-item list-group-item-action">Configurações</a>
                </div>
            </div>
        </div>
    </div>
@endsection
