<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/js/app.js')
</head>

<body>
    @if (!View::hasSection('hide_header'))
        <header class="header-container text-center">
            <h1 class="header-title">Rent Dress</h1>
            <p class="header-p ms-2">Bienvenido al sitio de administración "Rent Dress".</p>
        </header>

        <nav class="navbar navbar-expand-lg mx-4 my-4">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}">Inicio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="navbar-nav mx-auto">
                        <a href="{{ route('categories.index') }}" class="nav-link">Categorias</a>
                        <a href="{{ route('customers.index') }}" class="nav-link">Clientes</a>
                        <a href="{{ route('dresses.index') }}" class="nav-link">Vestidos</a>
                        <a href="{{ route('rents.index') }}" class="nav-link">Rentas</a>
                    </div>
                </div>
            </div>
        </nav>
    @endif

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    @yield('content')
</body>

</html>
