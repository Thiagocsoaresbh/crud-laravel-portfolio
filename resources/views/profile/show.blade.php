@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalhes do Perfil</h2>
    <p><strong>Nome:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>

</div>
@endsection
