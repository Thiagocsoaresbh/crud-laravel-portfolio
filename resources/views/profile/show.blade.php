@extends('layouts.app')

@section('content')
    <link href="{{ asset('css/output.css') }}" rel="stylesheet">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Perfil</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 text-md-right font-weight-bold">Nome:</div>
                            <div class="col-md-8">{{ Auth::user()->name }}</div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4 text-md-right font-weight-bold">Email:</div>
                            <div class="col-md-8">{{ Auth::user()->email }}</div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4 text-md-right font-weight-bold">Data de Criação:</div>
                            <div class="col-md-8">{{ Auth::user()->created_at->format('d/m/Y') }}</div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4 text-md-right font-weight-bold">Último Login:</div>
                            <div class="col-md-8">{{ Auth::user()->last_login_at ? Auth::user()->last_login_at->format('d/m/Y H:i') : 'N/A' }}</div>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button type="button" href="{{ route('home') }}" class="btn btn-secondary">Home</a></button>
                        <button type="button" href="{{ route('jobs.index') }}" class="btn btn-secondary">Vagas</button>
                        <button type="button" href="{{ route('applications.index') }}" class="btn btn-secondary">Inscrições</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
