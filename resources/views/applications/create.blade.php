<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <div id="app">
        <main class="py-4">
            <div class="container">
                @section('content')
                    <h2>Criar nova inscrição</h2>

                    <form action="{{ route('applications.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="candidate_id">Candidato</label>
                            <select class="form-control" id="candidate_id" name="candidate_id" required>
                                @foreach($candidates as $candidate)
                                    <option value="{{ $candidate->id }}">{{ $candidate->name }}</option>
                                @endforeach
                            </select>
                        </div>

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
                @endsection
            </div>
        </main>

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <!-- Add your navigation links here -->
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <!-- Link para o perfil do usuário -->
                                    <a class="dropdown-item" href="{{ route('profile.show') }}">Meu Perfil</a>

                                    <!-- Link para configurações do perfil do usuário -->
                                    <a class="dropdown-item" href="{{ route('profile.settings') }}">Configurações</a>

                                    <!-- Link para as inscrições do usuário -->
                                    <a class="dropdown-item" href="{{ route('applications.index') }}">Minhas Inscrições</a>

                                    <div class="dropdown-divider"></div> <!-- separador -->

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>

                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                @section('content')
                    <h2>Criar nova inscrição</h2>

                    <form action="{{ route('applications.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="job_id">Vaga</label>
                            <select class="form-control" id="job_id" name="job_id" required>
                                <!-- <option value="ID_DO_JOB">Nome do Job</option> -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cover_letter">Carta de Apresentação</label>
                            <textarea class="form-control" id="cover_letter" name="cover_letter" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar Inscrição</button>
                    </form>
                @endsection
            </div>
        </main>
    </div>
</body>
</html>
