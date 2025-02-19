<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Lara</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Lara</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('albuns.index') }}">Álbuns</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('faixas.index') }}">Faixas</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('usuarios.index') }}">Usuários</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <footer class="bg-dark text-center text-white py-3 mt-5">
        &copy; 2025 Lara - Todos os direitos reservados.
    </footer>

</body>

</html>