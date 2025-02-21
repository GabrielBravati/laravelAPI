<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Página Inicial')</title>

    <!-- Link para o Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="{{ asset('css/Loginpage.css') }}"-->
    <!-- Outros estilos ou fontes podem ser adicionados aqui -->
</head>

<body>
    <!-- Barra de navegação (Navbar) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">Minha Plataforma</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('albuns.index') }}">Álbuns</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('faixas.index') }}">Faixas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('usuarios.index') }}">Usuários</a>
                    </li>
                    <!-- Se o usuário estiver autenticado -->
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">Sair</a>
                        </li>
                    @endauth
                    <!-- Se o usuário não estiver autenticado -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <!-- Conteúdo principal da página -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Link para o Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka1zNe6W3r0lODQ81LsITKvQUMcmK5toX+gqk71G0h5Tk6Z26WQAAhHbnK4/fK8gs"
        crossorigin="anonymous"></script>
</body>

</html>