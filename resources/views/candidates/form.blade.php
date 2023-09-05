@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ isset($candidate) ? route('candidates.update', $candidate->id) : route('candidates.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @if(isset($candidate))
        @method('PUT')
        @endif

        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $candidate->name ?? '') }}">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $candidate->email ?? '') }}">
        </div>

        <div class="form-group">
            <label for="phone">Telefone:</label>
            <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone', $candidate->phone ?? '') }}">
        </div>

        <div class="form-group">
            <label for="address">Endereço:</label>
            <input type="text" id="address" name="address" class="form-control" value="{{ old('address', $candidate->address ?? '') }}">
        </div>

        <div class="form-group">
            <label for="bio">Resumo Profissional:</label>
            <textarea id="bio" name="bio" class="form-control" rows="3">{{ old('bio', $candidate->bio ?? '') }}</textarea>
        </div>

        <div class="form-group">
            <label for="linkedin">LinkedIn:</label>
            <input type="url" id="linkedin" name="linkedin" class="form-control" value="{{ old('linkedin', $candidate->linkedin ?? '') }}">
        </div>

        <div class="form-group">
            <label for="cv">Anexar CV:</label>
            <input type="file" id="cv" name="cv" class="form-control-file">
        </div>

        <button type="submit" class="btn btn-primary">{{ isset($candidate) ? 'Atualizar' : 'Criar' }} Candidato</button>
    </form>
</div>
@endsection
