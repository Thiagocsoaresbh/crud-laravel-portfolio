@extends('layouts.app')

@section('content')
<div class="container bg-dark text-light p-4">
    <h2 class="mb-4">Editar Vaga</h2>
    <form action="{{ route('jobs.update', $job->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Título:</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ $job->title }}">
        </div>

        <div class="form-group">
            <label for="description">Descrição:</label>
            <textarea id="description" name="description" class="form-control" rows="4">{{ $job->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="type">Tipo:</label>
            <select id="type" name="type" class="form-control">
                <option value="CLT" {{ $job->type == 'CLT' ? 'selected' : '' }}>CLT</option>
                <option value="Pessoa Jurídica" {{ $job->type == 'Pessoa Jurídica' ? 'selected' : '' }}>Pessoa Jurídica</option>
                <option value="Freelancer" {{ $job->type == 'Freelancer' ? 'selected' : '' }}>Freelancer</option>
            </select>
        </div>

        <div class="form-group">
            <label for="status">Status:</label>
            <select id="status" name="status" class="form-control">
                <option value="Ativa" {{ $job->status == 'Ativa' ? 'selected' : '' }}>Ativa</option>
                <option value="Pausada" {{ $job->status == 'Pausada' ? 'selected' : '' }}>Pausada</option>
                <option value="Encerrada" {{ $job->status == 'Encerrada' ? 'selected' : '' }}>Encerrada</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
@endsection
