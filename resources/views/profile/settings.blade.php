@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Configurações do Perfil</h2>
    <form action="{{ route('profile.updateSettings') }}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Configurações de teste Privacidade:</label>
            <select name="privacy" class="form-select">
                <option value="public">Público</option>
                <option value="private">Privado</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-check-label" style="margin-right: 25px;">Habilitar recurso teste:</label>
            <input type="checkbox" name="notifications" value="1" class="form-check-input">
        </div>

        <button type="submit" class="btn btn-primary btn-sm">Atualizar Configurações</button>
    </form>
</div>
@endsection
