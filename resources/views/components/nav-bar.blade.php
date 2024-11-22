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