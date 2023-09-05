@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(auth()->check())
                        <p>Bem-vindo, {{ auth()->user()->name }}!</p>

                        @if (auth()->user()->access_level == 'admin')

                            <a href="{{ route('jobs.index') }}" class="me-3">Ver Todas as Vagas</a>
                            <a href="{{ route('dashboard') }}" class="me-3">Dashboard Administrativo</a>
                            <!-- ... -->

                        @else

                            <a href="{{ route('jobs.index') }}" class="me-3">Ver Vagas</a>
                            <a href="{{ route('applications.index') }}" class="me-3">Minhas Candidaturas</a>
                            <!-- ... -->

                        @endif

                        <a href="{{ route('profile.edit') }}">Meu Perfil</a>

                    @else

                        <p>Por favor, faça login para ver o conteúdo do dashboard.</p>

                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
